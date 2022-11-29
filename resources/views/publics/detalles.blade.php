@extends('layouts.plantilla')
@section('content')
<div style="display:flex; justify-content:center; align-items:center; padding-bottom:25px" >
    <h2>Detalles del curso</h2>
</div>
<div style="display:flex; justify-content:center; align-items:center; padding-bottom:25px">
<div style="border: 2px solid; width:400px; ">
    <br>
    <ul>
    <li><p><strong>Id: </strong>{{$producto->id}}</p></li>
    <li><p><strong>Nombre: </strong>{{$producto->name}}</p></li>
    <li><p><strong>Descripcion: </strong>{{$producto->descripcion}}</p></li>
    <li><p><strong>Imagen: </strong>{{$producto->imagen}}</p></li>
    <li><p><strong>Marca: </strong>{{$producto->marca}}</p></li>
    <li><p><strong>Color: </strong>{{$producto->color}}</p></li>
    <li><p><strong>Cantidad: </strong>{{$producto->cantidad}}</p></li>
    <li><p><strong>Precio: </strong>{{$producto->Precio}}</p></li>
    <li><p><strong>Talla: </strong>{{$producto->talla}}</p></li>
    <li><p><strong>Creado: </strong>{{$producto->created_at}}</p></li>
    <li><p><strong>Actualizado: </strong>{{$producto->updated_at}}</p></li>
</ul>
</div>
</div>
<div style="display:flex; justify-content:center; align-items:center;">
    <a class="btn btn-primary" href="http://localhost/sofonbike/public/productos">Volver</a>
    </div>
</div>


@endsection()


