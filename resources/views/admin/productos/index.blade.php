<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>hola productos</h1>

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
                @foreach ($productos as $producto)
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
</body>
</html>