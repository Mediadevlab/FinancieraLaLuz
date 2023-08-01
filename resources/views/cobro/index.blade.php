@extends('layouts.app')

@section('template_title')
Cobro
@endsection

@section('content')
<div class="container mt-3">

    <div style="display: flex; justify-content: space-between;" class="marco">
        <h3 class=""><i class="fa fa-users"><b></i> Reporte de Cobros</h3></b>
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
                            {{ __('Información de Cobros') }}
                        </span>

                        <div class="float-right">
                            @can('cobro_create')
                            <a href="{{ route('cobros.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                @endcan
                                <i class="fa fa-plus"></i>{{ __(' Registrar Cobro') }}
                            </a>

                            <a href="{{ route('prestamos.index') }}" class="btn btn-secondary btn-sm float-right" data-placement="left">
                                <i class="fa fa-chevron-left"></i>{{ __(' Volver') }}
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

                                    <th>Cliente</th>
                                    <th>Total Cobro</th>
                                    <th>Fecha Cobro</th>
                                    <th>Capital</th>
                                    <th>Encargado</th>

                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cobros as $cobro)
                                <tr class="align-middle">
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $cobro->total_cobro }}</td>
                                    <td>{{ $cobro->fecha_cobro }}</td>

                                    <td>
                                        @can('cobro_destroy')
                                        <form action="{{ route('cobros.destroy',$cobro->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Esta seguro que desea eliminar?')">
                                            @endcan

                                            @can('cobro_show')
                                            <a class="btn btn-sm btn-primary " href="{{ route('cobros.show',$cobro->id) }}"><i class="fa fa-fw fa-eye"></i> </a>
                                            @endcan

                                            @can('cobro_edit')
                                            <a class="btn btn-sm btn-success" href="{{ route('cobros.edit',$cobro->id) }}"><i class="fa fa-fw fa-edit"></i> </a>
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
            <!-- {!! $cobros->links() !!} -->
        </div>
    </div>
</div>
@endsection