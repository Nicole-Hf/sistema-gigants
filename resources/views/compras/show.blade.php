@extends('layouts.main',['activePage'=>'compra','titlePage'=>'Compra'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-auto">
                    <div class="card">
                        {{--Header--}}
                        <div class="card-header card-header-text card-header-rose">
                            <div class="card-text">
                                <h5 class="card-title mx-3">Detalle de Compra</h5>
                            </div>
                        </div>
                        {{--Body--}}
                        <div class="card-body">
                            <p class="card-text">
                            <div class="author">
                                <p class="card-text">
                                    <label for="fecha" class="col-form-label">Fecha: </label>
                                    {{ $compra->fecha }} <br>
                                    <label for="tipo_compra_id" class="col-form-label">Tipo de compra: </label>
                                    {{ $compra->tipo_compra->tipo }} <br>
                                    <label for="proveedor_id" class="col-form-label">Proveedor: </label>
                                    {{ $compra->proveedor->nombre }}
                                    {{ $compra->proveedor->apellidos }}<br>
                                    <label for="estado" class="col-form-label">Estado de la compra: </label>
                                    {{ $compra->estado }} <br>
                                    <label for="total" class="col-form-label">Costo Total: </label>
                                    {{ $compra->total }} &nbsp;&nbsp;
                                    <label for="saldo" class="col-form-label">Saldo a pagar: </label>
                                    {{ $compra->saldo }} <br>
                                </p>
                            </div>
                            </p>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <a href="{{ route('compras.index') }}" class="btn btn-sm btn-rose">Volver</a>
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
                            <a href="{{ route('compras.detalles.create',[$compra->id]) }}" class="btn btn-sm btn-rose"> Adiccionar Producto </a>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary text-rose">
                                    <th> # </th>
                                    <th> Descripción </th>
                                    <th> Cantidad </th>
                                    <th> Precio Unitario (Bs.-) </th>
                                    <th> SubTotal (Bs.-) </th>
                                    <th class="text-right"> Acciones </th>
                                    </thead>
                                    <tbody>
                                    @foreach($compra->compra_detalles as $compra_detalle)
                                        <tr>
                                            <td>{{ $compra_detalle->id }}</td>
                                            <td>{{ $compra_detalle->producto->descripcion }}</td>
                                            <td>{{ $compra_detalle->cantidad }}</td>
                                            <td>{{ $compra_detalle->costo_compra }}</td>
                                            <td>{{ $compra_detalle->importe }}</td>
                                            <td class="td-actions text-right">
                                                {{--Eliminar--}}
                                                <form action="#"
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
