@extends('layouts.main',['activePage'=>'compra','titlePage'=>'Agregar Tipo de Compra'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <form action="{{ route('tipo_compra.store') }}" method="POST" class="form-horizontal">
                        @csrf
                        <div class="card">
                            {{--Header--}}
                            <div class="card-header card-header-rose">
                                <h4 class="card-title">Tipo de Compra</h4>
                            </div>
                            {{--Body--}}
                            <div class="card-body">
                                {{--Nombre--}}
                                <div class="row">
                                    <label for="tipo" class="col-sm-2 col-form-label"> Tipo </label>
                                    <div class="col-sm-7">
                                        <input  type="text"
                                                class="form-control"
                                                name="tipo"
                                                value="{{ old('tipo') }}" autofocus>
                                        @if ($errors->has('tipo'))
                                            <span class="error text-danger" for="input-tipo">
                                                {{ $errors->first('tipo') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{--Botones/Footer--}}
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-rose"> Guardar Datos </button>
                                <a class="btn btn-rose" href="{{ route('compras.index') }}"> Cancelar </a>
                            </div>
                        </div>
                    </form>

                    {{--Lista de Tipo de Compras--}}
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary text-rose">
                                    <th> # </th>
                                    <th> Nombre </th>
                                    <th> Fecha de Creación </th>
                                    <th> Acciones </th>
                                    </thead>
                                    <tbody>
                                    @foreach($tipos_compras as $tipo_compra)
                                        <tr>
                                            <td>{{ $tipo_compra->id }}</td>
                                            <td>{{ $tipo_compra->tipo }}</td>
                                            <td>{{ $tipo_compra->created_at }}</td>
                                            <td class="td-actions text-center">
                                                {{--Eliminar--}}
                                                <form action="{{ route('tipo_compra.delete',$tipo_compra->id) }}"
                                                      method="POST" style="display: inline-block;"
                                                      onsubmit="return confirm('¿Está seguro?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
