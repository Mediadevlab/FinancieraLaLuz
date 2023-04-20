@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-left">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card cabecera1">
                <div class="card-header cabecera2" style="font-weight: bold; font-size:large;"><i class="fa fa-list-ol" style="margin-right: 8px;"></i>{{ __('Métricas')}}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="row">


                        <!-- tarjeta fiducario -->
                        <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
                            <div class="card cajaPrestamos border-primary mb-3" style="max-width: 40rem;">
                                <div class="card-header text-center">
                                    <div style="display: flex; justify-content: space-between; align-items: center;">
                                        <span id="card_title">
                                            {{ __('Préstamos Fiduciarios') }}
                                        </span>

                                        <div class="float-right">
                                            <a href="{{ route('fiduciarios.index') }}" class="float-right" data-placement="left">
                                                <i class="fa fa-search"></i>
                                                <!--{{ __(' Ver más') }}-->
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body d-grid gap-2 text-primary">
                                    @php
                                    use App\Models\Fiduciario;
                                    $cant_fiduciario = Fiduciario::count();
                                    @endphp

                                    <div class="text-center mb-2" style="font-size: x-large;">Existentes<span class="badge bg-danger" style="margin-left: 6px;">{{ $cant_fiduciario }}</span></div>
                                </div>
                            </div>
                        </div>

                        <!-- tarjeta hipotecario -->
                        <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
                            <div class="card cajaPrestamos border-primary mb-3" style="max-width: 40rem;">
                                <div class="card-header text-center">
                                    <div style="display: flex; justify-content: space-between; align-items: center;">
                                        <span id="card_title">
                                            {{ __('Préstamos Hipotecarios') }}
                                        </span>

                                        <div class="float-right">
                                            <a href="{{ route('hipotecarios.index') }}" class="float-right" data-placement="left">
                                                <i class="fa fa-search"></i>
                                                <!--{{ __(' Ver más') }}-->
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body d-grid gap-2 text-primary">
                                    @php
                                    use App\Models\Hipotecario;
                                    $cant_hipotecario = Hipotecario::count();
                                    @endphp

                                    <div class="text-center mb-2" style="font-size: x-large;">Existentes<span class="badge bg-danger" style="margin-left: 6px;">{{ $cant_hipotecario }}</span></div>
                                </div>
                            </div>
                        </div>

                        <!-- tarjeta prendario -->
                        <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
                            <div class="card cajaPrestamos border-primary mb-3" style="max-width: 40rem;">
                                <div class="card-header text-center">
                                    <div style="display: flex; justify-content: space-between; align-items: center;">
                                        <span id="card_title">
                                            {{ __('Préstamos Prendarios') }}
                                        </span>

                                        <div class="float-right">
                                            <a href="{{ route('prendarios.index') }}" class="float-right" data-placement="left">
                                                <i class="fa fa-search"></i>
                                                <!--{{ __(' Ver más') }}-->
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body d-grid gap-2 text-primary">
                                    @php
                                    use App\Models\Prendario;
                                    $cant_prendario = Prendario::count();
                                    @endphp

                                    <div class="text-center mb-2" style="font-size: x-large;">Existentes<span class="badge bg-danger" style="margin-left: 6px;">{{ $cant_prendario }}</span></div>
                                </div>
                            </div>
                        </div>

                        <!-- tarjeta mypime -->
                        <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
                            <div class="card cajaPrestamos border-primary mb-3" style="max-width: 40rem;">
                                <div class="card-header text-center">
                                    <div style="display: flex; justify-content: space-between; align-items: center;">
                                        <span id="card_title">
                                            {{ __('Préstamos Mypimes') }}
                                        </span>

                                        <div class="float-right">
                                            <a href="{{ route('mypimes.index') }}" class="float-right" data-placement="left">
                                                <i class="fa fa-search"></i>
                                                <!--{{ __(' Ver más') }}-->
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body d-grid gap-2 text-primary">
                                    @php
                                    use App\Models\Mypime;
                                    $cant_mypime = Mypime::count();
                                    @endphp

                                    <div class="text-center mb-2" style="font-size: x-large;">Existentes<span class="badge bg-danger" style="margin-left: 6px;">{{ $cant_mypime }}</span></div>
                                </div>
                            </div>
                        </div>

                        <!-- tarjeta usuarios -->
                        <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
                            <div class="card cajaPrestamos border-primary mb-3" style="max-width: 40rem;">
                                <div class="card-header text-center">
                                    <div style="display: flex; justify-content: space-between; align-items: center;">
                                        <span id="card_title">
                                            {{ __('Usuarios') }}
                                        </span>

                                        <div class="float-right">
                                            <a href="{{ route('users.index') }}" class="float-right" data-placement="left">
                                                <i class="fa fa-search"></i>
                                                <!--{{ __(' Ver más') }}-->
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body d-grid gap-2 text-primary">
                                    @php
                                    use App\Models\User;
                                    $cant_usuarios = User::count();
                                    @endphp

                                    <div class="text-center mb-2" style="font-size: x-large;">Existentes<span class="badge bg-danger" style="margin-left: 6px;">{{ $cant_usuarios }}</span></div>
                                </div>
                            </div>
                        </div>

                        <!-- tarjeta roles -->
                        <!-- <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body d-grid gap-2">
                                
                                    @php
                                    use Spatie\Permission\Models\Role;
                                    $cant_roles = Role::count();
                                    @endphp
                                    <h4 class="text-center"><strong>Roles </strong><span class="badge bg-danger">{{ $cant_roles }}</span></h4>
                                    <a href="/roles" class="btn btn-primary">Ver más</a>
                                </div>
                            </div>
                        </div> -->

                        <!-- tarjeta clientes -->
                        <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
                            <div class="card cajaPrestamos border-primary mb-3" style="max-width: 40rem;">
                                <div class="card-header text-center">
                                    <div style="display: flex; justify-content: space-between; align-items: center;">
                                        <span id="card_title">
                                            {{ __('Clientes') }}
                                        </span>

                                        <div class="float-right">
                                            <a href="{{ route('clientes.index') }}" class="float-right" data-placement="left">
                                                <i class="fa fa-search"></i>
                                                <!--{{ __(' Ver más') }}-->
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body d-grid gap-3 text-primary">
                                    @php
                                    use App\Models\Cliente;
                                    $cant_clientes = cliente::count();
                                    @endphp

                                    <div class="text-center mb-2" style="font-size: x-large;">Existentes<span class="badge bg-danger" style="margin-left: 6px;">{{ $cant_clientes }}</span></div>
                                </div>
                            </div>
                        </div>

                        <!-- tarjeta capital -->
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="card cajaPrestamos2 mb-3" style="max-width: 40rem;">
                                <div class="card-header">
                                    <div style="display: flex; justify-content: space-between; align-items: center;">
                                        <span id="card_title">
                                            {{ __('Total de Capital') }}
                                        </span>

                                        <div class="float-right">
                                            <a href="{{ route('prestamos.index') }}" class="float-right" data-placement="left">
                                                <i class="fa fa-search" style="color: white;"></i>
                                                <!--{{ __(' Ver más') }}-->
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body d-grid gap-2 text-primary">
                                    @php
                                    
                                    @endphp

                                    <div style="font-weight: bolder; font-size:xx-large; color: white;" class="text-center mb-2">L<span class="badge bg-success" style="margin-left: 6px;"></span></div>

                                </div>
                            </div>
                        </div>

                        <!-- tarjeta interese -->
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="card cajaPrestamos3 mb-3" style="max-width: 40rem;">
                                <div class="card-header">
                                    <div style="display: flex; justify-content: space-between; align-items: center;">
                                        <span id="card_title">
                                            {{ __('Total de Interés') }}
                                        </span>

                                        <div class="float-right">
                                            <a href="{{ route('prestamos.index') }}" class="float-right" data-placement="left">
                                                <i class="fa fa-search" style="color: white;"></i>
                                                <!--{{ __(' Ver más') }}-->
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body d-grid gap-2 text-primary">

                                    <div style="font-weight: bolder; font-size:xx-large; color:white;" class="text-center mb-2">L<span class="badge bg-success" style="margin-left: 6px;"></span></div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card cabecera1">
                <div class="card-header cabecera2" style="font-weight: bold; font-size:large;"><i class="fa fa-chart-line" style="margin-right: 8px;"></i>{{ __('Estadíscas')}}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="row">

                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <h5 class="text-center">Capital por Mes</h5>
                            <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <h5 class="text-center">Préstamos por Mes</h5>
                            <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- script charts -->
<script type="text/javascript">
    var _ydata = JSON.parse('{!! json_encode($months) !!}');
    var _xdata = JSON.parse('{!! json_encode($monthCount) !!}');
</script>
<!-- <script type="text/javascript">
    var _Xdata = JSON.parse('{!! json_encode($months) !!}');
    var _Ydata = JSON.parse('{!! json_encode($monthCount) !!}');
</script> -->
@endsection