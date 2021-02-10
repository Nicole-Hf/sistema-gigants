<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(5);
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        User::create($request->only('name','email')
            + [
                'password' => bcrypt($request->input('password')),
            ]);
        return redirect()->route('users.index')->with('mensaje','Usuario creado correctamente');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user=User::findOrFail($id);
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
        return redirect()->route('users.index')->with('mensaje','Datos actualizados correctamente');;
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('mensaje','Usuario eliminado correctamente');
    }
}
