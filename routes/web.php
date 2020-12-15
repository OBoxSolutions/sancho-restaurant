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

use App\Mail\SentEmail;
use Illuminate\Support\Facades\Mail;

Route::get('/', 'HomeController@index')->name('home');
Route::view('contact', 'contact')->name('contact');
Route::view('menu', 'menu')->name('menu');
Route::view('reserve', 'reserve')->name('reserve');

Route::view('email/create', 'email')->name('email');
Route::post('email/store', 'EmailController@store');
Route::view('email/send', 'sendEmailForm')->name('emailSend');
Route::post('email/send', 'EmailController@send');
