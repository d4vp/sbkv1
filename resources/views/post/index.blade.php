@extends('layouts.plantilla')  
@section('content')

<div class="container" >

    <table id="idghfhproductos" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
              
                <th style="text-align:center;">Descripcion</th>
               
                <th style="text-align:center;">Categoria</th>
                <th style="text-align:center;" >user_id</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $post->descripcion }}</td>
											<td>{{ $post->categoria_id }}</td>
											 <td>{{ $post->user_id }}</td> 

                                            <td>
                                                <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('posts.show',$post->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('posts.edit',$post->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
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
