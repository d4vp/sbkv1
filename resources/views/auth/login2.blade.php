{{-- @extends('layouts.app')
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
  <nav class="navbar"style="background-color: #24252a">
    <a class="navbar-brand" href="#" >
   
      <div style="vertical-align:center; text-decoration: none; color:aliceblue; font-weight: bold; padding-left:25px">SOFONBIKE</div> 
    </a>
  </nav>
  <script src="{{asset('js/app.js')}}"></script>
  <link rel="stylesheet" href="{{asset('css/styles7.css')}}"> 
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
@endsection
@section('content')
  <div class="f bg-dark">
    <section>
      <div class="row g-0">
          <div class="col-lg-7 d-none d-lg-block">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img height="605px" src="{{asset('img/4.jpg')}}" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img height="605px" src="{{asset('img/5.jpg')}}" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img height="605px" src="{{asset('img/6.jpg')}}" class="d-block w-100" alt="...">
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
              
          </div>
          <div class="col-lg-5 bg-light d-flex flex-column align-items-end">
    
            <div class="align-self-center w-100 px-lg-5 py-lg-4 p-4 ">
              <h1 style="align-items:center; justify-content:center; display:flex; text-align:center" class="font-weight-bold mb-2">¡Bienvenido!</h1>
              <h5 style="align-items:center; justify-content:center; display:flex; text-align:center" class="font-weight-bold mb-2">Inicia sesion y sé parte de nuestra comunidad</h5>
              <form class="mb-2" method="POST" action="">
                @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label fw-bold">Email</label>
                    <input type="email" class="form-control  border-1 border-color:black;" id="email" placeholder="Correo electronico" name="email"  maxlength="80px"  size="20" required>
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fw-bold">Contraseña</label>
                    <input type="password" class="form-control border-1 mb-2" placeholder="Contraseña" id="password" name="password" required>
                    
                  </div>
                  <div class="mb-3">
                  <div class="container ">
                    <div class="row ">
                      <div class="col-6 ">
                        <input style="width: 15px;" type="checkbox" name="remember" id="rememberrr" size="10px" >
                        <label class="ms-auto" for="remember-me">  
                          Recordarme</label>
                        <div >
                          
                        </div>
                        
                        <div>
                          
                        </div>
                      </div>
                      
                      <div class="col-6 ">
                        <div class="d-flex justify-content-end mb-3">
                       
                          <a id="reset-password-link" data-testid="reset-password-link" class="Link-k8gsk-0 dvVOBw"> <p style="font-size: 15px">¿Olvidaste tu contraseña?</p> </a>
                        </div>
                       
                    </div>
                  </div>
                  </div>

              
              
                
                  <div>
                   
                   
                  </div>
                  <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
                  </div>
                   
              </form>
              <div class="mb-3">
                <p class="font-weight-bold text-center text-muted">O inicia sesión con</p>
              </div>
              
              <div class="d-flex justify-content-around">
                  <button type="button" class="btn btn-outline-dark mr-2" style="width:150px "><i class="fab fa-google lead mr-2"></i> Google</button>
                  <button type="button" class="btn btn-outline-dark ml-2" style="width:150px "><i class="fab fa-facebook-f lead mr-2"></i> Facebook</button>
              </div>
              </div>
            
              <div class="text-center px-lg-5 pt-lg-1 pb-lg-4 p-4 w-100">
                  <p class="d-inline-block mb-0">¿Todavia no tienes una cuenta?</p>
                   <a href="{{ route('register.index') }}" class="text-dark fw-bold text-decoration-none">Crea una ahora</a>
              </div>
          </div>
      </div>
    </section>
  </div>
  
@endsection



 --}}



  
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      
      <title>Document</title>
      <link rel="stylesheet" href="{{asset('css/styleadmin.css')}}">
      
    </head>
    <body>
      <div class="container" id="container">
        <div class="form-container sign-up-container">
          <form class="mb-2" method="POST" action="">
              @csrf
            <h1>¡Crear cuenta!</h1>
            <label for="exampleInputEmail1" class="form-label fw-bold">Nombre</label>
            <input type="text" placeholder="Name" />
            <label for="exampleInputEmail1" class="form-label fw-bold">Email</label>
            <input type="email" placeholder="Email" />
            <label for="exampleInputEmail1" class="form-label fw-bold">Contraseña</label>
            <input type="password" placeholder="Password" />
            <button>Crear cuenta</button>
          </form>
        </div>
        <div class="form-container sign-in-container">
          <form class="mb-2" method="POST" action="">
            @csrf
            <h1 id="head">Iniciar sesion</h1>
            <label for="exampleInputEmail1" class="form-label fw-bold">Email</label>
            <input type="email" class="form-control  border-1 border-color:black;" id="email" placeholder="Correo electronico" name="email"  maxlength="80px"  size="20" required>
            <label for="exampleInputEmail1" class="form-label fw-bold">Contraseña</label>
            <input type="password" class="form-control border-1 mb-2" placeholder="Contraseña" id="password" name="password" required>
            <a href="#">Olvidaste tu contraseña?</a>
            <button type="submit" >Iniciar sesión</button>
          </form>
        </div>
        <div class="overlay-container">
          <div class="overlay">
            <div class="overlay-panel overlay-left">
              <h1>Welcome Back !</h1>
              <p>
                Para mantenerse conectado con nosotros, inicie sesión con su información personal
              </p>
              <button class="btn" id="signIn">Iniciar sesion</button>
            </div>
            <div class="overlay-panel overlay-right">
              <h1>Hello, Friend !</h1>
              <p>Ingresa tus datos personales y comienza tu viaje con nosotros</p>
              <button class="btn" id="signUp">Crear cuenta</button>
            </div>
          </div>
        </div>
      </div>
     
      <script src="{{asset('e/eeee.js')}}"></script>
    </body>
  </html>
  