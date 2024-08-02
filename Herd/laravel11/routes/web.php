<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ["title" => "Home"]);
});

Route::get('/about', function () {
    return view('about', ["title" => "About"], ["nama" => "Sayid Muhammad Jundullah"]);
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/posts', function () {
    return view('posts', ["title" => "Blog", "posts" => Post::all()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user}', function (User $user) {
    return view('posts', ['title' => 'Articles by '. $user->name, 'posts' => $user->posts]);
});

Route::get('/contact', function () {
    return view('contact', ["title" => "Contact"]);
});
