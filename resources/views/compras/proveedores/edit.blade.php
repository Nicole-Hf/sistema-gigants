@extends('layouts.main',['activePage'=>'proveedor','titlePage'=>'Editar Proveedor'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('proveedores.update',[$persona->id]) }}" method="post" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            {{--Header--}}
                            <div class="card-header card-header-rose">
                                <h4 class="card-title">Formulario de Edición</h4>
                            </div>
                            {{--Body--}}
                            <div class="card-body">
                                {{--Carnet de Identidad--}}
                                <div class="row">
                                    <label for="carnet_identidad" class="col-sm-2 col-form-label">Carnet de Identidad</label>
                                    <div class="col-sm-7">
                                        <input  type="text"
                                                class="form-control"
                                                name="carnet_identidad"
                                                value="{{ old('carnet_identidad',$persona->carnet_identidad) }}" autofocus>
                                        @if ($errors->has('carnet_identidad'))
                                            <span class="error text-danger" for="input-name">
                                                {{ $errors->first('carnet_identidad') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                {{--Nombre de Persona--}}
                                <div class="row">
                                    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                                    <div class="col-sm-7">
                                        <input  type="text"
                                                class="form-control"
                                                name="nombre"
                                                value="{{ old('nombre',$persona->nombre) }}" autofocus>
                                        @if ($errors->has('nombre'))
                                            <span class="error text-danger" for="input-name">
                                                {{ $errors->first('nombre') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                {{--Apellidos--}}
                                <div class="row">
                                    <label for="apellidos" class="col-sm-2 col-form-label">Apellidos</label>
                                    <div class="col-sm-7">
                                        <input  type="text"
                                                class="form-control"
                                                name="apellidos"
                                                value="{{ old('apellidos',$persona->apellidos) }}" autofocus>
                                        @if ($errors->has('apellidos'))
                                            <span class="error text-danger" for="input-name">
                                                {{ $errors->first('apellidos') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                {{--Telefono--}}
                                <div class="row">
                                    <label for="telefono" class="col-sm-2 col-form-label">Teléfono/Celular</label>
                                    <div class="col-sm-7">
                                        <input  type="text"
                                                class="form-control"
                                                name="telefono"
                                                value="{{ old('telefono',$persona->telefono) }}" autofocus>
                                        @if ($errors->has('telefono'))
                                            <span class="error text-danger" for="input-name">
                                                {{ $errors->first('telefono') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                {{--Direccion--}}
                                <div class="row">
                                    <label for="direccion" class="col-sm-2 col-form-label">Dirección</label>
                                    <div class="col-sm-7">
                                        <input  type="text"
                                                class="form-control"
                                                name="direccion"
                                                value="{{ old('direccion',$persona->direccion) }}" autofocus>
                                        @if ($errors->has('direccion'))
                                            <span class="error text-danger" for="input-name">
                                                {{ $errors->first('direccion') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                {{--Correo de Persona--}}
                                <div class="row">
                                    <label for="email" class="col-sm-2 col-form-label">Correo electrónico</label>
                                    <div class="col-sm-7">
                                        <input  type="email"
                                                class="form-control"
                                                name="email"
                                                value="{{ old('email',$persona->email) }}">
                                        @if ($errors->has('email'))
                                            <span class="error text-danger" for="input-name">
                                                {{ $errors->first('email') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{--Botones/Footer--}}
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-rose">Actualizar Datos</button>
                                <a class="btn btn-rose" href="{{ route('proveedores.index') }}">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
