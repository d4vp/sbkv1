<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('url') }}
            {{ Form::text('url', $imagen->url, ['class' => 'form-control' . ($errors->has('url') ? ' is-invalid' : ''), 'placeholder' => 'Url']) }}
            {!! $errors->first('url', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imageable_id') }}
            {{ Form::text('imageable_id', $imagen->imageable_id, ['class' => 'form-control' . ($errors->has('imageable_id') ? ' is-invalid' : ''), 'placeholder' => 'Imageable Id']) }}
            {!! $errors->first('imageable_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imageable_type') }}
            {{ Form::text('imageable_type', $imagen->imageable_type, ['class' => 'form-control' . ($errors->has('imageable_type') ? ' is-invalid' : ''), 'placeholder' => 'Imageable Type']) }}
            {!! $errors->first('imageable_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>