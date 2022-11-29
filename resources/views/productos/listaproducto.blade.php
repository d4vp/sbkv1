@extends('layouts.productos')  
@section('content')
    <br><div style="background: rgb(0, 0, 0)">
        <h1 style="text-align:center; color:white">COMPRAR PRODUCTOS</h1>
    </div><br>
    <div class="container">
        <div class="row">
            @foreach ($detallesproductos as $detallesproducto)
            @endforeach
        </div>
        <div class="col" style="padding-right: 0px;padding-left: 0px">
            <table id="idproductos" class="table table-striped table-bordered" style="width:100%  text-align: center">
                <thead></thead>
                <tbody>    
                    @foreach ($productos as $producto)
                    <tr class="shadow p-3 mb-5 bg-body rounded">
                        <td style="text-align:justify; text-align:center;">
                            <p style="padding: 80px; font-size:20px; padding-right:30px; padding-left:30px" >{{ $producto->detallesproducto->name}}</p>
                        </td>
                        <td style="text-align:justify;">
                            <center><div class="container-c">
                                <img class="crop" src="{{asset($producto->imagen->url)}}" alt="" height="30px" >
                                    <style>
                                        .container-c {
                                            width: 185px;
                                            height: 185px;
                                            overflow: hidden;
                                            margin: 10px;
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
                        </td>
                        <td style="text-align:justify; text-align:center;"><p style="padding: 80px; font-size:20px; padding-right:40px; padding-left:40px" >${{$producto->precio}}</p> </td>        
                        <td style="width: 300px; background-color:rgb(228, 174, 39)">
                            <div style="justify-content: center; align-items:center; display:flex;" >
                            <div style="float:left;padding-right: 7px; padding-top:80px "><a class="btn btn-danger " style="color:rgb(255, 255, 255); text-decoration: none; " href="{{route('productos.detallescompra',$producto, $detallesproducto)}}">Detalles</a></div> 
                            <div style="padding-top: 80px; ">
                                <div style="float:left;border-left: 2px solid rgb(0, 0, 0);height: 35px; padding-left: 7px; "></div></div>
                            <div style="float:left;padding-right: 7px; padding-top:80px "><a class="btn btn-dark"style="color:white; text-decoration: none;" href="">Agregar</a></div>
                        </td>
                    </tr>
                    <tr style="">
                        <td style="border-left: hidden; border-right: hidden; ">
                        </td>
                        <td style="border-left: hidden; border-right: hidden; ">
                        </td>
                        <td style="border-left: hidden; border-right: hidden; ">
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-body">{{$productos->links()}}</div>
    </div><br>
@endsection()



