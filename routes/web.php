<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\GitHubController;
use App\Http\Controllers\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/admin/visits', [App\Http\Controllers\VisitController::class, 'index'])
//     ->name('visits.index')
//     ->middleware('auth'); // Add auth middleware to protect this page

Route::get('/admin/visits', [App\Http\Controllers\VisitController::class, 'index'])
    ->name('visits.index');

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

// BLOG Route
Route::resource('/blog', BlogController::class);



// SVG
Route::get('/dogs', function () {
    return view('svgs.dogs');
});


// CONTACT

Route::post('/contact-submit', [ContactController::class, 'store'])->name('contact.store');

