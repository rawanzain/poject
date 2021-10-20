<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function store(Request $request){
        Contact::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,

        ]);

        return redirect()->route('contact.thanks');


    }

    public function getthank(){
     return view('front.thanks1');
    }
















}


