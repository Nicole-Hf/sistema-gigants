@extends('layouts.main',['activePage'=>'cuotas','titlePage'=>'Agregar Cuota'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    {{--Lista de Cuotas--}}
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary text-rose">
                                    <th> # </th>
                                    <th> Fecha de Pagos </th>
                                    <th> Montos Pagados </th>
                                    </thead>
                                    <tbody>
                                    @foreach($compra->cuotas as $cuota)
                                        <tr>
                                            <td>{{ $cuota->id }}</td>
                                            <td>{{ $cuota->fecha }}</td>
                                            <td>{{ $cuota->monto }}</td>
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
