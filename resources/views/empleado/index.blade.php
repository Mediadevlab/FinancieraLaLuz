@extends('layouts.app')

@section('template_title')
Empleado
@endsection

@section('content')
<div class="container mt-3">
    <div style="display: flex; justify-content: space-between;" class="marco2">
        <h3 class=""><i class="fa fa-users"><b></i> Reporte de Empleados</h3></b>
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
                            {{ __('Listado de Empleados') }}
                        </span>

                        <div class="float-right">
                            @can('empleado_create')
                            <a href="{{ route('empleados.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                <i class="fa fa-plus"></i> {{ __(' Crear Empleado') }}
                            </a>
                            @endcan
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
                                    <th>Dni</th>
                                    <th>Cargo</th>
                                    <th>Direccion</th>
                                    <th>Telefono</th>
                                    <th>Estatus</th>
                                    <th>Fotografía</th>

                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($empleados as $empleado)
                                <tr class="align-middle">
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $empleado->nombre }}</td>
                                    <td>{{ $empleado->dni }}</td>
                                    <td>{{ $empleado->cargo }}</td>
                                    <td>{{ $empleado->direccion }}</td>
                                    <td>{{ $empleado->telefono }}</td>
                                    <td>
                                        <!-- {{ $empleado->estatus}} -->
                                        <?php
                                        if ($empleado['estatus'] == 'Activo') echo '<span class="badge bg-success">Activo</span>';
                                        elseif ($empleado['estatus'] == 'Inactivo') echo '<span class="badge bg-danger">Inactivo</span>';
                                        ?>
                                    </td>
                                    <td>
                                        <img src="{{ asset( $empleado->foto_emp ) }}" alt="" class="img-fluid img-thumbnail" width="100px">
                                    </td>

                                    <td>
                                        @can('empleado_destroy')
                                        <form action="{{ route('empleados.destroy',$empleado->id) }}" method="POST" enctype="multipart/form-data" style="display: inline-block;" onsubmit="return confirm('¿Esta seguro que desea eliminar?')">
                                            @endcan

                                            @can('empleado_show')
                                            <a class="btn btn-sm btn-primary " href="{{ route('empleados.show',$empleado->id) }}"><i class="fa fa-fw fa-eye"></i> </a>
                                            @endcan

                                            @can('empleado_edit')
                                            <a class="btn btn-sm btn-success" href="{{ route('empleados.edit',$empleado->id) }}"><i class="fa fa-fw fa-edit"></i> </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-fw fa-trash"></i> </button>
                                        </form>
                                        @endcan
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- {!! $empleados->links() !!} -->
        </div>
    </div>
</div>
@endsection