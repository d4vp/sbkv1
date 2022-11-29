@extends('layouts.productos')

@section('template_title')
    Bicicleta
@endsection

@section('content')
<br>
<div style="background: rgb(0, 0, 0)">
    <h1 style="text-align:center; color:white">MIS REPORTES</h1>
</div>
<br>
    <div class="container-fluid"  style="padding-top:0px">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Reporte de bicicleta') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('bicicletas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo reporte') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
 


                  <div class="card-body">
                        <div class="row">
                       {{--      <div class="col-6" style="padding-right: 0px;padding-left: 0px">
                                <div class="" style="width: 550px">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            <thead class="thead">
                                                <tr>           
                                                    <th>No</th>	                         
                                                    <th>Nombre</th>
                                                    <th>Descripcion</th>
                                                    <th>Color</th>
                                                    <th>Material</th>
                                                    <th>Marca</th>
                                                    <th>Modelo</th>
                                                </tr>
                                            </thead>
                                            <tbody> --}}
                                                @foreach ($detallesproductos as $detallesproducto)
                                           {{--  <tr>
                                                <td style="padding-top: 234px">{{ ++$i }}</td>
                                                <td>{{ $detallesproducto->name }}</td>
                                                <td>{{ $detallesproducto->descripcion }}</td>
											<td>{{ $detallesproducto->color }}</td>
											<td>{{ $detallesproducto->material }}</td>
											<td>{{ $detallesproducto->marca }}</td>
											<td>{{ $detallesproducto->modelo }}</td>
                                            </tr> --}}
                                                @endforeach
                                     {{--        </tbody>
                                        </table>
                                    </div>
                                </div> 
                            </div>     --}}
                            {{-- <div class="col" style="padding-right: 0px;padding-left: 0px">
                                <div class="" style="width: 190px">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            <thead class="thead">
                                                <tr>           
                                                    <th>Imagen</th>	                         
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($imagens as $imagen)
                                
                                                <tr>
                                                <td><img src="{{asset($imagen->url)}}" alt="" height="143px" width="175px"></td>
                                            </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div> 
                            </div>     --}}
                            <div class="col" style="padding-right: 0px;padding-left: 0px">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover"> 
                                            <thead class="thead">
                                                <tr style="background-color: #136f83; color:white">
                                                    <th style="text-align:center;">No</th>
                                                    <th style="text-align:center;">Nombre</th>
                                                    <th style="text-align:center">
                                                       
                                                       <p style="text-align:center">
                                                        Descripcion</p> 
                                                        
                                                     
                                                    </th>
                                                        


                                                    <th style="text-align:center;">Imagen</th>
                                                    <th style="text-align:center;">Color</th>
                                                    <th style="text-align:center;">Material</th>
                                                    <th style="text-align:center;">Marca</th>
                                                    <th style="text-align:center;">Modelo</th>
                                                {{--     <th>Imagen</th>	      --}}

                                                    <th style="text-align:center;">Tamaño</th>
                                                    <th style="text-align:center;">N_serial</th>   

                                                    <th style="text-align:center;">Descripcionhurto</th>
                                                    <th style="text-align:center;">Fechahurto</th>  
                                                    <th style="text-align:center;">Ubicacionhurto</th>  
                                                  <th>  <center>Acciones</center></th>  
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($bicicletas as $bicicleta)
                                                    <tr>
                                                    <td style="padding: 45px; padding-right:25px; padding-left:25px; background-color:rgb(121, 116, 116); color:white">{{ ++$i }}</td>
                                                    <td>{{ $bicicleta->detallesproducto->name }}</td>
                                                    <td>
                                                       {{--  <style>
                                                            p{
                                                                text-overflow: ellipsis, 
                                                                overflow: hidden, 
                                                                display:inline-block,
                                                                width:10px;
                                                                white-space: nowrap;
                                                            }
                                                        </style> --}}

                                                       {{--  {{str_limit($bicicleta->detallesproducto->descripcion, $limit = 20)}} --}}
                                                        {!! Str::limit($bicicleta->detallesproducto->descripcion, 30, ' ...') !!}
                                                     {{--    <p>{{ $bicicleta->detallesproducto->descripcion }}</p> --}}
                                                        
                                                        </td>
                                                    @foreach($imagens as $imagen)
                                                    @endforeach
                                                    <td>



    
                                                    <center><div class="container-c">
                                                        <img src="{{asset($bicicleta->imagen->url)}}" alt="" height="110px">
                                                            <style>
                                                                .container-c {
                                                                                width: 105px;
                                                                                height: 105px;
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

                                                    </td>
                                                     
                                                    <td>{{ $bicicleta->detallesproducto->color }}</td>
                                                    <td>{{ $bicicleta->detallesproducto->material }}</td>
                                                    <td>{{ $bicicleta->detallesproducto->marca }}</td>
                                                    <td>{{ $bicicleta->detallesproducto->modelo }}</td>

                                                        <td>{{ $bicicleta->tamaño }}</td>
                                                        <td>{{ $bicicleta->n_serial }}</td>

                                                        <td>{!! Str::limit($bicicleta->descripcionhurto, 30, ' ...') !!}</td>
                                                        <td>{{ $bicicleta->fechahurto }}</td>
                                                        <td>{{ $bicicleta->ubicacionhurto }}</td>
                                                      
                                                       <td >
                                                            <form action="{{ route('bicicletas.destroy',$bicicleta->id) }}" method="POST">
                                                                <a class="btn btn-sm btn-primary " href="{{ route('bicicletas.show',$bicicleta->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                                <a class="btn btn-sm btn-success" href="{{ route('bicicletas.edit',$bicicleta->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            
                                        </table>
                                    </div>             
                                </div>
                            </div>  
                        </div>
                    </div>

                    
                </div>
                <div style="padding-left: 95px;">
                    {!! $bicicletas->links() !!}
                </div>
               
            </div>
        </div>
    </div>
@endsection
