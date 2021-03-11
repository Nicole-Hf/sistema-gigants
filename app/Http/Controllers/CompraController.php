<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompraRequest;
use App\Models\Compra;
use App\Models\Persona;
use App\Models\Producto;
use App\Models\TipoCompra;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compras = Compra::with('proveedor')->get();
        return view('compras.index',['compras'=>$compras]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedores = Persona::where('tipo',ProveedorController::$TIPO_PROVEEDOR)->get();
        $tipos_compras = TipoCompra::all();
        return view('compras.create',
            [
                'proveedores'=>$proveedores,
                'tipos_compras'=>$tipos_compras
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompraRequest $request)
    {
        $compra = new Compra();
        $compra->estado = $request->input('estado');
        $compra->fecha = $request->input('fecha');
        //$compra->saldo = $request->input('saldo');
        $compra->tipo_compra_id = $request->input('tipo_compra_id');
        $compra->administrador_id = auth()->user()->id;
        $compra->proveedor_id = $request->input('proveedor_id');
        $compra->save();

        return redirect()->route('compras.show',[$compra->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $compra = Compra::findOrFail($id);
        $compra->load('proveedor');
        $compra->load('tipo_compra');
        $compra->load('compra_detalles');
        $compra->compra_detalles->load('producto');

        return view('compras.show', ['compra'=>$compra]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $compra = Compra::findOrFail($id);
        return view('compras.edit',['compra'=>$compra]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompraRequest $request, $id)
    {
        $compra = Compra::findOrFail($id);
        $compra->estado = $request->input('estado');
        $compra->fecha = $request->input('fecha');
        //$compra->saldo = $request->input('saldo');
        $compra->tipo_compra_id = $request->input('tipo_compra_id');
        $compra->administrador_id = auth()->user()->id; //->user()->persona->id;
        $compra->proveedor_id = $request->input('proveedor_id');
        $compra->save();

        return redirect()->route('compras.show',[$compra->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $compra = Compra::findOrFail($id);
        $compra->load('compra_detalles');
        $compra->delete();

        foreach ($compra->compra_detalles as $compra_detalle)
        {
            $producto = $compra_detalle->producto;
            $producto->existencia = $producto->existencia - $compra_detalle->cantidad;
            $producto->save();
        }

        return redirect()->route('compras.index');
    }

    public function pdf($id)
    {
        $compra = Compra::findOrFail($id);
        $compra->load('proveedor');
        $compra->load('tipo_compra');
        $compra->load('compra_detalles');
        $compra->compra_detalles->load('producto');

        $pdf = PDF::loadView('compras.pdf',compact('compra'));
        return $pdf->download('Reporte_de_compra_'.$compra->id.'.pdf');
    }
}
