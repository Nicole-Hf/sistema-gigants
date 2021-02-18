@extends('layouts.main',['activePage'=>'caracteristicas','titlePage'=>'Agregar Temporada'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('temporadas.store') }}" method="POST" class="form-horizontal">
                        @csrf
                        <div class="card">
                            {{--Cabecera--}}
                            <div class="card-header card-header-rose">
                                <h4 class="card-title">Formulario de Creación</h4>
                            </div>
                            {{--Cuerpo de la tabla--}}
                            <div class="card-body">
                                <div class="row">
                                    <label for="descripcion" class="col-sm-2 col-form-label"> Temporada </label>
                                    <div class="col-sm-7">
                                        <input type="text"
                                               class="form-control"
                                               name="descripcion"
                                               value="{{ old('descripcion') }}" autofocus>
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
                                <button type="submit" class="btn btn-rose"> Guardar Datos </button>
                                <a class="btn btn-rose" href="{{ route('temporadas.index') }}"> Cancelar </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
