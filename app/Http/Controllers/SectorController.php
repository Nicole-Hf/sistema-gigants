<?php

namespace App\Http\Controllers;

use App\Http\Requests\SectorRequest;
use App\Models\Almacen;
use App\Models\Sector;
use Illuminate\Http\Request;

class SectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$almacen = Almacen::findOrFail($almacen_id);
        $sectores = Sector::where('almacen_id',$almacen_id)->get();
        return view('sectores.index',
            [
                'sectores'=>$sectores,
                'almacen'=>$almacen
            ]);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($almacen_id)
    {
        $almacen = Almacen::findOrFail($almacen_id);
        $sectores = Sector::where('almacen_id',$almacen_id)->get();
        return view('sectores.create',
            [
                'almacen'=>$almacen,
                'sectores'=>$sectores
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SectorRequest $request,$almacen_id)
    {
        $sector = new Sector();
        $sector->nombre = $request->input('nombre');
        $sector->almacen_id = $almacen_id;
        $sector->save();

        return redirect()->route('sectores.create',[$almacen_id]);

        //Sector::create($request->only('nombre')+['almacen_id'=>$almacen_id]);
        //Sector::create($request->all());
        //return redirect()->route('sectores.index');
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
        $sector = Sector::findOrFail($id);
        //$almacenes = Almacen::all();
        return view('sectores.edit',
            [
                'sector'=>$sector
                //'almacenes'=>$almacenes
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SectorRequest $request, $id)
    {
        $sector = Sector::findOrFail($id);
        $datos = $request->all();
        $sector->update($datos);
        return redirect()->route('sectores.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sector = Sector::findOrFail($id);
        $sector->delete();
        return redirect()->route('sectores.index');
    }
}
