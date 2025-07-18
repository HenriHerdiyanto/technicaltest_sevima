<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::resource('posts', PostController::class);
    Route::post('/posts/{post}/like', [LikeController::class, 'toggle'])->name('posts.like')->middleware('auth');
    Route::post('/comments', [CommentController::class, 'store'])->middleware('auth')->name('comments.store');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
