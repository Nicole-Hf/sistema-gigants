@extends('layouts.main',['activePage'=>'almacen','titlePage'=>'Registrar Sector de Almacén'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('sectores.store',[$almacen->id]) }}" method="POST" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-rose">
                                <h4 class="card-title">Formulario de Registro</h4>
                            </div>
                            <div class="card-body">
                                {{--Almacen
                                <div class="row">
                                    <label for="almacen_id" class="col-sm-2 col-form-label">Almacén</label>
                                    <div class="col-sm-3">
                                        <select name="almacen_id" id="inputAlmacen_id" class="form-control">
                                            <option value="">-- Seleccione un almacén --</option>
                                            @foreach($almacenes as $almacen)
                                                <option value="{{ $almacen->id }}">
                                                    {{ $almacen->nombre }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('almacen_id'))
                                            <span class="error text-danger" for="input-almacen_id">
                                                {{ $errors->first('almacen_id') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>--}}
                                {{--Nombre--}}
                                <div class="row">
                                    <label for="nombre" class="col-sm-3 col-form-label">Nombre del Sector</label>
                                    <div class="col-sm-7">
                                        <input type="text"
                                               class="form-control"
                                               name="nombre"
                                               value="{{ old('nombre') }}">
                                        @if ($errors->has('nombre'))
                                            <span class="error text-danger" for="input-nombre">
                                                    {{ $errors->first('nombre') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{--Botones--}}
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-rose">Guardar Datos</button>
                                <a class="btn btn-rose" href="{{ route('almacenes.index') }}">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            {{--Lista de Sectores--}}
            <div class="row">
                <div class="col-md-12">
                    {{--agregar
                    <div class="row">
                        <div class="col-12 text-left">
                            <a href="{{ route('sectores.create',[$almacen->id]) }}" class="btn btn-rose"> Agregar Sector </a>
                        </div>
                    </div>--}}
                    <div class="row">
                        <div class="col-md-9">
                            <div class="card">
                                {{--<div class="card-header card-header-rose">
                                    <h4 class="card-title">Sectores</h4>
                                </div>--}}
                                {{--Body--}}
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-primary text-rose">
                                            <th> # </th>
                                            <th> Nombre </th>
                                            {{--<th> Almacén </th>--}}
                                            <th> Fecha de Creación </th>
                                            <th> Acciones </th>
                                            </thead>
                                            <tbody>
                                            @foreach($sectores as $sector)
                                                <tr>
                                                    <td>{{ $sector->id }}</td>
                                                    <td>{{ $sector->nombre }}</td>
                                                    {{--<td>{{ $sector->almacen->nombre }}</td>--}}
                                                    <td>{{ $sector->created_at }}</td>
                                                    <td class="td-actions">
                                                        {{--Editar--}}
                                                        <a href="{{ route('sectores.edit',$sector->id) }}" class="btn btn-warning">
                                                            <i class="material-icons">edit</i>
                                                        </a>
                                                        {{--Eliminar--}}
                                                        <form action="{{ route('sectores.delete',$sector->id) }}"
                                                              method="POST" style="display: inline-block;"
                                                              onsubmit="return confirm('¿Está seguro?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger" type="submit">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
