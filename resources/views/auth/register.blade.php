@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- <div class="card"> --}}
                {{-- <div class="card-header">{{ __('Register') }}</div> --}}

                {{-- <div class="card-body "> --}}
                    {{-- <div class="flex justify-center items-center max-w-screen max-h-sm h-[82rem] lg:h-[55rem] xl:h-[58rem]"> --}}
    
                        {{-- signup box-container --}}
                        <div class=" flex max-w-sm sm:max-w-md md:max-w-lg lg:max-w-3xl xl:max-w-5xl lg:max-h-xl lg:h-3/4 lg:w-screen xl:h-4/5 w-4/5 h-1/2 shadow-lg justify-center items-center ">
                        
                          {{-- signup left side --}}
                          <div class="hidden relative items-center flex-col sm:hidden md:hidden lg:flex lg:h-full lg:w-1/2 lg:max-w-xl">
                              
                            <div class="absolute h-full z-1 sm:w-full md:w-full lg:w-full xl:w-full ">
                              <img src="{{URL('assets/images/waves.svg')}}" alt="bg-signup" class="h-[1040px] w-full object-cover z-0">
                            </div>
                            <span class="text-3xl text-white font-sans font-bold mr-60 ml-10 mt-12 xl:mt-[4rem] z-10 xl:text-4xl xl:mb-10 xl:ml-0">GOVra</span>
                    
                              <img class="h-96 z-20 xl:w-[100rem] " src="{{URL('assets/images/pngegg2.png')}}" alt="banner">
                    
                              <span class="text-2xl font-semibold font-sans text-white z-10 xl:text-3xl  ">FIND YOUR WORK HERE</span>
                              <div class="h-1 w-[73%] bg-orange-500 z-10 xl:w-[67%] 2xl:w-[68%]"></div>
                    
                              <img class="h-80 absolute w-80 top-[14rem] xl:w-[25rem] xl:top-[18rem] z-10 opacity-30" src="{{URL('assets/images/pngegg3.png')}}" alt="banner">

                          </div>

                            <!-- Right Side - Registration Form -->
                            <div class="flex flex-col max-w-sm sm:max-w-md md:max-w-lg lg:max-w-xl lg:w-1/2 lg:justify-center items-center h-full w-full relative">
                                <!-- SVG Background -->
                                <div class="absolute h-full w-full">
                                    <img src="{{URL('assets/images/blob-scene-haikei.svg')}}" alt="bg-signup" class="h-[1040px] w-full object-cover">
                                </div>

                                <h1 class="text-3xl text-center mt-8 mb-3 font-sans font-bold lg:mt-0 xl:text-4xl text-white z-10">Sign up</h1>

                                <div class="pb-[200px] relative max-w-[80%] sm:max-w-[80%] md:max-w-[80%] lg:max-w-[80%] lg:h-1/2 w-full h-4/5 px-3 z-10">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <!-- Name Field -->
                                        <div class="mb-3">
                                            <label for="name" class="form-label after:ml-0.5 after:text-red-500 block text-base font-medium xl:text-lg text-white">{{ __('Name') }}</label>
                                            <input id="name" placeholder="Enter name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus >
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <!-- Gender Field -->
                                        <div class="mb-3">
                                            <label for="gender" class="form-label after:ml-0.5 after:text-red-500 block text-base font-medium xl:text-lg text-white">{{ __('Gender') }}</label>
                                            <input id="gender" placeholder="Enter gender" type="text" name="gender" class="form-control @error('gender') is-invalid @enderror" value="{{ old('gender') }}" required autocomplete="gender">
                                            @error('gender')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <!-- Contact Field -->
                                        <div class="mb-3">
                                            <label for="contact" class="form-label after:ml-0.5 after:text-red-500 block text-base font-medium xl:text-lg text-white">{{ __('Contact') }}</label>
                                            <input id="contact" placeholder="Enter contact"type="text" name="contact" class="form-control @error('contact') is-invalid @enderror" value="{{ old('contact') }}" required autocomplete="contact">
                                            @error('contact')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <!-- Email Field -->
                                        <div class="mb-3">
                                            <label for="email" class="form-label after:ml-0.5 after:text-red-500 block text-base font-medium xl:text-lg text-white">{{ __('Email Address') }}</label>
                                            <input id="email" type="email"placeholder="Enter email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <!-- Username Field -->
                                        <div class="mb-3">
                                            <label for="username" class="form-label after:ml-0.5 after:text-red-500 block text-base font-medium xl:text-lg text-white">{{ __('Username') }}</label>
                                            <input id="username"placeholder="Enter username" type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" required autocomplete="username">
                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <!-- Password Field -->
                                        <!-- Password Field -->
                                        <div class="mb-3 relative">
                                            <label for="password" class="form-label after:ml-0.5 after:text-red-500 block text-base font-medium xl:text-lg text-white">{{ __('Password') }}</label>
                                            <input id="password" placeholder="Enter password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password">
                                            <img class="absolute inset-y-2/4 right-5 h-8 cursor-pointer" src="{{ asset('assets/icons/hide.png') }}" id="hideicon" alt="hide" onclick="togglePasswordVisibility()">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        

                                        <!-- Confirm Password Field -->
                                        <div class="mb-3">
                                            <label for="password-confirm" class="form-label after:ml-0.5 after:text-red-500 block text-base font-medium xl:text-lg text-white">{{ __('Confirm Password') }}</label>
                                            <input id="password-confirm" placeholder="Enter password" type="password" name="password_confirmation" class="form-control" required autocomplete="new-password">
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-orangee mt-3 bg-orange-500 hover:bg-orange-700 text-white font-bold text-md xl:text-lg py-2 px-4 rounded w-full z-10">{{ __('Register') }}</button>
                                        </div>
                                    </form>

                                    <!-- Login Link -->
                                    <div class="text-center ">
                                        <span class="text-gray-600">{{ __('Already have an account?') }}</span>
                                        <a href="{{ url('/login') }}" class="text-blue-600 hover:text-blue-800">{{ __('Login') }}</a>
                                    </div>

                                   
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
   function togglePasswordVisibility() {
    var pass = document.getElementById("password");
    var hideicon = document.getElementById("hideicon");

    if (pass.type === "password") {
        pass.type = "text";
        hideicon.src = "{{ asset('assets/icons/show.png') }}"; // Change to show icon
    } else {
        pass.type = "password";
        hideicon.src = "{{ asset('assets/icons/hide.png') }}"; // Change to hide icon
    }
}

    </script>
