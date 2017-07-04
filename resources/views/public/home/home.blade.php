@extends('layouts/public.apphome')
@section('content-home')
<ul class="cb-slideshow">
    <li><span>Image 01</span><div><h3>aku h3</h3></div></li>
    <li><span>Image 02</span><div><h3>com·po·sure</h3></div></li>
    <li><span>Image 03</span><div><h3>e·qua·nim·i·ty</h3></div></li>
    <li><span>Image 04</span><div><h3>bal·ance</h3></div></li>
    <li><span>Image 05</span><div><h3>qui·e·tude</h3></div></li>
    <li><span>Image 06</span><div><h3>re·lax·a·tion</h3></div></li>
</ul>
<!-- Codrops top bar -->
@include('public/shared/topbar')


<div class="container">
    @include('public/shared/nav')
    <img src="../../../assets/public/custom/nav/title.png" class="img-responsive" id="title">
</div>

@endsection