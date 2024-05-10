<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $categories = \App\Models\Categorie::all() ;

        // dd($categories) ;

        return view("categories.index" , compact("categories")) ;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view("/categories/create") ;

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            "categorie_name" => "required",
        ]) ;

        \App\Models\Categorie::create($request->all()) ;

        return redirect("/admin/categories/") ;

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
        
        $categorie = \App\Models\Categorie::findOrFail($id) ;

        return view("/categories/edit" , compact("categorie")) ;

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
            "categorie_name" => "required",
        ]) ;

        $categorie = \App\Models\Categorie::findOrFail($id) ;

        $categorie->categorie_name = $request->categorie_name ;

        $categorie->save() ;

        return redirect("/admin/categories") ;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
