@extends('layouts.main',['activePage'=>'users','titlePage'=>'Editar Usuario'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('users.update', $user->id) }}" method="post" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            {{--Header--}}
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Usuario</h4>
                                <p class="card-category">Ingresar Datos</p>
                            </div>
                            {{--Body--}}
                            <div class="card-body">
                                {{--Nombre de Usuario--}}
                                <div class="row">
                                    <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                    <div class="col-sm-7">
                                        <input  type="text"
                                                class="form-control"
                                                name="name"
                                                value="{{ old('name',$user->name) }}" autofocus>
                                        @if ($errors->has('name'))
                                            <span class="error text-danger" for="input-name">
                                                {{ $errors->first('name') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                {{--Correo de Usuario--}}
                                <div class="row">
                                    <label for="email" class="col-sm-2 col-form-label">Correo electrónico</label>
                                    <div class="col-sm-7">
                                        <input  type="email"
                                                class="form-control"
                                                name="email"
                                                value="{{ old('email',$user->email) }}">
                                        @if ($errors->has('email'))
                                            <span class="error text-danger" for="input-name">
                                                {{ $errors->first('email') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                {{--Contraseña de Usuario--}}
                                <div class="row">
                                    <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                                    <div class="col-sm-7">
                                        <input  type="password"
                                                class="form-control"
                                                name="password"
                                                placeholder="Ingrese la contraseña solo si quiere cambiarla">
                                        @if ($errors->has('password'))
                                            <span class="error text-danger" for="input-name">
                                                {{ $errors->first('password') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{--Botones/Footer--}}
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">Actualizar Datos</button>
                                <a class="btn btn-primary" href="{{ route('users.index') }}">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
