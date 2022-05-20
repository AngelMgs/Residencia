@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{ route('forms.update',$id) }}" method="post">   
    @csrf
    @method('put')
    
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
    
    <input  name="record_id" type="hidden" value="{{$record_id}}">

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
                      <input type="text" name="hrp_nombre" class="form-control" value="{{$info['hrp_nombre']}}" >
                    </div>
                </div>
                <div class="row">
                    <label >SM Y GRUPO:</label>
                    <div class="col-sm-12">
                      <input type="text" name="hrp_smgrupo" class="form-control" value="{{$info['hrp_smgrupo']}}" >
                    </div>
                </div>
            
                <div class="row">
                    <label >HORA:</label>
                    <div class="col-sm-12">
                      <input type="text" name="hrp_hora" class="form-control" value="{{$info['hrp_hora']}}" >
                    </div>
                </div>
            
                <div class="row">
                    <label >TUTOR:</label>
                    <div class="col-sm-12">
                      <input type="text" name="hrp_tutor" class="form-control" value="{{$info['hrp_tutor']}}" >
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-md-12">
                        <label class="form-label">TELFONO:</label>
                        <input type="number" class="form-control" name="hrp_telefono" value="{{$info['hrp_telefono']}}" >
                    </div>
                </div>
            
            </td>
            <td class ="col-md-12">
                <div class="col-sm">
                    <div class="form-group">
                        <textarea class="form-control" rows="15" name="hrp_situacion_motivos" placeholder="SITUACION O MOTIVO" >{{$info['hrp_situacion_motivos']}}</textarea>
                      </div>
                </div>
            </td>
          </tr>
        </tbody>
      </table>

      <div class="card-footer ml-auto mr-auto">
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
</form>
</div>    
<script>
    date = new Date();
    year = date.getFullYear();
    month = date.getMonth() + 1;
    day = date.getDate();
    document.getElementById("hrp_fecha").innerHTML = day + "/" + month + "/" + year;
</script>
@endsection