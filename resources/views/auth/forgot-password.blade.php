@extends('auth.main', [$pageTitle = 'Olije | Forgot Password', $activePage = 'Forgot Password'])

@section('content')

<section class="container-fluid p-5">
    @include('includes.auth-header')
    <div class="row">
        <div class="col-md-6 m-auto">
            <x-guest-layout>
                <x-auth-card>

                    <div class="mb-4 text-sm text-gray-600">
                        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                    </div>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button>
                                {{ __('Email Password Reset Link') }}
                            </x-button>
                        </div>
                        <p class="text-center">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                {{ __('Back to Login') }}
                            </a>
                        </p>
                    </form>
                </x-auth-card>
            </x-guest-layout>
        </div>
    </div>
</section>

@endsection
