<?php

namespace App\Http\Controllers;

use App\Email;
use Illuminate\Http\Request;

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
}
