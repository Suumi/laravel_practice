<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TopController;

Route::get('/', [TopController::class, 'index'])->name('top');
Route::get('board/index', [BoardController::class, 'index'])->name('board.index');
Route::get('board/posts/{post}', [BoardController::class, 'show'])->name('board.show')->where('post', '[0-9]+');
Route::get('board/create', [BoardController::class, 'create'])->name('board.create');
Route::post('board/store', [BoardController::class, 'store'])->name('board.store');
Route::get('board/posts/{post}/edit', [BoardController::class, 'edit'])->name('board.edit')->where('post', '[0-9]+');
Route::patch('board/posts/{post}/update', [BoardController::class, 'update'])->name('board.update')->where('post', '[0-9]+');
Route::delete('board/posts/{post}/destroy', [BoardController::class, 'destroy'])->name('board.destroy')->where('post', '[0-9]+');
Route::post('board/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store')->where('post', '[0-9]+');
Route::delete('board/comments/{comment}/destroy', [CommentController::class, 'destroy'])->name('comments.destroy')->where('comment', '[0-9]+');
