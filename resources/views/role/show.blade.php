@extends('layouts.app')

@section('template_title')
{{ $role->name ?? 'Show Role' }}
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card cabecera1">
                <div class="card-header cabecera2">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">
                            {{ __('Vista de Rol') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('roles.index') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                <i class="fa fa-chevron-left"></i>{{ __(' Volver') }}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">

                    <div class="form-group">
                        <strong>Nombre del Rol:</strong>
                        {{ $role->name }}
                    </div>
                    <div class="form-group">
                        <strong>Sector de creación:</strong>
                        {{ $role->guard_name }}
                    </div>
                    <div class="form-group">
                        <strong>Fecha de creación:</strong>
                        {{ date('d-m-y',strtotime($role->created_at)) }}
                    </div>
                    <div class="form-group">
                        <strong>Hora de creación:</strong>
                        {{ date('H:i:s',strtotime($role->created_at)) }}
                    </div>
                    <div class="form-group">
                        <strong>Permisos asignados:</strong>
                        @forelse ($role->permissions as $permission)
                            <span class="badge bg-info">{{ $permission->name }}</span>
                        @empty
                        <span class="badge bg-danger">Sin permisos asignados</span>
                        @endforelse
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection