@extends('layouts.productos')  
@section('content')
<br><div style="background: rgb(0, 0, 0)">
    <h1 style="text-align:center; color:white">REPORTES</h1>
</div><br>

<div style="background: rgb(0, 0, 0)">
    <center><a class="btn btn-dark"style="color:white; text-decoration: none;" href="http://localhost/sofonbike/public/bicicletas/create">Crear reporte</a>
    <a class="btn btn-dark"style="color:white; text-decoration: none;" href="http://localhost/sofonbike/public/bicicletas">Ver mis reportes</a></center>
</div><br>
    
        <div class="col-6" style="padding-left: 250px">
            <table id="idproductos" class="table table-striped table-bordered" style="width:100%  text-align: center">
                <thead></thead>
                <tbody>    
                  
                @foreach ($bicicletas as $bicicleta)
                <tr style="background-color: rgb(55, 107, 202)">
                    <td>
                        <div style="border:2px solid ; padding-top:25px; padding-bottom:25px; padding-left:25px; padding-right:25px; width:320px; background-color:white" >
                            <div class="container-c" style="border:2px solid; ">
                                <img src="{{asset($bicicleta->imagen->url)}}"  alt="" height="270px">
                                    <style>
                                        .container-c {
                                            width: 265px;
                                            height: 265px;
                                            overflow: hidden;
                                            position: relative;
                                                    }
                                        .container-c > .crop {
                                            position:absolute;
                                            left: -100%;
                                            right: -100%;
                                            top: -100%;
                                            bottom: -100%;
                                            margin: auto;
                                            min-height: 100%;
                                            min-width: 100%;
                                                    }               
                                    </style>
                            </div>
                        </div>
                    </td>
                    <td style="width:320px"> 
                        <div class="card-body shadow p-3 h-100" style="width:520px; background-color:white">
                            <p class="card-text">Name:<small class="text-muted">  {{$bicicleta->detallesproducto->name}}</small></p>
                            <p class="card-text">Descripcion del hurto: <small class="text-muted"> {{$bicicleta->descripcionhurto}}</small></p>
                            <p class="card-text">Ubicacion de hurto: <small class="text-muted">  {{$bicicleta->ubicacionhurto}}</small></p>
                            <p class="card-text">Fecha de reporte:<small class="text-muted"> {{$bicicleta->created_at}}</p></li></small></p>
                            <p class="card-text">Fecha de hurto:<small class="text-muted">   {{$bicicleta->fechahurto}}</p></li></small></p>
                            <div style="justify-content: center; align-items:center; display:flex; " >
                                <div style="float:left;padding-right: 7px; padding-top:10px "><a class="btn btn-danger " style="color:rgb(255, 255, 255); text-decoration: none;"  href="{{route('bicicleta.reportedetalle',$bicicleta)}}" >Mas detalles</a></div> 
                                <div style="padding-top: 10px;">
                                    <div style="float:left;border-left: 2px solid rgb(0, 0, 0);height: 35px; padding-left: 7px; "></div>
                                </div>
                                <div style="float:left;padding-right: 7px; padding-top:10px "><a class="btn btn-dark"style="color:white; text-decoration: none;" href="http://localhost/sofonbike/public/soon">Contactar</a></div>
                            </div><br>
                            
                        <div class="card-body shadow p-3 h-100">
                            <p class="card-text"><small class="text-muted"> Comentarios...</small></p> 
                        </div>
                    </td>   
                    </tr>
                    <tr>
                        <td style="border-left: hidden; border-right: hidden; "></td>
                        <td style="border-left: hidden; border-right: hidden; "></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
       
@endsection()

