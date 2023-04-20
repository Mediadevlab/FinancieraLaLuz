@extends('layouts.app')

@section('template_title')
Update Prendario
@endsection

@section('content')
<section class="py-4 container mt-3">
    <div class="">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div style="display: flex; justify-content: space-between;" class="marco">
                <h3 class=""><i class="fa fa-pencil"><b></i> Actualización de Cliente y Vehículo</h3></b>
                <div class="float-right">
                    <label style="font-weight: bolder; font-size: large;">Fecha Actual : {{ \Carbon\Carbon::now()->format('m/d/Y') }}</label>
                </div>
            </div>

            @includeif('partials.errors')

            <div class="card cabecera1 card-default">
            <div class="card-header cabecera2" style="border-top: solid 4px green;">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">
                            {{ __('Datos de Cliente y Vehículo') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('prendarios.index') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                <i class="fa fa-chevron-left"></i>{{ __(' Volver') }}
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="card-body">
                    <form method="POST" action="{{ route('prendarios.update', $prendario->id) }}" role="form" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        @csrf

                        @include('prendario.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection