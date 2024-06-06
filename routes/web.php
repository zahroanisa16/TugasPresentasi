<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Http\Controllers\LoginController;

use App\Http\Controllers\BeliController;

Route::get('/', function () {
    return redirect('/posts');
});

Route::get('/posts/admin', [PostController::class, 'admin'])->name('admin');
Route::get('/posts/about', [PostController::class, 'about'])->name('about');
Route::get('/posts/shop', [PostController::class, 'shop'])->name('shop');

Route::get('/posts/beli', [PostController::class, 'beli'])->name('beli');
Route::resource('/posts', PostController::class);

Route::get('/login', [LoginController::class, 'login']);

Route::get('/posts/beli', [BeliController::class, 'beli']);