@extends('layouts.app')

@section('template_title')
{{ $fiduciario->name ?? 'Show Fiduciario' }}
@endsection

@section('content')
<section class="py-4 container mt-3">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div style="display: flex; justify-content: space-between;" class="marco">
                <h3 class=""><i class="fa fa-users"><b></i> Consulta Cliente y Aval</h3></b>
                <div class="float-right">
                    <label style="font-weight: bolder; font-size: large;">Fecha Actual : {{ \Carbon\Carbon::now()->format('m/d/Y') }}</label>
                </div>
            </div>

            <div class="card cabecera1">
                <div class="card-header cabecera2" style="border-top: solid 4px green;">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">
                            {{ __('Información de Cliente y del Aval') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('fiduciarios.index') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
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
                                <strong>Nombre:</strong>
                                {{ $fiduciario->nombre }}
                            </div>
                            <div class="form-group">
                                <strong>Dni:</strong>
                                {{ $fiduciario->dni }}
                            </div>
                            <div class="form-group">
                                <strong>Rtn:</strong>
                                {{ $fiduciario->rtn }}
                            </div>
                            <div class="form-group">
                                <strong>Tel Cel:</strong>
                                {{ $fiduciario->tel_cel }}
                            </div>
                            <div class="form-group">
                                <strong>Tel Casa:</strong>
                                {{ $fiduciario->tel_casa }}
                            </div>
                            <div class="form-group">
                                <strong>Tel Tra:</strong>
                                {{ $fiduciario->tel_tra }}
                            </div>
                            <div class="form-group">
                                <strong>Dir Casa:</strong>
                                {{ $fiduciario->dir_casa }}
                            </div>
                            <div class="form-group">
                                <strong>Dir Trabajo:</strong>
                                {{ $fiduciario->dir_trabajo }}
                            </div>
                            <div class="form-group">
                                <strong>Fecha Nac:</strong>
                                {{ $fiduciario->fecha_nac }}
                            </div>
                            <div class="form-group">
                                <strong>Ciudad:</strong>
                                {{ $fiduciario->ciudad }}
                            </div>
                            <div class="form-group">
                                <strong>Correo:</strong>
                                {{ $fiduciario->correo }}
                            </div>
                            <div class="form-group">
                                <strong>Foto:</strong>
                                {{ $fiduciario->foto }}
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <h4>Datos Aval</h4>
                            <hr>
                            <div class="form-group">
                                <strong>Nombre Aval:</strong>
                                {{ $fiduciario->nombre_aval }}
                            </div>
                            <div class="form-group">
                                <strong>Dni Aval:</strong>
                                {{ $fiduciario->dni_aval }}
                            </div>
                            <div class="form-group">
                                <strong>Rtn Aval:</strong>
                                {{ $fiduciario->rtn_aval }}
                            </div>
                            <div class="form-group">
                                <strong>Tel Cel Aval:</strong>
                                {{ $fiduciario->tel_cel_aval }}
                            </div>
                            <div class="form-group">
                                <strong>Tel Casa Aval:</strong>
                                {{ $fiduciario->tel_casa_aval }}
                            </div>
                            <div class="form-group">
                                <strong>Tel Tra Aval:</strong>
                                {{ $fiduciario->tel_tra_aval }}
                            </div>
                            <div class="form-group">
                                <strong>Dir Casa Aval:</strong>
                                {{ $fiduciario->dir_casa_aval }}
                            </div>
                            <div class="form-group">
                                <strong>Dir Trabajo Aval:</strong>
                                {{ $fiduciario->dir_trabajo_aval }}
                            </div>
                            <div class="form-group">
                                <strong>Fecha Nac Aval:</strong>
                                {{ $fiduciario->fecha_nac_aval }}
                            </div>
                            <div class="form-group">
                                <strong>Ciudad Aval:</strong>
                                {{ $fiduciario->ciudad_aval }}
                            </div>
                            <div class="form-group">
                                <strong>Correo Aval:</strong>
                                {{ $fiduciario->correo_aval }}
                            </div>
                            <div class="form-group">
                                <strong>Foto Aval:</strong>
                                {{ $fiduciario->foto_aval }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection