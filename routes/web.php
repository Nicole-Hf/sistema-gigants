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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users/create', [App\Http\Controllers\UserController::class,'create'])->name('users.create');
Route::post('/users', [App\Http\Controllers\UserController::class,'store'])->name('users.store');
Route::get('/users',[App\Http\Controllers\UserController::class,'index'])->name('users.index');
Route::get('/user/{user}',[App\Http\Controllers\UserController::class,'show'])->name('users.show');
Route::get('/user/{user}/edit',[App\Http\Controllers\UserController::class,'edit'])->name('users.edit');
Route::put('/users/{user}',[App\Http\Controllers\UserController::class,'update'])->name('users.update');
Route::delete('/user/{user}',[App\Http\Controllers\UserController::class,'destroy'])->name('users.delete');
