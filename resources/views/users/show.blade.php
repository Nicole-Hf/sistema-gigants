@extends('layouts.main',['activePage'=>'users', 'titlePage'=>'Usuario'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        {{--Header Principal--}}
                        <div class="card-header card-header-primary">
                            <div class="card-title">Detalle de Usuario</div>
                            <p class="card-category">{{ $user->name }}</p>
                        </div>
                        {{--Body Principal--}}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="card card-user">
                                        <div class="card-body">
                                            <p class="card-text">
                                            <div class="author">
                                                <a href="#" class="d-flex">
                                                    <img src="{{ asset('/img/faces/avatar.jpg') }}" alt="image" class="avatar">
                                                    <h5 class="title mx-3">{{ $user->name }}</h5>
                                                </a>
                                                <p class="description">
                                                    {{ $user->name }}  <br>
                                                    {{ $user->email }} <br>
                                                    {{ $user->created_at }} <br>
                                                </p>
                                            </div>
                                            </p>
                                            <div class="card-description">
                                                Descripcion del Usuario....
                                            </div>
                                            <div class="card-footer">
                                                <div class="button-container">
                                                    <a href="{{ route('users.index')}}" class="btn btn-sm btn-success mr-3">
                                                        Volver
                                                    </a>
                                                    <button class="btn btn-sm btn-primary">Editar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
