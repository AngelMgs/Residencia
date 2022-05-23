@extends('layouts.layout00')

@section('contenido')
    <div class="container-fluid mt-3">
        <div class="row" style="height:100vh">
            <div class="col">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Formatos Agregados</h4>
                        <p class="card-category">Formatos del Expediente {{$name}}</p>
                        <br>
                        <div class="text-left">
                            <div class="text-left">
                                <h2 class="card-category">Seleccione un Formato Para Agregar al Expediente:</h2>   
                            <form action="{{ route('forms.create') }}" method="GET">
                                <input  name="record_id" type="hidden" value="{{$id}}">
                                <select name="fm_pr7" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option value="HRP">Hoja de Regitro Personal</option>
                                    <option value="HD1">Hoja del Diario 1</option>
                                    <option value="HD2">Hoja del Diario 2</option>
                                  </select>
                                  <div class="text-left">
                                    <button class="text-grey-lighter font-bold py-3 px-6 rounded text-xs bg-green-300 hover:bg-blue-dark">Editar Formato</button>
                                  </div>  
                            </form>
                            </div>
                        </div>
                    </div>

                    
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-primary" role="success">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                {{ session('success') }}
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
                                                <a href="{{ route('forms.show', $form["id"]) }}"
                                                class="text-grey-lighter font-bold py-2 px-3 rounded text-xs bg-blue-300 hover:bg-blue-dark">Ver Formato</i></a>
                                                @endcan
                                            </td>
                                            <td>    
                                                @can('form_edit')  
                                                <form action="{{ route('forms.edit',$form["id"]) }}" method="GET">
                                                    <input  name="record_id" type="hidden" value="{{$id}}">
                                                    <button class="text-grey-lighter font-bold py-2 px-3 rounded text-xs bg-green-300 hover:bg-blue-dark">Editar Formato</button>
                                                </form>
                                            </td>
                                            <td>    
                                                @endcan
                                                @can('record_destroy')
                                                    <form action="{{ route('forms.destroy',$form["id"]) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                            <input  name="record_id" type="hidden" value="{{$id}}">
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
@endsection
