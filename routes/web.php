<?php

use App\Http\Controllers\FeedbackController;
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

Route::get('/feedback', function() {
    return view('pages.feedback');
})->name('feedback');

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('contact', function (){
    return view('pages.contact');
});

Route::get('portfolio', function (){
    return view('pages.portfolio');
});

Route::get('portfolio2', function (){
    return view('pages.portfolio2');
});

// Route::get('/works', [GitHubController::class, 'index'])->name('works');
// Route::get('/workss', [GitHubController::class, 'index'])->name('workss');

Route::get('/works', function(Request $request, GitHubController $controller) {
    return $controller->index($request, 'pages.works');
})->name('works');

Route::get('/workss', function(Request $request, GitHubController $controller) {
    return $controller->index($request, 'pages.workss');
})->name('workss');

Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback');
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');


Route::resource('projects', ProjectController::class);
Route::get('/projects/dogapi1', [ProjectController::class, 'dogApi1'])->name('projects.dogapi1');
Route::get('/projects/dogapi2', [ProjectController::class, 'dogApi2'])->name('projects.dogapi2');


// SVG
Route::get('/dogs', function () {
    return view('svgs.dogs');
});
