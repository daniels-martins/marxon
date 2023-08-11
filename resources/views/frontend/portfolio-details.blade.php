@extends('layout.website')
@section('content')
    <!-- Portfolio Details Start -->
    <section class="portfolio-details rel z-1 py-140 rpy-100">
        <div class="container">
            <div class="row no-gap align-items-center">
                <div class="col-lg-10">
                    <div class="portfolio-details-image wow fadeInLeft delay-0-2s">
                        <img src="/assets/images/portfolios/portfolio-details.jpg" alt="Portfolio">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="portfolio-description bg-dark-blue br-10 wow fadeInRight delay-0-2s">
                        <table>
                            <tr>
                                <td><b>Date</b></td>
                                <td><b>:</b></td>
                                <td><span>02 March, 2022</span></td>
                            </tr>
                            <tr>
                                <td><b>Category</b></td>
                                <td><b>:</b></td>
                                <td><span>UI & UX Design</span></td>
                            </tr>
                            <tr>
                                <td><b>Client</b></td>
                                <td><b>:</b></td>
                                <td><span>Webtend Agency</span></td>
                            </tr>
                            <tr>
                                <td><b>Social</b></td>
                                <td><b>:</b></td>
                                <td>
                                    <div class="social-style-one">
                                        <a href="contact.html"><i class="fab fa-facebook-f"></i></a>
                                        <a href="contact.html"><i class="fab fa-twitter"></i></a>
                                        <a href="contact.html"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="contact.html"><i class="fab fa-google-plus-g"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="portfolio-details-content pb-35 wow fadeInUp delay-0-2s">
                <div class="section-title pt-40 mb-30">
                    <h2>Portfolio Description</h2>
                </div>
                <p>Integer eu odio dui. Mauris et felis vehicula, fermentum massa in, egestas leo. Fusce magna eros,
                    ullamcorper nec purus ut, sagittis placerat felis. Donec enim nisl, eleifend vel ex eu, sodales
                    luctus odio. Quisque massa lorem, vestibulum a libero cursus, auctor suscipit nunc. Aliquam erat
                    volutpat. Suspendisse rhoncus mattis laoreet. Aenean aliquam a turpis vel imperdiet.</p>
                <br>
                <p>Phasellus elementum, tellus ut sagittis convallis, nibh neque varius massa, quis viverra nulla
                    augue quis massa. Nam lacinia, elit vitae fringilla tristique, diam nunc pellentesque arcu, et
                    pulvinar mi mauris nec nunc.</p>
            </div>
            <hr>
            <div class="advance-feature pt-55 pb-25">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="advance-feature-content mb-50 wow fadeInUp delay-0-2s">
                            <h3>Advance Feature</h3>
                            <ul class="list-style-one mt-35">
                                <li>Modern & Unique Design</li>
                                <li>pixel perfect design</li>
                                <li>design usability</li>
                                <li>Advance responsive UI</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="image mb-30 wow fadeInUp delay-0-4s">
                            <img src="/assets/images/portfolios/portfolio4.jpg" alt="Portfolio">
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="image mb-30 wow fadeInUp delay-0-6s">
                            <img src="/assets/images/portfolios/portfolio2.jpg" alt="Portfolio">
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="portfolio-footer-nav pt-25">
                <a href="portfolio-details.html" class="next-prev-item prev wow fadeInLeft delay-0-2s">
                    <img src="/assets/images/portfolios/next-prev.jpg" alt="Next Prev">
                    <div class="content">
                        <span><i class="fas fa-long-arrow-alt-left"></i> Previews</span>
                        <h6>Web Development</h6>
                    </div>
                </a>
                <a href="portfolio-details.html" class="next-prev-item next wow fadeInRight delay-0-2s">
                    <div class="content">
                        <span>Next <i class="fas fa-long-arrow-alt-right"></i></span>
                        <h6>Design Consultation</h6>
                    </div>
                    <img src="/assets/images/portfolios/next-prev.jpg" alt="Next Prev">
                </a>
            </div>
        </div>
    </section>
    <!-- Portfolio Details End -->
@endsection
