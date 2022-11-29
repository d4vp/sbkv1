@extends('layouts.productos')
@section('content')
    <div style="display:flex; justify-content:center; align-items:center;" >
        <form action="{{route('productos.update', $producto)}}" method="POST"  enctype="multipart/form-data">
            @csrf
            @method('put')
            <div style="border: 2px solid; width:400px;"><br>
                <h2 style="text-align: center">Editar producto</h2>
                <div style="padding-left: 25px">
                    <label>
                        Talla:
                        <br><input type="text" name="talla" value="{{$producto->talla}}" size="41px">
                    </label>
                </div>         
                <div style="padding-left: 25px">
                    <label>
                        Cantidad:
                        <br><input type="text" name="cantidad" value="{{$producto->cantidad}}" size="41px"> 
                    </label>
                </div>    
                <div style="padding-left: 25px">
                    <label>
                        Precio:
                        <br><input type="text" name="precio" value="{{$producto->precio}}" size="41px"> 
                    </label>
                </div>  
                <div style="padding-left: 25px">
                    <label>
                        Imagen:
                        <br><input type="file" name="imagen" value="{{$imagen->url}}" size="41px"> 
                    </label>
                </div>
                <div style="padding-left: 25px">
                    <label>
                        Nombre:
                        <br><input type="text" name="name" value="{{$producto->detallesproducto->name}}" size="41px">
                    </label>
                </div>
                <div style="padding-left: 25px">
                    <label>
                        Descripcion:
                        <br><input type="text" name="descripcion" value="{{$producto->detallesproducto->descripcion}}" size="41px">
                    </label>
                </div>
                <div style="padding-left: 25px">
                    <label>
                        Marca:
                        <br><input type="text" name="marca" value="{{$producto->detallesproducto->marca}}" size="41px">
                    </label>
                </div>
                <div style="padding-left: 25px">
                    <label>
                        Color:
                        <br><input type="text" name="color" value="{{$producto->detallesproducto->color}}" size="41px">
                    </label>
                </div>     
                <div style="padding-left: 25px">
                    <label>
                        Modelo:
                        <br><input type="text" name="modelo" value="{{$producto->precio}}" size="41px"> 
                    </label>
                </div>       
                <div style="padding-left: 25px">
                    <label>
                        Material:
                        <br><input type="text" name="material" value="{{$producto->detallesproducto->material}}" size="41px"> 
                    </label>
                </div>
                <div style="padding-left: 25px">
                    <label>
                        Comprobante:
                        <br><input type="text" name="comprobante" value="{{$producto->comprobante}}" size="41px"> 
                    </label>
                </div><br>
                <div style="display:flex; justify-content:center; align-items:center;">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div><br>
            </div>
        </form>
    </div><br>
    <div style="display:flex; justify-content:center; align-items:center;">
        <a class="btn btn-primary" href="http://localhost/sofonbike/public/productos">Volver</a>
    </div>
@endsection()


