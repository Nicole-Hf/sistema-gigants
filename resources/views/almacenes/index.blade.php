@extends('layouts.main', ['activePage'=>'almacen', 'titlePage'=>'Almacén'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            {{--Mensaje--}}
            @if (Session::has('mensaje'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    {{ Session::get('mensaje') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            {{--Boton--}}
            <div class="row">
                <div class="col-12 text-left">
                    <a href="{{ route('almacenes.create') }}" class="btn btn-rose"> Agregar Almacén </a>
                </div>
            </div>
            {{--Tabla--}}
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header card-header-rose">
                            <h4 class="card-title"> Almacén </h4>
                        </div>
                        {{--Body--}}
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary text-rose">
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Ubicación</th>
                                    <th>Fecha de Creación</th>
                                    <th>Accion</th>
                                    </thead>
                                    <tbody>
                                    @foreach($almacenes as $almacen)
                                        <tr>
                                            <td>{{ $almacen->id }}</td>
                                            <td>{{ $almacen->nombre }}</td>
                                            <td>{{ $almacen->ubicacion }}</td>
                                            <td>{{ $almacen->created_at }}</td>
                                            <td class="td-actions">
                                                {{--Editar--}}
                                                <a href="{{ route('almacenes.edit',$almacen->id) }}" class="btn btn-warning">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                {{--Eliminar--}}
                                                <form action="{{ route('almacenes.delete',$almacen->id) }}" method="POST"
                                                      style="display: inline-block;"
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
