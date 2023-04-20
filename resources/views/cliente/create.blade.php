@extends('layouts.app')

@section('template_title')
Create Cliente
@endsection

@section('content')
<section class="py-4 container mt-3">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

            @includeif('partials.errors')

            <h3 class="marco"><i class="fa fa-briefcase"><b></i> Crear Clientes</h3></b>
            <div class="card card-default">
                <div class="card-header" style="border-top: solid 4px green;">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">
                            {{ __('Información del Cliente y del Aval') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('clientes.index') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                <i class="fa fa-chevron-left"></i>{{ __(' Volver') }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('clientes.store') }}" role="form" enctype="multipart/form-data">
                        @csrf

                        @include('cliente.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection