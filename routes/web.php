<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\GitHubController;
use App\Http\Controllers\LoadUp\BookingController;
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

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/feedback', function () {
    return view('pages.feedback');
})->name('feedback');

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('contact', function () {
    return view('contacts.contact');
});

Route::get('portfolio', function () {
    return view('pages.portfolio');
});

Route::get('portfolio2', function () {
    return view('pages.portfolio2');
});

// Route::get('/works', [GitHubController::class, 'index'])->name('works');
// Route::get('/workss', [GitHubController::class, 'index'])->name('workss');

Route::get('/works', function (Request $request, GitHubController $controller) {
    return $controller->index($request, 'pages.works');
})->name('works');

Route::get('/workss', function (Request $request, GitHubController $controller) {
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
Route::post('user/{user}/make-admin', [UserController::class, 'makeAdmin']);
Route::get('user/{user}/blogs', [UserController::class, 'blogs']);


// AUTH
Route::get('/login', [AuthController::class, 'loginForm']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

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

// LOAD UP
Route::get('/loadup', [BookingController::class, 'index']);
Route::get('/loadup/removals', [BookingController::class, 'removalsForm']);
Route::get('/loadup/recycling', [BookingController::class, 'recyclingForm']);
Route::get('/loadup/additional', [BookingController::class, 'additionalServiceForm']);

Route::post('/bookings', [BookingController::class, 'store'])->middleware('auth');
Route::get('/loadup/bookings', [BookingController::class, 'bookings'])->middleware('auth');
Route::get('/loadup/show/{id}', [BookingController::class, 'show'])->middleware('auth');
Route::post('/user/{booking}/change-status', [UserController::class, 'changeStatus']);
//EDIT
Route::get('/loadup/{booking}/edit', [BookingController::class, 'edit']);
Route::post('/loadup/{booking}/update', [BookingController::class, 'update']);
Route::post('/loadup/{booking}/delete', [BookingController::class, 'destroy']);


// CONTACT
Route::post('/contact-submit', [ContactController::class, 'store'])->name('contact.store');
Route::get('/messages', [ContactController::class, 'viewMessages']);

//Route::post('/contact-submit', [ContactController::class, 'messages']);

