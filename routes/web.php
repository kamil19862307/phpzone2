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
Route::controller(AuthController::class)->prefix('admin')->group(function (){
    Route::get('login', 'login')->name('admin.login');
    Route::post('sign_in', 'signIn')->middleware(['throttle:login'])->name('admin.sign_in');
    Route::get('register', 'register')->name('admin.register');
    Route::post('sign_up', 'signUp')->middleware('throttle:20')->name('admin.sign_up');
    Route::get('logout', 'logout')->name('admin.logout');

    // 1 шаг - Форма отрисовки вьюхи
    Route::get('forgot-password', 'forgot')
        ->middleware('guest')
        ->name('admin.password.request');

    // 2 шаг - Проверка на существование емейла и отправка письма с ссылкой на форму сброса
    Route::post('forgot-password', 'forgotPassword')
        ->middleware('guest')
        ->name('admin.password.email');

    // 3 шаг - Форма сброса, ввода и подтверждения пароля
    Route::get('reset-password/{token}', 'reset')
        ->middleware('guest')
        ->name('password.reset');

    // 4 шаг - Сохранение изменённого пароля, создание ивента, перенаправление на логин
    Route::post('reset-password', 'resetPassword')
        ->middleware('guest')
        ->name('admin.password.update');
});

Route::middleware('auth')->prefix('admin')->group(function (){
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('posts/{slug}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('posts/{id}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('posts/{post}', [PostController::class, 'delete'])->name('posts.delete');
    Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('posts/store', [PostController::class, 'store'])->name('posts.store');
});
