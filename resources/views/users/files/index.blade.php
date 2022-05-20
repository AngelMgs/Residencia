@extends('layouts.layout00')

@section('contenido')


<div class="container">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Galeria</h4>
            <p class="card-category">Imagenes en su Galeria</p>
        </div>

            @if (session('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
   
    <div class="row">

    @forelse ($files as $file)
      

      <div class="card" style="width: 15rem;">
        <img src="{{asset($file->url)}}" class="card-img" >
        <div class="card-body">
            @can('files_destroy')
                <form action="/files/{{$file->id}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" class="btn btn-danger btn-sm" value="Eliminar" onclick="return confirm('deseas borrar?')">
                                                                
                </form>
            @endcan 
        </div> 
      </div>

    @empty
        <div class="card-header card-header-primary">
            <h4 class="card-title">Sin Imagenes</h4>
        </div>
    @endforelse  


    </div>

    <div class="card-body mr-auto">
        {{ $files->links() }}
    </div>
    
    
  </div>
  @endsection
