@extends('layouts.main',['activePage'=>'productos','titlePage'=>'Producto'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            {{--Mensaje--}}
            <div class="row">
                <div class="col-md-12">
                    {{--boton agregar--}}
                    <div class="row">
                        <div class="col-12 text-left">
                            <a href="{{ route('productos.create') }}" class="btn btn-rose"> Registrar Producto </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                {{--Header--}}
                                <div class="card-header card-header-rose">
                                    <h4 class="card-title">Productos</h4>
                                </div>
                                {{--Body--}}
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-primary text-rose">
                                            <th> # </th>
                                            <th> Descripción </th>
                                            <th> Código de Barras </th>
                                            <th> Precio </th>
                                            <th class="text-right"> Acciones </th>
                                            </thead>
                                            <tbody>
                                            @foreach($productos as $producto)
                                                <tr>
                                                    <td>{{ $producto->id }}</td>
                                                    <td>{{ $producto->descripcion }}</td>
                                                    <td>{{ $producto->codigo_barra }}</td>
                                                    <td>{{ $producto->precio }}</td>
                                                    <td class="td-actions text-right">
                                                        {{--Ver--}}
                                                        <a href="{{ route('productos.show',$producto->id) }}" class="btn btn-info">
                                                            <i class="material-icons">search</i>
                                                        </a>
                                                        {{--Editar--}}
                                                        <a href="{{ route('productos.edit',$producto->id) }}" class="btn btn-warning">
                                                            <i class="material-icons">edit</i>
                                                        </a>
                                                        {{--Eliminar--}}
                                                        <form action="{{ route('productos.delete',$producto->id) }}"
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
