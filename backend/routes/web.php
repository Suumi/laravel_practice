<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('board/index', [BoardController::class, 'index'])->name('board.index');
Route::get('board/posts/{post}', [BoardController::class, 'show'])->name('board.show')->where('post', '[0-9]+');
Route::get('board/create', [BoardController::class, 'create'])->name('board.create');
Route::post('board/store', [BoardController::class, 'store'])->name('board.store');
