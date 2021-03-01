@extends('layouts.main',['activePage'=>'compra','titlePage'=>'Registrar Compra'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('compras.detalles.store',[$compra->id]) }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            {{--Header--}}
                            <div class="card-header card-header-rose">
                                <h4 class="card-title">Adiccionar Producto</h4>
                            </div>
                            {{--Body--}}
                            <div class="card-body">
                                <div class="row">
                                    {{--Cantidad--}}
                                    <label for="cantidad" class="col-sm-2 col-form-label">Cantidad</label>
                                    <div class="col-sm-3">
                                        <input type="text"
                                               class="form-control"
                                               name="cantidad"
                                               value="{{ old('cantidad') }}">
                                        @if ($errors->has('cantidad'))
                                            <span class="error text-danger" for="input-cantidad">
                                                {{ $errors->first('cantidad') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    {{--inventario_id--}}
                                    <label for="inventario_id" class="col-sm-2 col-form-label">Producto</label>
                                    <div class="col-sm-5">
                                        <select name="inventario_id" id="inputInventario_id" class="form-control">
                                            <option value="">-- Seleccione el tipo --</option>
                                            @foreach($inventarios as $inventario)
                                                <option value="{{ $inventario->id }}">
                                                    {{ $inventario->producto->descripcion }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('inventario_id'))
                                            <span class="error text-danger" for="input-inventario_id">
                                                {{ $errors->first('inventario_id') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                {{--costo_compra--}}
                                <div class="row">
                                    <label for="costo_compra" class="col-sm-2 col-form-label">Costo Unitario</label>
                                    <div class="col-sm-3">
                                        <input type="text"
                                               class="form-control"
                                               name="costo_compra"
                                               value="{{ old('costo_compra') }}">
                                        @if ($errors->has('costo_compra'))
                                            <span class="error text-danger" for="input-costo_compra">
                                                {{ $errors->first('costo_compra') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                {{--importe
                                <div class="row">
                                    <label for="importe" class="col-sm-2 col-form-label">SubTotal</label>
                                    <div class="col-sm-3">
                                        <input type="text"
                                               class="form-control"
                                               name="importe"
                                               value="{{ old('importe') }}">
                                        @if ($errors->has('importe'))
                                            <span class="error text-danger" for="input-importe">
                                                {{ $errors->first('importe') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>--}}
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
