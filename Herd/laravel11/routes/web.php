<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ["nama" => "Sayid Muhammad Jundullah"]);
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact', ["email" => "Sayidmuhammad15@gmail.com"], ["instagram" => "saed.m_"]);
});
