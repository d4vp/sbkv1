@extends('layouts.productos')
@section('content')
<br><div style="background: rgb(0, 0, 0)">
    <h1 style="text-align:center; color:white">DETALLES DEL PRODUCTO</h1>
</div><br>
<div class="container">
    <div class="row">
        <div class="col">
            <center><div style="padding-bottom:25px">
                <div style="border: 2px solid; width:650px; height:600px">
                    <br><center><img src="{{asset($producto->imagen->url)}}" alt="" height="350px"></center>
                    <br><ul>
                        <p><strong>Descripcion: </strong>{{$producto->detallesproducto->descripcion}}</p>
                    </ul>
                </div>
            </div></center>
        </div>
        <div class="col" style="padding-left:0px">
            <div style="padding-bottom:25px">
                <div style="border: 2px solid; width:400px; ">
                    <br>
                    <center><p style="font-size: 35px"><strong>{{$producto->detallesproducto->name}}</strong></p></center>
                    <ul>
                        <li><p style="font-size: 25px"><strong>Precio:</strong> $ {{$producto->precio}}</p></li>
                        <li><p><strong>Marca: </strong>{{$producto->detallesproducto->marca}}</p></li>
                        <li><p><strong>Color: </strong>{{$producto->detallesproducto->color}}</p></li>
                        <li><p><strong>Material: </strong>{{$producto->detallesproducto->material}}</p></li>
                        <li><p><strong>Talla/tamaño: </strong>{{$producto->talla}}</p></li>
                    </ul>
                </div>
            </div>
            <div style="padding-bottom:25px">
                <div style="border: 2px solid; width:400px; ">
                <br><ul>
                        <td style="width: 300px">
                            <div style="justify-content: center; align-items:center; display:flex;" >
                            <div style="float:left;padding-right: 7px; "><a class="btn btn-danger " style="color:black; text-decoration: none;" href="http://localhost/sofonbike/public/soon">Comprar</a></div> 
                            <div style="float:left;border-left: 2px solid rgb(0, 0, 0);height: 35px; padding-left: 7px;"></div>
                            <div style="float:left;padding-right: 7px;"><a class="btn btn-warning "style="color:black; text-decoration: none;" href="http://localhost/sofonbike/public/soon">Añadir al carrito</a></div>
                        </td>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div style="display:flex; justify-content:center; align-items:center;">
    <a class="btn btn-primary" href="http://localhost/sofonbike/public/productos">Volver</a>
</div><br>




@endsection()
