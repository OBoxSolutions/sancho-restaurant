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

        $mailTo = Email::all();

        //For testing Gmail in prod
//        for ($i=0;$i < 10; $i++) {
//            SendEmail::dispatch('jcassola96@gmail.com', $data)->delay(Carbon::now()->addSecond(1));
//        }


        foreach ($mailTo as $address){
            SendEmail::dispatch($address, $data)->delay(Carbon::now()->addSecond(1));
        }

        return new OfferEmail($data);
    }
}
