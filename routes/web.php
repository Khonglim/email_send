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
   // return view('emails.appointment');
    return view('emails.contact');
});

Route::resource('appointment','AppointmentController');
Route::resource('contact','ContactController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('send', 'MailController@send');



Route::get('/save', function () {
    return view('emails.save');
    
});