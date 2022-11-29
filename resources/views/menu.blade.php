{{-- @extends('layouts.app')
@extends('welcome')

@section('title', 'Home')

@section('content')

 --}}

 @extends('welcome')

 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Tailwind CSS Link -->
    {{--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css"> --}}
     {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
     <script src="{{asset('javascript/ee.js')}}"></script>
     
     <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;600&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="{{asset('css/styles2.css')}}">
     <link rel="stylesheet" href="{{asset('css/styles3.css')}}">
     <script src="https://kit.fontawesome.com/ffec4ec2ed.js" crossorigin="anonymous"></script>
     <script id="csssss">
       $(function() {
       $(".toggle").on("click", function() {
           if ($(".item").hasClass("active")) {
               $(".item").removeClass("active");
           } else {
               $(".item").addClass("active");
           }
       });
     });
       </script>
   </head>
   <body>
    <main>
        @section('content')

        <nav id="classs">
          <ul id="ccc" class="menu">
              <li  id="ccdc"class="logo"><a href="#">FollowAndrew.dev</a></li>
              <li class="item"><a href="#">Home</a></li>
              <li class="item"><a href="#">About</a></li>
              <li class="item"><a href="#">Services</a></li>
              </li>
              <li class="item button"><a href="#">Log In</a></li>
              <li class="item button secondary"><a href="#">Sign Up</a></li>
              <li class="toggle"><span class="bars"></span></li>
          </ul>
      </nav>
      @endsection

      </main>
   </body>

 
 </html>