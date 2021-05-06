@extends('layouts.app')

@section('template_title')
    {{ $compra->name ?? 'Show Compra' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Compra</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('compras.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fechaventa:</strong>
                            {{ $compra->FechaVenta }}
                        </div>
                        <div class="form-group">
                            <strong>Idpeliculac:</strong>
                            {{ $compra->IdPeliculaC }}
                        </div>
                        <div class="form-group">
                            <strong>Idusuarioc:</strong>
                            {{ $compra->IdUsuarioC }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
