<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonaRequest;
use App\Models\Persona;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public static $TIPO_CLIENTE = 2;

    public function index()
    {
        $personas = Persona::where('tipo',self::$TIPO_CLIENTE)->get();
        return view('ventas.clientes.index',['personas'=>$personas]);
    }

    public function create()
    {
        return view('ventas.clientes.create');
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
        $persona->tipo = self::$TIPO_CLIENTE;
        $persona->save();

        return redirect()->route('clientes.index');
    }

    public function show($id)
    {
        $persona = Persona::findOrFail($id);
        return view('ventas.clientes.show',compact('persona'));
    }

    public function edit($id)
    {
        $persona = Persona::findOrFail($id);
        return view('ventas.clientes.edit',['persona'=>$persona]);
    }

    public function update(PersonaRequest $request, $id)
    {
        $persona = Persona::findOrFail($id);
        $datos = $request->all();
        $persona->update($datos);
        return redirect()->route('clientes.index');
    }

    public function destroy($id)
    {
        $persona = Persona::findOrFail($id);
        $persona->delete();
        return redirect()->route('clientes.index');
    }
}
