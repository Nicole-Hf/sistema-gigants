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

                    {{--Lista Sectores--}}
                    <div class="card">
                        {{--Body--}}
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary text-rose">
                                    <th> # </th>
                                    <th> Nombre </th>
                                    <th> Fecha de Creación </th>
                                    <th> Acciones </th>
                                    </thead>
                                    <tbody>
                                    @foreach($sectores as $sector)
                                        <tr>
                                            <td>{{ $sector->id }}</td>
                                            <td>{{ $sector->nombre }}</td>
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
@endsection
