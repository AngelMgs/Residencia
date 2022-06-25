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
          <p class="text-center"><b><u>RED DE APOYO E INTITUCIONES EXTERNAS</u></b></p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Dependencia</th>
                        <th>Dirección</th>
                        <th>Teléfonos</th>
                    </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>INSTITUTO MEXICANO 
                        DEL SEGURO SOCIAL</td>
                    <td>{{$info['hrp_d1']}}</td>
                    <td>{{$info['hrp_t1']}}</td>
                  </tr>

                  <tr>
                    <td>INJUVEMP INSTITUTO 
                        MUNICIPAL DE LA JUVENTUD 
                        Y DEL EMPRENDIMIENTO</td>
                    <td>{{$info['hrp_d2']}}</td>
                    <td>{{$info['hrp_t2']}}</td>
                  </tr>

                  <tr>
                    <td>CENTRO DE INTEGRACION 
                        JUVENIL</td>
                    <td>{{$info['hrp_d3']}}</td>
                    <td>{{$info['hrp_t3']}}</td>
                  </tr>

                  <tr>
                    <td>CENTRO PARA LA 
                        PREVENCIÓN Y 
                        TRATAMIENTO EN 
                        ADICCIONES (CENTRA)</td>
                    <td>Carretera  internacional Berriozábal </td>
                    <td>961-2078007</td>
                  </tr>

                  <tr>
                    <td>CENTROS UNEME-CAPA</td>
                    <td>{{$info['hrp_d4']}}</td>
                    <td>{{$info['hrp_t4']}}</td>
                  </tr>

                  <tr>
                    <td>CENTROS UNEME CISAMEN</td>
                    <td>{{$info['hrp_d5']}}</td>
                    <td>{{$info['hrp_t5']}}</td>
                  </tr>

                  <tr>
                    <td>CENTRO ESTATAL DE LA 
                        PREVENCIÓN SOCIAL DE LA 
                        VIOLENCIA Y 
                        PARTICIPACIÓN CIUDADANA DEL ESTADO 
                        DE CHIAPAS</td>
                    <td>{{$info['hrp_d6']}}</td>
                    <td>{{$info['hrp_t6']}}</td>
                  </tr>

                </tbody>
            </table>

            

            <p class="text-center">SECRETARIO ACADEMICO: LIC. FELIPE DE JESUS NAVA ALVAREZ</p>
    
        </div>
    </main>


</body>
</html>