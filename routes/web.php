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
    return view('emails.send');
});
Route::get('Mail', function () {

	
    Mail::to('tr.narathorn@nioachievers.com')->send(new \App\Mail\HDTutoMail());
    dd("Email is Send.");

});

Route::resource('email','EmailController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('send', 'MailController@send');