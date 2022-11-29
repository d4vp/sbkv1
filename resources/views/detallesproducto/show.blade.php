@extends('layouts.app')

@section('template_title')
    {{ $detallesproducto->name ?? 'Show Detallesproducto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Detallesproducto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detallesproductos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $detallesproducto->name }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $detallesproducto->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Color:</strong>
                            {{ $detallesproducto->color }}
                        </div>
                        
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $detallesproducto->modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $detallesproducto->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Color:</strong>
                            {{ $detallesproducto->color }}
                        </div>
                         <div class="form-group">
                            <strong>Imageable Id:</strong>
                            {{ $detallesproducto->imageable_id }}
                        </div>
                        <div class="form-group">
                            <strong>Imageable Type:</strong>
                            {{ $detallesproducto->imageable_type }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
