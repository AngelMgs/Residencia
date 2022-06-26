@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ route('forms3.store') }}" method="post"> 
    @csrf
    <div class="row">

        <input  name="name" type="hidden" value="SOLICITUDDEREQUERIMIENTO" >
        <input  name="hrp_es" type="hidden" id="hrp_es">
        <input  name="hrp_es2" type="hidden" id="hrp_es2">
        

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
        <p>
          <div class="col-sm text-right" id="hrp_fecha" name="hrp_fecha">
          </div>
        </p>
        <br>
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
            <textarea class="form-control" rows="5" name="hrp_solicitud"></textarea>
          </div>
        </div>
      </div>

        <div class="row">  
          <div class="col-sm" id="hrp_hora">
          </div>
          <div class="row">
            <textarea class="form-control" rows="5" name="hrp_realizacion"></textarea>
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
                    <b>COORDINADOR DEL DEPARTAMENTO PSICOPEDAGÓGICO <br>
                    LIC. RICARDO A. AGUILAR TOLEDO <br></b>
                </p>
            </div>

            <div class="col-sm">
                
            </div>
      
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
    hrs = date.getHours();
    mn = date.getMinutes();

    document.getElementById("hrp_hora").innerHTML ="PARA LA SIGUIENTES FECHAS "+ day +" de "+ month +" DEL PRESENTE AÑO, EN HORARIO "+hrs+", DENTRO DE LAS INSTALACIONES DE LA PREPARATORIA N°7 DEL ESTADO EN LA REALIZACIÓN DE";
    document.getElementById("hrp_es").value = "PARA LA SIGUIENTES FECHAS "+ day +" de "+ month +" DEL PRESENTE AÑO, EN HORARIO "+hrs+", DENTRO DE LAS INSTALACIONES DE LA PREPARATORIA N°7 DEL ESTADO EN LA REALIZACIÓN DE";
    document.getElementById("hrp_fecha").innerHTML ="Tuxtla Gutiérrez, Chiapas, a "+ day +" de "+ month +" del "+year;
    document.getElementById("hrp_es2").value ="Tuxtla Gutiérrez, Chiapas, a "+ day +" de "+ month +" del "+year;
</script>
@endsection