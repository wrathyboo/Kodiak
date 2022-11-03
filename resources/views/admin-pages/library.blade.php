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
                    @foreach ($applist as $game)
                        <div style="margin-bottom: 15px ;" class="col col-md-2"><a
                                href="https://store.steampowered.com/app/{{ $game['id'] }}/" target="_blank">
                                <div class="game-banner"><img
                                        src="https://steamcdn-a.akamaihd.net/steam/apps/{{ $game['id'] }}/library_600x900_2x.jpg"
                                        alt="" onerror="this.src='{{ url('images/store_home_share.jpg') }}';"
                                        class="img-fluid"></div>
                            </a>
                            <form action="{{ route('game.destroy', $game['id']) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <div class="d-flex justify-content-between">
                                    <span>{{ $game['name'] }}</span>
                                    <span>
                                        <button class="btn btn-floating" type="submit"><i
                                                class="favorite-btn fa fa-trash-o text-danger"
                                                aria-hidden="true"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    @endforeach
                </div>

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        {{-- <i type="submit" class="favorite-btn fa fa-trash-o  text-end text-danger" aria-hidden="true" style="margin-top: 15px"></i> --}}


    </div>
@endsection
@section('custom-js')
<script>
    (function($){
window.onbeforeunload = function(e){    
window.name += ' [' + $(window).scrollTop().toString() + '[' + $(window).scrollLeft().toString();
};
$.maintainscroll = function() {
if(window.name.indexOf('[') > 0)
{
var parts = window.name.split('['); 
window.name = $.trim(parts[0]);
window.scrollTo(parseInt(parts[parts.length - 1]), parseInt(parts[parts.length - 2]));
}   
};  
$.maintainscroll();
})(jQuery);
</script>
@endsection