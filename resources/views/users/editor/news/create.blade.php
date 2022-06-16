@extends('layouts.layout00')

@section('contenido')
<div class="content mt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="block p-6 rounded-lg shadow-full bg-white max-h-full max-w-full">
                    <header class="px-5 py-4 border-b border-gray-100">
                        <div class="font-semibold text-gray-800">Agregar Nuevo Anuncio</div>
                    </header>
                    <div class="form-group mb-6">
                      <!-- Button trigger modal -->
                      <button type="button"
                      class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                      data-bs-toggle="modal" data-bs-target="#exampleModalScrollable" id="modal12">
                      Seleccion una Imagen de la Galeria
                      </button>

                      <!-- Modal -->
                      <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                      id="exampleModalScrollable" tabindex="-1" aria-labelledby="exampleModalScrollableLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable relative w-auto pointer-events-none">
                      <div
                          class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                          <div
                          class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                          <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                              Galeria
                          </h5>
                          <button type="button"
                              class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                              data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>

                          <div class="modal-body relative p-4 ">

                              <div class="px-3 grid gap-6 grid-cols-3 grid-rows-auto">
                                  

                                      @forelse ($files as $file)
                                      
                                      <div class="mb-4">
                                          <img
                                          src="{{asset($file->url)}}"
                                          alt="Table Full of Spices"
                                          class="w-70 mb-2 mb-md-6 shadow-1-strong rounded"/>
                                          
                                          @can('editor_index')
                                          <button class="
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
                                            ease-in-out" id="button-img-{{$file->id}}" value="{{$file->id}}" 
                                            
                                            onclick=" id=getElementById('button-img-{{$file->id}}').value; 
                                            getElementById('img-url').value = id;
                                            myElement= getElementById('modal12');
                                            myElement.className = 'inline-block px-6 py-2.5 bg-yellow-300 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-yellow-300 hover:shadow-lg focus:bg-yellow-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-300 active:shadow-lg transition duration-150 ease-in-out';
                                            myElement.innerHTML = 'Imagen Seleccionada';
                                            "

                                            type="submit" data-bs-dismiss="modal"> Seleccionar</button>  
                                          @endcan
                                      </div>
                                      @empty
                                      <div class="flex flex-wrap w-1/3">
                                          <div class="w-full p-1 md:p-2">
                                              <div class="max-w-sm rounded overflow-hidden shadow-lg">
                                                  <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Galeria Vacia</h5>
                                              </div>
                                          </div>
                                        </div>
                                       
                                      @endforelse
                                      

                                      
                              </div>
                            </div>
                          

                          <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                            <button type="button"
                                class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                                data-bs-dismiss="modal">
                                Cancelar
                            </button>
                          </div>
                      </div>
                      </div>
                      </div>
                    </div>

                    <form action="{{ route('news.store') }}" method="post" class="form-horizontal" id="form1">
                        @csrf

                        <input type="hidden" id="img-url" name="img_url">

                        <div class="form-group mb-6">

                            <input name="title" type="text" class="form-control block
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
                              placeholder="Titulo">
                          </div>

                          
                          <div class="form-group mb-6">
                            <textarea
                            name="body"
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
                          ></textarea>
                          </div>

                          <div class="form-group mb-6">

                            <div class="accordion-item bg-white border border-gray-200">
                              <h2 class="accordion-header mb-0" id="headingTwo">
                                <button class="
                                  accordion-button
                                  collapsed
                                  relative
                                  flex
                                  items-center
                                  w-full
                                  py-4
                                  px-5
                                  text-base text-gray-800 text-left
                                  bg-white
                                  border-0
                                  rounded-none
                                  transition
                                  focus:outline-none
                                " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                  aria-controls="collapseTwo">
                                  Agregar Enlace
                                </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body py-4 px-5">
                                  <div class="form-group mb-6">
                                    <div class="grid grid-cols-2 gap-4">
                                      <div class="form-group mb-6">
                                        <input name="link_name" type="text" class="form-control 
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
                                          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput123"
                                          aria-describedby="emailHelp123" placeholder="Nombre del Tipo de Enlace:(ejm. ver video, ir al articulo) ">
                                      </div>

                                      <div class="form-group mb-6">
                                        <input type="text" name="link_url" class="form-control
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
                                          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput124"
                                          aria-describedby="emailHelp124" placeholder="Enlace: ejm. https://scholar.google.com/">
                                      </div>
                                    </div>
                                  </div>
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
                            ease-in-out">Agregar Nuevo Evento</button> 
                          
                      
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
  function miFunc() {
    id = document.getElementById("button-img");
    alert(id.document);
  }
</script>

@endsection