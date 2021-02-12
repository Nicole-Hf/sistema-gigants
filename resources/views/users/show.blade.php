@extends('layouts.main',['activePage'=>'users', 'titlePage'=>'Usuario'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        {{--Header Principal--}}
                        <div class="card card-nav-tabs text-center">
                            <div class="card-header card-header-rose">
                                <h4 class="card-title">Detalle de Usuario</h4>
                                {{--<p class="card-category">{{ $user->name }}</p>--}}
                            </div>
                        {{--Body Principal--}}
                            <div class="card-body">
                                <p class="card-text">
                                <div class="author">
                                    <a href="#" class="d-flex">
                                        <img src="{{ asset('/img/faces/avatar.jpg') }}" alt="image" class="avatar">
                                        <h5 class="title mx-3">{{ $user->name }}</h5>
                                    </a>
                                    <p class="card-text ">
                                        {{ $user->name }}  <br>
                                        {{ $user->email }} <br>
                                        {{ $user->created_at }} <br>
                                    </p>
                                </div>
                                </p>
                                <a href="{{ route('users.index')}}" class="btn btn-rose">Volver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
