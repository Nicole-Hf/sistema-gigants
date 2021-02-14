@extends('layouts.main',['activePage'=>'caracteristicas','titlePage'=>'Editar Marca'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('marcas.update', $marca->id) }}" method="post" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            {{--Header--}}
                            <div class="card-header card-header-rose">
                                <h4 class="card-title">Formulario de Edición</h4>
                            </div>
                            {{--Body--}}
                            <div class="card-body">
                                {{--Nombre de Marca--}}
                                <div class="row">
                                    <label for="marca" class="col-sm-2 col-form-label"> Marca </label>
                                    <div class="col-sm-7">
                                        <input  type="text"
                                                class="form-control"
                                                name="marca"
                                                value="{{ old('marca',$marca->marca) }}" autofocus>
                                        @if ($errors->has('marca'))
                                            <span class="error text-danger" for="input-name">
                                                {{ $errors->first('marca') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{--Botones/Footer--}}
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-rose">Actualizar Datos</button>
                                <a class="btn btn-rose" href="{{ route('marcas.index') }}">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
