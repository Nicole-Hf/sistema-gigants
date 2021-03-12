@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('Tienda Gigants')])

@section('content')
    <div class="content">
        @foreach ($totales as $total)
            <div class="row">
                {{--Total de Compras--}}
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">store</i>
                            </div>
                            <p class="card-category">MES ACTUAL</p>
                            <h3 class="card-title">
                                {{$total->totalcompra}}<br>
                                <small>BS</small>
                            </h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">arrow_right_alt</i>
                                <a href="{{ route('compras.index') }}">Compras</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{--Total de Ventas--}}
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">shopping_cart</i>
                            </div>
                            <p class="card-category">MES ACTUAL</p>
                            <h3 class="card-title">
                                {{$total->totalventa}}<br>
                                <small>BS</small>
                            </h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">arrow_right_alt</i>
                                <a href="{{ route('ventas.index') }}">Ventas</a>
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-header-icon card-header-rose">
                            <div class="card-icon">
                                <i class="material-icons">perm_identity</i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Perfil de Usuario</h4>
                            <label for="carnet_identidad" class="col-form-label">Carnet de Identidad: </label>
                            {{ auth()->user()->persona->carnet_identidad }} <br>
                            <label for="nombre" class="col-form-label">Nombre Completo: </label>
                            {{ auth()->user()->persona->nombre .' '. auth()->user()->persona->apellidos }} <br>
                            <label for="email" class="col-form-label">Correo Electrónico: </label>
                            {{ auth()->user()->persona->email }} <br>
                        </div>
                    </div>
                </div>
            </div>
@endsection

