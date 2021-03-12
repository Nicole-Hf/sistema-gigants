<?php

namespace App\Http\Controllers;

use App\Http\Requests\FacturaRequest;
use App\Models\Factura;
use App\Models\Persona;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public static $NIT = 1028627025;
    public static $NRO_AUTORIZACION = 263401000139664;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas = Factura::with('cliente')->get();
        return view('ventas.index',['ventas'=>$ventas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Persona::where('tipo',ClienteController::$TIPO_CLIENTE)->get();
        return view('ventas.create',compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FacturaRequest $request)
    {
        $venta = new Factura();
        $venta->nit = self::$NIT;
        $venta->nro_autorizacion = self::$NRO_AUTORIZACION;
        $venta->fecha_emision = $request->input('fecha_emision');
        $venta->descripcion = $request->input('descripcion');
        $venta->vendedor_id = auth()->user()->id;
        $venta->cliente_id = $request->input('cliente_id');
        $venta->save();

        return redirect()->route('ventas.show',[$venta->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $venta = Factura::findOrFail($id);
        $venta->load('cliente');
        $venta->load('factura_detalles');
        $venta->factura_detalles->load('producto');
        return view('ventas.show',['venta'=>$venta]);
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
        $venta = Factura::findOrFail($id);
        $venta->load('factura_detalles');

        foreach ($venta->factura_detalles as $factura_detalle)
        {
            $producto = $factura_detalle->producto;
            $producto->existencia = $producto->existencia + $factura_detalle->cantidad;
        }

        $venta->delete();
        return redirect()->route('ventas.index');
    }

    public function pdf($id)
    {
        $venta = Factura::findOrFail($id);
        $venta->load('cliente');
        $venta->load('factura_detalles');
        $venta->factura_detalles->load('producto');

        $pdf = PDF::loadView('ventas.pdf',compact('venta'));
        return $pdf->download('Factura'.$venta->id.'.pdf');
    }
}
