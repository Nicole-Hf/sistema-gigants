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
            {{--Detalle --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        {{--Body--}}
                        <div class="card-body">
                            <a href="#" class="btn btn-sm btn-rose"> Adiccionar Producto </a>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary text-rose">
                                    <th> # </th>
                                    <th> Cantidad </th>
                                    <th> Precio Unitario (Bs.-) </th>
                                    <th> SubTotal (Bs.-) </th>
                                    <th class="text-right"> Acciones </th>
                                    </thead>
                                    <tbody>
                                    {{--@foreach($compras as $compra)
                                        <tr>
                                            <td>{{ $compra->id }}</td>
                                            <td>{{ $compra->fecha }}</td>
                                            <td>{{ $compra->total }}</td>
                                            <td>{{ $compra->estado }}</td>
                                            <td>{{ $compra->saldo }}</td>
                                            <td>{{ $compra->proveedor->nombre }}</td>
                                            <td class="td-actions text-right">
                                                {{--Ver--}}
                                                {{--<a href="{{ route('compras.show',$compra->id) }}" class="btn btn-info">
                                                    <i class="material-icons">search</i>
                                                </a>
                                                {{--Editar--}}
                                    {{--<a href="{{ route('compras.edit',$compra->id) }}" class="btn btn-warning">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    {{--Eliminar--}}
    {{--<form action="{{ route('compras.delete',$compra->id) }}"
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
@endforeach--}}
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
