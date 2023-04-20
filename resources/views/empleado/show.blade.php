@extends('layouts.app')

@section('template_title')
{{ $empleado->name ?? 'Show Empleado' }}
@endsection

@section('content')
<section class="py-4 container mt-3">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div style="display: flex; justify-content: space-between;" class="marco2">
                <h3 class=""><i class="fa fa-users"><b></i> Consulta Empleado</h3></b>
                <div class="float-right">
                    <label style="font-weight: bolder; font-size: large;">Fecha Actual : {{ \Carbon\Carbon::now()->format('m/d/Y') }}</label>
                </div>
            </div>

            <div class="card cabecera1">
                <div class="card-header cabecera2" style="border-top: solid 4px green;">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">
                            {{ __('Información de Empleado') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('empleados.index') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                <i class="fa fa-chevron-left"></i>{{ __(' Volver') }}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <h4>Datos Empleado</h4>
                            <hr>

                            <div class="form-group">
                                <strong>Nombre:</strong>
                                {{ $empleado->nombre }}
                            </div>
                            <div class="form-group">
                                <strong>Dni:</strong>
                                {{ $empleado->dni }}
                            </div>
                            <div class="form-group">
                                <strong>Cargo:</strong>
                                {{ $empleado->cargo }}
                            </div>
                            <div class="form-group">
                                <strong>Direccion:</strong>
                                {{ $empleado->direccion }}
                            </div>
                            <div class="form-group">
                                <strong>Telefono:</strong>
                                {{ $empleado->telefono }}
                            </div>
                            <div class="form-group">
                                <strong>Estatus:</strong>
                                {{ $empleado->estatus }}
                            </div>

                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="form-group text-center">
                                <!-- {{ $empleado->foto_emp }} -->
                                <img src="{{ asset( $empleado->foto_emp ) }}" alt="" class="img-fluid img-thumbnail" width="300px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection