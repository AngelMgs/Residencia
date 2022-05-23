@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{  route('forms.update',$id ) }}" method="post">   
    @csrf  
    @method('put')
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
        <input  name="record_id" type="hidden" value="{{$record_id}}">
  
        <div class="col-sm">
          <div class="text-center "><img src="{{asset('img/rec2.png')}}" width="180"></div>  
        </div>
      </div>
  
      <div class="row">
          <div class="col-sm">
          </div>
          <div class="col-sm">
            <p class="text-center"><b><u>HOJA DE REGISTRO PERSONAL</u></b></p>
          </div>
          <div class="col-sm">
          </div>
      </div>
  
      <div class="row">
          <div class="col-sm">
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
  
      <div class="row">
          <label >NOMBRE DEL ALUMNO:</label>
          <div class="col-sm-12">
            <input type="text" name="hrp_nombre" class="form-control" value="{{$info['hrp_nombre']}}" >
          </div>
      </div>
  
      <div class="row">
          <div class="col-md-3">
              <label class="form-label">TELEFONO:</label>
              <input type="number" class="form-control" name="hrp_telefono" value="{{$info['hrp_telefono']}}" >
          </div>
  
          <div class="col-md-3">
              <label class="form-label">GRADO:</label>
              <input type="text" class="form-control" name="hrp_grado" value="{{$info['hrp_grado']}}"  >
          </div>
  
          <div class="col-md-3">
              <label class="form-label">GRUPO:</label>
              <input type="text" class="form-control" name="hrp_grupo" value="{{$info['hrp_grupo']}}" >
          </div>
  
          <div class="col-md-3">
              <label class="form-label">SEXO:</label>
              <select name="hrp_sexo" class="form-select" aria-label="Default select example">
                  <option value="{{$info['hrp_sexo']}}"><p><u>{{$info['hrp_sexo']}}</u></p></option>
              </select>
          </div>
      </div>
  
      <div class="row">
          <div class="col-md-3">
              <label class="form-label">EDAD:</label>
              <input type="number" class="form-control" name="hrp_edad" value="{{$info['hrp_edad']}}" >
          </div>
  
          <div class="col-md-6">
              <label class="form-label">NOMBRE DEL TUTOR:</label>
              <input type="text" class="form-control" name="hrp_nombre-tutor" value="{{$info['hrp_nombre-tutor']}}" >
          </div>
      </div>
  
      <div class="row">
          <div class="col-md-3">
              <label class="form-label">TELEFONO DEL TUTOR:</label>
              <input type="number" class="form-control" name="hrp_telefono" value="{{$info['hrp_telefono']}}" >
          </div>
  
          <div class="col-md-6">
              <label class="form-label">PSICOLOGO A CARGO:</label>
              <input type="text" class="form-control" name="hrp_nombre-tutor" value="{{$info['hrp_nombre-tutor']}}" >
          </div>
      </div>
  
      <div class="row">
          <div class="col-sm">
          </div>
          <div class="col-sm">
            <p class="text-center"><b><u>MOTIVO DE CANALIZACIÓN</u></b></p>
          </div>
          <div class="col-sm">
          </div>
      </div>
  
      <div class="row">
          <div class="col-sm">
              <p class="small">Indicadores que afectan el rendimiento académica o de disiplina de las y los estudiantes.</p>
          </div>
          <div class="col-sm">
          </div>
      </div>
      <!------------------------------------------------------------------------->
  
      <div class="row">
          <table class="table table-bordered">
              <tbody>
                <tr>
                  <td>
                      <div class="form-check">
                          @if( in_array('AS',$info['hrp_opc']) )
                          <input class="form-check-input" type="checkbox" value="AS" name="hrp_opc[]" checked/>
                          <label class="form-check-label">ABUSO SEXUAL</label>
                          @else
                          <input class="form-check-input" type="checkbox" value="AS" name="hrp_opc[]"/>
                          <label class="form-check-label">ABUSO SEXUAL</label>
                          @endif
                      </div>
                  </td>
                  <td>
                      <div class="form-check">
                          @if( in_array('IPIS',$info['hrp_opc']) )
                          <input class="form-check-input" type="checkbox" value="IPIS" name="hrp_opc[]" checked/>
                          <label class="form-check-label">IDEACIÓN,PLANEACIÓN E INTENTO SUICIDA</label>
                          @else
                          <input class="form-check-input" type="checkbox" value="IPIS" name="hrp_opc[]"/>
                          <label class="form-check-label">IDEACIÓN,PLANEACIÓN E INTENTO SUICIDA</label>
                          @endif
                      </div>
                  </td>
                </tr>
  
                <tr>
                  <td>
                      <div class="form-check">
                          @if( in_array('CSN',$info['hrp_opc']) )
                          <input class="form-check-input" type="checkbox" value="CSN" name="hrp_opc[]" checked/>
                          <label class="form-check-label">CONSUMO DE SUSTANCIAS NOCIVAS</label>
                          @else
                          <input class="form-check-input" type="checkbox" value="CSN" name="hrp_opc[]"/>
                          <label class="form-check-label">CONSUMO DE SUSTANCIAS NOCIVAS</label>
                          @endif
                      </div>
                  </td>
                  <td>
                      <div class="form-check">
                          @if( in_array('PD',$info['hrp_opc']) )
                          <input class="form-check-input" type="checkbox" value="PD" name="hrp_opc[]" checked/>
                          <label class="form-check-label">POSIBLE DEPRESION</label>
                          @else
                          <input class="form-check-input" type="checkbox" value="PD" name="hrp_opc[]"/>
                          <label class="form-check-label">POSIBLE DEPRESION</label>
                          @endif
                      </div>
                  </td>
                </tr>
                
                <tr>
                  <td>
                      <div class="form-check">
                          @if( in_array('PF',$info['hrp_opc']) )
                          <input class="form-check-input" type="checkbox" value="PF" name="hrp_opc[]" checked/>
                          <label class="form-check-label">PROBLEMAS FAMILIARES</label>
                          @else
                          <input class="form-check-input" type="checkbox" value="PF" name="hrp_opc[]"/>
                          <label class="form-check-label">PROBLEMAS FAMILIARES</label>
                          @endif
                      </div>
                  </td>
                  <td>
                      <div class="form-check">
                          @if( in_array('BRA',$info['hrp_opc']) )
                          <input class="form-check-input" type="checkbox" value="BRA" name="hrp_opc[]" checked/>
                          <label class="form-check-label">BAJO RENDIMIENTO ACADÉMICO</label>
                          @else
                          <input class="form-check-input" type="checkbox" value="BRA" name="hrp_opc[]"/>
                          <label class="form-check-label">BAJO RENDIMIENTO ACADÉMICO</label>
                          @endif
                      </div>
                  </td>
                </tr>
  
                <tr>
                  <td>
                      <div class="form-check">
                          @if( in_array('PATT',$info['hrp_opc']) )
                          <input class="form-check-input" type="checkbox" value="PATT" name="hrp_opc[]" checked/>
                          <label class="form-check-label">PROBLEMAS DE APRENDIZAJE TDA Y TDHA</label>
                          @else
                          <input class="form-check-input" type="checkbox" value="PATT" name="hrp_opc[]" />
                          <label class="form-check-label">PROBLEMAS DE APRENDIZAJE TDA Y TDHA</label>
                          @endif
                      </div>
                  </td>
                  <td>
                      <div class="form-check">
                          @if( in_array('PR',$info['hrp_opc']) )
                          <input class="form-check-input" type="checkbox" value="PR" name="hrp_opc[]" checked/>
                          <label class="form-check-label">ALTOS INDICES DE REPROBACIÓN</label>
                          @else
                          <input class="form-check-input" type="checkbox" value="PR" name="hrp_opc[]" />
                          <label class="form-check-label">ALTOS INDICES DE REPROBACIÓN</label>
                          @endif
                      </div>
                  </td>
                </tr>
  
                <tr>
                  <td>
                      <div class="form-check">
                          @if( in_array('PE',$info['hrp_opc']) )
                          <input class="form-check-input" type="checkbox" value="PE" name="hrp_opc[]" checked/>
                          <label class="form-check-label">PROBLEMAS EMOCIONALES</label>
                          @else
                          <input class="form-check-input" type="checkbox" value="PE" name="hrp_opc[]" />
                          <label class="form-check-label">PROBLEMAS EMOCIONALES</label>
                          @endif
                      </div>
                  </td>
                  <td>
                      <div class="form-check">
                          @if( in_array('EI',$info['hrp_opc']) )
                          <input class="form-check-input" type="checkbox" value="EI" name="hrp_opc[]" checked/>
                          <label class="form-check-label">EXCESOS DE INASISTENCIAS</label>
                          @else
                          <input class="form-check-input" type="checkbox" value="EI" name="hrp_opc[]" />
                          <label class="form-check-label">EXCESOS DE INASISTENCIAS</label>
                          @endif
                      </div>
                  </td>
                </tr>
  
                <tr>
                  <td>
                      <div class="form-check">
                          @if( in_array('SPC',$info['hrp_opc']) )
                          <input class="form-check-input" type="checkbox" value="SPC" name="hrp_opc[]" checked/>
                          <label class="form-check-label">SUBIO PORNOGRAFIA EN LA CLASE(ONLINE)</label>
                          @else
                          <input class="form-check-input" type="checkbox" value="SPC" name="hrp_opc[]" />
                          <label class="form-check-label">SUBIO PORNOGRAFIA EN LA CLASE(ONLINE)</label>
                          @endif
                      </div>
                  </td>
                  <td>
                      <div class="form-check">
                          @if( in_array('NCT',$info['hrp_opc']) )
                          <input class="form-check-input" type="checkbox" value="NCT" name="hrp_opc[]" checked/>
                          <label class="form-check-label">NO CUMPLIO CON LAS TAREAS</label>
                          @else
                          <input class="form-check-input" type="checkbox" value="NCT" name="hrp_opc[]" />
                          <label class="form-check-label">NO CUMPLIO CON LAS TAREAS</label>
                          @endif
                      </div>
                  </td>
                </tr>
  
                <tr>
                  <td>
                      <div class="form-check">
                          @if( in_array('BRA',$info['hrp_opc']) )
                          <input class="form-check-input" type="checkbox" value="BRA" name="hrp_opc[]" checked/>
                          <label class="form-check-label">BAJO RENDIMIENTO ACADÉMICO</label>
                          @else
                          <input class="form-check-input" type="checkbox" value="BRA" name="hrp_opc[]" />
                          <label class="form-check-label">BAJO RENDIMIENTO ACADÉMICO</label>
                          @endif
                      </div>
                  </td>
                  <td>
                      <div class="form-check">
                          @if( in_array('CHR',$info['hrp_opc']) )
                          <input class="form-check-input" type="checkbox" value="CHR" name="hrp_opc[]" checked/>
                          <label class="form-check-label">CAMBIOS DE HUMOR REPENTINOS</label>
                          @else
                          <input class="form-check-input" type="checkbox" value="CHR" name="hrp_opc[]" />
                          <label class="form-check-label">CAMBIOS DE HUMOR REPENTINOS</label>
                          @endif
                      </div>
                  </td>
                </tr>
  
                <tr>
                  <td>
                      <div class="form-check">
                          @if( in_array('VIEE',$info['hrp_opc']) )
                          <input class="form-check-input" type="checkbox" value="VIEE" name="hrp_opc[]" checked/>
                          <label class="form-check-label SMALL">VIOLENCIA INTRAFAMILIAR, ESCOLAR ETC. (BULLYING, CIBERBULLYING, VIOLENCIA FÍSICA, PSICOLÓGIA, SEXTING)</label>
                          @else
                          <input class="form-check-input" type="checkbox" value="VIEE" name="hrp_opc[]" />
                          <label class="form-check-label SMALL">VIOLENCIA INTRAFAMILIAR, ESCOLAR ETC. (BULLYING, CIBERBULLYING, VIOLENCIA FÍSICA, PSICOLÓGIA, SEXTING)</label>
                          
                          @endif
                      </div>
                  </td>
                </tr>
              </tbody>
            </table>
      </div>
  
      <!------------------------------------------------------------------------->
  
      <div class="row">
          <div class="col-sm">
          </div>
          <div class="col-sm">
            <p class="text-center"><b><u>ACCIONES TOMADAS</u></b></p>
          </div>
          <div class="col-sm">
          </div>
      </div>
  
      <div class="row">
          <div class="col-sm">
              <div class="form-group">
                  <textarea class="form-control" rows="5" name="hrp_acciones" >{{$info['hrp_acciones']}}</textarea>
                </div>
          </div>
      </div>
  
      <div class="row">
          <div class="col-sm">
          </div>
          <div class="col-sm">
            <p class="text-center"><b><u>RECOMENDACIONES</u></b></p>
          </div>
          <div class="col-sm">
          </div>
      </div>
  
      <div class="row">
          <div class="col-sm">
              <div class="form-group">
                  <textarea class="form-control" rows="5" name="hrp_recomendaciones" >{{$info['hrp_recomendaciones']}}</textarea>
                </div>
          </div>
      </div>
  
    <div class="card-footer ml-auto mr-auto">
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
</form>

</div>

@endsection