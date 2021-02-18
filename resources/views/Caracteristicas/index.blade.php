@extends('layouts.main', ['activePage' => 'caracteristicas', 'titlePage' => __('Productos')])

@section('content')
    <div class="content">
        <div class="row">
        {{--Marca--}}
            <div class="col-sm-3">
                <div class="card" style="width: 12rem;">
                    <img class="card-img-top" src="{{ asset('/img/brand.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <div class="d-grid gap-2 col-lg-11 mx-auto">
                            <a href="{{ route('marcas.index') }}" class="btn btn-rose text-center"> Marcas </a>
                        </div>
                    </div>
                </div>
            </div>
        {{--Línea--}}
            <div class="col-sm-3">
                <div class="card" style="width: 11rem;">
                    <img class="card-img-top" src="{{ asset('/img/familia.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <div class="d-grid gap-2 col-lg-11 mx-auto">
                            <a href="{{ route('lineas.index') }}" class="btn btn-rose text-center"> Líneas </a>
                        </div>
                    </div>
                </div>
            </div>
        {{--Familia--}}
            <div class="col-sm-3">
                <div class="card" style="width: 12rem;">
                    <img class="card-img-top" src="{{ asset('/img/modelo.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <div class="d-grid gap-2 col-lg-11 mx-auto">
                            <a href="{{ route('familias.index') }}" class="btn btn-rose text-center"> Familias </a>
                        </div>
                    </div>
                </div>
            </div>
        {{--Modelo--}}
            <div class="col-sm-3">
                <div class="card" style="width: 12rem;">
                    <img class="card-img-top" src="{{ asset('/img/linea2.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <div class="d-grid gap-2 col-lg-11 mx-auto">
                            <a href="{{ route('modelos.index') }}" class="btn btn-rose text-center"> Modelos </a>
                        </div>
                    </div>
                </div>
            </div>
        {{--Talla--}}
            <div class="col-sm-3">
                <div class="card" style="width: 12rem;">
                    <img class="card-img-top" src="{{ asset('/img/talla.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <div class="d-grid gap-2 col-lg-11 mx-auto">
                            <a href="{{ route('tallas.index') }}" class="btn btn-rose text-center"> Tallas </a>
                        </div>
                    </div>
                </div>
            </div>
        {{--Color--}}
            <div class="col-sm-3">
                <div class="card" style="width: 13rem;">
                    <img class="card-img-top" src="{{ asset('/img/color.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <div class="d-grid gap-2 col-lg-11 mx-auto">
                            <a href="{{ route('colores.index') }}" class="btn btn-rose text-center"> Colores </a>
                        </div>
                    </div>
                </div>
            </div>
        {{--Temporada--}}
            <div class="col-sm-3">
                <div class="card" style="width: 12rem;">
                    <img class="card-img-top" src="{{ asset('/img/temporada1.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <div class="d-grid gap-2 col-lg-12 mx-auto">
                            <a href="{{ route('temporadas.index') }}" class="btn btn-rose text-center">Temporadas</a>
                        </div>
                    </div>
                </div>
            </div>
            {{--Promocion--}}
            <div class="col-sm-3">
                <div class="card" style="width: 12rem;">
                    <img class="card-img-top" src="{{ asset('/img/promo.webp') }}" alt="Card image cap">
                    <div class="card-body">
                        <div class="d-grid gap-2 col-lg-13 mx-auto">
                            <a href="{{ route('promociones.index') }}" class="btn btn-rose text-center">Promociones</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

