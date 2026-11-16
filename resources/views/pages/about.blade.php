@extends('layouts.app')

@section('title', 'About Us - KRISHNA PACKS')

@section('content')
         <!--Inner Header Start-->
         <section class="wf100 p100 inner-header">
            <div class="container">
            </div>
         </section><br><br><br>&nbsp;
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
                        <p><strong>We are wholesalers and suppliers of 100% compostable/biodegradable products and raw materials, which is the best substitute to Carry Bags, Garment Bags, Shopping Bags, Garbage Bags, Binliners, Paper Cups, Paper Plates, Cutlery, etc...</strong></p>
                        <p><strong>Our products are made from Natural Starch, Vegetable Oil Derivatives and Vegetable Waste. These products are non-toxic to our environment, animals and plants. Our products contains no conventional plastics.</strong></p>
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
         <!--About Section End-->
@endsection
