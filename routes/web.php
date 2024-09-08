<?php

use App\Http\Controllers\GitHubController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/hero', function () {
    return view('pages.hero');
});

Route::get('/about', function() {
    return view('pages.about');
});

Route::get('/services', function () {
    return view('pages.services');
});

// Route::get('/works', function () {
//     return view('pages.works');
// })->name('works');

Route::get('/works', [GitHubController::class, 'index'])->name('works');

Route::get('contact', function (){
    return view('pages.contact');
});

Route::resource('projects', ProjectController::class);
