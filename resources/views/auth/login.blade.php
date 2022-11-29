@extends('layouts.app')
@section('title', 'Iniciar sesion')

@section('head')

  
  <script src="{{asset('js/app.js')}}"></script>
  <style>
    @media screen and (max-width: 2000px) {
      .carousel slide{
        
      }
    }


  </style>
@endsection

@section('header')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<header class="p-3 text-white fixed-top" style="background-color: #132931">
  <div class="">
    <div class="">
    <div class="d-flex flex-wrap align-items-center justify-content-lg">
      <a>
        <a href="http://localhost/sofonbike/public/" class="mr-auto  nav-link px-2 text-white navbar-brand " style="padding-left: 25px;  font-weight: bold; " >SOFONBIKE</a>
      </a>
    </div>
  </div>
</header>
<br><br><br>
  <script src="{{asset('js/app.js')}}"></script>
  <link rel="stylesheet" href="{{asset('css/styles7.css')}}"> 
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
@endsection
@section('content')
  <div class="f bg-dark">
    <section>
      <div class="row g-0 align-items-center">
          <div class="col-lg-7 d-none d-lg-block">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
              {{-- <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div> --}}
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img height="605px" src="{{asset('img/9.jpg')}}" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img height="605px" src="{{asset('img/10.png')}}" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img height="605px" src="{{asset('img/11.jpg')}}" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
              {{-- <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img  height="681px" class="min-vh-10 img-fluid" src="{{asset('img/4.jpg')}}" alt="First slide" > 
                      <div class="carousel-caption d-none d-md-block">
                        <h5 class="font-weight-bold">La más potente del mercado</h5>
                        <a class="text-muted text-decoration-none">Visita nuestra tienda</a>
                      </div>
                    </div>
                    <div class="carousel-item ">
                      <img height="681px"class="min-vh-10  " src="{{asset('img/5.jpg')}}" alt="First slide"> 
                      <div class="carousel-caption d-none d-md-block">
                        <h5 class="font-weight-bold">Descubre la nueva generación</h5>
                        <a class="text-muted text-decoration-none">Visita nuestra tienda</a>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div> --}}
          </div>
          <div class="col-lg-5 d-flex flex-column align-items-end" style="background-color: white">
      {{-- <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4 mb-auto w-100"><img src="{{asset('img/logo.svg')}}" class="img-fluid" /></div> --}}
            <div class="align-self-center w-100 px-lg-5 py-lg-4 p-4 ">
              <h1 style="align-items:center; justify-content:center; display:flex; text-align:center" class="font-weight-bold mb-2">¡Bienvenido!</h1>
              <h5 style="align-items:center; justify-content:center; display:flex; text-align:center" class="font-weight-bold mb-2">Inicia sesion y sé parte de nuestra comunidad</h5>
              <form class="mb-2" method="POST" action="">
                @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label fw-bold">Email</label>
                    <input type="email" class="form-control  border-1 border-color:black;" id="email" placeholder="Correo electronico" name="email"  maxlength="80px"  size="20" required aria-describedby="emailHelp">
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fw-bold">Contraseña</label>
                    <input type="password" class="form-control border-1 mb-2" placeholder="Contraseña" id="password" name="password" required id="exampleInputPassword1">
                    
                  </div>
                  <div class="mb-3">
                  <div class="">
                    <div class="row ">
                      <div class="col-6 ">
                        <input style="width: 15px;" type="checkbox" name="remember" id="remember" size="10px" value="lsRememberMe">
                        <label class="ms-auto" for="remember-me">Recordarme</label>
                        <div>
                          </div> 
                     <div>
                      </div>
                      </div>
                      
                      <div class="col-6 ">
                        <div class="d-flex justify-content-end mb-3">
                          {{-- <a href="" id="emailHelp" class="form-text text-muted text-decoration-none">¿Has olvidado tu contraseña?</a> --}}
                          <a id="reset-password-link" data-testid="reset-password-link" class="Link-k8gsk-0 dvVOBw"> <p style="font-size: 15px">¿Olvidaste tu contraseña?</p> </a>
                        </div>
                       
                    </div>
                  </div>
                  </div>


                
                @error('message')        
                  <p class=" w-full p-2 my-2 is-invalid" style="background-color: red; color:white">El correo electrónico o la contraseña son incorrectos, intente nuevamente</p>
                @enderror
              
                
                  <div>
                   
                   {{--  <div>
                      <input style="opacity:1;  position: relative; top: 1em; right: 215px" type="checkbox" data-required="1" name="terminos">
                      <p style="color:black;padding-left:30px;">Recordarme <a style="color:blue;" href="#"></a></p>
                    </div> --}}
                  </div>
                  <div class="mb-3">
                    <button type="submit" onclick="lsRememberMe()" class="btn btn-primary w-100">Iniciar sesión</button>
                  </div>
                   
                  <script>
                    const rmCheck = document.getElementById("remember"),
                        emailInput = document.getElementById("email");
    
                    if (localStorage.checkbox && localStorage.checkbox !== "") {
                      rmCheck.setAttribute("checked", "checked");
                      emailInput.value = localStorage.username;
                    } else {
                      rmCheck.removeAttribute("checked");
                      emailInput.value = "";
                    }
    
                    function lsRememberMe() {
                      if (rmCheck.checked && emailInput.value !== "") {
                        localStorage.username = emailInput.value;
                        localStorage.checkbox = rmCheck.value;
                      } else {
                        localStorage.username = "";
                        localStorage.checkbox = "";
                      }
                    }
                      </script>



              </form>
              <div class="mb-3">
                <p class="font-weight-bold text-center text-muted">O inicia sesión con</p>
              </div>
              
              <div class="d-flex justify-content-around">
                  <button type="button" class="btn btn-outline-dark mr-2" style="width:150px "><i class="fab fa-google lead mr-2"></i> Google</button>
                  <button type="button" class="btn btn-outline-dark ml-2" style="width:150px "><i class="fab fa-facebook-f lead mr-2"></i> Facebook</button>
              </div>
              </div>
              {{-- <div class="text-center px-lg-5 pt-lg-1 pb-lg-4 p-4 w-100">
                <p class="d-inline-block mb-0">Al continuar, aceptas las Condiciones de servicio y reconoces que leíste nuestra Política de privacidad.</p> <a href="{{ route('register.index') }}" class="text-light font-weight-bold text-decoration-none"></a>
            </div> --}}
              <div class="text-center px-lg-5 pt-lg-1 pb-lg-4 p-4 w-100">
                  <p class="d-inline-block mb-0">¿Todavia no tienes una cuenta?</p>
                   <a href="{{ route('register.index') }}" class="text-dark fw-bold text-decoration-none">Crea una ahora</a>
              </div>
          </div>
      </div>
    </section>
  </div>
  
  <link rel="stylesheet" href="{{asset('css/footer2.css')}}">
 
  {{--   <div class="footer-content">
        <h3>code opacity</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo iste corrupti doloribus odio sed!</p>
        <ul class="socials">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
        </ul>
    </div>
    <div class="footer-bottom">
        <p>copyright &copy;2020 codeOpacity. designed by <span>nethunt</span></p>
    </div>
 --}}
{{--  <footer style="position: absolute,  width: 100%," >
  <div class="footer" > 
      <div class="container" >
          <div class="row" >
              <div class="col-md-6 col-lg-3">
                  <div class="footer-about">
                      <h3>Acerca de nosotros</h3>
                      <p>¿Quiénes Somos?</p>
                      <div class="footer-social">
                          <a href=""><i class="fab fa-twitter"></i></a>
                          <a href=""><i class="fab fa-facebook-f"></i></a>
                          <a href=""><i class="fab fa-youtube"></i></a>
                          <a href=""><i class="fab fa-instagram"></i></a>
                          <a href=""><i class="fab fa-linkedin-in"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="footer-contact">
                      <h3>Ponerse en contacto
                      </h3>
                      <p><i class="fa fa-map-marker-alt"></i>Cauca, Popayan, Colombia</p>
                      <p><i class="fa fa-phone-alt"></i>+57 3143658652</p>
                      <p><i class="fa fa-envelope"></i>support1@gmail.com</p>
                      <p><i class="far fa-clock"></i>Mon - Fri, 9AM - 12PM</p>
                  </div>
              </div>
              <div class="col-md-6 col-lg-6">
                  <div class="container footer-newsletter" style="padding-top: 45px">
                      <h4>¡SUSCRÍBETE A NUESTRO NEWSLETTER!</h4>
                      <div class="row form">
                          <div class="col-sm-4">
                              <input class="form-control" placeholder="Nombre">
                          </div>
                          <div class="col-sm-4">
                              <input class="form-control" placeholder="Email">
                          </div>
                      <div class="col-sm-4">
                          <button class="btn">Suscribirse</button>
                      </div>
                  </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="copyright">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-md-6">
                      <div class="copy-text">
                          <p>&copy; <a href="#">SOFONBIKE</a>. All Rights Reserved</p>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="copy-menu">
                          <a href="">Acerca de</a>
                          <a href="">Terminos</a>
                          <a href="">Privacidad</a>
                          <a href="">Contacto</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</footer> --}}

<footer>
  
  <div class="footer-content">
      {{-- <h3>code opacity</h3> --}}
      {{-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo iste corrupti doloribus odio sed!</p> --}}
      <ul class="socials">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
      </ul>
  </div>
  <div class="footer-bottom">
      <p style="padding-top: 12px">copyright &copy;2022 SOFONBIKE  | Todos los derechos reservados.</p>
  </div>
</footer>
@endsection

