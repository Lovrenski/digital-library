<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReaderController;
use Illuminate\Support\Facades\Route;

Route::controller(ReaderController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/book/{slug}', 'show')->name('book.detail');
    Route::get('/requests', 'requests')->name('requests');
    Route::post('/borrow', 'borrow')->name('borrow');
    Route::post('/cancel-borrow/{id}', 'cancel')->name('borrow.cancel');
});

Route::middleware(['auth', 'role:admin,librarian'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
        Route::get('/books', 'books')->name('books');
        Route::get('/books/{id}', 'editBook')->name('edit-book');
        Route::get('/categories', 'categories')->name('categories');
        Route::get('/permissions', 'permissions')->name('permissions');
        Route::get('/librarian-list', 'librarians')->name('librarians');
        Route::get('/users', 'users')->name('users');
        Route::post('/delete/user/{id}', 'destroyUser')->name('destroy-user');
        Route::post('/delete/librarian/{id}', 'destroyUser')->name('destroy-librarian');
        Route::post('/delete/category/{id}', 'destroyCategory')->name('destroy-category');
        Route::post('/add/librarian', 'addLibrarian')->name('add-librarian');
        Route::post('/add/category', 'addCategory')->name('add-category');
        Route::post('/add/book', 'addBook')->name('add-book');
        Route::post('/process/{id}', 'process')->name('process');
        Route::post('/edit/book/{id}', 'updateBook')->name('update-book');
        Route::post('/delete/book/{id}', 'destroyBook')->name('delete-book');
    });
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['guest'])->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'index')->name('login');
        Route::get('/register', 'register')->name('register');
        Route::post('/login', 'login')->name('login-action');
        Route::post('/register', 'regist')->name('register-action');
    });
});