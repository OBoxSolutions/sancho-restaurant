<?php

namespace App\Http\Controllers;

use App\Email;
use App\Jobs\SendEmail;
use App\Mail\OfferEmail;
use Carbon\Carbon;
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

//        Mail::to('jcassola96@gmail.com')->send(new OfferEmail($data));

        $mailTo = Email::all();
        foreach ($mailTo as $address){
//            Mail::to($mt->email)->queue(new OfferEmail($data));
            SendEmail::dispatch($address, $data)->delay(Carbon::now()->addSecond(1));
        }

        return new OfferEmail($data);
    }
}
