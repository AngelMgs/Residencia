@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

      <div class="col-sm">
        <div class="text-center"><img src="{{asset('img/form/logo-segc.png')}}" alt=""></div>  
      </div>

      <div class="col-sm">
        <p class="text-center"><b>SUBSECRETARIA DE EDUACION ESTATAL</b>
        DIRECCIÓN DE EDUACIÓN MEDIA
        DEPARTAMENTO PSICOPEDAGÓGICO
        ESCUELA PREPARATORIA NUM. 7 DEL ESTADO 
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
            <p class="text-center"><b><u>HOJA DEL DIARIO / DEPARTAMENTO PSICOPEDAGOGICO</u></b></p>
        </div>
        <div class="col-sm">
        </div>
        <div class="col-sm">
            <div class="form-group form-inline">
                <label>TURNO:</label>
                <select id="hrp-turno" class="form-select" aria-label="Default select example">
                    <option value="MATUTINO">MATUTINO</option>
                    <option value="VESPERTINO">VESPERTINO</option>
                </select>
            </div>    
        </div>
    </div>

    <div class="row">
        <label>FECHA:<b><div id="hrp-fecha" ></p></b></label>
    </div>
    <br>
    <div class="row">
        <label >NOMBRE DEL ALUMNO:</label>
        <div class="col-sm-9">
          <input type="text" id="hrp-nombre" class="form-control">
        </div>
    </div>
    <div class="row">
        <label >HORARIO DE ATENCION:</label>
        <div class="col-sm-9">
          <input type="text" id="hrp-horario" class="form-control">
        </div>
    </div>

    <div class="row">
        <label >MATERIA:</label>
        <div class="col-sm-9">
          <input type="text" id="hrp-materia" class="form-control">
        </div>
    </div>

    <div class="row">
        <label >DOCENTE:</label>
        <div class="col-sm-9">
          <input type="text" id="hrp-docente" class="form-control">
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <label class="form-label">GRADO:</label>
            <input type="text" class="form-control" id="hrp-grado">
        </div>

        <div class="col-md-3">
            <label class="form-label">GRUPO:</label>
            <input type="text" class="form-control" id="hrp-grupo">
        </div>

        <div class="col-md-3">
            <label class="form-label">EDAD:</label>
            <input type="number" class="form-control" id="hrp-edad">
        </div>
    </div>

    <div class="row">
        <label >PSIC. A CARGO:</label>
        <div class="col-sm-9">
          <input type="text" id="hrp-psicologo" class="form-control">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-9">
            <p class="text-center">SECRETARIO ACADEMICO: LIC. FELIPE DE JESUS NAVA ALVAREZ</p>
        </div>
    </div>


</div>

<script>
    date = new Date();
    year = date.getFullYear();
    month = date.getMonth() + 1;
    day = date.getDate();
    document.getElementById("hrp-fecha").innerHTML = day + "/" + month + "/" + year;
</script>
@endsection