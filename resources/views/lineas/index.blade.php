@extends('layouts.main', ['activePage'=>'caracteristicas', 'titlePage'=>'Líneas de Productos'])
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
            {{--Botón agregar--}}
            <div class="row">
                <div class="col-12 text-left">
                    <a href="{{ route('lineas.create')  }}" class="btn btn-rose"> Agregar Línea </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        {{--Header--}}
                        <div class="card-header card-header-rose">
                            <h4 class="card-title"> Líneas </h4>
                        </div>
                        {{--Body--}}
                        <div class="card-body">
                            {{--tabla--}}
                            <div class="table-responsive">
                                <table class="table">
                                    {{--Cabecera de Tabla--}}
                                    <thead class="text-primary text-rose">
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Fecha de Creación</th>
                                    <th class="text-right">Acciones</th>
                                    </thead>
                                    {{--Llamar a las lineas--}}
                                    <tbody>
                                    @foreach($lineas as $linea)
                                        <tr>
                                            <td>{{ $linea->id }}</td>
                                            <td>{{ $linea->linea }}</td>
                                            <td>{{ $linea->created_at }}</td>
                                            <td class="td-actions text-right">
                                                {{--Editar--}}
                                                <a href="{{ route('lineas.edit',$linea->id) }}" class="btn btn-warning">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                {{--Eliminar--}}
                                                <form action="{{ route('lineas.delete',$linea->id) }}" method="post"
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
                        {{--Footer--}}
                        <div class="card-footer mr-auto">
                            {{ $lineas->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
