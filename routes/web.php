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
Route::get('/caracteristicas/marcas',
    [App\Http\Controllers\MarcaController::class,'index'])->name('marcas.index');
Route::get('/caracteristicas/marcas/create',
    [App\Http\Controllers\MarcaController::class,'create'])->name('marcas.create');
Route::post('/caracteristicas/marcas',
    [App\Http\Controllers\MarcaController::class,'store'])->name('marcas.store');
Route::get('/caracteristicas/marcas/{marca}/edit',
    [App\Http\Controllers\MarcaController::class,'edit'])->name('marcas.edit');
Route::put('/caracteristicas/marcas/{marca}',
    [App\Http\Controllers\MarcaController::class,'update'])->name('marcas.update');
Route::delete('/caracteristicas/marcas/{marca}',
    [App\Http\Controllers\MarcaController::class,'destroy'])->name('marcas.delete');

//RUTAS DE LINEAS
Route::get('/caracteristicas/lineas/create',[App\Http\Controllers\LineaController::class,'create'])->name('lineas.create');
Route::post('/caracteristicas/lineas',[App\Http\Controllers\LineaController::class,'store'])->name('lineas.store');


//RUTAS DE FAMILIAS
Route::get('/caracteristicas/familias/create',[App\Http\Controllers\FamiliaController::class,'create'])->name('familias.create');
Route::post('/caracteristicas/familias', [App\Http\Controllers\FamiliaController::class,'store'])->name('familias.store');

