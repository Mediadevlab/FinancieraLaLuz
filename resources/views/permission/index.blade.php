@extends('layouts.app')

@section('template_title')
Permission
@endsection

@section('content')
<div class="container mt-3">

    <div style="display: flex; justify-content: space-between;" class="marco2">
        <h3 class=""><i class="fa fa-users"><b></i> Reporte de Permisos</h3></b>
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
                            {{ __('Listado de Permisos') }}
                        </span>

                        <div class="float-right">
                            @can('permission_create')
                            <a href="{{ route('permission.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                <i class="fa fa-plus"></i>{{ __(' Crear nuevo') }}
                                @endcan
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
                        <table id="example" class="table table-striped table-hover mt-3" style="width: 100%;">
                            <thead class="thead" style="background-color: #344966; color:white;">
                                <tr class="align-middle">
                                    <th>#</th>

                                    <th>Nombre</th>
                                    <th>Origen</th>
                                    <th>Fecha Creación</th>
                                    <th>Hora Creación</th>

                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permissions as $permission)
                                <tr class="align-middle">
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $permission->name }}</td>
                                    <td>{{ $permission->guard_name }}</td>
                                    <td>{{ date('d-m-y',strtotime($permission->created_at)) }}</td>
                                    <td>{{ date('H:i:s',strtotime($permission->created_at)) }}</td>

                                    <td>
                                        @can('permission_destroy')
                                        <form action="{{ route('permission.destroy',$permission->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Esta seguro que desea eliminar?')">
                                            @endcan

                                            @can('permission_show')
                                            <a class="btn btn-sm btn-primary " href="{{ route('permission.show',$permission->id) }}"><i class="fa fa-fw fa-eye"></i> </a>
                                            @endcan

                                            @can('permission_edit')
                                            <a class="btn btn-sm btn-success" href="{{ route('permission.edit',$permission->id) }}"><i class="fa fa-fw fa-edit"></i> </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> </button>
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
            <!-- {!! $permissions->links() !!} -->
        </div>
    </div>
</div>
@endsection