<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="https://i.pinimg.com/originals/2a/79/11/2a791199ded2304794c89ddd631b945d.png" sizes="16x16" type="image/png"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Carro e CIA - @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;1,500;1,700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="./resources/css/app.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">

                <a class="navbar-brand" href="{{ url('/veiculos ') }}">
                    <i class="bi bi-cone-striped text-success"></i><strong>{{ __('   Carro e CIA   ') }}</strong><i class="bi bi-cone-striped text-success"></i>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Lado esquerdo do menu -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Lado direito do menu -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a class="nav-link {{ Request::path() === 'veiculos' ? 'font-weight-bolder' : '' }}" href="/veiculos">Veículos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ Request::path() == 'relatorios/undefined' ? 'font-weight-bolder' : '' }}" :href="'/relatorios/' + carros">Relatórios</a>
                        </li>

                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::path() === 'login' ? 'font-weight-bolder' : '' }}" href="/login">{{ __('Login') }}</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link {{ Request::path() === 'register' ? 'font-weight-bolder' : '' }}" href="/register">{{ __('Registrar') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('login') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }} <i class="bi bi-cone-striped text-success" style="float: right"></i>
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

        <main class="py-4">
            @yield('content')
        </main>

    </div>

        <br>

    <footer class="footer">
        <hr>
        <span>Desenvolvido por Ricardo Röhrs <i class="bi bi-cone-striped text-success"></i> Jetimob</span>
    </footer>

</body>
</html>
