@extends('layouts.app')

@section('content')

<div class="container">


<form action="{{ route('forms.store') }}" method="post"> 
    @csrf
    <div class="row">

        <input  name="name" type="hidden" value="EVALUCACIONPSICOLOGICA">
        <input  name="record_id" type="hidden" value="{{$record_id}}">

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
        <input type="text" class="form-control" name="hrp_nombre">
      </div>

      <div class="col-md-3">
        <label class="form-label">SEXO:</label>
        <select name="hrp_sexo" class="form-select" aria-label="Default select example">
          <option value="MASCULINO">MASCULINO</option>
          <option value="FEMENINO">FEMENINO</option>
        </select>
      </div>
    </div>

  <div class="row">
      <div class="col-md-3">
          <label class="form-label">Edad:</label>
          <input type="number" class="form-control" name="hrp_edad">
      </div>

      <div class="col-md-3">
          <label class="form-label">ESTADO CIVIL:</label>
          <input type="text" class="form-control" name="hrp_EC">
      </div>

      <div class="col-md-3">
        <label class="form-label">OCUPACION:</label>
        <input type="text" class="form-control" name="hrp_ocupacion">
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
        <label class="form-label">Periodo de Atencion:</label>
        <input type="text" class="form-control" name="hrp_atencion">
    </div>

    <div class="col-md-3">
        <label class="form-label">Escuela:</label>
        <input type="text" class="form-control" name="hrp_escuela">
    </div>

    <div class="col-md-3">
      <label class="form-label">TURNO:</label>
      <select name="hrp_turno" class="form-select" aria-label="Default select example">
        <option value="VESPERTINO">VESPERTINO</option>
        <option value="MATUTINO">MATUTINO</option>
      </select>
    </div>
  </div>

  <div class="row">
    <div class="col-md-5">
        <label class="form-label">Grado Escolar:</label>
        <input type="text" class="form-control" name="hrp_grado-escolar">
    </div>

    <div class="col-md-5">
        <label class="form-label">Examinador:</label>
        <input type="text" class="form-control" name="hrp_exa">
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
      <input type="text" class="form-control" name="hrp_mve">
  </div>
  </div>

  <div class="row">
    <div class="col-md-5">
      <label >del semestre:</label>
      <input type="text" class="form-control" name="hrp_smv">
  </div>
  </div>

  <div class="row">
    <div class="col-md-5">
      <label >del grupo:</label>
      <input type="text" class="form-control" name="hrp_gmv">
  </div>
  </div>

  <div class="row">
    <div class="col-md-5">
      <label >que se evaluó durante:</label>
      <input type="text" class="form-control" name="hrp_emv">
  </div>
  </div>

  <div class="row">
    <div class="col-md-5">
      <label >motivo por el cual el alumno mostro un rendimiento académico:</label>
      <input type="text" class="form-control" name="hrp_ramv">
  </div>
  </div>

  <div class="row">
    <div class="col-md-5">
      <label >y conductual dentro del proceso de aprendizaje, presenta:</label>
      <input type="text" class="form-control" name="hrp_cdamv">
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
        <td class="text-center"><input class="form-check-input" type="radio" name="opc_rc" id="flexRadioDefault1" value="ALTA">
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
        <td class="text-center"><input class="form-check-input" type="radio" name="opc_rc" id="flexRadioDefault1" value="MEDIA">
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
        <td class="text-center"><input class="form-check-input" type="radio" name="opc_rc" id="flexRadioDefault1" value="BAJA">
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
      </tr>

      <tr>
        <td>Actitud hacia las tareas escolares</td>
        <td class="text-center"><input class="form-check-input" type="radio" name="opc_rkc" id="flexRadioDefault1" value="ALTA" >
          <label class="form-check-label" for="flexRadioDefault2"></label>
        </td>
        <td class="text-center"><input class="form-check-input" type="radio" name="opc_rkc" id="flexRadioDefault1" value="MEDIA">
          <label class="form-check-label" for="flexRadioDefault2"></label>
        </td>
        <td class="text-center"><input class="form-check-input" type="radio" name="opc_rkc" id="flexRadioDefault1" value="BAJA">
          <label class="form-check-label" for="flexRadioDefault2"></label>
        </td>
      </tr>

      <tr>
        <td>Emotividad (ansiedad, preocupación,..):</td>
        <td class="text-center"><input class="form-check-input" type="radio" name="opc_rmc" id="flexRadioDefault1" value="ALTA" >
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
        <td class="text-center"><input class="form-check-input" type="radio" name="opc_rmc" id="flexRadioDefault1" value="MEDIA">
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
        <td class="text-center"><input class="form-check-input" type="radio" name="opc_rmc" id="flexRadioDefault1" value="BAJA">
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
      </tr>

      <tr>
        <td>Autorregulación (planifica la acción, comprueba, evalúa,...)</td>
        <td class="text-center"><input class="form-check-input" type="radio" name="opc_rac" id="flexRadioDefault1"  value="ALTA">
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
        <td class="text-center"><input class="form-check-input" type="radio" name="opc_rac" id="flexRadioDefault1" value="MEDIA">
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
        <td class="text-center"><input class="form-check-input" type="radio" name="opc_rac" id="flexRadioDefault1" value="BAJA">
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
      </tr>

      <tr>
        <td>Atención (atención selectiva, sostenida, reflexividad,..)</td>
        <td class="text-center"><input class="form-check-input" type="radio" name="opc_rpc" id="flexRadioDefault1" value="ALTA" >
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
        <td class="text-center"><input class="form-check-input" type="radio" name="opc_rpc" id="flexRadioDefault1" value="MEDIA">
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
        <td class="text-center"><input class="form-check-input" type="radio" name="opc_rpc" id="flexRadioDefault1" value="BAJA">
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
      </tr>

      <tr>
        <td>Comprensión de la información</td>
        <td class="text-center"><input class="form-check-input" type="radio" name="opc_rlc" id="flexRadioDefault1"   value="ALTA">
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
        <td class="text-center"><input class="form-check-input" type="radio" name="opc_rlc" id="flexRadioDefault1" value="MEDIA">
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
        <td class="text-center"><input class="form-check-input" type="radio" name="opc_rlc" id="flexRadioDefault1" value="BAJA">
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
      </tr>

      <tr>
        <td>Elaboración de la información (comparación de contenidos, relación de conceptos,...)</td>
        <td class="text-center"><input class="form-check-input" type="radio" name="opc_rzc" id="flexRadioDefault1" value="ALTA" >
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
        <td class="text-center"><input class="form-check-input" type="radio" name="opc_rzc" id="flexRadioDefault1" value="MEDIA">
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
        <td class="text-center"><input class="form-check-input" type="radio" name="opc_rzc" id="flexRadioDefault1" value="BAJA">
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
      </tr>

      <tr>
        <td>Personalización de la información (análisis, pensamiento crítico,...)</td>
        <td class="text-center"><input class="form-check-input" type="radio" name="opc_rvc" id="flexRadioDefault1" value="ALTA" >
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
        <td class="text-center"><input class="form-check-input" type="radio" name="opc_rvc" id="flexRadioDefault1" value="MEDIA">
          <label class="form-check-label" for="flexRadioDefault1"></label>
        </td>
        <td class="text-center"><input class="form-check-input" type="radio" name="opc_rvc" id="flexRadioDefault1" value="BAJA">
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
          <td class="text-center"><input class="form-check-input" type="radio" name="opc_klo" id="flexRadioDefault1"   value="SI">
            <label class="form-check-label" for="flexRadioDefault1">SI</label>
          </td>
          <td class="text-center"><input class="form-check-input" type="radio" name="opc_klo" id="flexRadioDefault1" value="NO">
            <label class="form-check-label" for="flexRadioDefault1">NO</label>
          </td>
        </tr>

        <tr>
          <td>Es: sociable / aceptado / líder</td>
          <td class="text-center"><input class="form-check-input" type="radio" name="opc_odo" id="flexRadioDefault1"   value="SI">
            <label class="form-check-label" for="flexRadioDefault1">SI</label>
          </td>
          <td class="text-center"><input class="form-check-input" type="radio" name="opc_odo" id="flexRadioDefault1" value="NO">
            <label class="form-check-label" for="flexRadioDefault1">NO</label>
          </td>
        </tr>

        <tr>
          <td>Es: rechazado / está aislado</td>
          <td class="text-center"><input class="form-check-input" type="radio" name="opc_cza" id="flexRadioDefault1"   value="SI">
            <label class="form-check-label" for="flexRadioDefault1">SI</label>
          </td>
          <td class="text-center"><input class="form-check-input" type="radio" name="opc_cza" id="flexRadioDefault1" value="NO">
            <label class="form-check-label" for="flexRadioDefault1">NO</label>
          </td>
        </tr>

        <tr>
          <td>Asume responsabilidades cotidianas:</td>
          <td class="text-center"><input class="form-check-input" type="radio" name="opc_klas" id="flexRadioDefault1"   value="SI">
            <label class="form-check-label" for="flexRadioDefault1">SI</label>
          </td>
          <td class="text-center"><input class="form-check-input" type="radio" name="opc_klas" id="flexRadioDefault1" value="NO">
            <label class="form-check-label" for="flexRadioDefault1">NO</label>
          </td>
        </tr>

        <tr>
          <td>Es: indisciplinado / revoltoso en clase /agresivo / llama la atención para que se fijen en él:</td>
          <td class="text-center"><input class="form-check-input" type="radio" name="opc_dkas" id="flexRadioDefault1"   value="SI">
            <label class="form-check-label" for="flexRadioDefault1">SI</label>
          </td>
          <td class="text-center"><input class="form-check-input" type="radio" name="opc_dkas" id="flexRadioDefault1" value="NO">
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
              <textarea class="form-control" rows="8" name="hrp_evaluacion" placeholder="EVALUACION Y DIAGNOSTICO"></textarea>
            </div>
      </div>

      <br>
      <div class="row">
        <b>Desarrollo histórico académico</b>
      </div>
      <br>
      <div class="col-sm">
          <div class="form-group">
              <textarea class="form-control" rows="8" name="hrp_dhaca" placeholder="1.EVALUACION ACADEMICA."></textarea>
            </div>
      </div>

      <div class="col-sm">
        <div class="form-group">
            <textarea class="form-control" rows="8" name="hrp_evcn" placeholder="2.EVALUACION CONDUCTUAL. "></textarea>
          </div>
      </div>

      <div class="col-sm">
        <div class="form-group">
            <textarea class="form-control" rows="8" name="hrp_nurg" placeholder="3.EVALUACION NEUROCOGNITIVA. "></textarea>
          </div>
      </div>

      <br>
      <div class="row">
        <b>HABILIDADES COGNITIVAS</b>
      </div>
      <br>
      <div class="col-sm">
          <div class="form-group">
              <textarea class="form-control" rows="8" name="hrp_hcgtv" placeholder="HABILIDADES COGNITIVAS."></textarea>
            </div>
      </div>
      <br>
      <div class="row">
        <b>EVALUACION EMOCIONAL.</b>
      </div>
      <br>
      <div class="col-sm">
          <div class="form-group">
              <textarea class="form-control" rows="8" name="hrp_hemcnl" placeholder="EVALUACION EMOCIONAL."></textarea>
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
                  <input class="form-check-input" type="checkbox" name="tb_cdumm" id="flexRadioDefault1" value="cdumm">
                  <label class="form-check-label" for="flexRadioDefault1">Conciencia de uno mismo:</label>
                </td>
   
                  <td class="text-left">
                    <input class="form-check-input" type="checkbox" name="tb_empa" id="flexRadioDefault1" value="empa">
                    <label class="form-check-label" for="flexRadioDefault1">Empatia</label>
                  </td>  
              </tr>   
              
              <tr>
                <td class="text-left">
                  <input class="form-check-input" type="checkbox" name="tb_cind" id="flexRadioDefault1" value="cind">
                  <label class="form-check-label" for="flexRadioDefault1">Conciencia emocional:</label>
                </td>
   
                  <td class="text-left">
                    <input class="form-check-input" type="checkbox" name="tb_cmpdld" id="flexRadioDefault1" value="cmpdld">
                    <label class="form-check-label" for="flexRadioDefault1">Comprensión de los demás</label>
                  </td>  
              </tr>

              <tr>
                <td class="text-left">
                  <input class="form-check-input" type="checkbox" name="tb_vlduom" id="flexRadioDefault1" value="vlduom">
                  <label class="form-check-label" for="flexRadioDefault1">Valoración de uno mismo</label>
                </td>
   
                  <td class="text-left">
                    <input class="form-check-input" type="checkbox" name="tb_orcasv" id="flexRadioDefault1" value="orcasv">
                    <label class="form-check-label" for="flexRadioDefault1">Orientación al servicio</label>
                  </td>  
              </tr>

              <tr>
                <td class="text-left">
                  <input class="form-check-input" type="checkbox" name="tb_cnfeums" id="flexRadioDefault1" value="cnfeums">
                  <label class="form-check-label" for="flexRadioDefault1">Confianza en uno mismo</label>
                </td>
   
                  <td class="text-left">
                    <input class="form-check-input" type="checkbox" name="tb_dsrld" id="flexRadioDefault1" value="dsrld">
                    <label class="form-check-label" for="flexRadioDefault1">Desarrollo de los demás</label>
                  </td>  
              </tr>

              <tr>
                <td class="text-left">
                  <input class="form-check-input" type="checkbox" name="tb_atrgc" id="flexRadioDefault1" value="atrgc">
                  <label class="form-check-label" for="flexRadioDefault1">Autorregulación:</label>
                </td>
   
                  <td class="text-left">
                    <input class="form-check-input" type="checkbox" name="tb_aldv" id="flexRadioDefault1" value="aldv">
                    <label class="form-check-label" for="flexRadioDefault1">Aprovechar la diversidad</label>
                  </td>  
              </tr>

              <tr>
                <td class="text-left">
                  <input class="form-check-input" type="checkbox" name="tb_atcl" id="flexRadioDefault1" value="atcl">
                  <label class="form-check-label" for="flexRadioDefault1">Autocontrol</label>
                </td>
   
                  <td class="text-left">
                    <input class="form-check-input" type="checkbox" name="tb_consplc" id="flexRadioDefault1" value="consplc">
                    <label class="form-check-label" for="flexRadioDefault1">Conciencia política</label>
                  </td>  
              </tr>

              <tr>
                <td class="text-left">
                  <input class="form-check-input" type="checkbox" name="tb_cofbl" id="flexRadioDefault1" value="cofbl">
                  <label class="form-check-label" for="flexRadioDefault1">Confiabilidad</label>
                </td>
   
                  <td class="text-left">
                    <input class="form-check-input" type="checkbox" name="tb_hblsc" id="flexRadioDefault1" value="hblsc">
                    <label class="form-check-label" for="flexRadioDefault1">Habilidades sociales:</label>
                  </td>  
              </tr>

              <tr>
                <td class="text-left">
                  <input class="form-check-input" type="checkbox" name="tb_ingrd" id="flexRadioDefault1" value="ingrd">
                  <label class="form-check-label" for="flexRadioDefault1">Integridad </label>
                </td>
   
                  <td class="text-left">
                    <input class="form-check-input" type="checkbox" name="tb_ldrz" id="flexRadioDefault1" value="ldrz">
                    <label class="form-check-label" for="flexRadioDefault1">Liderazgo</label>
                  </td>  
              </tr>

              <tr>
                <td class="text-left">
                  <input class="form-check-input" type="checkbox" name="tb_aptbl" id="flexRadioDefault1" value="aptbl">
                  <label class="form-check-label" for="flexRadioDefault1">Adaptabilidad</label>
                </td>
   
                  <td class="text-left">
                    <input class="form-check-input" type="checkbox" name="tb_cmicc" id="flexRadioDefault1" value="cmicc">
                    <label class="form-check-label" for="flexRadioDefault1">Comunicación</label>
                  </td>  
              </tr>

              <tr>
                <td class="text-left">
                  <input class="form-check-input" type="checkbox" name="tb_inno" id="flexRadioDefault1" value="inno">
                  <label class="form-check-label" for="flexRadioDefault1">Innovación</label>
                </td>
   
                  <td class="text-left">
                    <input class="form-check-input" type="checkbox" name="tb_iflc" id="flexRadioDefault1" value="iflc">
                    <label class="form-check-label" for="flexRadioDefault1">Influencia</label>
                  </td>  
              </tr>

              <tr>
                <td class="text-left">
                  <input class="form-check-input" type="checkbox" name="tb_mtdl" id="flexRadioDefault1" value="mtdl">
                  <label class="form-check-label" for="flexRadioDefault1">Motivación de logro</label>
                </td>
   
                  <td class="text-left">
                    <input class="form-check-input" type="checkbox" name="tb_gdcf" id="flexRadioDefault1" value="gdcf">
                    <label class="form-check-label" for="flexRadioDefault1">Gestión de conflictos</label>
                  </td>  
              </tr>

              <tr>
                <td class="text-left">
                  <input class="form-check-input" type="checkbox" name="tb_compr" id="flexRadioDefault1" value="compr">
                  <label class="form-check-label" for="flexRadioDefault1">Compromiso</label>
                </td>
   
                  <td class="text-left">
                    <input class="form-check-input" type="checkbox" name="tb_crvx" id="flexRadioDefault1" value="crvx">
                    <label class="form-check-label" for="flexRadioDefault1">Crear vínculos</label>
                  </td>  
              </tr>

              <tr>
                <td class="text-left">
                  <input class="form-check-input" type="checkbox" name="tb_init" id="flexRadioDefault1" value="init">
                  <label class="form-check-label" for="flexRadioDefault1">Iniciativa</label>
                </td>
   
                  <td class="text-left">
                    <input class="form-check-input" type="checkbox" name="tb_csase" id="flexRadioDefault1" value="csase">
                    <label class="form-check-label" for="flexRadioDefault1">Comprensión de los demás</label>
                  </td>  
              </tr>

              <tr>
                <td class="text-left">
                  <input class="form-check-input" type="checkbox" name="tb_pcvs" id="flexRadioDefault1" value="pcvs">
                  <label class="form-check-label" for="flexRadioDefault1">Optimismo</label>
                </td>
   
                  <td class="text-left">
                    <input class="form-check-input" type="checkbox" name="tb_ccopa" id="flexRadioDefault1" value="ccopa">
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
          <input type="text" class="form-control" name="hrp_ijda">
          <label>en el proceso de evaluación emitido por el departamento psicopedagógico. </label>
      </div>
    </div>

  
      

  <div class="row">
    <b>Propuesta de intervención:</b> 
  </div>
  <div class="col-sm">
    <div class="form-group">
        <textarea class="form-control" rows="8" name="hrp_pripdai" placeholder="Propuesta de intervención: "></textarea>
      </div>
  </div>

    <div class="card-footer ml-auto mr-auto">
        <button class="text-grey-lighter font-bold py-3 px-6 rounded text-xs bg-blue-300 hover:bg-blue-dark">Guardar</button>
    </div>
</form>


</div>


@endsection