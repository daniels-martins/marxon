<!-- Pricing Section Start -->
<section class="pricing-section pt-135 rpt-95 mb-180 rel z-0 bg-lighter" id="pricing">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center mb-60">
                    <span class="sub-title mb-15">Our Pricing plan</span>
                    <h2>We offer the <span>best pricing</span> plans for you</h2>
                </div>
            </div>
        </div>
        <h4> <a href="{{ route('pricing') }}" style="text-decoration:underline">View all our Pricing Plans &nbsp;
                &rArr;</a></h4>
        <div class="row justify-content-center mb-110 rmb-70">
            @include('partials.pricing.basic')
            @include('partials.pricing.standard')
            @include('partials.pricing.premium')
            
            <h4> <a href="{{ route('pricing') }}" style="text-decoration:underline">View all our Pricing Plans &nbsp;
                &rArr;</a></h4>
                

        </div>
        <div class="video-wrap bgs-cover p-100 br-10"
            style="background-image: url(assets/images/background/video-bg.jpg);">
            <div class="section-title text-center text-white mb-100 wow fadeInUp delay-0-2s">
                <span class="sub-title mb-15">Grow Your Business</span>
                <h2>Solving varying problems with technological <span>solutions.</span></h2>
            </div>
            <a href="https://www.youtube.com/watch?v=9Y7ma241N8k" class="mfp-iframe video-play"><i
                    class="fas fa-play"></i></a>
        </div>
    </div>
    <img class="triangle-shape" src="assets/images/shapes/triangle.png" alt="Shape">
    <img class="half-circle-shape" src="assets/images/shapes/half-circle.png" alt="Shape">
</section>
<!-- Pricing Section End -->
