@extends('layouts.app')

@section('template_title')
    {{ $comision->name ?? 'Show Comision' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card cabecera1">
                    <div class="card-header cabecera2">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">
                            {{ __('Detalle Comisiones') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('comisiones.index') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                <i class="fa fa-chevron-left"></i>{{ __(' Volver') }}
                            </a>
                        </div>
                    </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Pago:</strong>
                            {{ $comision->pago }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
