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
                        <p>Welcome back! Please enter your details.</p>
                        <form method="post" action="">
                            <div class="form-group mb-2">
                                <input type="email" name="email" class="form-control" placeholder="Email..." required>
                            </div>
                            <div class="form-group mb-2">
                                <input type="password" name="password" class="form-control" placeholder="Password..." required>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="checkbox" class="form-checkbox">
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Forgot password?</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection
