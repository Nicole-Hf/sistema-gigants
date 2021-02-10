@extends('layouts.main', ['class' => 'off-canvas-sidebar', 'activePage' => 'login', 'title' => __('Tienda Gigants')])

@section('content')
    <div class="container" style="height: auto;">
        <div class="row align-items-center">
            <div class="col-md-9 ml-auto mr-auto mb-3 text-center">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
                <form class="form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="card card-login card-hidden mb-3">
                        <div class="card-header card-header-primary text-center">
                            <h4 class="card-title"><strong>{{ __('Iniciar Sesión') }}</strong></h4>
                        </div>
                        <div class="card-body">
                            {{--<div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">email</i>
                                        </span>
                                    </div>
                                    <input type="email"
                                           name="email"
                                           class="form-control"
                                           placeholder="{{ __('Correo electrónico...') }}"
                                           value="{{ old('email') }}"
                                           required autocomplete="email" autofocus>
                                </div>
                                @if ($errors->has('email'))
                                    <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                @endif
                            </div>--}}
                            <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">face</i>
                                        </span>
                                    </div>
                                    <input type="text"
                                           name="name"
                                           class="form-control"
                                           placeholder="{{ __('Nombre de Usuario...') }}"
                                           value="{{ old('name') }}"
                                           required autocomplete="name" autofocus>
                                </div>
                                @if ($errors->has('name'))
                                    <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                    </div>
                                    <input type="password"
                                           name="password"
                                           id="password"
                                           class="form-control"
                                           placeholder="{{ __('Contraseña...') }}"
                                           required autocomplete="current-password">
                                </div>
                                @if ($errors->has('password'))
                                    <div id="password-error"
                                         class="error text-danger pl-3" for="password"
                                         style="display: block;">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="form-check mr-auto ml-3 mt-3">
                                <label class="form-check-label">
                                    <input class="form-check-input"
                                           type="checkbox"
                                           name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember me') }}
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="card-footer justify-content-center">
                            <button type="submit" class="btn btn-primary btn-link btn-lg">{{ __('Acceder') }}</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
