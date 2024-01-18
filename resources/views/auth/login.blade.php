{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}

<x-guest-layout>
<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from htmldemo.net/pander/pander-v3/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2024 02:13:51 GMT -->
@include('template.css')

<body>
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

    <!-- Main Wrapper Start Here -->
    <div class="wrapper">
        @include('template.header')
        <!-- Main Header Area End Here -->
        <!-- Breadcrumb Area Start Here -->
        <div class="breadcrumb-area">
            <div class="container">
                <ol class="breadcrumb breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                    <li class="breadcrumb-item active">login</li>
                </ol>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- Login Page Start Here -->
        <div class="login ptb-90">
            <div class="container">
                <h3 class="login-header">Log in to your account </h3>
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="login-form">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group row">
                                    {{-- <label for="email" class="col-sm-3 col-form-label" value="{{ __('Email') }}" />
                                    <div class="col-sm-7">
                                        <input id="email" class="form-control type="email" name="email" :value="old('email')" required autofocus autocomplete="email" placeholder="Email" />
                                    </div> --}}
                                    <label for="email" class="col-sm-3 col-form-label" value="{{ __('Email') }}">Email</label>
                                    <div class="col-sm-7">
                                        <x-input type="email" name="email" class="form-control" :value="old('email')" required id="email" placeholder="Email"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-7">
                                        <x-input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" required autocomplete="current-password"/>
                                        {{-- <button class="btn show-btn" type="button">Show</button> --}}
                                    </div>
                                </div>
                                <div class="login-details text-center mb-25">
                                    <a href="{{url('forgot-password')}}">Forgot your password? </a>
                                    <x-button type="submit" class="login-btn">Sign in</x-button>
                                </div>
                                <div class="login-footer text-center">
                                    <p>No account? <a href="{{url('register')}}">Create one here</a></p>
                                </div>





                                {{-- <div class="mt-4">
                                    <x-label for="password" value="{{ __('Password') }}" />
                                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                                </div> --}}




                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('template.footer')
    <!-- Main Wrapper End Here -->

    <!-- jquery 3.3.1 -->
    @include('template.jquery')
</body>


<!-- Mirrored from htmldemo.net/pander/pander-v3/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2024 02:13:51 GMT -->
</html>
</x-guest-layout>
