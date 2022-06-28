@extends('layouts.app')

@section('content')
<div class="container">

    @if (session('success'))
    <div id="alert1" class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{ session('success') }}</strong>
        <button id ="btn1"type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif 


    <div class="row">

      <div class="col-sm">
        <div class="text-center"><img src="{{asset('img/form/logo-segc.png')}}" alt=""></div>  
      </div>

      <div class="col-sm">
        <p class="text-center"><b>SUBSECRETARIA DE EDUACION ESTATAL</b>
            <br>
        DIRECCIÓN DE EDUACIÓN MEDIA
        <br>
        DEPARTAMENTO PSICOPEDAGÓGICO
        <br>
        ESCUELA PREPARATORIA NUM. 7 DEL ESTADO 
        <br>
        CLAVE: 07EBH00899Z T/M CLAVE: 07EBH0067N T/M 
        </p>
      </div>

      <div class="col-sm">
        <div class="text-center "><img src="{{asset('img/rec2.png')}}" width="180"></div>  
      </div>
    </div>

    <br>

    

    <div class="row">
        <div class="col-sm">
            <p class="text-center"><b><u>RED DE APOYO E INTITUCIONES EXTERNAS </u></b></p>
        </div>
    </div>
    <div class="row">
    </div>  
    <br> 
        
    <div class="row border">
        <div class="col-sm">
            Dependencia
        </div>
        <div class="col-sm">
            Dirección
        </div>
        <div class="col-sm">
            Teléfonos
        </div>
    </div>

    @for ($i=0; $i < $count ; $i++)
    <div class="row border">
        <div class="col-sm">
            <input type="text" name="hrp_dep[]" class="form-control" placeholder="Dependencia" value="{{$inf['dependencia'][$i]}}" readonly>
        </div>
        <div class="col-sm">
            <input type="text" name="hrp_dir[]" class="form-control" placeholder="Dirección" value="{{$inf['direccion'][$i]}}" readonly>
        </div>
        <div class="col-sm">
            <input type="text" name="hrp_tel[]" class="form-control" placeholder="Teléfonos" value="{{$inf['telefono'][$i]}}" readonly>
        </div>
        <div class="col-sm">
        </div>
    </div>
    @endfor


</div>


@endsection