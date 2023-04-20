@extends('layouts.app')

@section('template_title')
    Update Comision
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

                @includeif('partials.errors')

                <div class="card cabecera1 card-default">
                    <div class="card-header cabecera2">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">
                            {{ __('Actualización de Comisión') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('comisiones.index') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                <i class="fa fa-chevron-left"></i>{{ __(' Volver') }}
                            </a>
                        </div>
                    </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('comisiones.update', $comision->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('comision.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
