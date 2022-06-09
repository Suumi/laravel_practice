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

    public function result(Request $request)
    {
        $number = $request->number;

        return view('hitblow.result', ['number' => $number]);
    }

    public function clear()
    {
        return view('hitblow.clear');
    }
}
