@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

      <div class="col-sm">
        <div class="text-center"><img src="{{asset('img/form/logo-segc.png')}}" alt=""></div>  
      </div>

      <div class="col-sm">
        <p class="text-center"><b>SUBSECRETARIA DE EDUACION ESTATAL</b>
        DIRECCIÓN DE EDUACIÓN MEDIA
        DEPARTAMENTO PSICOPEDAGÓGICO
        ESCUELA PREPARATORIA NUM. 7 DEL ESTADO 
        CLAVE: 07EBH00899Z T/M CLAVE: 07EBH0067N T/M 
        </p>
      </div>

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
                <select id="hrp-turno" class="form-select" aria-label="Default select example">
                    <option value="MATUTINO">MATUTINO</option>
                    <option value="VESPERTINO">VESPERTINO</option>
                </select>
            </div>    
        </div>
    </div>

    <div class="row">
        <label >NOMBRE DEL ALUMNO:</label>
        <div class="col-sm-12">
          <input type="text" id="hrp-nombre" class="form-control">
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <label class="form-label">TELEFONO:</label>
            <input type="number" class="form-control" id="hrp-telefono">
        </div>

        <div class="col-md-3">
            <label class="form-label">GRADO:</label>
            <input type="text" class="form-control" id="hrp-grado">
        </div>

        <div class="col-md-3">
            <label class="form-label">GRUPO:</label>
            <input type="text" class="form-control" id="hrp-grupo">
        </div>

        <div class="col-md-3">
            <label class="form-label">SEXO:</label>
            <select id="hrp-sexo" class="form-select" aria-label="Default select example">
                <option value="MASCULINO">MASCULINO</option>
                <option value="FEMENINO">FEMENINO</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <label class="form-label">EDAD:</label>
            <input type="number" class="form-control" id="hrp-edad">
        </div>

        <div class="col-md-6">
            <label class="form-label">NOMBRE DEL TUTOR:</label>
            <input type="text" class="form-control" id="hrp-nombre-tutor">
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <label class="form-label">TELEFONO DEL TUTOR:</label>
            <input type="number" class="form-control" id="hrp-telefono" autofocus>
        </div>

        <div class="col-md-6">
            <label class="form-label">PSICOLOGO A CARGO:</label>
            <input type="text" class="form-control" id="hrp-nombre-tutor">
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
                        <input class="form-check-input" type="checkbox" value="" id="hrp-opc[]"/>
                        <label class="form-check-label">ABUSO SEXUAL</label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="hrp-opc[]"/>
                        <label class="form-check-label">IDEACIÓN,PLANEACIÓN E INTENTO SUICIDA</label>
                    </div>
                </td>
              </tr>

              <tr>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="hrp-opc[]"/>
                        <label class="form-check-label">CONSUMO DE SUSTANCIAS NOCIVAS</label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="hrp-opc[]"/>
                        <label class="form-check-label">POSIBLE DEPRESION</label>
                    </div>
                </td>
              </tr>
              
              <tr>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="hrp-opc[]"/>
                        <label class="form-check-label">PROBLEMAS FAMILIARES</label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="hrp-opc[]"/>
                        <label class="form-check-label">BAJO RENDIMIENTO ACADÉMICO</label>
                    </div>
                </td>
              </tr>

              <tr>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="hrp-opc[]"/>
                        <label class="form-check-label">PROBLEMAS DE APRENDIZAJE TDA Y TDHA</label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="hrp-opc[]"/>
                        <label class="form-check-label">ALTOS INDICES DE REPROBACIÓN</label>
                    </div>
                </td>
              </tr>

              <tr>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="hrp-opc[]"/>
                        <label class="form-check-label">PROBLEMAS EMOCIONALES</label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="hrp-opc[]"/>
                        <label class="form-check-label">EXCESOS DE INASISTENCIAS</label>
                    </div>
                </td>
              </tr>

              <tr>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="hrp-opc[]"/>
                        <label class="form-check-label">SUBIO PORNOGRAFIA EN LA CLASE(ONLINE)</label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="hrp-opc[]"/>
                        <label class="form-check-label">NO CUMPLIO CON LAS TAREAS</label>
                    </div>
                </td>
              </tr>

              <tr>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="hrp-opc[]"/>
                        <label class="form-check-label">BAJO RENDIMIENTO ACADÉMICO</label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="hrp-opc[]"/>
                        <label class="form-check-label">CAMBIOS DE HUMOR REPENTINOS</label>
                    </div>
                </td>
              </tr>

              <tr>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="hrp-opc[]"/>
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
                <textarea class="form-control" rows="5" id="hrp-acciones"></textarea>
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
                <textarea class="form-control" rows="5" id="hrp-recomendaciones"></textarea>
              </div>
        </div>
    </div>


</div>

@endsection