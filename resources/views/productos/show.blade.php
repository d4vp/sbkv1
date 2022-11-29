@extends('layouts.plantilla')
@section('content')
<div style="display:flex; justify-content:center; align-items:center; padding-bottom:25px"><h2>¿Quieres eleminar el producto? </h2></div>
<form action="{{route('productos.destroy',$producto)}}" method="POST">
    @csrf
    @method('delete')
    <div style="display:flex; justify-content:center; align-items:center"><button  class="btn btn-warning" type="submit">Eliminar</button></div><br>
</form>
<div style="display:flex; justify-content:center; align-items:center;"><a class="btn btn-primary" href="http://localhost/sofonbike/public/productos">Volver</a></div>
@endsection()

