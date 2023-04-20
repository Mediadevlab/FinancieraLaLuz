@extends('layouts.app')

@section('template_title')
{{ $prendario->name ?? 'Show Prendario' }}
@endsection

@section('content')
<section class="py-4 container mt-3">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div style="display: flex; justify-content: space-between;" class="marco">
                <h3 class=""><i class="fa fa-users"><b></i> Consulta Cliente y Vehículo</h3></b>
                <div class="float-right">
                    <label style="font-weight: bolder; font-size: large;">Fecha Actual : {{ \Carbon\Carbon::now()->format('m/d/Y') }}</label>
                </div>
            </div>

            <div class="card cabecera1">
                <div class="card-header cabecera2" style="border-top: solid 4px green;">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">
                            {{ __('Información de Cliente y Vehículo') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('prendarios.index') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                <i class="fa fa-chevron-left"></i>{{ __(' Volver') }}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <h4>Datos Cliente</h4>
                            <hr>
                            <div class="form-group">
                                <strong>Nombre Completo:</strong>
                                {{ $prendario->nombre }}
                            </div>
                            <div class="form-group">
                                <strong>DNI:</strong>
                                {{ $prendario->dni }}
                            </div>
                            <div class="form-group">
                                <strong>RTN:</strong>
                                {{ $prendario->rtn }}
                            </div>
                            <div class="form-group">
                                <strong>Celular:</strong>
                                {{ $prendario->tel_cel }}
                            </div>
                            <div class="form-group">
                                <strong>Teléfono Casa:</strong>
                                {{ $prendario->tel_casa }}
                            </div>
                            <div class="form-group">
                                <strong>Teléfono Trabajo:</strong>
                                {{ $prendario->tel_tra }}
                            </div>
                            <div class="form-group">
                                <strong>Dirección Casa:</strong>
                                {{ $prendario->dir_casa }}
                            </div>
                            <div class="form-group">
                                <strong>Dirección Trabajo:</strong>
                                {{ $prendario->dir_trabajo }}
                            </div>
                            <div class="form-group">
                                <strong>Fecha Nacimiento:</strong>
                                {{ $prendario->fecha_nac }}
                            </div>
                            <div class="form-group">
                                <strong>Ciudad:</strong>
                                {{ $prendario->ciudad }}
                            </div>
                            <div class="form-group">
                                <strong>Correo:</strong>
                                {{ $prendario->correo }}
                            </div>
                            <div class="form-group">
                                <strong>Foto:</strong>
                                {{ $prendario->foto  }}
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <h4>Datos Vehículo</h4>
                            <hr>
                            <div class="form-group">
                                <strong>Descripción Vehiculo:</strong>
                                {{ $prendario->desc_vehiculo }}
                            </div>
                            <div class="form-group">
                                <strong>Placa:</strong>
                                {{ $prendario->placa }}
                            </div>
                            <div class="form-group">
                                <strong>Color:</strong>
                                {{ $prendario->color }}
                            </div>
                            <div class="form-group">
                                <strong>Modelo:</strong>
                                {{ $prendario->modelo }}
                            </div>
                            <div class="form-group">
                                <strong>Marca:</strong>
                                {{ $prendario->marca }}
                            </div>
                            <div class="form-group">
                                <strong>Año:</strong>
                                {{ $prendario->anio }}
                            </div>
                            <div class="form-group">
                                <strong>Documentación:</strong>
                                {{ $prendario->documentacion }}
                            </div>
                            <div class="form-group">
                                <strong>Foto Vehículo:</strong>
                                {{ $prendario->foto_vehiculo }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection