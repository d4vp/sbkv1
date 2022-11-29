<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Name') }}
            {{ Form::text('name', $detallesproducto->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('descripcion', $detallesproducto->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Color') }}
            {{ Form::text('color', $detallesproducto->color, ['class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Material') }}
            {{ Form::text('material', $detallesproducto->material, ['class' => 'form-control' . ($errors->has('talla') ? ' is-invalid' : ''), 'placeholder' => 'Talla']) }}
            {!! $errors->first('talla', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Marca') }}
            {{ Form::text('marca', $detallesproducto->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        {{-- nuevo  --}}
       
        <div class="form-group">
            {{ Form::label('Modelo') }}
            {{ Form::text('modelo', $detallesproducto->color, ['class' => 'form-control' . ($errors->has('color') ? ' is-invalid' : ''), 'placeholder' => 'Color']) }}
            {!! $errors->first('color', '<div class="invalid-feedback">:message</div>') !!}
        </div> 
        








        {{-- <div class="form-group">
            {{ Form::label('imageable_id') }}
            {{ Form::text('imageable_id', $detallesproducto->imageable_id, ['class' => 'form-control' . ($errors->has('imageable_id') ? ' is-invalid' : ''), 'placeholder' => 'Imageable Id']) }}
            {!! $errors->first('imageable_id', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
{{-- 
        <div class="form-group">
            {{ Form::label('imageable_id') }}
            {{ Form::select('imageable_id',$bicicletas,$detallesproducto->imageable_id, ['class' => 'form-control' . ($errors->has('imageable_id') ? ' is-invalid' : ''), 'placeholder' => 'Imageable Id']) }}
            {!! $errors->first('imageable_id', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}

        {{-- <div class="form-group">
            {{ Form::label('imageable_type') }}
            {{ Form::text('imageable_type', $detallesproducto->imageable_type, ['class' => 'form-control' . ($errors->has('imageable_type') ? ' is-invalid' : ''), 'placeholder' => 'Imageable Type']) }}
            {!! $errors->first('imageable_type', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
  
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>