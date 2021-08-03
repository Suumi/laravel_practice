<?php

namespace App\Http\Controllers;

use App\Models\Post;

class BoardController
{
    public function index() {
        $posts = Post::latest()->get();

        return view('board.index')
            ->with(['posts' => $posts]);
    }

    public function show(Post $post) {
        return view('board.show')
            ->with(['post' => $post]);
    }

    public function create() {
        return view('board.create');
    }
}
