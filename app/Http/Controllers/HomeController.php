<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function home() {
        return view("home");
    }
    
    public function about() {
        return view("about");
    }

    public function post($id) {
        $posts = [
            1 => ["title" => "laravel"],
            2 => ["title" => "React"]
        ];
        return view("post.show", ["data" => $posts[$id]]);
    }
}
