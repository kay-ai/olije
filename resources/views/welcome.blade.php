@extends('layouts.app', [$pageTitle = 'Olije | Welcome', $activePage = 'Welcome'])

@section('content')
    <section class="hero">
        <div class="row hero-row">
            <div class="col-md-6 hero-img-div">
                <img class="hero-img" src="{{asset('img/hero_girl.png')}}" alt="girl_with_shopping_bag">
            </div>
            <div class="col-md-6 hero-content-div carousel-div justify-content-end">
                <div id="hero-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#hero-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#hero-carousel" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <h1 class="fw-800 mobile-txt text-white"><span class="txt-secondary">Connect</span> with a vendor within a twinkle of an eye...</h1>
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
                            <h1 class="fw-800 mobile-txt text-white"><span class="txt-secondary">Make Money</span> Working From Dashboard On Our Affiliate Network.</h1>
                            <p class="text-white hero-sm-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Orci bibendum mauris proin et. Montes, egestas cras
                                tristique adipiscing ipsum est.Lorem ipsum dolor sit
                                amet, consectetur adipiscing elit. Orci bibendum mauris
                                proin et. Montes, egestas cras tristique adipiscing ipsum est.
                            </p>
                            <a class="btn o-btn mt-2" href="#" role="button">Start Earning <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="main-page">
        <div class="featured-products mb-3">
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
        <div class="ads mb-5">
            <p class="section-name">Top Selling Ads</p>
            <div class="owl-carousel ads-carousel owl-theme">
                <div class="item">
                    <div>
                        <img src="{{asset('img/ads-img1.png')}}" class="featuredP-img">
                        <div class="bottom-section d-flex">
                            <div>
                                <p class="featuredP-name">Laptops HP Envy 12GB Intel</p>
                                <p class="featuredP-price">NGN 350,000.00</p>
                            </div>
                            <a name="" id="" class="o-btn" href="#" role="button">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div>
                        <img src="{{asset('img/ads-img2.png')}}" class="featuredP-img">
                        <div class="bottom-section d-flex">
                            <div>
                                <p class="featuredP-name">Used - Peaugeot 2015</p>
                                <p class="featuredP-price">NGN 150,000.00</p>
                            </div>
                            <a name="" id="" class="o-btn" href="#" role="button">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div>
                        <img src="{{asset('img/ads-img3.png')}}" class="featuredP-img">
                        <div class="bottom-section d-flex">
                            <div>
                                <p class="featuredP-name">New - LG Smart TV 2022</p>
                                <p class="featuredP-price">NGN 450,000.00</p>
                            </div>
                            <a name="" id="" class="o-btn" href="#" role="button">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div>
                        <img src="{{asset('img/ads-img4.png')}}" class="featuredP-img">
                        <div class="bottom-section d-flex">
                            <div>
                                <p class="featuredP-name">New - Laptops HP NVIDIA 8GB</p>
                                <p class="featuredP-price">NGN 950,000.00</p>
                            </div>
                            <a name="" id="" class="o-btn" href="#" role="button">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div>
                        <img src="{{asset('img/ads-img5.png')}}" class="featuredP-img">
                        <div class="bottom-section d-flex">
                            <div>
                                <p class="featuredP-name">Used - Toyota Corola 2016</p>
                                <p class="featuredP-price">NGN 1,050,000.00</p>
                            </div>
                            <a name="" id="" class="o-btn" href="#" role="button">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div>
                        <img src="{{asset('img/ads-img6.png')}}" class="featuredP-img">
                        <div class="bottom-section d-flex">
                            <div>
                                <p class="featuredP-name">New - Felux Bicycle</p>
                                <p class="featuredP-price">NGN 150,000.00</p>
                            </div>
                            <a name="" id="" class="o-btn" href="#" role="button">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div>
                        <img src="{{asset('img/ads-img7.png')}}" class="featuredP-img">
                        <div class="bottom-section d-flex">
                            <div>
                                <p class="featuredP-name">New - Power Bike Dest</p>
                                <p class="featuredP-price">NGN 2,050,000.00</p>
                            </div>
                            <a name="" id="" class="o-btn" href="#" role="button">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div>
                        <img src="{{asset('img/ads-img8.png')}}" class="featuredP-img">
                        <div class="bottom-section d-flex">
                            <div>
                                <p class="featuredP-name">New - Tricycle 368 Model</p>
                                <p class="featuredP-price">NGN 170,000.00</p>
                            </div>
                            <a name="" id="" class="o-btn" href="#" role="button">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div>
                        <img src="{{asset('img/ads-img9.png')}}" class="featuredP-img">
                        <div class="bottom-section d-flex">
                            <div>
                                <p class="featuredP-name">New - Balaciaga Suite</p>
                                <p class="featuredP-price">NGN 50,000.00</p>
                            </div>
                            <a name="" id="" class="o-btn" href="#" role="button">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div>
                        <img src="{{asset('img/ads-img10.png')}}" class="featuredP-img">
                        <div class="bottom-section d-flex">
                            <div>
                                <p class="featuredP-name">Used - Delina Trouser</p>
                                <p class="featuredP-price">NGN 37,000.00</p>
                            </div>
                            <a name="" id="" class="o-btn" href="#" role="button">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div>
                        <img src="{{asset('img/ads-img11.png')}}" class="featuredP-img">
                        <div class="bottom-section d-flex">
                            <div>

                                <p class="featuredP-name">New - Felux Suit</p>
                                <p class="featuredP-price">NGN 150,000.00</p>
                            </div>
                            <a name="" id="" class="o-btn" href="#" role="button">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div>
                        <img src="{{asset('img/ads-img4.png')}}" class="featuredP-img">
                        <div class="bottom-section d-flex">
                            <div>
                                <p class="featuredP-name">Laptops HP Envy 12GB Intel</p>
                                <p class="featuredP-price">NGN 350,000.00</p>
                            </div>
                            <a name="" id="" class="o-btn" href="#" role="button">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main2 mb-5">
            <div class="post-ads mt-4">
                <div class="row">
                    <div class="col-md-9 post-ads-bg">
                        <div class="row">
                            <div class="col-md-5">
                                <img class="post-ads-img" src="{{asset('img/post-ad-img.png')}}" alt="post-ad-img" srcset="">
                            </div>
                            <div class="col-md-7 d-flex text-div">
                                <div>
                                    <h3>
                                        Learn how to connect to a vendor
                                        via this platform
                                    </h3>
                                    <a href="/">Click here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 post-ads-bg2-div pr-0">
                        <div class="p-3 post-ads-bg2">
                            <p class="text-white text1">-Do you have something to sell ?</p>
                            <a name="" id="" class="btn btn-ads mb-3" href="#" role="button">Post An Ads Now</a>
                            <p class="text-white text1 mt-3">-Do you have a task for other users ?</p>
                            <a name="" id="" class="btn btn-ads" href="#" role="button">Post A Task</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="trending-ads mt-5 mb-5">
                <div class="row">
                    <div class="col-md-12 p-1">
                        <p class="section-name mb-0">Trending Ads</p>
                    </div>
                    <div class="col-md-3 mobile-50 p-1">
                        <div>
                            <img src="{{asset('img/ads-img1.png')}}" class="featuredP-img">
                            <div class="bottom-section d-flex">
                                <div>
                                    <p class="featuredP-name">Laptops HP Envy 12GB Intel</p>
                                    <p class="featuredP-price">NGN 350,000.00</p>
                                </div>
                                <a name="" id="" class="o-btn" href="#" role="button">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mobile-50 p-1">
                        <div>
                            <img src="{{asset('img/ads-img2.png')}}" class="featuredP-img">
                            <div class="bottom-section d-flex">
                                <div>
                                    <p class="featuredP-name">Used - Peaugeot 2015</p>
                                    <p class="featuredP-price">NGN 150,000.00</p>
                                </div>
                                <a name="" id="" class="o-btn" href="#" role="button">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mobile-50 p-1">
                        <div>
                            <img src="{{asset('img/ads-img3.png')}}" class="featuredP-img">
                            <div class="bottom-section d-flex">
                                <div>
                                    <p class="featuredP-name">New - LG Smart TV 2022</p>
                                    <p class="featuredP-price">NGN 450,000.00</p>
                                </div>
                                <a name="" id="" class="o-btn" href="#" role="button">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mobile-50 p-1">
                        <div>
                            <img src="{{asset('img/ads-img4.png')}}" class="featuredP-img">
                            <div class="bottom-section d-flex">
                                <div>
                                    <p class="featuredP-name">New - Laptops HP NVIDIA 8GB</p>
                                    <p class="featuredP-price">NGN 950,000.00</p>
                                </div>
                                <a name="" id="" class="o-btn" href="#" role="button">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mobile-50 p-1">
                        <div>
                            <img src="{{asset('img/ads-img5.png')}}" class="featuredP-img">
                            <div class="bottom-section d-flex">
                                <div>
                                    <p class="featuredP-name">Used - Toyota Corola 2016</p>
                                    <p class="featuredP-price">NGN 1,050,000.00</p>
                                </div>
                                <a name="" id="" class="o-btn" href="#" role="button">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mobile-50 p-1">
                        <div>
                            <img src="{{asset('img/ads-img6.png')}}" class="featuredP-img">
                            <div class="bottom-section d-flex">
                                <div>
                                    <p class="featuredP-name">New - Felux Bicycle</p>
                                    <p class="featuredP-price">NGN 150,000.00</p>
                                </div>
                                <a name="" id="" class="o-btn" href="#" role="button">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mobile-50 p-1">
                        <div>
                            <img src="{{asset('img/ads-img7.png')}}" class="featuredP-img">
                            <div class="bottom-section d-flex">
                                <div>
                                    <p class="featuredP-name">New - Power Bike Dest</p>
                                    <p class="featuredP-price">NGN 2,050,000.00</p>
                                </div>
                                <a name="" id="" class="o-btn" href="#" role="button">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mobile-50 p-1">
                        <div>
                            <img src="{{asset('img/ads-img8.png')}}" class="featuredP-img">
                            <div class="bottom-section d-flex">
                                <div>
                                    <p class="featuredP-name">New - Tricycle 368 Model</p>
                                    <p class="featuredP-price">NGN 170,000.00</p>
                                </div>
                                <a name="" id="" class="o-btn" href="#" role="button">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mobile-50 p-1">
                        <div>
                            <img src="{{asset('img/ads-img9.png')}}" class="featuredP-img">
                            <div class="bottom-section d-flex">
                                <div>
                                    <p class="featuredP-name">New - Balaciaga Suite</p>
                                    <p class="featuredP-price">NGN 50,000.00</p>
                                </div>
                                <a name="" id="" class="o-btn" href="#" role="button">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mobile-50 p-1">
                        <div>
                            <img src="{{asset('img/ads-img10.png')}}" class="featuredP-img">
                            <div class="bottom-section d-flex">
                                <div>
                                    <p class="featuredP-name">Used - Delina Trouser</p>
                                    <p class="featuredP-price">NGN 37,000.00</p>
                                </div>
                                <a name="" id="" class="o-btn" href="#" role="button">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mobile-50 p-1">
                        <div>
                            <img src="{{asset('img/ads-img11.png')}}" class="featuredP-img">
                            <div class="bottom-section d-flex">
                                <div>
                                    <p class="featuredP-name">New - Felux Suit</p>
                                    <p class="featuredP-price">NGN 150,000.00</p>
                                </div>
                                <a name="" id="" class="o-btn" href="#" role="button">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mobile-50 p-1">
                        <div>
                            <img src="{{asset('img/ads-img4.png')}}" class="featuredP-img">
                            <div class="bottom-section d-flex">
                                <div>
                                    <p class="featuredP-name">Laptops HP Envy 12GB Intel</p>
                                    <p class="featuredP-price">NGN 350,000.00</p>
                                </div>
                                <a name="" id="" class="o-btn" href="#" role="button">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mobile-50 p-1">
                        <div>
                            <img src="{{asset('img/ads-img12.png')}}" class="featuredP-img">
                            <div class="bottom-section d-flex">
                                <div>
                                    <p class="featuredP-name">New - Premium Yoko Blender</p>
                                    <p class="featuredP-price">NGN 10,000.00</p>
                                </div>
                                <a name="" id="" class="o-btn" href="#" role="button">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mobile-50 p-1">
                        <div>
                            <img src="{{asset('img/ads-img3.png')}}" class="featuredP-img">
                            <div class="bottom-section d-flex">
                                <div>
                                    <p class="featuredP-name">New - Samsung Smart TV</p>
                                    <p class="featuredP-price">NGN 600,000.00</p>
                                </div>
                                <a name="" id="" class="o-btn" href="#" role="button">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mobile-50 p-1">
                        <div>
                            <img src="{{asset('img/ads-img13.png')}}" class="featuredP-img">
                            <div class="bottom-section d-flex">
                                <div>
                                    <p class="featuredP-name">Used - Power Bike Belenza</p>
                                    <p class="featuredP-price">NGN 378,000.00</p>
                                </div>
                                <a name="" id="" class="o-btn" href="#" role="button">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mobile-50 p-1">
                        <div>
                            <img src="{{asset('img/ads-img14.png')}}" class="featuredP-img">
                            <div class="bottom-section d-flex">
                                <div>
                                    <p class="featuredP-name">New - Samsung Gas Coker</p>
                                    <p class="featuredP-price">NGN 39,000.00</p>
                                </div>
                                <a name="" id="" class="o-btn" href="#" role="button">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mobile-50 p-1">
                        <div>
                            <img src="{{asset('img/ads-img2.png')}}" class="featuredP-img">
                            <div class="bottom-section d-flex">
                                <div>
                                    <p class="featuredP-name">Used - Volvo 1997</p>
                                    <p class="featuredP-price">NGN 5,000.00</p>
                                </div>
                                <a name="" id="" class="o-btn" href="#" role="button">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mobile-50 p-1">
                        <div>
                            <img src="{{asset('img/ads-img15.png')}}" class="featuredP-img">
                            <div class="bottom-section d-flex">
                                <div>
                                    <p class="featuredP-name">New - LG Blender</p>
                                    <p class="featuredP-price">NGN 30,000.00</p>
                                </div>
                                <a name="" id="" class="o-btn" href="#" role="button">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mobile-50 p-1">
                        <div>
                            <img src="{{asset('img/ads-img16.png')}}" class="featuredP-img">
                            <div class="bottom-section d-flex">
                                <div>
                                    <p class="featuredP-name">New - Samsung Gas Coker   </p>
                                    <p class="featuredP-price">NGN 150,000.00</p>
                                </div>
                                <a name="" id="" class="o-btn" href="#" role="button">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mobile-50 p-1">
                        <div>
                            <img src="{{asset('img/ads-img17.png')}}" class="featuredP-img">
                            <div class="bottom-section d-flex">
                                <div>
                                    <p class="featuredP-name">Used - Burning Stove</p>
                                    <p class="featuredP-price">NGN 50,000.00</p>
                                </div>
                                <a name="" id="" class="o-btn" href="#" role="button">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mobile-50 p-1">
                        <div>
                            <img src="{{asset('img/ads-img18.png')}}" class="featuredP-img">
                            <div class="bottom-section d-flex">
                                <div>
                                    <p class="featuredP-name">Used - Philips Iron</p>
                                    <p class="featuredP-price">NGN 15,000.00</p>
                                </div>
                                <a name="" id="" class="o-btn" href="#" role="button">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mobile-50 p-1">
                        <div>
                            <img src="{{asset('img/ads-img19.png')}}" class="featuredP-img">
                            <div class="bottom-section d-flex">
                                <div>
                                    <p class="featuredP-name">New - LG Standing Fan</p>
                                    <p class="featuredP-price">NGN 10,000.00</p>
                                </div>
                                <a name="" id="" class="o-btn" href="#" role="button">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mobile-50 p-1">
                        <div>
                            <img src="{{asset('img/ads-img20.png')}}" class="featuredP-img">
                            <div class="bottom-section d-flex">
                                <div>
                                    <p class="featuredP-name">New - Philip Iron</p>
                                    <p class="featuredP-price">NGN 15,000.00</p>
                                </div>
                                <a name="" id="" class="o-btn" href="#" role="button">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mobile-50 p-1">
                        <div>
                            <img src="{{asset('img/ads-img4.png')}}" class="featuredP-img">
                            <div class="bottom-section d-flex">
                                <div>
                                    <p class="featuredP-name">Laptops HP Envy 12GB Intel</p>
                                    <p class="featuredP-price">NGN 350,000.00</p>
                                </div>
                                <a name="" id="" class="o-btn" href="#" role="button">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mobile-50 p-1">
                        <div>
                            <img src="{{asset('img/ads-img21.png')}}" class="featuredP-img">
                            <div class="bottom-section d-flex">
                                <div>
                                    <p class="featuredP-name">Used - Chubber Clipper</p>
                                    <p class="featuredP-price">NGN 6,000.00</p>
                                </div>
                                <a name="" id="" class="o-btn" href="#" role="button">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mobile-50 p-1">
                        <div>
                            <img src="{{asset('img/ads-img3.png')}}" class="featuredP-img">
                            <div class="bottom-section d-flex">
                                <div>
                                    <p class="featuredP-name">New - LG Smart TV 2022</p>
                                    <p class="featuredP-price">NGN 700,000.00</p>
                                </div>
                                <a name="" id="" class="o-btn" href="#" role="button">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mobile-50 p-1">
                        <div>
                            <img src="{{asset('img/ads-img1.png')}}" class="featuredP-img">
                            <div class="bottom-section d-flex">
                                <div>
                                    <p class="featuredP-name">Laptops HP Envy 12GB Intel</p>
                                    <p class="featuredP-price">NGN 320,000.00</p>
                                </div>
                                <a name="" id="" class="o-btn" href="#" role="button">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mobile-50 p-1">
                        <div>
                            <img src="{{asset('img/ads-img22.png')}}" class="featuredP-img">
                            <div class="bottom-section d-flex">
                                <div>
                                    <p class="featuredP-name">New - LG Standing Fan</p>
                                    <p class="featuredP-price">NGN 19,000.00</p>
                                </div>
                                <a name="" id="" class="o-btn" href="#" role="button">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@push('js-bottom')
    <script>
        var owl = $('.products-carousel');
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
                    items:2
                },
                1000:{
                    items:7
                }
            }
        })

        var ads = $('.ads-carousel');
        ads.owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            autoplay:true,
            autoplayTimeout:10000,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:4
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

