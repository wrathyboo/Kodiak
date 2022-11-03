@extends('layouts.master')

@section('custom-css')
  <link rel="stylesheet" href="{{url('assets/css/welcome.css')}}">
@endsection
@section('content')
  
    {{-- <div class="ratio ratio-16x9">
        <video playsinline="playsinline" autoplay loop muted id="login-background">
            <source src="{{url('images/backgrounds/video/items/AUTUMN_LEAVES.webm')}}" type="video/webm" />
           
        </video>
    </div> --}}
    <header>

        <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
        <div class="overlay"></div>
      
        <!-- The HTML5 video element that will create the background video on the header -->
        <div class="radio ratio-16x9">
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="images/backgrounds/video/items/autumn_leaves.webm" type="video/webm">
              </video>
        </div>
      
        <!-- The header content -->
        <div class="container h-100">
          <div class="d-flex h-100 text-center align-items-center">
            <div class="w-100 d-flex justify-content-center" >
               <div class="login-box bg-light " style="width:30%">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="section-title" style="margin-top:40px">
                                <h2 class="ec-bg-title">Log In</h2>
                                <h2 class="ec-title" >Welcome</h2>
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
                                            <input type="text" name="name" placeholder="Enter your email add..." required />
                                        </span>
                                        <span class="ec-login-wrap">
                                            <label>Password*</label>
                                            <input type="password" name="password" placeholder="Enter your password" required />
                                        </span>
                                       <div style="margin-top:20px; margin-bottom:20px">
                                        <span class="ec-login-wrap ec-login-fp" >
                                            <label><a href="#">Forgot Password?</a></label>
                                        </span>
                                        <span class="ec-login-wrap ec-login-btn">
                                            <button class="btn btn-primary" type="submit">Login</button>
                                            <a href="{{route('user.register')}}" class="btn btn-secondary">Register</a>
                                        </span>
                                       </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               </div>
            </div>
          </div>
        </div>
      </header>
@endsection