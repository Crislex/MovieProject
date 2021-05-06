@extends('layouts.app')

@section('template_title')
    {{ $pelicula->name ?? 'Show Pelicula' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Pelicula</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('peliculas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $pelicula->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $pelicula->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $pelicula->Estado }}
                        </div>
                        <div class="form-group">
                            <strong>Stock:</strong>
                            {{ $pelicula->Stock }}
                        </div>
                        <div class="form-group">
                            <strong>Precioalquiler:</strong>
                            {{ $pelicula->PrecioAlquiler }}
                        </div>
                        <div class="form-group">
                            <strong>Precioventa:</strong>
                            {{ $pelicula->PrecioVenta }}
                        </div>
                        <div class="form-group">
                            <strong>Favorito:</strong>
                            {{ $pelicula->Favorito }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
