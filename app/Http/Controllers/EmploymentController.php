<?php

namespace App\Http\Controllers;

use App\Employment;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Log;
use App\Mail\EmploymentSubmitted;

class EmploymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employment');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Log::debug('all request values: ', $request->all());
        Log::debug('is a file added: ' . ($request->hasFile('resume_file') === true ? 'true' : 'false'));
        Log::debug('file_type: ' . get_class($request->file('resume_file')));
        Log::debug('is a valid file: ' . $request->file('resume_file') !== null && $request->file('resume_file')->isValid());
        // $request->file returns an instance of Illuminate\Http\UploadedFile
        // https://laravel.com/api/6.x/Illuminate/Http/UploadedFile.html
        Log::debug('client extension: ' . $request->file('resume_file')->clientExtension());
        Log::debug('file extension: ' . $request->file('resume_file')->extension());
        Log::debug('mime type: ' . $request->file('resume_file')->getMimeType());
        Log::debug('real path: ' . $request->file('resume_file')->getRealPath());
        Log::debug('file name: ' . $request->file('resume_file')->getClientOriginalName());

        // Custom error messages for the form validator
        // https://laravel.com/docs/6.x/validation#custom-error-messages
        $messages = [
            'resume_file.required' => 'Please upload your resume (Microsoft Word, PDF).',
            'dob.required' => 'Date of birth must be given in format MM/DD/YYYY.'
        ];

        // https://laravel.com/docs/6.x/validation#quick-writing-the-validation-logic
        $validator = Validator::make(
            $request->all(),
            [
                'position_id' => 'required|exists:App\Position,id',
                'first_name' => 'required',
                'last_name' => 'required',
                'address_1' => 'required',
                'city' => 'required',
                'state_id' => 'required',
                'zip' => 'required',
                // https://laravel.com/docs/6.x/validation#rule-email
                'email' => 'required|email:rfc',
                'phone' => 'required|numeric',
                'dob' => 'required|date_format:m/d/Y',
                'valid_license' => 'required|boolean',
                // https://laravel.com/docs/6.x/validation#rule-mimes
                // https://svn.apache.org/repos/asf/httpd/httpd/trunk/docs/conf/mime.types
                'resume_file' => 'required|file|mimes:doc,docx,pdf'
            ],
            $messages
        );

        if ($validator->fails()) {
            return redirect('/employment')
                        ->withErrors($validator)
                        ->withInput();
        }

        Log::debug('Passed validation for employment form!');

        // Create an Employment object; it will be:
        // 1. Saved to the database
        // 2. Mailed to the customer, owner, and developers
        $employment = new Employment();
        $fields = [
            'position_id',
            'first_name',
            'last_name',
            'address_1',
            'address_2',
            'city',
            'state_id',
            'zip',
            'email',
            // 'phone',
            'dob',
            'valid_license',
            // 'resume_file',
            // 'learned_about_us'
        ];
        foreach ($fields as $field) {
            $employment->$field = $request->input($field);
        }
        // The Mailable EmploymentSubmitted needs to accept a second parameter
        // for the uploaded resume file
        // $employment->resume_file = $request->file('resume_file');
        $employment->learned_about_us = implode(', ', $request->input('learned_about_us', ''));
        # Removes all non-numeric
        $employment->phone = preg_replace("/[^0-9]/", "", $request->input('phone', ''));

        $employment->save();

        // get the class type for the file
        // https://laravel.com/docs/6.x/requests#retrieving-uploaded-files
        $resumeFile = $request->file('resume_file');
        Log::debug('resume file php type: ' . get_class($resumeFile));

        $mail = new EmploymentSubmitted($employment, $resumeFile);
        // TODO: Uncomment this statement to actually send mail.
        Mail::to($request->input('email'))
        ->cc(env('MAIL_USERNAME'))
        ->bcc(explode(',', env('MAIL_BCC_RECIPIENTS')))
        ->send($mail);

        return $this->show($employment);
    }

    /**
     * Display the specified resource.
     * This is used for showing the page once the form was submitted
     * successfully.
     *
     * @param  \App\Employment  $employment
     * @return \Illuminate\Http\Response
     */
    public function show(Employment $employment)
    {
        return view(
            'employment',
            [
                'employment' => $employment
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employment  $employment
     * @return \Illuminate\Http\Response
     */
    public function edit(Employment $employment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employment  $employment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employment $employment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employment  $employment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employment $employment)
    {
        //
    }
}
