@extends('layouts.layout00')

@section('contenido')
<div class="content mt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                    <div class="card">
                    @foreach ($usrs as $usr)   
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Perfil</h4>
                            <p class="card-category">
                                
                            </p>
                        </div>

                        <div class="card-body">
                        

                            <div class="row">
    
                                <label for="name" class="col-sm-3 col-form-label">Correo Electronico
                                    <div class="col-sm-100">
                                        <input type="email" class="form-control" name="email"
                                            placeholder="" value="{{ $usr["email"] }}" readonly="readonly">
                                    </div>    
                                </label>

                            </div>
                            
                            <br>

                            <div class="row">
                                <label for="nombre" class="col-sm-3 col-form-label">Nombre
                                    <div class="col-sm-100">
                                        <input type="text" class="form-control" name="nombre"
                                            placeholder="Ingrese su Nombre" value="{{ $usr["nombre"] }}" readonly="readonly">
                                    </div>    
                                </label>

                                
                                <label for="name" class="col-sm-3 col-form-label">Apellido Paterno
                                    <div class="col-sm-100">
                                        <input type="text" class="form-control" name="apellido_p"
                                            placeholder="Ingrese su apellido" value="{{ $usr["apellido_p"] }}" readonly="readonly">
                                    </div>    
                                </label>

                                <label for="name" class="col-sm-3 col-form-label">Apellido Materno
                                    <div class="col-sm-100">
                                        <input type="text" class="form-control" name="apellido_m"
                                            placeholder="Ingrese su apellido" value="{{ $usr["apellido_m"] }}" readonly="readonly">
                                    </div>    
                                </label>
                                
                                
                            </div>

                            <br>

                            <div class="row">
                                
                                <label for="name" class="col-sm-3 col-form-label">Telefono
                                    <div class="col-sm-100">
                                        <input type="text" class="form-control" name="telefono"
                                            placeholder="Ingrese telefono" value="{{ $usr["telefono"] }}" readonly="readonly">
                                    </div>    
                                </label>

                                <label for="name" class="col-sm-3 col-form-label">direccion
                                    <div class="col-sm-100">
                                        <input type="text" class="form-control" name="direccion"
                                            placeholder="Ingrese direccion" value="{{ $usr["direccion"] }}" readonly="readonly">
                                    </div>    
                                </label>

                            </div>
                            


                        </div>
                        <div class="card-footer bg-white ml-auto mr-auto">
                            <a class="text-grey-lighter font-bold py-3 px-6 rounded text-xs bg-blue-300 hover:bg-blue-dark" href="{{route('reset',$id)}}">Cambiar Contraseña</a>
                        </div>
                        @endforeach 
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection