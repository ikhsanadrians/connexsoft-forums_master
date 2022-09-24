<!DOCTYPE html>
<html lang="en">

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    @vite('resources/css/app.css')
</head>

<body>
    <div class="login-container flex justify-center mt-12">
        <div
            class="login-body w-[400px] max-h-[600px] lg:pb-0  lg:w-[800px] lg:h-[550px] border-[1.2px] border-slate-300 rounded-md overflow-hidden">
            <div class="login-inner flex w-full h-full">
                <div
                    class="login-ilustration bg-gradient-to-r from-sky-500 to-blue-500 h-full w-1/2 invisible lg:visible">
                    <div class="ilustration-logo flex justify-center mt-6 pointer-events-none select-none">
                        <img src="connexsoftlogo.png" alt="connexsoftlogo" class="h-16 pointer-events-none select-none">
                    </div>
                    <div class="ilustration-vector mt-10 pointer-events-none select-none">
                        <img src="/images/connexsoftilu.png" alt="ilustration" class="pointer-events-none select-none">
                    </div>
                </div>
                <div
                    class="login-input  pt-10 pr-12 pl-12 bg-gradient-to-r h-full pb-[40px] from-slate-100 to-slate-200 w-full  lg:w-1/2 lg:h-full">
                    <div class="ilustration-mobile justify-start block lg:hidden pointer-events-none select-none">
                        <img src="connexsoftlogo.png" alt="connexsoftlogo"
                            class="h-16 pointer-events-none select-none justify-start">
                    </div>
                    <div class="title flex justify-center">
                        <h1 class="justify-center font-bold text-4xl hidden lg:block">Welcome!</h1>
                    </div>
                    <div class="form-group flex justify-center mt-12 w-full">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="input-email pl-6 pr-6">
                                <label for="email" class="absolute -mt-[25px]">Email</label>
                                <span class="material-symbols-outlined absolute z-10 mt-2 ml-2">
                                    alternate_email
                                </span>
                                <input id="email" type="email" value="{{ old('email') }}" required
                                    autocomplete="email" autofocus placeholder="Enter Your Email" name="email"
                                    class="relative   @error('email') is-invalid @enderror h-10 w-[360px] border-[1.2px] z-8 border-slate-300 rounded-lg pl-10 pb-[1.2px] outline-none focus:border-sky-600 focus:shadow-lg focus:shadow-sky-400/30 text-[16px]">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-password pl-6 pr-6 mt-10">
                                <label for="password" class="absolute -mt-[25px]">Password</label>
                                <span class="material-symbols-outlined absolute z-10 mt-2 ml-2">
                                    lock
                                </span>
                                <input type="password" id="password" placeholder="Enter Your Password" name="password"
                                    class="@error('password') is-invalid @enderror relative h-10 w-[360px] border-[1.2px] z-8 border-slate-300 rounded-lg pl-10 pb-[1.2px] outline-none focus:border-sky-600 focus:shadow-lg focus:shadow-sky-400/30 text-[16px]"
                                    required autocomplete="current-password">
                                <span class="material-symbols-outlined absolute mt-2 -ml-8 cursor-pointer"
                                    id="showpass">
                                    visibility
                                </span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="form-check mt-4">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>

                            <div
                                class="button-forgot flex-col justify-center lg:flex-row lg:justify-between lg:-mt-[10px]">
                                <div class="button pl-6 pr-6 mt-8">
                                    <button type="submit" name="submit"
                                        class="bg-gradient-to-r from-sky-500 to-blue-500 pt-2 pb-2 w-full mr-6 lg:w-1/2 lg:pr-8 lg:pl-8 text-white rounded-lg ">{{ __('Login') }}</button>
                                </div>
                                <div class="forgot-pass mt-10 mr-6 ml-6 lg:float-right lg:-mt-[30px] hidden lg:block">
                                    <h1><a href="">Forgot Password?</a></h1>
                                </div>
                            </div>


                        </form>
                    </div>
                    @if (Route::has('password.request'))
                        <div
                            class="forgot-pass flex justify-center mt-8 mr-6 ml-6 lg:float-right lg:-mt-[30px] block lg:hidden">
                            <h1><a href="{{ route('password.request') }}">{{ __('Forgot Password?') }}</a></h1>
                        </div>
                    @endif
                    <div class="register-option flex justify-between lg:justify-center mt-8">
                        <div class="register-inner">

                            <div class="lines flex">

                                <div class="lines-1 h-[1.2px] bg-slate-400 w-16 invisible lg:visible"></div>
                                <h1 class="-mt-[12px] ml-2 mr-2">Belum Punya Akun?</h1>
                                <div class="lines-2 h-[1.2px] bg-slate-400 w-16 invisible lg:visible"></div>
                            </div>
                            <div class="register-button flex justify-center mt-6">
                                <a href="{{ route('register') }}"
                                    class="bg-gradient-to-r from-cyan-400 to-green-600 text-white pt-2 pb-2 pr-8 pl-8 rounded-md">Register</a>
                            </div>


                        </div>

                    </div>


                </div>

            </div>
        </div>
    </div>

    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>
