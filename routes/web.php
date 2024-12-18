<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('articles/{article}', [ArticleController::class, 'show'])->name('articles.show');

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
