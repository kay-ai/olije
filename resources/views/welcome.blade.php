@extends('layouts.app', [$pageTitle = 'Olije | Welcome', $activePage = 'Welcome'])

@section('content')
    <section class="hero">
        <div class="row" style="align-self: end;width: 100%;">
            <div class="col-md-6">
                <img class="hero-img" src="{{asset('img/hero_girl2.png')}}" alt="girl_with_shopping_bag">
            </div>
            <div class="col-md-6"></div>
        </div>
    </section>
@endsection

