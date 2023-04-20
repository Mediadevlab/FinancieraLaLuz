@extends('layouts.app')

@section('template_title')
    Update Empleado
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

                @includeif('partials.errors')

                <div class="card cabecera1 card-default">
                    <div class="card-header cabecera2">
                        <span class="card-title">Actualizar Empleado</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('empleados.update', $empleado->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('empleado.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
