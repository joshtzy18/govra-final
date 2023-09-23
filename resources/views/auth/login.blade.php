@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/loaders.css') }}"> --}}
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex justify-center items-center max-w-screen max-h-sm h-[46rem]">
        <div class="flex max-w-sm sm:max-w-md md:max-w-lg lg:max-w-3xl xl:max-w-5xl lg:max-h-xl lg:h-3/4 lg:w-screen xl:h-4/5 w-4/5 h-1/2 shadow-lg justify-center items-center">
            <div class="hidden relative items-center flex-col sm:hidden md:hidden lg:flex lg:h-full lg:w-1/2 lg:max-w-xl">
                <div class="absolute h-full z-1 sm:w-full md:w-full lg:w-full xl:w-full">
                    <img src="{{URL('assets/images/waves.svg')}}" alt="bg-signup" class="h-full w-full object-cover z-0">
                </div>
                <span class="text-3xl text-white font-sans font-bold mr-60 ml-10 mt-12 z-10 xl:text-4xl xl:ml-0">GOVra</span>
                <img class="h-96 z-10 xl:w-[100rem]" src="{{URL('assets/images/pngegg2.png')}}" alt="banner">
                <span class="text-2xl font-semibold font-sans text-white z-10 xl:text-3xl ">FIND YOUR WORK HERE</span>
                <div class="h-1 w-[73%] bg-orange-500 z-10 xl:w-[67%] 2xl:w-[68%]"></div>
                <img class="h-80 absolute w-80 top-[14rem] xl:w-[25rem] xl:top-[15rem] z-0 opacity-30" src="{{URL('assets/images/pngegg3.png')}}" alt="banner">
            </div>

            <div class="flex flex-col max-w-sm sm:max-w-md md:max-w-lg lg:max-w-xl lg:w-1/2 lg:justify-center items-center h-full w-full  relative">
                <div class="absolute h-full z-1 sm:w-full md:w-full lg:w-full xl:w-full">
                    <img src="{{URL('assets/images/blob-scene-haikei.svg')}}" alt="bg-signup" class="h-full w-full object-cover">
                </div>

                <h1 class="text-3xl text-center mt-8 mb-3 font-sans font-bold lg:mt-0 xl:text-4xl text-white z-10">Login</h1>
                @if(session('login_success'))
                    <div class="alert alert-success">
                        {{ session('login_success') }}
                    </div>
                @endif
                <div class="relative max-w-[80%] sm:max-w-[80%] md:max-w-[80%] lg:max-w-[80%] lg:h-1/2 w-full h-4/5 px-3 z-10">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="username" class="text-white form-label">{{ __('Email Address or Username') }}</label>
                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="text-white form-label">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label text-white" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>

                        <div class="mb-0">
                            <button name="submit" class="btn btn-orangee mt-3 bg-orange-500 hover:bg-orange-700 text-white font-bold text-md xl:text-lg py-2 px-4 rounded w-full z-10">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link text-white text-center mt-3" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>

                    <div class="inline-flex mt-3 w-full">
                        <a href="{{ url('/register') }}" >
                            <span class="text-white font-sans text-sm font-extralight xl:text-lg">Don't have an account yet?</span>
                            <span class="text-blue-500 text-sm font-sans font-medium ml-1 xl:text-lg">Sign up</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showPass() {
            var pass = document.getElementById("password");
            var showicon = document.getElementById("showicon");
            var hideicon = document.getElementById("hideicon");

            if (pass.type === "password") {
                pass.type = "text";
                showicon.style.display = "none";
                hideicon.style.display = "block";
            } else {
                pass.type = "password";
                showicon.style.display = "block";
                hideicon.style.display = "none";
            }
        }
    </script>
</body>
</html>
@endsection
