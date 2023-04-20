@extends('layouts.app')

@section('template_title')
    Create Comision
@endsection

@section('content')
    <section class="py-4 container mt-3">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

                @includeif('partials.errors')
                <h3 class="marco"><i class="fa fa-briefcase"><b></i> Listado de Comisión</h3></b>
                <div class="card cabecera1 card-default">
                    <div class="card-header cabecera2">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">
                            {{ __('Tabla de Comisión') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('comisiones.index') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                <i class="fa fa-chevron-left"></i>{{ __(' Volver') }}
                            </a>
                        </div>
                    </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('comisiones.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('comision.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
