@extends('layouts.layout00')

@section('contenido')
<div class="content mt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('records.store') }}" method="post" class="form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Expedientes</h4>
                            <p class="card-category">Agregar un Nuevo Expediente</p>
                        </div>

                        <div class="card-body">

                            <div class="row">
                                <label for="nombre" class="col-sm-3 col-form-label">Nombre del Expediente
                                    <div class="col-sm-100">
                                        <input type="text" class="form-control" name="name"
                                            placeholder="Ingrese Nombre" value="{{ old('name') }}" autofocus>
                                        @if ($errors->has('name'))
                                            <span class="error text-danger"
                                                for="input-name">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>    
                                </label>      
                        </div>
                        <!--Footer-->
                        <div class="card-footer ml-auto mr-auto">
                            <button class="text-grey-lighter font-bold py-3 px-6 rounded text-xs bg-green-300 hover:bg-blue-dark">Guardar</button>
                        </div>
                        <!--End footer-->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection