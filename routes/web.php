<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/editor', function () {
    return view('create_article');
});

Route::get('/editor/article-slug-here', function () {
    return view('edit_article');
});

Route::get('/article/article-slug-here', function () {
    return view('article');
});

