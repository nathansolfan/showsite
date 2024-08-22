<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/about', function() {
    return view('pages.about');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/works', function () {
    return view('pages.works');
});

