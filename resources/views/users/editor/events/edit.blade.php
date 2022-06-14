@extends('layouts.layout00')

@section('contenido')
<div class="content mt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="block p-6 rounded-lg shadow-full bg-white max-h-full max-w-full">
                    <form action="/events/{{$id}}" method="post" class="form-horizontal" id="form1">
                        @csrf
                        @method('put')
                        <div class="form-group mb-6">

                            <input name="title" value="{{$event->title}}" type="text" class="form-control block
                              w-full
                              px-3
                              py-1.5
                              text-base
                              font-normal
                              text-gray-700
                              bg-white bg-clip-padding
                              border border-solid border-gray-300
                              rounded
                              transition
                              ease-in-out
                              m-0
                              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7"
                              placeholder="Titulo" >
                          </div>

                          
                          <div class="form-group mb-6">
                            <textarea
                            name="description" 
                            class="
                              form-control
                              block
                              w-full
                              px-3
                              py-1.5
                              text-base
                              font-normal
                              text-gray-700
                              bg-white bg-clip-padding
                              border border-solid border-gray-300
                              rounded
                              transition
                              ease-in-out
                              m-0
                              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                            "
                            id="exampleFormControlTextarea13"
                            rows="3"
                            placeholder="Descripcion"
                            >{{$event->description}}</textarea>
                          </div>

                          <div class="grid grid-cols-2 gap-4">
                            <div class="form-group mb-6">
                              
                                <div class="flex items-center justify-center">
                                    <div class="datepicker relative form-floating mb-3 xl:w-96" data-mdb-toggle-button="false">
                                      <input type="text" name="start" value="{{  DateTime::createFromFormat('Y-m-d', strtoupper($event->start))->format('d/m/Y')  }}"
                                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        placeholder="Seleccion la Fecha" />
                                      <label for="floatingInput" class="text-gray-700">Seleccione Fecha de Inicio del Evento</label>
                                      <button class="datepicker-toggle-button" data-mdb-toggle="datepicker">
                                        <i class="fas fa-calendar datepicker-toggle-icon"></i>
                                      </button>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group mb-6">

                                <div class="flex items-center justify-center">
                                    <div class="datepicker relative form-floating mb-3 xl:w-96" data-mdb-toggle-button="false">
                                      <input type="text" name="end" value="{{ DateTime::createFromFormat('Y-m-d', strtoupper($event->end))->format('d/m/Y') }}"
                                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        placeholder="Seleccion la Fecha" />
                                      <label for="floatingInput" class="text-gray-700">Seleccione Fecha Final del Evento</label>
                                      <button class="datepicker-toggle-button" data-mdb-toggle="datepicker">
                                        <i class="fas fa-calendar datepicker-toggle-icon"></i>
                                      </button>
                                    </div>
                                </div>
                                
                            </div>
                          </div>

                          
                          <button type="submit" class="
                            w-full
                            px-6
                            py-2.5
                            bg-blue-600
                            text-white
                            font-medium
                            text-xs
                            leading-tight
                            uppercase
                            rounded
                            shadow-md
                            hover:bg-blue-700 hover:shadow-lg
                            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                            active:bg-blue-800 active:shadow-lg
                            transition
                            duration-150
                            ease-in-out">Actualizar</button> 
                          
                      
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection