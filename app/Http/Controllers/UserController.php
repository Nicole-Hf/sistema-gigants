<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserEditRequest;
use App\Http\Requests\UserRequest;
use App\Models\Persona;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public static $TIPO_USUARIO = 1; //o 1:vendedor/user, 2:clientes, 3:proveedores

    public function index()
    {
        /*$users = User::paginate(5);
        return view('users.index', compact('users'));*/

        $personas = Persona::all();
        return view('users.index',['personas'=>$personas]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserRequest $request)
    {
        /*User::create($request->only('name','email')
            + [
                'password' => bcrypt($request->input('password')),
            ]);
        return redirect()->route('users.index')->with('mensaje','Usuario creado correctamente');*/

        $persona = new Persona();
        $persona->carnet_identidad = $request->input('carnet_identidad');
        $persona->nombre = $request->input('nombre');
        $persona->apellidos = $request->input('apellidos');
        $persona->telefono = $request->input('telefono');
        $persona->direccion = $request->input('direccion');
        $persona->email = $request->input('email');
        $persona->tipo = self::$TIPO_USUARIO;
        $persona->save();

        $user = new User();
        $user->name = $request->input('nombre');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->persona_id = $persona->id;
        $user->save();

        return redirect()->route('users.index');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    public function edit($id)
    {
        $persona = Persona::findOrFail($id);
        return view('users.edit', ['persona'=>$persona]);
    }

    public function update(UserEditRequest $request, $id)
    {
        /*$user=User::findOrFail($id);
        $datos = $request->only('name','email');
        if (trim($request->password)=='')
        {
            $datos=$request->except('password');
        }
        else{
            $datos=$request->all();
            $datos['password']=bcrypt($request->password);
        }

        $user->update($datos);
        return redirect()->route('users.index')->with('mensaje','Datos actualizados correctamente');*/

        $persona = Persona::findOrFail($id);
        $persona->carnet_identidad = $request->input('carnet_identidad');
        $persona->nombre = $request->input('nombre');
        $persona->apellidos = $request->input('apellidos');
        $persona->telefono = $request->input('telefono');
        $persona->direccion = $request->input('direccion');
        $persona->email = $request->input('email');
        $persona->tipo = self::$TIPO_USUARIO;
        $persona->save();

        $user = $persona->user; //accede al modelo Persona funcion "user"
        $datos = $request->only('name','email','persona_id');
        if (trim($request->password)=='')
        {
            $datos=$request->except('password');
        }
        else{
            $datos=$request->all();
            $datos['password']=bcrypt($request->password);
        }
        /*$user->name = $request->input('nombre');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->persona_id = $persona->id;
        $user->save();*/
        $user->update($datos);

        return redirect()->route('users.index');
    }

    public function destroy($id) //User $user
    {
        /*$user->delete();
        return back()->with('mensaje','Usuario eliminado correctamente');*/

        $persona = Persona::findOrFail($id);
        $persona->delete();
        return redirect()->route('users.index');
    }
}
