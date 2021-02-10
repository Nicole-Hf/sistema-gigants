@extends('layouts.main', ['activePage'=>'users', 'titlePage'=>'Usuarios'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            {{--Mensaje--}}
            @if (Session::has('mensaje'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    {{ Session::get('mensaje') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            {{--Botón agregar--}}
            <div class="row">
                <div class="col-12 text-left">
                    <a href="{{ route('users.create')  }}" class="btn btn-outline-dark">Agregar Usuario</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        {{--Header--}}
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Usuarios</h4>
                            <p class="card-category">Usuarios registrados</p>
                        </div>
                        {{--Body--}}
                        <div class="card-body">
                            {{--tabla--}}
                            <div class="table-responsive">
                                <table class="table">
                                    {{--Cabecera de Tabla--}}
                                    <thead class="text-primary">
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Correo electrónico</th>
                                    <th>Fecha Creación</th>
                                    <th class="text-right">Acciones</th>
                                    </thead>
                                    {{--Llamar a los usuarios--}}
                                    <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td class="td-actions text-right">
                                            {{--Ver Usuario--}}
                                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">
                                                <i class="material-icons">person</i>
                                            </a>
                                            {{--Editar Usuario--}}
                                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">
                                                <i class="material-icons">edit</i>
                                            </a>
                                            {{--Eliminar Usuario--}}
                                            <form action="{{ route('users.delete',$user->id) }}" method="post"
                                                  style="display: inline-block;"
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
                        {{--Footer--}}
                        <div class="card-footer mr-auto">
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
