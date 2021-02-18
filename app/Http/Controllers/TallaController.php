<?php

namespace App\Http\Controllers;

use App\Models\Talla;
use Illuminate\Http\Request;
use App\Http\Requests\TallaRequest;

class TallaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tallas = Talla::paginate(5);
        return view('tallas.index',compact('tallas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tallas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TallaRequest $request)
    {
        Talla::create($request->all());
        return redirect()->route('tallas.index')->with('mensaje','Datos guardados correctamente');
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
    public function edit(Talla $talla)
    {
        return view('tallas.edit',compact('talla'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TallaRequest $request, $id)
    {
        $talla = Talla::findOrFail($id);
        $datos = $request->all();
        $talla->update($datos);

        return redirect()->route('tallas.index')->with('mensaje','Datos actualizados correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Talla $talla)
    {
        $talla->delete();
        return back()->with('mensaje','Eliminado correctamente');
    }
}
