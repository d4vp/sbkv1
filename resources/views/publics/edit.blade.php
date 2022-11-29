@extends('layouts.plantilla')
@section('content')
    <div style="display:flex; justify-content:center; align-items:center;" >
    <form action="{{route('productos.update', $producto)}}" method="POST">
    @csrf
    @method('put')
    <div style="border: 2px solid; width:400px; ">
        <br>
    <h2 style="text-align: center">Editar curso</h2>
    <div style="padding-left: 25px">
    <label>
        Curso:
        <br>
        <input type="text" name="name" value="{{$producto->name}}" size="41px">
    </label>
    </div>
    <br>
    <div style="padding-left: 25px">
    <label>
        Descripcion:
        <br>
        <input type="text" name="descripcion" value="{{$producto->descripcion}}" size="41px">
    </label>
    </div>
    <div style="padding-left: 25px">
        <label>
            Marca:
            <br>
            <input type="text" name="marca" value="{{$producto->marca}}" size="41px">
        </label>
        </div>
        <div style="padding-left: 25px">
            <label>
                Color:
                <br>
                <input type="text" name="color" value="{{$producto->color}}" size="41px">
            </label>
            </div>
            <div style="padding-left: 25px">
                <label>
                    Talla:
                    <br>
                    <input type="text" name="talla" value="{{$producto->talla}}" size="41px">
                </label>
                </div>
                    <div style="padding-left: 25px">
                        <label>
                            Imagen:
                            <br>
                             <input type="text" name="imagen" value="{{$producto->imagen}}" size="41px"> 
                        </label>
                        </div>
                        <div style="padding-left: 25px">
                            <label>
                                cantidad:
                                <br>
                                 <input type="text" name="cantidad" value="{{$producto->cantidad}}" size="41px"> 
                            </label>
                            </div>
                            <div style="padding-left: 25px">
                                <label>
                                    precio:
                                    <br>
                                     <input type="text" name="precio" value="{{$producto->precio}}" size="41px"> 
                                </label>
                                </div>
                        




    <br>
    <div style="display:flex; justify-content:center; align-items:center;">
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </div>
    <br>
    </div>
        </form>
    </div>   
<br>
<div style="display:flex; justify-content:center; align-items:center;">
    <a class="btn btn-primary" href="http://localhost/sofonbike/public/productos">Volver</a>
    </div>
</div>



    @endsection()


