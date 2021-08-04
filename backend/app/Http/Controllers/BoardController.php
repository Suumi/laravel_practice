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
        $request->validate([
            'title' => 'required|min:3',
            'body' => 'required',
        ], [
            'title.required' => 'タイトルは必須です',
            'title.min' => ':min 文字以上入力してください',
            'body.required' => '本文は必須です',
        ]);

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

    public function update(Request $request, Post $post) {
        $request->validate([
            'title' => 'required|min:3',
            'body' => 'required',
        ], [
            'title.required' => 'タイトルは必須です',
            'title.min' => ':min 文字以上入力してください',
            'body.required' => '本文は必須です',
        ]);

        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect()->route('board.show', $post);
    }
}
