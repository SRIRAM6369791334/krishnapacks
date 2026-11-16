@extends('layouts.app')

@section('title', 'Garment Packaging Solutions - KRISHNA PACKS')

@section('content')
         <section id="home-slider" class="owl-carousel owl-theme wf100">
            <div class="item">
               <div class="slider-caption">
                  <div class="container">
                     <strong>Reduce Your Carbon Footprint</strong>
                     <h6>BIOBASED SOLUTIONS FOR SUSTAINABLE RESULTS</h6>
                     <p>Circule™ packaging is manufactured using natural, sustainable feedstocks allowing you to reduce your carbon footprint.</p>
                  </div>
               </div>
               <img src="{{ asset('images/s12.jpg') }}" alt="">
            </div>
            <div class="item">
               <div class="slider-caption">
                  <div class="container">
                     <strong>Total Packaging Solutions</strong>
                     <h6>CUSTOM PACKAGING AND ACCESSORIES.</h6>
                     <p> Circule™ packaging solutions are engineered to reduce your carbon footprint and integrate seamlessly into a circular economy.  All of our products are made from sustainable biobased  feedstocks and are fully compostable.</p>
                  </div>
               </div>
               <img src="{{ asset('images/s12.jpg') }}" alt="">
            </div>
            <div class="item">
               <div class="slider-caption">
                  <div class="container">
                     <strong>Custom Packaging Solutions</strong>
                     <h6>YOUR BRAND, YOUR SUCCESS</h6>
                     <p> Circule™ packaging can be customized to showcase your branding, logos, and messaging.</p>
                  </div>
               </div>
               <img src="{{ asset('images/s12.jpg') }}" alt="">
            </div>
         </section>
         <!--Slider End-->

         <!--Blog Start-->
         <section class="wf100 p80 team">
            <div class="team-details">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="about-txt">
                           <h2>Total Packaging Solutions</h2>
                           <strong>BETTER PACKAGING FOR A SUSTAINABLE FUTURE.
                           </strong>
                           <p>Krishna sustainable garment packaging seamlessly integrates with the principles of a circular economy.  Our biobased and compostable packaging allows you to easily reduce your carbon footprint and meet your sustainability goals!</p>
                           <a class="lm" href="#">Learn More</a>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="about-pic">
                           <div class="pic1">
                              <div id="pic-slider">
                                 <div class="item"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <div class="container" style="border:2px solid black">
            <div class="row">
               <div class="col-lg-12">
                  <div class="bg-image">
                     <strong style="color:black" class="text-center">Our Commitment to Sustainability</strong>
                     <h6>At Natur-Tec® we strive to make the world a better place.</h6>
                     <p style="color:green"> We seek to inspire positive environmental change through actions and products that foster a more sustainable future.  Plastic waste is a global epidemic that impacts us all.  Today, Natur-Tec’s global teams are developing innovative alternatives to conventional plastics.  Our innovative biobased and compostable products and formulations are designed with sustainability in mind, giving YOU the power to make a difference.</p>
                     <h6>Follow #ZeroWaste #WasteLess and #Compost on social media to learn more!

                     </h6>
                  </div>
               </div>
            </div>
         </div>
         <!--Blog End-->
@endsection
