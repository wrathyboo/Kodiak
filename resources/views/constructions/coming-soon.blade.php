@extends('layouts.master')
@section('title','name')
<!-- Header start  -->
@section('nav')
@include('partials.navigation')
@endsection
<!-- Header End  -->

{{-- Main Content Start --}}
@section('content')
	<!-- Start Header Section -->
	<section id="hero-section" class="hero-section particles">
		<div class="container-fluid main-container">
			<div class="row">
				<div class="col-md-12 p-0">
					<div class="main-block">
						<div id="particles-js"></div>
						<div class="main-info">
							<div class="hero-container">
								<div class="hero-counter">
									<div class="hero-detail">
										<div class="logo">
											<img src="{{url('assets/images/logo/dark-logo.png')}}" alt="logo">
										</div>
										<h1 class="title">We will <span>launch</span> soon.</h1>
										<p class="hero-counter-desc">Lorem Ipsum is simply dummy text of the printing
											and typesetting industry since the 1500s.</p>
										<!-- Countdown -->
										<span class="counter">
											<span id="timer" data-date="September 30, 2023 19:15:10 PDT"></span>
										</span>
										<!-- END Countdown -->
										<!-- Newsletter -->
										<form class="subscribe_form" id="subscribe_form" method="post">
											<div class="input-group">
												<input type="email" id="subscribe_email" class="form-control"
													name="email" placeholder="Enter your email">
												<button class="btn btn-default button" id="subscribe_btn"
													type="button"><span class="btn-text">subscribe</span></button>
												<span id="success" class="validation">Thank you for subscribing!</span>
												<span id="warning" class="validation">Enter your valid email.</span>
												<span id="faild" class="validation">Faild subscription!!!</span>
											</div>
										</form>
										<!-- End Newsletter -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Header Section -->

@endsection
{{-- Main Content End --}}
     
<!-- Footer Start -->
@section('footer')
@include('partials.footer')
@endsection
<!-- Footer Area End -->