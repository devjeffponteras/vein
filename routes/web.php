<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dynamic', function () {
    return view('pages.dynamic');
})->name('dynamic');

Route::get('/single-news', function () {
    return view('pages.single-news');
})->name('single-news');