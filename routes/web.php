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
Route::post('/checklogin', [\App\Http\Controllers\UserController::class,'checkLogin'])->name('checkLogin');
Route::get('/registration', [\App\Http\Controllers\UserController::class,'create'])->name('registration');
Route::post('/register', [\App\Http\Controllers\UserController::class,'store'])->name('register');
Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('logout');
Route::get('/category', [\App\Http\Controllers\CategoryController::class, 'index'])->name('category-list');
Route::get('/add_category', [\App\Http\Controllers\CategoryController::class, 'create'])->name('add-category');
Route::post('/store_category', [\App\Http\Controllers\CategoryController::class, 'store'])->name('store-category');;
Route::get('/edit_category/{id}', [\App\Http\Controllers\CategoryController::class, 'edit'])->name('edit-category');
Route::post('/update_category/{id}', [\App\Http\Controllers\CategoryController::class, 'update'])->name('update-category');
Route::get('/delete_category/{id}', [\App\Http\Controllers\CategoryController::class, 'destroy'])->name('delete-category');
