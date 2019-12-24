<?php

namespace App\Http\Controllers;

use App\Employment;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
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
        // TODO: Make sure to link the position and employment models

        // https://laravel.com/docs/6.x/validation#quick-writing-the-validation-logic
        $validatedData = $request->validate([
            'desired-position' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'address_1' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'email' => 'required|max:255|email',
            'phone' => 'required|numeric',
            'dob' => 'required|date_format:m/d/Y',
            'valid_license' => 'required|boolean',
            'resume_file' => 'required'
        ]);

        Log::debug('Passed validation for employment form!');

        // Create an Employment object; it will be:
        // 1. Saved to the database
        // 2. Mailed to the customer, owner, and developers
        $employment = new Employment();
        $fields = [
            'first_name',
            'last_name',
            'address_1',
            'address_2',
            'city',
            'state',
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

        $mail = new EmploymentSubmitted($employment);
        // TODO: Uncomment this statement to actually send mail.
        // Mail::to('tap52384@gmail.com')
        // ->cc('carlos.dsanford@gmail.com')
        // ->send($mail);

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
