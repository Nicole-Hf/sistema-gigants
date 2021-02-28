@extends('layouts.main',['activePage'=>'compra','titlePage'=>'Registrar Compra'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('compras.detalles.store') }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            {{--Header--}}
                            <div class="card-header card-header-rose">
                                <h4 class="card-title">Adiccionar Producto</h4>
                            </div>
                            {{--Body--}}
                            <div class="card-body">
                                <div class="row">
                                    {{--Estado--}}
                                    <label for="estado" class="col-sm-2 col-form-label">Estado de Compra</label>
                                    <div class="col-sm-3">
                                        <input type="text"
                                               class="form-control"
                                               name="estado"
                                               value="{{ old('estado') }}">
                                        @if ($errors->has('estado'))
                                            <span class="error text-danger" for="input-estado">
                                                {{ $errors->first('estado') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    {{--Producto--}}
                                    <label for="tipo_compra_id" class="col-sm-2 col-form-label">Tipo de Compra</label>
                                    <div class="col-sm-3">
                                        <select name="tipo_compra_id" id="inputTipo_compra_id" class="form-control">
                                            <option value="">-- Seleccione el tipo --</option>
                                            @foreach($tipos_compras as $tipo_compra)
                                                <option value="{{ $tipo_compra->id }}">
                                                    {{ $tipo_compra->tipo }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('tipo_compra_id'))
                                            <span class="error text-danger" for="input-tipo_compra_id">
                                                {{ $errors->first('tipo_compra_id') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                {{--Saldo--}}
                                <div class="row">
                                    <label for="saldo" class="col-sm-2 col-form-label">Saldo a pagar</label>
                                    <div class="col-sm-3">
                                        <input type="text"
                                               class="form-control"
                                               name="saldo"
                                               value="{{ old('saldo') }}">
                                        @if ($errors->has('saldo'))
                                            <span class="error text-danger" for="input-saldo">
                                                {{ $errors->first('saldo') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                {{--Proveedor--}}
                                <div class="row">
                                    <label for="proveedor_id" class="col-sm-2 col-form-label">Proveedor</label>
                                    <div class="col-sm-3">
                                        <select name="proveedor_id" id="inputProveedor_id" class="form-control">
                                            <option value="">-- Seleccione el proveedor --</option>
                                            @foreach($proveedores as $proveedor)
                                                <option value="{{ $proveedor->id }}">
                                                    {{ $proveedor->nombre }}
                                                    {{ $proveedor->apellidos }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('proveedor_id'))
                                            <span class="error text-danger" for="input-proveedor_id">
                                                {{ $errors->first('proveedor_id') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{--Botones--}}
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-rose">Guardar Datos</button>
                                <a class="btn btn-rose" href="{{ route('compras.index') }}">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
