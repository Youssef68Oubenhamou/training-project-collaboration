<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminExpertiseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $expertises = \App\Models\Expertise::all() ;

        return view("expertise.index" , compact('expertises')) ;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view("expertise.create") ;

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([

            "creation_infos" => "required" ,
            "description_infos" => "required"

        ]) ;

        \App\Models\Expertise::create([
            "creation_infos" => $request->creation_infos ,
            "description_infos" => $request->description_infos
        ]) ;

        return redirect("/admin/works") ;

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

        $expertise = \App\Models\Expertise::findOrFail($id) ;

        return view("expertise.edit" , compact("expertise")) ;
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([

            "creation_infos" => "required" ,
            "description_infos" => "required"

        ]) ;


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}