@extends('layouts.layout00')



@section('contenido')


    <div class="container-fluid mt-3">
        <div class="row" style="height:100vh">
            <div class="col">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Expedientes</h4>
                        <p class="card-category">Todos los Expendientes</p>
                        
                        
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                    <button id="btn1" type="button" class="close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table">
                                {{-- encabezado --}}
                                <thead class="text primary">
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Folio</th>
                                    <th>Fecha</th>
                                </thead>
                                {{-- cuerpo --}}
                                <tbody>
                                    @forelse ($records as $record)
                                        <tr>
                                            <td>{{ $record->id }}</td>
                                            <td>{{ $record->name }}</td>
                                            <td>{{ $record->folio }}</td>
                                            <td class="text-primary">{{ $record->created_at->toFormattedDateString() }}
                                            </td>


                                            <td >
                                                @can('record_show') 
                                                <a href="{{ route('records.show', $record->id) }}"
                                                    class="btn btn-info"><i class="material-icons">Ver Expediente</i></a>
                                                @endcan 
                                                @can('record_edit')    
                                                <a href="{{ route('records.edit', $record->id) }}"
                                                    class="btn btn-warning">
                                                    <i class="material-icons">Editar Nombre</i></a>
                                                @endcan    
                                                <br>
                                                @can('record_destroy')
                                                <form action="/records/{{$record->id}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="submit" class="btn btn-danger btn-sm" value="Eliminar" onclick="return confirm('¿Confirma para Borrar?')">
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

                    <div class="card-body mr-auto">
                        {{ $records->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>

    
@endsection
