@extends('layouts.app')

@section('template_title')
Create Role
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

            @includeif('partials.errors')

            <div class="card cabecera1 card-default">
                <div class="card-header cabecera2">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">
                            {{ __('Crear Rol') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('roles.index') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                <i class="fa fa-chevron-left"></i>{{ __(' Volver') }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('roles.store') }}" role="form" enctype="multipart/form-data">
                        @csrf

                        @include('role.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection