<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $pelicula->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('Descripcion', $pelicula->Descripcion, ['class' => 'form-control' . ($errors->has('Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('Descripcion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('Estado', $pelicula->Estado, ['class' => 'form-control' . ($errors->has('Estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('Estado', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Stock') }}
            {{ Form::text('Stock', $pelicula->Stock, ['class' => 'form-control' . ($errors->has('Stock') ? ' is-invalid' : ''), 'placeholder' => 'Stock']) }}
            {!! $errors->first('Stock', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PrecioAlquiler') }}
            {{ Form::text('PrecioAlquiler', $pelicula->PrecioAlquiler, ['class' => 'form-control' . ($errors->has('PrecioAlquiler') ? ' is-invalid' : ''), 'placeholder' => 'Precioalquiler']) }}
            {!! $errors->first('PrecioAlquiler', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PrecioVenta') }}
            {{ Form::text('PrecioVenta', $pelicula->PrecioVenta, ['class' => 'form-control' . ($errors->has('PrecioVenta') ? ' is-invalid' : ''), 'placeholder' => 'Precioventa']) }}
            {!! $errors->first('PrecioVenta', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Favorito') }}
            {{ Form::text('Favorito', $pelicula->Favorito, ['class' => 'form-control' . ($errors->has('Favorito') ? ' is-invalid' : ''), 'placeholder' => 'Favorito']) }}
            {!! $errors->first('Favorito', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>