@extends('layouts.main',['activePage'=>'productos','titlePage'=>'Editar Producto'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('productos.update', $producto->id) }}" method="post" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            {{--Header--}}
                            <div class="card-header card-header-rose">
                                <h4 class="card-title">Formulario de Edición</h4>
                            </div>
                            {{--Body--}}
                            <div class="card-body">
                                {{--Linea--}}
                                <div class="row">
                                    <label for="linea_id" class="col-sm-2 col-form-label">Línea</label>
                                    <div class="col-sm-3">
                                        <select  name="linea_id" id="inputLinea_id" class="form-control">
                                            <option value="">-- Seleccione la línea --</option>
                                            @foreach($lineas as $linea)
                                                <option value="{{ $linea->id }}" {{ $linea->id == $producto->linea_id ? 'selected' : ''}}>
                                                    {{ $linea->nombre }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('linea_id'))
                                            <span class="error text-danger" for="input-linea_id">
                                                {{ $errors->first('linea_id') }}
                                            </span>
                                        @endif
                                    </div>
                                    {{--Precio--}}
                                    <label for="precio" class="col-sm-2 col-form-label">Precio</label>
                                    <div class="col-sm-3">
                                        <input type="text"
                                               class="form-control"
                                               name="precio" value="{{ old('precio',$producto->precio) }}">
                                        @if ($errors->has('precio'))
                                            <span class="error text-danger" for="input-precio">
                                                {{ $errors->first('precio') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    {{--Marca--}}
                                    <label for="marca_id" class="col-sm-2 col-form-label">Marca</label>
                                    <div class="col-sm-3">
                                        <select name="marca_id" id="inputMarca_id" class="form-control">
                                            <option value="">-- Seleccione la marca --</option>
                                            @foreach($marcas as $marca)
                                                <option value="{{ $marca->id }}" {{ $marca->id == $producto->marca_id ? 'selected' : '' }}>
                                                    {{ $marca->marca }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('marca_id'))
                                            <span class="error text-danger" for="input-marca_id">
                                                {{ $errors->first('marca_id') }}
                                            </span>
                                        @endif
                                    </div>
                                    {{--Promoción--}}
                                    <label for="promocion_id" class="col-sm-2 col-form-label">Promoción</label>
                                    <div class="col-sm-3">
                                        <select name="promocion_id" id="inputPromocion_id" class="form-control">
                                            <option value="">-- Seleccione la promoción --</option>
                                            @foreach($promociones as $promocion)
                                                <option value="{{ $promocion->id }}" {{ $promocion->id == $producto->promocion_id ? 'selected' : '' }}>
                                                    {{ $promocion->precio }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('promocion_id'))
                                            <span class="error text-danger" for="input-promocion_id">
                                                {{ $errors->first('promocion_id') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    {{--Familia--}}
                                    <label for="familia_id" class="col-sm-2 col-form-label">Familia</label>
                                    <div class="col-sm-3">
                                        <select name="familia_id" id="inputFamilia_id" class="form-control">
                                            <option value="">-- Seleccione la familia --</option>
                                            @foreach($familias as $familia)
                                                <option value="{{ $familia->id }}" {{ $familia->id == $producto->familia_id ? 'selected' : '' }}>
                                                    {{ $familia->nombre }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('familia_id'))
                                            <span class="error text-danger" for="input-familia_id">
                                                {{ $errors->first('familia_id') }}
                                            </span>
                                        @endif
                                    </div>
                                    {{--Entradas al inventario
                                    <label class="col-sm-7 col-form-label">Entradas al Inventario</label>--}}
                                </div>
                                <div class="row">
                                    {{--Talla--}}
                                    <label for="talla_id" class="col-sm-2 col-form-label">Talla</label>
                                    <div class="col-sm-3">
                                        <select name="talla_id" id="inputTalla_id" class="form-control">
                                            <option value="">-- Seleccione la talla --</option>
                                            @foreach($tallas as $talla)
                                                <option value="{{ $talla->id }}" {{ $talla->id == $producto->talla_id ? 'selected' : '' }}>
                                                    {{ $talla->talla }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('talla_id'))
                                            <span class="error text-danger" for="input-talla_id">
                                                {{ $errors->first('talla_id') }}
                                            </span>
                                        @endif
                                    </div>
                                    {{--Almacén--}}
                                </div>
                                {{--Color--}}
                                <div class="row">
                                    <label for="color_id" class="col-sm-2 col-form-label">Color</label>
                                    <div class="col-sm-3">
                                        <select name="color_id" id="inputColor_id" class="form-control">
                                            <option value="">-- Seleccione el color --</option>
                                            @foreach($colores as $color)
                                                <option value="{{ $color->id }}" {{ $color->id == $producto->color_id ? 'selected' : '' }}>
                                                    {{ $color->color }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('color_id'))
                                            <span class="error text-danger" for="input-color_id">
                                                {{ $errors->first('color_id') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                {{--Modelo--}}
                                <div class="row">
                                    <label for="modelo_id" class="col-sm-2 col-form-label">Modelo</label>
                                    <div class="col-sm-3">
                                        <select name="modelo_id" id="inputModelo_id" class="form-control">
                                            <option value="">-- Seleccione el modelo --</option>
                                            @foreach($modelos as $modelo)
                                                <option value="{{ $modelo->id }}" {{ $modelo->id == $producto->modelo_id ? 'selected' : '' }}>
                                                    {{ $modelo->descripcion }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('modelo_id'))
                                            <span class="error text-danger" for="input-modelo_id">
                                                {{ $errors->first('modelo_id') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                {{--Temporada--}}
                                <div class="row">
                                    <label for="temporada_id" class="col-sm-2 col-form-label">Temporada</label>
                                    <div class="col-sm-3">
                                        <select name="temporada_id" id="inputTemporada_id" class="form-control">
                                            <option value="">-- Seleccione la temporada --</option>
                                            @foreach($temporadas as $temporada)
                                                <option value="{{ $temporada->id }}" {{ $temporada->id == $producto->temporada_id ? 'selected' : '' }}>
                                                    {{ $temporada->descripcion }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('temporada_id'))
                                            <span class="error text-danger" for="input-temporada_id">
                                                {{ $errors->first('temporada_id') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                {{--Codigo de Barra--}}
                                <div class="row">
                                    <label for="codigo_barra" class="col-sm-2 col-form-label">Código de Barra</label>
                                    <div class="col-sm-3">
                                        <input type="text"
                                               class="form-control"
                                               name="codigo_barra"
                                               value="{{ old('codigo_barra',$producto->codigo_barra) }}">
                                        @if ($errors->has('codigo_barra'))
                                            <span class="error text-danger" for="input-codigo_barra">
                                                {{ $errors->first('codigo_barra') }}
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
                                               value="{{ old('descripcion',$producto->descripcion) }}">
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
                                <button type="submit" class="btn btn-rose">Actualizar Datos</button>
                                <a class="btn btn-rose" href="{{ route('productos.index') }}">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
