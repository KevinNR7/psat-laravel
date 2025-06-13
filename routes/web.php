<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/destinasi', function () {
    return view('destinasi');
})->name('destinasi');

Route::get('/contact', function () {
    return view('kontak');
})->name('contact');