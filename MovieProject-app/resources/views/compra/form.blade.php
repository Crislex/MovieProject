<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('FechaVenta') }}
            {{ Form::text('FechaVenta', $compra->FechaVenta, ['class' => 'form-control' . ($errors->has('FechaVenta') ? ' is-invalid' : ''), 'placeholder' => 'Fechaventa']) }}
            {!! $errors->first('FechaVenta', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('IdPeliculaC') }}
            {{ Form::text('IdPeliculaC', $compra->IdPeliculaC, ['class' => 'form-control' . ($errors->has('IdPeliculaC') ? ' is-invalid' : ''), 'placeholder' => 'Idpeliculac']) }}
            {!! $errors->first('IdPeliculaC', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('IdUsuarioC') }}
            {{ Form::text('IdUsuarioC', $compra->IdUsuarioC, ['class' => 'form-control' . ($errors->has('IdUsuarioC') ? ' is-invalid' : ''), 'placeholder' => 'Idusuarioc']) }}
            {!! $errors->first('IdUsuarioC', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>