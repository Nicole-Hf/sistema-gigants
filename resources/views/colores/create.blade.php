@extends('layouts.main',['activePage'=>'caracteristicas','titlePage'=>'Agregar Color'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('colores.store') }}" method="POST" class="form-horizontal">
                        @csrf
                        <div class="card">
                            {{--Cabecera--}}
                            <div class="card-header card-header-rose">
                                <h4 class="card-title">Formulario de Creación</h4>
                            </div>
                            {{--Cuerpo de la tabla--}}
                            <div class="card-body">
                                <div class="row">
                                    <label for="color" class="col-sm-2 col-form-label"> Color </label>
                                    <div class="col-sm-7">
                                        <input type="text"
                                               class="form-control"
                                               name="color"
                                               value="{{ old('color') }}" autofocus>
                                        @if ($errors->has('color'))
                                            <span class="error text-danger" for="input-color">
                                                {{ $errors->first('color') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{--Botones--}}
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-rose"> Guardar Datos </button>
                                <a class="btn btn-rose" href="{{ route('colores.index') }}"> Cancelar </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
