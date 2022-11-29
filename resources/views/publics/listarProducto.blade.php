@extends('layouts.plantilla')  
@section('content')

<div class="container" >

    <table id="idproductos" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th style="text-align:center;">Id</th>
                <th style="text-align:center;">Nombre</th>
                <th style="text-align:center;">Descripcion</th>
                <th style="text-align:center;">Imagen</th>
                <th style="text-align:center;" >Talla</th>
                <th style="text-align:center;">Marca</th>
                <th style="text-align:center;" >Color</th>
                <th style="text-align:center;">Cantidad</th>
                <th style="text-align:center;" >Precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
            <tr>
                <td style="text-align:justify;">{{$producto->id}}</td>
                <td style="text-align:justify;">{{$producto->name}}</td>
                <td style="text-align:justify;">{{$producto->descripcion}}</td>

                <td style="text-align:justify;">{{-- {{$producto->imagen}} --}}
     {{--                <img src="{{ asset('storage').'/'.$producto->imagen}}" alt="" width="200"> --}}
                  {{--   <img src="/img/Multimedia/{{$producto->imagen}}" alt="{{$producto->imagen}}" width="500px"> --}}
                    <img src="{{asset($producto->imagen)}}" alt="" width="100px">
                </td>

                


                <td style="text-align:justify;">{{$producto->talla}}</td>
                <td style="text-align:justify;">{{$producto->marca}}</td>
                <td style="text-align:justify;">{{$producto->color}}</td> 
                <td style="text-align:justify;">{{$producto->cantidad}}</td> 
                <td style="text-align:justify;">{{$producto->precio}}</td> 
               
                <td style="width: 300px">
                    <div style="justify-content: center; align-items:center; display:flex;" >
                    <div style="float:left;padding-right: 7px; "><a class="btn btn-danger " style="color:black; text-decoration: none;" href="{{route('productos.update',$producto)}}">Eliminar</a></div> 
                    {{-- <div style="float:left"><p></p></div> --}}
                    <div style="float:left;border-left: 2px solid rgb(0, 0, 0);height: 35px; padding-left: 7px;"></div>
                    <div style="float:left;padding-right: 7px;"><a class="btn btn-warning "style="color:black; text-decoration: none;" href="{{route('productos.edit',$producto)}}">Editar</a></div>
                    <div style="float:left;border-left: 2px solid rgb(0, 0, 0);height: 35px; padding-left: 7px;"></div>
                    <div><a class="btn btn-primary"style="color:black; text-decoration: none;" href="{{route('productos.detalles',$producto)}}">Show</a></div>
                </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
  {{--   <img src="{{asset('img/Multimedia/1659061904-1.jpg')}}" alt=""> --}}
    
    
    <div style="display:flex; justify-content:center; align-items:center;">
        <a  class="btn btn-primary" href="http://localhost/sofonbike/public/productos/create">Nuevo producto</a>
    </div>


<br>
   
<div>


    <h1>dssssssssssssssssssssssssssssssssss</h1>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

    <table id="idproductos" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th style="text-align:center;">Id</th>
                <th style="text-align:center;">Nombre</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach (Auth::user()->productos as $producto)
            <tr>
                <td style="text-align:justify;">{{$producto->id}}</td>
                <td style="text-align:justify;">{{$producto->name}}</td>
               
               
                <td style="width: 300px">
                    <div style="justify-content: center; align-items:center; display:flex;" >
                    <div style="float:left;padding-right: 7px; "><a class="btn btn-danger " style="color:black; text-decoration: none;" href="{{route('productos.update',$producto)}}">Eliminar</a></div> 
                
                    <div style="float:left;border-left: 2px solid rgb(0, 0, 0);height: 35px; padding-left: 7px;"></div>
                    <div style="float:left;padding-right: 7px;"><a class="btn btn-warning "style="color:black; text-decoration: none;" href="{{route('productos.edit',$producto)}}">Editar</a></div>
                    <div style="float:left;border-left: 2px solid rgb(0, 0, 0);height: 35px; padding-left: 7px;"></div>
                    <div><a class="btn btn-primary"style="color:black; text-decoration: none;" href="{{route('productos.detalles',$producto)}}">Show</a></div>
                </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    




</div>


@endsection()
