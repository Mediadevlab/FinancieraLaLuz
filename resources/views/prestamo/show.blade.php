@extends('layouts.app')

@section('template_title')
{{ $prestamo->name ?? 'Show Prestamo' }}
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">
                            {{ __('Información del Préstamo') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('prestamos.index') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                <i class="fa fa-chevron-left"></i>{{ __(' Volver') }}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">

                    <div class="form-group">
                        <strong>Codigo:</strong>
                        {{ $prestamo->codigo }}
                    </div>
                    <div class="form-group">
                        <strong>Tipo:</strong>
                        {{ $prestamo->tipo }}
                    </div>
                    <div class="form-group">
                        <strong>Capital:</strong>
                        {{ $prestamo->capital }}
                    </div>
                    <div class="form-group">
                        <strong>Tipo Tasa:</strong>
                        {{ $prestamo->tipo_tasa }}
                    </div>
                    <div class="form-group">
                        <strong>Cuota:</strong>
                        {{ $prestamo->cuota }}
                    </div>
                    <div class="form-group">
                        <strong>Forma Pago:</strong>
                        {{ $prestamo->forma_pago }}
                    </div>
                    <div class="form-group">
                        <strong>Fecha Solicitud:</strong>
                        {{ $prestamo->fecha_solicitud }}
                    </div>
                    <div class="form-group">
                        <strong>Fecha Inicio:</strong>
                        {{ $prestamo->fecha_inicio }}
                    </div>
                    <div class="form-group">
                        <strong>Fecha Fin:</strong>
                        {{ $prestamo->fecha_fin }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection