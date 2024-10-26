<?php

use App\Http\Controllers\GitHubController;
use App\Http\Controllers\ProjectController;
use Illuminate\Http\Request;
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

Route::get('/tropicalBeauty', function() {
    return view('pages.tropicalBeauty');
});

// Route::get('/works', [GitHubController::class, 'index'])->name('works');
// Route::get('/workss', [GitHubController::class, 'index'])->name('workss');

Route::get('/works', function(Request $request, GitHubController $controller) {
    return $controller->index($request, 'pages.works');
})->name('works');

Route::get('/workss', function(Request $request, GitHubController $controller) {
    return $controller->index($request, 'pages.workss');
})->name('workss');

Route::get('contact', function (){
    return view('pages.contact');
});

Route::resource('projects', ProjectController::class);
