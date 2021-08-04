<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function store(Request $request) {
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect()->route('board.index');
    }
}
