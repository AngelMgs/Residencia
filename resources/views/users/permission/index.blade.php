@extends('layouts.layout00')

@section('contenido')


    <div class="container-fluid mt-3">
        <div class="row" style="height:100vh">
            <div class="col">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Permisos</h4>
                        <p class="card-category">Permisos registrados</p>
                        
                    </div>
                    <div class="card-body">
                        

                        <div class="table-responsive">
                            <table class="table">
                                {{-- encabezado --}}
                                <thead class="text primary">
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Guard</th>
                                    <th>Fecha de creacion</th>
                                    <th>Acciones</th>
                                </thead>
                                {{-- cuerpo --}}
                                <tbody>
                                    @forelse ($roles as $role)
                                        <tr>
                                            <td>{{ $role->id }}</td>
                                            <td>{{ $role->name }}</td>
                                            <td>{{ $role->guard_name }}</td>
                                            <td class="text-primary">{{ $role->created_at->toFormattedDateString() }}
                                            </td>

                                            <td>
                                                @forelse ($role->permissions as $permission)
                                                    <span class="badge badge-info">{{ $permission->name }}</span>
                                                @empty
                                                    <span class="badge badge-danger">No se han agregado permisos</span>
                                                @endforelse
                                            </td>
                                        </tr>    

                                    @empty
                                        <tr>
                                            <td colspan="2">Sin registros.</td>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-body mr-auto">
                        {{ $roles->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
