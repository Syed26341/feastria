<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('front.index');
})->name('home');

Route::get('/about', function () {
    return view('front.about');
})->name('about');

Route::get('/contact', function () {
    return view('front.contact');
})->name('contact');

Route::get('/experiences', function () {
    return view('front.experiences');
})->name('experiences');

Route::get('/gallery', function () {
    return view('front.gallery');
})->name('gallery');

Route::get('/faq', function () {
    return view('front.faq');
})->name('faq');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
