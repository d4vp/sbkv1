@extends('layouts.productos')

@section('template_title')
    Update Posteo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">
                @includeif('partials.errors')           
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Posteo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('posteos.update', $posteo->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                            @include('posteo.form')
                        </form>
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