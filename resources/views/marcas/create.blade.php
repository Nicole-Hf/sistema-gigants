@extends('layouts.main',['activePage'=>'users','titlePage'=>'Agregar Marca'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('marcas.store') }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            {{--Header--}}
                            <div class="card-header card-header-rose">
                                <h4 class="card-title">Formulario de Creación</h4>
                            </div>
                            {{--Body--}}
                            <div class="card-body">
                                {{--Nombre de la Marca--}}
                                <div class="row">
                                    <label for="name" class="col-sm-2 col-form-label">Nombre de Marca</label>
                                    <div class="col-sm-7">
                                        <input  type="text"
                                                class="form-control"
                                                name="marca"
                                                value="{{ old('marca') }}" autofocus>
                                        @if ($errors->has('marca'))
                                            <span class="error text-danger" for="input-marca">
                                                {{ $errors->first('marca') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{--Botones/Footer--}}
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-rose">Guardar Datos</button>
                                <a class="btn btn-rose" href="{{ route('marcas.index') }}">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
