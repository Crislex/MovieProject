<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('FechaInicio') }}
            {{ Form::text('FechaInicio', $alquiler->FechaInicio, ['class' => 'form-control' . ($errors->has('FechaInicio') ? ' is-invalid' : ''), 'placeholder' => 'Fechainicio']) }}
            {!! $errors->first('FechaInicio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FechaFinal') }}
            {{ Form::text('FechaFinal', $alquiler->FechaFinal, ['class' => 'form-control' . ($errors->has('FechaFinal') ? ' is-invalid' : ''), 'placeholder' => 'Fechafinal']) }}
            {!! $errors->first('FechaFinal', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('IdPeliculaA') }}
            {{ Form::text('IdPeliculaA', $alquiler->IdPeliculaA, ['class' => 'form-control' . ($errors->has('IdPeliculaA') ? ' is-invalid' : ''), 'placeholder' => 'Idpeliculaa']) }}
            {!! $errors->first('IdPeliculaA', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('IdUsuarioA') }}
            {{ Form::text('IdUsuarioA', $alquiler->IdUsuarioA, ['class' => 'form-control' . ($errors->has('IdUsuarioA') ? ' is-invalid' : ''), 'placeholder' => 'Idusuarioa']) }}
            {!! $errors->first('IdUsuarioA', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>