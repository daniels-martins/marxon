<div class="subscribe-wrap text-white bg-blue br-10">
    <div class="row align-itmes-center">
        <div class="col-lg-6">
            <div class="section-title wow fadeInLeft delay-0-2s">
                <h3> Sign up for our email list and be the first to know about our latest offers </h3>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="subscribe-form mt-10 wow fadeInRight delay-0-2s">
                <x-input-error-single  fieldname="email" />
                <form action="{{ route('newsletter.subscribe') }}" method="POST">@csrf 
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email Address" required>
                    <button type="submit">Subscribe Now</button>
                </form>

                <span>Trusted By 50+ Clients</span>
                <img src="/assets/images/shapes/hand.png" alt="hand" class="hand">
            </div>
        </div>
    </div>
</div>
