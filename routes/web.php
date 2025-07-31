<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::view('/home', 'home')->name('home');
Route::view('/contact', 'contact')->name('contact');
Route::view('/about', 'about')->name('about');
Route::view('/article', 'article')->name('article');