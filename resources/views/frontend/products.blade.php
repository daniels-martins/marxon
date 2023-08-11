@extends('layout.website')
@section('content')
    <!-- Portfolio Page Start -->
    <section class="portfolio-page rel z-1 py-140 rpy-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-item wow fadeInUp delay-0-2s">
                        <img src="assets/images/portfolios/portfolio4.jpg" alt="Portfolio">
                        <a class="portfolio-hover" href="portfolio-details.html">
                            <div class="content">
                                <span class="category">Design Team</span>
                                <h4>Web design Consultation</h4>
                            </div>
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-item wow fadeInUp delay-0-4s">
                        <img src="assets/images/portfolios/portfolio6.jpg" alt="Portfolio">
                        <a class="portfolio-hover" href="portfolio-details.html">
                            <div class="content">
                                <span class="category">Design Team</span>
                                <h4>Web design Consultation</h4>
                            </div>
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-item wow fadeInUp delay-0-6s">
                        <img src="assets/images/portfolios/portfolio7.jpg" alt="Portfolio">
                        <a class="portfolio-hover" href="portfolio-details.html">
                            <div class="content">
                                <span class="category">Design Team</span>
                                <h4>Web design Consultation</h4>
                            </div>
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-item wow fadeInUp delay-0-2s">
                        <img src="assets/images/portfolios/portfolio8.jpg" alt="Portfolio">
                        <a class="portfolio-hover" href="portfolio-details.html">
                            <div class="content">
                                <span class="category">Design Team</span>
                                <h4>Web design Consultation</h4>
                            </div>
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-item wow fadeInUp delay-0-4s">
                        <img src="assets/images/portfolios/portfolio9.jpg" alt="Portfolio">
                        <a class="portfolio-hover" href="portfolio-details.html">
                            <div class="content">
                                <span class="category">Design Team</span>
                                <h4>Web design Consultation</h4>
                            </div>
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-item wow fadeInUp delay-0-6s">
                        <img src="assets/images/portfolios/portfolio10.jpg" alt="Portfolio">
                        <a class="portfolio-hover" href="portfolio-details.html">
                            <div class="content">
                                <span class="category">Design Team</span>
                                <h4>Web design Consultation</h4>
                            </div>
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <nav aria-label="...">
                        <ul class="pagination flex-wrap justify-content-center pt-25">
                            <li class="page-item disabled">
                                <span class="page-link"><i class="fas fa-angle-left"></i></span>
                            </li>
                            <li class="page-item active">
                                <span class="page-link">
                                    01
                                    <span class="sr-only">(current)</span>
                                </span>
                            </li>
                            <li class="page-item"><a class="page-link" href="portfolio.html#">02</a></li>
                            <li class="page-item"><a class="page-link" href="portfolio.html#">03</a></li>
                            <li class="page-item">
                                <a class="page-link" href="portfolio.html#"><i class="fas fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <img class="circle-shape" src="assets/images/shapes/circle.png" alt="Shape">
        <img class="half-circle-shape" src="assets/images/shapes/half-circle.png" alt="Shape">
    </section>
    <!-- Portfolio Page End -->

    @include('partials.creative_design_section')
@endsection
