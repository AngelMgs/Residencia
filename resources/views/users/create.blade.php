@extends('layouts.layout00')

@section('contenido')
<div class="content mt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('users.store') }}" method="post" class="form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Usuario</h4>
                            <p class="card-category">Ingresar datos</p>
                        </div>

                        <div class="card-body">
                            
                            
                            <div class="row">
    
                                <label for="name" class="col-sm-3 col-form-label">Correo Electronico
                                    <div class="col-sm-100">
                                        <input type="email" class="form-control" name="email"
                                            placeholder="Ingrese Correo Electronico" value="{{ old('email') }}" autofocus>
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
                                            placeholder="Ingrese su Nombre" value="{{ old('nombre') }}" autofocus>
                                        @if ($errors->has('nombre'))
                                            <span class="error text-danger"
                                                for="input-name">{{ $errors->first('nombre') }}</span>
                                        @endif
                                    </div>    
                                </label>

                                
                                <label for="name" class="col-sm-3 col-form-label">Apellido Paterno
                                    <div class="col-sm-100">
                                        <input type="text" class="form-control" name="apellido_p"
                                            placeholder="Ingrese su apellido" value="{{ old('apellido_p') }}" autofocus>
                                        @if ($errors->has('apellido_p'))
                                            <span class="error text-danger"
                                                for="input-name">{{ $errors->first('apellido_p') }}</span>
                                        @endif
                                    </div>    
                                </label>

                                <label for="name" class="col-sm-3 col-form-label">Apellido Materno
                                    <div class="col-sm-100">
                                        <input type="text" class="form-control" name="apellido_m"
                                            placeholder="Ingrese su apellido" value="{{ old('apellido_m') }}" autofocus>
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
                                            placeholder="Ingrese telefono" value="{{ old('telefono') }}" autofocus>
                                        @if ($errors->has('telefono'))
                                            <span class="error text-danger"
                                                for="input-name">{{ $errors->first('telefono') }}</span>
                                        @endif
                                    </div>    
                                </label>

                                <label for="name" class="col-sm-3 col-form-label">direccion
                                    <div class="col-sm-100">
                                        <input type="text" class="form-control" name="direccion"
                                            placeholder="Ingrese direccion" value="{{ old('direccion') }}" autofocus>
                                        @if ($errors->has('direccion'))
                                            <span class="error text-danger"
                                                for="input-name">{{ $errors->first('direccion') }}</span>
                                        @endif
                                    </div>    
                                </label>

                            </div>
                            
                            <br>

                            <div class="row">
                                <label for="roles" class="col-sm-3 col-form-label">Roles
                                    <div class="col-sm-100">
                                        <select class="form-select" name="roles[]">
                                            <option value="">Seleccione un rol</option>
                                            @foreach ($roles as $id => $role)
                                                    <option value="{{ $id }}">{{ $role }}</option>
                                            @endforeach
                                        </select>
                                    </div> 
                                </label>
                                       
                            </div>

                        </div>
                        <!--Footer-->
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                        <!--End footer-->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection