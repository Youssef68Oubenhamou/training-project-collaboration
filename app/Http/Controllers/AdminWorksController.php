<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Work;

class AdminWorksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $works = Work::all();

        return view("admin.index", compact("works"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories = Categorie::all();

        return view("admin.create", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "categorie_id" => "required",
            "img" => ["required", 'image'],
            "brand_name" => "required",
            "brand_description" => "required"
        ]);

        $file = $request->file("img");

        $design_name = time() . '.' . $file->getClientOriginalName();

        $file->move("uploads", $design_name);

        Work::create([
            "categorie_id" => $request->categorie_id,
            "img" => $design_name,
            "brand_name" => $request->brand_name,
            "brand_description" => $request->brand_description
        ]);
        return redirect("/admin/works");
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

        $work = Work::findOrFail($id);

        $categories = Categorie::all();

        return view("admin.edit", compact("work", "categories"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "categorie_id" => "required",
            "img" => ["required", 'image'],
            "brand_name" => "required",
            "brand_description" => "required"
        ]);

        $work = Work::findOrFail($id);

        $therequest = $request->all();

        if ($request->brand_name || $file = $request->file("img") || $request->categorie_id) {

            $name = time() . $request->file("img")->getClientOriginalName();

            $request->file("img")->move("uploads", $name);

            $therequest["img"] = $name;

            $work->update([
                "categorie_id" => $request->categorie_id,
                "img" => $name,
                "brand_name" => $request->brand_name,
                "brand_description" => $request->brand_description,
            ]);

            // $work->save() ;

        }

        return redirect("/admin/works");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
