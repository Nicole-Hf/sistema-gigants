<?php

namespace App\Http\Controllers;

use App\Models\Linea;
use App\Models\Marca;
use App\Models\Familia;
use App\Models\Producto;
use App\Models\Talla;
use App\Models\Color;
use App\Models\Modelo;
use App\Models\Temporada;
use App\Models\Promocion;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('productos.index');
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

        return view('productos.create',
            [
                'lineas'=>$lineas,
                'marcas'=>$marcas,
                'familias'=>$familias,
                'tallas'=>$tallas,
                'colores'=>$colores,
                'modelos'=>$modelos,
                'temporadas'=>$temporadas,
                'promociones'=>$promociones
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Producto::create($request->all());
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
