@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('Tienda Gigants')])

@section('content')
    <div class="content">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                        <div class="card-icon">
                            <i class="material-icons">perm_identity</i>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Here is the Icon</h4>
                        The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Barcelona...
                    </div>
                </div>
            </div>
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
@endsection

