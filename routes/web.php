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
    return view('auth.login');
});

Route::get('/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/caracteristicas',[App\Http\Controllers\CaracteristicaController::class,'index'])->name('caracteristicas.index');

//RUTAS DE USUARIOS
Route::get
('/users/create',[App\Http\Controllers\UserController::class,'create'])->name('users.create');
Route::post
('/users',[App\Http\Controllers\UserController::class,'store'])->name('users.store');
Route::get
('/users',[App\Http\Controllers\UserController::class,'index'])->name('users.index');
Route::get
('/user/{id}',[App\Http\Controllers\UserController::class,'show'])->name('users.show');
Route::get
('/user/{id}/edit',[App\Http\Controllers\UserController::class,'edit'])->name('users.edit');
Route::put
('/users/{id}',[App\Http\Controllers\UserController::class,'update'])->name('users.update');
Route::delete
('/user/{id}',[App\Http\Controllers\UserController::class,'destroy'])->name('users.delete');

//RUTAS DE MARCAS
Route::get('/marcas',
    [App\Http\Controllers\MarcaController::class,'index'])->name('marcas.index');
Route::get('/marcas/create',
    [App\Http\Controllers\MarcaController::class,'create'])->name('marcas.create');
Route::post('/marcas',
    [App\Http\Controllers\MarcaController::class,'store'])->name('marcas.store');
Route::get('/marcas/{marca}/edit',
    [App\Http\Controllers\MarcaController::class,'edit'])->name('marcas.edit');
Route::put('/marcas/{marca}',
    [App\Http\Controllers\MarcaController::class,'update'])->name('marcas.update');
Route::delete('/marcas/{marca}',
    [App\Http\Controllers\MarcaController::class,'destroy'])->name('marcas.delete');

//RUTAS DE LINEAS
Route::get('/lineas',
    [App\Http\Controllers\LineaController::class,'index'])->name('lineas.index');
Route::get('/lineas/create',
    [App\Http\Controllers\LineaController::class,'create'])->name('lineas.create');
Route::post('/lineas',
    [App\Http\Controllers\LineaController::class,'store'])->name('lineas.store');
Route::get('/lineas/{marca}/edit',
    [App\Http\Controllers\LineaController::class,'edit'])->name('lineas.edit');
Route::put('/lineas/{marca}',
    [App\Http\Controllers\LineaController::class,'update'])->name('lineas.update');
Route::delete('/lineas/{marca}',
    [App\Http\Controllers\LineaController::class,'destroy'])->name('lineas.delete');
