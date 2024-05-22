<?php

namespace App\Http\Controllers;

use App\Models\Expertise;
use Illuminate\Http\Request;

class AdminExpertiseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $expertises = Expertise::all();

        return view("expertise.index", compact('expertises'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view("expertise.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([

            "creation_infos" => "required",
            "description_infos" => "required"

        ]);

        Expertise::create([
            "creation_infos" => $request->creation_infos,
            "description_infos" => $request->description_infos
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

        $expertise = Expertise::findOrFail($id);

        return view("expertise.edit", compact("expertise"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([

            "creation_infos" => "required",
            "description_infos" => "required"

        ]);

        $expertise = Expertise::findOrFail($id);

        $expertise->creation_infos = $request->creation_infos;

        $expertise->description_infos = $request->description_infos;

        $expertise->save();

        return redirect("/admin/expertises")->with('success', 'expertise informations updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $expertise = Expertise::findOrFail($id);
        $expertise->delete();
        return redirect("/admin/expertises")->with('success', 'expertise informations deleted successfully');
    }
}
