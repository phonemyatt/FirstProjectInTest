<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/posts/create', function () {
    return view('create');
})->name('posts.create');

Route::post('/posts', function (Request $request) {
    $request->input('title');

    return redirect()
        ->route('posts.create');
})->name('posts.store');
