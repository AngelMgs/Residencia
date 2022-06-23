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
            <p class="text-center"><b><u>HOJA DEL DIARIO / DEPARTAMENTO PSICOPEDAGOGICO</u></b></p>
        </div>
        <div class="col-sm">
        </div>
        <div class="col-sm">
            <div class="form-group form-inline">
                <label>TURNO:</label>
                <select name="hrp_turno" class="form-select" aria-label="Default select example">
                  <option value="{{$info['hrp_turno']}}"><p><u>{{$info['hrp_turno']}}</u></p></option>
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
                    <label>FECHA:<b><div name="hrp_fecha"></p></b></label>
                </div>
                <br>
                <div class="row">
                    <label >NOMBRE DEL ALUMNO(A):</label>
                    <div class="col-sm-12">
                      <input type="text" name="hrp_nombre" class="form-control" value="{{$info['hrp_nombre']}}" readonly>
                    </div>
                </div>
                <div class="row">
                    <label >SM Y GRUPO:</label>
                    <div class="col-sm-12">
                      <input type="text" name="hrp_smgrupo" class="form-control" value="{{$info['hrp_smgrupo']}}" readonly>
                    </div>
                </div>
            
                <div class="row">
                    <label >HORA:</label>
                    <div class="col-sm-12">
                      <input type="text" name="hrp_hora" class="form-control" value="{{$info['hrp_hora']}}" readonly>
                    </div>
                </div>
            
                <div class="row">
                    <label >TUTOR:</label>
                    <div class="col-sm-12">
                      <input type="text" name="hrp_tutor" class="form-control" value="{{$info['hrp_tutor']}}" readonly>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-md-12">
                        <label class="form-label">TELFONO:</label>
                        <input type="number" class="form-control" name="hrp_telefono" value="{{$info['hrp_telefono']}}" readonly>
                    </div>
                </div>
            
            </td>
            <td class ="col-md-12">
                <div class="col-sm">
                    <div class="form-group">
                        <textarea class="form-control" rows="15" name="hrp_situacion_motivos" placeholder="SITUACION O MOTIVO" readonly>{{$info['hrp_situacion_motivos']}}</textarea>
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
    document.getElementById("hrp_fecha").innerHTML = day + "/" + month + "/" + year;
</script>
@endsection