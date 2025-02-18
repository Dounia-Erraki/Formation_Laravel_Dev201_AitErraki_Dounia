<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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


// Route::get('/home',[HomeController::class, "home"] );
Route::get('/home',"HomeController@home");