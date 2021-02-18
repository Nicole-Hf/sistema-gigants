@extends('layouts.main',['activePage'=>'caracteristicas','titlePage'=>'Editar Modelo'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('modelos.update', $modelo->id) }}" method="POST" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            {{--Cabecera--}}
                            <div class="card-header card-header-rose">
                                <h4 class="card-title">Formulario de Edición</h4>
                            </div>
                            {{--Cuerpo de la tabla--}}
                            <div class="card-body">
                                <div class="row">
                                    <label for="descripcion" class="col-sm-2 col-form-label"> Modelo de ropa </label>
                                    <div class="col-sm-7">
                                        <input type="text"
                                               class="form-control"
                                               name="descripcion"
                                               value="{{ old('descripcion',$modelo->descripcion) }}" autofocus>
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
                                <button type="submit" class="btn btn-rose"> Actualizar Datos </button>
                                <a class="btn btn-rose" href="{{ route('modelos.index') }}"> Cancelar </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
