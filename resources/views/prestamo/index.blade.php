@extends('layouts.app')

@section('template_title')
Prestamo
@endsection

@section('content')
<div class="py-4 container text-center justify-content-center">

    <div style="display: flex; justify-content: space-between;" class="marco">
        <h3 class=""><i class="fa fa-briefcase"><b></i> Tipos de Préstamos</h3></b>
        <div class="float-right">
            <label style="font-weight: bolder; font-size: large;">Fecha Actual : {{ \Carbon\Carbon::now()->format('m/d/Y') }}</label>
        </div>
    </div>

    <div class="row">

        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
            <div class="card" style="width:auto;">
                <a href="{{ route('mypimes.index') }}"><img src="{{ asset('img/pymes.jpg') }}" class="card-img-top" alt="..." style="height: 160px;"></a>
                <div class="card-body" style="display: flex; justify-content: space-between; align-items: center;">
                    <span id="card_title" style="font-weight: bold;">
                        {{ __('MYPIME') }}
                    </span>

                    <div class="float-right">
                        <a href="{{ route('mypimes.index') }}" class="float-right" data-placement="left">
                            <i class="fa fa-arrow-right"></i>
                            <!--{{ __(' Ver más') }}-->
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
            <div class="card" style="width: auto;">
                <img src="{{ asset('img/preguntas-frecuentes-fideicomiso.jpg') }}" class="card-img-top" alt="..." style="height: 160px;">
                <div class="card-body">
                    <a href="{{ route('fiduciarios.index') }}" class="card-text" style="text-decoration:none; font-weight:bold; color:black;">FIDUCIARIO</a>
                </div>
            </div>
        </div> -->

        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
            <div class="card" style="width:auto;">
                <a href="{{ route('fiduciarios.index') }}"><img src="{{ asset('img/preguntas-frecuentes-fideicomiso.jpg') }}" class="card-img-top" alt="..." style="height: 160px;"></a>
                <div class="card-body" style="display: flex; justify-content: space-between; align-items: center;">
                    <span id="card_title" style="font-weight: bold;">
                        {{ __('FIDUCIARIO') }}
                    </span>

                    <div class="float-right">
                        <a href="{{ route('fiduciarios.index') }}" class="float-right" data-placement="left">
                            <i class="fa fa-arrow-right"></i>
                            <!--{{ __(' Ver más') }}-->
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
            <div class="card" style="width:auto;">
                <a href="{{ route('hipotecarios.index') }}"><img src="{{ asset('img/prestamo-hipoteca-668x400x80xX.jpg') }}" class="card-img-top" alt="..." style="height: 160px;"></a>
                <div class="card-body" style="display: flex; justify-content: space-between; align-items: center;">
                    <span id="card_title" style="font-weight: bold;">
                        {{ __('HIPOTECARIO') }}
                    </span>

                    <div class="float-right">
                        <a href="{{ route('hipotecarios.index') }}" class="float-right" data-placement="left">
                            <i class="fa fa-arrow-right"></i>
                            <!--{{ __(' Ver más') }}-->
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
            <div class="card" style="width:auto;">
                <a href="{{ route('prendarios.index') }}"><img src="{{ asset('img/20210124-LOS-10-CARROS-MAS-VENDIDOS-DEL-MUNDO-EN-2020-01.jpg') }}" class="card-img-top" alt="..." style="height: 160px;"></a>
                <div class="card-body" style="display: flex; justify-content: space-between; align-items: center;">
                    <span id="card_title" style="font-weight: bold;">
                        {{ __('PRENDARIO') }}
                    </span>

                    <div class="float-right">
                        <a href="{{ route('prendarios.index') }}" class="float-right" data-placement="left">
                            <i class="fa fa-arrow-right"></i>
                            <!--{{ __(' Ver más') }}-->
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="container mt-3">

    <div style="display: flex; justify-content: space-between;" class="marco">
        <h3 class=""><i class="fa fa-users"><b></i> Reporte de Préstamos Globales</h3></b>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card cabecera1">
                <div class="card-header cabecera2" style="border-top: solid 4px #344966;">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Listado de préstamos') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('prestamos.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                <i class="fa fa-plus"></i>{{ __(' Generar Préstamo') }}
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
                                    <!-- <th>#</th> -->
                                    <th>Cod.</th>
                                    <th>Tipo</th>
                                    <th>Capital</th>
                                    <th>Tipo Tasa</th>
                                    <th>Cuota</th>
                                    <th>Forma Pago</th>
                                    <th>Fecha Solicitud</th>
                                    <th>Fecha Inicio</th>
                                    <th>Fecha Fin</th>

                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($prestamos as $prestamo)
                                <tr class="align-middle">
                                    <!-- <td>{{ ++$i }}</td> -->
                                    <td>{{ $prestamo->codigo }}</td>
                                    <td>{{ $prestamo->tipo }}</td>
                                    <td>{{ $prestamo->capital }}</td>
                                    <td>{{ $prestamo->tipo_tasa }}</td>
                                    <td>{{ $prestamo->cuota }}</td>
                                    <td>{{ $prestamo->forma_pago }}</td>
                                    <td>{{ $prestamo->fecha_solicitud }}</td>
                                    <td>{{ $prestamo->fecha_inicio }}</td>
                                    <td>{{ $prestamo->fecha_fin }}</td>

                                    <td>
                                        @can('prestamo_destroy')
                                        <form action="{{ route('prestamos.destroy',$prestamo->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Esta seguro que desea eliminar?')">
                                            @endcan

                                            @can('prestamo_show')
                                            <a class="btn btn-sm btn-primary " href="{{ route('prestamos.show',$prestamo->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                            @endcan

                                            @can('prestamo_edit')
                                            <a class="btn btn-sm btn-success" href="{{ route('prestamos.edit',$prestamo->id) }}"><i class="fa fa-fw fa-edit"></i></a>
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
            <!-- {!! $prestamos->links() !!} -->
        </div>
    </div>
</div>

<!--simulador-->
<div class="container mt-5">

    <h3 class="mb-3 marco"><i class="fa fa-calculator"><b></i> Simulador de Préstamos</h3></b>

    <div class="row">
        <div class="form-group col-sm-3">
            <label for="">Ingrese el Monto</label>
            <input type="number" class="form-control" id="monto" placeholder="L 000000">
        </div>

        <div class="form-group col-sm-3">
            <label for="">Ingrese el Tiempo</label>
            <input type="number" class="form-control" id="tiempo" placeholder="Cantidad en meses">
        </div>

        <div class="form-group col-sm-3">
            <label for="">Ingrese el Interés</label>
            <input type="number" class="form-control" id="interes" placeholder="cantidad en numero">
        </div>

        <div class="form-group col-sm-3">
            <a class="d-grid btn btn-md btn-primary" id="btnCalcular">Calcular</a>
        </div>
    </div>
</div>
<div class="container mt-4">
    <div class="row">
        <div class="col-sm-12">
            <div class="card cabecera1">
                <div class="card-header cabecera2" style="border-top: solid 4px #344966;">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Desgloce de Información del Préstamo Simulado') }}
                        </span>

                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="lista-tabla" class="table table-striped table-hover" style="width: 100%;">
                            <thead class="thead text-center" style="background-color:#344966; color:white;">
                                <tr class="align-middle">

                                    <th>Fecha</th>
                                    <th>Cuota</th>
                                    <th>Capital</th>
                                    <th>Interés</th>
                                    <th>Saldo</th>

                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection