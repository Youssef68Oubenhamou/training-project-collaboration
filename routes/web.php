<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/home');
})->name('home');

Route::get('/portfolio', function () {
    return view('pages/portfolio');
})->name('portfolio');

Route::get('/contact', function () {
    return view('pages/contact');
})->name('contact');

Route::group(['prefix' => 'about-us'], function () {
    Route::get('/our-expertise', function () {
        return view('pages/about-us/1_ourExpertise');
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

Route::get('/dashboard', function () {
    return view('admin/dash');
})->name('dashboard');

Route::get('/dashboard/add-new-work', function () {
    return view('admin/add-new-work');
})->name('addNewWork');
