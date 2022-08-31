<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Connexsoft Forums') }}</title>
    <link rel="stylesheet" href="auth.css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/css?family=PlusJakartaSans" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    @vite('resources/css/app.css')
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-lg">
            <div class="container pb-2 pr-20 pl-20">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class=" flex justify-between" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <a class="navbar-brand" href="{{ url('/') }}" class="user-select-none pointer-events-none">
                        <img src="connexsoftlogo.png" alt="logo" class="h-[60px] user-select-none pointer-events-none">
                    </a>
                    <!-- Right Side Of Navbar -->
                    <div class="right-nav">
                    <ul class="navbar-nav flex">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <div class="nav-item">
                            <li class="nav-item dropdown flex gap-10">
                                <div class="userandicon flex items-center">
                                    <span class="material-symbols-outlined text-4xl inline-block text-slate-600">
                                    person_pin_circle
                                    </span>
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-slate-500" href="#" role="button"
                                    data-bs-toggle="``dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a></div>
                                

                                <div class="dropdown-menu dropdown-menu-end flex items-center bg-red-500 pl-2 pr-2 rounded-xl" aria-labelledby="navbarDropdown">
                                    <span class="material-symbols-outlined text-white">
                                        logout
                                        </span>
                                    <a class="dropdown-item text-white" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                        @endguest
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </div>
                        
                    </ul>
                </div>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
