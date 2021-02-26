<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Models\Persona;
use App\Models\TipoCompra;
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
        $administradores = Persona::where('tipo',UserController::$TIPO_USUARIO)->get();
        $tipo_compra = TipoCompra::all();
        return view('compras.create',
            [
                'tipo_compra'=>$tipo_compra,
                'proveedores'=>$proveedores
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
        $compra = new Compra();
        $compra->estado = $request->input('estado');
        $compra->fecha = $request->input('fecha');
        $compra->saldo = $request->input('saldo');
        $compra->tipo_compra_id = $request->input('tipo_compra_id');
        $compra->administrador_id = $request->input('administrador_id');
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
        $compra->load('administrador');
        return view('compras.show',['compra'=>$compra]);
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
    public function update(Request $request, $id)
    {
        $compra = Compra::findOrFail($id);
        $compra->estado = $request->input('estado');
        $compra->fecha = $request->input('fecha');
        $compra->saldo = $request->input('saldo');
        $compra->tipo_compra_id = $request->input('tipo_compra_id');
        $compra->administrador_id = $request->input('administrador_id');
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
        $compra->delete();
        return redirect()->route('compras.index');
    }
}
