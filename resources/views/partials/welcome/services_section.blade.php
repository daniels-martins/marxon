 <!-- Services Section Start -->
 <section class="services-section pt-15 rpt-95" id="services">
     <div class="container">
         <div class="row justify-content-between pb-40 rpb-65">
             <div class="col-lg-6">
                 <div class="section-title mb-25 wow fadeInLeft delay-0-2s">
                     <span class="sub-title mb-15">Popular Services</span>
                     <h2>Dedicated <span>to service</span> our customers</h2>
                 </div>
             </div>
             <div class="col-xl-5 col-lg-6">
                 <div class="service-title-content wow fadeInRight delay-0-2s">
                     <p> At Marxon Tech Solutions, we build better and effective websites and applications that will
                         boost your business visibility online, thereby leading more clients to your business on A DAILY
                         BASIS.
                     </p>
                     <a href="{{ route('services') }}" class="view-more mt-25">View All Services <i
                             class="fas fa-long-arrow-alt-right"></i></a>
                 </div>
             </div>
         </div>
         <div class="services-wrap bg-lighter br-10">
             <div class="row no-gap">
                 @php
                     $services = $services->take(6);
                 @endphp
                 {{-- services grid --}}
                 @include('partials/general/services_grid')
                 <div class="col-12 my-25 text-center">
                     <a href="{{ route('services') }}" class="view-more mt-25">
                         View All Services <i class="fas fa-long-arrow-alt-right"></i>
                     </a>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Services Section End -->
