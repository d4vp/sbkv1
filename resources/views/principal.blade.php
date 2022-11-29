{{-- <!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;600&display=swap" rel="stylesheet">
      <script src="https://kit.fontawesome.com/ffec4ec2ed.js" crossorigin="anonymous"></script> --}}
      {{-- <link rel="stylesheet" href="{{asset('css/styles2.css')}}"> --}} {{-- footer --}}
     {{--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous"> --}} {{-- header --}}
     {{--  @yield('head')
      <title>@yield('title')</title>
    </head>
    <body>
    
        <header class="p-3 bg-dark text-white">
          <div class="">
            <div class="">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-end">
              
              <a >
                <a href="http://localhost/sofonbike/public/" class="mr-auto  nav-link px-2 text-white navbar-brand " style="padding-left: 25px;  font-weight: bold; " >SOFONBIKE</a>
              </a>
      
              @if(auth()->check())
          
                <div class="text-end">
                 
                @else
                <button type="button" class="btn btn-outline-light me-2">
                  <a href="{{ route('login.destroy') }}">Log in</a>
                </button>
                
                <button type="button" class="btn btn-outline-light me-2">
                  <a href="{{ route('register.index') }}">register</a>
                </button>
              </div>
              @endif
      
            </div>
            <div class="">
              
                <a type="button" class="btn btn-warning d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false"style="text-decoration: none">
                  <img width="20" height="20" src="{{asset('img/person.svg')}}" class="img-fluid" />
                  Mi cuenta</a>
              
          
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                  <li><a class="dropdown-item" href="#">New project...</a></li>
                  <li><a class="dropdown-item" href="#">Configuracion</a></li>
                  <li><a class="dropdown-item" href="{{ route('cuenta') }}">Perfil</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="{{ route('login.destroy') }}">Cerrar sesion</a></li>
                </ul>
            </div>
          </div>
        </header>
      
      <main>
        @yield('content') 
        <h1>sd</h1>
      </main>
        <footer style="position: absolute,  width: 100%," >
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
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
  </html> --}}


  <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Responsive Coming Soon + countdown | Página web en construcción + Contador</title>

    <link rel="icon" href="#" type="icon/png" sizes="40x40">
	
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   
    <link rel="stylesheet" href="{{asset('css/soon.css')}}">
  

</head>
<body>
    
    <section class="coming-soon-page">
     <div class="content-wrp">
        <div class="brand-name">
         SOFON<span>BIKE</span>
        </div>
        <h1 class="brand-head">WE are coming soon</h1>
        <p class="brand-desc">Nuestro sitio web está en construcción. estaremos aquí pronto con nuestro nuevo sitio, suscríbase para recibir una notificación.</p>
        
        <div class="countdown">
         <div class="box">
             <div class="num days"></div>
                 <span>Days</span>
             
         </div>
         <div class="box">
             <div class="num hours"></div>
                 <span>Hours</span>
             
         </div>
         <div class="box">
             <div class="num minutes"> </div>
                 <span>Minutes</span>
            
         </div>
         <div class="box">
             <div class="num seconds"></div>
                 <span>Seconds</span>
             
         </div>
        </div>
        
     {{--    <form action="#" class="subscribe-form">
            <div class="field-wrp">
                <input type="email" placeholder="Email" required>
                <button type="submit">Susbscribe</button>
            </div>
        </form> --}}
        
        
        <form action="#" class="subscribe-form">
            <div class="field-wrp">
             <br>
             <h3 style="margin:5px">Ingresa a la version de prueba</h3>
             <button type="submit">
                    <a style="color: white; text-decoration: none" class="dropdown-item" href="http://localhost/sofonbike/public/">Continuar</a>
                </button>
            </div>
        </form>
    

        <div class="social-shares">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
        </div>
        
        
     </div>
     <div class="scrollbg"></div>
    </section>


    <!--jQuery-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	
    <!--custom js-->


    <script src="js/scripts.js"></script>


    <script src="{{asset('js/soon.js')}}"></script>



</body>
</html>