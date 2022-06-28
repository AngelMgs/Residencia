@extends('layouts.app')

@section('content')
<div class="container">
    <script>
        $(function() {
            var contador = 1;
            $("#add_m").click(function() {
                contador++;
                $("#add_m1").append('<div class="row border" id="newRow_'+contador+'">'+
                                    '<div class="col-sm">'+
                                    '    <input type="text" name="hrp_dep[]" class="form-control" placeholder="Dependencia">'+
                                    '</div>'+
                                    '<div class="col-sm">'+
                                        '<input type="text" name="hrp_dir[]" class="form-control" placeholder="Dirección">'+
                                    '</div>'+
                                    '<div class="col-sm">'+
                                        '<input type="text" name="hrp_tel[]" class="form-control" placeholder="Teléfonos">'+
                                    '</div>'+
                                    '<div class="col-sm">'+
                                        '<button type="button" class="delete_m btn btn-outline-secondary" id="'+contador+'">Eliminar</button>'+
                                    '</div>'+
                                    '</div>'
                                );
            });
      
            $(document).on('click', '.delete_m', function() {
                var id = $(this).attr("id");
                console.log(id);

                $("#newRow_"+id).remove();
            });
            
        });
</script>

<form action="{{ route('forms2.store') }}" method="post"> 
    @csrf
    <div class="row">

        <input  name="name" type="hidden" value="REDDEAPOYOEINTITUCIONESEXTERNAS">

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

    <br>

    

    <div class="row">
        <div class="col-sm">
            <p class="text-center"><b><u>RED DE APOYO E INTITUCIONES EXTERNAS </u></b></p>
        </div>
    </div>
    <div class="row">
    </div>  
    <br> 
        
    <div class="row border">
        <div class="col-sm">
            Dependencia
        </div>
        <div class="col-sm">
            Dirección
        </div>
        <div class="col-sm">
            Teléfonos
        </div>
        <div class="col-sm">
            
        </div>
    </div>

    <div class="row border">
        <div class="col-sm">
            <input type="text" name="hrp_dep[]" class="form-control" placeholder="Dependencia">
        </div>
        <div class="col-sm">
            <input type="text" name="hrp_dir[]" class="form-control" placeholder="Dirección">
        </div>
        <div class="col-sm">
            <input type="text" name="hrp_tel[]" class="form-control" placeholder="Teléfonos">
        </div>
        <div class="col-sm">
        </div>
    </div>
    <div class="row border" id="add_m1">
    </div>
    
    <div class="row boder">
        <button type="button" id="add_m" class="text-white-lighter font-bold py-3 px-6 rounded text-xs bg-gray-300 hover:bg-gray-dark">Agregar Dependencia</button>
    </div>

    <div class="card-footer ml-auto mr-auto">
        <button class="text-grey-lighter font-bold py-3 px-6 rounded text-xs bg-blue-300 hover:bg-blue-dark">Guardar</button>
    </div>  

</form>


</div>

@endsection