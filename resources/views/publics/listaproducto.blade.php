

<header class="p-3 bg-dark text-white">
    <div class="">
      <div class="">
        
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-end">
        
        <a >
          <a class="mr-auto  nav-link px-2 text-white navbar-brand " style="padding-left: 25px;  font-weight: bold; " >SOFONBIKE</a>
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

@extends('layouts.plantilla')  
@section('content')

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ffec4ec2ed.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/styles2.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles4.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles5.css')}}">
    <script src="{{asset('js/food.js')}}"></script>
</head>







<div class="container" >

    <table id="idproductos" class="table table-striped table-bordered" style="width:100%  text-align: center">
        <thead>
            
        </thead>
        <tbody>
            @foreach ($productos as $producto)
            <tr style="border: medium solid blue">
               
                <td style="text-align:justify; text-align:center;">
                    <p style="padding-top: 80px;font-size:20px " >{{$producto->name}}</p>  
                </td>
             

                <td style="text-align:justify; ">{{-- {{$producto->imagen}} --}}
     {{--                <img src="{{ asset('storage').'/'.$producto->imagen}}" alt="" width="200"> --}}
                  {{--   <img src="/img/Multimedia/{{$producto->imagen}}" alt="{{$producto->imagen}}" width="500px"> --}}
                    <center><img src="{{asset($producto->imagen)}}" alt="" width="150px"></center>
                </td>

                


                <td style="text-align:justify; text-align:center;">
                    <p style="padding-top: 80px; font-size:20px" >${{$producto->precio}}</p>
                    
                   </td> 
               
                <td style="width: 300px; background-color:rgb(228, 174, 39)">
                    <div style="justify-content: center; align-items:center; display:flex;" >
                    <div style="float:left;padding-right: 7px; padding-top:75px "><a class="btn btn-danger " style="color:rgb(255, 255, 255); text-decoration: none; " href="{{route('productos.update',$producto)}}">Comprar</a></div> 
                    {{-- <div style="float:left"><p></p></div> --}}
                    <div style="padding-top: 75px; ">
                        <div style="float:left;border-left: 2px solid rgb(0, 0, 0);height: 35px; padding-left: 7px; "></div></div>
                    <div style="float:left;padding-right: 7px; padding-top:75px "><a class="btn btn-dark"style="color:white; text-decoration: none;" href="{{route('productos.edit',$producto)}}">Detalles</a></div>
                   
     
                </div>
                </td>
            </tr>
            
            <tr style="">
                <td style="border-left: hidden; border-right: hidden; ">
                </td>
                <td style="border-left: hidden; border-right: hidden; ">
                </td>
                <td style="border-left: hidden; border-right: hidden; ">
                </td>
                <td style="border-left: hidden; border-right: hidden; ">
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
  {{--   <img src="{{asset('img/Multimedia/1659061904-1.jpg')}}" alt=""> --}}
    

<br>
  

<footer>
    <!-- Footer Start -->
    <div class="footer">
      <div class="container">
          <div class="row">
              <div class="col-md-6 col-lg-3">
                  <div class="footer-about">
                      <h3>Acerca de nosotros</h3>
                      <p>
                        ¿Quiénes Somos?
                      </p>
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
              
             {{--  <div class="col-md-6 col-lg-3">
                  <div class="footer-links">
                      <h3>Useful Links</h3>
                      <a href="">Lorem ipsum</a>
                      <a href="">tempus posuere </a>
                      <a href="">velit id accumsan</a>
                    
                  </div>
              </div> --}}
              {{-- <div class="col-md-6 col-lg-3">
                  <div class="footer-project">
                      <h3>Latest Projects</h3>
                      <a href=""><img src="img/img-1.jpg" alt="Image"></a>
                      <a href=""><img src="img/img-2.jpg" alt="Image"></a>
                      <a href=""><img src="img/img-3.jpg" alt="Image"></a>
                      <a href=""><img src="img/img-4.jpg" alt="Image"></a>
                      <a href=""><img src="img/img-5.jpg" alt="Image"></a>
                      <a href=""><img src="img/img-6.jpg" alt="Image"></a>
                  </div>
              </div> --}}
              
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




@endsection()



