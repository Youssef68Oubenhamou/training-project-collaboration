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
        
        $work = \App\Models\Work::findOrFail($id) ;

        $categories = \App\Models\Categorie::all() ;

        return view("admin.edit" , compact("work" , "categories")) ;

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(\App\Http\Requests\AdminWorksRequest $request, string $id)
    {
        
        $work = \App\Models\Work::findOrFail($id) ;

        $therequest = $request->all() ;

        if ($request->brand_name || $file = $request->file("path") || $request->categorie_id) {

            $name = time() . $request->file("path")->getClientOriginalName() ;

            $request->file("path")->move("uploads" , $name) ;

            $therequest["path"] = $name ;
            
            $work->update([
                "brand_name" => $request->brand_name ,
                "path" => $name ,
                "categorie_id" => $request->categorie_id
            ]) ;

            // $work->save() ;

        }

        return redirect("/admin/works") ;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
