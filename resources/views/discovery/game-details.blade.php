@extends('layouts.master')
@section('title','name')
@section('custom-css')
<link rel="stylesheet" href="assets/css/style.css" />
@endsection
<!-- Header start  -->
@section('nav')
@include('partials.navigation')
@endsection
<!-- Header End  -->

{{-- Main Content Start --}}
@section('content')
 
@endsection
{{-- Main Content End --}}
     
<!-- Footer Start -->
@section('footer')
@include('partials.footer')
@endsection
<!-- Footer Area End -->