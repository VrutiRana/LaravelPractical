<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\UserController::class,'index'])->name('Login');
Route::post('/login', [\App\Http\Controllers\UserController::class,'index'])->name('checkLogin');
Route::get('/registration', [\App\Http\Controllers\UserController::class,'create'])->name('registration');
Route::post('/register', [\App\Http\Controllers\UserController::class,'store'])->name('register');
Route::get('/category', [\App\Http\Controllers\CategoryController::class,'index'])->name('category-list');
