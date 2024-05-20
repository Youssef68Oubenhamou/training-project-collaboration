<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Models\Contact;
use App\Models\Client;
use Illuminate\Support\Facades\Mail;

class UserContactController extends Controller
{

    public function show()
    {

        $contacts = Contact::all() ;
        $clients = Client::all() ;
        return view('pages.contact', compact("contacts" , "clients")) ;

    }

    public function submit(ContactRequest $request)
    {

        Mail::to("admirablea42@gmail.com")->send(new ContactMail(
            $request->name,
            $request->email,
            $request->phone,
            $request->sub,
            $request->company,
            $request->message
        ));

        return redirect("/user/contact");
    }
}
