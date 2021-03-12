<?php

namespace App\Http\Controllers;

use App\Http\Requests\DetalleFacturaRequest;
use App\Models\DetalleFactura;
use App\Models\Factura;
use App\Models\Producto;
use Illuminate\Http\Request;

class DetalleFacturaController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($venta_id)
    {
        $venta = Factura::findOrFail($venta_id);
        $productos = Producto::all();
        return view('ventas.detalles.create',
            [
                'venta'=>$venta,
                'productos'=>$productos
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DetalleFacturaRequest $request, $venta_id)
    {
        $detalle = new DetalleFactura();
        $detalle->producto_id = $request->input('producto_id');
        //$detalle->cantidad = $request->input('cantidad');
        $detalle->precio_venta = $detalle->producto->precio;
        $detalle->factura_id = $venta_id;
        if ($request->input('cantidad') <= $detalle->producto->existencia)
        {
            $detalle->cantidad = $request->input('cantidad');
        }
        else
        {
            return back()->with('mensaje','No hay stock suficiente del producto');
        }
        $detalle->importe = $detalle->precio_venta * $detalle->cantidad;
        $detalle->save();

        $producto = Producto::findOrFail($detalle->producto_id);
        $producto->existencia = $producto->existencia - $detalle->cantidad;
        $producto->save();

        $venta = Factura::findOrFail($venta_id);
        $venta->total = $venta->total + $detalle->importe;
        $venta->save();

        return redirect()->route('ventas.show',[$venta_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $venta_id)
    {
        $detalle = DetalleFactura::findOrFail($id);

        $producto = $detalle->producto;
        $producto->existencia = $producto->existencia + $detalle->cantidad;
        $producto->save();

        $venta = $detalle->factura;
        $venta->total = $venta->total - $detalle->importe;
        $venta->save();

        $detalle->delete();

        return redirect()->route('ventas.show',[$venta_id]);
    }
}
