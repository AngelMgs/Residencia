@extends('layouts.app')

@section('content')
<div class="container">

  <form action="{{ route('forms3.update',$id ) }}" method="post"> 
    @csrf
    @method('put')

    <div class="row">

        <input  name="name" type="hidden" value="CANALIZACION" >
        <input  name="hrp_es" type="hidden" id="hrp_es" value="{{$info['hrp_es']}}">
        

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
          {{$info['hrp_es']}}
        </div>
      </p>
      
        <div class="col-sm">
            <p class="text-right"><b><u>ASUNTO: CANALIZACION</u></b></p>
        </div>
    </div>
    <div class="row">
    </div>  
    <br> 
        
    <div class="container">

      <div class="row">
        <div class="col-sm">
          <br><b>CENTRO ESPECIALIZADO PARA LA PREVENCIÓN<br>
            Y TRATAMIENTO EN ADICCIONES (CENTRA). 
            </b>         

        </div>
      </div>

      <div class="row">
        <div class="col-sm">
          Por este medio nos dirigimos a ustedes para solicitar y agradecer su invaluable apoyo a la comunidad estudiantil de nuestro Estado de Chiapas, así mismo, canalizamos a nuestro alumno el
          <div class="row">
            <input type="text" name="hrp_info-g" class="form-control" value="{{$info['hrp_info-g']}}">
          </div>
          de la Escuela Preparatoria No. 7 del Estado, con la finalidad de diagnosticar y apoyar al citado educando, a dar seguimiento en su situación particular de encontrarse en el consumo de sustancias nocivas para la salud,
        </div>
      </div>

        <br>
          <div class="row">      
            <div class="col-sm">
              Sin otro asunto en particular, hago propicia la ocasión para enviarles un cordial saludo.
            </div>
          </div>
<br>


<div class="row">
          
  <div class="col-sm">
    
  </div>

  <div class="col-sm">
    <p class="text-center">
      <b><u>A T E N T A M E N T E</u></b><br>
      
  </p>
  </div>

  <div class="col-sm">
    
  </div>
  <br>
  <br>
  <br>
</div>

          <div class="row">
          
            <div class="col-sm">
              <p class="text-center">
                <b><u>C.P. MARTIN DE JESUS PIMENTEL GARCIA</u></b><br>
                D I R E C T O R
            </p>
            </div>

            <div class="col-sm">
                
            </div>

            <div class="col-sm">
              <p class="text-center">
                <input type="text" name="hrp_nombre" class="form-control" placeholder="Nombre del Alumno" value="{{$info['hrp_nombre']}}"><br>
              </p>
            </div>
      
          </div>

      </div>

   

      <div class="card-footer ml-auto mr-auto">
        <button class="text-grey-lighter font-bold py-3 px-6 rounded text-xs bg-blue-300 hover:bg-blue-dark">Guardar</button>
    </div> 

      

</form>


</div>


@endsection