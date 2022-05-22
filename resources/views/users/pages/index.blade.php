@extends('layouts.layout00')

@section('contenido')

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>


<div class="container mx-auto px-4">
    <!-- component -->
    
     
    @if (session('success'))
    <div id="alert1" class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{ session('success') }}</strong>
        <button id ="btn1"type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="bg-white shadow-md rounded my-7">
        <header class="px-5 py-4 border-b border-gray-100 ">
            <div class="font-semibold text-gray-800">Paginas</div>
            <div class="px-auto py-4 border-b border-gray-100 ">
                <button type="button" class="text-blue bg-green-300 hover:bg-green-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center mr-3 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                data-toggle="modal" data-target="#exampleModal">
                    Registrar Pagina
                </button>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <form data-action="{{route('pages.store') }}" method="POST" id="add-page-form"  enctype="multipart/form-data">
                            @csrf  
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Pagina Nueva</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        
                        <div class="modal-body">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label  class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Nombre Del Host: 
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name ="name_host" type="text" placeholder="Host">
                            </div>

                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">Agregar</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
            </div>
        </header>
        
        
        

      <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
        <thead>
          <tr>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">ID</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Estado</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Host</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light"></th>
        </tr>
        </thead>
        <tbody>
        @forelse ($pages as $page)
        <tr class="hover:bg-grey-lighter">
            <td class="py-4 px-6 border-b border-grey-light">{{ $page->id }}</td>
            <td class="py-4 px-6 border-b border-grey-light">
                @if ($page->status == True)
                <span class="badge badge-info">Publico</span>
                @else
                <span class="badge badge-danger">Privado</span>   
                @endif
            </td>
            <td class="py-4 px-6 border-b border-grey-light">{{ $page->name }}</td>   
            <td class="py-4 px-6 border-b border-grey-light">
                @can('pages_index')  
                <a href="{{ route('PageRedirect', $page->name) }}" class="text-grey-lighter font-bold py-2 px-4 rounded text-xs bg-blue-300 hover:bg-green-dark">Ir</a>
                @endcan
                @can('pages_edit')  
                <a href="{{ route('PageRedirect', $page->name) }}" class="text-grey-lighter font-bold py-2 px-4 rounded text-xs bg-blue-300 hover:bg-green-dark">Ir</a>
                @endcan 
            </td>
        </tr>
        @empty
        <tr class="hover:bg-grey-lighter">
            <td class="py-2 px-3 border-b border-grey-light">Sin Registros</td>
        </tr>    
        @endforelse    
        </tbody>
      </table>
    </div>
    <div class="bg-white shadow-md rounded my-7">
    {{$pages->links('pagination::bootstrap-4')  }}
    </div>
</div>

<script>
    $(document).ready(function(){

var form = '#add-page-form';

$(form).on('submit', function(event){
    event.preventDefault();

    var url = $(this).attr('data-action');

    $.ajax({
        url: url,
        method: 'POST',
        data: new FormData(this),
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success:function(response)
        {
            $(form).trigger("reset");
            alert(response.success)
        },
        error: function(response) {
            alert()
        }
    });
});

});
</script>

@endsection