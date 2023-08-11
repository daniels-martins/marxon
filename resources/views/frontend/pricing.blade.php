@extends('layout.website')

@section('content')
    <!-- Pricing Section Start -->
    <section class="pricing-section pt-135 rpt-95 mb-180 rel z-0 bg-lighter" id="pricing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center mb-60">
                        <span class="sub-title mb-15">Our Pricing plan</span>
                        <h2>We offer the <span>best pricing</span> plan for you</h2>
                    </div>
                </div>
            </div>
            {{-- first three --}}
            <div class="row justify-content-center mb-110 rmb-70">
                @include('partials.pricing.basic')
                @include('partials.pricing.standard')
                @include('partials.pricing.premium')
            </div>

            {{-- last three --}}
            <div class="row justify-content-center mb-110 rmb-70">
                {{-- deluxe --}}
                @include('partials.pricing.deluxe')
                @include('partials.pricing.enterprise')
                @include('partials.pricing.ultimate')
            </div>
        </div>
        <img class="triangle-shape" src="assets/images/shapes/triangle.png" alt="Shape">
        <img class="half-circle-shape" src="assets/images/shapes/half-circle.png" alt="Shape">
    </section>
    <!-- Pricing Section End -->
@endsection
