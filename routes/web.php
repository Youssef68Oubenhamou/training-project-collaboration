<?php

use App\Http\Controllers\AdminCategoriesController;
use App\Http\Controllers\AdminClientsController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AdminExpertiseController;
use App\Http\Controllers\AdminWorksController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\UserContactController;
use App\Models\Expertise;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/home');
})->name('home');

Route::get('login', [LoginController::class, 'login'])
    ->name('login')
    ->middleware('guest');
Route::post('login', [LoginController::class, 'handle'])->name('handle')
    ->middleware('guest');
Route::post('logout', [LoginController::class, 'logout'])->name('logout')
    ->middleware('auth');

Route::get('/portfolio', [pagesController::class, 'portfolio'])->name('portfolio');

Route::get("/user/contact", [UserContactController::class, "show"])->name("contact.show");

Route::post("/user/contact/submit", [UserContactController::class, "submit"])->name("contact.submit");

Route::group(['prefix' => 'about-us'], function () {
    Route::get('/our-expertise', function () {
        $expertises = Expertise::all();
        return view("pages.about-us.1_ourExpertise", compact("expertises"));
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


Route::group(['prefix' => 'admin'], function () {
    Route::resource('/works', AdminWorksController::class);
    // ->middleware('auth');
    Route::resource('/categories', AdminCategoriesController::class);
    // ->middleware('auth');
    Route::resource('/expertises', AdminExpertiseController::class);
    // ->middleware('auth');
    Route::resource('/contacts', AdminContactController::class);
    // ->middleware('auth');
    Route::resource('/clients', AdminClientsController::class);
    // ->middleware('auth');
});
