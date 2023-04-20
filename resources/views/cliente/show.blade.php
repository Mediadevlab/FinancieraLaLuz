@extends('layouts.app')

@section('template_title')
{{ $cliente->name ?? 'Show Cliente' }}
@endsection

@section('content')
<section class="py-4 container mt-3">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">
                            {{ __('Ficha del Cliente') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('clientes.index') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                <i class="fa fa-chevron-left"></i>{{ __(' Volver') }}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                            <div class="form-group">
                                <strong>Nombre:</strong>
                                {{ $cliente->nombre }}
                            </div>
                            <div class="form-group">
                                <strong>Fechanac:</strong>
                                {{ $cliente->fechaNac }}
                            </div>
                            <div class="form-group">
                                <strong>Dni:</strong>
                                {{ $cliente->dni }}
                            </div>
                            <div class="form-group">
                                <strong>Rtn:</strong>
                                {{ $cliente->rtn }}
                            </div>
                            <div class="form-group">
                                <strong>Telefono:</strong>
                                {{ $cliente->telefono }}
                            </div>
                            <div class="form-group">
                                <strong>Trabajo:</strong>
                                {{ $cliente->trabajo }}
                            </div>
                            <div class="form-group">
                                <strong>Tel Trabajo:</strong>
                                {{ $cliente->tel_trabajo }}
                            </div>
                            <div class="form-group">
                                <strong>Direccion:</strong>
                                {{ $cliente->direccion }}
                            </div>
                            <div class="form-group">
                                <strong>Dir Trabajo:</strong>
                                {{ $cliente->dir_trabajo }}
                            </div>
                            <div class="form-group">
                                <strong>Correo:</strong>
                                {{ $cliente->correo }}
                            </div>
                            <div class="form-group">
                                <strong>Nom Aval:</strong>
                                {{ $cliente->nom_aval }}
                            </div>
                            <div class="form-group">
                                <strong>Dni Aval:</strong>
                                {{ $cliente->dni_aval }}
                            </div>
                            <div class="form-group">
                                <strong>Rtn Aval:</strong>
                                {{ $cliente->rtn_aval }}
                            </div>
                            <div class="form-group">
                                <strong>Dir Aval:</strong>
                                {{ $cliente->dir_aval }}
                            </div>
                            <div class="form-group">
                                <strong>Dirtrabajo Aval:</strong>
                                {{ $cliente->dirTrabajo_aval }}
                            </div>
                            <div class="form-group">
                                <strong>Teltrabajo Aval:</strong>
                                {{ $cliente->telTrabajo_aval }}
                            </div>
                            <div class="form-group">
                                <strong>Telcasa Aval:</strong>
                                {{ $cliente->telCasa_aval }}
                            </div>
                            <div class="form-group">
                                <strong>Fechanac Aval:</strong>
                                {{ $cliente->fechaNac_aval }}
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                            <div class="form-group">
                                <p>Fotografía Cliente</p>
                                <img src="{{ asset( $cliente->foto_cliente ) }}" alt="" class="img-fluid img-thumbnail" width="300px">
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                            <div class="form-group">
                                <p>Fotografía Croquis Casa</p>
                                <img src="{{ asset( $cliente->croquis_casa ) }}" alt="" class="img-fluid img-thumbnail" width="300px">
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                            <div class="form-group">
                                <p>Fotografía Croquis Trabajo</p>
                                <img src="{{ asset( $cliente->croquis_trabajo ) }}" alt="" class="img-fluid img-thumbnail" width="300px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection