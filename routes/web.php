<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::controller(AdminController::class)->group(function () {
    Route::get('/dashboard', 'index')->name('dashboard');
    Route::get('/books', 'books')->name('books');
    Route::get('/librarian-list', 'librarians')->name('librarians');
    Route::get('/users', 'users')->name('users');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::post('/login', 'login')->name('login-action');
    Route::post('/register', 'regist')->name('register-action');
    Route::post('/logout', 'logout')->name('logout');
});