@extends('layouts.main',['activePage'=>'caracteristicas','titlePage'=>'Editar Promoción'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('promociones.update', $promocion->id) }}" method="POST" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            {{--Cabecera--}}
                            <div class="card-header card-header-rose">
                                <h4 class="card-title">Formulario de Edición</h4>
                            </div>
                            {{--Body--}}
                            <div class="card-body">
                                {{--Precio--}}
                                <div class="row">
                                    <label for="precio" class="col-sm-3 col-form-label"> Precio de Promoción </label>
                                    <div class="col-sm-5">
                                        <input type="text"
                                               class="form-control"
                                               name="precio"
                                               value="{{ old('precio',$promocion->precio) }}" autofocus>
                                        @if ($errors->has('precio'))
                                            <span class="error text-danger" for="input-precio">
                                                {{ $errors->first('precio') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    {{--Fecha de Inicio--}}
                                    <label for="ini_date" class="col-sm-2 col-form-label">Fecha de Inicio</label>
                                    <div class="col-sm-3">
                                        <input type="text"
                                               class="form-control"
                                               name="ini_date"
                                               placeholder="AAAA/MM/DD" value="{{ old('ini_date',$promocion->ini_date) }}">
                                        @if ($errors->has('ini_date'))
                                            <span class="error text-danger" for="input-ini_date">
                                                {{ $errors->first('ini_date') }}
                                            </span>
                                        @endif
                                    </div>
                                    {{--Fecha Final--}}
                                    <label for="fin_date" class="col-sm-2 col-form-label">Fecha Final</label>
                                    <div class="col-sm-3">
                                        <input type="text"
                                               class="form-control"
                                               name="fin_date"
                                               placeholder="AAAA/MM/DD" value="{{ old('fin_date',$promocion->fin_date) }}">
                                        @if ($errors->has('fin_date'))
                                            <span class="error text-danger" for="input-fin_date">
                                                {{ $errors->first('fin_date') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{--Botones--}}
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-rose"> Actualizar Datos </button>
                                <a class="btn btn-rose" href="{{ route('promociones.index') }}"> Cancelar </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
