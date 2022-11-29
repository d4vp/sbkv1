@extends('layouts.productos')

@section('template_title')
    {{ $bicicleta->name ?? 'Show Bicicleta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Bicicleta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('bicicletas.index') }}"> Back</a>
                        </div>
                    </div>

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
                            <strong>Name:</strong>
                            {{ $bicicleta->detallesproducto->name }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $bicicleta->detallesproducto->descripcion }}
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
                        <div class="form-group">
                            <strong>Imagen:</strong><br>
                           {{--  @foreach($bicicleta->imagens as $imagen) --}}
                            <img src="{{asset($bicicleta->imagen->url)}}" alt="" height="250px">
                           {{--  @endforeach --}}
                            {{-- {{ $imagen->url}} --}}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion del hurto:</strong>
                            {{ $bicicleta->descripcionhurto}}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de hurto:</strong>
                            {{ $bicicleta->fechahurto}}
                        </div>
                        <div class="form-group">
                            <strong>Ubicacion: </strong>
                            {{ $bicicleta->ubicacionhurto}}
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
