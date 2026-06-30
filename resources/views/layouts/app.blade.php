<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Inventario Promart</title>

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
<div id="app">

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('home') }}">
            Promart
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Menú izquierdo -->
            <ul class="navbar-nav me-auto">

                @auth

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/empleados') }}">
                        Empleados
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/productos') }}">
                        Productos
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/proveedores') }}">
                        Proveedores
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/areas') }}">
                        Áreas
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/estados') }}">
                        Estados
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/pedido-proveedores') }}">
                        Pedidos
                    </a>
                </li>

                @endauth

            </ul>

            <!-- Menú derecho -->
            <ul class="navbar-nav ms-auto">

                @guest

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            Iniciar sesión
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">
                            Registrarse
                        </a>
                    </li>

                @else

                    <li class="nav-item dropdown">

                        <a id="navbarDropdown"
                           class="nav-link dropdown-toggle"
                           href="#"
                           role="button"
                           data-bs-toggle="dropdown">

                            {{ Auth::user()->name }}

                        </a>

                        <div class="dropdown-menu dropdown-menu-end">

                            <a class="dropdown-item"
                               href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">

                                Cerrar sesión

                            </a>

                            <form id="logout-form"
                                  action="{{ route('logout') }}"
                                  method="POST"
                                  class="d-none">
                                @csrf
                            </form>

                        </div>

                    </li>

                @endguest

            </ul>

        </div>

    </div>
</nav>

<main class="py-4">
    @yield('content')
</main>

</div>
</body>
</html>