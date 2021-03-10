@extends('layouts.main',['activePage'=>'cuotas','titlePage'=>'Gestionar Cuotas'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            {{--Botón agregar--}}
            <div class="row">
                <div class="col-12 text-left">
                    <a href="{{ route('compras.cuotas.index2') }}" class="btn btn-rose">Deudas Canceladas</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-rose">
                            <h4 class="card-title">Deudas Pendientes</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary text-rose">
                                    <th> # </th>
                                    <th> Fecha de Compra </th>
                                    <th> Proveedor </th>
                                    <th> Total (Bs.-) </th>
                                    <th> Total Pagado (Bs.-) </th>
                                    <th> Total Deuda (Bs.-) </th>
                                    <th> Acción </th>
                                    </thead>
                                    <tbody>
                                    @foreach($compras as $compra)
                                        <tr>
                                            <td>{{ $compra->id }}</td>
                                            <td>{{ $compra->fecha }}</td>
                                            <td>{{ $compra->proveedor->nombre }} </td>
                                            <td>{{ $compra->total }}</td>
                                            <td>{{ $compra->total - $compra->saldo }}</td>
                                            <td>{{ $compra->saldo }}</td>
                                            <td>
                                                <a href="{{ route('compras.cuotas.create',$compra->id) }}" class="btn btn-just-icon btn-round btn-sm btn-success">
                                                    <i class="material-icons">attach_money</i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{--Footer
                        <div class="card-footer mr-auto">
                            {{ $compras->links() }}
                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
