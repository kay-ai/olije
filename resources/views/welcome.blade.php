@extends('layouts.app', [$pageTitle = 'Olije | Welcome', $activePage = 'Welcome'])

@section('content')
    <section class="hero">
        <div class="row" style="align-self: end;width: 100%;">
            <div class="col-md-6">
                <img class="hero-img" src="{{asset('img/hero_girl2.png')}}" alt="girl_with_shopping_bag">
            </div>
            <div class="col-md-6 carousel-div justify-content-end">
                <div id="hero-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#hero-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#hero-carousel" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <h1 class="fw-800 text-white"><span class="txt-secondary">Connect</span> with a vendor within a twinkle of an eye...</h1>
                            <p class="text-white hero-sm-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Orci bibendum mauris proin et. Montes, egestas cras
                                tristique adipiscing ipsum est.Lorem ipsum dolor sit
                                amet, consectetur adipiscing elit. Orci bibendum mauris
                                proin et. Montes, egestas cras tristique adipiscing ipsum est.
                            </p>
                            <form action="#" class="form-inline hero-form mr-auto">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                <input class=" hero-input" type="text" placeholder="Search for product, brands categories and vendor...">
                            </form>
                        </div>
                        <div class="carousel-item">
                            <h1 class="fw-800 text-white"><span class="txt-secondary">Make Money</span> Working From Home On Our Affiliate Network.</h1>
                            <p class="text-white hero-sm-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Orci bibendum mauris proin et. Montes, egestas cras
                                tristique adipiscing ipsum est.Lorem ipsum dolor sit
                                amet, consectetur adipiscing elit. Orci bibendum mauris
                                proin et. Montes, egestas cras tristique adipiscing ipsum est.
                            </p>
                            <a class="btn o-btn-secondary mt-2" href="#" role="button">Start Earning <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="main-page">
        <div class="featured-products">
            <div class="owl-carousel products-carousel owl-theme">
                <div class="item">
                    <img src="{{asset('img/featured-img-1.png')}}" class="featuredP-img">
                    <p class="featuredP-name">Mobile Phones</p>
                </div>
                <div class="item">
                    <img src="{{asset('img/featured-img-2.png')}}" class="featuredP-img">
                    <p class="featuredP-name">Vehicles & Cars</p>
                </div>
                <div class="item">
                    <img src="{{asset('img/featured-img-3.png')}}" class="featuredP-img">
                    <p class="featuredP-name">Properties</p>
                </div>
                <div class="item">
                    <img src="{{asset('img/featured-img-4.png')}}" class="featuredP-img">
                    <p class="featuredP-name">Electronics</p>
                </div>
                <div class="item">
                    <img src="{{asset('img/featured-img-5.png')}}" class="featuredP-img">
                    <p class="featuredP-name">Furnitures</p>
                </div>
                <div class="item">
                    <img src="{{asset('img/featured-img-5.png')}}" class="featuredP-img">
                    <p class="featuredP-name">Furnitures</p>
                </div>
                <div class="item">
                    <img src="{{asset('img/featured-img-2.png')}}" class="featuredP-img">
                    <p class="featuredP-name">Vehicles & Cars</p>
                </div>
                <div class="item">
                    <img src="{{asset('img/featured-img-5.png')}}" class="featuredP-img">
                    <p class="featuredP-name">Furnitures</p>
                </div>
                <div class="item">
                    <img src="{{asset('img/featured-img-5.png')}}" class="featuredP-img">
                    <p class="featuredP-name">Furnitures</p>
                </div>
                <div class="item">
                    <img src="{{asset('img/featured-img-2.png')}}" class="featuredP-img">
                    <p class="featuredP-name">Vehicles & Cars</p>
                </div>
                <div class="item">
                    <img src="{{asset('img/featured-img-6.png')}}" class="featuredP-img">
                    <p class="featuredP-name">Sport Wears</p>
                </div>
                <div class="item">
                    <img src="{{asset('img/featured-img-7.png')}}" class="featuredP-img">
                    <p class="featuredP-name">Baby Products</p>
                </div>
                <div class="item">
                    <img src="{{asset('img/featured-img-1.png')}}" class="featuredP-img">
                    <p class="featuredP-name">Mobile Phones</p>
                </div>
                <div class="item">
                    <img src="{{asset('img/featured-img-8.png')}}" class="featuredP-img">
                    <p class="featuredP-name">Automobile</p>
                </div>
            </div>
        </div>

    </section>
@endsection

@push('js-bottom')
    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:2
                },
                600:{
                    items:4
                },
                1000:{
                    items:7
                }
            }
        })
        owl.on('mousewheel', '.owl-stage', function (e) {
            if (e.deltaY>0) {
                owl.trigger('next.owl');
            } else {
                owl.trigger('prev.owl');
            }
            e.preventDefault();
        });
    </script>
@endpush

