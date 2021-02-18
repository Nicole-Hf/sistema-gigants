<?php

namespace App\Http\Controllers;

use App\Http\Requests\LineaEditRequest;
use App\Models\Linea;
use Illuminate\Http\Request;

class LineaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lineas = Linea::paginate(5);
        return view('lineas.index',compact('lineas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lineas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LineaEditRequest $request)
    {
        Linea::create($request->all());
        return redirect()->route('lineas.index')->with('mensaje','Datos guardados correctamente');
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
    public function edit(Linea $linea)
    {
        return view('lineas.edit',compact('linea'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LineaEditRequest $request, $id)
    {
        $linea = Linea::findOrFail($id);
        $datos = $request->all();
        $linea->update($datos);

        return redirect()->route('lineas.index')->with('mensaje','Datos actualizados correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Linea $linea)
    {
        $linea->delete();
        return back()->with('mensaje','Eliminado correctamente');
    }
}
