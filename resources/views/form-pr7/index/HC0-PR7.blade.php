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

    <p class="text-center"><b><u>HISTORIAL CLINICO </u></b></p>

    <div class="row">
      <label >NOMBRE:</label>
      <div class="col-sm-12">
        <input type="text" name="hrp_nombre" class="form-control" value="{{$info['hrp_nombre']}}" readonly>
      </div>
    </div>

  <div class="row">
      <div class="col-md-3">
          <label class="form-label">Edad:</label>
          <input type="number" class="form-control" name="hrp_edad" value="{{$info['hrp_edad']}}" readonly>
      </div>

      <div class="col-md-3">
          <label class="form-label">SEXO:</label>
          <select name="hrp_sexo" class="form-select" aria-label="Default select example">
            <option value="{{$info['hrp_sexo']}}">{{$info['hrp_sexo']}}</option>
        </select>
      </div>

      <div class="col-md-3">
          <label class="form-label">ESTADO CIVIL:</label>
          <input type="text" class="form-control" name="hrp_EC" value="{{$info['hrp_EC']}}" readonly>
      </div>
  </div>

  <div class="row">
    <label >ESCOLARIDAD:</label>
    <div class="col-sm-12">
      <input type="text" name="hrp_escolarida" class="form-control" value="{{$info['hrp_escolarida']}}" readonly> 
    </div>
  </div>

  <div class="row">
    <label >LUGAR Y FECHA DE NACIMIENTO:</label>
    <div class="col-sm-12">
      <input type="text" name="hrp_lfn" class="form-control" value="{{$info['hrp_lfn']}}" readonly>
    </div>
  </div>

  <div class="row">
    <label >DIRECCION ACTUAL:</label>
    <div class="col-sm-12">
      <input type="text" name="hrp_direccion-a" class="form-control" value="{{$info['hrp_direccion-a']}}" readonly>
    </div>
  </div>

  <div class="row">
    <label >TELEFONO:</label>
    <div class="col-sm-12">
      <input type="text" name="hrp_telefono" class="form-control" value="{{$info['hrp_telefono']}}" readonly>
    </div>
  </div>

  <div class="row">
    <label >DIRECCION DE LA FAMILIA:</label>
    <div class="col-sm-12">
      <input type="text" name="hrp_direccion-f" class="form-control" value="{{$info['hrp_direccion-f']}}" readonly>
    </div>
  </div>

  <div class="row">
    <label >CIUDAD:</label>
    <div class="col-sm-12">
      <input type="text" name="hrp_ciudad" class="form-control" value="{{$info['hrp_ciudad']}}" readonly>
    </div>
  </div>

  <div class="col-md-3">
    <label class="form-label">HA RECIBIDO ALGÚN TIPO DE TRATAMIENTO PSICOLÓGICO O PSIQUIÁTRICO (SI, NO):</label>
    <select name="hrp_rtp" class="form-select" aria-label="Default select example">
      <option value="{{$info['hrp_rtp']}}">{{$info['hrp_rtp']}}</option>
  </select>
</div>
    <br>
      <div class="col-sm">
          <div class="form-group">
              <textarea class="form-control" rows="8" name="hrp_motivos" placeholder="MOTIVO DE LA CONSULTA" readonly>{{$info['hrp_motivos']}}</textarea>
            </div>
      </div>

      
      <div class="row">
        <label >DEFINICION DEL PROBLEMA:</label>
      </div>
      <br>
      <div class="col-sm">
          <div class="form-group">
              <textarea class="form-control" rows="8" name="hrp_evaluacion" placeholder="EVALUACION" readonly>{{$info['hrp_evaluacion']}}</textarea>
            </div>
      </div>
      <br>
      <div class="col-sm">
          <div class="form-group">
              <textarea class="form-control" rows="8" name="hrp_causa" placeholder="CAUSA" readonly>{{$info['hrp_causa']}}</textarea>
            </div>
      </div>
      <br>
      <div class="col-sm">
          <div class="form-group">
              <textarea class="form-control" rows="8" name="hrp_arbs" placeholder="ACCIONES REALIZADAS EN BUSCA DE SOLUCION" readonly>{{$info['hrp_arbs']}}</textarea>
            </div>
      </div>
      <br>
      <div class="col-sm">
          <div class="form-group">
              <textarea class="form-control" rows="8" name="hrp_implicaciones" placeholder="IMPLICACIONES" readonly>{{$info['hrp_implicaciones']}}</textarea>
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
          
          @for ($i=0; $i < count($info['hrp_miem']) ; $i++)
          <tr>
            <td><input type="text" name="hrp_miem[]" class="form-control" placeholder="MIEMBRO" value="{{$inf['nombre'][$i]}}" readonly></td>
            <td><input type="text" name="hrp_paren[]" class="form-control" placeholder="PARENTESCO" value="{{$inf['parentesco'][$i]}}" readonly></td>
            <td><input type="text" name="hrp_eda[]" class="form-control" placeholder="EDAD" value="{{$inf['edad'][$i]}}" readonly></td>
            <td><input type="text" name="hrp_escol[]" class="form-control" placeholder="ESCOLARIDAD" value="{{$inf['escolarida'][$i]}}" readonly></td>
            <td><input type="text" name="hrp_ocup[]" class="form-control" placeholder="OCUPACION" value="{{$inf['ocupacion'][$i]}}" readonly></td>
          </tr>
          @endfor
          
              
          
        </tbody>
      </table>

      <br>
      <div class="col-sm">
        <div class="form-group">
            <textarea class="form-control" rows="8" name="hrp_fg" placeholder="FAMILIOGRAMA" readonly>{{$info['hrp_fg']}}</textarea>
          </div>
    </div>

    <div class="row">
      <label >HISTORIA PERSONAL:</label>
    </div>

    <br>
    <div class="col-sm">
      <div class="form-group">
          <textarea class="form-control" rows="8" name="hrp_emb" placeholder="EMBARAZO" readonly>{{$info['hrp_emb']}}</textarea>
        </div>
    </div>
    <br>
    <div class="col-sm">
      <div class="form-group">
          <textarea class="form-control" rows="8" name="hrp_inf" placeholder="INFANCIA" readonly>{{$info['hrp_inf']}}</textarea>
        </div>
    </div>
    <br>
    <div class="col-sm">
      <div class="form-group">
          <textarea class="form-control" rows="8" name="hrp_ado" placeholder="ADOLESCENCIA" readonly>{{$info['hrp_ado']}}</textarea>
        </div>
    </div>
    <br>
    <div class="col-sm">
      <div class="form-group">
          <textarea class="form-control" rows="8" name="hrp_esc" placeholder="ESCOLAR" readonly>{{$info['hrp_esc']}}</textarea>
        </div>
    </div>
    <div class="row">
      <label >OBSERVACION</label>
    </div>
    <br>
    <div class="col-sm">
      <div class="form-group">
          <textarea class="form-control" rows="8" name="hrp_fsa" placeholder="FISICA" readonly>{{$info['hrp_fsa']}}</textarea>
        </div>
    </div>
    <br>
    <div class="col-sm">
      <div class="form-group">
          <textarea class="form-control" rows="8" name="hrp_lnv" placeholder="LENGUA NO VERBAL" readonly>{{$info['hrp_lnv']}}</textarea>
        </div>
    </div>
    <br>
    <div class="col-sm">
      <div class="form-group">
          <textarea class="form-control" rows="8" name="hrp_ast" placeholder="ACTITUD" readonly>{{$info['hrp_ast']}}</textarea>
        </div>
    </div>
    <div class="row">
      <label >DIMENSIONES</label>
    </div>
    <br>
    <div class="col-sm">
      <div class="form-group">
          <textarea class="form-control" rows="8" name="hrp_com" placeholder="COMPORTAMENTAL" readonly>{{$info['hrp_com']}}</textarea>
        </div>
    </div>
    <br>
    <div class="col-sm">
      <div class="form-group">
          <textarea class="form-control" rows="8" name="hrp_afe" placeholder="AFECTIVA" readonly>{{$info['hrp_afe']}}</textarea>
        </div>
    </div>
    <br>
    <div class="col-sm">
      <div class="form-group">
          <textarea class="form-control" rows="8" name="hrp_soc" placeholder="SOCIAL" readonly>{{$info['hrp_soc']}}</textarea>
        </div>
    </div>

    <div class="row">
      <label >HISTORIA MEDICA</label>
    </div>
    <br>
    <div class="col-sm">
      <div class="form-group">
          <textarea class="form-control" rows="8" name="hrp_hmd" placeholder="HISTORIA MEDICA" readonly>{{$info['hrp_hmd']}}</textarea>
        </div>
    </div>

    <div class="row">
      <label >SITUACION ACTUAL</label>
    </div>
    <br>
    <div class="col-sm">
      <div class="form-group">
          <textarea class="form-control" rows="8" name="hrp_ai" placeholder="ASPECTO INTELECTUAL" readonly>{{$info['hrp_ai']}}</textarea>
        </div>
    </div>
    <br>
    <div class="col-sm">
      <div class="form-group">
          <textarea class="form-control" rows="8" name="hrp_lha" placeholder="LENGUA HABLADA" readonly>{{$info['hrp_lha']}}</textarea>
        </div>
    </div>
    <br>
    <div class="col-sm">
      <div class="form-group">
          <textarea class="form-control" rows="8" name="hrp_uaex" placeholder="UTILIZA ALGUNAS EXPRESIONES" readonly>{{$info['hrp_uaex']}}</textarea>
        </div>
    </div>
    <br>
    <div class="col-sm">
      <div class="form-group">
          <textarea class="form-control" rows="8" name="hrp_escr" placeholder="ESCRITURA" readonly>{{$info['hrp_escr']}}</textarea>
        </div>
    </div>
    <br>
    <div class="col-sm">
      <div class="form-group">
          <textarea class="form-control" rows="8" name="hrp_lect" placeholder="LECTURA" readonly>{{$info['hrp_lect']}}</textarea>
        </div>
    </div>

    <br>
    <div class="col-sm">
      <div class="form-group">
          <textarea class="form-control" rows="8" name="hrp_eemc" placeholder="ESCUCHA Y EXPRESA DE MANERA CORRECTA/CLARA" readonly>{{$info['hrp_eemc']}}</textarea>
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
                @if( in_array('EAA',$info['hrp_opc']) )
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="EAA" name="hrp_opc[]" checked readonly/>
                      <label class="form-check-label">ENTREVISTA AL ALUMNO </label>
                  </div>
                @else
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="EAA" name="hrp_opc[]" readonly/>
                  <label class="form-check-label">ENTREVISTA AL ALUMNO </label>
              </div>
                @endif  
              </td>
            </tr>
            <tr>  
              <td>
                @if( in_array('EALP',$info['hrp_opc']) )
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="EALP" name="hrp_opc[]" checked readonly/>
                      <label class="form-check-label">ENTREVISTA A LOS PADRES</label>
                  </div>
                  @else
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="EALP" name="hrp_opc[]" readonly/>
                    <label class="form-check-label">ENTREVISTA A LOS PADRES</label>
                </div>
                  @endif   
              </td>
            </tr>
            <tr>   
              <td>
                @if( in_array('OBSE',$info['hrp_opc']) )
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="OBSE" name="hrp_opc[]" checked readonly/>
                    <label class="form-check-label">OBSERVACIONES</label>
                </div>
                @else
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="OBSE" name="hrp_opc[]" readonly/>
                  <label class="form-check-label">OBSERVACIONES</label>
              </div>
                @endif 
            </td>
          </tr>
          <tr> 
            <td>
              @if( in_array('ENDO',$info['hrp_opc']) )
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="ENDO" name="hrp_opc[]" checked readonly/>
                    <label class="form-check-label">ENTREVISTA DOCENTES</label>
                </div>
                @else
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="ENDO" name="hrp_opc[]" readonly/>
                  <label class="form-check-label">ENTREVISTA DOCENTES</label>
              </div>
                @endif 
            </td>
          </tr>
          <tr> 
            <td>
              @if( in_array('SEBO',$info['hrp_opc']) )
              <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="SEBO" name="hrp_opc[]" checked readonly/>
                  <label class="form-check-label">SEGUIMIENTO ESCOLAR (BOLETA)</label>
              </div>
              @else
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="SEBO" name="hrp_opc[]" readonly/>
                <label class="form-check-label">SEGUIMIENTO ESCOLAR (BOLETA)</label>
            </div>
              @endif 
          </td>
        </tr>
        <tr> 
          <td>
            @if( in_array('TPRU',$info['hrp_opc']) )
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="TPRU" name="hrp_opc[]" checked readonly/>
                <label class="form-check-label">TEST/PRUEBAS</label>
            </div>
            @else
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="TPRU" name="hrp_opc[]" readonly/>
              <label class="form-check-label">TEST/PRUEBAS</label>
          </div>
            @endif 
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
        <textarea class="form-control" rows="8" name="hrp_pya" placeholder="PRUEBAS Y ANALISIS" readonly>{{$info['hrp_pya']}}</textarea>
      </div>
  </div>

  <div class="row">
    <label >OBSERVACIONES Y/O RECOMENDACIONES</label>
  </div>
  <br>
  <div class="col-sm">
    <div class="form-group">
        <textarea class="form-control" rows="8" name="hrp_oyr" placeholder="OBSERVACIONES Y/O RECOMENDACIONES" readonly>{{$info['hrp_oyr']}}</textarea>
      </div>
  </div>

  


</div>


@endsection