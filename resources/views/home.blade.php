<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   {{--  <script src="{{asset('javascript/ee.js')}}"></script> --}}
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;600&display=swap" rel="stylesheet">
   <script src="https://kit.fontawesome.com/ffec4ec2ed.js" crossorigin="anonymous"></script> {{-- footer icons --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ffec4ec2ed.js" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="{{asset('css/styles2.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles5.css')}}">

    
    <script src="{{asset('js/food.js')}}"></script>
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
            <li><a href="#" class="nav-link px-2 text-secondary">Inicio</a></li>
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
                <li><a class="dropdown-item" href="#">Configuracion</a></li>
                <li><a class="dropdown-item" href="{{ route('cuenta') }}">Perfil</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{ route('login.destroy') }}">Cerrar sesion</a></li>
              </ul>
          </div>
        </div>
      </header>
    
    <main>

<br><br><br><br><br>
{{-- <h1 style="color: black;"><center>Bienvenidos a SOFONBIKE </center> </h1> --}}
<section class="hero" id="hero">
  <div class="container">
      {{-- <h2 class="h2-sub">
          <span class="fil">B</span>ienvenido
      </h2> --}}
      <h1 class="head">Bienvenido a SOFONBIKE</h1>
      {{-- <div class="he-des">
         <h5>Lorem t dol</h5> 
          <a href="#" class="btn cta-btn border-secondary">Explora</a>
      </div> --}}
  </div>
</section>


<section class="disco">
  <div class="container">
      <div class="res-info">
          <div class="res-des">
              <div class="global">
                  <h2 class="h2-sub">
                      <span class="fil">D</span>escubre
                  </h2>
                  <h1 class="head hea-dark">La venta de productos</h1>
                  <div class="circle">
                      <i class="fas fa-circle"></i>
                  </div>
              </div>
              {{-- <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                  Doloremque veniam autem qui magnam ex tempora atque, voluptas
                  voluptatem, recusandae porro corporis assumenda. 
                  Aliquam accusamus blanditiis illo, vero quia tempora praesentium.
              </p> --}}
              <a href="http://localhost/sofonbike/public/productos" class="btn cta-btn">ir</a>
          </div>
         {{--  <div class="image-group pad-rig">
             
             <img src="images/menu-2.jpg" alt="">
              
              <img src="images/menu-3.jpg" alt=""> 
              <img src="{{asset('img/4.jpg')}}" alt="" width="200px"> 
              <img src="images/menu-4.jpg" alt=""> 

      </div> --}}
  </div>
</section>
<br>
<section class="taste bt">
  <div class="container">
      <div class="global">
          {{--  <h2 class="h2-sub">
              <span class="fil">P</span>latillos
          </h2>
          <h1 class="head">Lorem</h1>  --}}
      </div>
  </div>
</section>
<br>
<section class="disco">
  <div class="container">
      <div class="res-info">
          <div class="res-des">
              <div class="global">
                  <h2 class="h2-sub">
                      <span class="fil">D</span>escubre
                  </h2>
                  <h1 class="head hea-dark">Los mejores productos</h1>
                  <div class="circle">
                      <i class="fas fa-circle"></i>
                  </div>
              </div>
              {{-- <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                  Doloremque veniam autem qui magnam ex tempora atque, voluptas
                  voluptatem, recusandae porro corporis assumenda. 
                  Aliquam accusamus blanditiis illo, vero quia tempora praesentium.
              </p> --}}
              <a href="http://localhost/sofonbike/public/listaproductos" class="btn cta-btn">ir</a>
          </div>
         {{--  <div class="image-group pad-rig">
             
             <img src="images/menu-2.jpg" alt="">
              
              <img src="images/menu-3.jpg" alt=""> 
              <img src="{{asset('img/4.jpg')}}" alt="" width="200px"> 
              <img src="images/menu-4.jpg" alt=""> 

      </div> --}}
  </div>
</section>
<br>
<section class="pb bt">
  <div class="container">
      <div class="global">
         {{--  <h2 class="h2-sub">
              <span class="fil">P</span>latillos
          </h2>
          <h1 class="head">Lorem</h1> --}}
      </div>
  </div>
</section>


<section class="disco">
  <div class="container">
      <div class="res-info">
          <div class="res-des">
              <div class="global">
                  <h2 class="h2-sub">
                      <span class="fil">D</span>escubre
                  </h2>
                  <h1 class="head hea-dark">Reporte de bicicletas</h1>
                  <div class="circle">
                      <i class="fas fa-circle"></i>
                  </div>
              </div>
              {{-- <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                  Doloremque veniam autem qui magnam ex tempora atque, voluptas
                  voluptatem, recusandae porro corporis assumenda. 
                  Aliquam accusamus blanditiis illo, vero quia tempora praesentium.
              </p> --}}
              <a href="http://localhost/sofonbike/public/reportes" class="btn cta-btn">ir</a>
          </div>
         {{--  <div class="image-group pad-rig">
             
             <img src="images/menu-2.jpg" alt="">
              
              <img src="images/menu-3.jpg" alt=""> 
              <img src="{{asset('img/4.jpg')}}" alt="" width="200px"> 
              <img src="images/menu-4.jpg" alt=""> 

      </div> --}}
  </div>
</section>
<br>

<section class="pb bt">
  <div class="container">
      <div class="global">
        {{--   <h2 class="h2-sub">
              <span class="fil">P</span>latillos
          </h2>
          <h1 class="head">Lorem</h1> --}}
      </div>
  </div>
</section>




<div id="subir__arriba">
    <i class="fas fa-angle-up"></i>
    <style>
       
    </style>
  </div>
  
  <script>
    let caja=document.getElementById("subir__arriba");
  caja.addEventListener("click",function(){
      document.documentElement.scrollTop=0;
  })
  
  window.addEventListener("scroll",function(){
      if (document.documentElement.scrollTop > 0) {
          caja.style.display="flex"
      } else {
          caja.style.display="none"
      }
  })
  </script>
  

<section class="disco">
  <div class="container">
      <div class="res-info">
          <div class="res-des">
              <div class="global">
                  <h2 class="h2-sub">
                      <span class="fil">D</span>escubre
                  </h2>
                  <h1 class="head hea-dark">Nuestra comunidad</h1>
                  <div class="circle">
                      <i class="fas fa-circle"></i>
                  </div>
              </div>
              {{-- <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                  Doloremque veniam autem qui magnam ex tempora atque, voluptas
                  voluptatem, recusandae porro corporis assumenda. 
                  Aliquam accusamus blanditiis illo, vero quia tempora praesentium.
              </p> --}}
              <a href="http://localhost/sofonbike/public/publicaciones" class="btn cta-btn">ir</a>
          </div>
         {{--  <div class="image-group pad-rig">
             
             <img src="images/menu-2.jpg" alt="">
              
              <img src="images/menu-3.jpg" alt=""> 
              <img src="{{asset('img/4.jpg')}}" alt="" width="200px"> 
              <img src="images/menu-4.jpg" alt=""> 

      </div> --}}
  </div>
</section>
<section class="taste bt">
    <div class="container">
        <div class="global">
            {{--  <h2 class="h2-sub">
                <span class="fil">P</span>latillos
            </h2>
            <h1 class="head">Lorem</h1>  --}}
        </div>
    </div>
  </section>
<br><br><br><br><br><br><br><br><br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/testimonials.css')}}">


<section class="testim" id="testim">
  <div class="wrap">
      <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
      <span id="left-arrow" class="arrow left fa fa-chevron-left"></span>

      <ul class="dots" id="testim-dots">
          <li class="dot active"></li>
          <li class="dot"></li>
          <li class="dot"></li>
          <li class="dot"></li>
          <li class="dot"></li>
      </ul>

      <div class="cont" id="testim-content">
          <div class="active">
              <div class="img"><img  src="{{asset('img/10.png')}}"></div>
              <h2>Lorem N. Ipsum</h2>
              <p style=" display:inline;">&#8220;</p>
              <p style=" display:inline;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quasi aliquid vel voluptatum
                  deleniti! Corrupti velit, porro facere facilis laboriosam accusantium, eos beatae maiores.</p>
                <p style=" display:inline;">&#8221;</p>
                </div>
          
          <div>
              <div class="img"><img  src="{{asset('img/14.png')}}"></div>
              <h2>Lorem L. Ipsum</h2>
              
            <p style=" display:inline;">&#8220;</p>
              <p style=" display:inline;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quasi aliquid vel voluptatum
                  deleniti! Corrupti velit, porro facere facilis laboriosam accusantium, eos beatae maiores.</p>
            <p style=" display:inline;">&#8221;</p>
         
          </div>
          
          <div>
              <div class="img"><img  src="{{asset('img/6.jpg')}}"></div>
              <h2>Lorem R. Ipsum</h2>
            
            <p style=" display:inline;">&#8220;</p>
              <p style=" display:inline;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quasi aliquid vel voluptatum
                  deleniti! Corrupti velit, porro facere facilis laboriosam accusantium, eos beatae maiores.</p>
                  <p style=" display:inline;">&#8221;</p>
            
          </div>
          
          <div>
                <div class="img"><img  src="{{asset('img/9.jpg')}}"></div>
              
                <h2>Lorem P. Ipsum</h2>
               
                    <p style=" display:inline;">&#8220;</p>
                    <p style=" display:inline;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quasi aliquid vel voluptatum
                        deleniti! Corrupti velit, porro facere facilis laboriosam accusantium, eos beatae maiores.</p>
                    <p style=" display:inline;">&#8221;</p>
              
          </div>
          
          <div>
              <div class="img"><img  src="{{asset('img/4.jpg')}}"></div>
              <h2>Lorem Q. Ipsum</h2>
             
                <p style=" display:inline;">&#8220;</p>
                    <p style=" display:inline;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quasi aliquid vel voluptatum
                    deleniti! Corrupti velit, porro facere facilis laboriosam accusantium, eos beatae maiores.
                    </p>
                <p style=" display:inline;">&#8221;</p>
            
                
          </div>
      </div>

  </div>
</section>
<br>
<div class="container">
    <div class="row">
      <div class="col shadow" style="background-color: rgb(43, 137, 226)">
        <center><h1 style="color:white; padding-top:290px">Contactanos</h1></center>
      </div>
      <div class="col">
        <form class="shadow" action="">
            <div class="title">
            <h2>CONTACT</h2>
            </div>
            <div class="half">
            <div class="item">
                <label for="name">NAME</label>
                <input type="text" id = "name">
            </div>
            <div class="item">
                <label for="email">EMAIL</label>
                <input type="text" id = "email">
            </div>
            </div>
            <div class="full">
            <label for="message">MESSAGE</label>
            <textarea name="" id = "message"></textarea>
            </div>
            <div class="action">
            <input type="submit" value = "SEND MESSAGE">
            <input type="reset" value = "RESET">
            </div>
        </form>
      </div>
    </div>
  </div><br>



<script src="{{asset('js/tt.js')}}"></script>



    </main>
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
{{-- 
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script> --}}
</body>
</html>
