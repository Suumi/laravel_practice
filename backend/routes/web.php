<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('board/index', [BoardController::class, 'index'])->name('board.index');
Route::get('board/posts/{post}', [BoardController::class, 'show'])->name('board.show');
