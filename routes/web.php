<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/gents', function () {
    return view('gents');
})->name('gents.index');

Route::get('/ladies', function () {
    return view('ladies');
})->name('ladies.index');

Route::get('/accessories', function () {
    return view('accessories');
})->name('accessories.index');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

// ✅ Single Role-Based Dashboard View
Route::get('/dashboard', function () {
    return view('dashboard'); // This blade handles role-based display
})->middleware(['auth'])->name('dashboard');

// ✅ Laravel Breeze authentication
require __DIR__.'/auth.php';
