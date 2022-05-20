@extends('layouts.layout00')

@section('contenido')
    <div class="container-fluid mt-3">
        <div class="row" style="height:100vh">
            <div class="col">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Formatos Agregados</h4>
                        <p class="card-category">Formatos del Expediente {{$name}}</p>
                        <div class="text-left">
                            <div class="text-left">
                                <h4 class="card small">Seleccione un Formato Para Agregar al Expediente</h4>   
                            <form action="{{ route('forms.create') }}" method="GET">
                                <input  name="record_id" type="hidden" value="{{$id}}">
                                <select name="fm_pr7" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option value="HRP">Hoja de Regitro Personal</option>
                                    <option value="HD1">Hoja del Diario 1</option>
                                    <option value="HD2">Hoja del Diario 2</option>
                                  </select>
                                  <div class="text-left">
                                    <button type="submit" class="btn btn-success">Añadir Formato</button>
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
                                                    class="btn btn-info"><i class="material-icons">Ver Formato</i></a>
                                                @endcan
                                            </td>
                                            <td>    
                                                @can('form_edit')  
                                                <form action="{{ route('forms.edit',$form["id"]) }}" method="GET">
                                                    <input  name="record_id" type="hidden" value="{{$id}}">
                                                    <button type="submit" class="btn btn-warning">Editar Formato</button>
                                                </form>
                                            </td>
                                            <td>    
                                                @endcan
                                                @can('record_destroy')
                                                    <form action="{{ route('forms.destroy',$form["id"]) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                            <input  name="record_id" type="hidden" value="{{$id}}">
                                                            <input type="submit" class="btn btn-danger btn-sm" value="Eliminar" onclick="return confirm('deseas borrar?')">
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
