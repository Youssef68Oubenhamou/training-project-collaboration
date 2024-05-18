<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Work;
use App\Models\Client;

class pagesController extends Controller
{
    public function portfolio()
    {

        $categories = Categorie::all();
        $works = Work::all();
        $clients = Client::all();

        return view('pages/portfolio', compact("categories", 'works' , "clients"));
    }
}
