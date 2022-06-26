@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">

        <input  name="name" type="hidden" value="SOLICITUDDEREQUERIMIENTO" >
        <input  name="hrp_es" type="hidden" id="hrp_es">
        

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
      <p class="text-right">
          {{$info['hrp_es2']}}
        
      </p>
        <div class="col-sm">
            <p class="text-right"><b><u>ASUNTO: SOLICITUD DE REQUERIMIENTO</u></b></p>
        </div>
    </div>
    <div class="row">
    </div>  
    <br> 
        
    <div class="container">

      <div class="row">
        <div class="col-sm">
          <br><b>CP. MARTIN DE JESUS PIMENTEL GARCIA <br>
            DIRECTOR DE LA PREPARATORIA N°7 DEL ESTADO
            </b>
        </div>
      </div>

      <div class="row">
        <div class="col-sm">
          <br>POR MEDIO DE LA PRESENTA RECIBA UN COORDIAL SALUD Y DE LA MANERA MAS ATENTA SOLICITO A USTED, LO SIGUIENTE.
          <div class="row">
            <textarea class="form-control" rows="5" name="hrp_solicitud" readonly>{{$info['hrp_solicitud']}}</textarea>
          </div>
        </div>
      </div>

        <div class="row">  
          <div class="col-sm" id="hrp_hora">
            {{$info['hrp_es']}}
          </div>
          <div class="row">
            <textarea class="form-control" rows="5" name="hrp_realizacion" readonly>{{$info['hrp_realizacion']}}</textarea>
          </div>
        </div>
        <br>
          <div class="row">      
            <div class="col-sm">
              NO DUDANDO DE SU APOYO LE AGRADECEMOS.
            </div>
          </div>
<br>

          <div class="row">
          
            <div class="col-sm">
                
            </div>

            <div class="col-sm">
                <p class="text-center">
                    <b>_____________________________________________</b>
                    <b>COORDINADOR DEL DEPARTAMENTO PSICOPEDAGÓGICO<br>
                    LIC. RICARDO A. AGUILAR TOLEDO <br></b>
                </p>
            </div>

            <div class="col-sm">
                
            </div>
      
          </div>

      </div>


      




</div>

@endsection