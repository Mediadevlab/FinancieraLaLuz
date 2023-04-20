@extends('layouts.app')

@section('template_title')
Role
@endsection

@section('content')
<div class="container mt-3">
    
    <div style="display: flex; justify-content: space-between;" class="marco2">
        <h3 class=""><i class="fa fa-users"><b></i> Reporte de Roles</h3></b>
        <div class="float-right">
            <label style="font-weight: bolder; font-size: large;">Fecha Actual : {{ \Carbon\Carbon::now()->format('m/d/Y') }}</label>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card cabecera1">
                <div class="card-header cabecera2" style="border-top: solid 4px #344966;">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Listado de Roles') }}
                        </span>

                        <div class="float-right">
                            @can('role_create')
                            <a href="{{ route('roles.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                @endcan
                                <i class="fa fa-plus"></i>{{ __(' Crear Rol') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="mt-3 table table-striped table-hover" style="width: 100%;">
                            <thead class="thead" style="background-color: #344966; color:white;">
                                <tr class="align-middle">
                                    <th>#</th>

                                    <th>Nombre</th>
                                    <th>Origen</th>
                                    <th>Fecha de Creación</th>
                                    <th>Hora de Creación</th>
                                    <th>Permisos</th>

                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                <tr class="align-middle">
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $role->name }}</td>
                                    <td>{{ $role->guard_name }}</td>
                                    <td>{{ date('d-m-y',strtotime($role->created_at)) }}</td>
                                    <td>{{ date('H:i:s',strtotime($role->created_at)) }}</td>
                                    <td>
                                        @forelse ($role->permissions as $permission)
                                        <span class="badge bg-info">{{ $permission->name }}</span>
                                        @empty
                                        <span class="badge bg-danger">Sin Permisos asignados</span>
                                        @endforelse
                                    </td>

                                    <td>
                                        @can('role_destroy')
                                        <form action="{{ route('roles.destroy',$role->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Esta seguro que desea eliminar?')">
                                            @endcan

                                            @can('role_show')
                                            <a class="btn btn-sm btn-primary " href="{{ route('roles.show',$role->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                            @endcan

                                            @can('role_edit')
                                            <a class="btn btn-sm btn-success" href="{{ route('roles.edit',$role->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></button>
                                            @endcan
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- {!! $roles->links() !!} -->
        </div>
    </div>
</div>
@endsection