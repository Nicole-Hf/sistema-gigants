@extends('layouts.main',['activePage'=>'caracteristicas','titlePage'=>'Agregar Línea'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('lineas.store') }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            {{--Header--}}
                            <div class="card-header card-header-rose">
                                <h4 class="card-title">Formulario de Creación</h4>
                            </div>
                            {{--Body--}}
                            <div class="card-body">
                                {{--Nombre--}}
                                <div class="row">
                                    <label class="col-sm-2 col-form-label"> Línea </label>  {{--for="name" --}}
                                    <div class="col-sm-7">
                                        <input  type="text"
                                                class="form-control"
                                                name="linea">   {{--value="{{ old('linea') }}" autofocus--}}
                                        {{--@if ($errors->has('linea'))
                                            <span class="error text-danger" for="input-linea">
                                                {{ $errors->first('linea') }}
                                            </span>
                                        @endif--}}
                                    </div>
                                </div>
                            </div>
                            {{--Botones/Footer--}}
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-rose"> Guardar Datos </button>
                                <a class="btn btn-rose" href="{{ route('lineas.index') }}"> Cancelar </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
