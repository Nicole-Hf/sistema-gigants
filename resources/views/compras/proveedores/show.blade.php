@extends('layouts.main',['activePage'=>'proveedor', 'titlePage'=>'Proveedor'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="col-md-6">
                <div class="card">
                    {{--Header Principal--}}
                    {{--<div class="card card-nav-tabs text-center">--}}
                    <div class="card-header card-header-text card-header-rose">  {{--card-header card-header-rose--}}
                        <div class="card-text">
                            <a href="#" class="d-flex">
                                {{--<img src="{{ asset('/img/faces/avatar.jpg') }}" class="card-img-top" style="width:60px">--}}
                                <h2 class="card-title mx-3">Datos del Proveedor</h2>
                                {{--<p class="card-category">{{ $user->name }}</p>--}}
                            </a>
                        </div>
                    </div>
                    {{--Body Principal--}}
                    <div class="card-body">
                        <p class="card-text">
                        <div class="author">
                            <p class="card-text ">
                                <label for="carnet_identidad" class="col-form-label">Carnet de Identidad: </label>
                                {{ $persona->carnet_identidad }} <br>
                                <label for="nombre" class="col-form-label">Nombre Completo: </label>
                                {{ $persona->nombre }}
                                {{ $persona->apellidos }} <br>
                                <label for="telefono" class="col-form-label">Teléfono: </label>
                                {{ $persona->telefono }} <br>
                                <label for="direccion" class="col-form-label">Dirección: </label>
                                {{ $persona->direccion }} <br>
                                <label for="email" class="col-form-label">Correo Electrónico: </label>
                                {{ $persona->email }} <br>
                                <label for="tipo" class="col-form-label">Tipo de Persona: </label>
                                {{ $persona->tipo }} -PROVEEDOR <br>
                                <label for="created_at" class="col-form-label">Fecha de Creación: </label>
                                {{ $persona->created_at }} <br>
                            </p>
                        </div>
                        </p>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <a href="{{ route('proveedores.index')}}" class="btn btn-rose">Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
