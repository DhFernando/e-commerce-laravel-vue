<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


{{--  -------------------------------------------------------------------------------------------------  --}}
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
{{--  -------------------------------------------------------------------------------------------------  --}}


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark text-white bg-dark  fixed-top shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    E-Commerce Laravel
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav  ml-5">
                        <li class="mr-4"><a href="/advertisements/create" class="text-dark p-2 rounded bg-warning"><strong>Create Ad</strong></a></li>
                        <li class="mr-4"><a href="#" class="text-light">About Us</a></li>
                        <li class="mr-4"><a href="#" class="text-light">Contact Us</a></li>
                        <li class="mr-4">
                            <a href="/user" class="text-light">My Account
                                @can('isAdmin')
                                   [ {{\Illuminate\Support\Facades\DB::table('advertisements')->where('state',0)->count()}} ]
                                @endcan
                            </a>
                        </li>
                    </ul>
                    <!-- Middle Of Navbar -->
                    <ul class="navbar-nav ml-5">
                        have to update middel
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 mt-5 bg-white">
          <div class="mt-3">
              @yield('content')
          </div>
        </main>
    </div>

{{--  ----------------------------------------------------------------  --}}
    <script src="{{ asset('js/mdb.min.js') }}"></script>
{{--  ----------------------------------------------------------------  --}}

</body>
</html>
