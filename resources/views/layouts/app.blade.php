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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
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
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-lg" >
            <div class="container  pr-20 pl-20 -mt-4 pb-[6px]">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class=" flex justify-between items-center" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <div class="logodkk flex items-center gap-10">
                        <a class="navbar-brand" href="{{ url('/') }}" class="user-select-none pointer-events-none">
                            <img src="connexsoftlogo.png" alt="logo" class="h-[60px] user-select-none pointer-events-none">
                        </a>
                        <ul class="flex gap-4 font-bold text-slate-600">
                            <li class="duration-300 hover:bg-slate-200 p-2 rounded-lg"><a href="#">Question</a></li>
                            <li class="duration-300 hover:bg-slate-200 p-2 rounded-lg"><a href="#">Answers</a></li>
                            <div class="search  flex items-center font-semibold">
                                <span class="material-symbols-rounded absolute text-3xl ml-2">
                                    search
                                    </span>
                                <input type="text" name="search" placeholder="Cari Jawaban Atau Pertanyaan"
                                class="border-slate-300 border-[1.4px] w-[400px] pt-2 pb-2 pl-10 rounded-lg focus:outline-none focus:outline-sky-500 focus:border-none">
                            </div>
                        </ul>
                        
                    </div>
                  
                   
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
                            <li class="nav-item dropdown flex gap-4">
                                <div class="userandicon flex items-center bg-white pl-[5px] pr-[5px] pt-[0.9px] pb-[0.9px] border-slate-300 border-[1.5px] rounded-lg">
                                    <span class="material-symbols-outlined text-4xl inline-block text-slate-600">
                                    person_pin_circle
                                    </span>
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-slate-500 font-semibold" href="#" role="button"
                                    data-bs-toggle="``dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }}
                                </a></div>
                                

                                <div class="dropdown-menu items-center dropdown-menu-end flex rounded-full hover:bg hover:text-slate-300 duration-200" aria-labelledby="navbarDropdown">
                                   
                                    <a class="dropdown-item text-slate-300 font-bold" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form') .submit();">
                                       <span class="material-symbols-outlined text-slate-500">
                                        logout
                                        </span>
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
