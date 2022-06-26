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
            margin: 2cm 3cm 2cm ;
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
          <p class="text-center"><b><u>HISTORIAL CLINICO</u></b></p>
          
          <div class="row">      
            <div class="col-sm text-letf">
             <b>I. DATOS PERSONALES</b>
            </div>
          </div>
          <br>
          <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NOMBRE DEL ALUMNO</th>
                </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{$info['hrp_nombre']}}</td>
              </tr>

            </tbody>
        </table>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>EDAD</th>
                    <th>SEXO</th>
                    <th>ESTADO CIVIL</th>
                </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{$info['hrp_edad']}}</td>
                <td>{{$info['hrp_sexo']}}</td>
                <td>{{$info['hrp_EC']}}</td>
              </tr>

            </tbody>
        </table>
    
        <table class="table table-bordered">
          <thead>
              <tr>
                  <th>ESCOLARIDAD</th>
                  <th>LUGAR Y FECHA DE NACIMIENTO</th>
              </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{$info['hrp_escolarida']}}</td>
              <td>{{$info['hrp_lfn']}}</td>
            </tr>

          </tbody>
      </table>

      <table class="table table-bordered">
        <thead>
            <tr>
                <th>DIRECCION ACTUAL</th>
                <th>TELEFONO</th>
            </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{$info['hrp_direccion-a']}}</td>
            <td>{{$info['hrp_telefono']}}</td>
          </tr>

        </tbody>
    </table>

    <table class="table table-bordered">
      <thead>
          <tr>
              <th>DIRECCION DE LA FAMILIA</th>
              <th>CIUDAD</th>
          </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{$info['hrp_direccion-f']}}</td>
          <td>{{$info['hrp_ciudad']}}</td>
        </tr>

      </tbody>
    </table>
    <div class="row">      
      <div class="col-sm text-letf">
        HA RECIBIDO ALGÚN TIPO DE TRATAMIENTO PSICOLÓGICO O PSIQUIÁTRICO (SI, NO):<b>{{$info['hrp_rtp']}}</b> 
      </div>
    </div>
    
    <br>

    <div class="row">      
      <div class="col-sm text-letf">
       <b>II. MOTIVO DE CONSULTA</b>
       <p class="text-justify"><u>{{$info['hrp_motivos']}}</u></p>
      </div>
    </div>
    <br>
    <div class="row">      
      <div class="col-sm text-letf">
       <b>III. DEFINICION DEL PROBLEMA</b>
      </div>
    </div>
    
    <div class="row">      
      <div class="col-sm text-letf">

       <ul>
        <li>EVALUACION<br><p class="text-justify"><u>{{$info['hrp_evaluacion']}}</u></p></li>
        <li>CAUSA<br><p class="text-justify"><u>{{$info['hrp_causa']}}</u></p></li>
        <li>ACCIONES REALIZADAS EN BUSCA DE SOLUCION<br><p class="text-justify"><u>{{$info['hrp_arbs']}}</u></p></li>
        <li>IMPLICACIONES<br><p class="text-justify"><u>{{$info['hrp_implicaciones']}}</u></p></li>
      </ul>
       
      </div>
    </div>
    <br>
    <div class="row">      
      <div class="col-sm text-letf">
       <b>IV. ESTRUCTURA Y FUNCIONALIDAD FAMILIAR</b>
      </div>
    </div>
    <br>
    <div class="row">      
      <div class="col-sm text-letf">
       <b>a. FAMILIOGRAMA (TABLA)</b>
      </div>
    </div>
    <table class="table table-bordered">
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
          <td>{{$inf['nombre'][$i]}}</td>
          <td> {{$inf['parentesco'][$i]}}</td>
          <td> {{$inf['edad'][$i]}}</td>
          <td> {{$inf['escolarida'][$i]}}</td>
          <td> {{$inf['ocupacion'][$i]}}</td>
        </tr>
        @endfor
      </tbody>
    </table>
    <br>
    <table class="table table-bordered">
      <thead>
          <tr>
              <th><b>b. FAMILIOGRAMA</b></th>
          </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{$info['hrp_fg']}}</td>
        </tr>
      </tbody>
    </table>

    <div class="row">      
      <div class="col-sm text-letf">
       <b>V. HISTORIA PERSONAL</b>
      </div>
    </div>
    <div class="row">      
      <div class="col-sm text-letf">

       <ul>
        <li>EMBARAZO<br><p class="text-justify"><u>{{$info['hrp_emb']}}</u></p></li>
        <li>INFANCIA<br><p class="text-justify"><u>{{$info['hrp_inf']}}</u></p></li>
        <li>ADOLESCENCIA<br><p class="text-justify"><u>{{$info['hrp_ado']}}</u></p></li>
        <li>ESCOLAR<br><p class="text-justify"><u>{{$info['hrp_esc']}}</u></p></li>
      </ul>
       
      </div>
    </div>
<br>
    <div class="row">      
      <div class="col-sm text-letf">
       <b>VI. OBSERVACION</b>
      </div>
    </div>
    <div class="row">      
      <div class="col-sm text-letf">

       <ul>
        <li>EMBARAZO<br><p class="text-justify"><u>{{$info['hrp_fsa']}}</u></p></li>
        <li>LENGUA NO VERBAL<br><p class="text-justify"><u>{{$info['hrp_lnv']}}</u></p></li>
        <li>ACTITUD<br><p class="text-justify"><u>{{$info['hrp_ast']}}</u></p></li>
      </ul>
       
      </div>
    </div>
<br>
    <div class="row">      
      <div class="col-sm text-letf">
       <b>VII. DIMENSIONES</b>
      </div>
    </div>
    <div class="row">      
      <div class="col-sm text-letf">

       <ul>
        <li>COMPORTAMENTAL<br><p class="text-justify"><u>{{$info['hrp_com']}}</u></p></li>
        <li>AFECTIVA<br><p class="text-justify"><u>{{$info['hrp_afe']}}</u></p></li>
        <li>SOCIAL<br><p class="text-justify"><u>{{$info['hrp_soc']}}</u></p></li>
      </ul>
       
      </div>
    </div>

    <div class="row">      
      <div class="col-sm text-letf">
       <b>VIII. HISTORIA MEDICA</b>
      </div>
    </div>
    <div class="row">      
      <div class="col-sm text-letf">

       <ul>
        <li>HISTORIA MEDICA<br><p class="text-justify"><u>{{$info['hrp_hmd']}}</u></p></li>
      </ul>
       
      </div>
    </div>

    <div class="row">      
      <div class="col-sm text-letf">
       <b>IX. SITUACION ACTUAL</b>
      </div>
    </div>
    <div class="row">      
      <div class="col-sm text-letf">

       <ul>
        <li>ASPECTO INTELECTUAL<br><p class="text-justify"><u>{{$info['hrp_ai']}}</u></p></li>
        <li>LENGUA HABLADA<br><p class="text-justify"><u>{{$info['hrp_lha']}}</u></p></li>
        <li>UTILIZA ALGUNAS EXPRESIONES<br><p class="text-justify"><u>{{$info['hrp_uaex']}}</u></p></li>
        <li>ESCRITURA<br><p class="text-justify"><u>{{$info['hrp_escr']}}</u></p></li>
        <li>LECTURA<br><p class="text-justify"><u>{{$info['hrp_lect']}}</u></p></li>
        <li>ESCUCHA Y EXPRESA DE MANERA CORRECTA/CLARA<br><p class="text-justify"><u>{{$info['hrp_eemc']}}</u></p></li>
      </ul>
       
      </div>
    </div>
    <br>
    <div class="row">      
      <div class="col-sm text-letf">
       <b>X INSTRUMENTOS UTILIZADOS</b>
      </div>
    </div>

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

        <br>

    <div class="row">      
      <div class="col-sm text-letf">
       <b>XI PRUEBAS Y ANALISIS</b>
       <p class="text-justify"><u>{{$info['hrp_pya']}}</u></p>
      </div>
    </div>

    <div class="row">      
      <div class="col-sm text-letf">
       <b>XII OBSERVACIONES Y/O RECOMENDACIONES</b>
       <p class="text-justify"><u>{{$info['hrp_oyr']}}</u></p>
      </div>
    </div>
  



    </div>
    </main>


</body>
</html>