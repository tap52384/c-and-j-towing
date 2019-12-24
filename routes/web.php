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
    return new App\Mail\EmploymentSubmitted(new App\Employment());
});

Route::get('/emails/contact', function() {
    return new App\Mail\ContactSubmitted(new App\Contact());
});

Route::get('/emails/bestbuy', function() {
    return view('emails.bestbuy');
});
