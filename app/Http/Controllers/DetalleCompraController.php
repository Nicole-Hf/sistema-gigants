<?php

namespace App\Http\Controllers;

use App\Http\Requests\DetalleCompraRequest;
use App\Models\Compra;
use App\Models\DetalleCompra;
use App\Models\Inventario;
use App\Models\Producto;
use Illuminate\Http\Request;

class DetalleCompraController extends Controller
{
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
    public function store(DetalleCompraRequest $request, $compra_id)
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
        if (trim($compra->estado != 'Completado'))
        {
            $compra->saldo = $compra->total;
        }
        $compra->save();

        $producto = Producto::findOrFail($detalle->producto_id);
        $producto->existencia = $producto->existencia + $detalle->cantidad;
        $producto->save();

        return redirect()->route('compras.show',[$compra_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $compra_id)
    {
        $detalle = DetalleCompra::findOrFail($id);

        $producto = $detalle->producto;
        $producto->existencia = $producto->existencia - $detalle->cantidad;
        $producto->save();

        $compra = $detalle->compra;
        $compra->total = $compra->total - $detalle->importe;
        $compra->save();

        $detalle->delete();

        return redirect()->route('compras.show',[$compra_id]);
    }
}
