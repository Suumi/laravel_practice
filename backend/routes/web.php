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
Route::get('board/posts/{post}/edit', [BoardController::class, 'edit'])->name('board.edit')->where('post', '[0-9]+');
Route::patch('board/posts/{post}/update', [BoardController::class, 'update'])->name('board.update')->where('post', '[0-9]+');
Route::delete('board/posts/{post}/destroy', [BoardController::class, 'destroy'])->name('board.destroy')->where('post', '[0-9]+');
