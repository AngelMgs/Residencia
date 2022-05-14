<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('css/style01.css')}}">

    <title>@yield('title')</title>


</head>
<body>

    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxs-graduation'></i></i>
            <span class="logo_name">
                Panel
            </span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#">
                    <i class='bx bx-error-alt'></i>
                    <span class="link_name">no found</span>
                </a>
                <ul class="sub-menu">
                    <li><a class="link_name">no found</a></li>
                </ul>
            </li>
            <li>
                <div class="icon-links">
                    <a href="#">
                        <i class='bx bx-book-bookmark' ></i>
                        <span class="link_name">Paginas</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Paginas</a></li>
                    <li><a href="#">Paginas Registradas</a></li>
                    <li><a href="#">Contenido Paginas</a></li>
                </ul>
            </li>

            <li>
                <div class="icon-links">
                    <a href="#">
                        <i class='bx bx-user' ></i>
                        <span class="link_name">Usuarios</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Usuarios</a></li>
                    <li><a href="#">Usuarios Registradas</a></li>
                    <li><a href="#">Registrar Usuarios</a></li>
                </ul>
            </li>

            <li>
                <div class="icon-links">
                    <a href="#">
                        <i class="bx bx-images"></i>
                        <span class="link_name">Galeria</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Galeria</a></li>
                    <li><a href="#">Toda la Galeria</a></li>
                    <li><a href="#">Subir</a></li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class='bx bx-error-alt'></i>
                    <span class="link_name">no found</span>
                </a>
                <ul class="sub-menu">
                    <li><a class="link_name">no found</a></li>
                </ul>
            </li>
            <li>
                <div class="profile-details">
                    <div class="profile-content">
                        <img src="none" alt="">
                    </div>
                        <div class="name-jobs">
                            <div class="profile_name">Administrador</div>
                            <div class="job">{{ Auth::user()->name }}</div>
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

</body>
</html>