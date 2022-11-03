@extends('layouts.master')
@section('title','Offers')

<!-- Header start  -->
@section('nav')
@include('partials.navigation')
@endsection
<!-- Header End  -->

{{-- Main Content Start --}}
@section('content')
    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Hot Offer</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="ec-breadcrumb-item active">Offer</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Start Offer section -->
    <section class="labels section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Style 1</h2>
                        <h2 class="ec-title">Style 1</h2>
                        <p class="sub-title">Browse The Collection of Top Categories</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 margin-b-30">
                    <div class="ec-offer-coupon">
                        <div class="ec-cpn-brand">
                            <img class="ec-brand-img" src="assets/images/offer-image/2.jpg" alt="" />
                        </div>
                        <div class="ec-cpn-title">
                            <h2 class="coupon-title">Get 15% off on branded Shoes</h2>
                        </div>
                        <div class="ec-cpn-desc">
                            <p class="coupon-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry has been.</p>
                        </div>
                        <div class="ec-cpn-code">
                            <a href="#" class="btn btn-secondary">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 margin-b-30">
                    <div class="ec-offer-coupon">
                        <div class="ec-cpn-brand">
                            <img class="ec-brand-img" src="assets/images/offer-image/3.jpg" alt="" />
                        </div>
                        <div class="ec-cpn-title">
                            <h2 class="coupon-title">Get 30% off on branded chair</h2>
                        </div>
                        <div class="ec-cpn-desc">
                            <p class="coupon-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry has been.</p>
                        </div>
                        <div class="ec-cpn-code">
                            <a href="#" class="btn btn-secondary">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 m-auto">
                    <div class="ec-offer-coupon">
                        <div class="ec-cpn-brand">
                            <img class="ec-brand-img" src="assets/images/offer-image/4.jpg" alt="" />
                        </div>
                        <div class="ec-cpn-title">
                            <h2 class="coupon-title">Get 50% off on branded Hand Bags</h2>
                        </div>
                        <div class="ec-cpn-desc">
                            <p class="coupon-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry has been.</p>
                        </div>
                        <div class="ec-cpn-code">
                            <a href="#" class="btn btn-secondary">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Offer section -->

    <!-- Start Offer section -->
    <section class="labels section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Style 2</h2>
                        <h2 class="ec-title">Style 2</h2>
                        <p class="sub-title">Browse The Collection of Top Categories</p>
                    </div>
                </div>
            </div>
            <div class="ec-line-offer" style="background-image: url('assets/images/offer-image/offer-banner-06.jpg');">
                <div class="ec-line-offer-info">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h6>On Furniture</h6>
                                <h2 class="offer-upto">Upto <span>45%</span> OFF</h2>
                                <p class="offer-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's.</p>
                                <div class="offer-btn"><a class="btn-shop-now">SHOP NOW!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- End Offer section -->
@endsection
{{-- Main Content End --}}
     
<!-- Footer Start -->
@section('footer')
@include('partials.footer')
@endsection
<!-- Footer Area End -->