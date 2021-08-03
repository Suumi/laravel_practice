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

    public function show($id) {
        $post = Post::find($id);

        return view('board.show')
            ->with(['post' => $post]);
    }
}
