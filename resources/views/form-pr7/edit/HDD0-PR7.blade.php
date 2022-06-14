@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ route('forms.update',$id ) }}" method="post"> 
    @csrf
    @method('put')

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
        
        <input  name="record_id" type="hidden" value="{{$record_id}}">
  
        <div class="col-sm">
          <div class="text-center "><img src="{{asset('img/rec2.png')}}" width="180"></div>  
        </div>
      </div>
      
      <br>
  
      <div class="row">
          <div class="col-sm">
              <p class="text-center"><b><u>HOJA DEL DIARIO / DEPARTAMENTO PSICOPEDAGOGICO</u></b></p>
          </div>
          <div class="col-sm">
          </div>
          <div class="col-sm">
              <div class="form-group form-inline">
                  <label>TURNO:</label>
                    <select name="hrp_turno" class="form-select" aria-label="Default select example">
                        <option value="{{$info['hrp_turno']}}">{{$info['hrp_turno']}}</option>
                        @if($info['hrp_turno'] == 'Matutino') 
                        <option value="Vespertino">Vespertino</option>
                        @else
                        <option value="Matutino">Matutino</option>
                        @endif
                    </select>
                </div>    
          </div>
      </div>
  
      <div class="row">
          <label>FECHA:<b><div name="hrp_fecha" ></p></b></label>
      </div>
      <br>
      <div class="row">
          <label >NOMBRE DEL ALUMNO:</label>
          <div class="col-sm-9">
            <input type="text" name="hrp_nombre" value="{{$info['hrp_nombre']}}" class="form-control" >
          </div>
      </div>
      <div class="row">
          <label >HORARIO DE ATENCION:</label>
          <div class="col-sm-9">
            <input type="text" name="hrp_horario" value="{{$info['hrp_horario']}}" class="form-control" >
          </div>
      </div>
  
      <div class="row">
          <label >MATERIA:</label>
          <div class="col-sm-9">
            <input type="text" name="hrp_materia" value="{{$info['hrp_materia']}}" class="form-control" >
          </div>
      </div>
  
      <div class="row">
          <label >DOCENTE:</label>
          <div class="col-sm-9">
            <input type="text" name="hrp_docente" value="{{$info['hrp_docente']}}" class="form-control" >
          </div>
      </div>
  
      <div class="row">
          <div class="col-md-3">
              <label class="form-label">GRADO:</label>
              <input type="text" class="form-control" value="{{$info['hrp_grado']}}" name="hrp_grado" >
          </div>
  
          <div class="col-md-3">
              <label class="form-label">GRUPO:</label>
              <input type="text" class="form-control" value="{{$info['hrp_grupo']}}" name="hrp_grupo" >
          </div>
  
          <div class="col-md-3">
              <label class="form-label">EDAD:</label>
              <input type="number" class="form-control" value="{{$info['hrp_edad']}}" name="hrp_edad" >
          </div>
      </div>
  
      <div class="row">
          <label >PSIC. A CARGO:</label>
          <div class="col-sm-9">
            <input type="text" name="hrp_psicologo" value="{{$info['hrp_psicologo']}}" class="form-control" >
          </div>
      </div>
      <br>
      <div class="row">
          <div class="col-sm-9">
              <p class="text-center">SECRETARIO ACADEMICO: LIC. FELIPE DE JESUS NAVA ALVAREZ</p>
          </div>
      </div>

    <div class="card-footer ml-auto mr-auto">
      <button class="text-grey-lighter font-bold py-3 px-6 rounded text-xs bg-blue-300 hover:bg-blue-dark">Guardar</button>
    </div>
</form>


</div>

<script>
    date = new Date();
    year = date.getFullYear();
    month = date.getMonth() + 1;
    day = date.getDate();
    document.getElementById("hrp-fecha").innerHTML = day + "/" + month + "/" + year;
</script>
@endsection