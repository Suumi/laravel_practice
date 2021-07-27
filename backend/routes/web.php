<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\TopController@top')->name('top');
Route::get('book/list', 'App\Http\Controllers\BookController@list')->name('book.list');
Route::get('book/new', 'App\Http\Controllers\BookController@new')->name('book.new');