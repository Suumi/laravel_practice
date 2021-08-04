<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;

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

    public function store(PostRequest $request) {
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect()->route('board.index');
    }

    public function edit(Post $post) {
        return view('board.edit')
            ->with(['post' => $post]);
    }

    public function update(PostRequest $request, Post $post) {
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect()->route('board.show', $post);
    }
}
