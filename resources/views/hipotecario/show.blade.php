@extends('layouts.app')

@section('template_title')
{{ $hipotecario->name ?? 'Show Hipotecario' }}
@endsection

@section('content')
<section class="py-4 container mt-3">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div style="display: flex; justify-content: space-between;" class="marco">
                <h3 class=""><i class="fa fa-users"><b></i> Consulta Cliente e Inmueble</h3></b>
                <div class="float-right">
                    <label style="font-weight: bolder; font-size: large;">Fecha Actual : {{ \Carbon\Carbon::now()->format('m/d/Y') }}</label>
                </div>
            </div>

            <div class="card cabecera1">
                <div class="card-header cabecera2" style="border-top: solid 4px green;">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">
                            {{ __('Información de Cliente e Inmueble') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('hipotecarios.index') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                <i class="fa fa-chevron-left"></i>{{ __(' Volver') }}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 ">
                            <div class="form-group">
                                <strong>Nombre Completo:</strong>
                                {{ $hipotecario->nombre }}
                            </div>
                            <div class="form-group">
                                <strong>DNI:</strong>
                                {{ $hipotecario->dni }}
                            </div>
                            <div class="form-group">
                                <strong>RTN:</strong>
                                {{ $hipotecario->rtn }}
                            </div>
                            <div class="form-group">
                                <strong>Celular:</strong>
                                {{ $hipotecario->tel_cel }}
                            </div>
                            <div class="form-group">
                                <strong>Teléfono Casa:</strong>
                                {{ $hipotecario->tel_casa }}
                            </div>
                            <div class="form-group">
                                <strong>Teléfono Trabajo:</strong>
                                {{ $hipotecario->tel_tra }}
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 ">
                            <div class="form-group">
                                <strong>Dirección Casa:</strong>
                                {{ $hipotecario->dir_casa }}
                            </div>
                            <div class="form-group">
                                <strong>Dirección Trabajo:</strong>
                                {{ $hipotecario->dir_trabajo }}
                            </div>
                            <div class="form-group">
                                <strong>Fecha Nacimiento:</strong>
                                {{ $hipotecario->fecha_nac }}
                            </div>
                            <div class="form-group">
                                <strong>Ciudad:</strong>
                                {{ $hipotecario->ciudad }}
                            </div>
                            <div class="form-group">
                                <strong>Correo:</strong>
                                {{ $hipotecario->correo }}
                            </div>
                            <div class="form-group">
                                <strong>Foto:</strong>
                                {{ $hipotecario->foto }}
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 ">
                            <div class="form-group">
                                <strong>Descripción Inmueble:</strong>
                                {{ $hipotecario->desc_inmueble }}
                            </div>
                            <div class="form-group">
                                <strong>Dirección Inmueble:</strong>
                                {{ $hipotecario->dir_inmueble }}
                            </div>
                            <div class="form-group">
                                <strong>Foto Inmueble:</strong>
                                {{ $hipotecario->foto_inmueble }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection