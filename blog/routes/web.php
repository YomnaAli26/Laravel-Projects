<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Laravel\Socialite\Facades\Socialite;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware('auth')->group(function () {
    Route::get('posts',[PostController::class,'index'])->name('posts.index');
    Route::get('posts/create',[PostController::class,'create'])->name('posts.create');
    Route::get('posts/{post}',[PostController::class,'show'])->name('posts.show');
    Route::post('posts',[PostController::class,'store'])->name('posts.store');
    Route::get('posts/{post}/edit',[PostController::class,'edit'])->name('posts.edit');
    Route::put('posts/{post}',[PostController::class,'update'])->name('posts.update');
    Route::delete('posts/{post}',[PostController::class,'destroy'])->name('posts.destroy');
    Route::get('softDelete/{post}',[PostController::class,'softDelete'])->name('posts.softDelete');
    Route::get('trashed',[PostController::class,'trash'])->name('posts.trashed');
    Route::get('restore/{post}',[PostController::class,'restore'])->name('posts.restore');
    Route::get('restore-all',[PostController::class,'restoreAll'])->name('posts.restore-all');
    Route::get('old-posts',[PostController::class,'oldPost'])->name('delete-old-posts');
    });

Route::get('auth/redirect',[LoginController::class,'redirectToGithub']);

Route::get('auth/github/callback', [LoginController::class,'handleGithubCallback']);

Route::get('auth/google', [LoginController::class,'redirectToGoogle']);

Route::get('auth/google/callback', [LoginController::class,'handleGoogleCallback']);



Auth::routes();

