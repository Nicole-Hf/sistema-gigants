@extends('layouts.main',['activePage'=>'caracteristicas','titlePage'=>'Agregar Línea'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('lineas.store') }}" method="POST" class="form-horizontal">
                        @csrf
                        <div class="card">
                            {{--Cabecera--}}
                            <div class="card-header card-header-rose">
                                <h4 class="card-title">Formulario de Creación</h4>
                            </div>
                            {{--Cuerpo de la tabla--}}
                            <div class="card-body">
                                <div class="row">
                                    <label for="nombre" class="col-sm-2 col-form-label"> Nombre de Línea </label>
                                    <div class="col-sm-7">
                                        <input type="text"
                                               class="form-control"
                                               name="nombre"
                                               placeholder="Ingrese la linea" autofocus>
                                    </div>
                                </div>
                            </div>
                            {{--Botones--}}
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-rose"> Guardar Datos </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
