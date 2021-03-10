@extends('layouts.main',['activePage'=>'compra','titlePage'=>'Registrar Compra'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('compras.store') }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            {{--Header--}}
                            <div class="card-header card-header-rose">
                                <h4 class="card-title">Formulario de Registro</h4>
                            </div>
                            {{--Body--}}
                            <div class="card-body">
                                <div class="row">
                                    {{--Estado--}}
                                    <label for="estado" class="col-sm-2 col-form-label">Estado de Compra</label>
                                    <div class="col-sm-3">
                                        <div class="form-check form-check-radio form-check-inline">
                                            <div class="col">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="estado" id="inlineRadio1" value="Pendiente"> Pendiente
                                                    <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                                </label>
                                            </div>
                                            <div class="col">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="estado" id="inlineRadio2" value="Completado"> Completado
                                                    <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    {{--Fecha--}}
                                    <label for="fecha" class="col-sm-2 col-form-label">Fecha de Compra</label>
                                    <div class="col-sm-3">
                                        <input type="text"
                                               class="form-control"
                                               name="fecha"
                                               placeholder="AAAA/MM/DD" value="{{ old('fecha') }}">
                                        @if ($errors->has('fecha'))
                                            <span class="error text-danger" for="input-fecha">
                                                {{ $errors->first('fecha') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    {{--tipo_compra_id--}}
                                    <label for="tipo_compra_id" class="col-sm-2 col-form-label">Tipo de Compra</label>
                                    <div class="col-sm-6">
                                        <div class="form-check form-check-radio form-check-inline">
                                            @foreach($tipos_compras as $tipo_compra)
                                                <div class="col">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio"
                                                               name="tipo_compra_id" id="inlineRadio3"
                                                               value="{{ $tipo_compra->id }}"> {{ $tipo_compra->tipo }}
                                                        <span class="circle">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                        @if ($errors->has('tipo_compra_id'))
                                            <span class="error text-danger" for="input-tipo_compra_id">
                                                {{ $errors->first('tipo_compra_id') }}
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
