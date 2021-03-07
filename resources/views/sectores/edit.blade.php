@extends('layouts.main',['activePage'=>'almacen','titlePage'=>'Editar Sector de Almacén'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('sectores.update',$sector->id) }}" method="POST" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header card-header-rose">
                                <h4 class="card-title">Formulario de Edición</h4>
                            </div>
                            <div class="card-body">
                                {{--Almacen
                                <div class="row">
                                    <label for="almacen_id" class="col-sm-2 col-form-label">Almacén</label>
                                    <div class="col-sm-3">
                                        <select name="almacen_id" id="inputAlmacen_id" class="form-control">
                                            <option value="">-- Seleccione un almacén --</option>
                                            @foreach($almacenes as $almacen)
                                                <option value="{{ $almacen->id }}" {{ $almacen->id == $sector->almacen_id ? 'selected' : ''}}>
                                                    {{ $almacen->nombre }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('almacen_id'))
                                            <span class="error text-danger" for="input-almacen_id">
                                                {{ $errors->first('almacen_id') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>--}}
                                {{--Nombre--}}
                                <div class="row">
                                    <label for="nombre" class="col-md-2 col-form-label">Nombre del Sector</label>
                                    <div class="col-sm-7">
                                        <input type="text"
                                               class="form-control"
                                               name="nombre"
                                               value="{{ old('nombre',$sector->nombre) }}">
                                        @if ($errors->has('nombre'))
                                            <span class="error text-danger" for="input-nombre">
                                                    {{ $errors->first('nombre') }}
                                                </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{--Botones--}}
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-rose">Actualizar Datos</button>
                                {{--<a class="btn btn-rose" href="{{ route('sectores.index') }}">Cancelar</a>--}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
