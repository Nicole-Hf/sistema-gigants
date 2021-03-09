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

//PAQUETE USUARIO
Route::group(['prefix'=>'users'], function () {
    //RUTAS DE USUARIOS
    Route::get
    ('/create',[App\Http\Controllers\UserController::class,'create'])->name('users.create');
    Route::post
    ('/',[App\Http\Controllers\UserController::class,'store'])->name('users.store');
    Route::get
    ('/',[App\Http\Controllers\UserController::class,'index'])->name('users.index');
    Route::get
    ('/{id}',[App\Http\Controllers\UserController::class,'show'])->name('users.show');
    Route::get
    ('/{id}/edit',[App\Http\Controllers\UserController::class,'edit'])->name('users.edit');
    Route::put
    ('/{id}',[App\Http\Controllers\UserController::class,'update'])->name('users.update');
    Route::delete
    ('/{id}',[App\Http\Controllers\UserController::class,'destroy'])->name('users.delete');
});

//SUBMENU CARACTERISTICAS
Route::group(['prefix'=>'caracteristicas'], function () {
    Route::get
    ('/',[App\Http\Controllers\CaracteristicaController::class,'index'])->name('caracteristicas.index');

    Route::group(['prefix'=>'marcas'], function() {
        //RUTAS DE MARCAS
        Route::get
        ('/',[App\Http\Controllers\MarcaController::class,'index'])->name('marcas.index');
        Route::get
        ('/create',[App\Http\Controllers\MarcaController::class,'create'])->name('marcas.create');
        Route::post
        ('/',[App\Http\Controllers\MarcaController::class,'store'])->name('marcas.store');
        Route::get
        ('/{marca}/edit',[App\Http\Controllers\MarcaController::class,'edit'])->name('marcas.edit');
        Route::put
        ('/{marca}',[App\Http\Controllers\MarcaController::class,'update'])->name('marcas.update');
        Route::delete
        ('/{marca}',[App\Http\Controllers\MarcaController::class,'destroy'])->name('marcas.delete');

    });

    Route::group(['prefix'=>'lineas'], function () {
        //RUTAS DE LINEAS
        Route::get
        ('/create',[App\Http\Controllers\LineaController::class,'create'])->name('lineas.create');
        Route::post
        ('/',[App\Http\Controllers\LineaController::class,'store'])->name('lineas.store');
        Route::get
        ('/',[App\Http\Controllers\LineaController::class,'index'])->name('lineas.index');
        Route::get
        ('/{linea}/edit',[App\Http\Controllers\LineaController::class,'edit'])->name('lineas.edit');
        Route::put
        ('/{linea}',[App\Http\Controllers\LineaController::class,'update'])->name('lineas.update');
        Route::delete
        ('/{linea}',[App\Http\Controllers\LineaController::class,'destroy'])->name('lineas.delete');
    });

    Route::group(['prefix'=>'familias'], function () {
        //RUTAS DE FAMILIAS
        Route::get
        ('/create',[App\Http\Controllers\FamiliaController::class,'create'])->name('familias.create');
        Route::post
        ('/',[App\Http\Controllers\FamiliaController::class,'store'])->name('familias.store');
        Route::get
        ('/',[App\Http\Controllers\FamiliaController::class,'index'])->name('familias.index');
        Route::get
        ('/{familia}/edit',[App\Http\Controllers\FamiliaController::class,'edit'])->name('familias.edit');
        Route::put
        ('/{familia}',[App\Http\Controllers\FamiliaController::class,'update'])->name('familias.update');
        Route::delete
        ('/{familia}',[App\Http\Controllers\FamiliaController::class,'destroy'])->name('familias.delete');
    });

    Route::group(['prefix'=>'colores'], function () {
        //RUTAS DE COLORES
        Route::get
        ('/create',[App\Http\Controllers\ColorController::class,'create'])->name('colores.create');
        Route::post
        ('/',[App\Http\Controllers\ColorController::class,'store'])->name('colores.store');
        Route::get
        ('/',[App\Http\Controllers\ColorController::class,'index'])->name('colores.index');
        Route::get
        ('/{color}/edit',[App\Http\Controllers\ColorController::class,'edit'])->name('colores.edit');
        Route::put
        ('/{color}',[App\Http\Controllers\ColorController::class,'update'])->name('colores.update');
        Route::delete
        ('/{color}',[App\Http\Controllers\ColorController::class,'destroy'])->name('colores.delete');
    });

    Route::group(['prefix'=>'tallas'], function () {
        //RUTAS DE TALLAS
        Route::get
        ('/create', [App\Http\Controllers\TallaController::class,'create'])->name('tallas.create');
        Route::post
        ('/',[App\Http\Controllers\TallaController::class,'store'])->name('tallas.store');
        Route::get
        ('/',[App\Http\Controllers\TallaController::class,'index'])->name('tallas.index');
        Route::get
        ('/{talla}/edit',[App\Http\Controllers\TallaController::class,'edit'])->name('tallas.edit');
        Route::put
        ('/{talla}',[App\Http\Controllers\TallaController::class,'update'])->name('tallas.update');
        Route::delete
        ('/{talla}',[App\Http\Controllers\TallaController::class,'destroy'])->name('tallas.delete');
    });

    Route::group(['prefix'=>'modelos'], function () {
        //RUTAS DE MODELOS
        Route::get
        ('/create',[App\Http\Controllers\ModeloController::class,'create'])->name('modelos.create');
        Route::post
        ('/',[App\Http\Controllers\ModeloController::class,'store'])->name('modelos.store');
        Route::get
        ('/',[App\Http\Controllers\ModeloController::class,'index'])->name('modelos.index');
        Route::get
        ('/{modelo}/edit',[App\Http\Controllers\ModeloController::class,'edit'])->name('modelos.edit');
        Route::put
        ('/{modelo}',[App\Http\Controllers\ModeloController::class,'update'])->name('modelos.update');
        Route::delete
        ('/{modelo}',[App\Http\Controllers\ModeloController::class,'destroy'])->name('modelos.delete');
    });

    Route::group(['prefix'=>'temporadas'], function () {
        //RUTAS DE TEMPORADAS
        Route::get
        ('/create',[App\Http\Controllers\TemporadaController::class,'create'])->name('temporadas.create');
        Route::post
        ('/',[App\Http\Controllers\TemporadaController::class,'store'])->name('temporadas.store');
        Route::get
        ('/',[App\Http\Controllers\TemporadaController::class,'index'])->name('temporadas.index');
        Route::get
        ('/{temporada}/edit',[App\Http\Controllers\TemporadaController::class,'edit'])->name('temporadas.edit');
        Route::put
        ('/{temporada}',[App\Http\Controllers\TemporadaController::class,'update'])->name('temporadas.update');
        Route::delete
        ('/{temporada}',[App\Http\Controllers\TemporadaController::class,'destroy'])->name('temporadas.delete');
    });

    Route::group(['prefix'=>'promociones'], function () {
        //RUTAS DE PROMOCION
        Route::get
        ('/create',[App\Http\Controllers\PromocionController::class,'create'])->name('promociones.create');
        Route::post
        ('/',[App\Http\Controllers\PromocionController::class,'store'])->name('promociones.store');
        Route::get
        ('/',[App\Http\Controllers\PromocionController::class,'index'])->name('promociones.index');
        Route::get
        ('/{promocion}/edit',[App\Http\Controllers\PromocionController::class,'edit'])->name('promociones.edit');
        Route::put
        ('/{promocion}',[App\Http\Controllers\PromocionController::class,'update'])->name('promociones.update');
        Route::delete
        ('/{promocion}',[App\Http\Controllers\PromocionController::class,'destroy'])->name('promociones.delete');
    });
});

//SUBMENU PRODUCTOS
Route::group(['prefix'=>'productos'], function () {
    //RUTAS DE PRODUCTOS
    Route::get
    ('/create',[App\Http\Controllers\ProductoController::class,'create'])->name('productos.create');
    Route::post
    ('/',[App\Http\Controllers\ProductoController::class,'store'])->name('productos.store');
    Route::get
    ('/',[App\Http\Controllers\ProductoController::class,'index'])->name('productos.index');
    Route::get
    ('/{producto}/edit',[App\Http\Controllers\ProductoController::class,'edit'])->name('productos.edit');
    Route::put
    ('/{producto}',[App\Http\Controllers\ProductoController::class,'update'])->name('productos.update');
    Route::get
    ('/{producto}',[App\Http\Controllers\ProductoController::class,'show'])->name('productos.show');
    Route::delete
    ('/{producto}',[App\Http\Controllers\ProductoController::class,'destroy'])->name('productos.delete');

    Route::group(['prefix'=>'inventarios'], function() {
       Route::get
       ('/create/{producto_id}',[App\Http\Controllers\InventarioController::class,'create'])->name('productos.inventarios.create');
       Route::post
       ('/{producto_id}',[App\Http\Controllers\InventarioController::class,'store'])->name('productos.inventarios.store');
       /*Route::get
       ('/sectores',[App\Http\Controllers\InventarioController::class,'getSectores']);*/
    });
});

//PAQUETE ALMACEN
Route::group(['prefix'=>'almacenes'], function () {
    //RUTAS DE ALMACEN
    Route::get
    ('/create',[App\Http\Controllers\AlmacenController::class,'create'])->name('almacenes.create');
    Route::post
    ('/',[App\Http\Controllers\AlmacenController::class,'store'])->name('almacenes.store');
    Route::get
    ('/',[App\Http\Controllers\AlmacenController::class,'index'])->name('almacenes.index');
    Route::get
    ('/{almacen}/edit',[App\Http\Controllers\AlmacenController::class,'edit'])->name('almacenes.edit');
    Route::put
    ('/{almacen}',[App\Http\Controllers\AlmacenController::class,'update'])->name('almacenes.update');
    Route::delete
    ('/{almacen}',[App\Http\Controllers\AlmacenController::class,'destroy'])->name('almacenes.delete');

    Route::group(['prefix'=>'sectores'], function () {
        //RUTAS DE SECTOR
        Route::get
        ('/create/{almacen_id}',[App\Http\Controllers\SectorController::class,'create'])->name('sectores.create');
        Route::post
        ('/{almacen_id}',[App\Http\Controllers\SectorController::class,'store'])->name('sectores.store');
        //Route::get
        //('/{almacen_id}',[App\Http\Controllers\SectorController::class,'index'])->name('sectores.index');
        Route::get
        ('/{sector}/edit',[App\Http\Controllers\SectorController::class,'edit'])->name('sectores.edit');
        Route::put
        ('/{sector}',[App\Http\Controllers\SectorController::class,'update'])->name('sectores.update');
        Route::delete
        ('/{sector}',[App\Http\Controllers\SectorController::class,'destroy'])->name('sectores.delete');
    });
});

//PAQUETE COMPRAS
Route::group(['prefix'=>'compras'], function () {
    //RUTAS DE COMPRA
    Route::get
    ('/create',[App\Http\Controllers\CompraController::class,'create'])->name('compras.create');
    Route::post
    ('/',[App\Http\Controllers\CompraController::class,'store'])->name('compras.store');
    Route::get
    ('/',[App\Http\Controllers\CompraController::class,'index'])->name('compras.index');
    Route::get
    ('/{compra}/edit',[App\Http\Controllers\CompraController::class,'edit'])->name('compras.edit');
    Route::put
    ('/{compra}',[App\Http\Controllers\CompraController::class,'update'])->name('compras.update');
    Route::get
    ('/{compra}',[App\Http\Controllers\CompraController::class,'show'])->name('compras.show');
    Route::delete
    ('/{compra}',[App\Http\Controllers\CompraController::class,'destroy'])->name('compras.delete');

    Route::group(['prefix'=>'tipos_compras'], function() {
        //RUTAS TIPO DE COMPRA
        Route::get
        ('/create',[App\Http\Controllers\TipoCompraController::class,'create'])->name('tipo_compra.create');
        Route::post
        ('/',[App\Http\Controllers\TipoCompraController::class,'store'])->name('tipo_compra.store');
        Route::delete
        ('/{tipo}',[App\Http\Controllers\TipoCompraController::class,'destroy'])->name('tipo_compra.delete');
    });

    Route::group(['prefix'=>'detalles'], function () {
        //RUTAS DETALLE COMPRA
        Route::get
        ('/create/{compra_id}',[App\Http\Controllers\DetalleCompraController::class,'create'])->name('compras.detalles.create');
        Route::post
        ('/{compra_id}',[App\Http\Controllers\DetalleCompraController::class,'store'])->name('compras.detalles.store');
    });

    Route::group(['prefix'=>'proveedores'], function () {
        //RUTAS PROVEEDOR
        Route::get
        ('/create',[App\Http\Controllers\ProveedorController::class,'create'])->name('proveedores.create');
        Route::post
        ('/',[App\Http\Controllers\ProveedorController::class,'store'])->name('proveedores.store');
        Route::get
        ('/index',[App\Http\Controllers\ProveedorController::class,'index'])->name('proveedores.index');
        Route::get
        ('/{proveedor}/edit',[App\Http\Controllers\ProveedorController::class,'edit'])->name('proveedores.edit');
        Route::put
        ('/{proveedor}',[App\Http\Controllers\ProveedorController::class,'update'])->name('proveedores.update');
        Route::get
        ('/{proveedor}',[App\Http\Controllers\ProveedorController::class,'show'])->name('proveedores.show');
        Route::delete
        ('/{proveedor}',[App\Http\Controllers\ProveedorController::class,'destroy'])->name('proveedores.delete');
    });
});


