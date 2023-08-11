 <!-- Page Banner Start -->
 <section class="page-banner rel z-1 bg-lighter text-center py-110 rpy-90"
     style="background-image: url(assets/images/background/banner-bg.png);">
     <div class="container">
         <div class="banner-inner rel">
             <h2 class="page-title wow fadeInUp delay-0-2s">{{ presentRouteName() }}</h2>
             <nav aria-label="breadcrumb">
                 <ol class="breadcrumb wow fadeInUp delay-0-4s">
                     <li class="breadcrumb-item"><a href="{{route('welcome')}}">Home</a></li>
                     <li class="breadcrumb-item active">{{ presentRouteName() }}</li>
                 </ol>
             </nav>
         </div>
     </div>
     <img class="triangle-shape" src="/assets/images/shapes/triangle.png" alt="Shape">
     <img class="half-circle-shape" src="/assets/images/shapes/half-circle.png" alt="Shape">
 </section>
 <!-- Page Banner End -->
