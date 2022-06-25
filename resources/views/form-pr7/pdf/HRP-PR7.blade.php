<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <style>
        @page {
            margin: 0cm 0cm;
            font-family: Arial;
        }

        body {
            margin: 3cm 2cm 2cm;
        }

        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            text-align: center;
            line-height: 15px;
        }

        header .logo1 img{
            position: fixed;
            top: 0cm;
            left: 2cm;
            right: 0cm;
            height: 2cm;
        }
        header .descripcion p{
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 0cm;
            text-align: center;
            font-size: 10px;
            
        }

        header .logo2 img{
            position: fixed;
            top: 0cm;
            left: 15cm;
            right: 0cm;
            height: 2cm;

        }
        
    </style>
    <main>
        <header>
            <div class="logo1">
                <img src="{{ public_path('img/form/logo-segc.png')}}">
            </div>
            <div class="descripcion">
                <p><b>SUBSECRETARIA DE EDUACION ESTATAL</b>
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
            <div class="logo2">
                <img src="{{public_path('img/rec2.png')}}" >
            </div>
        </header>
        <div class="container">
            <p class="text-center"><b><u>HOJA DE REGISTRO PERSONAL</u></b></p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>NOMBRE DEL ALUMNO</th>
                        <th>TURNO</th>
                    </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{$info['hrp_nombre']}}</td>
                    <td>{{$info['hrp_turno']}}</td>
                  </tr>

                </tbody>
            </table>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>TELEFONO</th>
                        <th>GRADO</th>
                        <th>GRUPO</th>
                        <th>SEXO</th>
                    </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{$info['hrp_telefono']}}</td>
                    <td>{{$info['hrp_grado']}}</td>
                    <td>{{$info['hrp_grupo']}}</td>
                    <td>{{$info['hrp_sexo']}}</td>
                  </tr>

                </tbody>
            </table>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>EDAD</th>
                        <th>NOMBRE DEL TUTOR</th>
                    </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{$info['hrp_edad']}}</td>
                    <td>{{$info['hrp_nombre-tutor']}}</td>
                  </tr>

                </tbody>
            </table>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        
                        <th>TELEFONO DEL TUTOR</th>
                        <th>PSICOLOGO A CARGO</th>
                    </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{$info['hrp_telefono']}}</td>
                    <td>{{$info['hrp_nombre-p']}}</td>
                  </tr>

                </tbody>
            </table>

            <p class="text-center"><b><u>MOTIVO DE CANALIZACIÓN</u></b></p>
            <p class="small text-left">Indicadores que afectan el rendimiento académica o de disiplina de las y los estudiantes.</p>
            
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
                  </tr>                  
                  <tr>
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
                  </tr>
                  <tr>
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
              <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        
                        <th><b><u>ACCIONES TOMADAS</u></b></</th>
                    </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                        {{$info['hrp_acciones']}}
                    </td>
                  </tr>
                </tbody>
            </table>
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        
                        <th><b><u>RECOMENDACIONES</u></b></</th>
                    </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                        {{$info['hrp_recomendaciones']}}
                    </td>
                  </tr>
                </tbody>
            </table>
    
        </div>
    </main>


</body>
</html>