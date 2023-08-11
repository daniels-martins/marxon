@extends('layout.website')

@section('content')
    <!-- About Section Start -->
    <section class="about-section rel z-1 pt-140 rpt-100 pb-140 rpb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-image rmb-65 wow fadeInLeft delay-0-2s">
                        <img src="assets/images/about/about-page.png" alt="About">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-page-content wow fadeInRight delay-0-2s">
                        <div class="section-title mb-25">
                            <span class="sub-title mb-15">Company About Us</span>
                            <h2>Development success through <span>creative web</span> design</h2>
                        </div>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium,</p>
                        <p>totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                            vitae dicta sunt explicabo. Nemo enim ipsam </p>
                        <a href="about.html" class="theme-btn mt-30">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    @include('partials.vision_and_mission')

    @include('partials.team_section')

    @include('partials.faq_section')
@endsection
