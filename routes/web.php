<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\GitHubController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TextAnalysisController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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
    return view('contacts.contact');
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

// FEEDBACK
Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback');
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');

// SVG
Route::get('/dogs', function () {
    return view('svgs.dogs');
});

// API
Route::get('/quotes', function () {
    $quotes = cache()->remember('quotes', 60, function () {
        $response = Http::withOptions(['verify' => false])->get('https://zenquotes.io/api/quotes');
        return $response->json();
    });
    return response()->json($quotes);
});

// ANALYZE
Route::post('/analyze', [TextAnalysisController::class, 'analysis']);
Route::get('/analyze', function () {
    return view('analyze.analyze');
});

// BLOG Route
Route::get('/blog/article', [BlogController::class, 'article']);
Route::resource('/blog', BlogController::class);

// USER

Route::resource('/user', UserController::class)->except(['index']);
Route::get('user', [UserController::class, 'index'])->middleware(['auth', 'is_admin']);


// AUTH
Route::get('/login', [AuthController::class, 'loginForm']);
Route::post('/login',[AuthController::class,'login']);

//DINIS
Route::get('/kitchen', function () {
    return view('kitchen.index');
});

Route::get('/raluca', function () {
    return view('raluca.index');
});

//FARM
Route::get('/farm', function () {
    return view('farm.index');
});





// CONTACT
Route::post('/contact-submit', [ContactController::class, 'store'])->name('contact.store');
Route::get('/messages', [ContactController::class, 'viewMessages']);

//Route::post('/contact-submit', [ContactController::class, 'messages']);

