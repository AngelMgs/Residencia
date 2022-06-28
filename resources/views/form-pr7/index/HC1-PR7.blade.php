@extends('layouts.app')

@section('content')

<div class="container">


  

    

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

    <p class="text-center"><b><u> PSICOPEDAGOGICA</u></b></p>
    <br>
    <div class="row">
      <div class="col-md-7">
        <label class="form-label">Nombre:</label>
        <input type="text" class="form-control" name="hrp_nombre" value="{{$info['hrp_nombre']}}" readonly>
      </div>

      <div class="col-md-3">
        <label class="form-label">SEXO:</label>
        <select name="hrp_sexo" class="form-select" aria-label="Default select example">
          <option value="{{$info['hrp_sexo']}}">{{$info['hrp_sexo']}}</option>
        </select>
      </div>
    </div>

  <div class="row">
      <div class="col-md-3">
          <label class="form-label">Edad:</label>
          <input type="number" class="form-control" name="hrp_edad" value="{{$info['hrp_edad']}}" readonly>
      </div>

      <div class="col-md-3">
          <label class="form-label">ESTADO CIVIL:</label>
          <input type="text" class="form-control" name="hrp_EC" value="{{$info['hrp_EC']}}" readonly>
      </div>

      <div class="col-md-3">
        <label class="form-label">OCUPACION:</label>
        <input type="text" class="form-control" name="hrp_ocupacion" value="{{$info['hrp_ocupacion']}}" readonly>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
        <label class="form-label">Periodo de Atencion:</label>
        <input type="text" class="form-control" name="hrp_atencion" value="{{$info['hrp_atencion']}}" readonly>
    </div>

    <div class="col-md-3">
        <label class="form-label">Escuela:</label>
        <input type="text" class="form-control" name="hrp_escuela" value="{{$info['hrp_escuela']}}" readonly>
    </div>

    <div class="col-md-3">
      <label class="form-label">TURNO:</label>
      <select name="hrp_turno" class="form-select" aria-label="Default select example" >
        <option value="{{$info['hrp_turno']}}">{{$info['hrp_turno']}}</option>
      </select>
    </div>
  </div>

  <div class="row">
    <div class="col-md-5">
        <label class="form-label">Grado Escolar:</label>
        <input type="text" class="form-control" name="hrp_grado-escolar" value="{{$info['hrp_grado-escolar']}}" readonly>
    </div>

    <div class="col-md-5">
        <label class="form-label">Examinador:</label>
        <input type="text" class="form-control" name="hrp_exa" value="{{$info['hrp_exa']}}" readonly>
    </div>
  </div>
<br>
  <div class="row">
    <div class="col-md-5">
      <b>MOTIVO DE LA EVALUACION:</b> 
  </div>
  </div>


  <div class="row">
    <div class="col-md-5">
      <label >El propósito al realizar la evaluación psicopedagógica fue para sustentar y argumentar la situación del alumno:</label>
      <input type="text" class="form-control" name="hrp_mve" value="{{$info['hrp_mve']}}" readonly>
  </div>
  </div>

  <div class="row">
    <div class="col-md-5">
      <label >del semestre:</label>
      <input type="text" class="form-control" name="hrp_smv" value="{{$info['hrp_smv']}}" readonly>
  </div>
  </div>

  <div class="row">
    <div class="col-md-5">
      <label >del grupo:</label>
      <input type="text" class="form-control" name="hrp_gmv" value="{{$info['hrp_gmv']}}" readonly>
  </div>
  </div>

  <div class="row">
    <div class="col-md-5">
      <label >que se evaluó durante:</label>
      <input type="text" class="form-control" name="hrp_emv" value="{{$info['hrp_emv']}}" readonly>
  </div>
  </div>

  <div class="row">
    <div class="col-md-5">
      <label >motivo por el cual el alumno mostro un rendimiento académico:</label>
      <input type="text" class="form-control" name="hrp_ramv" value="{{$info['hrp_ramv']}}" readonly>
  </div>
  </div>

  <div class="row">
    <div class="col-md-5">
      <label >y conductual dentro del proceso de aprendizaje, presenta:</label>
      <input type="text" class="form-control" name="hrp_cdamv" value="{{$info['hrp_cdamv']}}" readonly>
  </div>
  </div>

  <br>
  <div class="row">
    <div class="col-md-8">
      <b>HISTORIA ESCOLAR</b> 
      <p>De acuerdo a la entrevista que se le realizo a cada uno de los docentes que le imparten clases en el semestre en curso, recabamos la siguiente información, de acuerdo a su rendimiento académico.</p>
  </div>
  </div>
  
  <br>
  <div class="row">
    <div class="col-md-8">
  <table class="table">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col" class="text-center">ALTA</th>
        <th scope="col" class="text-center">MEDIA</th>
        <th scope="col" class="text-center">BAJA</th>
      </tr>
      <tr>
        <th colspan="4" class="text-center">Proceso  de aprendizaje</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Motivación hacia las tareas escolares</td>
        <td class="text-center">
          @if( isset($info['opc_rc']) )
              @if ($info['opc_rc']=='ALTA')
              <input class="form-check-input" type="radio" name="opc_rc" id="flexRadioDefault1" value="ALTA" checked disabled>
              @else
              <input class="form-check-input" type="radio" name="opc_rc" id="flexRadioDefault1" value="ALTA" disabled>
              @endif
          @else
          <input class="form-check-input" type="radio" name="opc_rc" id="flexRadioDefault1" value="ALTA" disabled> 
          @endif   
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
        <td class="text-center">
          @if( isset($info['opc_rc']) )
            @if ($info['opc_rc']=='MEDIA')
            <input class="form-check-input" type="radio" name="opc_rc" id="flexRadioDefault1" value="MEDIA" checked disabled>
            @else
            <input class="form-check-input" type="radio" name="opc_rc" id="flexRadioDefault1" value="MEDIA" disabled>
            @endif
          @else
          <input class="form-check-input" type="radio" name="opc_rc" id="flexRadioDefault1" value="MEDIA" disabled>
          @endif   
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
        <td class="text-center">
          @if( isset($info['opc_rc']) )
            @if ($info['opc_rc']=='BAJA')  
            <input class="form-check-input" type="radio" name="opc_rc" id="flexRadioDefault1" value="BAJA" checked disabled>
            @else
            <input class="form-check-input" type="radio" name="opc_rc" id="flexRadioDefault1" value="BAJA" disabled>
            @endif
          @else
          <input class="form-check-input" type="radio" name="opc_rc" id="flexRadioDefault1" value="BAJA" disabled>
          @endif 
            <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
      </tr>

      <tr>
        <td>Actitud hacia las tareas escolares</td>

        <td class="text-center">
          @if( isset($info['opc_rkc']) )
            @if ($info['opc_rkc']=='ALTA')
              <input class="form-check-input" type="radio" name="opc_rkc" id="flexRadioDefault1" value="ALTA" checked disabled>    
            @else
            <input class="form-check-input" type="radio" name="opc_rkc" id="flexRadioDefault1" value="ALTA" disabled>  
            @endif
          @else
            <input class="form-check-input" type="radio" name="opc_rkc" id="flexRadioDefault1" value="ALTA" disabled>  
            @endif
          <label class="form-check-label" for="flexRadioDefault2"></label>
        </td>

        <td class="text-center">
          @if( isset($info['opc_rkc']) )
            @if ($info['opc_rkc']=='MEDIA')
            <input class="form-check-input" type="radio" name="opc_rkc" id="flexRadioDefault1" value="MEDIA" checked disabled>
            @else
            <input class="form-check-input" type="radio" name="opc_rkc" id="flexRadioDefault1" value="MEDIA" disabled>
            @endif
          @else
            <input class="form-check-input" type="radio" name="opc_rkc" id="flexRadioDefault1" value="MEDIA" disabled>
            @endif
          <label class="form-check-label" for="flexRadioDefault2"></label>
        </td>

        <td class="text-center">
          @if( isset($info['opc_rkc']) )
            @if ($info['opc_rkc']=='BAJA')
            <input class="form-check-input" type="radio" name="opc_rkc" id="flexRadioDefault1" value="BAJA" checked disabled>    
            @else
            <input class="form-check-input" type="radio" name="opc_rkc" id="flexRadioDefault1" value="BAJA" disabled>
            @endif
          @else
            <input class="form-check-input" type="radio" name="opc_rkc" id="flexRadioDefault1" value="BAJA" disabled>
          @endif
          <label class="form-check-label" for="flexRadioDefault2"></label>
        </td>
      </tr>

      <tr>
        <td>Emotividad (ansiedad, preocupación,..):</td>
        <td class="text-center">
          @if( isset($info['opc_rmc']) )
            @if ($info['opc_rmc']=='ALTA')
            <input class="form-check-input" type="radio" name="opc_rmc" id="flexRadioDefault1" value="ALTA" checked disabled>
            @else
            <input class="form-check-input" type="radio" name="opc_rmc" id="flexRadioDefault1" value="ALTA" disabled>
            @endif
          @else
            <input class="form-check-input" type="radio" name="opc_rmc" id="flexRadioDefault1" value="ALTA" disabled>
          @endif
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
        <td class="text-center">
          @if( isset($info['opc_rmc']) )
            @if ($info['opc_rmc']=='MEDIA')
            <input class="form-check-input" type="radio" name="opc_rmc" id="flexRadioDefault1" value="MEDIA" checked disabled>
            @else
            <input class="form-check-input" type="radio" name="opc_rmc" id="flexRadioDefault1" value="MEDIA" disabled>
            @endif
          @else
            <input class="form-check-input" type="radio" name="opc_rmc" id="flexRadioDefault1" value="MEDIA" disabled>
          @endif
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
        <td class="text-center">
          @if( isset($info['opc_rmc']) )
            @if ($info['opc_rmc']=='BAJA')
            <input class="form-check-input" type="radio" name="opc_rmc" id="flexRadioDefault1" value="BAJA" checked disabled>
            @else
            <input class="form-check-input" type="radio" name="opc_rmc" id="flexRadioDefault1" value="BAJA" disabled>
            @endif
          @else
            <input class="form-check-input" type="radio" name="opc_rmc" id="flexRadioDefault1" value="BAJA" disabled>
          @endif
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
      </tr>

      <tr>
        <td>Autorregulación (planifica la acción, comprueba, evalúa,...)</td>
        <td class="text-center">
          @if( isset($info['opc_rac']) )
            @if ($info['opc_rac']=='ALTA')
            <input class="form-check-input" type="radio" name="opc_rac" id="flexRadioDefault1"  value="ALTA" checked disabled>
            @else
            <input class="form-check-input" type="radio" name="opc_rac" id="flexRadioDefault1"  value="ALTA" disabled>
            @endif
          @else
            <input class="form-check-input" type="radio" name="opc_rac" id="flexRadioDefault1"  value="ALTA" disabled>
          @endif
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
        <td class="text-center">
          @if( isset($info['opc_rac']) )
            @if ($info['opc_rac']=='MEDIA')
            <input class="form-check-input" type="radio" name="opc_rac" id="flexRadioDefault1" value="MEDIA" checked disabled>
            @else
            <input class="form-check-input" type="radio" name="opc_rac" id="flexRadioDefault1" value="MEDIA" disabled>
            @endif
          @else
            <input class="form-check-input" type="radio" name="opc_rac" id="flexRadioDefault1" value="MEDIA" disabled>
          @endif
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
        <td class="text-center">
          @if( isset($info['opc_rac']) )
            @if ($info['opc_rac']=='BAJA')
            <input class="form-check-input" type="radio" name="opc_rac" id="flexRadioDefault1" value="BAJA" checked disabled>
            @else
            <input class="form-check-input" type="radio" name="opc_rac" id="flexRadioDefault1" value="BAJA" disabled>
            @endif
          @else
            <input class="form-check-input" type="radio" name="opc_rac" id="flexRadioDefault1" value="BAJA" disabled>
          @endif
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
      </tr>

      <tr>
        <td>Atención (atención selectiva, sostenida, reflexividad,..)</td>
        <td class="text-center">
          @if( isset($info['opc_rpc']) )
            @if ($info['opc_rpc']=='ALTA')
            <input class="form-check-input" type="radio" name="opc_rpc" id="flexRadioDefault1" value="ALTA" checked disabled>
            @else
            <input class="form-check-input" type="radio" name="opc_rpc" id="flexRadioDefault1" value="ALTA" disabled>
            @endif
          @else
            <input class="form-check-input" type="radio" name="opc_rpc" id="flexRadioDefault1" value="ALTA" disabled>
          @endif
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
        <td class="text-center">
          @if( isset($info['opc_rpc']) )
            @if ($info['opc_rpc']=='MEDIA')
            <input class="form-check-input" type="radio" name="opc_rpc" id="flexRadioDefault1" value="MEDIA" checked disabled>
            @else
            <input class="form-check-input" type="radio" name="opc_rpc" id="flexRadioDefault1" value="MEDIA" disabled>
            @endif
          @else
            <input class="form-check-input" type="radio" name="opc_rpc" id="flexRadioDefault1" value="MEDIA" disabled>
          @endif
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
        <td class="text-center">
          @if( isset($info['opc_rpc']) )
            @if ($info['opc_rpc']=='BAJA')
            <input class="form-check-input" type="radio" name="opc_rpc" id="flexRadioDefault1" value="BAJA" checked disabled>
            @else
            <input class="form-check-input" type="radio" name="opc_rpc" id="flexRadioDefault1" value="BAJA" disabled>
            @endif
          @else
            <input class="form-check-input" type="radio" name="opc_rpc" id="flexRadioDefault1" value="BAJA" disabled>
          @endif
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
      </tr>

      <tr>
        <td>Comprensión de la información</td>
        <td class="text-center">
          @if( isset($info['opc_rlc']) )
            @if ($info['opc_rlc']=='ALTA')
            <input class="form-check-input" type="radio" name="opc_rlc" id="flexRadioDefault1"   value="ALTA" checked disabled>
            @else
            <input class="form-check-input" type="radio" name="opc_rlc" id="flexRadioDefault1"   value="ALTA" disabled>
            @endif
          @else
            <input class="form-check-input" type="radio" name="opc_rlc" id="flexRadioDefault1"   value="ALTA" disabled>
          @endif
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
        <td class="text-center">
          @if( isset($info['opc_rlc']) )
            @if ($info['opc_rlc']=='MEDIA')
            <input class="form-check-input" type="radio" name="opc_rlc" id="flexRadioDefault1" value="MEDIA" checked>
            @else
            <input class="form-check-input" type="radio" name="opc_rlc" id="flexRadioDefault1" value="MEDIA" disabled>
            @endif
          @else
            <input class="form-check-input" type="radio" name="opc_rlc" id="flexRadioDefault1" value="MEDIA" disabled>
          @endif
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
        <td class="text-center">
          @if( isset($info['opc_rlc']) )
            @if ($info['opc_rlc']=='BAJA')
            <input class="form-check-input" type="radio" name="opc_rlc" id="flexRadioDefault1" value="BAJA" checked disabled>
            @else
            <input class="form-check-input" type="radio" name="opc_rlc" id="flexRadioDefault1" value="BAJA" disabled>
            @endif
          @else
            <input class="form-check-input" type="radio" name="opc_rlc" id="flexRadioDefault1" value="BAJA" disabled>
          @endif
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
      </tr>

      <tr>
        <td>Elaboración de la información (comparación de contenidos, relación de conceptos,...)</td>
        <td class="text-center">
          @if( isset($info['opc_zrc']) )
            @if ($info['opc_rzc']=='ALTA')
            <input class="form-check-input" type="radio" name="opc_rzc" id="flexRadioDefault1" value="ALTA"  checked disabled>
            @else
            <input class="form-check-input" type="radio" name="opc_rzc" id="flexRadioDefault1" value="ALTA" disabled>
            @endif
          @else
            <input class="form-check-input" type="radio" name="opc_rzc" id="flexRadioDefault1" value="ALTA" disabled>
          @endif
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
        <td class="text-center">
          @if( isset($info['opc_rzc']) )
            @if ($info['opc_rzc']=='MEDIA')
            <input class="form-check-input" type="radio" name="opc_rzc" id="flexRadioDefault1" value="MEDIA" checked disabled>
            @else
            <input class="form-check-input" type="radio" name="opc_rzc" id="flexRadioDefault1" value="MEDIA" disabled>
            @endif
          @else
            <input class="form-check-input" type="radio" name="opc_rzc" id="flexRadioDefault1" value="MEDIA" disabled>
          @endif
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
        <td class="text-center">
          @if( isset($info['opc_rzc']) )
            @if ($info['opc_rzc']=='BAJA')
            <input class="form-check-input" type="radio" name="opc_rzc" id="flexRadioDefault1" value="BAJA" checked disabled>
            @else
            <input class="form-check-input" type="radio" name="opc_rzc" id="flexRadioDefault1" value="BAJA" disabled>
            @endif
          @else
            <input class="form-check-input" type="radio" name="opc_rzc" id="flexRadioDefault1" value="BAJA" disabled>
          @endif
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
      </tr>

      <tr>
        <td>Personalización de la información (análisis, pensamiento crítico,...)</td>
        <td class="text-center">
          @if( isset($info['opc_rvc']) )
            @if ($info['opc_rvc']=='ALTA')
            <input class="form-check-input" type="radio" name="opc_rvc" id="flexRadioDefault1" value="ALTA" checked disabled>
            @else
            <input class="form-check-input" type="radio" name="opc_rvc" id="flexRadioDefault1" value="ALTA" disabled>
            @endif
          @else
            <input class="form-check-input" type="radio" name="opc_rvc" id="flexRadioDefault1" value="ALTA" disabled>
          @endif
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
        <td class="text-center">
          @if( isset($info['opc_rvc']) )
            @if ($info['opc_rvc']=='MEDIA')
            <input class="form-check-input" type="radio" name="opc_rvc" id="flexRadioDefault1" value="MEDIA" checked>
            @else
            <input class="form-check-input" type="radio" name="opc_rvc" id="flexRadioDefault1" value="MEDIA" disabled>
            @endif
          @else
            <input class="form-check-input" type="radio" name="opc_rvc" id="flexRadioDefault1" value="MEDIA" disabled>
          @endif
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
        <td class="text-center">
          @if( isset($info['opc_rvc']) )
            @if ($info['opc_rvc']=='BAJA')
            <input class="form-check-input" type="radio" name="opc_rvc" id="flexRadioDefault1" value="BAJA" checked disabled>
            @else
            <input class="form-check-input" type="radio" name="opc_rvc" id="flexRadioDefault1" value="BAJA" disabled>
            @endif
          @else
            <input class="form-check-input" type="radio" name="opc_rvc" id="flexRadioDefault1" value="BAJA" disabled>
          @endif
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
      </tr>
          
    </tbody>
  </table>
    </div>
</div>

<br>
  <div class="row">
    <div class="col-md-8">
      <b>INTEGRACIÓN SOCIAL</b> 
    </div>
</div>

<div class="row">
  <div class="col-md-8">
    <table class="table">
      <thead>
        <tr>
          
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Tiene dificultades de relación:</td>
          <td class="text-center">
            @if( isset($info['opc_klo']) )
              @if ($info['opc_klo']=='SI')
              <input class="form-check-input" type="radio" name="opc_klo" id="flexRadioDefault1"   value="SI" checked disabled> 
              @else
              <input class="form-check-input" type="radio" name="opc_klo" id="flexRadioDefault1"   value="SI" disabled>
              @endif
            @else
              <input class="form-check-input" type="radio" name="opc_klo" id="flexRadioDefault1"   value="SI" disabled>
            @endif
              
            <label class="form-check-label" for="flexRadioDefault1">SI</label>
          </td>
          <td class="text-center">
            @if( isset($info['opc_klo']) )
              @if ($info['opc_klo']=='NO')
              <input class="form-check-input" type="radio" name="opc_klo" id="flexRadioDefault1" value="NO" checked disabled>
              @else
              <input class="form-check-input" type="radio" name="opc_klo" id="flexRadioDefault1" value="NO" disabled>
              @endif
            @else
              <input class="form-check-input" type="radio" name="opc_klo" id="flexRadioDefault1" value="NO" disabled>
            @endif  
            <label class="form-check-label" for="flexRadioDefault1">NO</label>
          </td>
        </tr>

        <tr>
          <td>Es: sociable / aceptado / líder</td>
          <td class="text-center">
            @if( isset($info['opc_odo']) )
              @if ($info['opc_odo']=='SI')
              <input class="form-check-input" type="radio" name="opc_odo" id="flexRadioDefault1"   value="SI" checked disabled>
              @else
              <input class="form-check-input" type="radio" name="opc_odo" id="flexRadioDefault1"   value="SI" disabled>
              @endif
            @else
              <input class="form-check-input" type="radio" name="opc_odo" id="flexRadioDefault1"   value="SI" disabled>
            @endif  
            <label class="form-check-label" for="flexRadioDefault1">SI</label>
          </td>
          <td class="text-center">
            @if( isset($info['opc_odo']) )
              @if ($info['opc_odo']=='NO')
              <input class="form-check-input" type="radio" name="opc_odo" id="flexRadioDefault1" value="NO" checked disabled>
              @else
              <input class="form-check-input" type="radio" name="opc_odo" id="flexRadioDefault1" value="NO" disabled>
              @endif
            @else
              <input class="form-check-input" type="radio" name="opc_odo" id="flexRadioDefault1" value="NO" disabled>
            @endif  
            <label class="form-check-label" for="flexRadioDefault1">NO</label>
          </td>
        </tr>

        <tr>
          <td>Es: rechazado / está aislado</td>
          <td class="text-center">
            @if( isset($info['opc_cza']) )
              @if ($info['opc_cza']=='SI')
              <input class="form-check-input" type="radio" name="opc_cza" id="flexRadioDefault1"   value="SI" checked disabled>
              @else
              <input class="form-check-input" type="radio" name="opc_cza" id="flexRadioDefault1"   value="SI" disabled>
              @endif
            @else
              <input class="form-check-input" type="radio" name="opc_cza" id="flexRadioDefault1"   value="SI" disabled>
            @endif  
            <label class="form-check-label" for="flexRadioDefault1">SI</label>
          </td>
          <td class="text-center">
            @if( isset($info['opc_cza']) )
              @if ($info['opc_cza']=='NO')
              <input class="form-check-input" type="radio" name="opc_cza" id="flexRadioDefault1" value="NO" checked disabled>
              @else
              <input class="form-check-input" type="radio" name="opc_cza" id="flexRadioDefault1" value="NO" disabled>
              @endif
            @else
              <input class="form-check-input" type="radio" name="opc_cza" id="flexRadioDefault1" value="NO" disabled>
            @endif
            <label class="form-check-label" for="flexRadioDefault1">NO</label>
          </td>
        </tr>

        <tr>
          <td>Asume responsabilidades cotidianas:</td>
          <td class="text-center">
            @if( isset($info['opc_klas']) )
              @if ($info['opc_klas']=='SI')
              <input class="form-check-input" type="radio" name="opc_klas" id="flexRadioDefault1"   value="SI" checked disabled>
              @else
              <input class="form-check-input" type="radio" name="opc_klas" id="flexRadioDefault1"   value="SI" disabled>
              @endif
            @else
              <input class="form-check-input" type="radio" name="opc_klas" id="flexRadioDefault1"   value="SI" disabled>
            @endif
            <label class="form-check-label" for="flexRadioDefault1">SI</label>
          </td>
          <td class="text-center">
            @if( isset($info['opc_klas']) )
              @if ($info['opc_klas']=='NO')
              <input class="form-check-input" type="radio" name="opc_klas" id="flexRadioDefault1" value="NO" checked disabled>
              @else
              <input class="form-check-input" type="radio" name="opc_klas" id="flexRadioDefault1" value="NO" disabled>
              @endif
              @else
              <input class="form-check-input" type="radio" name="opc_klas" id="flexRadioDefault1" value="NO" disabled>
              @endif
            <label class="form-check-label" for="flexRadioDefault1">NO</label>
          </td>
        </tr>

        <tr>
          <td>Es: indisciplinado / revoltoso en clase /agresivo / llama la atención para que se fijen en él:</td>
          <td class="text-center">
            @if( isset($info['opc_dkas']) )
              @if ($info['opc_dkas']=='SI')
              <input class="form-check-input" type="radio" name="opc_dkas" id="flexRadioDefault1"   value="SI" checked disabled>
              @else
              <input class="form-check-input" type="radio" name="opc_dkas" id="flexRadioDefault1"   value="SI" disabled>
              @endif
            @else
              <input class="form-check-input" type="radio" name="opc_dkas" id="flexRadioDefault1"   value="SI" disabled>
            @endif
            <label class="form-check-label" for="flexRadioDefault1">SI</label>
          </td>
          <td class="text-center">
            @if( isset($info['opc_dkas']) )
              @if ($info['opc_dkas']=='NO')
              <input class="form-check-input" type="radio" name="opc_dkas" id="flexRadioDefault1" value="NO" checked disabled>
              @else
              <input class="form-check-input" type="radio" name="opc_dkas" id="flexRadioDefault1" value="NO" disabled>
              @endif
            @else
              <input class="form-check-input" type="radio" name="opc_dkas" id="flexRadioDefault1" value="NO" disabled>
            @endif
            <label class="form-check-label" for="flexRadioDefault1">NO</label>
          </td>
        </tr>

      </tbody>
    </table>
  </div>
</div>

<br>
      <div class="row">
        <b>EVALUACION Y DIAGNOSTICO</b>
      </div>
      <br>
      <div class="col-sm">
          <div class="form-group">
              <textarea class="form-control" rows="8" name="hrp_evaluacion" placeholder="EVALUACION Y DIAGNOSTICO" readonly>{{$info['hrp_evaluacion']}}</textarea>
            </div>
      </div>

      <br>
      <div class="row">
        <b>Desarrollo histórico académico</b>
      </div>
      <br>
      <div class="col-sm">
          <div class="form-group">
              <textarea class="form-control" rows="8" name="hrp_dhaca" placeholder="1.EVALUACION ACADEMICA." readonly>{{$info['hrp_dhaca']}}</textarea>
            </div>
      </div>

      <div class="col-sm">
        <div class="form-group">
            <textarea class="form-control" rows="8" name="hrp_evcn" placeholder="2.EVALUACION CONDUCTUAL. " readonly> {{$info['hrp_evcn']}}</textarea>
          </div>
      </div>

      <div class="col-sm">
        <div class="form-group">
            <textarea class="form-control" rows="8" name="hrp_nurg" placeholder="3.EVALUACION NEUROCOGNITIVA. " readonly>{{$info['hrp_nurg']}}</textarea>
          </div>
      </div>

      <br>
      <div class="row">
        <b>HABILIDADES COGNITIVAS</b>
      </div>
      <br>
      <div class="col-sm">
          <div class="form-group">
              <textarea class="form-control" rows="8" name="hrp_hcgtv" placeholder="HABILIDADES COGNITIVAS." readonly>{{$info['hrp_hcgtv']}}</textarea>
            </div>
      </div>
      <br>
      <div class="row">
        <b>EVALUACION EMOCIONAL.</b>
      </div>
      <br>
      <div class="col-sm">
          <div class="form-group">
              <textarea class="form-control" rows="8" name="hrp_hemcnl" placeholder="EVALUACION EMOCIONAL." readonly>{{$info['hrp_hemcnl']}}</textarea>
            </div>
      </div>

      <div class="row">
        <div class="col-md-8">
          <table class="table">
            <thead>
              <tr>
                <th colspan="2" class="text-center"><b>Síntesis del modelo de Goleman (1998)</b></th>
              </tr>
              <tr>
                <th scope="col" class="text-center">Competencias personales</th>
                <th scope="col" class="text-center">Competencias sociales</th>  
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-left">
                  @if( isset($info['tb_cdumm']) )
                  <input class="form-check-input" type="checkbox" name="tb_cdumm" id="flexRadioDefault1" value="cdumm" checked disabled>
                  @else
                  <input class="form-check-input" type="checkbox" name="tb_cdumm" id="flexRadioDefault1" value="cdumm" disabled>
                  @endif
                  <label class="form-check-label" for="flexRadioDefault1">Conciencia de uno mismo:</label>
                </td>
   
                  <td class="text-left">
                    @if( isset($info['tb_empa']) )
                    <input class="form-check-input" type="checkbox" name="tb_empa" id="flexRadioDefault1" value="empa" checked disabled>
                    @else
                    <input class="form-check-input" type="checkbox" name="tb_empa" id="flexRadioDefault1" value="empa" disabled>
                    @endif
                    <label class="form-check-label" for="flexRadioDefault1">Empatia</label>
                  </td>  
              </tr>   
              
              <tr>
                <td class="text-left">
                  @if( isset($info['tb_cind']) )
                  <input class="form-check-input" type="checkbox" name="tb_cind" id="flexRadioDefault1" value="cind" checked disabled>
                  @else
                  <input class="form-check-input" type="checkbox" name="tb_cind" id="flexRadioDefault1" value="cind" disabled>
                  @endif
                  <label class="form-check-label" for="flexRadioDefault1">Conciencia emocional:</label>
                </td>
   
                  <td class="text-left">
                    @if( isset($info['tb_cmpdld']) )
                    <input class="form-check-input" type="checkbox" name="tb_cmpdld" id="flexRadioDefault1" value="cmpdld" checked disabled>
                    @else
                    <input class="form-check-input" type="checkbox" name="tb_cmpdld" id="flexRadioDefault1" value="cmpdld" disabled>
                  @endif
                    <label class="form-check-label" for="flexRadioDefault1">Comprensión de los demás</label>
                  </td>  
              </tr>

              <tr>
                <td class="text-left">
                  @if( isset($info['tb_vlduom']) )
                  <input class="form-check-input" type="checkbox" name="tb_vlduom" id="flexRadioDefault1" value="vlduom" checked disabled>
                  @else
                  <input class="form-check-input" type="checkbox" name="tb_vlduom" id="flexRadioDefault1" value="vlduom" disabled>
                  @endif
                  <label class="form-check-label" for="flexRadioDefault1">Valoración de uno mismo</label>
                </td>
   
                  <td class="text-left">
                    @if( isset($info['tb_orcasv']) )
                    <input class="form-check-input" type="checkbox" name="tb_orcasv" id="flexRadioDefault1" value="orcasv" checked disabled>
                    @else
                    <input class="form-check-input" type="checkbox" name="tb_orcasv" id="flexRadioDefault1" value="orcasv" disabled>
                  @endif
                    <label class="form-check-label" for="flexRadioDefault1">Orientación al servicio</label>
                  </td>  
              </tr>

              <tr>
                <td class="text-left">
                  @if( isset($info['tb_cnfeums']) )
                  <input class="form-check-input" type="checkbox" name="tb_cnfeums" id="flexRadioDefault1" value="cnfeums" checked disabled>
                  @else
                  <input class="form-check-input" type="checkbox" name="tb_cnfeums" id="flexRadioDefault1" value="cnfeums" disabled>
                  @endif
                  <label class="form-check-label" for="flexRadioDefault1">Confianza en uno mismo</label>
                </td>
   
                  <td class="text-left">
                    @if( isset($info['tb_dsrld']) )
                    <input class="form-check-input" type="checkbox" name="tb_dsrld" id="flexRadioDefault1" value="dsrld" checked disabled>
                    @else
                    <input class="form-check-input" type="checkbox" name="tb_dsrld" id="flexRadioDefault1" value="dsrld" disabled>
                  @endif
                    <label class="form-check-label" for="flexRadioDefault1">Desarrollo de los demás</label>
                  </td>  
              </tr>

              <tr>
                <td class="text-left">
                  @if( isset($info['tb_atrgc']) )
                  <input class="form-check-input" type="checkbox" name="tb_atrgc" id="flexRadioDefault1" value="atrgc" checked disabled>
                  @else
                  <input class="form-check-input" type="checkbox" name="tb_atrgc" id="flexRadioDefault1" value="atrgc" disabled>
                  @endif
                  <label class="form-check-label" for="flexRadioDefault1">Autorregulación:</label>
                </td>
   
                  <td class="text-left">
                    @if( isset($info['tb_aldv']) )
                    <input class="form-check-input" type="checkbox" name="tb_aldv" id="flexRadioDefault1" value="aldv" checked disabled>
                    @else
                    <input class="form-check-input" type="checkbox" name="tb_aldv" id="flexRadioDefault1" value="aldv" disabled>
                    @endif
                    <label class="form-check-label" for="flexRadioDefault1">Aprovechar la diversidad</label>
                  </td>  
              </tr>

              <tr>
                <td class="text-left">
                  @if( isset($info['tb_atcl']) )
                  <input class="form-check-input" type="checkbox" name="tb_atcl" id="flexRadioDefault1" value="atcl" checked disabled>
                  @else
                  <input class="form-check-input" type="checkbox" name="tb_atcl" id="flexRadioDefault1" value="atcl" disabled>
                  @endif
                  <label class="form-check-label" for="flexRadioDefault1">Autocontrol</label>
                </td>
   
                  <td class="text-left">
                    @if( isset($info['tb_consplc']) )
                    <input class="form-check-input" type="checkbox" name="tb_consplc" id="flexRadioDefault1" value="consplc" checked disabled>
                    @else
                    <input class="form-check-input" type="checkbox" name="tb_consplc" id="flexRadioDefault1" value="consplc" disabled>
                    @endif
                    <label class="form-check-label" for="flexRadioDefault1">Conciencia política</label>
                  </td>  
              </tr>

              <tr>
                <td class="text-left">
                  @if( isset($info['tb_cofbl']) )
                  <input class="form-check-input" type="checkbox" name="tb_cofbl" id="flexRadioDefault1" value="cofbl" checked disabled>
                  @else
                  <input class="form-check-input" type="checkbox" name="tb_cofbl" id="flexRadioDefault1" value="cofbl" disabled>
                  @endif
                  <label class="form-check-label" for="flexRadioDefault1">Confiabilidad</label>
                </td>
   
                  <td class="text-left">
                    @if( isset($info['tb_hblsc']) )
                    <input class="form-check-input" type="checkbox" name="tb_hblsc" id="flexRadioDefault1" value="hblsc" checked disabled>
                    @else
                    <input class="form-check-input" type="checkbox" name="tb_hblsc" id="flexRadioDefault1" value="hblsc" disabled>
                    @endif
                    <label class="form-check-label" for="flexRadioDefault1">Habilidades sociales:</label>
                  </td>  
              </tr>

              <tr>
                <td class="text-left">
                  @if( isset($info['tb_ingrd']) )
                  <input class="form-check-input" type="checkbox" name="tb_ingrd" id="flexRadioDefault1" value="ingrd" checked disabled>
                  @else
                  <input class="form-check-input" type="checkbox" name="tb_ingrd" id="flexRadioDefault1" value="ingrd" disabled>
                  @endif
                  <label class="form-check-label" for="flexRadioDefault1">Integridad </label>
                </td>
   
                  <td class="text-left">
                    @if( isset($info['tb_ldrz']) )
                    <input class="form-check-input" type="checkbox" name="tb_ldrz" id="flexRadioDefault1" value="ldrz" checked disabled>
                    @else
                    <input class="form-check-input" type="checkbox" name="tb_ldrz" id="flexRadioDefault1" value="ldrz" disabled>
                    @endif
                    <label class="form-check-label" for="flexRadioDefault1">Liderazgo</label>
                  </td>  
              </tr>

              <tr>
                <td class="text-left">
                  @if( isset($info['tb_aptbl']) )
                  <input class="form-check-input" type="checkbox" name="tb_aptbl" id="flexRadioDefault1" value="aptbl" checked disabled>
                  @else
                  <input class="form-check-input" type="checkbox" name="tb_aptbl" id="flexRadioDefault1" value="aptbl" disabled>
                  @endif
                  <label class="form-check-label" for="flexRadioDefault1">Adaptabilidad</label>
                </td>
   
                  <td class="text-left">
                    @if( isset($info['tb_cmicc']) )
                    <input class="form-check-input" type="checkbox" name="tb_cmicc" id="flexRadioDefault1" value="cmicc" checked disabled>
                    @else
                    <input class="form-check-input" type="checkbox" name="tb_cmicc" id="flexRadioDefault1" value="cmicc" disabled>
                    @endif
                    <label class="form-check-label" for="flexRadioDefault1">Comunicación</label>
                  </td>  
              </tr>

              <tr>
                <td class="text-left">
                  @if( isset($info['tb_inno']) )
                  <input class="form-check-input" type="checkbox" name="tb_inno" id="flexRadioDefault1" value="inno" checked disabled>
                  @else
                  <input class="form-check-input" type="checkbox" name="tb_inno" id="flexRadioDefault1" value="inno" disabled>
                  @endif
                  <label class="form-check-label" for="flexRadioDefault1">Innovación</label>
                </td>
   
                  <td class="text-left">
                    @if( isset($info['tb_iflc']) )
                    <input class="form-check-input" type="checkbox" name="tb_iflc" id="flexRadioDefault1" value="iflc" checked disabled>
                    @else
                    <input class="form-check-input" type="checkbox" name="tb_iflc" id="flexRadioDefault1" value="iflc" disabled>
                    @endif
                    <label class="form-check-label" for="flexRadioDefault1">Influencia</label>
                  </td>  
              </tr>

              <tr>
                <td class="text-left">
                  @if( isset($info['tb_mtdl']) )
                  <input class="form-check-input" type="checkbox" name="tb_mtdl" id="flexRadioDefault1" value="mtdl" checked disabled>
                  @else
                  <input class="form-check-input" type="checkbox" name="tb_mtdl" id="flexRadioDefault1" value="mtdl" disabled>
                  @endif
                  <label class="form-check-label" for="flexRadioDefault1">Motivación de logro</label>
                </td>
   
                  <td class="text-left">
                    @if( isset($info['tb_gdcf']) )
                    <input class="form-check-input" type="checkbox" name="tb_gdcf" id="flexRadioDefault1" value="gdcf" checked disabled>
                    @else
                    <input class="form-check-input" type="checkbox" name="tb_gdcf" id="flexRadioDefault1" value="gdcf" disabled>
                    @endif
                    <label class="form-check-label" for="flexRadioDefault1">Gestión de conflictos</label>
                  </td>  
              </tr>

              <tr>
                <td class="text-left">
                  @if( isset($info['tb_compr']) )
                  <input class="form-check-input" type="checkbox" name="tb_compr" id="flexRadioDefault1" value="compr" checked disabled>
                  @else
                  <input class="form-check-input" type="checkbox" name="tb_compr" id="flexRadioDefault1" value="compr" disabled>
                  @endif
                  <label class="form-check-label" for="flexRadioDefault1">Compromiso</label>
                </td>
   
                  <td class="text-left">
                    @if( isset($info['tb_crvx']) )
                    <input class="form-check-input" type="checkbox" name="tb_crvx" id="flexRadioDefault1" value="crvx" checked disabled> 
                    @else
                    <input class="form-check-input" type="checkbox" name="tb_crvx" id="flexRadioDefault1" value="crvx" disabled>
                    @endif
                    <label class="form-check-label" for="flexRadioDefault1">Crear vínculos</label>
                  </td>  
              </tr>

              <tr>
                <td class="text-left">
                  @if( isset($info['tb_init']) )
                  <input class="form-check-input" type="checkbox" name="tb_init" id="flexRadioDefault1" value="init" checked disabled>
                  @else
                  <input class="form-check-input" type="checkbox" name="tb_init" id="flexRadioDefault1" value="init" disabled>
                  @endif
                  <label class="form-check-label" for="flexRadioDefault1">Iniciativa</label>
                </td>
   
                  <td class="text-left">
                    @if( isset($info['tb_csase']) )
                    <input class="form-check-input" type="checkbox" name="tb_csase" id="flexRadioDefault1" value="csase" checked disabled>
                    @else
                    <input class="form-check-input" type="checkbox" name="tb_csase" id="flexRadioDefault1" value="csase" disabled>
                    @endif
                    <label class="form-check-label" for="flexRadioDefault1">Comprensión de los demás</label>
                  </td>  
              </tr>

              <tr>
                <td class="text-left">
                  @if( isset($info['tb_pcvs']) )
                  <input class="form-check-input" type="checkbox" name="tb_pcvs" id="flexRadioDefault1" value="pcvs" checked disabled>
                  @else
                  <input class="form-check-input" type="checkbox" name="tb_pcvs" id="flexRadioDefault1" value="pcvs" disabled>
                  @endif
                  <label class="form-check-label" for="flexRadioDefault1">Optimismo</label>
                </td>
   
                  <td class="text-left">
                    @if( isset($info['tb_ccopa']) )
                    <input class="form-check-input" type="checkbox" name="tb_ccopa" id="flexRadioDefault1" value="ccopa" checked disabled>
                    @else
                    <input class="form-check-input" type="checkbox" name="tb_ccopa" id="flexRadioDefault1" value="ccopa" disabled>
                    @endif
                    <label class="form-check-label" for="flexRadioDefault1">Colaboración y Cooperació</label>
                  </td>  
              </tr>
              
              
            </tbody>
          </table>
        </div>
      </div>

      <br>
  <div class="row">
    <div class="col-md-8">
      <b>INFORME DE RESULTADOS DETALLADOS</b> 
    </div>
  </div>
<br>
    <div class="row">
      <div class="col-md-5">
          <label >A continuación, se presenta los resultados encontrados durante la evaluación que presenta el alumno:</label>
          <input type="text" class="form-control" name="hrp_ijda" value="{{$info['hrp_ijda']}}" readonly>
          <label>en el proceso de evaluación emitido por el departamento psicopedagógico. </label>
      </div>
    </div>

  
      

  <div class="row">
    <b>Propuesta de intervención:</b> 
  </div>
  <div class="col-sm">
    <div class="form-group">
        <textarea class="form-control" rows="8" name="hrp_pripdai" placeholder="Propuesta de intervención:" readonly>{{$info['hrp_pripdai']}}</textarea>
      </div>
  </div>




</div>


@endsection