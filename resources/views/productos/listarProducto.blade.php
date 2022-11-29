@extends('layouts.productos')  
@section('content')
    <br><div style="background: rgb(0, 0, 0)">
            <h1 style="text-align:center; color:white">MIS PRODUCTOS</h1>
    </div>
   {{--  <br><div style="background: rgb(0, 0, 0)">
        <div style="display:flex; justify-content:center; align-items:center;padding: 5px">
            <a  class="btn btn-primary" href="http://localhost/sofonbike/public/productos/create">Nuevo producto</a>
        </div>
    </div>
    <br><div class="container">
        <div class="row">    --}}   
            @foreach ($detallesproductos as $detallesproducto)   
            @endforeach
            @foreach ($imagens as $imagen)    
            @endforeach
          {{--   <div class="col" style="padding-right: 0px;padding-left: 0px"">
                <div class="" style="width: 1150px">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr style="background-color: #136f83; color:white">
                                    <th style="text-align:center;">No</th>
                                    <th style="text-align:center;">Nombre</th>
                                    <th style="text-align:center;">Descripcion</th>
                                    <th style="text-align:center;">Imagen</th>
                                    <th style="text-align:center;">Color</th>
                                    <th style="text-align:center;">Material</th>
                                    <th style="text-align:center;">Marca</th>
                                    <th style="text-align:center;">Modelo</th> 
                                    <th style="text-align:center;" >Talla</th>
                                    <th style="text-align:center;">Cantidad</th>
                                    <th style="text-align:center;" >Precio</th>    
                                    <th style="text-align:center;" >Comprobante</th>                
                                    <th style="text-align:center;" >Acciones</th>   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (Auth::user()->productos as $producto)
                                <tr>
                                    <td style="padding: 45px; padding-right:25px; padding-left:25px; background-color:rgb(121, 116, 116); color:white">{{ ++$i }}</td>
                                    <td style="text-align:justify;">{{$producto->detallesproducto->name}}</td>
                                    <td style="text-align:justify;">{{$producto->detallesproducto->descripcion}}</td>
                                <td style="text-align:justify;" >
                                    <center><div class="container-c">
                                        <img src="{{asset($producto->imagen->url)}}" alt="" height="90px">
                                            <style>
                                                .container-c {
                                                    width: 80px;
                                                    height: 80px;
                                                    overflow: hidden;
                                                    position: relative;
                                                             
                                                    }
                                                .container-c > .crop {
                                                    position:absolute;
                                                    left: -100%;
                                                    right: -100%;
                                                    top: -100%;
                                                    bottom: -100%;
                                                    
                                                    min-height: 100%;
                                                    min-width: 100%;
                                                                }
                                            </style>
                                    </div></center>
                                </td>
                                    <td style="text-align:justify;">{{$producto->detallesproducto->color}}</td>
                                    <td style="text-align:justify;">{{$producto->detallesproducto->material}}</td>
                                    <td style="text-align:justify;">{{$producto->detallesproducto->marca}}</td>
                                    <td style="text-align:justify;">{{$producto->detallesproducto->modelo}}</td>
                                    <td style="text-align:justify;">{{$producto->talla}}</td>
                                    <td style="text-align:justify;">{{$producto->cantidad}}</td> 
                                    <td style="text-align:justify;">{{$producto->precio}}</td> 
                                    <td style="text-align:justify;">{{$producto->comprobante}}</td> 
                                    <td style="width: 300px">
                                        <div style="justify-content: center; align-items:center; display:flex;" >
                                        <div style="float:left;padding-right: 7px; "><a class="btn btn-danger " style="color:black; text-decoration: none;" href="{{route('productos.update',$producto)}}">Delete</a></div> 
                                        <div style="float:left;border-left: 2px solid rgb(0, 0, 0);height: 35px; padding-left: 7px;"></div>
                                        <div style="float:left;padding-right: 7px;"><a class="btn btn-warning "style="color:black; text-decoration: none;" href="{{route('productos.edit',$producto, $detallesproducto)}}">Edit</a></div>
                                        <div style="float:left;border-left: 2px solid rgb(0, 0, 0);height: 35px; padding-left: 7px;"></div>
                                        <div><a class="btn btn-primary"style="color:black; text-decoration: none;" href="{{route('productos.detalles',$producto, $detallesproducto)}}">Show</a></div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div> 
            </div>
        </div>   
        <div class="card-body">{{$productos->links()}}</div>  
    </div><br> --}}




    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
    
                            <span id="card_title">
                                {{ __('Productos') }}
                            </span>
    
                             <div class="float-right">
                                <a href="{{ route('productos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo producto') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr style="background-color: #136f83; color:white">
                                        <th style="text-align:center;">No</th>
                                        <th style="text-align:center;">Nombre</th>
                                        <th style="text-align:center;">Descripcion</th>
                                        <th style="text-align:center;">Imagen</th>
                                        <th style="text-align:center;">Color</th>
                                        <th style="text-align:center;">Material</th>
                                        <th style="text-align:center;">Marca</th>
                                        <th style="text-align:center;">Modelo</th> 
                                        <th style="text-align:center;" >Talla</th>
                                        <th style="text-align:center;">Cantidad</th>
                                        <th style="text-align:center;" >Precio</th>    
                                        <th style="text-align:center;" >Comprobante</th>                
                                        <th style="text-align:center;" >Acciones</th>   
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (Auth::user()->productos as $producto)
                                    <tr>
                                        <td style="padding: 45px; padding-right:25px; padding-left:25px; background-color:rgb(121, 116, 116); color:white">{{ ++$i }}</td>
                                        <td style="text-align:justify;">{!! Str::limit($producto->detallesproducto->name, 30, ' ...') !!}</td>
                                        <td style="text-align:justify;">{!! Str::limit($producto->detallesproducto->descripcion, 30, ' ...') !!}</td>
                                    <td style="text-align:justify;" >
                                        <center><div class="container-c">
                                            <img src="{{asset($producto->imagen->url)}}" alt="" height="90px">
                                                <style>
                                                    .container-c {
                                                        width: 80px;
                                                        height: 80px;
                                                        overflow: hidden;
                                                        position: relative;
                                                                 
                                                        }
                                                    .container-c > .crop {
                                                        position:absolute;
                                                        left: -100%;
                                                        right: -100%;
                                                        top: -100%;
                                                        bottom: -100%;
                                                        
                                                        min-height: 100%;
                                                        min-width: 100%;
                                                                    }
                                                </style>
                                        </div></center>
                                    </td>
                                        <td style="text-align:justify;">{{$producto->detallesproducto->color}}</td>
                                        <td style="text-align:justify;">{{$producto->detallesproducto->material}}</td>
                                        <td style="text-align:justify;">{{$producto->detallesproducto->marca}}</td>
                                        <td style="text-align:justify;">{{$producto->detallesproducto->modelo}}</td>
                                        <td style="text-align:justify;">{{$producto->talla}}</td>
                                        <td style="text-align:justify;">{{$producto->cantidad}}</td> 
                                        <td style="text-align:justify;">{{$producto->precio}}</td> 
                                        <td style="text-align:justify;">{{$producto->comprobante}}</td> 
                                        <td style="width: 300px">
                                            <div style="justify-content: center; align-items:center; display:flex;" >
                                            <div style="float:left;padding-right: 7px; "><a class="btn btn-danger " style="color:black; text-decoration: none;" href="{{route('productos.update',$producto)}}">Delete</a></div> 
                                            <div style="float:left;border-left: 2px solid rgb(0, 0, 0);height: 35px; padding-left: 7px;"></div>
                                            <div style="float:left;padding-right: 7px;"><a class="btn btn-warning "style="color:black; text-decoration: none;" href="{{route('productos.edit',$producto, $detallesproducto)}}">Edit</a></div>
                                            <div style="float:left;border-left: 2px solid rgb(0, 0, 0);height: 35px; padding-left: 7px;"></div>
                                            <div><a class="btn btn-primary"style="color:black; text-decoration: none;" href="{{route('productos.detalles',$producto, $detallesproducto)}}">Show</a></div>
                                        </td>
                                    </tr>
                                    @endforeach
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="">  {!! $productos->links() !!}</div>   
            </div>
        </div>
@endsection()

