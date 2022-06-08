<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HitblowController
{
    public function index()
    {
        return view('hitblow.index');
    }

    public function game()
    {
        return view('hitblow.game');
    }

    public function result()
    {
        return view('hitblow.result');
    }

    public function clear()
    {
        return view('hitblow.clear');
    }
}
