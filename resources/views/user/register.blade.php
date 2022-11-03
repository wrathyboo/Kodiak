@extends('layouts.master')
@section('title','Register')
<!-- Header start  -->
@section('nav')
@include('partials.navigation')
@endsection
<!-- Header End  -->
     
     @section('content')
            <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Register</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="ec-breadcrumb-item active">Register</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Start Register -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Register</h2>
                        <h2 class="ec-title">Register</h2>
                        <p class="sub-title mb-3">Best place to buy and sell digital products</p>
                    </div>
                </div>
                <div class="ec-register-wrapper">
                    <div class="ec-register-container">
                        <div class="ec-register-form">
                            <form action="" method="post">
                                @csrf
                                <span class="ec-register-wrap ec-register-half">
                                    <label>First Name*</label>
                                    <input type="text" name="firstname" placeholder="Enter your first name" required />
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>Last Name*</label>
                                    <input type="text" name="lastname" placeholder="Enter your last name" required />
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>Username*</label>
                                    <input type="text" name="username" placeholder="This will be your display name" required />
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>Phone Number</label>
                                    <input type="text" name="phonenumber" placeholder="Enter your phone number" />
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>Email*</label>
                                    <input type="email" name="email" placeholder="example@gmail.com" required />
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>Password*</label>
                                    <input type="password" name="password" placeholder="Password" required />
                                </span>
                                <span class="ec-register-wrap">
                                    <label>Address</label>
                                    <input type="text" name="address" placeholder="Address Line 1" />
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>Steam ID</label>
                                    <input type="text" name="steam_id" placeholder="Your Steam ID" />
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>API Key</label>
                                    <input type="text" name="api_key" placeholder="Optional" />
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>Country *</label>
                                    <span class="ec-rg-select-inner">
                                        <select name="ec_select_country" id="ec-select-country"
                                            class="ec-register-select">
                                            <option selected disabled>Country</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="United State">United State</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Korea">Korea</option>
                                            <option value="Spain">Spain</option>
                                        </select>
                                    </span>
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>Region State</label>
                                    <span class="ec-rg-select-inner">
                                        <select name="ec_select_state" id="ec-select-state" class="ec-register-select">
                                            <option selected disabled>Region/State</option>
                                            <option value="1">Region/State 1</option>
                                            <option value="2">Region/State 2</option>
                                            <option value="3">Region/State 3</option>
                                            <option value="4">Region/State 4</option>
                                            <option value="5">Region/State 5</option>
                                        </select>
                                    </span>
                                </span>
                                <span class="ec-register-wrap ec-register-btn">
                                    <button class="btn btn-primary" type="submit">Register</button>
                                </span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Register -->

     @endsection

     
<!-- Footer Start -->
@section('footer')
@include('partials.footer')
@endsection
<!-- Footer Area End -->