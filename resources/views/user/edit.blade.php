@extends('layouts.app')

@section('template_title')
Update User
@endsection

@section('content')
<section class="content container-fluid">
    <div class="">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">Editar Usuario</span>
                    <a href="{{ route('users.index') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                        <i class="fa fa-chevron-left"></i>{{ __(' Volver') }}
                    </a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('users.update', $user->id) }}" role="form" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        @csrf

                        @include('user.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection