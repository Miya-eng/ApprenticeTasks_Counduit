<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ArticleController::class, 'index'])->name('home');

Route::get('/editor', [ArticleController::class, 'create'])->name('editor');

Route::post('/editor', [ArticleController::class, 'store'])->name('editor.store');

Route::get('/editor/article-slug-here', function () {
    return view('edit_article');
});

Route::get('/article/article-slug-here', function () {
    return view('article');
});

