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
          <p class="text-center"><b><u>ACTA ESCOLAR </u></b></p>

          <table class="table table-bordered">
            <thead>
                <tr>
                    <th>{{str_replace(["<br>","<b>","</b>"], ["","",""], $info['hrp_es']);}}</th>
                </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{$info['hrp_alumnos']}}</td>
              </tr>

            </tbody>
        </table>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th><b>Manifesto: </b></th>
                </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{$info['hrp_manifiesto']}}</td>
              </tr>

            </tbody>
        </table>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Y respetar el reglamento escolar vigente, haciéndolas del conocimiento que aplicara la sanción descrita a continuación: </th>
                </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{$info['hrp_reglamento']}}</td>
              </tr>

            </tbody>
        </table>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Cerrando la presente acta, firmando para constancia los que en ella intervinieron.</th>
                </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{$info['hrp_firma']}}</td>
              </tr>

            </tbody>
        </table>

        <table class="table table-bordered text-center">
            <thead>
                
                <tr>
                    <th><b><u>PSIC. RICARDO A. AGUILAR TOLEDO</u></b> 
                        <br>
                         PSICOLOGO A CARGO
                    </th>

                   <th><b><u>CP. MARTIN DE JESUS PIMENTEL GARCIA </u></b> 
                    <br>
                    DIRECTOR ACADEMICO</th>

                </tr>
            </thead>
        </table>
        </div>
    </main>


</body>
</html>