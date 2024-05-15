<?php

use App\Http\Controllers\pagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/home');
})->name('home');

// Route::get('/portfolio', function () {
//     return view('pages/portfolio');
// })->name('portfolio');

Route::get('/portfolio', [pagesController::class, 'portfolio'])->name('portfolio');

Route::get("/user/contact" , [\App\Http\Controllers\UserContactController::class , "show"])->name("contact.show") ;

Route::post("/user/contact/submit" , [\App\Http\Controllers\UserContactController::class , "submit"])->name("contact.submit") ;

Route::group(['prefix' => 'about-us'], function () {

    Route::get('/our-expertise', function () {

        $expertises = \App\Models\Expertise::all() ;

        return view("pages.about-us.1_ourExpertise" , compact("expertises")) ;
        
    })->name('1_aboutLink');

    Route::get('/values-and-philosophy', function () {
        return view('pages/about-us/2_valuesAndPhilosophy');
    })->name('2_aboutLink');

    Route::get('/our-assets', function () {
        return view('pages/about-us/3_ourAssets');
    })->name('3_aboutLink');

    Route::get('/technical-means', function () {
        return view('pages/about-us/4_technicalMeans');
    })->name('4_aboutLink');
});

Route::resource('/admin/works', "\App\Http\Controllers\AdminWorksController");

Route::resource('/admin/categories', "\App\Http\Controllers\AdminCategoriesController");

Route::resource('/admin/expertises', "\App\Http\Controllers\AdminExpertiseController");

Route::resource('/admin/contacts', "\App\Http\Controllers\AdminContactController");

// Route::get('/dashboard/add-new-work', function () {

//     $categories = \App\Models\Categorie::all() ;

//     return view('admin/add-new-work' , compact("categories"));

// })->name('addNewWork');
