@extends('layouts.app')

@section('template_title')
Cliente
@endsection

@section('content')
<div class="container mt-3">

    <div style="display: flex; justify-content: space-between;" class="marco">
        <h3 class=""><i class="fa fa-users"><b></i> Reporte de Clientes</h3></b>
        <div class="float-right">
            <label style="font-weight: bolder; font-size: large;">Fecha Actual : {{ \Carbon\Carbon::now()->format('m/d/Y') }}</label>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-header" style="border-top: solid 4px #344966;">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Listado de Clientes') }}
                        </span>

                        <div class="float-right">
                            @can('cliente_create')
                            <a href="{{ route('clientes.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                <i class="fa fa-plus"></i>{{ __(' Crear Cliente') }}
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
                        <table id="example" class="mt-3 table table-striped table-hover" style="width:100%;">
                            <thead class="thead" style="background-color: #344966; color:white;">
                                <tr class="align-middle">
                                    <th>#</th>

                                    <th>Nombre</th>
                                    <th>DNI</th>
                                    <th>Teléfono</th>
                                    <th>Estado</th>
                                    <th>Foto</th>

                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clientes as $cliente)
                                <tr class="align-middle">
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $cliente->nombre }}</td>
                                    <td>{{ $cliente->dni }}</td>
                                    <td>{{ $cliente->telefono }}</td>
                                    <td>
                                        @if ($cliente->estado === 'Activo')
                                        <span class="badge bg-success text-white">
                                            Activo
                                        </span>
                                        @else
                                        <span class="badge bg-danger text-white">
                                            Inactivo
                                        </span>
                                        @endif
                                    </td>

                                    <td>
                                        <img src="{{ asset( $cliente->foto_cliente ) }}" alt="" class="img-fluid img-thumbnail" width="100px">
                                    </td>

                                    <td>
                                        @can('cliente_destroy')
                                        <form action="{{ route('clientes.destroy',$cliente->id) }}" method="POST" enctype="multipart/form-data" style="display: inline-block;" onsubmit="return confirm('¿Esta seguro que desea eliminar?')">
                                            @endcan

                                            @can('cliente_show')
                                            <a class="btn btn-sm btn-primary " href="{{ route('clientes.show',$cliente->id) }}"><i class="fa fa-fw fa-eye"></i> </a>
                                            @endcan

                                            @can('cliente_edit')
                                            <a class="btn btn-sm btn-success" href="{{ route('clientes.edit',$cliente->id) }}"><i class="fa fa-fw fa-edit"></i> </a>
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
            <!-- {!! $clientes->links() !!} -->
        </div>
    </div>
</div>
@endsection