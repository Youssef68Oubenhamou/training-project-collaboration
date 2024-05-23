<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;

class AdminAssetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $assets = Asset::all();
        return view('admin.assets.index', compact('assets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.assets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $desc = $request->validate([
            'desc' => ['required', 'min:20']
        ]);

        Asset::create($desc);

        return to_route('our-assets.index')->with('success', 'assets discription created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Asset $asset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $asset = Asset::findOrFail($id);
        return view('admin.assets.edite', compact('asset'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'desc' => ['required', 'min:20']
        ]);

        $asset = Asset::findOrFail($id);
        $asset->desc = $request->desc;
        $asset->save();

        return to_route('our-assets.index')->with('success', 'assets discription updeted successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $asset = Asset::findOrFail($id);
        $asset->delete();
        return to_route('our-assets.index')->with('success', 'assets discription deleted successfully');
    }
}
