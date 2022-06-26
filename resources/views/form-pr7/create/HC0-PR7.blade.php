@extends('layouts.app')

@section('content')
<script>
  ///script donde se agregaran campos para agregar mas de un alumno 
  var contador = 1;
  $(document).ready(function() {
      $("#add_m").click(function() {

          contador = contador + 1;

          /////////CODIGO BIEEEEEEEEEEEEEEEEEEEEEEEEEEEEN

          $("#add_m1").before('<tr><td><input type="text" name="hrp_miem[]" class="form-control" placeholder="MIEMBRO"></td><td><input type="text" name="hrp_paren[]" class="form-control" placeholder="PARENTESCO"></td><td><input type="text" name="hrp_eda[]" class="form-control" placeholder="EDAD"></td><td><input type="text" name="hrp_escol[]" class="form-control" placeholder="ESCOLARIDAD"></td><td><input type="text" name="hrp_ocup[]" class="form-control" placeholder="OCUPACION"></td></tr>');


      });

      $(document).on('click', '.delete_alu', function() {
          contador = contador - 1;
          $(this).parent().remove();
      });
      
  });
</script>

<div class="container">


<form action="{{ route('forms.store') }}" method="post"> 
    @csrf
    <div class="row">

        <input  name="name" type="hidden" value="HISTORIALCLINICO">
        <input  name="record_id" type="hidden" value="{{$record_id}}">
        <input class="form-check-input" type="hidden"  name="hrp_opc[]"/>

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

    <p class="text-center"><b><u>HISTORIAL CLINICO </u></b></p>

    <div class="row">
      <label >NOMBRE:</label>
      <div class="col-sm-12">
        <input type="text" name="hrp_nombre" class="form-control">
      </div>
    </div>

  <div class="row">
      <div class="col-md-3">
          <label class="form-label">Edad:</label>
          <input type="number" class="form-control" name="hrp_edad">
      </div>

      <div class="col-md-3">
          <label class="form-label">SEXO:</label>
          <select name="hrp_sexo" class="form-select" aria-label="Default select example">
            <option value="MASCULINO">MASCULINO</option>
            <option value="FEMENINO">FEMENINO</option>
        </select>
      </div>

      <div class="col-md-3">
          <label class="form-label">ESTADO CIVIL:</label>
          <input type="text" class="form-control" name="hrp_EC">
      </div>
  </div>

  <div class="row">
    <label >ESCOLARIDAD:</label>
    <div class="col-sm-12">
      <input type="text" name="hrp_escolarida" class="form-control">
    </div>
  </div>

  <div class="row">
    <label >LUGAR Y FECHA DE NACIMIENTO:</label>
    <div class="col-sm-12">
      <input type="text" name="hrp_lfn" class="form-control">
    </div>
  </div>

  <div class="row">
    <label >DIRECCION ACTUAL:</label>
    <div class="col-sm-12">
      <input type="text" name="hrp_direccion-a" class="form-control">
    </div>
  </div>

  <div class="row">
    <label >TELEFONO:</label>
    <div class="col-sm-12">
      <input type="text" name="hrp_telefono" class="form-control">
    </div>
  </div>

  <div class="row">
    <label >DIRECCION DE LA FAMILIA:</label>
    <div class="col-sm-12">
      <input type="text" name="hrp_direccion-f" class="form-control">
    </div>
  </div>

  <div class="row">
    <label >CIUDAD:</label>
    <div class="col-sm-12">
      <input type="text" name="hrp_ciudad" class="form-control">
    </div>
  </div>

  <div class="col-md-3">
    <label class="form-label">HA RECIBIDO ALGÚN TIPO DE TRATAMIENTO PSICOLÓGICO O PSIQUIÁTRICO (SI, NO):</label>
    <select name="hrp_rtp" class="form-select" aria-label="Default select example">
        <option value="SI">SI</option>
        <option value="NO">NO</option>
    </select>
</div>
    <br>
      <div class="col-sm">
          <div class="form-group">
              <textarea class="form-control" rows="8" name="hrp_motivos" placeholder="MOTIVO DE LA CONSULTA"></textarea>
            </div>
      </div>

      
      <div class="row">
        <label >DEFINICION DEL PROBLEMA:</label>
      </div>
      <br>
      <div class="col-sm">
          <div class="form-group">
              <textarea class="form-control" rows="8" name="hrp_evaluacion" placeholder="EVALUACION"></textarea>
            </div>
      </div>
      <br>
      <div class="col-sm">
          <div class="form-group">
              <textarea class="form-control" rows="8" name="hrp_causa" placeholder="CAUSA"></textarea>
            </div>
      </div>
      <br>
      <div class="col-sm">
          <div class="form-group">
              <textarea class="form-control" rows="8" name="hrp_arbs" placeholder="ACCIONES REALIZADAS EN BUSCA DE SOLUCION"></textarea>
            </div>
      </div>
      <br>
      <div class="col-sm">
          <div class="form-group">
              <textarea class="form-control" rows="8" name="hrp_implicaciones" placeholder="IMPLICACIONES"></textarea>
            </div>
      </div>

      <div class="row">
        <label >ESTRUCTURA Y FUNCIONALIDAD FAMILIAR </label>
      </div>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">MIEMBRO</th>
            <th scope="col">PARENTESCO</th>
            <th scope="col">EDAD</th>
            <th scope="col">ESCOLARIDAD</th>
            <th scope="col">OCUPACION</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            
            <td><input type="text" name="hrp_miem[]" class="form-control" placeholder="MIEMBRO"></td>
            <td><input type="text" name="hrp_paren[]" class="form-control" placeholder="PARENTESCO"></td>
            <td><input type="text" name="hrp_eda[]" class="form-control" placeholder="EDAD"></td>
            <td><input type="text" name="hrp_escol[]" class="form-control" placeholder="ESCOLARIDAD"></td>
            <td><input type="text" name="hrp_ocup[]" class="form-control" placeholder="OCUPACION"></td>
          </tr>
          <tr id="add_m1">

          </tr>
          
          <tr>
            <td><button type="button" id="add_m" class="text-white-lighter font-bold py-3 px-6 rounded text-xs bg-gray-300 hover:bg-gray-dark">agregar Pariente</button></td>
          </tr>
              
          
        </tbody>
      </table>

      <br>
      <div class="col-sm">
        <div class="form-group">
            <textarea class="form-control" rows="8" name="hrp_fg" placeholder="FAMILIOGRAMA"></textarea>
          </div>
    </div>

    <div class="row">
      <label >HISTORIA PERSONAL:</label>
    </div>

    <br>
    <div class="col-sm">
      <div class="form-group">
          <textarea class="form-control" rows="8" name="hrp_emb" placeholder="EMBARAZO"></textarea>
        </div>
    </div>
    <br>
    <div class="col-sm">
      <div class="form-group">
          <textarea class="form-control" rows="8" name="hrp_inf" placeholder="INFANCIA"></textarea>
        </div>
    </div>
    <br>
    <div class="col-sm">
      <div class="form-group">
          <textarea class="form-control" rows="8" name="hrp_ado" placeholder="ADOLESCENCIA"></textarea>
        </div>
    </div>
    <br>
    <div class="col-sm">
      <div class="form-group">
          <textarea class="form-control" rows="8" name="hrp_esc" placeholder="ESCOLAR"></textarea>
        </div>
    </div>
    <div class="row">
      <label >OBSERVACION</label>
    </div>
    <br>
    <div class="col-sm">
      <div class="form-group">
          <textarea class="form-control" rows="8" name="hrp_fsa" placeholder="FISICA"></textarea>
        </div>
    </div>
    <br>
    <div class="col-sm">
      <div class="form-group">
          <textarea class="form-control" rows="8" name="hrp_lnv" placeholder="LENGUA NO VERBAL"></textarea>
        </div>
    </div>
    <br>
    <div class="col-sm">
      <div class="form-group">
          <textarea class="form-control" rows="8" name="hrp_ast" placeholder="ACTITUD"></textarea>
        </div>
    </div>
    <div class="row">
      <label >DIMENSIONES</label>
    </div>
    <br>
    <div class="col-sm">
      <div class="form-group">
          <textarea class="form-control" rows="8" name="hrp_com" placeholder="COMPORTAMENTAL"></textarea>
        </div>
    </div>
    <br>
    <div class="col-sm">
      <div class="form-group">
          <textarea class="form-control" rows="8" name="hrp_afe" placeholder="AFECTIVA"></textarea>
        </div>
    </div>
    <br>
    <div class="col-sm">
      <div class="form-group">
          <textarea class="form-control" rows="8" name="hrp_soc" placeholder="SOCIAL"></textarea>
        </div>
    </div>

    <div class="row">
      <label >HISTORIA MEDICA</label>
    </div>
    <br>
    <div class="col-sm">
      <div class="form-group">
          <textarea class="form-control" rows="8" name="hrp_hmd" placeholder="HISTORIA MEDICA"></textarea>
        </div>
    </div>

    <div class="row">
      <label >SITUACION ACTUAL</label>
    </div>
    <br>
    <div class="col-sm">
      <div class="form-group">
          <textarea class="form-control" rows="8" name="hrp_ai" placeholder="ASPECTO INTELECTUAL"></textarea>
        </div>
    </div>
    <br>
    <div class="col-sm">
      <div class="form-group">
          <textarea class="form-control" rows="8" name="hrp_lha" placeholder="LENGUA HABLADA"></textarea>
        </div>
    </div>
    <br>
    <div class="col-sm">
      <div class="form-group">
          <textarea class="form-control" rows="8" name="hrp_uaex" placeholder="UTILIZA ALGUNAS EXPRESIONES"></textarea>
        </div>
    </div>
    <br>
    <div class="col-sm">
      <div class="form-group">
          <textarea class="form-control" rows="8" name="hrp_escr" placeholder="ESCRITURA"></textarea>
        </div>
    </div>
    <br>
    <div class="col-sm">
      <div class="form-group">
          <textarea class="form-control" rows="8" name="hrp_lect" placeholder="LECTURA"></textarea>
        </div>
    </div>
    <br>
    <div class="col-sm">
      <div class="form-group">
          <textarea class="form-control" rows="8" name="hrp_eemc" placeholder="ESCUCHA Y EXPRESA DE MANERA CORRECTA/CLARA"></textarea>
        </div>
    </div>
    <div class="row">
      <label >INSTRUMENTOS UTILIZADOS</label>
    </div>

    <div class="row">
      <table class="table table-bordered">
          <tbody>
            <tr>
              <td>
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="EAA" name="hrp_opc[]"/>
                      <label class="form-check-label">ENTREVISTA AL ALUMNO </label>
                  </div>
              </td>
            </tr>
            <tr>  
              <td>
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="EALP" name="hrp_opc[]"/>
                      <label class="form-check-label">ENTREVISTA A LOS PADRES</label>
                  </div>
              </td>
            </tr>
            <tr>   
              <td>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="OBSE" name="hrp_opc[]"/>
                    <label class="form-check-label">OBSERVACIONES</label>
                </div>
            </td>
          </tr>
          <tr> 
            <td>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="ENDO" name="hrp_opc[]"/>
                    <label class="form-check-label">ENTREVISTA DOCENTES</label>
                </div>
            </td>
          </tr>
          <tr> 
            <td>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="SEBO" name="hrp_opc[]"/>
                  <label class="form-check-label">SEGUIMIENTO ESCOLAR (BOLETA)</label>
              </div>
          </td>
        </tr>
        <tr> 
          <td>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="TPRU" name="hrp_opc[]"/>
                <label class="form-check-label">TEST/PRUEBAS</label>
            </div>
        </td>
      </tr>
            
            
          </tbody>
        </table>
  </div>

  <div class="row">
    <label >PRUEBAS Y ANALISIS</label>
  </div>
  <br>
  <div class="col-sm">
    <div class="form-group">
        <textarea class="form-control" rows="8" name="hrp_pya" placeholder="PRUEBAS Y ANALISIS"></textarea>
      </div>
  </div>

  <div class="row">
    <label >OBSERVACIONES Y/O RECOMENDACIONES</label>
  </div>
  <br>
  <div class="col-sm">
    <div class="form-group">
        <textarea class="form-control" rows="8" name="hrp_oyr" placeholder="OBSERVACIONES Y/O RECOMENDACIONES"></textarea>
      </div>
  </div>

    <div class="card-footer ml-auto mr-auto">
        <button class="text-grey-lighter font-bold py-3 px-6 rounded text-xs bg-blue-300 hover:bg-blue-dark">Guardar</button>
    </div>
</form>


</div>


@endsection