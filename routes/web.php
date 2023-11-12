<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return view('master');
})->name('home');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/employment', 'EmploymentController@create')->name('employment');

Route::post('/employment', 'EmploymentController@store');

Route::get('/contact', 'ContactController@create')->name('contact');

Route::post('/contact', 'ContactController@store');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/emails/employment', function() {
    $employment = new App\Employment();
    $employment->first_name = 'Jane';
    $employment->last_name = 'Smith';
    $employment->address_1 = '123 Anywhere Street';
    $employment->address_2 = 'APT 456';
    $employment->city = 'Chapel Hill';
    $employment->state = App\State::find(38);
    $employment->zip = '27517';
    $employment->email = 'candjtowingnc@gmail.com';
    $employment->phone = '1234567890';
    $employment->valid_license = false;
    return new App\Mail\EmploymentSubmitted($employment);
});

Route::get('/emails/contact', function() {
    return new App\Mail\ContactSubmitted(new App\Contact());
});

Route::get('/emails/bestbuy', function() {
    $to_name = 'receiver';
    $to_email = 'tap52384@gmail.com';
    $data = array('name' => 'sender name', 'body' => 'a test email');
    Mail::send('emails.bestbuy', $data, function($message) use ($to_name, $to_email) {

            $message->to($to_email, $to_name)
            ->subject('Laravel Test Mail');
            $message->from('candjtowingnc@gmail.com', 'Test Mail');
    });

    return view('emails.bestbuy');
});

Route::get('/email/settings', function() {
    var_dump(Config::get('mail'));
    echo '<p>mail port: ' . config('mail.port') . '</p>';
    echo '<p>mail driver: ' . config('mail.driver') . '</p>';
    echo config('mail.username');
    exit;
});
