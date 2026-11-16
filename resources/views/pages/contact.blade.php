@extends('layouts.app')

@section('title', 'Contact Us - KRISHNA PACKS')

@section('content')
         <!--Inner Header Start-->
         <section class="wf100 p100 inner-header">
            <div class="container">
            </div>
         </section><br><br><br>&nbsp;
         <!--Contact Start-->
         <section class="contact-page wf100 p80">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 offset-md-3">
                     <div class="contact-form">
                        <h3 style="text-align:center">Feel Free to Contact us</h3>
                        @if(session('success'))
                           <div class="alert alert-success" role="alert">
                              {{ session('success') }}
                           </div>
                        @endif
                        @if($errors->any())
                           <div class="alert alert-danger" role="alert">
                              <ul class="mb-0 pl-3">
                                 @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                 @endforeach
                              </ul>
                           </div>
                        @endif
                        <form action="{{ route('contact.submit') }}" method="POST">
                           @csrf
                           <ul class="cform">
                              <li class="half pr-15">
                                 <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name" name="name" value="{{ old('name') }}" required>
                                 @error('name')
                                    <small class="text-danger d-block mt-1">{{ $message }}</small>
                                 @enderror
                              </li>
                              <li class="half pl-15">
                                 <input type="email" id="email" name="email" placeholder="Email Id" class="form-control @error('email') is-invalid @enderror" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" value="{{ old('email') }}" autocomplete="off" required>
                                 @error('email')
                                    <small class="text-danger d-block mt-1">{{ $message }}</small>
                                 @enderror
                              </li>
                              <li class="full">
                                 <input type="tel" id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone Number" pattern="[6789][0-9]{9}" value="{{ old('phone') }}" autocomplete="off" required>
                                 @error('phone')
                                    <small class="text-danger d-block mt-1">{{ $message }}</small>
                                 @enderror
                              </li>
                              <li class="full">
                                 <textarea class="textarea-control @error('message') is-invalid @enderror" name="message" placeholder="Message" required>{{ old('message') }}</textarea>
                                 @error('message')
                                    <small class="text-danger d-block mt-1">{{ $message }}</small>
                                 @enderror
                              </li>
                              <li class="full">
                                 <input type="submit" name="submit" value="Contact us" class="fsubmit">
                              </li>
                           </ul>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container contact-info">
               <div class="row">
                  <div class="col-md-12">
                     <h3>Reach Us</h3>
                  </div>
                  <!--Contact Info Start-->
                  <div class="col-md-4">
                     <div class="c-info">
                        <h6>Address:</h6>
                        <p>KRISHNA PACKS,</p>
                        <p>No: 318, School Road, Ayanambakkam,</p>
                        <p>Ambattur, Thiruvallur District,</p>
                        <p>Chennai, Tamilnadu, India - 600095.</p>
                     </div>
                  </div>
                  <!--Contact Info End-->
                  <!--Contact Info Start-->
                  <div class="col-md-4">
                     <div class="c-info" style="padding-bottom:80px;">
                        <h6>Contact:</h6>
                        <p><strong>Phone : </strong><a href="tel:+91 9952178999">+91-9952178999</a></p>
                        <p><strong>Phone : </strong><a href="tel:+91 9543742999">+91-9543742999</a></p>
                     </div>
                  </div>
                  <!--Contact Info End-->
                  <!--Contact Info Start-->
                  <div class="col-md-4">
                     <div class="c-info" style="padding-bottom:105px;">
                        <h6>For More Information:</h6>
                        <p><strong>Email : </strong> <a href="mailto:krishnatex14@gmail.com">krishnatex14@gmail.com</a></p>
                     </div>
                  </div>
                  <!--Contact Info End-->
               </div>
            </div>
         </section>
         <!--Contact End-->
@endsection
