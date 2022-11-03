@extends('layouts.admin')

@section('content')
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Form</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Form</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col d-flex justify-content-center">
                                <div class="card" style="width:60%">
                                    <div class="card-body" >
                                        <h4 class="card-title mb-4">Create new user account</h4>

                                        <form method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">First name</label>
                                                        <input name="firstname" type="firstname" class="form-control" id="formrow-email-input" placeholder="first name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Last name</label>
                                                        <input name="lastname" type="lastname" class="form-control" id="formrow-password-input" placeholder="last name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="formrow-username-input" class="form-label">Username</label>
                                                <input name="username" type="username" class="form-control" id="formrow-username-input" placeholder="Enter Your username">
                                            </div>
                                            <div class="mb-3">
                                                <label for="formrow-steamid-input" class="form-label">Steam ID</label>
                                                <input name="steam_id" type="text" class="form-control" id="formrow-steamid-input" placeholder="Steam ID">
                                            </div>
                                            <div class="row">
                                                
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="formrow-email-input" class="form-label">Email</label>
                                                        <input name="email" type="email" class="form-control" id="formrow-email-input" placeholder="example@gmail.com">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="formrow-password-input" class="form-label">Password</label>
                                                        <input name="password" type="password" class="form-control" id="formrow-password-input" placeholder="Enter Your Password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="formrow-phone-input" class="form-label">Phone number</label>
                                                        <input name="phonenumber" type="text" class="form-control" id="formrow-phone-input" placeholder="Enter Your phone number">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="formrow-birthdate-input" class="form-label">Birthdate</label>
                                                        <input name="birthdate" type="date" class="form-control" id="formrow-birthdate-input" placeholder="Enter Your Password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="formrow-address-input" class="form-label">Address</label>
                                                <input name="address" type="text" class="form-control" id="formrow-address-input" placeholder="Address line 1">
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="formrow-country" class="form-label">Country</label>
                                                        <select name="country" id="formrow-country" class="form-select">
                                                            <option selected value="Vietnam">Vietnam</option>
                                                            <option value="United State">United State</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputState" class="form-label">State</label>
                                                        <select id="formrow-inputState" class="form-select">
                                                            <option selected>Choose...</option>
                                                            <option>...</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputZip" class="form-label">Zip</label>
                                                        <input type="text" class="form-control" id="formrow-inputZip" placeholder="Enter Your Zip Code">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck" name="meta_value" value="Administrator">
                                                    <label class="form-check-label" for="gridCheck">
                                                        Administrator
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-body">
                            
                                                            <h4 class="card-title">Upload profile</h4>
                                                            {{-- <p class="card-title-desc">DropzoneJS is an open source library
                                                                that provides drag’n’drop file uploads with image previews.
                                                            </p> --}}
                            
                                                            <div>
                                                                <div class="dropzone">
                                                                    <div class="fallback">
                                                                        <input name="avatar" type="file" multiple="multiple">
                                                                    </div>
                                                                    <div class="dz-message needsclick text-center">
                                                                        <div class="mb-3">
                                                                            <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                                                        </div>
                                                                        
                                                                        <h4>Drop files here or click to upload.</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->

                         
                        </div>
                        <!-- end row -->

                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
               
            </div>
            <!-- end main content-->
@endsection