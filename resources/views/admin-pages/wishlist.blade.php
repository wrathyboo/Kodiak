@extends('layouts.admin')
@section('custom-css')
    <link rel="stylesheet" href="{{ url('admin/assets/css/library.css') }}">
@endsection
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Library</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Contacts</a></li>
                                    <li class="breadcrumb-item active">Library</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    @foreach ($wishlist as $id => $game)
                            <div style="margin-bottom: 15px ;" class="col col-md-2"><a
                                    href="https://store.steampowered.com/app/{{ $id }}/" target="_blank">
                                    <div class="game-banner"><img
                                            src="https://steamcdn-a.akamaihd.net/steam/apps/{{ $id }}/library_600x900_2x.jpg"
                                            alt="" onerror="this.src='{{ url('images/store_home_share.jpg') }}';"
                                            class="img-fluid"></div>
                                </a>
                                <div class="d-flex justify-content-middle">
                                    <span>{{ $wishlist[$id]['name'] }}</span>
                                </div>
                            </div>
                    @endforeach
                </div>

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->



    </div>
@endsection
