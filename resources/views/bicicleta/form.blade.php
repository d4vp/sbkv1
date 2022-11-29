<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $detallesproducto->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('tamaño') }}
            {{ Form::text('tamaño', $bicicleta->tamaño, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('N_serial') }}
            {{ Form::text('n_serial', $bicicleta->n_serial, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Descripcion del hurto') }}
            {{ Form::text('descripcionhurto', $bicicleta->descripcionhurto, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Fecha de hurto') }}
            {{ Form::text('fechahurto', $bicicleta->fechahurto, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Ubicacionhurto') }}
            {{ Form::text('ubicacionhurto', $bicicleta->ubicacionhurto, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>



      
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $detallesproducto->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion', 'type'=>'hidden']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('color') }}
            {{ Form::text('color', $detallesproducto->color, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('material') }}
            {{ Form::text('material', $detallesproducto->material, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Talla']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('marca') }}
            {{ Form::text('marca', $detallesproducto->marca, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('modelo') }}
            {{ Form::text('modelo', $detallesproducto->modelo, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
  
        <div class="form-group">
            {{ Form::label('imagen') }}
            {{ Form::file('imagen', $imagen->url, ['class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imagen2') }}
            {{ Form::file('imagen2', $imagen->url, ['class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
  
  
          


        <div class="row" >
            <div class="col">
                <img id="imagenm" src="" alt="" height="250px">
            </div>
        </div>


      {{-- 
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" type="file">
         --}}
          
        <script>  
            document.getElementById("imagen").addEventListener('change', cambiarImagen);
                  function cambiarImagen(event){
                   var file = event.target.files[0];
                   var reader = new FileReader();
                   reader.onload = (event) => {
                       document.getElementById("imagenm").setAttribute('src', event.target.result);
                   };
                   reader.readAsDataURL(file);
                  }
        </script>

<script>  
            document.getElementById("imagen2").addEventListener('change', cambiarImagen);
                  function cambiarImagen(event){
                   var file = event.target.files[0];
                   var reader = new FileReader();
                   reader.onload = (event) => {
                       document.getElementById("imagenm").setAttribute('src', event.target.result);
                   };
                   reader.readAsDataURL(file);
                  }
        </script>








       {{--  <div class="form-group">
            {{ Form::label('imageable_id') }}
            {{ Form::text('imageable_id', $detallesproducto, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>  --}}
     {{--    <div class="form-group">
            {{ Form::label('imageable_type') }}
            {{ Form::text('imageable_type', $detallesproducto, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}


         
      {{--   <div class="form-group">
            {{ Form::label('color') }}
            {{ Form::text('color', $bicicleta->color, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
 --}}
        {{-- <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('descripcion', $detallesproducto->descripcion,['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
{{-- 

       
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imagen') }}
            {{ Form::text('imagen', ['class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('talla') }}
            {{ Form::text('talla', ['class' => 'form-control' . ($errors->has('talla') ? ' is-invalid' : ''), 'placeholder' => 'Talla']) }}
            {!! $errors->first('talla', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('marca') }}
            {{ Form::text('marca', ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>

 --}}
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>