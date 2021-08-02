<?php

namespace App\Http\Controllers;

class BoardController
{
    private $posts = [
        'Title A',
        'Title B',
        'Title C',
    ];

    public function index() {
        return view('board.index')
            ->with(['posts' => $this->posts]);
    }

    public function show($id) {
        return view('board.show')
            ->with(['post' => $this->posts[$id]]);
    }
}
