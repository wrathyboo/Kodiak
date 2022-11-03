
<!--========================================================= 
    Item Name: Ekka - Ecommerce HTML Template.
    Author: ashishmaraviya
    Version: 3.2
    Copyright 2021-2022
	Author URI: https://themeforest.net/user/ashishmaraviya
 ============================================================-->
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
     
     <title>@yield('title')</title>
     <meta name="keywords" content="apparel, catalog, clean, ecommerce, ecommerce HTML, electronics, fashion, html eCommerce, html store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops" />
     <meta name="description" content="Best ecommerce html template for single and multi vendor store.">
     <meta name="author" content="ashishmaraviya">
     {{-- <meta name="color-scheme" content="light dark"> --}}
     <!-- site Favicon -->
     <link rel="icon" href="{{url('assets/images/favicon/favicon-bear.png')}}" sizes="32x32" />
     <link rel="apple-touch-icon" href="{{url('assets/images/favicon/favicon.png')}}" />
     <meta name="msapplication-TileImage" content="{{url('assets/images/favicon/favicon.png')}}" />
 
     <!-- css Icon Font -->
     <link rel="stylesheet" href="{{url('assets/css/vendor/ecicons.min.css')}}" />
 
     <!-- css All Plugins Files -->
     <link rel="stylesheet" href="{{url('assets/css/plugins/animate.css')}}" />
     <link rel="stylesheet" href="{{url('assets/css/plugins/swiper-bundle.min.css')}}" />
     <link rel="stylesheet" href="{{url('assets/css/plugins/jquery-ui.min.css')}}" />
     <link rel="stylesheet" href="{{url('assets/css/plugins/countdownTimer.css')}}" />
     <link rel="stylesheet" href="{{url('assets/css/plugins/slick.min.css')}}" />
     <link rel="stylesheet" href="{{url('assets/css/plugins/bootstrap.css')}}" />
     {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-dark-5@1.1.3/dist/css/bootstrap-nightshade.min.css" rel="stylesheet"> --}}
     <!-- Main Style -->
     <link rel="stylesheet" href="{{url('assets/css/style.css')}}" />
     <link rel="stylesheet" href="{{url('assets/css/responsive.css')}}" />
     <link rel="stylesheet" href="{{url('assets/css/home.css')}}" />
     <!-- Background css -->
     <link rel="stylesheet" id="bg-switcher-css" href="{{url('assets/css/backgrounds/bg-4.css')}}">
     
     @yield('custom-css')
 </head>
 <body>
    @include('partials.help')
     {{-- <div id="ec-overlay"><span class="loader_img"></span></div> --}}
 
         @yield('nav')


         @yield('content')


         @yield('footer')

 
     <!-- Modal -->
     <div class="modal fade" id="ec_quickview_modal" tabindex="-1" role="dialog">
         <div class="modal-dialog modal-dialog-centered" role="document">
             <div class="modal-content">
                 <button type="button" class="btn-close qty_close" data-bs-dismiss="modal" aria-label="Close"></button>
                 <div class="modal-body">
                     <div class="row">
                         <div class="col-md-5 col-sm-12 col-xs-12">
                             <!-- Swiper -->
                             <div class="qty-product-cover">
                                 <div class="qty-slide">
                                     <img class="img-responsive" src="{{url('assets/images/product-image/3_1.jpg')}}" alt="">
                                 </div>
                                 <div class="qty-slide">
                                     <img class="img-responsive" src="{{url('assets/images/product-image/3_2.jpg')}}" alt="">
                                 </div>
                                 <div class="qty-slide">
                                     <img class="img-responsive" src="{{url('assets/images/product-image/3_3.jpg')}}" alt="">
                                 </div>
                                 <div class="qty-slide">
                                     <img class="img-responsive" src="{{url('assets/images/product-image/3_4.jpg')}}" alt="">
                                 </div>
                                 <div class="qty-slide">
                                     <img class="img-responsive" src="{{url('assets/images/product-image/3_5.jpg')}}" alt="">
                                 </div>
                             </div>
                             <div class="qty-nav-thumb">
                                 <div class="qty-slide">
                                     <img class="img-responsive" src="{{url('assets/images/product-image/3_1.jpg')}}" alt="">
                                 </div>
                                 <div class="qty-slide">
                                     <img class="img-responsive" src="{{url('assets/images/product-image/3_2.jpg')}}" alt="">
                                 </div>
                                 <div class="qty-slide">
                                     <img class="img-responsive" src="{{url('assets/images/product-image/3_3.jpg')}}" alt="">
                                 </div>
                                 <div class="qty-slide">
                                     <img class="img-responsive" src="{{url('assets/images/product-image/3_4.jpg')}}" alt="">
                                 </div>
                                 <div class="qty-slide">
                                     <img class="img-responsive" src="{{url('assets/images/product-image/3_5.jpg')}}" alt="">
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-7 col-sm-12 col-xs-12">
                             <div class="quickview-pro-content">
                                 <h5 class="ec-quick-title"><a href="product-left-sidebar.html">Handbag leather purse for women</a>
                                 </h5>
                                 <div class="ec-quickview-rating">
                                     <i class="ecicon eci-star fill"></i>
                                     <i class="ecicon eci-star fill"></i>
                                     <i class="ecicon eci-star fill"></i>
                                     <i class="ecicon eci-star fill"></i>
                                     <i class="ecicon eci-star"></i>
                                 </div>
 
                                 <div class="ec-quickview-desc">Lorem Ipsum is simply dummy text of the printing and
                                     typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                     since the 1500s,</div>
                                 <div class="ec-quickview-price">
                                     <span class="old-price">$100.00</span>
                                     <span class="new-price">$80.00</span>
                                 </div>
 
                                 <div class="ec-pro-variation">
                                     <div class="ec-pro-variation-inner ec-pro-variation-color">
                                         <span>Color</span>
                                         <div class="ec-pro-color">
                                             <ul class="ec-opt-swatch">
                                                 <li><span style="background-color:#ebbf60;"></span></li>
                                                 <li><span style="background-color:#75e3ff;"></span></li>
                                                 <li><span style="background-color:#11f7d8;"></span></li>
                                                 <li><span style="background-color:#acff7c;"></span></li>
                                                 <li><span style="background-color:#e996fa;"></span></li>
                                             </ul>
                                         </div>
                                     </div>
                                     <div class="ec-pro-variation-inner ec-pro-variation-size ec-pro-size">
                                         <span>Size</span>
                                         <div class="ec-pro-variation-content">
                                             <ul class="ec-opt-size">
                                                 <li class="active"><a href="#" class="ec-opt-sz"
                                                         data-tooltip="Small">S</a></li>
                                                 <li><a href="#" class="ec-opt-sz" data-tooltip="Medium">M</a></li>
                                                 <li><a href="#" class="ec-opt-sz" data-tooltip="Large">X</a></li>
                                                 <li><a href="#" class="ec-opt-sz" data-tooltip="Extra Large">XL</a></li>
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="ec-quickview-qty">
                                     <div class="qty-plus-minus">
                                         <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                                     </div>
                                     <div class="ec-quickview-cart ">
                                         <button class="btn btn-primary"><img src="{{url('assets/images/icons/cart.svg')}}"
                                                 class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Modal end -->
 

 
   
 
   
 
     <!-- Cart Floating Button -->
     {{-- <div class="ec-cart-float">
         <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
             <div class="header-icon"><img src="assets/images/icons/cart.svg" class="svg_img header_svg" alt="cart" />
             </div>
             <span class="ec-cart-count cart-count-lable">3</span>
         </a>
     </div> --}}
     <!-- Cart Floating Button end -->
 

 

 
     <!-- Vendor JS -->
     <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
     <!-- <script src="assets/js/vendor/jquery.notify.min.js"></script> -->
     <script src="{{url('assets/js/vendor/jquery.bundle.notify.min.js')}}"></script>
     
     <script src="{{url('assets/js/vendor/popper.min.js')}}"></script>
     <script src="{{url('assets/js/vendor/bootstrap.min.js')}}"></script>
     <script src="{{url('assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
     <script src="{{url('assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>
 
     <!--Plugins JS-->
     <script src="{{url('assets/js/plugins/swiper-bundle.min.js')}}"></script>
     <script src="{{url('assets/js/plugins/countdownTimer.min.js')}}"></script>
     <script src="{{url('assets/js/plugins/scrollup.js')}}"></script>
     <script src="{{url('assets/js/plugins/jquery.zoom.min.js')}}"></script>
     <script src="{{url('assets/js/plugins/slick.min.js')}}"></script>
     <script src="{{url('assets/js/plugins/infiniteslidev2.js')}}"></script>
     <script src="{{url('assets/js/vendor/jquery.magnific-popup.min.js')}}"></script>
     <script src="{{url('assets/js/plugins/jquery.sticky-sidebar.js')}}"></script>
     {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap-dark-5@1.1.3/dist/js/darkmode.min.js"></script> --}}
     <!-- Google translate Js -->
     <script src="{{url('assets/js/vendor/google-translate.js')}}"></script>
     <script>
         function googleTranslateElementInit() {
             new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
         }
     </script>
     <!-- Main Js -->
     <script src="{{url('assets/js/vendor/index.js')}}"></script>
     <script src="{{url('assets/js/main.js')}}"></script>
     @yield('custom-js')
 </body>
 
 <!-- Mirrored from loopinfosol.in/themeforest/ekka-html-v32/ekka-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Oct 2022 07:30:41 GMT -->
 </html>