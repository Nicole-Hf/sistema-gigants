@extends('layouts.main',['activePage'=>'venta','titlePage'=>'Registrar Venta'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            {{--Mensaje--}}
            @if (Session::has('mensaje'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    {{ Session::get('mensaje') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('ventas.detalles.store',[$venta->id]) }}" method="post" class="form-horizontal">
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
                                    {{--producto_id--}}
                                    <label for="producto_id" class="col-sm-2 col-form-label">Producto</label>
                                    <div class="col-sm-5">
                                        <select name="producto_id" id="inputProducto_id" class="form-control">
                                            <option value="" disabled selected>-- Seleccione producto --</option>
                                            @foreach($productos as $producto)
                                                <option value="{{ $producto->id }}">
                                                    {{ $producto->descripcion }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('producto_id'))
                                            <span class="error text-danger" for="input-producto_id">
                                                {{ $errors->first('producto_id') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                {{--precio_venta
                                <div class="row">
                                    <label for="costo_compra" class="col-sm-2 col-form-label">Costo Unitario</label>
                                    <div class="col-sm-3">
                                        <input type="text"
                                               class="form-control"
                                               value=" Bs.- {{ $producto->promocion_id == null ? $producto->precio : $producto->promocion->precio}}" disabled>
                                        {{--<input type="text"
                                               class="form-control"
                                               name="costo_compra"
                                               value="{{ old('costo_compra') }}">
                                        @if ($errors->has('costo_compra'))
                                            <span class="error text-danger" for="input-costo_compra">
                                                {{ $errors->first('costo_compra') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>--}}
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
