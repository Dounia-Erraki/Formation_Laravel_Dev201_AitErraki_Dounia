<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/show', function () {
    $post = [
        ["title" => "laravel"],
        ["title" => "React"]
    ];
    return view('post.show' , ["data" => $post] );
});

