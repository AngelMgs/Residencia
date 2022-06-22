@extends('layouts.layout00')

@section('contenido')

<div class="content mt-3">
    <div class="container-fluid">
        @if (session('success'))
        <div id="alert1" class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{ session('success') }}</strong>
        <button id ="btn1"type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
    @endif
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('resetpasword',$id) }}" method="post" class="form-horizontal" id="form1">
                    @csrf

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Cambio de Contraseña</h4>
                            <p class="card-category">Nueva Contraseña</p>
                        </div>

                        <div class="card-body">
                            
                            
                            
                            <div class="row">


                                <label for="name" class="col-sm-3 col-form-label">Nueva Contraseña
                                    <div class="col-sm-100">
                                        <input type="password" class="form-control" name="passwordD"
                                            placeholder="Ingrese la Contraseña" value="" autofocus>
                                        @if ($errors->has('passwordD'))
                                            <span class="error text-danger"
                                                for="input-name">{{ $errors->first('passwordD') }}</span>
                                        @endif
                                    </div>    
                                </label>


                                <label for="name" class="col-sm-3 col-form-label">Confirme Contraseña
                                    <div class="col-sm-100">
                                        <input type="password" class="form-control" name="passwordC"
                                            placeholder="Ingrese la Contraseña" value="" autofocus>
                                        @if ($errors->has('passwordC'))
                                            <span class="error text-danger"
                                                for="input-name">{{ $errors->first('passwordC') }}</span>
                                        @endif
                                        
                                    </div>    
                                </label>

                            </div>

                            
                            

                        </div>
                        <!--Footer-->
                        <div class="card-footer ml-auto mr-auto">
                            <button class="text-grey-lighter font-bold py-3 px-6 rounded text-xs bg-blue-300 hover:bg-blue-dark">Confirmar</button>
                        </div>
                        <!--End footer-->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection