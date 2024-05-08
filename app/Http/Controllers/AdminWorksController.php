<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminWorksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {

        $works = \App\Models\Work::all() ;
        
        return view("admin.index" , compact("works")) ;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $categories = \App\Models\Categorie::all() ;

        return view("admin.create" , compact("categories")) ;

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(\App\Http\Requests\AdminWorksRequest $request)
    {

        $file = $request->file("path") ;
        
        $design_name = time() . $file->getClientOriginalName() ;

        $file->move("uploads" , $design_name) ;

        \App\Models\Work::create([
            "categorie_id" => $request->categorie_id ,
            "path" => $design_name ,
            "brand_name" => $request->brand_name
        ]) ;

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
