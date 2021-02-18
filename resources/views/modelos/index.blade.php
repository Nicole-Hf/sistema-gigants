@extends('layouts.main',['activePage'=>'caracteristicas','titlePage'=>'Modelo'])
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
            <div class="row">
                <div class="col-md-12">
                    {{--boton agregar--}}
                    <div class="row">
                        <div class="col-12 text-left">
                            <a href="{{ route('modelos.create') }}" class="btn btn-rose"> Agregar Modelo </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9">
                            <div class="card">
                                {{--Titulo de la tabla--}}
                                <div class="card-header card-header-rose">
                                    <h4 class="card-title"> Modelos </h4>
                                </div>
                                {{--Cuerpo--}}
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
                                            @foreach( $modelos as $modelo )
                                                <tr>
                                                    <td>{{ $modelo->id }}</td>
                                                    <td>{{ $modelo->descripcion }}</td>
                                                    <td>{{ $modelo->created_at }}</td>
                                                    <td class="td-actions">
                                                        {{--Editar--}}
                                                        <a href="{{ route('modelos.edit',$modelo->id) }}" class="btn btn-warning">
                                                            <i class="material-icons">edit</i>
                                                        </a>
                                                        {{--Eliminar--}}
                                                        <form action="{{ route('modelos.delete',$modelo->id) }}"
                                                              method="POST"
                                                              style="display: inline-block"
                                                              onsubmit="return confirm('¿Está seguro?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger" type="submit" rel="tooltip">
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
                                {{--Botones--}}
                                <div class="card-footer mr-auto">
                                    {{ $modelos->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
