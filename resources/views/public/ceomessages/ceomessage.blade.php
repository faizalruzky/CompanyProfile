@extends('layouts/public.app_nav')
@section('content-ceo')
<!-- Codrops top bar -->
<div class="codrops-top">
    <span class="right">
        <a href="{{url('/')}}">HOME</a>
        <a href="#">CONTACT US</a>
    </span>
    <div class="clr"></div>
</div><!--/ Codrops top bar -->
<div class="container">
@include('public/shared/nav')

    </div>
@endsection