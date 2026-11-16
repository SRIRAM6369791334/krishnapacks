<!doctype html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="{{ asset('images/favicon.png') }}">
      <title>@yield('title', 'KRISHNA PACKS')</title>
      <!-- CSS FILES START -->
      <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
      <link href="{{ asset('css/color.css') }}" rel="stylesheet">
      <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
      <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet">
      <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <!-- CSS FILES End -->
      <style>
         #home-slider.owl-theme .owl-nav { pointer-events: none !important; z-index: 99 !important; }
         #home-slider.owl-theme .owl-nav [class*=owl-] { pointer-events: auto !important; }
         .slider-caption { z-index: 99 !important; }
         .slider-caption a { position: relative !important; z-index: 100 !important; cursor: pointer !important; }
      </style>
   </head>
   <body>
      <div class="wrapper home1">
         <!--Header Start-->
         <header class="header-style-1">
            <nav class="navbar navbar-expand-lg">
               <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('images/01 krishna packs logo-01.png') }}" alt="" style="width:200px;height:53px;margin-right:10px"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="fas fa-bars"></i> </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item"> <a class="nav-link" href="{{ route('home') }}">HOME</a> </li>
                     <li class="nav-item"> <a class="nav-link" href="{{ route('about') }}">ABOUT US</a> </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> PRODUCTS</a>
                        <ul class="dropdown-menu" style="width:250px">
                           <li><a href="{{ route('products.film') }}">Film Extrusion</a></li>
                           <li><a href="{{ route('products.injection') }}">Injection Molding</a></li>
                           <li><a href="{{ route('products.extrusion') }}">Extrusion Coating</a></li>
                           <li><a href="{{ route('products.waste') }}">Zero-Waste Solutions</a></li>
                        </ul>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link " href="{{ route('composting') }}" role="button">COMPOSTING</a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link " href="{{ route('contact') }}" role="button"> CONTACT US </a>
                     </li>
                  </ul>
               </div>
            </nav>
         </header>
         <!--Header End-->

         @yield('content')

         <!--Footer Start-->
         <footer class="footer-style-2">
            <div class="footer-top wf100">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-4">
                        <div class="footer-widget">
                           <h5><img src="{{ asset('images/01 krishna packs logo-03.png') }}" alt="" style="width:150px;height:150px;margin-right:10px"></h5>
                           <p style="text-color:blue">Krishna Packs was started to bring quality and economical solution to the problem of petroleum and plastic based products. Our mission is to replace all disposable plastics with high quality, innovative, renewable based bioplastics which is economical and meets the compostability standards.</p>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <!--Footer Widget Start-->
                        <div class="footer-widget">
                           <h5>Products</h5>
                           <ul class="ftags">
                              <li><a href="{{ route('products.film') }}">Film Extrusion</a></li>
                              <li><a href="{{ route('products.injection') }}">Injection Molding</a></li>
                              <li><a href="{{ route('products.extrusion') }}">Extrusion Coating</a></li>
                              <li><a href="{{ route('products.waste') }}">Zero-Waste Solutions</a></li>
                           </ul>
                        </div>
                        <!--Footer Widget End-->
                     </div>
                     <div class="col-lg-4">
                        <!--Footer Widget Start-->
                        <div class="footer-widget">
                           <h5>Menu</h5>
                           <ul class="lastest-products">
                              <li><a href="{{ route('home') }}">Home</a></li>
                              <li><a href="{{ route('about') }}">About Us</a></li>
                              <li><a href="{{ route('composting') }}">Composting</a></li>
                              <li><a href="{{ route('contact') }}">Contact Us</a></li>
                           </ul>
                        </div>
                        <!--Footer Widget End-->
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer-newsletter wf100">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12" style="text-align:center">
                        <span>Copyright © 2020 <a href="https://www.saitechnosolutions.com/" target="_blank">Sai Techno Solutions</a>. All Right Reserved.</span>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!--Footer End-->
         <nav class="sidenav">
            <ul class="main">
               <li><a href="{{ route('home') }}">Home</a></li>
               <li><a href="{{ route('about') }}">About Us</a></li>
               <li><a href="{{ route('composting') }}">Composting</a></li>
               <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
         </nav>
         <div class="overlay"></div>
      </div>
      <!-- JS Files Start -->
      <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
      <script src="{{ asset('js/jquery-migrate-1.4.1.min.js') }}"></script>
      <script src="{{ asset('js/popper.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
      <script src="{{ asset('js/isotope.min.js') }}"></script>
      <script src="{{ asset('js/custom.js') }}"></script>
   </body>
</html>
