@extends('layouts.layout00')

@section('contenido')
<div class="content mt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('files.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Galeria</h4>
                            <p class="card-category">Agrege Imagenes a su Galeria</p>
                        </div>

                        <div class="card-body">

                            <div class="row">
                                <label for="nombre" class="col-sm-5 col-form-label">Elija sus imagenes:
                                    <div class="col-sm-100">
                                        <input type="file" class="form-control" name= "file" id="file" accept="image/*">
                                        @if ('file')
                                            <span class="error text-danger"
                                                for="input-name">{{ $errors->first('file') }}</span>
                                        @endif
                                    </div>    
                                </label>      
                        </div>
                        <!--Footer-->
                        <div class="card-footer ml-auto mr-auto">
                            <button class="text-grey-lighter font-bold py-3 px-6 rounded text-xs bg-green-300 hover:bg-blue-dark">Agregar</button>
                        </div>
                        <!--End footer-->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection