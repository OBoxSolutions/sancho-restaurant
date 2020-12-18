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

use App\Mail\OfferEmail;
use Illuminate\Support\Facades\Mail;

Route::get('/', 'HomeController@index')->name('home');
Route::view('contact', 'contact')->name('contact');
Route::view('menu', 'menu')->name('menu');
Route::view('visit', 'visit')->name('visit');

Route::view('email/create', 'subscribe')->name('email');
Route::post('email', 'EmailController@store')->name('email.store');
Route::view('email/send', 'sendEmailForm')->name('emailSend');
Route::post('email/send', 'EmailController@send');

// The following lines of code can be used to see the email, uncomment for that
// Route::get('mailable', function () {
//     $invoice = App\Invoice::find(1);

//     return new App\Mail\InvoicePaid($invoice);
// });
