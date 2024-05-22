<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class AdminClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $clients = Client::all();

        return view("clients.index", compact("clients"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view("clients.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([

            "client_name" => "required",
            "client_logo" => "required"

        ]);

        $file = $request->file("client_logo");

        $name = time() . $file->getClientOriginalName();

        $file->move("client_uploads", $name);

        $request->client_logo = $name;

        Client::create([

            "client_name" => $request->client_name,
            "client_logo" => $request->client_logo

        ]);

        return redirect("/admin/clients");
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

        $client = Client::findOrFail($id);

        return view("clients.edit", compact("client"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([

            "client_name" => "required",
            "client_logo" => "required"

        ]);

        $file = $request->file("client_logo");

        $name = time() . $file->getClientOriginalName();

        $file->move("client_uploads", $name);

        $request->client_logo = $name;

        $client = Client::findOrFail($id);

        $client->client_name = $request->client_name;

        $client->client_logo = $request->client_logo;

        $client->save();

        return redirect("/admin/clients");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
        return redirect("/admin/clients")->with('success', 'client deleted successfully');
    }
}
