@extends('layouts.app')

@section('template_title')
    {{ $imagen->name ?? 'Show Imagen' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Imagen</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('imagens.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Url:</strong>
                            {{ $imagen->url }}
                        </div>
                        <div class="form-group">
                            <strong>Imageable Id:</strong>
                            {{ $imagen->imageable_id }}
                        </div>
                        <div class="form-group">
                            <strong>Imageable Type:</strong>
                            {{ $imagen->imageable_type }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
