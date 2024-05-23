<?php

use App\Http\Controllers\AdminAssetController;
use App\Http\Controllers\AdminCategoriesController;
use App\Http\Controllers\AdminClientsController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AdminExpertiseController;
use App\Http\Controllers\AdminWorksController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\UserContactController;
use App\Models\Asset;
use App\Models\Expertise;
use App\Models\Client;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $clients = Client::all();
    $contacts = Contact::all();

    return view('pages/home', compact("clients", "contacts"));
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
        $clients = Client::all();
        $contacts = Contact::all();
        return view("pages.about-us.1_ourExpertise", compact("expertises", "clients", 'contacts'));
    })->name('1_aboutLink');

    Route::get('/values-and-philosophy', function () {

        $clients = Client::all();
        $contacts = Contact::all();
        return view('pages/about-us/2_valuesAndPhilosophy', compact("clients", 'contacts'));
    })->name('2_aboutLink');

    Route::get('/our-assets', function () {

        $clients = Client::all();
        $contacts = Contact::all();
        $assets = Asset::all();
        return view('pages/about-us/3_ourAssets', compact("clients", 'contacts', 'assets'));
    })->name('3_aboutLink');

    Route::get('/technical-means', function () {

        $clients = Client::all();
        $contacts = Contact::all();
        return view('pages/about-us/4_technicalMeans', compact("clients", 'contacts'));
    })->name('4_aboutLink');
});


Route::group(['prefix' => 'admin', "middleware" => "auth"], function () {

    Route::resource('/works', AdminWorksController::class);

    Route::resource('/categories', AdminCategoriesController::class);

    Route::resource('/expertises', AdminExpertiseController::class);
    Route::resource('/our-assets', AdminAssetController::class);

    Route::resource('/contacts', AdminContactController::class);

    Route::resource('/clients', AdminClientsController::class);
});
