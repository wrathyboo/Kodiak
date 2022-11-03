@extends('layouts.master')
@section('title','name')
<!-- Header start  -->
@section('nav')
@include('partials.navigation')
@endsection
<!-- Header End  -->
     
     @section('content')
<!-- Start maintenance Section -->
<section class="ec-under-maintenance">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="under-maintenance">
                    <div class="logo">
                        <img src="{{url('assets/images/logo/logo.png')}}" alt="logo">
                    </div>
                    <h1>Website Under Maintenance</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy.</p>
                    <span class="mainte-counter">
                        <span id="timer" data-date="September 30, 2023 19:15:10 PDT"></span>
                    </span>
                </div>
            </div>
            <div class="col-md-6 disp-768">
                <div class="under-maintenance">
                    <img class="maintenance-img" src="assets/images/common/maintenance2.gif" alt="maintenance">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End maintenance Section -->
     @endsection

     
<!-- Footer Start -->
@section('footer')
@include('partials.footer')
@endsection
<!-- Footer Area End -->