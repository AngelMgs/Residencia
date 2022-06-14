<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.css">

   
    

    <link rel="dns-prefetch" href="//unpkg.com" />
	<link rel="dns-prefetch" href="//cdn.jsdelivr.net" />

    <link rel="stylesheet" href="{{asset('css/style02.css')}}">
    
	<link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

   
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/locales-all.js"></script>
    
    
    <title>Estudiantes</title>
</head>
<body>
    <header>
       
          <div class="navbar">
            <div class="logo"><a href="/estudiantes"><img src="{{asset('img/rec.png')}}" alt=""></a></div>  
          </div>
       
    </header>

    <nav>
        <a href="#">Inicio</a>
        <a href="#">Eventos</a>
        <a href="#">Noticias</a>
    </nav>

    <div class="row_7">
        <section>
            <div class="split_img flex">
                <div class="flex justify-center">
                <div id="carouselExampleCaptions" class="carousel slide relative" data-bs-ride="carousel">
                    <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                    
                    @isset($nu)
                        <button
                        type="button"
                        data-bs-target="#carouselExampleCaptions"
                        data-bs-slide-to="0"
                        class="active"
                        aria-current="true"
                        aria-label="Slide 1"
                        ></button>
                    
                        @for ($i = 1; $i <= $nu; $i++)
                            <button
                            type="button"
                            data-bs-target="#carouselExampleCaptions"
                            data-bs-slide-to="{{$i}}"
                            aria-label="Slide {{($i+1)}}"></button>    
                        @endfor

                    @endisset
                    
                    </div>

                    <div class="carousel-inner active relative w-full overflow-hidden py-8">
                        
                        @isset($first_notices)
                            <div class="carousel-item active relative float-left w-full">
                                <div class="p-1 rounded-xl group sm:flex space-x-6 bg-white shadow-xl hover:rounded-2xl ">
                                    <img src="{{$first_notices['img_url']}}" class="w-50 h-96 object-cover rounded-t-lg md:rounded-none md:rounded-l-lg">
                                    <div class="sm:w-7/12 pl-0 p-5">
                                    <div class="space-y-2">
                                        <div class="space-y-4">
                                        <h4 class="text-2xl font-semibold text-cyan-900">{{ $first_notices['title'] }}</h4>
                                        <p class="text-gray-600">{{$first_notices['body']}}</p>
                                        </div>
                                        @if (!is_null($first_notices['link_name']) && !is_null($first_notices['link_url']))
                                        <a href="{{$first_notices['link_url']}}" class="block w-max text-cyan-600">{{$first_notices['link_name']}}</a>
                                        @endif
                                    </div>
                                    </div>
                                </div>
                            </div>
                        @endisset
                        @isset($notices)
                            @forelse ($notices as $notice)
                                    <div class="carousel-item relative float-left w-full">
                                    <div class="p-1 rounded-xl group sm:flex space-x-6 bg-white shadow-xl hover:rounded-2xl ">
                                        <img src="{{$notice->img_url}}" class="w-50 h-96 object-cover rounded-t-lg md:rounded-none md:rounded-l-lg">
                                        <div class="sm:w-7/12 pl-0 p-5">
                                        <div class="space-y-2">
                                            <div class="space-y-4">
                                            <h4 class="text-2xl font-semibold text-cyan-900">{{$notice->title}}</h4>
                                            <p class="text-gray-600">{{$notice->body}}</p>
                                            </div>
                                            @if (!is_null($notice->link_name ) && !is_null($notice->link_url))
                                            <a href="{{$notice->link_url}}" class="block w-max text-cyan-600">{{$notice->link_name}}</a>
                                            @endif
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                            @endforelse
                        @endisset
                          
                    </div>

                    <button
                      class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                      type="button"
                      data-bs-target="#carouselExampleCaptions"
                      data-bs-slide="prev"
                    >
                      <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>

                    <button
                      class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                      type="button"
                      data-bs-target="#carouselExampleCaptions"
                      data-bs-slide="next"
                    >
                      <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                    
                  </div>
                </div>
            </div>
        </section>
        <aside>
            <div class="container_calendario">
                <div class="container">
                    <div class="antialiased sans-serif bg-gray-100 h-full" id="calendar" >
                        
                      </div>
                </div>    
            </div>
        </aside>


    </div>

    <footer class="text-white text-center text-lg-start small" style="background: #00228E">
        <!-- Grid container -->
        <div class="container-fluid p-4">
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
              <p>
                La Escuela Preparatoria No. 7 del Gobierno del Estado de Chiapas.
              </p>
            </div>
            <div class="col-lg-7 col-md-12 mb-4 mb-md-0" >
              Blvrd. Belisario Domínguez Km. 1082, Col. Terán | Tel. 961 671 6014 | 
                <a href="#" ><i class='bx bxl-facebook'></i></a>   
            </div>
         </div>  
        </div>    
  </footer>


</body>

<script src="{{asset('js/app00.js')}}"></script>

</html>