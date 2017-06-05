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
        <a href="{{url('/')}}">HOME</a>
        <a href="#">CONTACT US</a>
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
    <nav class="navbar transparent navbar-default" id="navcolor">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}" id="color-navtext">Logo CSI</a>
        </div>

        <div class="collapse navbar-collapse js-navbar-collapse">

            <ul class="nav navbar-nav">
                <li>
                    <a href="{{url('/')}}" id="color-navtext">Introduction CSI</a>
                </li>
            </ul>

            <ul class="nav navbar-nav">
                <li class="dropdown mega-dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="color-navtext">Sustainability <span class="glyphicon glyphicon-chevron-down pull-right"></span></a>

                    <ul class="dropdown-menu mega-dropdown-menu row" id="navcolor">
                        <!--<li class="col-sm-3">
                           <ul>
                            <li class="dropdown-header">New in Stores</li>
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="item active">
                                  <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                                  <h4><small>Summer dress floral prints</small></h4>
                                  <button class="btn btn-primary" type="button">49,99 €</button>
                                  <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                              </div> -->
                              <!-- End Item -->
                               <!--  <div class="item">
                                  <a href="#"><img src="http://placehold.it/254x150/ef5e55/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                                  <h4><small>Gold sandals with shiny touch</small></h4>
                                  <button class="btn btn-primary" type="button">9,99 €</button>
                                  <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                              </div> -->
                              <!-- End Item -->
                                <!-- <div class="item">
                                  <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                                  <h4><small>Denin jacket stamped</small></h4>
                                  <button class="btn btn-primary" type="button">49,99 €</button>
                                  <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                              </div> -->
                              <!-- End Item -->
                              <!-- </div> -->
                              <!-- End Carousel Inner -->
                              <!--  </div> -->
                              <!-- /.carousel -->
                            <!-- <li class="divider"></li>
                            <li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                          </ul>
                      </li> -->
                      <li class="col-sm-3">
                          <ul>
                            <li class="dropdown-header">ES</li>
                            <li><a href="#" style="color: white">ES North start goal</a></li>
                            <li><a href="#" style="color: white">Company Vision & Mission</a></li>
                            <li><a href="#" style="color: white">Member PT.CSI</a></li>
                            <li><a href="#" style="color: white">Hazardous Waste Management</a></li>
                            <li><a href="#" style="color: white">Annual Target</a></li>
                            <li><a href="#" style="color: white">Strategic Plan 3-5 years</a></li>
                            <li><a href="#" style="color: white">Employee's Contribution</a></li>
                            <li><a href="#" style="color: white">CV, TNA, IDP of ES Team</a></li>
                            <li><a href="#" style="color: white">ES Technology and Inovation</a></li>
                            <li><a href="#" style="color: white">Engagement with supplier</a></li>
                            <li><a href="#" style="color: white">Enviromental Aspect Inventory</a></li>
                            <li><a href="#" style="color: white">OTP</a></li>
                            <li><a href="#" style="color: white">ES Green Team</a></li>
                        </ul>
                        </li>
                        <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">HS</li>
                            <li><a href="#" style="color: white">Near miss program</a></li>
                            <li><a href="#" style="color: white">HS Vision</a></li>   
                            <li><a href="#" style="color: white">HS Goal</a></li>
                            <li><a href="#" style="color: white">Strategic Plan</a></li> 
                            <li><a href="#" style="color: white">CSR Related with HS</a></li>
                            <li><a href="#" style="color: white">Safety Kaizen</a></li>
                            <li><a href="#" style="color: white">HS Agent</a></li>
                            <li><a href="#" style="color: white">Manufacture Modernization</a></li>    

                        </ul>
                        </li>
                        <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">HSE</li>
                            <li><a href="#" style="color: white">Clinic Visit</a></li>
                            <li><a href="#" style="color: white">MCU Scedule</a></li>
                            <li><a href="#" style="color: white">Accident Report</a></li>
                            <li>
                             <a href="#pregnant" class="dropdown-toggle" data-toggle="collapse" data-parent="#MainMenu" id="color-navtext">Pregnant Women <span class="glyphicon glyphicon-chevron-down pull-right"></span></a> 
                             <div class="collapse" id="pregnant">
                                 <a href="#" style="color: white"><p>Acc, not acc job</p></a>
                                 <a href="#" style="color: white"><p>Nutrition Training</p></a>
                                 <a href="#" style="color: white"><p>Pregnant Women Exercise</p></a>
                             </div>
                         </li>
                     </ul>
                        </li>
                        <li class="col-sm-3">
                    <ul>
                        <li class="dropdown-header">EC</li>
                        <li><a href="#" style="color: white">Energy Used/plant</a></li>
                        <div class="divider"></div>
                        <li class="dropdown-header">Labor</li>
                        <li><a href="#" style="color: white">H&E Case</a></li>

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

            <ul class="nav navbar-nav">
                <li>
                    <a href="{{url('/')}}" id="color-navtext">Career</a>
                </li>
            </ul>

        </div>

    <!-- /.nav-collapse -->
    </nav>
    <img src="assets/public/custom/nav/title.png" class="img-responsive" id="title">
</div>

@endsection