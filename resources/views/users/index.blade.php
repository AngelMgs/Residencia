@extends('layouts.layout00')

@section('contenido')
<div class="content mt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Usuarios</h4>
                                <p class="card-category">Usuarios registrados</p>
                            </div>

                            <div class="card-body">
                                @if (session('success'))
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>{{ session('success') }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                @endif

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>ID</th>
                                            <th>Correo Electronico</th>
                                            <th>Roles</th>
                                            <th class="text-right">Acciones</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td>{{ $user->id }}</td>
                                                    {{-- <td>{{ $user->name }}</td> --}}
                                                    <td>{{ $user->email }}</td>
                                                    <td>
                                                        @forelse ($user->roles as $role)
                                                            <span class="badge badge-info">{{ $role->name }}</span>
                                                        @empty
                                                            <span class="badge badge-danger">Sin rol de usuario</span>
                                                        @endforelse
                                                    </td>
                                                    <td class="td-actions text-right">

                                                        <a href="{{ route('users.show', $user->id) }}"
                                                            class="btn btn-info"><i class="material-icons">Ver Perfil</i></a>
                                                        @can('user_edit')    
                                                        <a href="{{ route('users.edit', $user->id) }}"
                                                            class="btn btn-warning">
                                                            <i class="material-icons">Editar Perfil</i></a>
                                                        @endcan    
                                                        @can('user_destroy')
                                                        <form action="/users/{{$user->id}}" method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <input type="submit" class="btn btn-danger btn-sm" value="Eliminar" onclick="return confirm('deseas borrar?')">
                                                                
                                                        </form>
                                                        @endcan    
                                                    </td>

                                                    
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-body mr-auto">
                                {{ $users->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection