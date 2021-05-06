@extends('layouts.app')

@section('template_title')
    {{ $alquiler->name ?? 'Show Alquiler' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Alquiler</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('alquilers.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fechainicio:</strong>
                            {{ $alquiler->FechaInicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fechafinal:</strong>
                            {{ $alquiler->FechaFinal }}
                        </div>
                        <div class="form-group">
                            <strong>Idpeliculaa:</strong>
                            {{ $alquiler->IdPeliculaA }}
                        </div>
                        <div class="form-group">
                            <strong>Idusuarioa:</strong>
                            {{ $alquiler->IdUsuarioA }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
