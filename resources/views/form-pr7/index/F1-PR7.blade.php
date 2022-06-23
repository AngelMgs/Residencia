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

    <div class="row border">
        <div class="col-sm">
            INSTITUTO MEXICANO 
            DEL SEGURO SOCIAL
        </div>
        <div class="col-sm">
            <textarea class="form-control" rows="2" name="hrp_situacion_motivos" readonly>{{$info['hrp_d1']}}</textarea>
        </div>
        <div class="col-sm">
            <textarea class="form-control" rows="2" name="hrp_situacion_motivos" readonly>{{$info['hrp_t1']}}</textarea>
        </div>
    </div>
    
    <div class="row border">
        <div class="col-sm">
            INJUVEMP INSTITUTO 
            MUNICIPAL DE LA JUVENTUD 
            Y DEL EMPRENDIMIENTO
        </div>
        <div class="col-sm">
            <textarea class="form-control" rows="2" name="hrp_situacion_motivos" readonly>{{$info['hrp_d2']}}</textarea>
        </div>
        <div class="col-sm">
            <textarea class="form-control" rows="2" name="hrp_situacion_motivos" readonly>{{$info['hrp_t2']}}</textarea>
        </div>
    </div>

    <div class="row border">
        <div class="col-sm">
            CENTRO DE INTEGRACION 
            JUVENIL 
        </div>
        <div class="col-sm">
            <textarea class="form-control" rows="2" name="hrp_situacion_motivos" readonly>{{$info['hrp_d3']}}</textarea>
        </div>
        <div class="col-sm">
            <textarea class="form-control" rows="2" name="hrp_situacion_motivos" readonly>{{$info['hrp_t3']}}</textarea>
        </div>
    </div>

    <div class="row border">
        <div class="col-sm">
            CENTRO PARA LA 
            PREVENCIÓN Y 
            TRATAMIENTO EN 
            ADICCIONES (CENTRA)
        </div>
        <div class="col-sm">
            Carretera  internacional Berriozábal 
        </div>
        <div class="col-sm">
            961-2078007
        </div>
    </div>

    <div class="row border">
        <div class="col-sm">
            CENTROS UNEME-CAPA
        </div>
        <div class="col-sm">
            <textarea class="form-control" rows="2" name="hrp_situacion_motivos" readonly>{{$info['hrp_d4']}}</textarea>
        </div>
        <div class="col-sm">
            <textarea class="form-control" rows="2" name="hrp_situacion_motivos" readonly>{{$info['hrp_t4']}}</textarea>
        </div>
    </div>

    <div class="row border">
        <div class="col-sm">
            CENTROS UNEME CISAMEN
        </div>
        <div class="col-sm">
            <textarea class="form-control" rows="2" name="hrp_situacion_motivos" readonly>{{$info['hrp_d5']}}</textarea>
        </div>
        <div class="col-sm">
            <textarea class="form-control" rows="2" name="hrp_situacion_motivos" readonly>{{$info['hrp_t5']}}</textarea>
        </div>
    </div>

    <div class="row border">
        <div class="col-sm">
            CENTRO ESTATAL DE LA 
            PREVENCIÓN SOCIAL DE LA 
            VIOLENCIA Y 
            PARTICIPACIÓN CIUDADANA DEL ESTADO 
            DE CHIAPAS
        </div>
        <div class="col-sm">
            <textarea class="form-control" rows="2" name="hrp_situacion_motivos" readonly>{{$info['hrp_d6']}}</textarea>
        </div>
        <div class="col-sm">
            <textarea class="form-control" rows="2" name="hrp_situacion_motivos" readonly>{{$info['hrp_t6']}}</textarea>
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