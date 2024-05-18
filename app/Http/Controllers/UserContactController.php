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

        $contact = Contact::findOrFail(1);
        $clients = Client::all();
        return view('pages.contact', compact("contact" , "clients"));
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
