<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/posts/{slug}', [PostController::class, 'show'])->name('posts.show');

Route::get('/categories/', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{slug}', [CategoryController::class, 'show'])->name('categories.show');


// Admin panel
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/posts/{slug}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/admin/posts/{id}', [PostController::class, 'update'])->name('posts.update');
