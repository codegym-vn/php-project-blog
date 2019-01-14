<?php

namespace App\Http\Controllers;

use App\Blog;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('home');
    }

    public function list()
    {
        $blogs = Blog::all();
        return view('user.blog', compact('blogs'));
    }
}
