@extends('layouts.app')

@section('template_title')
Prendario
@endsection

@section('content')
<div class="container mt-3">
    <div style="display: flex; justify-content: space-between;" class="marco">
        <h3 class=""><i class="fa fa-users"><b></i> Reporte de Clientes Préstamos Prendarios</h3></b>
        <div class="float-right">
            <label style="font-weight: bolder; font-size: large;">Fecha Actual : {{ \Carbon\Carbon::now()->format('m/d/Y') }}</label>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-x-12">
            <div class="card cabecera1">
                <div class="card-header cabecera2" style="border-top: solid 4px #344966;">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Prendario') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('prendarios.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                <i class="fa fa-plus"></i>{{ __(' Generar Cliente Prendario') }}
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
                            <thead class="thead text-center" style="background-color: #344966; color:white;">
                                <tr>
                                    <th>#</th>

                                    <th>Nombre</th>
                                    <th>DNI</th>
                                    <th>Ciudad</th>
                                    <th>Correo</th>
                                    <th>Foto</th>
                                    <th>Foto Vehiculo</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($prendarios as $prendario)
                                <tr class="align-middle">
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $prendario->nombre }}</td>
                                    <td>{{ $prendario->dni }}</td>
                                    <td>{{ $prendario->ciudad }}</td>
                                    <td>{{ $prendario->correo }}</td>
                                    <td>{{ $prendario->foto }}</td>
                                    <td>{{ $prendario->foto_vehiculo }}</td>

                                    <td>
                                    <form action="{{ route('prendarios.destroy',$prendario->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Esta seguro que desea eliminar?')">
                                            <a class="btn btn-sm btn-primary " href="{{ route('prendarios.show',$prendario->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                            <a class="btn btn-sm btn-success" href="{{ route('prendarios.edit',$prendario->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $prendarios->links() !!}
        </div>
    </div>
</div>
@endsection