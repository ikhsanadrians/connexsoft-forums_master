<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="auth.css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/css?family=PlusJakartaSans" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{ asset('register.css') }}">
    @vite('resources/css/app.css')
    <title>Register</title>
</head>

<body>


    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="username" type="text"
                                        class="form-control @error('username') is-invalid @enderror" name="username"
                                        value="{{ old('username') }}" required autocomplete="username" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div id="app" class="w-full h-full flex justify-center">
        <div
            class="card-all flex mt-4 w-[800px] max-h-[600px] rounded-xl overflow-hidden border-[1.2px] border-slate-300">
            <div class="card-ilustration w-1/2 h-full bg-gradient-to-r  from-sky-500 to-blue-500">
                <div class="ilustration-logo flex justify-center pt-4">
                    <img src="{{ asset('connexsoftlogo.png') }}" alt="connexsoft" class="h-16">
                </div>
                <div class="ilustration w-full h-full mt-10">
                    <img src="{{ asset('images/analise.png') }}" alt="regilus">
                </div>
            </div>
            <div class="card-inputs w-1/2 h-full p-4 bg-gradient-to-r from-slate-200 to-slate-300">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="card-input-wrapper w-full flex flex-col">
                        <div class="card-input-title">
                            <h1 class="font-bold text-2xl text-center">Register Here</h1>
                        </div>
                        <div class="card-forms w-full px-2 flex flex-col gap-4 mt-4">
                            <div class="username">
                                <label for="username">Full Name</label>
                                <div class="inputandicon flex items-center">
                                    <span
                                        class="material-symbols-outlined absolute z-10 flex items-center text-[2rem] font-light text-slate-500 ml-2">
                                        person
                                    </span>

                                    <input id="name" type="text"
                                        class="w-full py-2 focus:shadow-sm focus:shadow-sky-400/60 outline-none focus:border-sky-400  border-[1.2px] border-slate-300 pl-10 relative rounded-xl form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name"
                                        autofocus placeholder="Enter Your Fullname">

                                </div>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="username">
                                <label for="username">Username</label>
                                <div class="inputandicon flex items-center">
                                    <span
                                        class="material-symbols-outlined absolute z-10 flex items-center text-[2rem] font-light text-slate-500 ml-2">
                                        person
                                    </span>

                                    <input id="username" type="text"
                                        class="w-full py-2 focus:shadow-sm focus:shadow-sky-400/60 outline-none focus:border-sky-400  border-[1.2px] border-slate-300 pl-10 relative rounded-xl form-control @error('username') is-invalid @enderror"
                                        name="username" value="{{ old('username') }}" required autocomplete="username"
                                        autofocus placeholder="Enter Your Username">

                                </div>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="email">
                                <label for="email">Email</label>
                                <div class="inputandicon flex items-center">
                                    <span class="material-symbols-outlined absolute z-10 ml-2 text-slate-500">
                                        alternate_email
                                    </span>
                                    <input type="email" id="email"
                                        class="w-full outline-none focus:shadow-sm  focus:shadow-sky-400/60 focus:border-sky-400  py-2 pl-10 rounded-xl relative border-[1.2px] z-8 border-slate-300 form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" placeholder="Enter Your Email">


                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="password">
                                <label for="password">Password</label>
                                <div class="inputandicon flex items-center">
                                    <span class="material-symbols-outlined absolute z-10 ml-2 text-slate-500">
                                        lock
                                    </span>
                                    <input type="password" name="password" id="email"
                                        class="w-full outline-none focus:border-sky-400 focus:shadow-sm focus:shadow-sky-400/60 py-2 pl-10 rounded-xl relative border-[1.2px] z-8 border-slate-300 @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="new-password"
                                        placeholder="Enter Your Password">

                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="confirmpassword">
                                <label for="confirmpassword">Password Confirm</label>
                                <div class="inputandicon flex items-center">
                                    <span class="material-symbols-outlined absolute z-10 ml-2 text-slate-500">
                                        lock
                                    </span>
                                    <input type="password" id="password-confirm"
                                        class="w-full focus:shadow-sm focus:shadow-sky-400/60 py-2 outline-none focus:border-sky-400  pl-10 rounded-xl relative border-[1.2px] z-8 border-slate-300
                                    "
                                        name="password_confirmation" placeholder="Enter Your Confirm Password" required
                                        autocomplete="new-password">
                                </div>

                            </div>
                            <div class="buttonregister">
                                <button type="submit"
                                    class="bg-gradient-to-r  from-sky-400 to-blue-400 focus:shadow-sm focus:shadow-sky-400/60 rounded-xl w-full mt-2 p-2 text-white font-semibold  tracking-wide">
                                    {{ __('Register') }}
                                </button>
                </form>
            </div>
            <div class="haveaccount flex justify-center gap-2">
                <h1>Have An Account?</h1>
                <div class="loginbutton">
                    <a class="underline" href="/login">Login Here</a>
                </div>
            </div>

        </div>
    </div>

    </div>


    </div>


    </div>




</body>

</html>
