@extends('layouts.app')

@section('template_title')
Create Prestamo
@endsection

@section('content')
<section class="py-4 container">

    <div style="display: flex; justify-content: space-between;" class="marco">
        <h3 class=""><i class="fa fa-briefcase"><b></i> Generación de Préstamos</h3></b>
        <div class="float-right">
            <label style="font-weight: bolder; font-size: large;">Fecha Actual : {{ \Carbon\Carbon::now()->format('m/d/Y') }}</label>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

            @includeif('partials.errors')

            <div class="card cabecera1">

                <div class="card-header cabecera2" style="border-top: solid 4px #344966;">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Desgloce de Información del Préstamo Simulado') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('prestamos.index') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                <i class="fa fa-chevron-left"></i>{{ __(' Volver') }}
                            </a>
                        </div>

                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('prestamos.store') }}" role="form" enctype="multipart/form-data">
                        @csrf

                        @include('prestamo.form')

                    </form>
                </div>

            </div>
        </div>

        <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">

            @includeif('partials.errors')

            <!-- <div class="card card-default">
                <div class="card-header" style="border-top: solid 4px #1151a1;">
                    <span class="card-title">Calculo de Préstamo</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('prestamos.store') }}" role="form" enctype="multipart/form-data">
                        @csrf

                        <div class="table-responsive">
                            <table id="lista-tabla2" class="table table-striped table-hover">
                                <thead class="thead text-center" style="background-color:#1151a1; color:white;">
                                    <tr>

                                        <th>Fecha</th>
                                        <th>Cuota</th>
                                        <th>Capital</th>
                                        <th>Interés</th>
                                        <th>Saldo</th>

                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>

                    </form>
                </div>
            </div> -->
        </div>
    </div>
</section>
@endsection