<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/b90e9e4354.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('sass/app.scss')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="nav-in">
<nav class="navbar navbar-expand-lg navbar-light bg-primary" style="position:fixed; top:0; width:100%; max-height:6rem;">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button class="menu" id="button-menu" ><i class="fas fa-align-right"></i></button>
                    </button>

                    <!-- Branding Image -->
                </div>

                <div class="collapse navbar-collapse"  id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav navbar-right" id="nav">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li class="log"><a href="{{ route('login') }}">Login</a></li>
                            <li class="log"><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="nav-item">
                                <a href="{{action('HomeController@logout')}}" class="dropdown-toggle text-white" data-toggle="dropdown" role="button" aria-expanded="false">
                                    cerrar sesion
                                </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ action('HomeController@index')}}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ action('NotaController@addFruta')}}">Crear Nota</a>
                                </li>
                            </div>
                        @endif
                </ul>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/nav.js') }}"></script>
</body>
</html>
