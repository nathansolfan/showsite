<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return 'testing';
});

Route::get('/mae', function () {
    return 'Maezinha te amo';
});

