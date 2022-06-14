<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Acesso Alumnos de La Escuela Preparatoria No. 7 del Gobierno del Estado de Chiapas</title>

    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('css/style00.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
   
  </head>
<body>
  <header>
    <nav>
      <div class="navbar">
        <div class="logo"><a href="/home"><img src="{{asset('img/rec.png')}}" alt=""></a></div>  
      </div>
    </nav>    
  </header>
  
  <section class="home-section">
    <div class="container">
      <section class="vh-100">
          <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center " style="height:90vh">
              <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <form method="POST" action="#">
                @csrf
                <div class="form-outline mb-4 text-center display-6">
                  <label class="form-label">Acceso para Alumnos</label>
                </div>  
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="text" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email">
                  <label class="form-label">Correo Electronico</label>
                    @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3">
                  <input type="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"
                     >
                  <label class="form-label" for="form3Example4">contraseña</label>
                    @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>


                <div class="row mb-0">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link d-flex justify-content-between align-items-center" href="{{ route('password.request') }}">
                                {{ __('¿Olvido su Contraseña?') }}
                            </a>
                        @endif
                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg"
                              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                        </div>
                </div>
              </form>
            </div>

          </div>
        </div>
      </section>
    </div>
</section>

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
</html>