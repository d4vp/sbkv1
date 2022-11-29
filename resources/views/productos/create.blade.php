@extends('layouts.productos')  

@section('content')
  <br>
  <div style="display:flex; justify-content:center; align-items:center;" >
    <form action="{{route('productos.store')}}" method="POST" action="/ft" enctype="multipart/form-data">
      @csrf
      <div style="border: 2px solid; width:400px;"><br>
        <h2 style="text-align: center">Formulario - Crear producto</h2>
        <div style="padding-left: 25px">
          <label>
            Nombre:
            <br><input type="text" name="name"  required=""title="Se necesita un nombre" size="41px"/>
          </label>
        </div>
        <div style="padding-left: 25px">
          <label>
            Descripcion:
              <br><input type="text" name="descripcion" required="" size="41px"/>
          </label>
        </div>
        <div style="padding-left: 25px">
          <label>
            Imagen:
            <br><input type="file" name="imagen" required="" size="41px" accept="image/*"/>
          </label>
        </div>
        <div style="padding-left: 25px">
          <label>
            Talla:
            <br><input type="text" name="talla" required="" size="41px"/>
          </label>
        </div>
        <div style="padding-left: 25px">
          <label>
            Color:
            <br><input type="text" name="color" required="" size="41px"/>
          </label> 
        </div>
        <div style="padding-left: 25px">
          <label>
            Cantidad:
            <br><input type="text" name="cantidad" required="" size="41px"/>
          </label>
        </div>
        <div style="padding-left: 25px">
          <label>
            Precio:
            <br><input type="text" name="precio" required="" size="41px"/>
          </label>
        </div>
        <div style="padding-left: 25px">
          <label>
            Material:
            <br><input type="text" name="material" required="" size="41px"/>
          </label> 
        </div>
        <div style="padding-left: 25px">
          <label>
            Marca:
            <br><input type="text" name="marca" required="" size="41px"/>
          </label> 
        </div>
        <div style="padding-left: 25px">
          <label>
            Modelo:
            <br><input type="text" name="modelo" required="" size="41px"/>
          </label> 
        </div>
        <div style="padding-left: 25px">
          <label>
            Comprobante:
            <br><input type="file" name="comprobante" required="" size="41px" accept="application/pdf"/>
          </label> 
        </div><br>
      </div>
      <br><div style="align-items: center; display:flex; justify-content:center">
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div><br>
    </form>
  </div><br>
  <div style="display:flex; justify-content:center; align-items:center;">
    <a class="btn btn-primary" href="http://localhost/sofonbike/public/productos">Volver</a>
  </div><br>
@endsection()


