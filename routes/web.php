<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/about', function() {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.work');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/mae', function () {
    return 'Maezinha te amo';
});

