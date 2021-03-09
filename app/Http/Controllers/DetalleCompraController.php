<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Models\DetalleCompra;
use App\Models\Inventario;
use App\Models\Producto;
use Illuminate\Http\Request;

class DetalleCompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($compra_id)
    {
        $compra = Compra::findOrFail($compra_id);
        $productos = Producto::all();
        return view('compras.detalles.create',
            [
                'compra'=>$compra,
                'productos'=>$productos
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $compra_id)
    {
        $detalle = new DetalleCompra();
        $detalle->producto_id = $request->input('producto_id');
        $detalle->cantidad = $request->input('cantidad');
        $detalle->costo_compra = $request->input('costo_compra');
        $detalle->importe = $request->input('cantidad') * $request->input('costo_compra');
        $detalle->compra_id = $compra_id;
        $detalle->save();

        $compra = Compra::findOrFail($compra_id);
        $compra->total = $compra->total + $detalle->importe;
        $compra->save();

        $inventario = Inventario::where('producto_id',$detalle->producto_id && 'almacen_id',1)->get();
        $inventario->existencia = $inventario->existencia + $detalle->cantidad;
        $inventario->save();

        return redirect()->route('compras.show',[$compra_id]);
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
