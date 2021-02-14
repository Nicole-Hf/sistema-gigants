@extends('layouts.main', ['activePage'=>'caracteristicas', 'titlePage'=>'Marcas'])
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
                    <a href="{{ route('marcas.create')  }}" class="btn btn-rose"> Agregar Marca </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        {{--Header--}}
                        <div class="card-header card-header-rose">
                            <h4 class="card-title"> Marcas </h4>
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
                                    {{--Llamar a las marcas--}}
                                    <tbody>
                                    @foreach($marcas as $marca)
                                        <tr>
                                            <td>{{ $marca->id }}</td>
                                            <td>{{ $marca->marca }}</td>
                                            <td>{{ $marca->created_at }}</td>
                                            <td class="td-actions text-right">
                                                {{--Editar Marca--}}
                                                <a href="{{ route('marcas.edit',$marca->id) }}" class="btn btn-warning">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                {{--Eliminar Marca--}}
                                                <form action="{{ route('marcas.delete',$marca->id) }}" method="post"
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
                            {{ $marcas->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
