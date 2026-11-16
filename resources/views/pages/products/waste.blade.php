@extends('layouts.app')

@section('title', 'Zero-Waste Solutions - KRISHNA PACKS')

@section('content')
         <!--Inner Header Start-->
         <section class="wf100 p100 inner-header" style="margin-bottom:40px;">
            <div class="container">
            </div>
         </section>
         <!--Inner Header End-->
         <section class="p80">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6">
                     <h2>Curious how Krishna Packs Certified Compostable Products can enhance your organics diversion or zero-waste efforts?</h2>
                     <p>At Krishna Packs, we pride our selves in supporting our clients beyond our products.  We’re experts when it comes to organics diversion and zero-waste, and our team is here to ensure your success.  We offer unique online tools, collection and sort signs targeted marketing support, and more!</p>
                  </div>
                  <div class="col-lg-6">
                     <img src="{{ asset('images/garbage1.jpg') }}" style="margin:50px auto;display:block;" alt="">
                  </div>
               </div>
            </div>
         </section>
         <section class="p80" style="background-image:url('{{ asset('images/back.jpg') }}');background-size:cover;background-position:center;padding-top:50px;height:500px">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="text" style="margin-top:50px">
                        <strong style="color:black">Our Commitment to Sustainability</strong>
                        <h6>At KRISHNA PACKS we strive to make the world a better place.</h6>
                        <p style="color:green"> We seek to inspire positive environmental change through actions and products that <br>foster a more sustainable future.  Plastic waste is a global epidemic that impacts us all. <br> Today, Krishna Pack’s global teams are developing innovative alternatives to conventional plastics.<br>  Our innovative biobased and compostable products and formulations are designed<br> with sustainability in mind, giving YOU the power to make a difference.</p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
@endsection
