@extends('layouts.main',['activePage'=>'compra','titlePage'=>'Compras'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            {{--Mensaje--}}
            <div class="row">
                <div class="col-md-12">
                    {{--boton agregar--}}
                    <div class="row">
                        <div class="col-12 text-left">
                            <a href="{{ route('compras.create') }}" class="btn btn-rose"> Agregar Compra </a>
                            <a href="{{ route('tipo_compra.create') }}" class="btn btn-rose"> Tipo de Compra </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                {{--Header--}}
                                <div class="card-header card-header-rose">
                                    <h4 class="card-title">Compras</h4>
                                </div>
                                {{--Body--}}
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-primary text-rose">
                                            <th> # </th>
                                            <th> Fecha de Compra </th>
                                            <th> Proveedor </th>
                                            <th> Total (Bs.-) </th>
                                            <th> Saldo (Bs.-) </th>
                                            <th> Estado </th>
                                            <th class="text-right"> Acciones </th>
                                            </thead>
                                            <tbody>
                                            @foreach($compras as $compra)
                                                <tr>
                                                    <td>{{ $compra->id }}</td>
                                                    <td>{{ $compra->fecha }}</td>
                                                    <td>{{ $compra->proveedor->nombre }}</td>
                                                    <td>{{ $compra->total }}</td>
                                                    <td>{{ $compra->saldo }}</td>
                                                    <td>{{ $compra->estado }}</td>
                                                    <td class="td-actions text-right">
                                                        {{--Ver--}}
                                                        <a href="{{ route('compras.show',$compra->id) }}" class="btn btn-info">
                                                            <i class="material-icons">search</i>
                                                        </a>
                                                        {{--Editar
                                                        <a href="{{ route('compras.edit',$compra->id) }}" class="btn btn-warning">
                                                            <i class="material-icons">edit</i>
                                                        </a>--}}
                                                        {{--Eliminar--}}
                                                        <form action="{{ route('compras.delete',$compra->id) }}"
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
