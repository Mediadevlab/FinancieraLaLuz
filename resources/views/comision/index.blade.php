@extends('layouts.app')

@section('template_title')
Comision
@endsection

@section('content')
<div class="container mt-3">

    <div style="display: flex; justify-content: space-between;" class="marco">
        <h3 class=""><i class="fa fa-users"><b></i> Reporte de Comisiones</h3></b>
        <div class="float-right">
            <label style="font-weight: bolder; font-size: large;">Fecha Actual : {{ \Carbon\Carbon::now()->format('m/d/Y') }}</label>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card cabecera1" style="border-top: solid 4px #344966;">
                <div class="card-header cabecera2">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Listado de Comisiones') }}
                        </span>

                        <!-- <div class="float-right">
                            @can('comision_create')
                            <a href="{{ route('comisiones.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                @endcan
                                <i class="fa fa-plus"></i>{{ __(' Generar Comisión') }}
                            </a>
                        </div> -->
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

                                    <th>Nombre Gestor</th>
                                    <th>Comisión</th>

                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($comisions as $comision)
                                <tr class="align-middle">
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $comision->pago }}</td>

                                    <td>
                                        @can('comision_destroy')
                                        <form action="{{ route('comisiones.destroy',$comision->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Esta seguro que desea eliminar?')">
                                            @endcan

                                            @can('comision_show')
                                            <a class="btn btn-sm btn-primary " href="{{ route('comisiones.show',$comision->id) }}"><i class="fa fa-fw fa-eye"></i> </a>
                                            @endcan

                                            @can('comision_edit')
                                            <a class="btn btn-sm btn-success" href="{{ route('comisiones.edit',$comision->id) }}"><i class="fa fa-fw fa-edit"></i> </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> </button>
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
            <!-- {!! $comisions->links() !!} -->
        </div>
    </div>
</div>
@endsection