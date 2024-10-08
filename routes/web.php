<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/posts/{slug}', [PostController::class, 'show'])->name('posts.show');

Route::get('/categories/', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{slug}', [CategoryController::class, 'show'])->name('categories.show');


// Admin panel
Route::controller(AuthController::class)->group(function (){
    Route::get('/admin/login', 'login')->name('admin.login');
    Route::post('/admin/sign_in', 'signIn')->name('admin.sign_in');
    Route::get('/admin/register', 'register')->name('admin.register');
    Route::get('/admin/logout', 'logout')->name('admin.logout');
});

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/posts/{slug}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/admin/posts/{id}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/admin/posts/{post}', [PostController::class, 'delete'])->name('posts.delete');
Route::get('/admin/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/admin/posts/store', [PostController::class, 'store'])->name('posts.store');
