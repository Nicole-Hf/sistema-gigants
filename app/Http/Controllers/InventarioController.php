<?php

namespace App\Http\Controllers;

use App\Http\Requests\InventarioRequest;
use App\Models\Almacen;
use App\Models\Inventario;
use App\Models\Producto;
use App\Models\Sector;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function getSectores(Request $request)
    {
        if ($request->ajax()) {
            $sectores = Sector::where('almacen_id',$request->almacen_id)->get();
            foreach ($sectores as $sector) {
                $sectorArray[$sector->id] = $sector->nombre;
            }
            return response()->json($sectorArray);
        }
    } */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($producto_id)
    {
        $producto = Producto::findOrFail($producto_id);
        $almacenes = Almacen::all();
        $sectores = Sector::all();
        return view('productos.inventarios.create',
            [
                'producto'=>$producto,
                'almacenes'=>$almacenes,
                'sectores' =>$sectores
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function store(InventarioRequest $request, $producto_id)
    {
        $inventario = new Inventario();
        $inventario->producto_id = $producto_id;
        $inventario->almacen_id = $request->input('almacen_id');
        $inventario->minimo_stock = $request->input('minimo_stock');
        $inventario->maximo_stock = $request->input('maximo_stock');
        $inventario->save();

        $producto = Producto::findOrFail($producto_id);
        $producto->sector_id = $request->input('sector_id');
        $producto->save();

        return redirect()->route('productos.show',[$producto_id]);
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
