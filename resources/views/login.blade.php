@extends('auth.main', [$pageTitle = 'Olije | Register', $activePage = 'Register'])

@section('content')

<section class="container-fluid p-5">
    @include('includes.auth-header')
    <div class="row">
        <div class="col-md-6">
            <div class="row">

                <div class="col-md-4 m-auto">
                    <img src="{{asset('img/login-illustration.png')}}" class="featuredP-img">
                </div>
                <div class="row">
                    <div class="col-md-8 m-auto">
                        <p><b class="text-success">Connect</b> with a vendor within a twinkle of an eye...</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-6" style="background:url('{{asset('img/auth-bg.png')}}');background-size:cover">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto bg-white mt-5 mb-5">
                        <p>Welcome! Please create your account below.</p>
                        <x-auth-card>

                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <!-- Email Address -->
                                <div>
                                    <x-label for="email" :value="__('Email')" />

                                    <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    <x-label for="password" :value="__('Password')" />

                                    <x-input id="password" class="form-control"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="current-password" />
                                </div>

                                <!-- Remember Me -->
                                <div class="block mt-4">
                                    <label for="remember_me" class="inline-flex items-center">
                                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                    </label>
                                </div>

                                <div class="row text-center mt-4">
                                    <x-button class="col-md-4 m-auto">
                                        {{ __('Log in') }}
                                    </x-button>
                                </div>
                                <p class="text-center">
                                    @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                    @endif
                                </p>
                                <p class="text-center">
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                                        {{ __('Register') }}
                                    </a>
                                </p>
                            </form>
                        </x-auth-card>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection
