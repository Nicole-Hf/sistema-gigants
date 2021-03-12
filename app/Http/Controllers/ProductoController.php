<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductoCreateRequest;
use App\Http\Requests\ProductoRequest;
use App\Models\Almacen;
use App\Models\Inventario;
use App\Models\Linea;
use App\Models\Marca;
use App\Models\Familia;
use App\Models\Producto;
use App\Models\Sector;
use App\Models\Talla;
use App\Models\Color;
use App\Models\Modelo;
use App\Models\Temporada;
use App\Models\Promocion;
use Illuminate\Http\Request;
use function PHPUnit\Framework\logicalAnd;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lineas = Linea::all();
        $marcas = Marca::all();
        $familias = Familia::all();
        $tallas = Talla::all();
        $colores = Color::all();
        $modelos = Modelo::all();
        $temporadas = Temporada::all();
        $promociones = Promocion::all();
        $sectores = Sector::all();

        return view('productos.create',
            [
                'lineas'=>$lineas,
                'marcas'=>$marcas,
                'familias'=>$familias,
                'tallas'=>$tallas,
                'colores'=>$colores,
                'modelos'=>$modelos,
                'temporadas'=>$temporadas,
                'promociones'=>$promociones,
                'sectores'=>$sectores
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductoCreateRequest $request)
    {
        $producto = new Producto();
        $producto->descripcion = $request->input('descripcion');
        $producto->codigo_barra = $request->input('codigo_barra');
        $producto->precio = $request->input('precio');
        $producto->linea_id = $request->input('linea_id');
        $producto->marca_id = $request->input('marca_id');
        $producto->familia_id = $request->input('familia_id');
        $producto->talla_id = $request->input('talla_id');
        $producto->color_id = $request->input('color_id');
        $producto->modelo_id = $request->input('modelo_id');
        $producto->promocion_id = $request->input('promocion_id');
        $producto->temporada_id = $request->input('temporada_id');
        //$producto->sector_id = $request->input('sector_id');
        $producto->save();

        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->load('linea','marca','familia','talla','color','modelo','promocion','temporada');

        return view('productos.show', ['producto'=>$producto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        $lineas = Linea::all();
        $marcas = Marca::all();
        $familias = Familia::all();
        $tallas = Talla::all();
        $colores = Color::all();
        $modelos = Modelo::all();
        $temporadas = Temporada::all();
        $promociones = Promocion::all();
        $sectores = Sector::all();

        return view('productos.edit',
            [
                'producto'=>$producto,
                'lineas'=>$lineas,
                'marcas'=>$marcas,
                'familias'=>$familias,
                'tallas'=>$tallas,
                'colores'=>$colores,
                'modelos'=>$modelos,
                'temporadas'=>$temporadas,
                'promociones'=>$promociones,
                'sectores'=>$sectores
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductoRequest $request, $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->descripcion = $request->input('descripcion');
        $producto->codigo_barra = $request->input('codigo_barra');
        $producto->precio = $request->input('precio');
        $producto->linea_id = $request->input('linea_id');
        $producto->marca_id = $request->input('marca_id');
        $producto->familia_id = $request->input('familia_id');
        $producto->talla_id = $request->input('talla_id');
        $producto->color_id = $request->input('color_id');
        $producto->modelo_id = $request->input('modelo_id');
        $producto->promocion_id = $request->input('promocion_id');
        $producto->temporada_id = $request->input('temporada_id');
        $producto->sector_id = $request->input('sector_id');
        $producto->save();

        $inventario = new Inventario();
        $inventario->almacen_id = $producto->sector->almacen_id;
        $inventario->producto_id = $producto->id;
        //$inventario->existencia = $request->input('existencia');
        $inventario->minimo_stock = $request->input('minimo_stock');
        $inventario->maximo_stock = $request->input('maximo_stock');
        if (trim($request->input('existencia') <= $producto->existencia ))
        {
            $inventario->existencia = $request->input('existencia');
        }
        else
        {
            $inventario->existencia = $producto->existencia;
        }
        $inventario->save();

        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) //Falta arreglar
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return redirect()->route('productos.index');
    }
}
