<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HitblowController
{
    private $goal_number = 9314;

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
        $hit = 0;
        $blow = 0;
        $estimated = $request->number;

        $array_estimated = str_split($estimated);
        $array_goalNum = str_split($this->goal_number);

        foreach ($array_estimated as $index => $estimatedElem) {
            if (str_split($this->goal_number)[$index] == $estimatedElem) {
                $hit++;
            }

            if (in_array($estimatedElem, $array_goalNum)) {
                $blow++;
            }
        }

        if ($estimated == $this->goal_number) {
            return view(
                'hitblow.clear',
                ['number' => $estimated]
            );
        }

        return view(
            'hitblow.result',
            [
                'hit' => $hit,
                'blow' => $blow,
                'number' => $estimated,
            ]
        );
    }

    public function clear()
    {
        return view('hitblow.clear');
    }
}
