@extends('layouts.main',['activePage'=>'productos','titlePage'=>'Producto'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="col-md-6">
                <div class="card">
                    {{--Header--}}
                    <div class="card-header card-header-text card-header-rose">
                        <div class="card-text">
                            <a href="#" class="d-flex">
                                <h4 class="card-title mx-3">{{ $producto->descripcion }}</h4>
                            </a>
                        </div>
                    </div>
                    {{--Body--}}
                    <div class="card-body">
                        <p class="card-text">
                        <div class="author">
                            <p class="card-text">
                                <label for="descripcion" class="col-form-label">Descripción: </label>
                                {{ $producto->descripcion }} <br>
                                <label for="codigo_barra" class="col-form-label">Código de Barra: </label>
                                {{ $producto->codigo_barra }} <br>
                                <label for="precio" class="col-form-label">Precio de Venta: </label>
                                {{ $producto->precio }} <br>
                                <label for="linea_id" class="col-form-label">Línea: </label>
                                {{ $producto->linea_id }}<br>
                                <label for="marca_id" class="col-form-label">Marca: </label>
                                {{ $producto->marca_id }} <br>
                                <label for="familia_id" class="col-form-label">Familia: </label>
                                {{ $producto->familia_id }} <br>
                                <label for="talla_id" class="col-form-label">Talla: </label>
                                {{ $producto->talla_id }} <br>
                                <label for="color_id" class="col-form-label">Color: </label>
                                {{ $producto->color_id }} <br>
                                <label for="modelo_id" class="col-form-label">Modelo: </label>
                                {{ $producto->modelo_id }} <br>
                                <label for="temporada_id" class="col-form-label">Temporada: </label>
                                {{ $producto->temporada_id }} <br>
                                <label for="promocion_id" class="col-form-label">Promoción: </label>
                                {{ $producto->promocion_id }} <br>
                                <label for="sector_id" class="col-form-label">Sector: </label>
                                {{ $producto->sector_id }} <br>
                                <label for="created_at" class="col-form-label">Fecha de Creación: </label>
                                {{ $producto->created_at }} <br>
                            </p>
                        </div>
                        </p>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <a href="{{ route('productos.index') }}" class="btn btn-rose">Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
