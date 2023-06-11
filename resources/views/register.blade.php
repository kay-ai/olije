@extends('auth.main', [$pageTitle = 'Olije | Register', $activePage = 'Register'])

@section('content')

<section class="container-fluid p-5">
    @include('includes.auth-header')
    <div class="row">
        <div class="col-md-6">
            <div class="row">

                <div class="col-md-4 m-auto">
                    <img src="{{asset('img/login-page.png')}}" class="featuredP-img">
                </div>
                <div class="row">
                    <div class="col-md-8 m-auto">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Orci bibendum mauris proin et. Montes, egestas cras tristique adipiscing ipsum est.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Orci bibendum mauris proin et. Montes, egestas cras tristique adipiscing ipsum est.</p>
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

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <!-- Name -->
                                <div>
                                    <x-label for="name" :value="__('Name')" />

                                    <x-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />
                                </div>

                                <!-- Email Address -->
                                <div class="mt-4">
                                    <x-label for="email" :value="__('Email')" />

                                    <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    <x-label for="password" :value="__('Password')" />

                                    <x-input id="password" class="form-control"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="new-password" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="mt-4">
                                    <x-label for="password_confirmation" :value="__('Confirm Password')" />

                                    <x-input id="password_confirmation" class="form-control"
                                                    type="password"
                                                    name="password_confirmation" required />
                                </div>

                                <div class="row text-center mt-4">
                                    <div class="col-md-4 m-auto">
                                        <x-button class="ml-0">
                                            {{ __('Register') }}
                                        </x-button>
                                    </div>
                                </div>
                                <p class="text-center">
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">Already registered?</a>
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
