<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index() 
    {
        dd(request('index'));
        return view('index', [
            "judul" => "All Posts", 
            "active" => 'posts',
            "posts" => Post::latest()->get()
        ]);
    }
}
