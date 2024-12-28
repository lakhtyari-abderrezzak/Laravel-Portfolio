<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/lang/{locale}', function ($locale) {
    // Check if the requested language is available
    if (in_array($locale, ['en', 'fr', 'es', 'ar'])) {
        App::setLocale($locale);
        session()->put('locale', $locale);  // Store the selected language in the session
    }
    return redirect()->back();  // Redirect back to the previous page
});


// Contact Form Submition Route

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
