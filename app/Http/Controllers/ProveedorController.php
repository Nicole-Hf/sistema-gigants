<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonaRequest;
use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Self_;

class ProveedorController extends Controller
{
    public static $TIPO_PROVEEDOR = 3;

    public function index()
    {
        $personas = Persona::where('tipo',self::$TIPO_PROVEEDOR)->get();
        return view('compras.proveedores.index',['personas'=>$personas]);
    }

    public function create()
    {
        return view('compras.proveedores.create');
    }

    public function store(PersonaRequest $request)
    {
        $persona = new Persona();
        $persona->carnet_identidad = $request->input('carnet_identidad');
        $persona->nombre = $request->input('nombre');
        $persona->apellidos = $request->input('apellidos');
        $persona->telefono = $request->input('telefono');
        $persona->direccion = $request->input('direccion');
        $persona->email = $request->input('email');
        $persona->tipo = self::$TIPO_PROVEEDOR;
        $persona->save();

        return redirect()->route('compras.proveedores.index');
    }

    public function show($id)
    {
        $persona = Persona::findOrFail($id);
        return view('compras.proveedores.show',compact('persona'));
    }

    public function edit($id)
    {
        $persona = Persona::findOrFail($id);
        return view('compras.proveedores.edit',['persona'=>$persona]);
    }

    public function update(PersonaRequest $request, $id)
    {
        $persona = Persona::findOrFail($id);
        $datos = $request->all();
        $persona->update($datos);
        return redirect()->route('proveedores.index');
    }

    public function destroy($id)
    {
        $persona = Persona::findOrFail($id);
        $persona->delete();
        return redirect()->route('proveedores.index');
    }
}
