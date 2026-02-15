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

Route::get('/menu', function () {
    return view('front.menu');
})->name('menu');

Route::get('/reservations', function () {
    return view('front.reservations');
})->name('reservations');

Route::get('/faq', function () {
    return view('front.faq');
})->name('faq');

Route::get('/gallery', function () {
    return view('front.gallery');
})->name('gallery');

Route::get('/blogs', function () {
    return view('front.blogs');
})->name('blogs');

Route::get('/private-events', function () {
    return view('front.private-events');
})->name('private-events');

Route::get('/gift-cards', function () {
    return view('front.gift-cards');
})->name('gift-cards');

Route::get('/chefs', function () {
    return view('front.chefs');
})->name('chefs');

Route::get('/careers', function () {
    return view('front.careers');
})->name('careers');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
