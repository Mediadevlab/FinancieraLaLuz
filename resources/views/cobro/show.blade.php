@extends('layouts.app')

@section('template_title')
{{ $cobro->name ?? 'Show Cobro' }}
@endsection

@section('content')
<section class="py-4 container mt-3">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div style="display: flex; justify-content: space-between;" class="marco">
                <h3 class=""><i class="fa fa-users"><b></i> Consulta Cobro</h3></b>
                <div class="float-right">
                    <label style="font-weight: bolder; font-size: large;">Fecha Actual : {{ \Carbon\Carbon::now()->format('m/d/Y') }}</label>
                </div>
            </div>
            <div class="card cabecera1">
                <div class="card-header cabecera2" style="border-top: solid 4px green;">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">
                            {{ __('Información de Cobro') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('cobros.index') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                <i class="fa fa-chevron-left"></i>{{ __(' Volver') }}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">

                    <div class="form-group">
                        <strong>Total Cobro:</strong>
                        {{ $cobro->total_cobro }}
                    </div>
                    <div class="form-group">
                        <strong>Fecha Cobro:</strong>
                        {{ $cobro->fecha_cobro }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection