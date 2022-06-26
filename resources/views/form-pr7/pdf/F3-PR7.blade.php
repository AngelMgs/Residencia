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
                {{$info['hrp_es2']}}
            </p>
            <p class="text-right"><b><u>ASUNTO: SOLICITUD DE REQUERIMIENTO</u></b></p>

            <p class="text-left"><b>CP. MARTIN DE JESUS PIMENTEL GARCIA <br>
                DIRECTOR DE LA PREPARATORIA N°7 DEL ESTADO
            </b></p>

            <p class="text-justify">
                POR MEDIO DE LA PRESENTA RECIBA UN COORDIAL SALUD Y DE LA MANERA MAS ATENTA SOLICITO A USTED, LO SIGUIENTE.
                {{$info['hrp_solicitud']}}

                <br>
                <br>
                {{$info['hrp_es']}} {{$info['hrp_realizacion']}}
            </p>

        

        <div class="row">      
            <div class="col-sm text-letf">
              NO DUDANDO DE SU APOYO LE AGRADECEMOS.
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="col-sm">
            <p class="text-center">
                <b>_____________________________________________</b><br>
                <b>COORDINADOR DEL DEPARTAMENTO PSICOPEDAGÓGICO <br>
                LIC. RICARDO A. AGUILAR TOLEDO <br></b>
            </p>
        </div>



        
        </div>
    </main>


</body>
</html>