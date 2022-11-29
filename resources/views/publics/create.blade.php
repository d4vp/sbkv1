@extends('layouts.plantilla')
@section('content')

    <div style="display:flex; justify-content:center; align-items:center;" >
    <form action="{{route('productos.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div style="border: 2px solid; width:400px; ">
        <br>
    <h2 style="text-align: center">Formulario - Crear producto</h2>
    

{{-- 
    <div class="form-group">
        {{ Form::label('name') }}
        {{ Form::text('name', $detallesproducto->name, ['class' => 'form-control' ]) }}
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('descripcion') }}
        {{ Form::text('descripcion', $detallesproducto->descripcion, ['class' => 'form-control']) }}
        {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
    </div> --}}
   
{{-- 
    <div style="padding-left: 25px">
        <label>
            User_id:
            <br>
            <input type="text" name="user_id"  required=""title="Se necesita un nombre" size="41px" />
        </label>
        </div> --}}

    <div style="padding-left: 25px">
    <label>
        Nombre:
        <br>
        <input type="text" name="name"  required=""title="Se necesita un nombre" size="41px" />
    </label>
    </div>
    
    <div style="padding-left: 25px">
    <label>
        Descripcion:
        <br>
        <input type="text" name="descripcion" required="" size="41px"/>
    </label>
    <br>
    <label>
        Imagen:
        <br>


        <input type="file" name="imagen" required="" size="41px"/>

    </label>
    <br>
    <label>
        Talla:
        <br>
        <input type="text" name="talla" required="" size="41px"/>
    </label>
    <label>
        Color:
        <br>
        <input type="text" name="color" required="" size="41px"/>
    </label>
    <label>
        Marca:
        <br>
        <input type="text" name="marca" required="" size="41px"/>
    </label>
    <label>
        Cantidad:
        <br>
        <input type="text" name="cantidad" required="" size="41px"/>
    </label>
    <label>
        Precio:
        <br>
        <input type="text" name="precio" required="" size="41px"/>
    </label>



    </div>
    <br>
    <div style="align-items: center; display:flex; justify-content:center">
    <button type="submit" class="btn btn-primary">Enviar</button>
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


