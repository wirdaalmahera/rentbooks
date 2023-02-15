<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Hash;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/ //put = input data

Route::middleware('guest')->group(function(){
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'Auth']);
    Route::get('register', [AuthController::class, 'register']);
    Route::post('register', [AuthController::class, 'regis']);
    Route::get('dashboard', [AuthController::class, 'dashboard']);

});

Route::middleware('auth')->group(function(){
    Route::get('profile', [UserController::class, 'profile'])->middleware('only_client');
    Route::get('dashboard', [AdminController::class, 'dashboard'])->middleware('only_admin');
    Route::get('user', [AdminController::class, 'user'])->middleware('only_admin');
    Route::get('users-registered', [AdminController::class, 'usersRegistered'])->middleware('only_admin');
    Route::get('users-detail/{slug}', [AdminController::class, 'usersDetail'])->middleware('only_admin');
    Route::get('users-approve/{slug}', [AdminController::class, 'usersApprove'])->middleware('only_admin');
    Route::get('users-ban/{slug}', [AdminController::class, 'usersBan'])->middleware('only_admin');
    Route::get('users-banned', [AdminController::class, 'usersBanned'])->middleware('only_admin');
    Route::get('users-restored/{slug}', [AdminController::class, 'usersRestored'])->middleware('only_admin');
    Route::get('rent', [AdminController::class, 'rent'])->middleware('only_admin');
    Route::get('books-add', [AdminController::class, 'booksAdd'])->middleware('only_admin');
    Route::post('books-add', [AdminController::class, 'booksStore'])->middleware('only_admin');
    Route::get('category', [AdminController::class, 'category'])->middleware('only_admin');
    Route::get('category-add', [AdminController::class, 'categoryAdd'])->middleware('only_admin');
    Route::post('category-add', [AdminController::class, 'categoryStore'])->middleware('only_admin');
    Route::get('categoryEdit/{slug}', [AdminController::class, 'categoryEdit'])->middleware('only_admin');
    Route::put('categoryEdit/{slug}', [AdminController::class, 'categoryUpdated'])->middleware('only_admin');
    Route::get('category-delete/{slug}',  [AdminController::class, 'categoryDestroy'])->middleware('only_admin');
    Route::get('books', [AdminController::class, 'books'])->middleware('only_admin');
    Route::put('booksEdit/{slug}', [AdminController::class, 'booksUpdated'])->middleware('only_admin');
    Route::get('booksEdit/{slug}', [AdminController::class, 'booksEdit'])->middleware('only_admin');
    Route::get('books-delete/{slug}',  [AdminController::class, 'booksDestroy'])->middleware('only_admin');
    Route::get('logout', [AuthController::class, 'logout']);
});
