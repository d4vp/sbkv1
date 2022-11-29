<!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;600&display=swap" rel="stylesheet">
      <script src="https://kit.fontawesome.com/ffec4ec2ed.js" crossorigin="anonymous"></script> {{-- footer icons --}}
      <link rel="stylesheet" href="{{asset('css/styles2.css')}}"> {{-- footer --}}
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous"> {{-- header --}}
      @yield('head')
      <title>@yield('title')</title>
    </head>
    <body>
    
        <header class="p-3 text-white fixed-top" style="background-color: #132931">
          <div class="">
            <div class="">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-end">
     
              <a>
                <a href="http://localhost/sofonbike/public/" class="mr-auto  nav-link px-2 text-white navbar-brand " style="padding-left: 25px;  font-weight: bold; " >SOFONBIKE</a>
              </a>
      
              <ul class="d-flex flex-row nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 ">
                <li><a href="http://localhost/sofonbike/public/" class="nav-link px-2 text-white">Inicio</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Nosotros</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Contactenos</a></li>
              </ul>

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
                  <li><div style="text-align: center; height:30px; background-color:goldenrod" >¡Hola! <b>{{ auth()->user()->name}}</b></div></li>
                  <li><a class="dropdown-item" href="#">Configuracion</a></li>
                  <li><a class="dropdown-item" href="{{ route('cuenta') }}">Perfil</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="{{ route('login.destroy') }}">Cerrar sesion</a></li>
                </ul>
            </div>
          </div>
        </header>
      
       
      <main>
      <br><br><br>
        @yield('content')
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
  </html>