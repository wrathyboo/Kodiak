@extends('layouts.master')
@section('title','Login')
@section('custom-css')
<link rel="stylesheet" href="{{url('assets/css/style.css')}}" />
@endsection
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
                            <h2 class="ec-breadcrumb-title">Login</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="ec-breadcrumb-item active">Login</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Ec login page -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Log In</h2>
                        <h2 class="ec-title">Log In</h2>
                        <p class="sub-title mb-3">Best place to buy and sell digital products</p>
                    </div>
                </div>
                <div class="ec-login-wrapper">
                    <div class="ec-login-container">
                        <div class="ec-login-form">
                            <form action="" method="post">
                                @csrf
                                <span class="ec-login-wrap">
                                    <label>Email Address*</label>
                                    <input type="email" name="email" placeholder="example@gmail.com" required />
                                </span>
                                <span class="ec-login-wrap">
                                    <label>Password*</label>
                                    <input type="password" name="password" placeholder="password" required />
                                </span>
                                <span class="ec-login-wrap ec-login-fp">
                                    <label><a href="#">Forgot Password?</a></label>
                                </span>
                                <span class="ec-login-wrap ec-login-btn">
                                    <button class="btn btn-primary rounded" type="submit">Login</button>
                                    <span class="text-center" style="margin-top: 15px">
                                        <label><a href="{{route('user.register')}}">Don't have an account?</a></label>
                                    </span>
                                </span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     @endsection


<!-- Footer Start -->
@section('footer')
@include('partials.footer')
@endsection
<!-- Footer Area End -->