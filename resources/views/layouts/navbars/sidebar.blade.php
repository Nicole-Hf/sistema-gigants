<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('/img/sidebar-1.jpg') }}">
    <div class="logo">
        <a href="https://creative-tim.com/" class="simple-text logo-normal">
            {{ __('Tienda Gigants') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ ($activePage == 'productos' || $activePage == 'caracteristicas') ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="false">
                    <i class="material-icons">shopping_basket</i>
                    <p>{{ __('Gestionar Producto') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExample">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'productos' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('productos.index') }}">
                                <i class="material-icons">local_mall</i>
                                <span class="sidebar-normal">{{ __('Producto') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'caracteristicas' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('caracteristicas.index') }}">
                                <i class="material-icons">star</i>
                                <span class="sidebar-normal"> {{ __('Características') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{--Paquete de Gestionar Compras--}}
            <li class="nav-item {{ ($activePage == 'compra' || $activePage == 'proveedor') ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#compra" aria-expanded="false">
                    <i class="material-icons">store</i>
                    <p>{{ __('Gestionar Compra') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="compra">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'compra' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('compras.index') }}">
                                <i class="material-icons">local_mall</i>
                                <span class="sidebar-normal">{{ __('Gestionar Compra') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'proveedor' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('proveedores.index') }}">
                                <i class="material-icons">local_shipping</i>
                                <span class="sidebar-normal"> {{ __('Gestionar Proveedor') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{--Paquete de Gestionar Ventas--}}
            <li class="nav-item {{ ($activePage == 'venta' || $activePage == 'cliente') ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#ventas" aria-expanded="false">
                    <i class="material-icons">local_grocery_store</i>
                    <p>{{ __('Gestionar Venta') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="ventas">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'venta' ? ' active' : '' }}">
                            <a class="nav-link" href="#">
                                <i class="material-icons">sell</i>
                                <span class="sidebar-normal">{{ __('Gestionar Venta') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'cliente' ? ' active' : '' }}">
                            <a class="nav-link" href="#">
                                <i class="material-icons">perm_identity</i>
                                <span class="sidebar-normal"> {{ __('Gestionar Cliente') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{--Paquete de Gestionar Almacén--}}
            <li class="nav-item {{ ($activePage == 'almacen' || $activePage == 'sector') ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#almacen" aria-expanded="false">
                    <i class="material-icons">corporate_fare</i>
                    <p>{{ __('Gestionar Almacén') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="almacen">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'almacen' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('almacenes.index') }}">
                                <i class="material-icons">add_business</i>
                                <span class="sidebar-normal">{{ __('Gestionar Almacén') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'sector' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('sectores.index') }}">
                                <i class="material-icons">layers</i>
                                <span class="sidebar-normal"> {{ __('Gestionar Sector') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{--Paquete de Administrar Usuarios--}}
            <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('users.index') }}">
                    <i class="material-icons">content_paste</i>
                    <p>Administrar Usuarios</p>
                </a>
            </li>
        </ul>
    </div>
</div>
