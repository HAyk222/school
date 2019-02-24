<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function show()

    {
//        lang::get('messages.Contact Information');
        return view('contact');
    }
}
