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
    <section class="testimonial-section pt-125 rpt-85 pb-125 rpb-85">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonial-left-content rel z-1 rmb-50 wow fadeInUp delay-0-2s">
                        <div class="section-title mt-10 mb-30">
                            <span class="sub-title mb-15">Testimonial</span>
                            <h2>Trusted By More <span>then 10k</span> clients</h2>
                        </div>
                        <div class="slider-arrow-btns">
                            <button class="testimonial-prev"><i class="fas fa-long-arrow-alt-left"></i></button>
                            <button class="testimonial-next"><i class="fas fa-long-arrow-alt-right"></i></button>
                        </div>
                        <img class="rectangle-shape" src="assets/images/shapes/rectangle.png" alt="Shape">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item wow fadeInUp delay-0-4s">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab</p>
                            <div class="testimonial-author">
                                <div class="image">
                                    <img src="assets/images/testimonials/author1.jpg" alt="Testimonial">
                                </div>
                                <div class="content">
                                    <h5>Al Mahmud</h5>
                                    <span class="designation">UI - Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item wow fadeInUp delay-0-6s">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab</p>
                            <div class="testimonial-author">
                                <div class="image">
                                    <img src="assets/images/testimonials/author2.jpg" alt="Testimonial">
                                </div>
                                <div class="content">
                                    <h5>Michelle Obama</h5>
                                    <span class="designation">Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item wow fadeInUp delay-0-8s">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab</p>
                            <div class="testimonial-author">
                                <div class="image">
                                    <img src="assets/images/testimonials/author1.jpg" alt="Testimonial">
                                </div>
                                <div class="content">
                                    <h5>Al Mahmud</h5>
                                    <span class="designation">UI - Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab</p>
                            <div class="testimonial-author">
                                <div class="image">
                                    <img src="assets/images/testimonials/author2.jpg" alt="Testimonial">
                                </div>
                                <div class="content">
                                    <h5>Michelle Obama</h5>
                                    <span class="designation">Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->
@endsection
