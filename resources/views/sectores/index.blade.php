@extends('layouts.main',['activePage'=>'sector','titlePage'=>'Sector de Almacén'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    {{--agregar--}}
                    <div class="row">
                        <div class="col-12 text-left">
                            <a href="{{ route('sectores.create',[$almacen->id]) }}" class="btn btn-rose"> Agregar Sector </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-rose">
                                    <h4 class="card-title">Sectores</h4>
                                </div>
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
