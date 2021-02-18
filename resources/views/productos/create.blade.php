@extends('layouts.main',['activePage'=>'productos','titlePage'=>'Registrar Producto'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="#" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            {{--Header--}}
                            <div class="card-header card-header-rose">
                                <h4 class="card-title">Formulario de Registro</h4>
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
                                                <option value="{{ $linea->id }}">{{ $linea->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{--Precio--}}
                                    <label for="precio" class="col-sm-2 col-form-label">Precio</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="precio">
                                    </div>
                                </div>
                                <div class="row">
                                    {{--Marca--}}
                                    <label for="marca_id" class="col-sm-2 col-form-label">Marca</label>
                                    <div class="col-sm-3">
                                        <select name="marca_id" id="inputMarca_id" class="form-control">
                                            <option value="">-- Seleccione la marca --</option>
                                            @foreach($marcas as $marca)
                                                <option value="{{ $marca->id }}">{{ $marca->marca }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{--Promoción--}}
                                    <label for="promocion_id" class="col-sm-2 col-form-label">Promoción</label>
                                    <div class="col-sm-3">
                                        <select name="promocion_id" id="inputPromocion_id" class="form-control">
                                            <option value="">-- Seleccione la promoción --</option>
                                            @foreach($promociones as $promocion)
                                                <option value="{{ $promocion->id }}">{{ $promocion->precio }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    {{--Familia--}}
                                    <label for="familia_id" class="col-sm-2 col-form-label">Familia</label>
                                    <div class="col-sm-3">
                                        <select name="familia_id" id="inputFamilia_id" class="form-control">
                                            <option value="">-- Seleccione la familia --</option>
                                            @foreach($familias as $familia)
                                                <option value="{{ $familia->id }}">{{ $familia->nombre }}</option>
                                            @endforeach
                                        </select>
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
                                                <option value="{{ $talla->id }}">{{ $talla->talla }}</option>
                                            @endforeach
                                        </select>
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
                                                <option value="{{ $color->id }}">{{ $color->color }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--Modelo--}}
                                <div class="row">
                                    <label for="modelo_id" class="col-sm-2 col-form-label">Modelo</label>
                                    <div class="col-sm-3">
                                        <select name="modelo_id" id="inputModelo_id" class="form-control">
                                            <option value="">-- Seleccione el modelo --</option>
                                            @foreach($modelos as $modelo)
                                                <option value="{{ $modelo->id }}">{{ $modelo->descripcion }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--Temporada--}}
                                <div class="row">
                                    <label for="temporada_id" class="col-sm-2 col-form-label">Temporada</label>
                                    <div class="col-sm-3">
                                        <select name="temporada_id" id="inputTemporada_id" class="form-control">
                                            <option value="">-- Seleccione la temporada --</option>
                                            @foreach($temporadas as $temporada)
                                                <option value="{{ $temporada->id }}">{{ $temporada->descripcion }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--Codigo de Barra--}}
                                <div class="row">
                                    <label for="codigo_barra" class="col-sm-2 col-form-label">Código de Barra</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="codigo_barra">
                                    </div>
                                </div>
                                {{--Descripcion--}}
                                <div class="row">
                                    <label for="descripcion" class="col-sm-2 col-form-label">Descripción</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="descripcion">
                                    </div>
                                </div>
                            </div>
                            {{--Botones--}}
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-rose">Guardar Datos</button>
                                <a class="btn btn-rose" href="#">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
