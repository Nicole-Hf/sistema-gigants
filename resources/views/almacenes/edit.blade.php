@extends('layouts.main',['activePage'=>'almacen','titlePage'=>'Editar Almacén'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('almacenes.update',$almacen->id) }}" method="POST" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header card-header-rose">
                                <h4 class="card-title">Formulario de Edición</h4>
                            </div>
                            {{--Body--}}
                            <div class="card-body">
                                {{--Nombre--}}
                                <div class="row">
                                    <label for="nombre" class="col-sm-2 col-form-label"> Nombre </label>
                                    <div class="col-sm-7">
                                        <input type="text"
                                               class="form-control"
                                               name="nombre"
                                               value="{{ old('nombre',$almacen->nombre) }}" autofocus>
                                        @if ($errors->has('nombre'))
                                            <span class="error text-danger" for="input-nombre">
                                                {{ $errors->first('nombre') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                {{--Ubicacion--}}
                                <div class="row">
                                    <label for="ubicacion" class="col-sm-2 col-form-label"> Ubicación </label>
                                    <div class="col-sm-7">
                                        <input type="text"
                                               class="form-control"
                                               name="ubicacion"
                                               value="{{ old('ubicacion',$almacen->ubicacion) }}">
                                        @if ($errors->has('ubicacion'))
                                            <span class="error text-danger" for="input-ubicacion">
                                                {{ $errors->first('ubicacion') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{--Botones--}}
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-rose"> Actualizar Datos </button>
                                <a class="btn btn-rose" href="{{ route('almacenes.index') }}"> Cancelar </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
