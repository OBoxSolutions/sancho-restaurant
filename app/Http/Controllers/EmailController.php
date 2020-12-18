<?php

namespace App\Http\Controllers;

use App\Email;
use App\Mail\SentEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email',
        ]);

        Email::create($request->all());

        return redirect()->route('home');
    }
    public function send(Request $request){
        $data = $request->validate([
            'emailBody' => 'required',
        ]);

//        Mail::to('jcassola96@gmail.com')->send(new SentEmail($data));

//        $mailTo = Email::all();
//        foreach ($mailTo as $mt){
//            Mail::to($mt->email)->queue(new SentEmail($data));
//        }

        return new SentEmail($data);
    }
}
