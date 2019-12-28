<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactSubmitted;
use Log;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Custom error messages for the form validator
        // https://laravel.com/docs/6.x/validation#custom-error-messages
        $messages = [
            'resume_file.required' => 'Please upload your resume (Microsoft Word, PDF).',
            'dob.required' => 'Date of birth must be given in format MM/DD/YYYY.'
        ];

        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            // https://laravel.com/docs/6.x/validation#rule-email
            'email' => 'required|email:rfc',
            'phone' => 'required|numeric',
            'vehicle_year' => 'required|numeric',
            'vehicle_make' => 'required',
            'vehicle_model' => 'required',
            'message' => 'required'
        ];

        // https://laravel.com/docs/6.x/validation#quick-writing-the-validation-logic
        $validator = Validator::make(
            $request->all(),
            $rules,
            $messages
        );

        if ($validator->fails()) {
            return redirect('/contact')
                        ->withErrors($validator)
                        ->withInput();
        }

        Log::debug('Passed validation for contact form!');

        $contact = new Contact();
        foreach ($rules as $key => $value) {
            $contact->$key = $request->input($key);
        }
        $contact->save();
        $mail = new ContactSubmitted($contact);
        Mail::to($request->input('email'))
        ->cc(env('MAIL_USERNAME'))
        ->bcc(explode(',', env('MAIL_BCC_RECIPIENTS')))
        ->send($mail);

        return $this->show($contact);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view(
            'contact',
            [
                'contact' => $contact
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
