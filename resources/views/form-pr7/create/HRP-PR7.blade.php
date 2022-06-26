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

    <input  name="name" type="hidden" value="HojaDeRegitroPersonal">
    <input  name="record_id" type="hidden" value="{{$record_id}}">
    <input class="form-check-input" type="hidden"  name="hrp_opc[]"/>

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
                    <option value="Matutino">Matutino</option>
                    <option value="Vespertino">Vespertino</option>
                </select>
            </div>    
        </div>
    </div>
    
    <div class="row">
        <label >NOMBRE DEL ALUMNO:</label>
        <div class="col-sm-12">
          <input type="text" name="hrp_nombre" class="form-control">
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <label class="form-label">TELEFONO:</label>
            <input type="number" class="form-control" name="hrp_telefono">
        </div>

        <div class="col-md-3">
            <label class="form-label">GRADO:</label>
            <input type="text" class="form-control" name="hrp_grado">
        </div>

        <div class="col-md-3">
            <label class="form-label">GRUPO:</label>
            <input type="text" class="form-control" name="hrp_grupo">
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
            <label class="form-label">EDAD:</label>
            <input type="number" class="form-control" name="hrp_edad">
        </div>

        <div class="col-md-6">
            <label class="form-label">NOMBRE DEL TUTOR:</label>
            <input type="text" class="form-control" name="hrp_nombre-tutor">
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <label class="form-label">TELEFONO DEL TUTOR:</label>
            <input type="number" class="form-control" name="hrp_telefono" autofocus>
        </div>

        <div class="col-md-6">
            <label class="form-label">PSICOLOGO A CARGO:</label>
            <input type="text" class="form-control" name="hrp_nombre-p">
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
    
    <div class="row">
        <table class="table table-bordered">
            <tbody>
              <tr>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="AS" name="hrp_opc[]"/>
                        <label class="form-check-label">ABUSO SEXUAL</label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="IPIS" name="hrp_opc[]"/>
                        <label class="form-check-label">IDEACIÓN,PLANEACIÓN E INTENTO SUICIDA</label>
                    </div>
                </td>
              </tr>

              <tr>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="CSN" name="hrp_opc[]"/>
                        <label class="form-check-label">CONSUMO DE SUSTANCIAS NOCIVAS</label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="PD" name="hrp_opc[]"/>
                        <label class="form-check-label">POSIBLE DEPRESION</label>
                    </div>
                </td>
              </tr>
              
              <tr>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="PF" name="hrp_opc[]"/>
                        <label class="form-check-label">PROBLEMAS FAMILIARES</label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="BRA" name="hrp_opc[]"/>
                        <label class="form-check-label">BAJO RENDIMIENTO ACADÉMICO</label>
                    </div>
                </td>
              </tr>

              <tr>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="PATT" name="hrp_opc[]"/>
                        <label class="form-check-label">PROBLEMAS DE APRENDIZAJE TDA Y TDHA</label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="PR" name="hrp_opc[]"/>
                        <label class="form-check-label">ALTOS INDICES DE REPROBACIÓN</label>
                    </div>
                </td>
              </tr>

              <tr>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="PE" name="hrp_opc[]"/>
                        <label class="form-check-label">PROBLEMAS EMOCIONALES</label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="EI" name="hrp_opc[]"/>
                        <label class="form-check-label">EXCESOS DE INASISTENCIAS</label>
                    </div>
                </td>
              </tr>

              <tr>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="SPC" name="hrp_opc[]"/>
                        <label class="form-check-label">SUBIO PORNOGRAFIA EN LA CLASE(ONLINE)</label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="NCT" name="hrp_opc[]"/>
                        <label class="form-check-label">NO CUMPLIO CON LAS TAREAS</label>
                    </div>
                </td>
              </tr>

              <tr>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="BRA" name="hrp_opc[]"/>
                        <label class="form-check-label">BAJO RENDIMIENTO ACADÉMICO</label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="CHR" name="hrp_opc[]"/>
                        <label class="form-check-label">CAMBIOS DE HUMOR REPENTINOS</label>
                    </div>
                </td>
              </tr>

              <tr>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="VIEE" name="hrp_opc[]"/>
                        <label class="form-check-label SMALL">VIOLENCIA INTRAFAMILIAR, ESCOLAR ETC. (BULLYING, CIBERBULLYING, VIOLENCIA FÍSICA, PSICOLÓGIA, SEXTING)</label>
                    </div>
                </td>
              </tr>
            </tbody>
          </table>
    </div>

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
                <textarea class="form-control" rows="5" name="hrp_acciones"></textarea>
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
                <textarea class="form-control" rows="5" name="hrp_recomendaciones"></textarea>
              </div>
        </div>
    </div>
    
    <div class="card-footer ml-auto mr-auto">
        <button class="text-grey-lighter font-bold py-3 px-6 rounded text-xs bg-blue-300 hover:bg-blue-dark">Guardar</button>
      </div>
</form>

</div>

@endsection