@extends('auth.main', [$pageTitle = 'Olije | Confirm Password', $activePage = 'Confirm Password'])

@section('content')

<section class="container-fluid p-5">
    @include('includes.auth-header')
    <div class="row">
        <div class="col-md-6 m-auto">
            <x-guest-layout>
                <x-auth-card>

                    <div class="mb-4 text-sm text-gray-600">
                        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                    </div>

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <!-- Password -->
                        <div>
                            <x-label for="password" :value="__('Password')" />

                            <x-input id="password" class="form-control"
                                            type="password"
                                            name="password"
                                            required autocomplete="current-password" />
                        </div>

                        <div class="flex justify-end mt-4">
                            <x-button>
                                {{ __('Confirm') }}
                            </x-button>
                        </div>
                    </form>
                </x-auth-card>
            </x-guest-layout>
        </div>
    </div>
</section>

@endsection

