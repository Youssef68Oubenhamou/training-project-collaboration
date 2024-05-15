<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

class UserContactController extends Controller
{
    
    public function show() {

        $contact = \App\Models\Contact::findOrFail(1) ;
        
        return view('pages.contact' , compact("contact"));

    }

    public function submit(\App\Http\Requests\ContactRequest $request) {

        Mail::to("oubenhamouy10@gmail.com")->send(new \App\Mail\ContactMail(
            $request->name ,
            $request->email ,
            $request->phone ,
            $request->sub ,
            $request->company ,
            $request->message
        )) ;

        return redirect("/user/contact") ;

    }

}
