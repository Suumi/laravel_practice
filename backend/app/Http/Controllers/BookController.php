<?php

namespace App\Http\Controllers;

class BookController
{
    public function list() {
        return view('book.list');
    }

    public function new() {
        return view('book.new');
    }
}
