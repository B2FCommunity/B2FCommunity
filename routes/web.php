<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home.index');
Route::get('/event', function () {
    return view('event');
})->name('event.index');