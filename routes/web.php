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

Route::get
('/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get
('/caracteristicas',[App\Http\Controllers\CaracteristicaController::class,'index'])->name('caracteristicas.index');

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
Route::get
('/caracteristicas/marcas',[App\Http\Controllers\MarcaController::class,'index'])->name('marcas.index');
Route::get
('/caracteristicas/marcas/create',[App\Http\Controllers\MarcaController::class,'create'])->name('marcas.create');
Route::post
('/caracteristicas/marcas',[App\Http\Controllers\MarcaController::class,'store'])->name('marcas.store');
Route::get
('/caracteristicas/marcas/{marca}/edit',[App\Http\Controllers\MarcaController::class,'edit'])->name('marcas.edit');
Route::put
('/caracteristicas/marcas/{marca}',[App\Http\Controllers\MarcaController::class,'update'])->name('marcas.update');
Route::delete
('/caracteristicas/marcas/{marca}',[App\Http\Controllers\MarcaController::class,'destroy'])->name('marcas.delete');

//RUTAS DE LINEAS
Route::get
('/caracteristicas/lineas/create',[App\Http\Controllers\LineaController::class,'create'])->name('lineas.create');
Route::post
('/caracteristicas/lineas',[App\Http\Controllers\LineaController::class,'store'])->name('lineas.store');
Route::get
('/caracteristicas/lineas',[App\Http\Controllers\LineaController::class,'index'])->name('lineas.index');
Route::get
('/caracteristicas/lineas/{linea}/edit',[App\Http\Controllers\LineaController::class,'edit'])->name('lineas.edit');
Route::put
('/caracteristicas/lineas/{linea}',[App\Http\Controllers\LineaController::class,'update'])->name('lineas.update');
Route::delete
('/caracteristicas/lineas/{linea}',[App\Http\Controllers\LineaController::class,'destroy'])->name('lineas.delete');

//RUTAS DE FAMILIAS
Route::get
('/caracteristicas/familias/create',[App\Http\Controllers\FamiliaController::class,'create'])->name('familias.create');
Route::post
('/caracteristicas/familias',[App\Http\Controllers\FamiliaController::class,'store'])->name('familias.store');
Route::get
('/caracteristicas/familias',[App\Http\Controllers\FamiliaController::class,'index'])->name('familias.index');
Route::get
('/caracteristicas/familias/{familia}/edit',[App\Http\Controllers\FamiliaController::class,'edit'])->name('familias.edit');
Route::put
('/caracteristicas/familias/{familia}',[App\Http\Controllers\FamiliaController::class,'update'])->name('familias.update');
Route::delete
('/caracteristicas/familias/{familia}',[App\Http\Controllers\FamiliaController::class,'destroy'])->name('familias.delete');

//RUTAS DE COLORES
Route::get
('/caracteristicas/colores/create',[App\Http\Controllers\ColorController::class,'create'])->name('colores.create');
Route::post
('/caracteristicas/colores',[App\Http\Controllers\ColorController::class,'store'])->name('colores.store');
Route::get
('/caracteristicas/colores',[App\Http\Controllers\ColorController::class,'index'])->name('colores.index');
Route::get
('/caracteristicas/colores/{color}/edit',[App\Http\Controllers\ColorController::class,'edit'])->name('colores.edit');
Route::put
('/caracteristicas/colores/{color}',[App\Http\Controllers\ColorController::class,'update'])->name('colores.update');
Route::delete
('/caracteristicas/colores/{color}',[App\Http\Controllers\ColorController::class,'destroy'])->name('colores.delete');

//RUTAS DE TALLAS
Route::get
('/caracteristicas/tallas/create', [App\Http\Controllers\TallaController::class,'create'])->name('tallas.create');
Route::post
('/caracteristicas/tallas',[App\Http\Controllers\TallaController::class,'store'])->name('tallas.store');
Route::get
('/caracteristicas/tallas',[App\Http\Controllers\TallaController::class,'index'])->name('tallas.index');
Route::get
('/caracteristicas/tallas/{talla}/edit',[App\Http\Controllers\TallaController::class,'edit'])->name('tallas.edit');
Route::put
('/caracteristicas/tallas/{talla}',[App\Http\Controllers\TallaController::class,'update'])->name('tallas.update');
Route::delete
('/caracteristicas/tallas/{talla}',[App\Http\Controllers\TallaController::class,'destroy'])->name('tallas.delete');

//RUTAS DE MODELOS
Route::get
('/caracteristicas/modelos/create',[App\Http\Controllers\ModeloController::class,'create'])->name('modelos.create');
Route::post
('/caracteristicas/modelos',[App\Http\Controllers\ModeloController::class,'store'])->name('modelos.store');
Route::get
('/caracteristicas/modelos',[App\Http\Controllers\ModeloController::class,'index'])->name('modelos.index');
Route::get
('/caracteristicas/modelos/{modelo}/edit',[App\Http\Controllers\ModeloController::class,'edit'])->name('modelos.edit');
Route::put
('/caracteristicas/modelos/{modelo}',[App\Http\Controllers\ModeloController::class,'update'])->name('modelos.update');
Route::delete
('/caracteristicas/modelos/{modelo}',[App\Http\Controllers\ModeloController::class,'destroy'])->name('modelos.delete');

//RUTAS DE TEMPORADAS
Route::get
('/caracteristicas/temporadas/create',[App\Http\Controllers\TemporadaController::class,'create'])->name('temporadas.create');
Route::post
('/caracteristicas/temporadas',[App\Http\Controllers\TemporadaController::class,'store'])->name('temporadas.store');
Route::get
('/caracteristicas/temporadas',[App\Http\Controllers\TemporadaController::class,'index'])->name('temporadas.index');
Route::get
('/caracteristicas/temporadas/{temporada}/edit',[App\Http\Controllers\TemporadaController::class,'edit'])->name('temporadas.edit');
Route::put
('/caracteristicas/temporadas/{temporada}',[App\Http\Controllers\TemporadaController::class,'update'])->name('temporadas.update');
Route::delete
('/caracteristicas/temporadas/{temporada}',[App\Http\Controllers\TemporadaController::class,'destroy'])->name('temporadas.delete');

//RUTAS DE PROMOCION
Route::get
('/caracteristicas/promociones/create',[App\Http\Controllers\PromocionController::class,'create'])->name('promociones.create');
Route::post
('/caracteristicas/promociones',[App\Http\Controllers\PromocionController::class,'store'])->name('promociones.store');
Route::get
('/caracteristicas/promociones',[App\Http\Controllers\PromocionController::class,'index'])->name('promociones.index');
Route::get
('/caracteristicas/promociones/{promocion}/edit',[App\Http\Controllers\PromocionController::class,'edit'])->name('promociones.edit');
Route::put
('/caracteristicas/promociones/{promocion}',[App\Http\Controllers\PromocionController::class,'update'])->name('promociones.update');
Route::delete
('/caracteristicas/promociones/{promocion}',[App\Http\Controllers\PromocionController::class,'destroy'])->name('promociones.delete');

//RUTAS DE PRODUCTOS
Route::get
('/productos/create',[App\Http\Controllers\ProductoController::class,'create'])->name('productos.create');
Route::post
('/productos',[App\Http\Controllers\ProductoController::class,'store'])->name('productos.store');
Route::get
('/productos',[App\Http\Controllers\ProductoController::class,'index'])->name('productos.index');
Route::get
('/productos/{producto}/edit',[App\Http\Controllers\ProductoController::class,'edit'])->name('productos.edit');
Route::put
('/productos/{producto}',[App\Http\Controllers\ProductoController::class,'update'])->name('productos.update');
Route::get
('/productos/{producto}',[App\Http\Controllers\ProductoController::class,'show'])->name('productos.show');
Route::delete
('/productos/{producto}',[App\Http\Controllers\ProductoController::class,'destroy'])->name('productos.delete');

//RUTAS DE ALMACEN
Route::get
('/almacenes/create',[App\Http\Controllers\AlmacenController::class,'create'])->name('almacenes.create');
Route::post
('/almacenes',[App\Http\Controllers\AlmacenController::class,'store'])->name('almacenes.store');
Route::get
('/almacenes',[App\Http\Controllers\AlmacenController::class,'index'])->name('almacenes.index');
Route::get
('/almacenes/{almacen}/edit',[App\Http\Controllers\AlmacenController::class,'edit'])->name('almacenes.edit');
Route::put
('/almacenes/{almacen}',[App\Http\Controllers\AlmacenController::class,'update'])->name('almacenes.update');
Route::delete
('/almacenes/{almacen}',[App\Http\Controllers\AlmacenController::class,'destroy'])->name('almacenes.delete');

//RUTAS DE SECTOR
Route::get
('/almacen/sectores/create',[App\Http\Controllers\SectorController::class,'create'])->name('sectores.create');
Route::post
('/almacen/sectores',[App\Http\Controllers\SectorController::class,'store'])->name('sectores.store');
Route::get
('/almacen/sectores',[App\Http\Controllers\SectorController::class,'index'])->name('sectores.index');
Route::get
('/almacen/sectores/{sector}/edit',[App\Http\Controllers\SectorController::class,'edit'])->name('sectores.edit');
Route::put
('/almacen/sectores/{sector}',[App\Http\Controllers\SectorController::class,'update'])->name('sectores.update');
Route::delete
('/almacen/sectores/{sector}',[App\Http\Controllers\SectorController::class,'destroy'])->name('sectores.delete');
