@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ route('forms.store') }}" method="post"> 
    @csrf
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
            <p class="text-center"><b><u>ACTA ESCOLAR </u></b></p>
        </div>
    </div>
    <div class="row">
    </div>  
    <br> 
        
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
            {{$info['hrp_es']}}
            <div class="row">
                <input type="text" name="hrp_alumnos"  class="form-control" value="{{$info['hrp_alumnos']}}"  readonly>
            </div>
          </div>
    
        </div>
        <div class="row">
            <div class="col-sm">
              <br><b>Manifestando que:</b>
              <div class="row">
                  <input type="text" name="hrp_manifiesto"  class="form-control" value="{{$info['hrp_manifiesto']}}"  readonly>
              </div>
            </div>
          </div>

          <div class="row">
          
            <div class="col-sm">
                Por lo tanto. Ya que dicha conducta del (os) alumno (s) constituye una infracción al reglamento escolar vigente para la institución educativa, con apoyo en dicho ordenamiento y conforme al contenido de los artículos 6° Fracción III en relación al 3° Fracción I de la constitución Política del Estado de Chiapas se procede a hacer llamado de atención por escrito exhortándolos a:
              <div class="row">
                  <input type="text" name="hrp_conducta"  class="form-control" value="{{$info['hrp_conducta']}}"  readonly>
              </div>
            </div>
      
          </div>

          <div class="row">
          
            <div class="col-sm">
                Y respetar el reglamento escolar vigente, haciéndolas del conocimiento que aplicara la sanción descrita a continuación: 
                <div class="row">
                  <input type="text" name="hrp_nombre"  class="form-control" value="{{$info['hrp_reglamento']}}"  readonly>
              </div>
            </div>
      
          </div>

          <div class="row">
          
            <div class="col-sm">
                Cerrando la presente acta, firmando para constancia los que en ella intervinieron.
                <div class="row">
                  <input type="text" name="hrp_nombre"  class="form-control" value="{{$info['hrp_firma']}}"  readonly>
              </div>
            </div>
      
          </div>
<br>
          <div class="row">
          
            <div class="col-sm">
                <p class="text-center">
                <b><u>PSIC. RICARDO A. AGUILAR TOLEDO</u></b> 
                <br>
                 PSICOLOGO A CARGO</p>
              
            </div>

            <div class="col-sm">
                
                <div class="row ">
                  
              </div>
            </div>

            <div class="col-sm">
                <p class="text-center">
                    <b><u>CP. MARTIN DE JESUS PIMENTEL GARCIA </u></b> 
                    <br>
                    DIRECTOR ACADEMICO</p>
            </div>
      
          </div>

<br>
<br>
<br>
          <div class="row">
          
            <div class="col-sm">
                
            </div>

            <div class="col-sm">
                
                <p class="text-center">
                    Carretera Panamericana Km 1082 <br>
                    Tuxtla Gutiérrez, Chiapas <br>
                    C.P. 29050    Tel: 961 67 1 60 14 <br>
                    Correo electrónico: d.psicopedagogicoprepa7@gmail.com <br>

                </p>

            </div>

            <div class="col-sm">
                
            </div>
      
          </div>

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