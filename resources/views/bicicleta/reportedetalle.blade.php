@extends('layouts.productos')

@section('template_title')
    Bicicleta
@endsection

@section('content')
<br><div style="background: rgb(0, 0, 0)">
    <h1 style="text-align:center; color:white">DETALLES DEL REPORTE</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col card"><br>
            <div class="form-group">
                <center><h2>{{ $bicicleta->detallesproducto->name}}</h2></center> 
            </div>
            <center><div class="container-c" style="border:2px solid; ">
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
            </div></center>
            <div class="form-group">
                <hr><li><strong>Descripcion:</strong></li>
                {{ $bicicleta->detallesproducto->descripcion }}
            </div>
            <div class="form-group">
                <hr><li><strong>Fecha de hurto:</strong></li>
                {{ $bicicleta->fechahurto }}
            </div>
            <div class="form-group">
                <hr><li><strong>Descripcion del hurto:</strong></li>
                {{ $bicicleta->descripcionhurto }}
            </div>
            <div class="form-group">
                <hr><li><strong>Fecha de reporte:</strong></li>
                {{ $bicicleta->created_at}}
            </div>
            <div class="form-group">
                <hr><li><strong>Ubicacion de hurto:</strong></li>
                {{ $bicicleta->ubicacionhurto}}
            </div>
            


        </div>
        <div class="col-4 card">
            <br><center><h2>Detalles</h2></center>
            <div class="card-body">                    
                <div class="form-group">
                    <strong>Tamaño:</strong>
                    {{ $bicicleta->tamaño }}
                </div>
                <div class="form-group">
                    <strong>N_serial:</strong>
                    {{ $bicicleta->n_serial }}
                </div>
                <div class="form-group">
                    <strong>Color:</strong>
                    {{ $bicicleta->detallesproducto->color }}
                </div>
                <div class="form-group">
                    <strong>Material:</strong>
                    {{ $bicicleta->detallesproducto->material }}
                </div>
                <div class="form-group">
                    <strong>Marca:</strong>
                    {{ $bicicleta->detallesproducto->marca }}
                </div>
                <div class="form-group">
                    <strong>Modelo:</strong>
                    {{ $bicicleta->detallesproducto->modelo}}
                </div>

              




            </div>
        </div>
    </div>
</div><br>
@endsection