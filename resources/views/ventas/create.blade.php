@extends('layouts.main',['activePage'=>'venta','titlePage'=>'Registrar Venta'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('ventas.store') }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            {{--Header--}}
                            <div class="card-header card-header-rose">
                                <h4 class="card-title">Formulario de Registro</h4>
                            </div>
                            {{--Body--}}
                            <div class="card-body">
                                <div class="row">
                                    {{--Fecha--}}
                                    <label for="fecha_emision" class="col-sm-2 col-form-label">Fecha</label>
                                    <div class="col-sm-3">
                                        <input type="text"
                                               class="form-control"
                                               name="fecha_emision"
                                               placeholder="AAAA/MM/DD" value="{{ old('fecha_emision') }}">
                                        @if ($errors->has('fecha_emision'))
                                            <span class="error text-danger" for="input-fecha">
                                                {{ $errors->first('fecha_emision') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                {{--Cliente--}}
                                <div class="row">
                                    <label for="cliente_id" class="col-sm-2 col-form-label">Proveedor</label>
                                    <div class="col-sm-3">
                                        <select name="cliente_id" id="inputCliente_id" class="form-control">
                                            <option value="">-- Seleccione Cliente --</option>
                                            @foreach($clientes as $cliente)
                                                <option value="{{ $cliente->id }}">
                                                    {{ $cliente->nombre }}
                                                    {{ $cliente->apellidos }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('cliente_id'))
                                            <span class="error text-danger" for="input-cliente_id">
                                                {{ $errors->first('cliente_id') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                {{--Descripcion--}}
                                <div class="row">
                                    <label for="descripcion" class="col-sm-2 col-form-label">Descripción</label>
                                    <div class="col-sm-7">
                                        <input type="text"
                                               class="form-control"
                                               name="descripcion"
                                               value="{{ old('descripcion') }}">
                                        @if ($errors->has('descripcion'))
                                            <span class="error text-danger" for="input-descripcion">
                                                {{ $errors->first('descripcion') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{--Botones--}}
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-rose">Guardar Datos</button>
                                <a class="btn btn-rose" href="{{ route('ventas.index') }}">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
