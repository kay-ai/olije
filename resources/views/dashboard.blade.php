@extends('layouts.app', [$pageTitle = 'Olije | Dashboard', $activePage = 'Dashboard'])

@section('content')

@section('content')
    <section class="page-hero">
        <div class="row">
            <div class="col-md-12 m-auto">
                <div class="row p-0 d-flex" style="background: #E9E3E3;border: 1.45055px solid #399A19;border-radius: 15.2308px;">
                    <div class="col-md-6 pl-0">
                        <button style="width: 100%;height: 60.92px;background: #399A19;border-radius: 15.2308px;border:none">Vendor Profile</button>
                    </div>
                    <div class="col-md-6 pr-0">
                        <button style="width: 100%;height: 60.92px;background: none;border-radius: 15.2308px;border:none">Job Profile</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main-page">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="row d-flex">
                        <div class="col-md-2"></div>
                        <div class="col-md-6"></div>
                    </div>
                    <div class="row">
                        <ul class="nav flex-column w-100">
                            <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="#">Start Earning</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Wallets</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Followers</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link disabled">Feedbacks</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled">FAQs</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row" style="border-bottom: 2px solid gray">
                        <div class="col-md-5">
                            <ul class="nav nav-pills">
                                <li class="nav-item">My Adverts</li>
                            </ul>
                        </div>
                        <div class="col-md-7">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item p-1">
                                <a class="nav-link btn btn-secondary bg-gray" href="#">Active</a>
                                </li>
                                <li class="nav-item p-1">
                                <a class="nav-link btn btn-secondary bg-gray" href="#">Pending</a>
                                </li>
                                <li class="nav-item p-1">
                                <a class="nav-link btn btn-secondary bg-gray" href="#">Declined</a>
                                </li>
                                <li class="nav-item p-1">
                                <a class="nav-link btn btn-secondary bg-gray" href="#">Drafts</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container">
                            <div class="row mb-2 mt-2" style="background: #F5F5F5;">
                                <div class="col-md-4 p-0" style="height: 260px">
                                    <img src="{{asset('img/featured-img-1.png')}}" class="img-fluid" style="width:100%;height:100%;object-fit: cover">
                                </div>
                                <div class="col-md-8" style="height: 260px">
                                    <h2>Lenovo</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Euismod ac, nunc amet ut leo turpis. Risus, vestibulum, et sodales a interdum.</p>
                                    <p>
                                        <button class="btn btn-secondary bg-gray">New</button>
                                    </p>
                                    <p>NGN 459,099.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
