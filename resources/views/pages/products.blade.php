@extends('layouts.app')

@section('title', 'Products - KRISHNA PACKS')

@section('content')
         <!--Inner Header Start-->
         <section class="wf100 p100 inner-header">
            <div class="container">
               <h1>UpNext Events</h1>
               <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#"> Events </a></li>
                  <li><a href="#">Events List</a></li>
               </ul>
            </div>
         </section>
         <!--Inner Header End-->
         <!--Causes Start-->
         <section class="wf100 p80 events">
            <div class="event-list">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-9 col-md-8">
                        <!--Project Box Start-->
                        <div class="pro-list-box">
                           <div class="pro-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img src="{{ asset('images/pl4.jpg') }}" alt=""> </div>
                           <div class="pro-txt">
                              <ul class="event-meta">
                                 <li>17 September, 2018</li>
                                 <li>09:30 am - 03:00 pm</li>
                              </ul>
                              <h4> <a href="#">Save Endagered Wild Animals</a> </h4>
                              <p>The environment includes; the surface of the earth, natural re­sources, land and water, mountains and plains.</p>
                              <p class="eloc"><i class="fas fa-map-marker-alt"></i> 150 / G iii, Newyork, USA</p>
                              <a href="#" class="partibtn">Participate</a>
                           </div>
                        </div>
                        <!--Project Box End-->
                        <!--Project Box Start-->
                        <div class="pro-list-box">
                           <div class="pro-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img src="{{ asset('images/pl1.jpg') }}" alt=""> </div>
                           <div class="pro-txt">
                              <ul class="event-meta">
                                 <li>17 September, 2018</li>
                                 <li>09:30 am - 03:00 pm</li>
                              </ul>
                              <h4> <a href="#">Etiam malesuada velit</a> </h4>
                              <p>The environment includes; the surface of the earth, natural re­sources, land and water, mountains and plains.</p>
                              <p class="eloc"><i class="fas fa-map-marker-alt"></i> 150 / G iii, Newyork, USA</p>
                              <a href="#" class="partibtn">Participate</a>
                           </div>
                        </div>
                        <!--Project Box End-->
                        <!--Project Box Start-->
                        <div class="pro-list-box">
                           <div class="pro-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img src="{{ asset('images/pl2.jpg') }}" alt=""> </div>
                           <div class="pro-txt">
                              <ul class="event-meta">
                                 <li>17 September, 2018</li>
                                 <li>09:30 am - 03:00 pm</li>
                              </ul>
                              <h4> <a href="#">Fusce volutpat arcu at mattis </a> </h4>
                              <p>The environment includes; the surface of the earth, natural re­sources, land and water, mountains and plains.</p>
                              <p class="eloc"><i class="fas fa-map-marker-alt"></i> 150 / G iii, Newyork, USA</p>
                              <a href="#" class="partibtn">Participate</a>
                           </div>
                        </div>
                        <!--Project Box End-->
                        <!--Project Box Start-->
                        <div class="pro-list-box">
                           <div class="pro-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img src="{{ asset('images/pl3.jpg') }}" alt=""> </div>
                           <div class="pro-txt">
                              <ul class="event-meta">
                                 <li>17 September, 2018</li>
                                 <li>09:30 am - 03:00 pm</li>
                              </ul>
                              <h4> <a href="#">Aenean semper tellus id</a> </h4>
                              <p>The environment includes; the surface of the earth, natural re­sources, land and water, mountains and plains.</p>
                              <p class="eloc"><i class="fas fa-map-marker-alt"></i> 150 / G iii, Newyork, USA</p>
                              <a href="#" class="partibtn">Participate</a>
                           </div>
                        </div>
                        <!--Project Box End-->
                        <!--Project Box Start-->
                        <div class="pro-list-box">
                           <div class="pro-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img src="{{ asset('images/pl5.jpg') }}" alt=""> </div>
                           <div class="pro-txt">
                              <ul class="event-meta">
                                 <li>17 September, 2018</li>
                                 <li>09:30 am - 03:00 pm</li>
                              </ul>
                              <h4> <a href="#">Save Endagered Wild Animals</a> </h4>
                              <p>The environment includes; the surface of the earth, natural re­sources, land and water, mountains and plains.</p>
                              <p class="eloc"><i class="fas fa-map-marker-alt"></i> 150 / G iii, Newyork, USA</p>
                              <a href="#" class="partibtn">Participate</a>
                           </div>
                        </div>
                        <!--Project Box End-->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="gt-pagination mt20">
                           <nav>
                              <ul class="pagination">
                                 <li class="page-item"> <a class="page-link" href="#" aria-label="Previous"> <i class="fas fa-angle-left"></i> </a> </li>
                                 <li class="page-item"><a class="page-link" href="#">1</a></li>
                                 <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                 <li class="page-item"><a class="page-link" href="#">3</a></li>
                                 <li class="page-item"> <a class="page-link" href="#" aria-label="Next"> <i class="fas fa-angle-right"></i> </a> </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--Causes End-->
@endsection
