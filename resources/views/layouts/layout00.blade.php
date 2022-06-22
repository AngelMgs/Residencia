<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style01.css')}}">   
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />


    <script src="{{asset('js/app.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
   
    
    
    

    <title>Prepa 7</title>


</head>
<body>

    <div class="sidebar">
        <div class="logo-details">
            <a href="{{ route('home') }}">
                <i class='bx bxs-graduation'></i></i>
            <span class="logo_name">
                Prepa 7
            </span>
            </a>
        </div>
        <ul class="nav-links">
            

            @can('user_index')
            <li>
                @can('user_index')
                <div class="icon-links">
                    <a href="{{ route('users.index') }}">
                        <i class='bx bx-user' ></i>
                        <span class="link_name">Usuarios</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                @endcan
                
                <ul class="sub-menu">
                    @can('user_index')
                    <li><a class="link_name" href="{{ route('users.index') }}">Usuarios</a></li>
                    @endcan

                    @can('user_index')
                    <li><a href="{{ route('users.index') }}">Usuarios Registradas</a></li>
                    @endcan
                    @can('user_create')
                    <li><a href="{{ route('users.create') }}">Registrar Usuarios</a></li>
                    @endcan

                    @can('user_edit')
                    <li><a href="{{ route('permission.index') }}">Permisos de Usuarios</a></li>
                    @endcan
                </ul>
            </li>
            @endcan

            @can('record_index')
            <li>
                @can('record_index')
                <div class="icon-links">
                    <a href="{{ route('records.index') }}">
                        <i class='bx bx-folder'></i>
                        <span class="link_name">Expedientes</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                @endcan
                
                <ul class="sub-menu">
                    @can('record_index')
                    <li><a class="link_name" href="{{ route('records.index') }}">Expedientes</a></li>
                    @endcan

                    @can('record_index')
                    <li><a href="{{ route('records.index') }}">Expedientes Registrados</a></li>
                    @endcan
                    @can('record_create')
                    <li><a href="{{ route('records.create') }}">Agregar Nuevo Expedientes</a></li>
                    @endcan
                </ul>
            </li>
            @endcan

            @can('record_index')
            <li>
                @can('record_index')
                <div class="icon-links">
                    <a href="{{ route('records.index') }}">
                        <i class='bx bx-folder'></i>
                        <span class="link_name">Escritos</span>
                    </a>
                </div>
                @endcan

                <ul class="sub-menu">
                    @can('record_index')
                    <li><a class="link_name" href="{{ route('records.index') }}">Escritos</a></li>
                    @endcan
                </ul>    
            </li>
            @endcan

            @can('record_index')
            <li>
                @can('record_index')
                <div class="icon-links">
                    <a href="{{ route('records.index') }}">
                        <i class='bx bx-folder'></i>
                        <span class="link_name">Red de Apoyo IA</span>
                    </a>
                </div>
                @endcan

                <ul class="sub-menu">
                    @can('record_index')
                    <li><a class="link_name" href="{{ route('records.index') }}">Red de Apoyo IA</a></li>
                    @endcan
                </ul> 
            </li>
            @endcan

           

            

            @can('files_index')
            <li>
                <div class="icon-links">
                    @can('files_index')
                    <a href="{{ route('files.index') }}"><i class="bx bx-images"></i><span class="link_name">Galeria</span></a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                    @endcan
                </div>
                <ul class="sub-menu">
                    @can('files_index')
                    <li><a class="link_name" href="{{ route('files.index') }}">Galeria</a></li>
                    @endcan
                    @can('files_index')
                    <li><a href="{{ route('files.index') }}">Toda la Galeria</a></li>
                    @endcan
                    @can('files_create')
                    <li><a href="{{ route('files.create') }}">Subir</a></li>
                    @endcan
                </ul>
            </li>
            @endcan


            @can('editor_index')
            <li>
                @can('editor_index')
                <div class="icon-links">
                    <a href="{{ route('news.index') }}">
                        <i class='bx bx-file'></i>
                        <span class="link_name">Noticias</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                @endcan
                
                <ul class="sub-menu">
                    @can('editor_index')
                    <li><a class="link_name" href="{{ route('news.index') }}">Noticias</a></li>
                    @endcan

                    @can('editor_index')
                    <li><a href="{{ route('news.index') }}">Todas las Noticias</a></li>
                    @endcan
                    @can('editor_create')
                    <li><a href="{{ route('news.create') }}">Agregar Nuevo Noticia</a></li>
                    @endcan
                </ul>
            </li>
            @endcan

            @can('editor_index')
            <li>
                @can('editor_index')
                <div class="icon-links">
                    <a href="{{ route('events.index') }}">
                        <i class='bx bx-calendar-star'></i>
                        <span class="link_name">Eventos</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                @endcan    
                <ul class="sub-menu">
                    @can('editor_index')
                    <li><a class="link_name" href="{{ route('events.index') }}">Eventos</a></li>
                    @endcan

                    @can('editor_index')
                    <li><a href="{{ route('events.index') }}">Todas los Eventos</a></li>
                    @endcan
                    @can('editor_create')
                    <li><a href="{{ route('events.create') }}">Agregar Nuevo Eventos</a></li>
                    @endcan
                </ul>
            </li>
            @endcan

            <li>
                <div class="profile-details">
                    <div class="profile-content">
                        
                    </div>
                        <div class="name-jobs">
                            <div class="profile_name">

                            </div>
                            @if(@Auth::user()->hasRole('Admin'))
                            <div class="job">Administrador</div>
                            @endif
                            @if(@Auth::user()->hasRole('Editor'))
                            <div class="job">Editor</div>
                            @endif
                            @if(@Auth::user()->hasRole('Docente'))
                            <div class="job">Editor</div>
                            @endif
                            @if(@Auth::user()->hasRole('Psicologo'))
                            <div class="job">Dep.Psicopedagogico</div>
                            @endif
                        </div>  
                        
                        <i class="bx bx-log-out" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </i>
                </div>
            </li>
        </ul>
    </div>
    <section class="home-section">
        
        <div class="home-content">
            <i class='bx bx-menu' ></i>
        </div>
        @yield('contenido')
    </section>
    
    <script>
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
          arrow[i].addEventListener("click", (e)=>{
         let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
         arrowParent.classList.toggle("showMenu");
          });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", ()=>{
          sidebar.classList.toggle("close");
        });
    </script>



<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
        
</body>
</html>