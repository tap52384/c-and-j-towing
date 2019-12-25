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

Route::match(['get', 'post'], '/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/employment', 'EmploymentController@create')->name('employment');

Route::post('/employment', 'EmploymentController@store');

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
    $employment->state = 'NC';
    $employment->zip = '27517';
    $employment->email = 'info@candjtowingservices.com';
    $employment->phone = '1234567890';
    $employment->valid_license = false;
    return new App\Mail\EmploymentSubmitted($employment);
});

Route::get('/emails/contact', function() {
    return new App\Mail\ContactSubmitted(new App\Contact());
});

Route::get('/emails/bestbuy', function() {
    return view('emails.bestbuy');
});
