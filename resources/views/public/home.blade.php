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
 <!--    <header>
        <h1>ChangShin <span>Indonesia</span></h1>
        <h2>Jl. Gintung kerta, Klari - Karawang Indonesia</h2>

    </header> -->


<!-- megamenu -->
<!-- <div class="title"></div> -->


<div class="container">
  <nav class="navbar transparent navbar-default">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">MegaMenu</a>
    </div>


    <div class="collapse navbar-collapse js-navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="dropdown mega-dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Collection <span class="glyphicon glyphicon-chevron-down pull-right"></span></a>

          <ul class="dropdown-menu mega-dropdown-menu row">
            <li class="col-sm-3">
              <ul>
                <li class="dropdown-header">New in Stores</li>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="item active">
                      <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                      <h4><small>Summer dress floral prints</small></h4>
                      <button class="btn btn-primary" type="button">49,99 €</button>
                      <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                    </div>
                    <!-- End Item -->
                    <div class="item">
                      <a href="#"><img src="http://placehold.it/254x150/ef5e55/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                      <h4><small>Gold sandals with shiny touch</small></h4>
                      <button class="btn btn-primary" type="button">9,99 €</button>
                      <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                    </div>
                    <!-- End Item -->
                    <div class="item">
                      <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                      <h4><small>Denin jacket stamped</small></h4>
                      <button class="btn btn-primary" type="button">49,99 €</button>
                      <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                    </div>
                    <!-- End Item -->
                  </div>
                  <!-- End Carousel Inner -->
                </div>
                <!-- /.carousel -->
                <li class="divider"></li>
                <li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
              </ul>
            </li>
            <li class="col-sm-3">
              <ul>
                <li class="dropdown-header">Dresses</li>
                <li><a href="#">Unique Features</a></li>
                <li><a href="#">Image Responsive</a></li>
                <li><a href="#">Auto Carousel</a></li>
                <li><a href="#">Newsletter Form</a></li>
                <li><a href="#">Four columns</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Tops</li>
                <li><a href="#">Good Typography</a></li>
              </ul>
            </li>
            <li class="col-sm-3">
              <ul>
                <li class="dropdown-header">Jackets</li>
                <li><a href="#">Easy to customize</a></li>
                <li><a href="#">Glyphicons</a></li>
                <li><a href="#">Pull Right Elements</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Pants</li>
                <li><a href="#">Coloured Headers</a></li>
                <li><a href="#">Primary Buttons & Default</a></li>
                <li><a href="#">Calls to action</a></li>
              </ul>
            </li>
            <li class="col-sm-3">
              <ul>
                <li class="dropdown-header">Accessories</li>
                <li><a href="#">Default Navbar</a></li>
                <li><a href="#">Lovely Fonts</a></li>
                <li><a href="#">Responsive Dropdown </a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Newsletter</li>
                <form class="form" role="form">
                  <div class="form-group">
                    <label class="sr-only" for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                  </div>
                  <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                </form>
              </ul>
            </li>
          </ul>

        </li>
      </ul>

    </div>
    <!-- /.nav-collapse -->
  </nav>
  <img src="assets/public/custom/nav/title.png" class="img-responsive" id="title">
</div>



<!-- <div id="content">
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
</div> -->
@endsection