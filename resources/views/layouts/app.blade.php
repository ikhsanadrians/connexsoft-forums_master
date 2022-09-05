<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Connexsoft Forums | Forum For Developers!</title>
    <link rel="stylesheet" href="auth.css">
    <link rel="icon" href="./images/connexsoftlogomobile.png">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/css?family=PlusJakartaSans" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Akshar:wght@500&family=Dela+Gothic+One&family=Koulen&family=Lato:ital@1&family=Monoton&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Orbitron:wght@700&family=Permanent+Marker&family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:wght@600&family=Red+Hat+Mono:wght@500&family=Roboto+Condensed:wght@300;700&family=Rubik:wght@400;500;600&family=Smooch+Sans&family=Ubuntu:wght@500&display=swap"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    @vite('resources/css/app.css')
</head>

<body>
    <div id="app">
        <header class="desktop-header hidden lg:block sm:block md:block sticky bg-white top-0" style="z-index:99">
            <nav class="shadow-lg">
                <div class="container pl-20 pt-2 pb-2 flex gap-6 justify-evenly">
                    <div class="navbar-icon">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('images/connexsoftlogo.png') }}" alt="connexsoft logo"
                                class="h-14 w-full">
                        </a>
                    </div>

                    <div class="search flex items-center">
                        <span class="material-symbols-rounded absolute text-3xl ml-2">
                            search
                        </span>
                        <input type="text" name="search" id="search"
                            class="bg-slate-200 pt-2 pb-2 pl-10 w-[400px] rounded-2xl focus:outline-none focus:outline-sky-600"
                            placeholder="Cari Pertanyaan Atau Jawaban">
                    </div>
                    <div class="navbar-menu flex items-center">
                        <ul class="flex gap-2">
                            <li class="hover:bg-slate-200 p-2 rounded-2xl duration-500 font-bold text-slate-600"><a
                                    href="">Questions</a>
                            </li>
                            <li class="hover:bg-slate-200 p-2 rounded-2xl duration-500 font-bold text-slate-600"><a
                                    href="">Answers</a>
                            </li>
                        </ul>
                    </div>
                    <div class="notifprofileandlogout flex items-center gap-2">
                        <div class="notif flex items-center">
                            <a href="" class="flex items-center">
                                <span class="material-symbols-outlined relative text-yellow-500">
                                    <div
                                        class="ping h-2 w-2 absolute rounded-full ml-[1.3px] mt-[1px] animate-ping duration-600 bg-yellow-500">
                                    </div>
                                    notifications
                                </span>
                            </a>

                        </div>

                        <div class="profile flex gap-2 bg-slate-200 pt-[1.2px] pb-[1.2px] pr-4 rounded-2xl">
                            <div class="profile-image flex items-center">
                                <img src="{{ asset('images/dani.png') }}" alt="profile-image" class="h-8">
                            </div>
                            <div class="profile-username flex items-center">
                                <p class="font-bold cursor-pointer text-slate-500"><a
                                        v-pre>{{ Auth::user()->username }}</a></p>
                            </div>
                        </div>
                        <div id="asknav"
                            class="ask cursor-pointer hover:opacity-80 bg-gradient-to-r from-cyan-500 to-blue-500 pt-[3.9px] pb-[3.9px] pl-2 pr-2 rounded-2xl">
                            <div class="flex items-center gap-[1.2px]">
                                <span class="material-icons text-slate-200">
                                    front_hand
                                </span>

                                <p class="font-bold text-white">Ask</p>
                            </div>
                        </div>
                        <div class="logout">
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                            document.getElementById('logout-form') .submit();"
                                class="flex items-center">
                                <span class="material-symbols-outlined text-slate-500">
                                    logout
                                </span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </div>

                    </div>


                </div>

            </nav>

        </header>
        <header class="mobile-header block lg:hidden sm:hidden md:hidden">
            <nav class="shadow-lg">
                <div class="container pt-2 pl-4 pr-4 pb-2 flex gap-6 justify-between">
                    <div class="navbar-icon">
                        <a href="{{ url('/') }}">
                            <img src="./images/connexsoftlogomobile.png" alt="connexsoft logo" class="h-10 w-full">
                        </a>
                    </div>

                    <div class="search flex items-center justify-center">
                        <div class="search-inner">
                            <span class="material-symbols-rounded absolute text-3xl ml-2">
                                search
                            </span>
                            <input type="text" name="search" id="search"
                                class="bg-slate-200 pt-2 pb-2 pl-10 max-w-[170px] rounded-2xl focus:outline-none focus:outline-sky-600"
                                placeholder="Cari Pertanyaan Atau Jawaban">
                        </div>

                    </div>
                    <div class="navbar-menu hidden">
                        <ul class="flex gap-2">
                            <li class="hover:bg-slate-200 p-2 rounded-2xl duration-500 font-bold text-slate-600"><a
                                    href="">Questions</a>
                            </li>
                            <li class="hover:bg-slate-200 p-2 rounded-2xl duration-500 font-bold text-slate-600"><a
                                    href="">Answers</a>
                            </li>
                        </ul>
                    </div>

                    <div class="notifprofileandlogout flex items-center gap-2">
                        <div class="notif flex items-center">
                            <a href="" class="flex items-center">
                                <span class="material-symbols-outlined text-yellow-500">
                                    notifications
                                </span>
                            </a>

                        </div>

                        <div class="profile gap-2 bg-slate-200 pt-[1.2px] pb-[1.2px] pr-4 rounded-2xl hidden">
                            <div class="profile-image flex items-center">
                                <img src="./images/dani.png" alt="profile-image" class="h-8">
                            </div>
                            <div class="profile-username flex items-center">
                                <p class="font-bold cursor-pointer text-slate-500"><a
                                        v-pre>{{ Auth::user()->username }}</a></p>
                            </div>
                        </div>
                        <div class="ask hidden bg-cyan-500 pt-[3.9px] pb-[3.9px] pl-2 pr-2 rounded-2xl">
                            <a href="" class="flex items-center gap-[1.2px]">
                                <span class="material-icons text-slate-200">
                                    front_hand
                                </span>

                                <p class="font-bold text-white">Ask</p>
                            </a>
                        </div>
                        <div class="logout hidden">
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                            document.getElementById('logout-form') .submit();"
                                class="flex items-center">
                                <span class="material-symbols-outlined text-slate-500">
                                    logout
                                </span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </div>

                    </div>
                    <div class="flex items-center mt-2">
                        <div class="hamburger">
                            <input type="checkbox" name="" id="checkboxhamburger"
                                class="absolute h-8 w-8 opacity-0">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>


                </div>

            </nav>

        </header>

        <main class="py-4 bg-[#f1f3f2]" style=" font-family: 'Plus Jakarta Sans', sans-serif;">
            @yield('contents')
        </main>
    </div>

</body>

</html>
