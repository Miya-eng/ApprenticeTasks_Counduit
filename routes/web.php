<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;

// Route::resource('article', TodoController::class);ルートが自動で定義される

Route::get('/', [ArticleController::class, 'index'])->name('home');

Route::get('/editor', [ArticleController::class, 'create'])->name('editor');

Route::post('/editor', [ArticleController::class, 'store'])->name('editor.store');

Route::get('/article/{id}/edit', [ArticleController::class, 'edit'])->name('article.edit');

Route::put('/article/{id}', [ArticleController::class, 'update'])->name('article.update');

Route::get('/article/{id}/article-slug-here', [ArticleController::class, 'show'])->name('article');

Route::delete('/article/{id}', [ArticleController::class, 'destroy'])->name('article.delete');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [AuthenticationController::class, 'login'])->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [AuthenticationController::class, 'register'])->name('register');

Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');

Route::get('/profile', [AuthenticationController::class, 'profile'])->name('profile');