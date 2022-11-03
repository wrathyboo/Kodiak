@extends('layouts.master')
@section('title','Profile')
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
                            <h2 class="ec-breadcrumb-title">User Profile</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="ec-breadcrumb-item active">Profile</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- User profile section -->
    <section class="ec-page-content ec-vendor-uploads ec-user-account section-space-p">
        <div class="container">
            <div class="row">
                <!-- Sidebar Area Start -->
                <div class="ec-shop-leftside ec-vendor-sidebar col-lg-3 col-md-12">
                    <div class="ec-sidebar-wrap">
                        <!-- Sidebar Category Block -->
                        <div class="ec-sidebar-block">
                            <div class="ec-vendor-block">
                                <!-- <div class="ec-vendor-block-bg"></div>
                                <div class="ec-vendor-block-detail">
                                    <img class="v-img" src="assets/images/user/1.jpg" alt="vendor image">
                                    <h5>Mariana Johns</h5>
                                </div> -->
                                <div class="ec-vendor-block-items">
                                    <ul>
                                        <li><a href="user-profile.html">User Profile</a></li>
                                        <li><a href="user-history.html">History</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="track-order.html">Track Order</a></li>
                                        <li><a href="user-invoice.html">Invoice</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ec-shop-rightside col-lg-9 col-md-12">
                    <div class="ec-vendor-dashboard-card ec-vendor-setting-card">
                        <div class="ec-vendor-card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="ec-vendor-block-profile">
                                        <div class="ec-vendor-block-img space-bottom-30">
                                            <div class="ec-vendor-block-bg">
                                                <a href="#" class="btn btn-lg btn-primary"
                                                    data-link-action="editmodal" title="Edit Detail"
                                                    data-bs-toggle="modal" data-bs-target="#edit_modal">Edit Detail</a>
                                            </div>
                                            <div class="ec-vendor-block-detail">
                                                <img class="v-img" src="{{url('images/profiles') . '/' . ($_Auth->profile->avatar == NULL ? 'default.jpg' : $_Auth->profile->avatar)}}" alt="vendor image">
                                                <h5 class="name">{{$_Auth->name}}</h5>
                                                <p>( Web Developer )</p>
                                            </div>
                                            <p>Hello <span>{{$firstname}}!</span></p>
                                            <p>From your account you can easily view and track orders. You can manage and change your account information like address, contact information and history of orders.</p>
                                        </div>
                                        <h5>Account Information</h5>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="ec-vendor-detail-block ec-vendor-block-email space-bottom-30">
                                                    <h6>E-mail address <a href="javasript:void(0)" data-link-action="editmodal" title="Edit Detail" data-bs-toggle="modal" data-bs-target="#edit_modal"><img src="{{url('assets/images/icons/edit.svg')}}"
                                                        class="svg_img pro_svg" alt="edit" /></a></h6>
                                                    <ul>
                                                        <li><strong>Email 1 : </strong><a href="https://loopinfosol.in/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d1a2a4a1a1bea3a5e091b4a9b0a1bcbdb4ffb2bebc">{{($_Auth->email == null ? 'No info' : $_Auth->email)}}</a></li>
                                                        <li><strong>Email 2 : </strong><a href="https://loopinfosol.in/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="13606663637c61672153766b72637e7f763d707c7e">[email&#160;protected]</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="ec-vendor-detail-block ec-vendor-block-contact space-bottom-30">
                                                    <h6>Contact nubmer<a href="javasript:void(0)" data-link-action="editmodal" title="Edit Detail" data-bs-toggle="modal" data-bs-target="#edit_modal"><img src="{{url('assets/images/icons/edit.svg')}}"
                                                        class="svg_img pro_svg" alt="edit" /></a></h6>
                                                    <ul>
                                                        <li><strong>Phone Nubmer 1 : </strong>{{($_Auth->profile->phone == null ? 'No info' : $_Auth->profile->phone)}}</li>
                                                        <li><strong>Phone Nubmer 2 : </strong>No info</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="ec-vendor-detail-block ec-vendor-block-address mar-b-30">
                                                    <h6>Address<a href="javasript:void(0)" data-link-action="editmodal" title="Edit Detail" data-bs-toggle="modal" data-bs-target="#edit_modal"><img src="{{url('assets/images/icons/edit.svg')}}"
                                                        class="svg_img pro_svg" alt="edit" /></a></h6>
                                                    <ul>
                                                        <li><strong>Home : </strong>{{($_Auth->profile->phone == null ? 'No info' : $_Auth->profile->phone)}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="ec-vendor-detail-block ec-vendor-block-address">
                                                    <h6>ID<a href="javasript:void(0)" data-link-action="editmodal" title="Edit Detail" data-bs-toggle="modal" data-bs-target="#edit_modal"><img src="{{url('assets/images/icons/edit.svg')}}"
                                                        class="svg_img pro_svg" alt="edit" /></a></h6>
                                                    <ul>
                                                        <li><strong>Steam ID : </strong>{{($_Auth->profile->steam_id == null ? 'No info' : $_Auth->profile->steam_id)}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End User profile section -->
        <!-- Modal -->
        <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <form action="" method="POST" id="image-form" enctype="multipart/form-data">
                            @csrf
                        <div class="row">
                            <div class="ec-vendor-block-img space-bottom-30">
                                <div class="ec-vendor-block-bg cover-upload">
                                    <div class="thumb-upload">
                                        <div class="thumb-edit">
                                            <input type='file' id="thumbUpload01" class="ec-image-upload"
                                                accept=".png, .jpg, .jpeg" />
                                            <label><img src="{{url('assets/images/icons/edit.svg')}}"
                                                    class="svg_img header_svg" alt="edit" /></label>
                                        </div>
                                        <div class="thumb-preview ec-preview">
                                            <div class="image-thumb-preview">
                                                <img class="image-thumb-preview ec-image-preview v-img"
                                                    src="{{url('assets/images/banner/8.jpg')}}" alt="edit" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ec-vendor-block-detail">
                                    <div class="thumb-upload">
                                        <div class="thumb-edit">
                                            <input type='file' name="avatar" id="thumbUpload02" class="ec-image-upload"
                                                accept=".png, .jpg, .jpeg" />
                                            <label><img src="{{url('assets/images/icons/edit.svg')}}"
                                                    class="svg_img header_svg" alt="edit" /></label>
                                        </div>
                                        <div class="thumb-preview ec-preview">
                                            <div class="image-thumb-preview">
                                                <img class="image-thumb-preview ec-image-preview v-img"
                                                    src="{{url('images/profiles') . '/' . ($_Auth->profile->avatar == NULL ? 'default.jpg' : $_Auth->profile->avatar)}}" alt="edit" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ec-vendor-upload-detail">
                                    <div class="row g-3">
                                        <div class="col-md-6 space-t-15">
                                            <label class="form-label">First name</label>
                                            <input type="text" class="form-control" name="firstname" value="{{$firstname}}" placeholder="{{$firstname}}">
                                        </div>
                                        <div class="col-md-6 space-t-15">
                                            <label class="form-label">Last name</label>
                                            <input type="text" class="form-control" name="lastname" value="{{$lastname}}" placeholder="{{$lastname}}">
                                        </div>
                                        <div class="col-md-6 space-t-15">
                                            <label class="form-label">Username</label>
                                            <input type="text" class="form-control" name="username" value="{{$_Auth->profile->username}}" placeholder="{{$_Auth->profile->username}}">
                                        </div>
                                        <div class="col-md-6 space-t-15">
                                            <label class="form-label">Phone Number</label>
                                            <input type="text" class="form-control" name="phonenumber" value="{{$_Auth->profile->phone}}" placeholder="{{$_Auth->profile->phone}}">
                                        </div>
                                        <div class="col-md-6 space-t-15">
                                            <label class="form-label">Steam ID</label>
                                            <input type="text" class="form-control" name="steam_id" value="{{$_Auth->profile->steam_id}}" placeholder="{{$_Auth->profile->steam_id}}">
                                        </div>
                                        <div class="col-md-6 space-t-15">
                                            <label class="form-label">API Key</label>
                                            <input type="text" class="form-control" name="api_key" value="{{$_Auth->profile->api_key}}" placeholder="{{$_Auth->profile->api_key}}">
                                        </div>
                                        <div class="col-md-12 space-t-15">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" value="{{$_Auth->email}}" placeholder="{{$_Auth->email}}">
                                        </div>
                                        <div class="col-md-12 space-t-15">
                                            <label class="form-label">Address</label>
                                            <input type="text" class="form-control" name="address" value="{{$_Auth->profile->address}}" placeholder="{{$_Auth->profile->address}}">
                                        </div>
                                        <div class="col-md-12 space-t-15">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                            <a href="#" class="btn btn-lg btn-secondary qty_close" data-bs-dismiss="modal"
                                                aria-label="Close">Close</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->
     @endsection

     
<!-- Footer Start -->
@section('footer')
@include('partials.footer')
@endsection
<!-- Footer Area End -->