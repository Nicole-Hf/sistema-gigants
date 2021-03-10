@extends('layouts.main',['activePage'=>'cuotas','titlePage'=>'Agregar Cuota'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('compras.cuotas.store',[$compra->id]) }}" method="POST" class="form-horizontal">
                        @csrf
                        <div class="card">
                            {{--Cabecera--}}
                            <div class="card-header card-header-rose">
                                <h4 class="card-title">Créditos</h4>
                            </div>
                            {{--Cuerpo de la tabla--}}
                            <div class="card-body">
                                <div class="row">
                                    <label for="fecha" class="col-sm-2 col-form-label">Fecha de Pago</label>
                                    <div class="col-sm-3">
                                        <input type="text"
                                               class="form-control"
                                               name="fecha"
                                               placeholder="    AAAA/MM/DD" value="{{ old('fecha') }}">
                                        @if ($errors->has('fecha'))
                                            <span class="error text-danger" for="input-ini_date">
                                                {{ $errors->first('fecha') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="monto" class="col-sm-2 col-form-label"> Monto a Pagar </label>
                                    <div class="col-sm-4">
                                        <input type="text"
                                               class="form-control"
                                               name="monto"
                                               value="{{ old('monto') }}" autofocus>
                                        @if ($errors->has('monto'))
                                            <span class="error text-danger" for="input-monto">
                                                {{ $errors->first('monto') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="total" class="col-sm-2 col-form-label"> Monto Total </label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" value=" Bs.- {{ $compra->total }}" disabled>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="saldo" class="col-sm-2 col-form-label"> Monto Pendiente </label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" value=" Bs.- {{ $compra->saldo }}" disabled>
                                    </div>
                                </div>
                            </div>
                            {{--Botones--}}
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-rose"> Guardar Datos </button>
                                <a class="btn btn-rose" href="{{ route('compras.cuotas.index') }}"> Cancelar </a>
                            </div>
                        </div>
                    </form>
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
                                    @foreach($cuotas as $cuota)
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
