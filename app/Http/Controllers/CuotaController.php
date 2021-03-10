<?php

namespace App\Http\Controllers;

use App\Http\Requests\CuotaRequest;
use App\Models\Compra;
use App\Models\Cuota;
use App\Models\DetalleCompra;
use Illuminate\Http\Request;

class CuotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compras = Compra::where('estado', 'Pendiente')->get();
        return view('compras.cuotas.index', ['compras'=>$compras]);
    }

    public function index2()
    {
        $compras = Compra::where('estado', 'Cancelado')->get();
        return view('compras.cuotas.index2', ['compras'=>$compras]);
    }

    public function show($compra_id)
    {
        $compra = Compra::findOrFail($compra_id);
        $compra->load('cuotas');
        //$cuotas = Cuota::where('compra_id',$compra_id);
        return view('compras.cuotas.show',
            [
                'compra'=>$compra,
                //'cuotas'=>$cuotas
            ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($compra_id)
    {
        $compra = Compra::findOrFail($compra_id);
        $cuotas = Cuota::where('compra_id',$compra_id)->get();
        return view('compras.cuotas.create',
            [
                'compra'=>$compra,
                'cuotas'=>$cuotas
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CuotaRequest $request,$compra_id)
    {
        $cuota = new Cuota();
        $cuota->fecha = $request->input('fecha');
        $cuota->monto = $request->input('monto');
        $cuota->compra_id = $compra_id;
        $cuota->save();

        $compra = Compra::findOrFail($compra_id);
        $compra->saldo = $compra->saldo - $cuota->monto;
        if (trim($compra->saldo == 0))
        {
            $compra->estado = 'Cancelado';
        }
        $compra->save();

        return redirect()->route('compras.cuotas.create',[$compra_id]);
    }
}
