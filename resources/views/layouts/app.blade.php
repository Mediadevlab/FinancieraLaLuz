<!doctype html5>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/datatable.js') }}" defer></script>
    <script src="{{ asset('js/moment.js') }}" defer></script>
    <script src="{{ asset('js/amortizacion.js') }}" defer></script>
    <script src="{{ asset('js/cuota.js') }}" defer></script>
    <script src="{{ asset('js/chartsBar.js') }}" defer></script>
    <script src="{{ asset('js/chartsArea.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/db528d891f.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

    <!-- scripts para datatables -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.bootstrap5.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.colVis.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap5.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.colVis.min.js" crossorigin="anonymous"></script>
    <!-- fin scripts datatable -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">

    <!-- styles datatables -->
    <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.bootstrap5.min.css">
    <link href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap5.min.css">
    <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

    <!-- fin styles datatables -->

</head>

<body>
    <div id="app">


        <!-- navbar original -->
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm col-sm-12 col-md-12 col-lg-12 col-xl-12" style="background-color:#344966 !important;">
            <div class="container">
                @if (Auth::check())
                <a class="fuente" style="margin-right: 10px;" href="{{ url('home') }}">
                    <i class="fa fa-dashboard" style="margin-right: 10px;"></i>{{ __('Escritorio') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    <!--Financiera-->
                    <div class="dropdown" style="margin-right: 10px;">
                        <a class="fuente dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-file-invoice-dollar" style="margin-right: 3px;"></i> Financiera
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <!-- @can('cliente_index')
                                <li><a class="dropdown-item" type="button" href="{{ route('clientes.index') }}"><i class="fa fa-briefcase" style="margin-right: 5px;"></i>{{ __('Clientes') }}</a></li>
                            @endcan -->

                            @can('prestamo_index')
                            <li><a class="dropdown-item" type="button" href="{{ route('prestamos.index') }}"><i class="fa fa-coins" style="margin-right: 5px;"></i>{{ __('Préstamos') }}</a></li>
                            @endcan

                            @can('comision_index')
                            <li><a class="dropdown-item" type="button" href="{{ route('comisiones.index') }}"><i class="fa fa-receipt" style="margin-right: 5px;"></i>{{ __('Comisiones') }}</a></li>
                            @endcan

                            @can('cobro_index')
                            <li><a class="dropdown-item" type="button" href="{{ route('cobros.index') }}"><i class="fa fa-cash-register" style="margin-right: 5px;"></i>{{ __('Cobros') }}</a></li>
                            @endcan

                            <!-- @can('reporte_index')
                            <li><a class="dropdown-item" type="button" href="{{ ('') }}"><i class="fa fa-file-invoice" style="margin-right: 5px;"></i>{{ __('Reportes') }}</a></li>
                            @endcan -->
                        </ul>
                    </div>

                    <!--Mantenimiento-->
                    <div class="dropdown">
                        <a class="fuente dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-gear" style="margin-right: 3px;"></i> Mantenimiento
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            @can('user_index')
                            <li><a class="dropdown-item" type="button" href="{{ route('users.index') }}"><i class="fa fa-user" style="margin-right: 3px;"></i> {{ __('Usuarios') }}</a></li>
                            @endcan

                            @can('role_index')
                            <li><a class="dropdown-item" type="button" href="{{ route('roles.index') }}"><i class="fa fa-lock" style="margin-right: 3px;"></i> {{ __('Roles') }}</a></li>
                            @endcan

                            @can('permission_index')
                            <li><a class="dropdown-item" type="button" href="{{ route('permission.index') }}"><i class="fa fa-key" style="margin-right: 3px;"></i> {{ __('Permisos') }}</a></li>
                            @endcan

                            @can('empleado_index')
                            <li><a class="dropdown-item" type="button" href="{{ route('empleados.index') }}"><i class="fa fa-user" style="margin-right: 5px;"></i>{{ __('Empleados') }}</a></li>
                            @endcan
                        </ul>
                    </div>

                    <!--Configuraciones-->
                    <div class="dropdown" style="margin-left: 10px;">
                        <a class="fuente dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-sliders" style="margin-right: 3px;"></i> Configuraciones
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            @can('bitacora_index')
                            <li><a class="dropdown-item" type="button" href="{{ ('') }}"><i class="fa fa-book" style="margin-right: 5px;"></i>{{ __('Bitácora') }}</a></li>
                            @endcan
                        </ul>
                    </div>

                    <!--Menu sencillo
                    <ul class="navbar-nav me-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.index') }}">{{ __('Usuarios') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('roles.index') }}">{{ __('Roles') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('clientes.index') }}">{{ __('Clientes') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ ('') }}">{{ __('Cobros') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('empleados.index') }}">{{ __('Empleados') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('prestamos.index') }}">{{ __('Préstamos') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('comisiones.index') }}">{{ __('Comisiones') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ ('') }}">{{ __('Reportes') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ ('') }}">{{ __('Bitácora') }}</a>
                        </li>

                    </ul>
                    -->

                    @endif
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('login') }}"><i class="fa fa-fingerprint" style="margin-right: 6px;"></i>{{ __('Ingresar') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('register') }}"><i class="fa fa-pencil" style="margin-right: 6px;"></i>{{ __('Registrarse') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">

                            <a style="color: #ef6f6c;" id="navbarDropdown" class="fuente nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <!-- <img src="{{ asset('avatar-' . auth()->id() . '.png' ) }}" width="40" class="mr-2"> -->
                                Bienvenido, {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-door-open" style="margin-right: 5px;"></i> {{ __('Salir') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <!-- fin navbar original -->

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

<!-- Footer opcion 2
<div class="container">
    <footer id="footer" class="d-flex flex-wrap justify-content-between align-items-center my-4 text-center">
        <p class="col-md-12 mb-0 text-muted" style="text-transform: uppercase;">Diseño y Desarrollo:
            <strong><a href="mailto:crivas.301284@gmail.com;" style="text-decoration: none;"> Ing. Cristopher L. Rivas</a></strong> |
            &copy; <script>
                document.write(new Date().getFullYear())
            </script> Financiera La Luz.
        </p>
    </footer>
</div>
-->

<div class="" style="text-align: center;">
    Diseño y Desarrollo:<strong><a href="mailto:info@mediadevlab.com;" style="text-decoration: none;">
            MDL</a></strong> |
    Derechos Reservados &copy; {{ date('Y') }} | Financiera La Luz</p>
</div>

</html>