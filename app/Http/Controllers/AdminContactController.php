<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $contacts = \App\Models\Contact::all() ;

        return view("contacting.index" , compact("contacts")) ;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view("contacting.create") ;

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([

            "address" => "required" ,
            "email" => "required" ,
            "mobile" => "required" ,
            "fix_1" => "required" ,
            "fix_2" => "required" ,
            "fix_2" => "required" ,
            "fax" => "required" ,

        ]) ;

        \App\Models\Contact::create($request->all()) ;

        return redirect('/admin/contacts') ;

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $contact = \App\Models\Contact::findOrFail($id) ;

        return view("contacting.edit" , compact("contact")) ;

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([

            "address" => "required" ,
            "email" => "required" ,
            "mobile" => "required" ,
            "fix_1" => "required" ,
            "fix_2" => "required" ,
            "fix_2" => "required" ,
            "fax" => "required" ,

        ]) ;

        $contact = \App\Models\Contact::findOrFail($id) ;

        $contact->address = $request->address ;
        $contact->email = $request->email ;
        $contact->mobile = $request->mobile ;
        $contact->fix_1 = $request->fix_1 ;
        $contact->fix_2 = $request->fix_2 ;
        $contact->fix_3 = $request->fix_3 ;
        $contact->fax = $request->fax ;

        $contact->save() ;

        return redirect('/admin/contacts') ;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function submit(\App\Http\Requests\ContactRequest $request) {

        Mail::to("work10@gmail.com")->send(new \App\Http\Requests\ContactRequest(
            $request->name ,
            $request->email ,
            $request->phone ,
            $request->subject ,
            $request->company ,
            $request->message
        )) ;

        return redirect("/contact") ;

    }
}
