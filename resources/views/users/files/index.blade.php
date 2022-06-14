@extends('layouts.layout00')

@section('contenido')

<div class=" bg-white  mx-2 my-auto">
    <div class="bg-white shadow-md rounded my-7">
        <header class="px-5 py-4 border-b border-gray-100">
            <div class="font-semibold text-black-300 text-2xl">Galeria</div>
        </header>
    @if (session('success'))
    <div id="alert1" class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{ session('success') }}</strong>
        <button id ="btn1"type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
<div class="px-3 grid gap-6 grid-cols-3 grid-rows-auto">
    <!--Card 1-->
    @forelse ($files as $file)
    <div class="max-w-auto bg-white rounded overflow-hidden shadow-lg">
        <div class="flex justify-between items-center">
            @can('record_destroy')
                <div class="justify-center">
                    <form action="/files/{{$file->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <button>
                            <svg class="w-8 h-8 hover:text-red-600 rounded-full hover:bg-red-100 p-1"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                </path>
                            </svg>
                        </button>
                    </form>
                </div>    
                @endcan
        </div>
        <img
        src="{{asset($file->url)}}"
        alt="Table Full of Spices"
        class="w-70 mb-2 mb-md-6 shadow-1-strong rounded "
      />
      
      
    </div> 
    @empty
    <div class="max-w-sm bg-white rounded overflow-hidden shadow-lg">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Galeria Vacia</h5>
    </div> 
    @endforelse 
</div>

</div>
<div class="bg-white shadow-md rounded my-1">
    {{ $files->links(('pagination::bootstrap-4') ) }}
</div>
@endsection