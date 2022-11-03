@extends('layouts.master')
@section('title','name')
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
                            <h2 class="ec-breadcrumb-title">Blog Page</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="ec-breadcrumb-item active">Blog Page</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Ec Blog page -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-blogs-rightside col-lg-8 col-md-12">

                    <!-- Blog content Start -->
                    <div class="ec-blogs-content">
                        <div class="ec-blogs-inner">
                            <div class="ec-blog-main-img">
                                <img class="blog-image" src="assets/images/blog-image/7.jpg" alt="Blog" />
                            </div>
                            <div class="ec-blog-date">
                                <p class="date">28 JUNE, 2021-2022 - </p><a href="javascript:void(0)">5 Comments</a>
                            </div>
                            <div class="ec-blog-detail">
                                <h3 class="ec-blog-title">20 Most awerded and trending items 2021-2022</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprhendit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur. </p>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qei officia deser
                                    mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                                    voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                <p class="blockquote">Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do
                                    eiusmod tempor incididunt labo dolor magna aliqua. Ut enim ad minim veniam quis
                                    nostrud.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehendrit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur.</p>
                                <div class="ec-blog-sub-imgs">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img class="blog-image" src="assets/images/blog-image/2.jpg" alt="Blog" />
                                        </div>
                                        <div class="col-md-6">
                                            <img class="blog-image" src="assets/images/blog-image/3.jpg" alt="Blog" />
                                        </div>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehendrit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur.</p>
                            </div>
                            <div class="ec-blog-tags">
                                <a href="blog-left-sidebar.html">lifestyle ,</a>
                                <a href="blog-left-sidebar.html">Outdoor ,</a>
                                <a href="blog-left-sidebar.html">interior ,</a>
                                <a href="blog-left-sidebar.html">sports ,</a>
                                <a href="blog-left-sidebar.html">bloging ,</a>
                                <a href="blog-left-sidebar.html">inspiration</a>
                            </div>
                            <div class="ec-blog-arrows">
                                <a href="blog-detail-left-sidebar.html"><i class="ecicon eci-angle-left"></i> Prev
                                    Post</a>
                                <a href="blog-detail-left-sidebar.html">Next Post <i
                                        class="ecicon eci-angle-right"></i></a>
                            </div>
                            <div class="ec-blog-comments">
                                <div class="ec-blog-cmt-preview">
                                    <div class="ec-blog-comment-wrapper mt-55">
                                        <h4 class="ec-blog-dec-title">Comments : 05</h4>
                                        <div class="ec-single-comment-wrapper mt-35">
                                            <div class="ec-blog-user-img">
                                                <img src="assets/images/blog-image/9.jpg" alt="blog image">
                                            </div>
                                            <div class="ec-blog-comment-content">
                                                <h5>John Deo</h5>
                                                <span>October 14, 2018 </span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolor magna aliqua. Ut enim
                                                    ad minim veniam, </p>
                                                <div class="ec-blog-details-btn">
                                                    <a href="javascript:void(0)">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-single-comment-wrapper mt-50 ml-150">
                                            <div class="ec-blog-user-img">
                                                <img src="assets/images/blog-image/10.jpg" alt="blog image">
                                            </div>
                                            <div class="ec-blog-comment-content">
                                                <h5>Jenifer lowes</h5>
                                                <span>October 14, 2018 </span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolor magna aliqua. Ut enim
                                                    ad minim veniam, </p>
                                                <div class="ec-blog-details-btn">
                                                    <a href="javascript:void(0)">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ec-blog-cmt-form">
                                    <div class="ec-blog-reply-wrapper mt-50">
                                        <h4 class="ec-blog-dec-title">Leave A Reply</h4>
                                        <form class="ec-blog-form" action="#">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="ec-leave-form">
                                                        <input type="text" placeholder="Full Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="ec-leave-form">
                                                        <input type="email" placeholder="Email Address ">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="ec-text-leave">
                                                        <textarea placeholder="Message"></textarea>
                                                        <a href="#" class="btn btn-lg btn-secondary">Order Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog content End -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="ec-blogs-leftside col-lg-4 col-md-12">
                    <div class="ec-blog-search">
                        <form class="ec-blog-search-form" action="#">
                            <input class="form-control" placeholder="Search Our Blog" type="text">
                            <button class="submit" type="submit"><i class="ecicon eci-search"></i></button>
                        </form>
                    </div>
                    <div class="ec-sidebar-wrap">
                        <!-- Sidebar Recent Blog Block -->
                        <div class="ec-sidebar-block ec-sidebar-recent-blog">
                            <div class="ec-sb-title">
                                <h3 class="ec-sidebar-title">Recent Articles</h3>
                            </div>
                            <div class="ec-sb-block-content">
                                <div class="ec-sidebar-block-item">
                                    <h5 class="ec-blog-title"><a href="blog-detail-left-sidebar.html">The best fashion influencers.</a></h5>
                                    <div class="ec-blog-date">February 10, 2021-2022</div>
                                </div>
                                <div class="ec-sidebar-block-item">
                                    <h5 class="ec-blog-title"><a href="blog-detail-left-sidebar.html">Vogue Shopping Weekend.</a></h5>
                                    <div class="ec-blog-date">March 14, 2021-2022</div>
                                </div>
                                <div class="ec-sidebar-block-item">
                                    <h5 class="ec-blog-title"><a href="blog-detail-left-sidebar.html">Fashion Market Reveals Her Jacket.</a></h5>
                                    <div class="ec-blog-date">June 09, 2021-2022</div>
                                </div>
                                <div class="ec-sidebar-block-item">
                                    <h5 class="ec-blog-title"><a href="blog-detail-left-sidebar.html">Summer Trending Fashion Market.</a></h5>
                                    <div class="ec-blog-date">July 17, 2021-2022</div>
                                </div>
                                <div class="ec-sidebar-block-item">
                                    <h5 class="ec-blog-title"><a href="blog-detail-left-sidebar.html">Winter 2021 Trending Fashion Market</a></h5>
                                    <div class="ec-blog-date">August 02, 2021-2022</div>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Recent Blog Block -->
                        <!-- Sidebar Category Block -->
                        <div class="ec-sidebar-block">
                            <div class="ec-sb-title">
                                <h3 class="ec-sidebar-title">Categories</h3>
                            </div>
                            <div class="ec-sb-block-content">
                                <ul>
                                    <li>
                                        <div class="ec-sidebar-block-item">
                                            <input type="checkbox" checked /> <a href="#">clothes</a><span
                                                class="checked"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ec-sidebar-block-item">
                                            <input type="checkbox" /> <a href="#">Bags</a><span class="checked"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ec-sidebar-block-item">
                                            <input type="checkbox" /> <a href="#">Shoes</a><span class="checked"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ec-sidebar-block-item">
                                            <input type="checkbox" /> <a href="#">cosmetics</a><span
                                                class="checked"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ec-sidebar-block-item">
                                            <input type="checkbox" /> <a href="#">electrics</a><span
                                                class="checked"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ec-sidebar-block-item">
                                            <input type="checkbox" /> <a href="#">phone</a><span class="checked"></span>
                                        </div>
                                    </li>
                                    <li id="ec-more-toggle-content" style="padding: 0; display: none;">
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-block-item">
                                                    <input type="checkbox" /> <a href="#">Watch</a><span
                                                        class="checked"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-block-item">
                                                    <input type="checkbox" /> <a href="#">Cap</a><span
                                                        class="checked"></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="ec-sidebar-block-item ec-more-toggle">
                                            <span class="checked"></span><span id="ec-more-toggle">More
                                                Categories</span>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar Category Block -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
{{-- Main Content End --}}
     
<!-- Footer Start -->
@section('footer')
@include('partials.footer')
@endsection
<!-- Footer Area End -->