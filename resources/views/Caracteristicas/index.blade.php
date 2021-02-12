@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('Tienda Gigants')])

@section('content')
    <div class="content">
        <div class="row">
        {{--Marca--}}
            <div class="col-sm-3">
                <div class="card" style="width: 12rem;">
                    <img class="card-img-top" src="{{ asset('/img/favicon.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <a href="{{ route('marcas.index') }}" class="btn btn-rose text-center"> Marcas </a>
                    </div>
                </div>
            </div>
        {{--Línea--}}
            <div class="col-sm-3">
                <div class="card" style="width: 12rem;">
                    <img class="card-img-top" src="{{ asset('/img/favicon.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <a href="{{ route('lineas.index') }}" class="btn btn-rose text-center"> Líneas </a>
                    </div>
                </div>
            </div>
        {{--Familia--}}
            <div class="col-sm-3">
                <div class="card" style="width: 12rem;">
                    <img class="card-img-top" src="{{ asset('/img/favicon.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <a href="#" class="btn btn-rose text-center">Ir a Familia</a>
                    </div>
                </div>
            </div>
        {{--Modelo--}}
            <div class="col-sm-3">
                <div class="card" style="width: 12rem;">
                    <img class="card-img-top" src="{{ asset('/img/favicon.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <a href="#" class="btn btn-rose text-center">Ir a Modelo</a>
                    </div>
                </div>
            </div>
        {{--Talla--}}
            <div class="col-sm-3">
                <div class="card" style="width: 12rem;">
                    <img class="card-img-top" src="{{ asset('/img/favicon.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <a href="#" class="btn btn-rose text-center">Ir a Talla</a>
                    </div>
                </div>
            </div>
        {{--Color--}}
            <div class="col-sm-3">
                <div class="card" style="width: 12rem;">
                    <img class="card-img-top" src="{{ asset('/img/favicon.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <a href="#" class="btn btn-rose text-center">Ir a Color</a>
                    </div>
                </div>
            </div>
        {{--Temporada--}}
            <div class="col-sm-3">
                <div class="card" style="width: 12rem;">
                    <img class="card-img-top" src="{{ asset('/img/favicon.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <a href="#" class="btn btn-rose text-center">Ir a Temporada</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

