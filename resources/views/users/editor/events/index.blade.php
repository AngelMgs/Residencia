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
            <div class="font-semibold text-gray-800">Eventos</div>
        </header>

      <table id="table1" class="text-left w-full border-collapse table table-striped"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
        <thead>
          <tr>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">ID</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Titulo</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Descripcion</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Inicio del Evento</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Fin del Evento</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($events as $event)
        <tr class="hover:bg-grey-lighter">
            <td class="py-4 px-6 border-b border-grey-light">{{$event->id}}</td>
            <td class="py-4 px-6 border-b border-grey-light">{{$event->title}}</td>
            <td class="py-4 px-6 border-b border-grey-light">{{$event->description}}</td>
            <td class="py-4 px-6 border-b border-grey-light">{{$event->start}}</td>
            <td class="py-4 px-6 border-b border-grey-light">{{$event->end}}</td>
            
            
            <td class="py-4 px-6 border-b border-grey-light">
                @can('editor_edit')  
                <a href="{{ route('events.edit', $event->id) }}" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green-300 hover:bg-green-dark">Editar Evento</a>
                @endcan 
            </td>
            <td class="p-2">
                @can('editor_destroy')
                <div class="justify-center">
                    <form action="/events/{{$event->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <button>
                            <svg class="w-8 h-8 hover:text-blue-600 rounded-full hover:bg-gray-100 p-1"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                </path>
                            </svg>
                        </button>
                    </form>
                </div>    
                @endcan
            </td>
            
        </tr>
        @endforeach    
        </tbody>
      </table>
    </div>
    <div class="bg-white shadow-md rounded my-7">
    {{ $events->links(('pagination::bootstrap-4') ) }}
    </div>
</div>


@endsection