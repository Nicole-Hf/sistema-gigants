@extends('layouts.main', ['activePage'=>'caracteristicas', 'titlePage'=>'Promociones'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            {{--Boton agregar--}}
            <div class="row">
                <div class="col-12 text-left">
                    <a href="{{ route('promociones.create') }}" class="btn btn-rose"> Agregar Promoción </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        {{--Header--}}
                        <div class="card-header card-header-rose">
                            <h4 class="card-title"> Promociones </h4>
                        </div>
                        {{--Body--}}
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    {{--cabecera--}}
                                    <thead class="text-primary text-rose">
                                    <th> # </th>
                                    <th> Precio de Promoción </th>
                                    <th> Fecha de Inicio </th>
                                    <th> Fecha Final </th>
                                    <th> Acciones </th>
                                    </thead>
                                    {{--Llenar tabla--}}
                                    <tbody>
                                    @foreach($promociones as $promocion)
                                        <tr>
                                            <td>{{ $promocion->id }}</td>
                                            <td>{{ $promocion->precio }}</td>
                                            <td>{{ $promocion->ini_date }}</td>
                                            <td>{{ $promocion->fin_date }}</td>
                                            <td class="td-actions">
                                                {{--Editar--}}
                                                <a href="{{ route('promociones.edit',$promocion->id) }}"
                                                   class="btn btn-warning">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                {{--Eliminar--}}
                                                <form action="{{ route('promociones.delete',$promocion->id) }}"
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
