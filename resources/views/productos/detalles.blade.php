@extends('layouts.productos')
@section('content')
<div style="display:flex; justify-content:center; align-items:center; padding-bottom:25px">
    <h2>Detalles del producto</h2>
</div>
<div style="display:flex; justify-content:center; align-items:center; padding-bottom:25px">
    <div style="border: 2px solid; width:400px; ">
        <br><ul>
            <li><p><strong>Id: </strong>{{$producto->id}}</p></li>
            <li><p><strong>Nombre: </strong>{{$producto->detallesproducto->name}}</p></li>
            <li><p><strong>Descripcion: </strong>{{$producto->detallesproducto->descripcion}}</p></li>
            <li><p><strong>Imagen: </strong>{{$producto->imagen->url}}</p><img src="{{asset($producto->imagen->url)}}" alt="" height="200px"></li>
            <li><p><strong>Marca: </strong>{{$producto->detallesproducto->marca}}</p></li>
            <li><p><strong>Color: </strong>{{$producto->detallesproducto->color}}</p></li>
            <li><p><strong>Material: </strong>{{$producto->detallesproducto->material}}</p></li>
            <li><p><strong>Cantidad: </strong>{{$producto->cantidad}}</p></li>
            <li><p><strong>Precio: </strong>{{$producto->precio}}</p></li>
            <li><p><strong>Cantidad: </strong>{{$producto->cantidad}}</p></li>
            <li><p><strong>Talla: </strong>{{$producto->talla}}</p></li>
            <li><p><strong>Comprobante: </strong>{{$producto->comprobante}}</p></li>
            <li><p><strong>Creado: </strong>{{$producto->created_at}}</p></li>
            <li><p><strong>Actualizado: </strong>{{$producto->updated_at}}</p></li>
        </ul>
    </div>
</div>
<div style="display:flex; justify-content:center; align-items:center;">
    <a class="btn btn-primary" href="http://localhost/sofonbike/public/productos">Volver</a>
</div><br>
@endsection()


