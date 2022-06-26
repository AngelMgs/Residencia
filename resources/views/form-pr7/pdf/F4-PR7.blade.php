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
            <p class="text-right">
                {{$info['hrp_es']}}
            </p>
            <p class="text-right"><b><u>ASUNTO: CANALIZACION</u></b></p>

            <p class="text-left"><b>CENTRO ESPECIALIZADO PARA LA PREVENCIÓN <br>
                Y TRATAMIENTO EN ADICCIONES (CENTRA).          
               </b></p>
            
            <br>

            <p class="text-justify">
                Por este medio nos dirigimos a ustedes para solicitar y agradecer su invaluable apoyo a la comunidad estudiantil de nuestro Estado de Chiapas, así mismo, canalizamos a nuestro alumno el {{$info['hrp_info-g']}}; Turno Vespertino, de la <b>Escuela Preparatoria No. 7 del Estado</b>, con la finalidad de diagnosticar y apoyar al citado educando, a dar seguimiento en su situación particular de encontrarse en el consumo de sustancias nocivas para la salud,
            </p>
            

            <p class="text-justify">
                Sin otro asunto en particular, hago propicia la ocasión para enviarles un cordial saludo.
            </p>

            <br>

            <p class="text-center">
                <b>A T E N T A M E N T E</b>
            </p>

            <table >
                <thead>
                    <tr>
                        <th class="text-center"><u>C.P. MARTIN DE JESUS PIMENTEL GARCIA</u></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th class="text-center"><u>{{$info['hrp_nombre']}}</u></th>
                    </tr>
                </thead>
                <tbody>
                  <tr>
                        <td class="text-center">{{$info['hrp_nombre']}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-center">A L U M N O</td>
                  </tr>
    
                </tbody>
            </table>
            
                  
                



        
        </div>
    </main>


</body>
</html>