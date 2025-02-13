<!-- Footer Area Start -->
<footer class="main-footer bg-dark-blue rel z-1 text-white mt-100">
    <div class="container">
        @include('partials.general.newsletter_section')

        <div class="row justify-content-between">
            <div class="col-xl-2 col-lg-3 col-sm-6">
                <div class="footer-widget about-widget">
                    <div class="footer-logo mb-30">
                        {{-- <a href="index.html"><img src="/assets/images/logos/variants/no-bg/image-2-nobg.png" alt="Logo"></a> --}}
                        <a href="index.html"><img src="/assets/images/logos/logo_transparent.png" alt="Logo"></a>
                    </div>
                    {{-- <p>129 Lily Cl, London W14 9YB, United Kingdom</p> --}}
                    <p>22, Olajide Street, off Itire Road, Lagos</p>

                    <div class="footer-contact mt-30">
                        <i class="flaticon-mail"></i>
                        <span style="text-transform: none"><strong> info@marxoan.com.ng</strong></span>

                        {{-- <a href="/assets/cdn-cgi/scripts/email-decode.min.js"><span
                                class="__cf_email__"
                                data-cfemail="c8a1a6aea788bcada4aba7e6aba7a5">[email&#160;protected]</span>
                            </a> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-sm-6">
                <div class="footer-widget menu-widget col-lg-10">
                    <h4 class="footer-title">Site Navigation</h4>
                    <ul>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        <li><a href="{{ route('blog') }}">latest news</a></li>
                        <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                        <li><a href="{{ route('services') }}">services</a></li>
                        <li><a href="{{ route('pricing') }}">pricing</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="footer-widget menu-widget">
                    <h4 class="footer-title d-flex justify-content-around">Our Services</h4>
                    <div class="d-flex justify-content-around">
                        <ul>
                            <li><a href="{{ route('services') }}">web <br> development</a></li>
                            <li><a href="{{ route('services') }}">mobile app <br> development</a></li>
                            <li><a href="{{ route('services') }}">ui/ux design</a></li>
                            <li><a href="{{ route('services') }}">Advertising</a></li>
                            <li><a href="{{ route('services') }}">Digital Marketing</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{ route('services') }}">Social media <br> Marketing</a></li>
                            <li><a href="{{ route('services') }}">Content <br> Writing</a></li>
                            <li><a href="{{ route('services') }}">Selling Tips</a></li>
                            <li><a href="{{ route('services') }}">consultancy</a></li>
                            <li><a href="{{ route('services') }}">System Automation</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget info-widget">
                    <h4 class="footer-title">Get In Touch</h4>
                    <p>We are always ready for your Solution</p>
                    <div class="social-style-one pt-15">
                        <a href="{{ route('contact') }}"><i class="fab fa-facebook-f"></i></a>
                        <a href="{{ route('contact') }}"><i class="fab fa-twitter"></i></a>
                        <a href="{{ route('contact') }}"><i class="fab fa-linkedin-in"></i></a>
                        <a href="{{ route('contact') }}"><i class="fab fa-google-plus-g"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <p>©2016 - {{ date('Y') }}. <a href="/" class="text-success">marxoan &trade;</a> All rights
                reserved.</p>
            <ul class="footer-menu py-5 px-5">
                <li><a href="{{ route('contact') }}">support</a></li>
                <li><a href="{{ route('contact') }}">Privacy</a></li>
                <li><a href="{{ route('contact') }}">policy</a></li>
            </ul>
        </div>
    </div>
    <img class="triangle-shape" src="/assets/images/shapes/triangle.png" alt="Shape">
    <img class="half-circle-shape" src="/assets/images/shapes/half-circle.png" alt="Shape">
</footer>
<!-- Footer Area End -->



</div>
<!--End pagewrapper-->
