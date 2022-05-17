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
<br>
    <table class="table table-bordered">
        <thead>
          <tr>
            <th class="text-center" scope="col">DATOS DEL ALUMNO</th>
            <th class="text-center" scope="col">SITUACION O MOTIVO</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class ="col-md-6">
                <div class="row">
                    <label>FECHA:<b><div id="hrp-fecha" ></p></b></label>
                </div>
                <br>
                <div class="row">
                    <label >NOMBRE DEL ALUMNO(A):</label>
                    <div class="col-sm-12">
                      <input type="text" id="hrp-nombre" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <label >SM Y GRUPO:</label>
                    <div class="col-sm-12">
                      <input type="text" id="hrp-smgrupo" class="form-control">
                    </div>
                </div>
            
                <div class="row">
                    <label >HORA:</label>
                    <div class="col-sm-12">
                      <input type="text" id="hrp-hora" class="form-control">
                    </div>
                </div>
            
                <div class="row">
                    <label >TUTOR:</label>
                    <div class="col-sm-12">
                      <input type="text" id="hrp-tutor" class="form-control">
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-md-12">
                        <label class="form-label">TELFONO:</label>
                        <input type="number" class="form-control" id="hrp-telefono">
                    </div>
                </div>
            
            </td>
            <td class ="col-md-12">
                <div class="col-sm">
                    <div class="form-group">
                        <textarea class="form-control" rows="15" id="hrp-situacion-motivos" placeholder="SITUACION O MOTIVO"></textarea>
                      </div>
                </div>
            </td>
          </tr>
        </tbody>
      </table>


</div>    
<script>
    date = new Date();
    year = date.getFullYear();
    month = date.getMonth() + 1;
    day = date.getDate();
    document.getElementById("hrp-fecha").innerHTML = day + "/" + month + "/" + year;
</script>
@endsection