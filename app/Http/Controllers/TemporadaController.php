<?php

namespace App\Http\Controllers;

use App\Models\Temporada;
use Illuminate\Http\Request;
use App\Http\Requests\TemporadaRequest;

class TemporadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $temporadas = Temporada::paginate(5);
        return view('temporadas.index',compact('temporadas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('temporadas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TemporadaRequest $request)
    {
        Temporada::create($request->all());
        return redirect()->route('temporadas.index')->with('mensaje','Datos guardados correctamente');
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
    public function edit(Temporada $temporada)
    {
        return view('temporadas.edit',compact('temporada'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TemporadaRequest $request, $id)
    {
        $temporada = Temporada::findOrFail($id);
        $datos = $request->all();
        $temporada->update($datos);

        return redirect()->route('temporadas.index')->with('mensaje','Datos actualizados correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Temporada $temporada)
    {
        $temporada->delete();
        return back()->with('mensaje','Eliminado correctamente');
    }
}
