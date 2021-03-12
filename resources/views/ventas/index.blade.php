@extends('layouts.main',['activePage'=>'venta','titlePage'=>'Ventas'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            {{--Mensaje--}}
            <div class="row">
                <div class="col-md-12">
                    {{--boton agregar--}}
                    <div class="row">
                        <div class="col-12 text-left">
                            <a href="{{ route('ventas.create') }}" class="btn btn-rose"> Agregar Venta </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                {{--Header--}}
                                <div class="card-header card-header-rose">
                                    <h4 class="card-title">Ventas</h4>
                                </div>
                                {{--Body--}}
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-primary text-rose">
                                            <th> # </th>
                                            <th> Fecha de Venta </th>
                                            <th> Cliente </th>
                                            <th> Descripción </th>
                                            <th> Total (Bs.-) </th>
                                            <th class="text-right"> Acciones </th>
                                            </thead>
                                            <tbody>
                                            @foreach($ventas as $venta)
                                                <tr>
                                                    <td>{{ $venta->id }}</td>
                                                    <td>{{ $venta->fecha_emision }}</td>
                                                    <td>{{ $venta->cliente->nombre }}</td>
                                                    <td>{{ $venta->descripcion }}</td>
                                                    <td>{{ $venta->total }}</td>
                                                    <td class="td-actions text-right">
                                                        {{--Reporte--}}
                                                        <a href="{{ route('ventas.pdf',$venta->id) }}" class="btn btn-social btn-fill btn-facebook">
                                                            <i class="material-icons">article</i>
                                                        </a>
                                                        {{--Ver--}}
                                                        <a href="{{ route('ventas.show',$venta->id) }}" class="btn btn-success">
                                                            <i class="material-icons">search</i>
                                                        </a>
                                                        {{--Editar
                                                        <a href="{{ route('compras.edit',$compra->id) }}" class="btn btn-warning">
                                                            <i class="material-icons">edit</i>
                                                        </a>--}}
                                                        {{--Eliminar--}}
                                                        <form action="{{ route('ventas.delete',$venta->id) }}"
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
