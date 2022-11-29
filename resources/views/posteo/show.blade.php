@extends('layouts.productos')

@section('template_title')
    {{ $posteo->name ?? 'Show Posteo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Posteo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('posteos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{!!$posteo->descripcion!!}}
                        </div>
                        <div class="form-group">
                            <strong>Categoria Id:</strong>
                            {{ $posteo->categoria->name }}
                        </div>
                       
                        <div class="form-group">
                            <strong>Imagen:</strong><br>
                            <img src="{{asset($posteo->imagen)}}" alt="" height="250px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<script>
    ClassicEditor
        .create( document.querySelector( '#descripcion' ) )
        .catch( error => {
            console.error( error );
        } );
</script>