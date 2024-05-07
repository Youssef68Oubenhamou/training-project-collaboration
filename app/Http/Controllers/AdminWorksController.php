<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminWorksController extends Controller
{
    
    public function index() {

        $works = \App\Models\Work::all() ;
        
        return view("admin.dash" , compact("works")) ;

    }

    public function create(AdminWorksRequest $request) {

        

    }

}
