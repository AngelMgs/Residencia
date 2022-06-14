@extends('layouts.layout00')

@section('contenido')

<div class="container mx-auto px-4">
<div class="grid grid-cols-3 gap-4 p-5">
    <div class="shadow-lg bg-green-100 text-green-500 text-lg font-bold text-center p-10 rounded-lg row-span-2">Usuarios: {{$user}}
        <div class="bg-sky-300">
            <img class="object-contain px-4 mx-auto xl:container h-40 w-96" src="{{asset('img/dashboard/dh0.png')}}">
          </div>
    </div>
    <div class="shadow-lg bg-green-100 text-green-500 text-lg font-bold text-center p-10 rounded-lg">Expedientes: {{$record}}
        <div class="bg-sky-300">
            <img class="object-contain h-20 w-48" src="{{asset('img/dashboard/dh1.png')}}">
          </div>
    </div>
    <div class="shadow-lg bg-green-100 text-green-500 text-lg font-bold text-center p-10 rounded-lg row-span-2">Paginas: {{$page}}
        <div class="bg-sky-300">
            <img class="object-contain px-4 mx-auto xl:container h-40 w-96" src="{{asset('img/dashboard/dh2.png')}}">
          </div>
    </div>
    <div class="shadow-lg bg-green-100 text-green-500 text-lg font-bold text-center p-10 rounded-lg">Imagenes:{{$img}}
        <div class="bg-sky-300">
            <img class="object-contain h-20 w-48" src="{{asset('img/dashboard/dh3.png')}}">
          </div>
    </div>
</div>
</div>    
@endsection
