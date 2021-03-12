@extends('layouts.main',['activePage'=>'venta','titlePage'=>'Venta'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-auto">
                    <div class="card">
                        {{--Header--}}
                        <div class="card-header card-header-text card-header-rose">
                            <div class="card-text">
                                <h5 class="card-title mx-3">Detalle de Venta</h5>
                            </div>
                        </div>
                        {{--Body--}}
                        <div class="card-body">
                            <p class="card-text">
                            <div class="author">
                                <p class="card-text">
                                    <label for="fecha_emision" class="col-form-label">Fecha: </label>
                                    {{ $venta->fecha_emision }} <br>
                                    <label for="descripcion" class="col-form-label">Descripción: </label>
                                    {{ $venta->descripcion }} <br>
                                    <label for="cliente_id" class="col-form-label">Cliente: </label>
                                    {{ $venta->cliente->nombre }}
                                    {{ $venta->cliente->apellidos }}<br>
                                    <label for="vendedor_id" class="col-form-label">Vendedor: </label>
                                    {{auth()->user()->persona->nombre}} {{auth()->user()->persona->apellidos}}
                                    {{--{{ $venta->vendedor->nombre }}
                                    {{ $venta->vendedor->apellidos }}--}}<br>
                                    <label for="total" class="col-form-label">Total a Pagar: </label>
                                    {{ $venta->total }} &nbsp;&nbsp;
                                </p>
                            </div>
                            </p>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <a href="{{ route('ventas.index') }}" class="btn btn-sm btn-rose">Volver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--Detalle--}}
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        {{--Body--}}
                        <div class="card-body">
                            <a href="{{ route('ventas.detalles.create',[$venta->id]) }}" class="btn btn-sm btn-rose"> Adiccionar Producto </a>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary text-rose">
                                    <th> # </th>
                                    <th> Producto </th>
                                    <th> Cantidad </th>
                                    <th> Precio Unitario (Bs.-) </th>
                                    <th> SubTotal (Bs.-) </th>
                                    <th class="text-right"> Acciones </th>
                                    </thead>
                                    <tbody>
                                    @foreach($venta->factura_detalles as $factura_detalle)
                                        <tr>
                                            <td>{{ $factura_detalle->id }}</td>
                                            <td>{{ $factura_detalle->producto->descripcion }}</td>
                                            <td>{{ $factura_detalle->cantidad }}</td>
                                            <td>{{ $factura_detalle->precio_venta }}</td>
                                            <td>{{ $factura_detalle->importe }}</td>
                                            <td class="td-actions text-right">
                                                <a href="{{ route('ventas.detalles.delete',[$factura_detalle->id,$venta->id]) }}"
                                                   class="btn btn-danger">
                                                    <i class="material-icons">close</i>
                                                </a>
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
