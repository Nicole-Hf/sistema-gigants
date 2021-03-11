@extends('layouts.main',['activePage'=>'almacen','titlePage'=>'Inventario'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    {{--Inventario por Almacen--}}
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary text-rose">
                                    <th> # </th>
                                    <th> Producto </th>
                                    <th> Stock </th>
                                    <th> Stock Mínimo </th>
                                    <th> Stock Máximo </th>
                                    </thead>
                                    <tbody>
                                    @foreach($inventarios as $inventario)
                                        <tr>
                                            <td>{{ $inventario->id }}</td>
                                            <td>{{ $inventario->producto->descripcion }}</td>
                                            <td>{{ $inventario->existencia }}</td>
                                            <td>{{ $inventario->minimo_stock }}</td>
                                            <td>{{ $inventario->maximo_stock }}</td>
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
