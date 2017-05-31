@extends('layouts/public.apphome')
@section('content-home')
<ul class="cb-slideshow">
    <li><span>Image 01</span><div><h1>test</h1><h3>aku h3</h3></div></li>
    <li><span>Image 02</span><div><h3>com·po·sure</h3></div></li>
    <li><span>Image 03</span><div><h3>e·qua·nim·i·ty</h3></div></li>
    <li><span>Image 04</span><div><h3>bal·ance</h3></div></li>
    <li><span>Image 05</span><div><h3>qui·e·tude</h3></div></li>
    <li><span>Image 06</span><div><h3>re·lax·a·tion</h3></div></li>
</ul>
<div class="container">
    <!-- Codrops top bar -->
    <div class="codrops-top">
        <span class="right">
            <a href="http://www.flickr.com/photos/markjsebastian/" target="_blank">Photography by Mark Sebastian</a>
            <a href="http://creativecommons.org/licenses/by-sa/2.0/deed.en" target="_blank">CC BY-SA 2.0</a>
            <a href="http://tympanus.net/codrops/2012/01/02/fullscreen-background-image-slideshow-with-css3/">
                <strong>Back to the Codrops Article</strong>
            </a>
        </span>
        <div class="clr"></div>
    </div><!--/ Codrops top bar -->
    <header>
        <h1>ChangShin <span>Indonesia</span></h1>
        <h2>Jl. Gintung kerta, Klari - Karawang Indonesia</h2>

    </header>

</div>

<div id="content">
    <a class="back" href="http://tympanus.net/codrops/2010/04/29/awesome-bubble-navigation-with-jquery"></a>
    <div class="title"></div>

    <div class="navigation" id="nav">
        <div class="item user">
            <img src="assets/public/custom/nav/images/bg_user.png" alt="" width="199" height="199" class="circle"/>
            <a href="#" class="icon"></a>
            <h2>User</h2>
            <ul>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Properties</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Properties</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Properties</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Properties</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Properties</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Properties</a></li>
                <li><a href="#">Privacy</a></li>
            </ul>
        </div>
        <div class="item home">
            <img src="assets/public/custom/nav/images/bg_home.png" alt="" width="199" height="199" class="circle"/>
            <a href="#" class="icon"></a>
            <h2>Home</h2>
            <ul>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="item shop">
            <img src="assets/public/custom/nav/images/bg_shop.png" alt="" width="199" height="199" class="circle"/>
            <a href="#" class="icon"></a>
            <h2>Shop</h2>
            <ul>
                <li><a href="#">Catalogue</a></li>
                <li><a href="#">Orders</a></li>
                <li><a href="#">Offers</a></li>
            </ul>
        </div>
        <div class="item camera">
            <img src="assets/public/custom/nav/images/bg_camera.png" alt="" width="199" height="199" class="circle"/>
            <a href="#" class="icon"></a>
            <h2>Photos</h2>
            <ul>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Prints</a></li>
                <li><a href="#">Submit</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Prints</a></li>
                <li><a href="#">Submit</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Prints</a></li>
                <li><a href="#">Submit</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Prints</a></li>
                <li><a href="#">Submit</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Prints</a></li>
                <li><a href="#">Submit</a></li>
            </ul>
        </div>
        <div class="item fav">
            <img src="assets/public/custom/nav/images/bg_fav.png" alt="" width="199" height="199" class="circle"/>
            <a href="#" class="icon"></a>
            <h2>Love</h2>
            <ul>
                <li><a href="#">Social</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">Comments</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection