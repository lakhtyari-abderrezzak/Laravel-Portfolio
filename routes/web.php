<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('layouts.app');
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
