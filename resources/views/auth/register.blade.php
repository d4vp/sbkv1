@extends('layouts.app')
@section('title', 'Crear cuenta')

@section('head')
  <link rel="stylesheet" href="{{asset('css/styles7.css')}}">
 {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}">  --}}
@endsection


@section('content')
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
  <div class="f  ">
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
                  <img height="830px" src="{{asset('img/15.png')}}" class="d-block w-100" alt="...">
                 
                </div>
                <div class="carousel-item">
                  <img height="830px" src="{{asset('img/16.jpg')}}" class="d-block w-100" alt="...">
                  
                </div>
               {{--  <div class="carousel-item">
                  <img height="830px" src="{{asset('img/6.jpg')}}" class="d-block w-100" alt="...">
                  
                </div> --}}
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
        
          <div class="col-lg-5 align-self-center d-flex flex-column align-items-end" >
            {{-- <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4 mb-auto w-100">
                <img src="{{asset('img/logo.svg')}}" class="img-fluid" />
            </div> --}}
            <div class="align-self-center w-100 px-lg-5 py-lg-4 p-4 ">
            

            <h1 style="align-items:center; justify-content:center; display:flex; text-align:center " class="font-weight-bold mb-4">Crear cuenta</h1>
            <h5 class="form-label font-weight-bold" style="text-align:center;">Introduce tus datos de sesion a continuación</h5>
            <form class=" form mb-1" method="POST" action="#" >
              @csrf
              <div class="progressbar" >
                <div class="progress " id="progress" ></div>
                <div class="progress-step progress-step-active"data-title="Perfil"></div>
                <div class="progress-step" data-title="Contact"></div>
                <div class="progress-step" data-title="Personal"></div>
                <div class="progress-step" data-title="Cuenta"></div>
              </div>
              
              <div class="form-step form-step-active mb-2">
                <div class="mb-2">
                  <label  class="form-label fw-bold ">Nombres</label>
                  <input type="text" class="form-control  border-1 border-color:black;" id="name" placeholder="Ingresa tu nombre" name="name">
                @error('name')        
                    <div style="background-color: red; color:aliceblue">
                      <p  class="border border-red-500 rounded-md bg-red-100 w-full
                    text-red-600 p-2 my-2">* {{ $message }}</p>
                    </div>
                @enderror
                </div>
                <div class="mb-4">
                    <label class="form-label fw-bold">Apellidos</label>
                    <input type="text" class="form-control border-1 mb-2" placeholder="Ingresa tu apellido" id="apellido" name="apellido">
                @error('apellido')        
                  <div style="background-color: red; color:aliceblue">
                      <p  class="border border-red-500 rounded-md bg-red-100 w-full
                    text-red-600 p-2 my-2">* {{ $message }}</p>
                  </div>
                @enderror    
                </div>
                <div class="">
                    <a href="#" class="btn btn-next w-100 ml-auto">Next</a>
                </div>
              </div> 

              <div class="form-step">
                <div class="mb-2">
                  <label for="email"  class="form-label fw-bold ">Email</label>
                  <input class="form-control  border-1 border-color:black;"  type="email" name="email" id="email" placeholder="Ingresa tu correo electronico" required>
                  @error('correo')        
                  <div style="background-color: red; color:aliceblue">
                      <p  class="border border-red-500 rounded-md bg-red-100 w-full
                    text-red-600 p-2 my-2">* {{ $message }}</p>
                  </div>
                @enderror
                </div>
                
                <div class="mb-4">
                  <label class="form-label fw-bold" for="ID">Celular</label>
                  <input class="form-control  border-1 border-color:black;" type="number" name="celular" id="celular" placeholder="+57 " value="+57 " />
                  @error('celular')        
                <div style="background-color: red; color:aliceblue">
                    <p  class="border border-red-500 rounded-md bg-red-100 w-full
                  text-red-600 p-2 my-2">* {{ $message }}</p>
                </div>
              @enderror
                </div>
                
                <div class="btns-group">
                  <a href="#" class="btn btn-prev">Previous</a>
                  <a href="#" class="btn btn-next">Next</a>
                </div>
              </div>

              <div class="form-step">
                  <div class="mb-2">
                    <label for="dob" class="form-label fw-bold">Date of Birth</label>
                    <input class="form-control  border-1 border-color:black;" type="date" name="date" id="date" placeholder="Fecha de nacimiento"/>
                    @error('Nacimiento')        
                  <div style="background-color: red; color:aliceblue">
                      <p  class="border border-red-500 rounded-md bg-red-100 w-full
                    text-red-600 p-2 my-2">* {{ $message }}</p>
                  </div>
                @enderror
                  </div>
                  
                  <div class="mb-4">
                    <label class="form-label fw-bold ">N_identificacion</label>
                    <input class="form-control  border-1 border-color:black;"  type="text" name="N_identificacion" id="N_identificacion" placeholder="Ingresa tu numero de identificacion" />
                    @error('N_identificacion')        
                    <div style="background-color: red; color:aliceblue">
                        <p  class="border border-red-500 rounded-md bg-red-100 w-full
                      text-red-600 p-2 my-2">* {{ $message }}</p>
                    </div>
                  @enderror
                  </div>

                  <div class="btns-group">
                    <a href="#" class="btn btn-prev">Previous</a>
                    <a href="#" class="btn btn-next">Next</a>
                  </div>
              </div>

                <div class="form-step">
                  <div class="mb-2">
                    <label class="form-label fw-bold ">Usuario</label>
                    <input class="form-control  border-1 border-color:black;" type="text" name="username" id="username" placeholder="Nombre de usuario"/>
                    @error('username')        
                      <div style="background-color: red; color:aliceblue">
                      <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message }}</p>
                      </div>
                    @enderror
                  </div>
                  <div class="mb-2">

                    <div class="container">
                      <div class="row">
                        <div class="col">
                          
                    <label class="form-label fw-bold ">Contraseña</label>
                    <input class="form-control  border-1 border-color:black;" type="password" name="password" id="password" placeholder="contraseña"/>
                  
                    @error('contraseña')        
                      <div style="background-color: red; color:aliceblue">
                        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message }}</p>
                      </div>
                    @enderror
                        </div>
                        <div class="col">
                          <div class="mb-2">
                            <label  class="form-label fw-bold " for="confirmPassword">Confirmar contraseña</label>
                            <input class="form-control  border-1 border-color:black;" type="password" name="password_confirmation" id="password_confirmation" placeholder="confirmar contraseña"/>
                          </div>
                        </div>
                      </div>
                    </div>


                  </div>
                 

                  <div>

                   

                      <div class="">
                        <div class="row">
                          <div class="col-1">
                            <input  style="opacity:1; top: 1em; right: 0px" type="checkbox" data-required="1" name="terminos">
                          </div>
                          <div class="col">
                            <p class="ms-auto" style="color:black;padding-left:0px; padding-top:0px">Aceptar los <a style="color:blue;" href="#">Términos y Condiciones</a></p>
                          </div>
                        </div>
                      </div>


{{-- 
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
 --}}











                  </div>

                  <div class="mb-4">
                    <div class="g-recaptcha" data-sitekey="6LeUK-ggAAAAAOHNZP1XstRtyMs9Kdgi7EznsgNF"></div>
                  </div>

                  <div class="btns-group">
                    <a href="#" class="btn btn-prev">Previous</a>
                    <input type="submit" value="Submit" class="btn" />
                  </div>
                </div>
              </form>
          <br>
          <div class="mb-2">
            <p class="font-weight-bold text-center text-muted">O registrate con</p>
          </div>
            <div class="d-flex justify-content-around">
                <button type="button" class="btn btn-outline-dark  mr-2"  style="width:150px "><i class="fab fa-google lead mr-2"></i> Google</button>
                <button type="button" class="btn btn-outline-dark  ml-2"  style="width:150px "><i class="fab fa-facebook-f lead mr-2"></i> Facebook</button>
            </div>
            </div>
            <div class="text-center px-lg-5 pt-lg-3 pb-lg-4 p-4 mt-auto w-100">
                <p class="d-inline-block mb-0 ">¿Ya tienes una cuenta?</p> <a href="{{ route('login.index') }}" class="text-light fw-bold text-decoration-none">Iniciar sesion</a>
            </div>
        </div>
    </div>
  </section>  
  <script type="{{url('javascript/ee.js')}}"></script>
  <script src="{{asset('e/ee.js')}}"></script>
</div>


<footer>
  
  <link rel="stylesheet" href="{{asset('css/footer2.css')}}">
 
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

