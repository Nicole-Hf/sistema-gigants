@extends('layouts.main',['activePage'=>'caracteristicas','titlePage'=>'Editar Talla'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('tallas.update', $talla->id) }}" method="POST" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            {{--Cabecera--}}
                            <div class="card-header card-header-rose">
                                <h4 class="card-title">Formulario de Edición</h4>
                            </div>
                            {{--Cuerpo de la Tabla--}}
                            <div class="card-body">
                                <div class="row">
                                    <label for="talla" class="col-sm-2 col-form-label"> Talla </label>
                                    <div class="col-sm-7">
                                        <input type="text"
                                               class="form-control"
                                               name="talla"
                                               value="{{ old('talla',$talla->talla) }}" autofocus>
                                        @if ($errors->has('talla'))
                                            <span class="error text-danger" for="input-talla">
                                                {{ $errors->first('talla') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{--Botones--}}
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-rose"> Actualizar Datos </button>
                                <a class="btn btn-rose" href="{{ route('tallas.index') }}"> Cancelar </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
