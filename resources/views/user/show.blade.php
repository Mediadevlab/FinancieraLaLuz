@extends('layouts.app')

@section('template_title')
    {{ $user->name ?? 'Show User' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('users.index') }}"> volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $user->name }}
                        </div>
                        <div class="form-group">
                            <strong>Correo Electrónico:</strong>
                            {{ $user->email }}
                        </div>
                        <div class="form-group">
                            <strong>Contraseña:</strong>
                            {{ $user->password }}
                        </div>
                        <div class="form-group">
                            <strong>Roles:</strong>
                            @forelse ($user->roles as $role)
                                <span class="badge bg-info">{{ $role->name }}</span>
                            @empty
                            <span class="badge bg-danger">Sin rol asignado</span>
                            @endforelse
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
