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
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-6 ec-blog-block">
                                    <div class="ec-blog-inner">
                                        <div class="ec-blog-image">
                                            <a href="{{route('blog.content')}}">
                                                <img class="blog-image" src="assets/images/blog-image/1.jpg"
                                                    alt="Blog" />
                                            </a>
                                        </div>
                                        <div class="ec-blog-content">
                                            <h5 class="ec-blog-title"><a
                                                    href="{{route('blog.content')}}">The best fashion influencers.</a></h5>

                                            <div class="ec-blog-date">By <span>Mr Admin</span> / February 10, 2021-2022</div>
                                            <div class="ec-blog-desc">Lorem Ipsum is simply dummy text of the printing
                                                and typesetting industry. Lorem Ipsum has been the industry's standard
                                                dummy text ever since the 1500s,</div>

                                            <div class="ec-blog-btn"><a href="{{route('blog.content')}}" class="btn btn-primary">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-6 ec-blog-block">
                                    <div class="ec-blog-inner">
                                        <div class="ec-blog-image">
                                            <a href="{{route('blog.content')}}">
                                                <img class="blog-image" src="assets/images/blog-image/2.jpg"
                                                    alt="Blog" />
                                            </a>
                                        </div>
                                        <div class="ec-blog-content">
                                            <h5 class="ec-blog-title"><a
                                                    href="{{route('blog.content')}}">Vogue Shopping Weekend 2021.</a></h5>

                                            <div class="ec-blog-date">By <span>Mr Admin</span> / February 10, 2021-2022</div>
                                            <div class="ec-blog-desc">Lorem Ipsum is simply dummy text of the printing
                                                and typesetting industry. Lorem Ipsum has been the industry's standard
                                                dummy text ever since the 1500s,</div>

                                            <div class="ec-blog-btn"><a href="{{route('blog.content')}}" class="btn btn-primary">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-6 ec-blog-block">
                                    <div class="ec-blog-inner">
                                        <div class="ec-blog-image">
                                            <a href="{{route('blog.content')}}">
                                                <img class="blog-image" src="assets/images/blog-image/3.jpg"
                                                    alt="Blog" />
                                            </a>
                                        </div>
                                        <div class="ec-blog-content">
                                            <h5 class="ec-blog-title"><a
                                                    href="{{route('blog.content')}}">Winter 2021 Trending Fashion Market</a></h5>

                                            <div class="ec-blog-date">By <span>Mr Admin</span> / February 10, 2021-2022</div>
                                            <div class="ec-blog-desc">Lorem Ipsum is simply dummy text of the printing
                                                and typesetting industry. Lorem Ipsum has been the industry's standard
                                                dummy text ever since the 1500s,</div>

                                            <div class="ec-blog-btn"><a href="#" class="btn btn-primary">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-6 ec-blog-block">
                                    <div class="ec-blog-inner">
                                        <div class="ec-blog-image">
                                            <a href="{{route('blog.content')}}">
                                                <img class="blog-image" src="assets/images/blog-image/4.jpg"
                                                    alt="Blog" />
                                            </a>
                                        </div>
                                        <div class="ec-blog-content">
                                            <h5 class="ec-blog-title"><a
                                                    href="{{route('blog.content')}}">Fashion Market Reveals Her Jacket.</a></h5>

                                            <div class="ec-blog-date">By <span>Mr Admin</span> / February 10, 2021-2022</div>
                                            <div class="ec-blog-desc">Lorem Ipsum is simply dummy text of the printing
                                                and typesetting industry. Lorem Ipsum has been the industry's standard
                                                dummy text ever since the 1500s,</div>

                                            <div class="ec-blog-btn"><a href="#" class="btn btn-primary">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-6 ec-blog-block">
                                    <div class="ec-blog-inner">
                                        <div class="ec-blog-image">
                                            <a href="{{route('blog.content')}}">
                                                <img class="blog-image" src="assets/images/blog-image/5.jpg"
                                                    alt="Blog" />
                                            </a>
                                        </div>
                                        <div class="ec-blog-content">
                                            <h5 class="ec-blog-title"><a
                                                    href="{{route('blog.content')}}">Summer Trending Fashion Market.</a></h5>

                                            <div class="ec-blog-date">By <span>Mr Admin</span> / February 10, 2021-2022</div>
                                            <div class="ec-blog-desc">Lorem Ipsum is simply dummy text of the printing
                                                and typesetting industry. Lorem Ipsum has been the industry's standard
                                                dummy text ever since the 1500s,</div>

                                            <div class="ec-blog-btn"><a href="#" class="btn btn-primary">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-6 ec-blog-block">
                                    <div class="ec-blog-inner">
                                        <div class="ec-blog-image">
                                            <a href="{{route('blog.content')}}">
                                                <img class="blog-image" src="assets/images/blog-image/6.jpg"
                                                    alt="Blog" />
                                            </a>
                                        </div>
                                        <div class="ec-blog-content">
                                            <h5 class="ec-blog-title"><a
                                                    href="{{route('blog.content')}}">The best fashion influencers.</a></h5>

                                            <div class="ec-blog-date">By <span>Mr Admin</span> / February 10, 2021-2022</div>
                                            <div class="ec-blog-desc">Lorem Ipsum is simply dummy text of the printing
                                                and typesetting industry. Lorem Ipsum has been the industry's standard
                                                dummy text ever since the 1500s,</div>

                                            <div class="ec-blog-btn"><a href="#" class="btn btn-primary">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Ec Pagination Start -->
                        <div class="ec-pro-pagination">
                            <span>Showing 1-12 of 21 item(s)</span>
                            <ul class="ec-pro-pagination-inner">
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a class="next" href="#">Next <i class="ecicon eci-angle-right"></i></a></li>
                            </ul>
                        </div>
                        <!-- Ec Pagination End -->
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
                                    <h5 class="ec-blog-title"><a href="{{route('blog.content')}}">The best fashion influencers.</a></h5>
                                    <div class="ec-blog-date">February 10, 2021-2022</div>
                                </div>
                                <div class="ec-sidebar-block-item">
                                    <h5 class="ec-blog-title"><a href="{{route('blog.content')}}">Vogue Shopping Weekend.</a></h5>
                                    <div class="ec-blog-date">March 14, 2021-2022</div>
                                </div>
                                <div class="ec-sidebar-block-item">
                                    <h5 class="ec-blog-title"><a href="{{route('blog.content')}}">Fashion Market Reveals Her Jacket.</a></h5>
                                    <div class="ec-blog-date">June 09, 2021-2022</div>
                                </div>
                                <div class="ec-sidebar-block-item">
                                    <h5 class="ec-blog-title"><a href="{{route('blog.content')}}">Summer Trending Fashion Market.</a></h5>
                                    <div class="ec-blog-date">July 17, 2021-2022</div>
                                </div>
                                <div class="ec-sidebar-block-item">
                                    <h5 class="ec-blog-title"><a href="{{route('blog.content')}}">Winter 2021 Trending Fashion Market</a></h5>
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