<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController
{
    public function index()
    {
        return view('blog.index');
    }
}
