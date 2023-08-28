@extends('layout.website')
@section('content')
    <!-- Services Section Start -->
    <section class="services-section pt-135 rpt-95 pb-140 rpb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-8">
                    <div class="section-title text-center mb-65">
                        <span class="sub-title mb-15">Popular Services</span>
                        <h2>Dedicated <span>to service</span> our customers</h2>
                    </div>
                </div>
            </div>
            <div class="services-wrap bg-lighter br-10">
                <div class="row no-gap">
                    @foreach ($services as $service)
                        <div class="col-xl-3 col-md-6">
                            <div class="service-item wow fadeInUp delay-0-8s">
                                <div class="icon">
                                    <img src="/{{ $service->icon }}" alt="Icon">
                                </div>
                                <h4>{{ $service->title }}</h4>
                                <a href="services.html" class="read-more">Explore <i
                                        class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->


    <!-- Creative Section Start -->
    <section class="creative-area rel z-1 bg-lighter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="creative-content pt-135 rpt-95 pb-120 rpb-55 wow fadeInUp delay-0-2s">
                        <div class="section-title mb-25">
                            <span class="sub-title mb-15">Creative solution</span>
                            <h2>Creative <span>solutions to</span> digital challenges</h2>
                        </div>
                        <p style="text-transform: none;">
                            We optimize your digital strategies, creating responsive designs and engaging mobile experiences
                            that captivate your audience. Trust Marxon Inc. to deliver the creative solutions you need to
                            thrive in the digital age.
                        </p>
                        <ul class="list-style-one mt-30">
                            <li>Modern & Unique Design</li>
                            <li>design usability</li>
                            <li>pixel perfect design</li>
                            <li>Advance responsive UI</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 align-self-end">
                    <div class="creative-image text-lg-right wow fadeInUp delay-0-4s">
                        <img src="assets/images/about/creative.png" alt="Creative">
                    </div>
                </div>
            </div>
        </div>
        <img class="circle-shape" src="assets/images/shapes/circle.png" alt="Shape">
        <img class="triangle-shape" src="assets/images/shapes/triangle.png" alt="Shape">
        <img class="half-circle-shape" src="assets/images/shapes/half-circle.png" alt="Shape">
    </section>
    <!-- Creative Section End -->


    <!-- Testimonial Section Start -->
        @include('partials.welcome.testimonials')
    <!-- Testimonial Section End -->
@endsection
