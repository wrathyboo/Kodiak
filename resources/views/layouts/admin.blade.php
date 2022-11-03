

<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/skote/layouts/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Oct 2022 05:00:45 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{url('admin/assets/images/favicon.ico')}}">

        <!-- Bootstrap Css -->
        <link href="{{url('admin/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{url('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{url('admin/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        @yield('custom-css')
    </head>

    <body data-sidebar="dark" data-layout-mode="light">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
             <!-- Nav bar -->
             @include('admin-partials.navbar')
            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            @yield('content')
           
            <!-- end main content-->
           @include('admin-partials.footer')
        </div>
        <!-- END layout-wrapper -->



        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
     
        <!-- JAVASCRIPT -->
        <script>
            var public_path = {{ url('admin')   }} + '/';
        </script>
        <script src="{{url('admin/assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{url('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{url('admin/assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{url('admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{url('admin/assets/libs/node-waves/waves.min.js')}}"></script>

        <!-- apexcharts -->
        <script src="{{url('admin/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- dashboard init -->
        <script src="{{url('admin/assets/js/pages/dashboard.init.js')}}"></script>

        <!-- App js -->
        <script src="{{url('admin/assets/js/app.js')}}"></script>
    </body>


<!-- Mirrored from themesbrand.com/skote/layouts/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Oct 2022 05:01:27 GMT -->
</html>