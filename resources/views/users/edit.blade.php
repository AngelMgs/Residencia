@extends('layouts.layout00')

@section('contenido')
<div class="content mt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                
                @foreach ($usrs as $usr)  
                <form action="/users/{{$id}}" method="post" class="form-horizontal">
                    @csrf
                    @method('put')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Usuario</h4>
                            <p class="card-category">Editar datos</p>
                        </div>
                          
                        <div class="card-body">
                            <div class="row">
    
                                <label for="name" class="col-sm-3 col-form-label">Correo Electronico
                                    <div class="col-sm-100">
                                        <input type="email" class="form-control" name="email"
                                            placeholder="Ingrese Correo Electronico" value="{{$usr["email"] }}" autofocus>
                                        @if ($errors->has('email'))
                                            <span class="error text-danger"
                                                for="input-name">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>    
                                </label>

                            </div>
                            
                            <br>

                            <div class="row">
                                <label for="nombre" class="col-sm-3 col-form-label">Nombre
                                    <div class="col-sm-100">
                                        <input type="text" class="form-control" name="nombre"
                                            placeholder="Ingrese su Nombre" value="{{$usr["nombre"] }}" autofocus>
                                        @if ($errors->has('nombre'))
                                            <span class="error text-danger"
                                                for="input-name">{{ $errors->first('nombre') }}</span>
                                        @endif
                                    </div>    
                                </label>

                                
                                <label for="name" class="col-sm-3 col-form-label">Apellido Paterno
                                    <div class="col-sm-100">
                                        <input type="text" class="form-control" name="apellido_p"
                                            placeholder="Ingrese su apellido" value="{{ $usr["apellido_p"] }}" autofocus>
                                        @if ($errors->has('apellido_p'))
                                            <span class="error text-danger"
                                                for="input-name">{{ $errors->first('apellido_p') }}</span>
                                        @endif
                                    </div>    
                                </label>

                                <label for="name" class="col-sm-3 col-form-label">Apellido Materno
                                    <div class="col-sm-100">
                                        <input type="text" class="form-control" name="apellido_m"
                                            placeholder="Ingrese su apellido" value="{{ $usr["apellido_m"] }}" autofocus>
                                        @if ($errors->has('apellido_m'))
                                            <span class="error text-danger"
                                                for="input-name">{{ $errors->first('apellido_m') }}</span>
                                        @endif
                                    </div>    
                                </label>
                                
                                
                            </div>

                            <br>

                            <div class="row">
                                
                                <label for="name" class="col-sm-3 col-form-label">Telefono
                                    <div class="col-sm-100">
                                        <input type="text" class="form-control" name="telefono"
                                            placeholder="Ingrese telefono" value="{{ $usr["telefono"] }}" autofocus>
                                        @if ($errors->has('telefono'))
                                            <span class="error text-danger"
                                                for="input-name">{{ $errors->first('telefono') }}</span>
                                        @endif
                                    </div>    
                                </label>

                                <label for="name" class="col-sm-3 col-form-label">direccion
                                    <div class="col-sm-100">
                                        <input type="text" class="form-control" name="direccion"
                                            placeholder="Ingrese direccion" value="{{ $usr["direccion"] }}" autofocus>
                                        @if ($errors->has('direccion'))
                                            <span class="error text-danger"
                                                for="input-name">{{ $errors->first('direccion') }}</span>
                                        @endif
                                    </div>    
                                </label>

                            </div>
                            
                            <br>

                            
                        <!--Footer-->
                        <div class="card-footer ml-auto mr-auto">
                            <button class="text-grey-lighter font-bold py-3 px-6 rounded text-xs bg-blue-300 hover:bg-blue-dark">Actualizar</button>
                        </div>
                        <!--End footer-->
                    </div>
                </form>
                @endforeach 
            </div>
        </div>
    </div>
</div>
@endsection