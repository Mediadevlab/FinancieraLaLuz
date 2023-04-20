@extends('layouts.app')

@section('template_title')
{{ $mypime->name ?? 'Show Mypime' }}
@endsection

@section('content')
<section class="py-4 container mt-3">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div style="display: flex; justify-content: space-between;" class="marco">
                <h3 class=""><i class="fa fa-users"><b></i> Consulta Cliente</h3></b>
                <div class="float-right">
                    <label style="font-weight: bolder; font-size: large;">Fecha Actual : {{ \Carbon\Carbon::now()->format('m/d/Y') }}</label>
                </div>
            </div>
            <div class="card cabecera1">
                <div class="card-header cabecera2" style="border-top: solid 4px green;">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">
                            {{ __('Información de Cliente') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('mypimes.index') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                <i class="fa fa-chevron-left"></i>{{ __(' Volver') }}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <div class="form-group">
                                <strong>Nombre:</strong>
                                {{ $mypime->nombre }}
                            </div>
                            <div class="form-group">
                                <strong>Dni:</strong>
                                {{ $mypime->dni }}
                            </div>
                            <div class="form-group">
                                <strong>Rtn:</strong>
                                {{ $mypime->rtn }}
                            </div>
                            <div class="form-group">
                                <strong>Tel Cel:</strong>
                                {{ $mypime->tel_cel }}
                            </div>
                            <div class="form-group">
                                <strong>Tel Casa:</strong>
                                {{ $mypime->tel_casa }}
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <div class="form-group">
                                <strong>Tel Tra:</strong>
                                {{ $mypime->tel_tra }}
                            </div>
                            <div class="form-group">
                                <strong>Dir Mypime:</strong>
                                {{ $mypime->dir_mypime }}
                            </div>
                            <div class="form-group">
                                <strong>Fecha Nac:</strong>
                                {{ $mypime->fecha_nac }}
                            </div>
                            <div class="form-group">
                                <strong>Ciudad:</strong>
                                {{ $mypime->ciudad }}
                            </div>
                            <div class="form-group">
                                <strong>Correo:</strong>
                                {{ $mypime->correo }}
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <div class="form-group">
                                <strong>Foto:</strong>
                                {{ $mypime->foto }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection