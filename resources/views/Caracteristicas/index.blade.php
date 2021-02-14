@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('Tienda Gigants')])

@section('content')
    <div class="content">
        <div class="row">
        {{--Marca--}}
            <div class="col-sm-3">
                <div class="card" style="width: 12rem;">
                    <img class="card-img-top" src="{{ asset('/img/favicon.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <div class="d-grid gap-2 col-lg-11 mx-auto">
                            <a href="{{ route('marcas.index') }}" class="btn btn-rose text-center"> Marcas </a>
                        </div>
                    </div>
                </div>
            </div>
        {{--Línea--}}
            <div class="col-sm-3">
                <div class="card" style="width: 12rem;">
                    <img class="card-img-top" src="{{ asset('/img/favicon.png') }}" alt="Card image cap">
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
                    <img class="card-img-top" src="{{ asset('/img/favicon.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <div class="d-grid gap-2 col-lg-11 mx-auto">
                            <a href="#" class="btn btn-rose text-center"> Familias </a>
                        </div>
                    </div>
                </div>
            </div>
        {{--Modelo--}}
            <div class="col-sm-3">
                <div class="card" style="width: 12rem;">
                    <img class="card-img-top" src="{{ asset('/img/favicon.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <div class="d-grid gap-2 col-lg-11 mx-auto">
                            <a href="#" class="btn btn-rose text-center"> Modelos </a>
                        </div>
                    </div>
                </div>
            </div>
        {{--Talla--}}
            <div class="col-sm-3">
                <div class="card" style="width: 12rem;">
                    <img class="card-img-top" src="{{ asset('/img/favicon.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <div class="d-grid gap-2 col-lg-11 mx-auto">
                            <a href="#" class="btn btn-rose text-center"> Tallas </a>
                        </div>
                    </div>
                </div>
            </div>
        {{--Color--}}
            <div class="col-sm-3">
                <div class="card" style="width: 12rem;">
                    <img class="card-img-top" src="{{ asset('/img/favicon.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <div class="d-grid gap-2 col-lg-11 mx-auto">
                            <a href="#" class="btn btn-rose text-center"> Colores </a>
                        </div>
                    </div>
                </div>
            </div>
        {{--Temporada--}}
            <div class="col-sm-3">
                <div class="card" style="width: 12rem;">
                    <img class="card-img-top" src="{{ asset('/img/favicon.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <div class="d-grid gap-2 col-lg-12 mx-auto">
                            <a href="#" class="btn btn-rose text-center"> Temporadas </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

