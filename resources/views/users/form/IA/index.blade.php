@extends('layouts.layout00')

@section('contenido')
    <div class="container-fluid mt-3">
        <div class="row" style="height:100vh">
            <div class="col">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Formatos de RED DE APOYO E INTITUCIONES EXTERNAS</h4>
                        <div class="text-left">
                            <a class="text-grey-lighter font-bold py-3 px-6 rounded text-xs bg-green-300 hover:bg-blue-dark" href="{{ route('forms2.create') }}">Añadir Formato</a>
                        </div> 
                    </div>

                    
                    <div class="card-body">
                        @if (session('success'))
                        <div id="alert1" class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>{{ session('success') }}</strong>
                            <button id ="btn1"type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif

                        <div class="table-responsive mt-3">
                            <table class="table">
                                <thead class="text primary">
                                    <th>Id</th>
                                    <th>Formato</th>
                                    <th>Opciones</th>
                                    <th ></th>
                                </thead>
                                <tbody>
                                    @forelse ($forms as $form)
                                        <tr>
                                            <td>{{ $form["id"] }}</td>
                                            <td>{{ $form["name"] }}</td>

                                            <td>
                                                @can('form_show') 
                                                <a href="{{ route('forms2.show', $form["id"]) }}"
                                                class="text-grey-lighter font-bold py-2 px-3 rounded text-xs bg-blue-300 hover:bg-blue-dark">Ver Formato</i></a>
                                                @endcan
                                            </td>
                                            <td>    
                                                @can('form_edit')  
                                                <a href="{{ route('forms2.edit', $form["id"]) }}"
                                                class="text-grey-lighter font-bold py-2 px-3 rounded text-xs bg-green-300 hover:bg-blue-dark">Editar</i></a>
                                                @endcan
                                            </td>
                                            <td>    
                                                @can('record_destroy')
                                                    <form action="{{ route('forms2.destroy',$form["id"]) }}" method="POST">
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
                                                @endcan
                                            </td> 
                                            
                                            <td>
                                                @can('form_show') 
                                                <a href="{{ route('pdf', $form["id"]) }}"
                                                class="text-grey-lighter font-bold py-2 px-3 rounded text-xs bg-blue-300 hover:bg-blue-dark"><i class='bx bxs-file-pdf'width="10px">Generar PDF</i></a>
                                                @endcan
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
                    
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
    <script src="https://rawgit.com/jeresig/jquery.hotkeys/master/jquery.hotkeys.js"></script>
@endsection
