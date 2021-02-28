@extends('layouts.main',['activePage'=>'producto','titlePage'=>'Agregar Stock'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('productos.inventarios.store',[$producto->id]) }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            {{--Header--}}
                            <div class="card-header card-header-rose">
                                <h4 class="card-title">Entradas a Inventario</h4>
                            </div>
                            {{--Body--}}
                            <div class="card-body">
                                <div class="row">
                                    {{--minimo_stock--}}
                                    <label for="minimo_stock" class="col-sm-2 col-form-label">Stock Mínimo</label>
                                    <div class="col-sm-3">
                                        <input type="text"
                                               class="form-control"
                                               name="minimo_stock"
                                               value="{{ old('minimo_stock') }}">
                                        @if ($errors->has('minimo_stock'))
                                            <span class="error text-danger" for="input-minimo_stock">
                                                {{ $errors->first('minimo_stock') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    {{--maximo_stock--}}
                                    <label for="maximo_stock" class="col-sm-2 col-form-label">Stock Máximo</label>
                                    <div class="col-sm-3">
                                        <input type="text"
                                               class="form-control"
                                               name="maximo_stock"
                                               value="{{ old('maximo_stock') }}">
                                        @if ($errors->has('maximo_stock'))
                                            <span class="error text-danger" for="input-maximo_stock">
                                                {{ $errors->first('maximo_stock') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    {{--almacen_id--}}
                                    <label for="almacen_id" class="col-sm-2 col-form-label">Almacén</label>
                                    <div class="col-sm-3">
                                        <select name="almacen_id" id="inputAlmacen_id" class="form-control">
                                            <option value="">-- Seleccione el tipo --</option>
                                            @foreach($almacenes as $almacen)
                                                <option value="{{ $almacen->id }}">
                                                    {{ $almacen->nombre }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('almacen_id'))
                                            <span class="error text-danger" for="input-almacen_id">
                                                {{ $errors->first('almacen_id') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{--Botones--}}
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-rose">Guardar Datos</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
