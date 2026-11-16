@extends('layouts.app')

@section('title', 'KRISHNA PACKS')

@section('content')
         <!--Slider Start-->
         <section id="home-slider" class="owl-carousel owl-theme wf100">
            <div class="item">
               <div class="slider-caption">
                  <div class="container">
                     <strong>Welcome to KRISHNA PACKS</strong>
                     <p> We manufacture and supply biodegradable and compostable products</p>
                     <a href="{{ route('contact') }}" class="active">Join us Now</a> <a href="{{ route('about') }}">More About Us</a>
                  </div>
               </div>
               <img src="{{ asset('images/s12.jpg') }}" alt="">
            </div>
            <div class="item">
               <div class="slider-caption">
                  <div class="container">
                     <strong>TAKE CARE OF NATURE</strong>
                     <p>Start Composting and Recycling Today </p>
                     <a href="{{ route('contact') }}" class="active">Join us Now</a> <a href="{{ route('about') }}">More About Us</a>
                  </div>
               </div>
               <img src="{{ asset('images/krishna_banner2.jpg') }}" alt="">
            </div>
            <div class="item">
               <div class="slider-caption">
                  <div class="container">
                     <strong>Biodegradable vs Non Biodegradable</strong>
                     <p> Save planet from Non Biodegradable Products
Use Biodegradable Products </p>
                     <a href="{{ route('contact') }}" class="active">Join us Now</a> <a href="{{ route('about') }}">More About Us</a>
                  </div>
               </div>
               <img src="{{ asset('images/slider32(1).jpg') }}" alt="">
            </div>
            <div class="item">
               <div class="slider-caption">
                  <div class="container">
                     <strong>Compostable Products can support plant life</strong>
                     <p>Compostable plastics are the greenest form of plastic
made from renewable materials</p>
                     <a href="{{ route('contact') }}" class="active">Join us Now</a> <a href="{{ route('about') }}">More About Us</a>
                  </div>
               </div>
               <img src="{{ asset('images/krishna_banner4.jpg') }}" alt="">
            </div>
         </section>
         <!--Slider End-->
         <!--About Section Start-->
         <section class="home-about wf100 p80">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <div class="about-txt">
                        <h2> <span>Krishna Packs</span> is providing the best
                           solution of Eco Environment
                        </h2>
                        <p> <strong>Krishna Packs was started to bring quality and economical solution to the problem of petroleum and plastic based products. Our mission is to replace all disposable plastics with high quality, innovative, renewable based bioplastics which is economical and meets the compostability standards.
</strong> </p>
                        <a class="lm" href="{{ route('about') }}">Learn More</a>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="about-pic">
                        <div class="pic1">
                           <div id="pic-slider" class="owl-carousel owl-theme">
                              <div class="item"><img src="{{ asset('images/plantinbabyhand.jpg') }}" alt="" style="width:336px;height:476px;margin-right:10px"></div>
                           </div>
                        </div>
                        <div class="pic2"><img src="{{ asset('images/newaboutdown.jpg') }}" alt="" style="width:279px;height:380px;margin-right:10px"></div>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <section class="wf100 p80 pt-5">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12 text-center p80">
                     <h4>CERTIFICATIONS</h4>
                  </div>
                  <div class="col-lg-4 text-center p80">
                     <img src="{{ asset('images/pdf/logo2.png') }}" style="width:150px" alt="">
                     <h5>TAMIL NADU POLLUTION<br> CONTROL CERTIFICATION (AIR)</h5>
                     <p><a href="{{ asset('images/pdf/TNPCB-AIR.pdf') }}" target="_blank">View</a></p>
                  </div>
                  <div class="col-lg-4 text-center p80">
                     <img src="{{ asset('images/pdf/logo2.png') }}" style="width:150px" alt="">
                     <h5>TAMIL NADU POLLUTION<br> CONTROL CERTIFICATION (WATER)</h5>
                     <p><a href="{{ asset('images/pdf/TNPCB-WATER.pdf') }}" target="_blank">View</a></p>
                  </div>
                  <div class="col-lg-4 text-center p80">
                     <img src="{{ asset('images/pdf/logo1.png') }}" style="width:150px" alt="">
                     <h5>CIPET TESTING CERTIFICATION</h5>
                     <p><a href="{{ asset('images/pdf/CIPET FINAL TESTING REPORT.pdf') }}" target="_blank">VIEW</a></p>
                  </div>
                  <div class="col-lg-4 text-center p80">
                     <img src="{{ asset('images/pdf/CPCB.jpg') }}" style="width:150px" alt="">
                     <h5>CPCB PROVISIONAL CERTIFICATION</h5>
                     <p><a href="{{ asset('images/pdf/CPCB PROVISIONAL CERTIFICATE.pdf') }}" target="_blank">View</a></p>
                  </div>
                  <div class="col-lg-4 text-center p80">
                     <img src="{{ asset('images/pdf/logo2.png') }}" style="width:150px" alt="">
                     <h5>POLLUTION PWM CERTIFICATION</h5>
                     <p><a href="{{ asset('images/pdf/PWMAuthorisationOrderWE.pdf') }}" target="_blank">View</a></p>
                  </div>
                  <div class="col-lg-4 text-center p80">
                     <img src="{{ asset('images/pdf/logo2.png') }}" style="width:150px" alt="">
                     <h5>EPR REGISTRATION CERTIFICATION</h5>
                     <p><a href="{{ asset('images/epr.pdf') }}" target="_blank">View</a></p>
                  </div>
               </div>
            </div>
         </section>
         <!--About Section End-->
         <!--Services Slider Start-->
         <section class="home-services wf100 p80bottom">
            <div class="row">
               <!--Services Box Start-->
               <div class="ser-col">
                  <div class="ser-box">
                     <div class="ser-thumb">
                        <a href="{{ route('products.film') }}"><i class="fas fa-link"></i></a>
                        <img src="{{ asset('images/product1  (1).jpg') }}" alt="">
                     </div>
                     <div class="ser-txt">
                        <h4> Film Extrusion </h4>
                        <a href="{{ route('products.film') }}"><span class="aicon"><i class="fas fa-arrow-right"></i></span></a>
                     </div>
                  </div>
               </div>
               <!--Services Box End-->
               <!--Services Box Start-->
               <div class="ser-col">
                  <div class="ser-box">
                     <div class="ser-thumb"><a href="{{ route('products.injection') }}"><i class="fas fa-link"></i></a><img src="{{ asset('images/product1  (2).jpg') }}" alt=""></div>
                     <div class="ser-txt">
                        <h4> Injection Molding </h4>
                        <a href="{{ route('products.injection') }}"><span class="aicon"><i class="fas fa-arrow-right"></i></span></a>
                     </div>
                  </div>
               </div>
               <!--Services Box End-->
               <!--Services Box Start-->
               <div class="ser-col">
                  <div class="ser-box">
                     <div class="ser-thumb"><a href="{{ route('products.extrusion') }}"><i class="fas fa-link"></i></a><img src="{{ asset('images/product1  (3).jpg') }}" alt=""></div>
                     <div class="ser-txt">
                        <h4>Extrusion Coating </h4>
                        <a href="{{ route('products.extrusion') }}"><span class="aicon"><i class="fas fa-arrow-right"></i></span></a>
                     </div>
                  </div>
               </div>
               <!--Services Box End-->
               <!--Services Box Start-->
               <div class="ser-col">
                  <div class="ser-box">
                     <div class="ser-thumb"><a href="{{ route('products.waste') }}"><i class="fas fa-link"></i></a><img src="{{ asset('images/product1  (4).jpg') }}" alt=""></div>
                     <div class="ser-txt">
                        <h4> Zero-Waste Solutions </h4>
                        <a href="{{ route('products.waste') }}"><span class="aicon"><i class="fas fa-arrow-right"></i></span></a>
                     </div>
                  </div>
               </div>
               <!--Services Box End-->
            </div>
         </section>
         <!--Services Slider End-->

         <!--Current Promises Section Start-->
         <section class="promises wf100 p80">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="pro-title">
                        <h2>Start Composting &amp; Recycling Now</h2>
                        <h3>We manufacture and supply Biodegradable and Compostable Products.</h3>
                     </div>
                     <div class="load-more text-center w-100"> <a href="{{ route('contact') }}" class="lm">CONTACT US NOW</a> </div>
                  </div>
               </div>
            </div>
         </section>
         <!--Current Promises Section End-->
@endsection
