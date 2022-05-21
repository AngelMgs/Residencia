@extends('layouts.layout00')

@section('contenido')
<div class="container mx-auto px-4">
    <!-- component -->
     
    @if (session('success'))
    <div id="alert1" class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{ session('success') }}</strong>
        <button id ="btn1"type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    
    

    <div class="bg-white shadow-md rounded my-7">
        <header class="px-5 py-4 border-b border-gray-100">
            <div class="font-semibold text-gray-800">Expedientes</div>
        </header>

      <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
        <thead>
          <tr>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">ID</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Nombre</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Permisos</th>
          
        </tr>
        </thead>
        <tbody>
        @forelse ($roles as $role)
        <tr class="hover:bg-grey-lighter">
            <td class="py-4 px-6 border-b border-grey-light">{{ $role->id }}</td>
            <td class="py-4 px-6 border-b border-grey-light">{{ $role->name }}</td>
            <td class="py-4 px-6 border-b border-grey-light">
                @forelse ($role->permissions as $permission)
                    <span class="badge badge-info">{{ $permission->name }}</span>
                @empty
                    <span class="badge badge-danger">No se han agregado permisos</span>
                @endforelse
            </td>
            
            
        </tr>
        @empty
        <tr class="hover:bg-grey-lighter">
            <td class="py-2 px-3 border-b border-grey-light">Sin Registros</td>
        </tr>    
        @endforelse    
        </tbody>
      </table>
    </div>
    <div class="bg-white shadow-md rounded my-7">
    {{$roles->links('pagination::bootstrap-4')  }}
    </div>
</div>



@endsection