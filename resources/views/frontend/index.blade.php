<!DOCTYPE html>
<html lang="zxx">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>{{ config('app.name') }} - Best Digital Agency in Nigeria || Home</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <!--====== Google Fonts ======-->
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;600;700&family=Oswald:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!--====== Flaticon ======-->
    <link rel="stylesheet" href="assets/css/flaticon.min.css">
    <!--====== Font Awesome ======-->
    <link rel="stylesheet" href="assets/css/font-awesome-5.9.0.min.css">
    <!--====== Bootstrap ======-->
    <link rel="stylesheet" href="assets/css/bootstrap-4.5.3.min.css">
    <!--====== Magnific Popup ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!--====== Animate ======-->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!--====== Slick ======-->
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <!--====== Main Style ======-->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- main header -->
        <header class="main-header">

            <!--Header-Upper-->
            <div class="header-upper">
                <div class="container-fluid clearfix">

                    <div class="header-inner d-flex align-items-center">
                        <div class="logo-outer d-flex align-items-center">
                            <div class="logo">
                                <a href="index.html">
                                    <!-- <img src="assets/images/logos/logo.png" alt="Logo" title="Logo"> -->
                                    <span class="h1 text-black"> {{ config('app.name') }} </span>
                                </a>
                            </div>
                            <div class="header-contact">
                                <i class="flaticon-call"></i>
                                <div class="content">
                                    <h5>Phone</h5>
                                    <h6><a href="callto:+012455689695">+012 ) 455 - 689 695</a></h6>
                                </div>
                            </div>
                        </div>

                        <div class="nav-outer clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="dropdown"><a href="index.html#">Home</a>
                                            <ul>
                                                <li><a href="index.html">MultiPage</a></li>
                                                <li><a href="index-onepage.html">OnePage</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="index.html#">pages</a>
                                            <ul>
                                                <li><a href="about.html">About us</a></li>
                                                <li><a href="services.html">Our services</a></li>
                                                <li><a href="team.html">team members</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="index.html#">portfolio</a>
                                            <ul>
                                                <li><a href="portfolio.html">Portfolio</a></li>
                                                <li><a href="portfolio-details.html">Portfolio details</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="index.html#">blog</a>
                                            <ul>
                                                <li><a href="blog.html">blog standard</a></li>
                                                <li><a href="blog-details.html">blog details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>

                            </nav>
                            <!-- Main Menu End-->
                        </div>

                        <!-- Menu Button -->
                        <div class="menu-icons">
                            <!-- Nav Search -->
                            <div class="nav-search py-15">
                                <button class="fa fa-search"></button>
                                <form action="index.html#" class="hide">
                                    <input type="text" placeholder="Search" class="searchbox" required="">
                                    <button type="submit" class="searchbutton fa fa-search"></button>
                                </form>
                            </div>

                            <!-- menu Btn -->
                            <x-get-quote />
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->
        </header>

        <!-- Hero Section Start -->
        <section class="hero-section rel z-1 bg-lighter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="hero-content mt-220 mb-225 rmt-95 rmb-100">
                            <span class="sub-title mb-15 wow fadeInUp delay-0-2s">We’re provide the best services</span>
                            <h1 class="mb-30 wow fadeInUp delay-0-4s">Design <span>solutions</span> for any media.</h1>
                            <p class="wow fadeInUp delay-0-6s">pretium convallis lacinia. Quisque ac eros urna. Mauris
                                eu molestie odio. Nullam id consectetur nibh,</p>
                            <div class="hero-btn mt-60 wow fadeInUp delay-0-8s">
                                <a href="about.html" class="theme-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-end">
                        <div class="hero-right-images text-lg-right wow fadeInUp delay-0-2s">
                            <img src="assets/images/hero/hero-right.png" alt="Hero">
                        </div>
                    </div>
                </div>
            </div>
            <img class="triangle-shape" src="assets/images/shapes/triangle.png" alt="Shape">
            <img class="circle-shape" src="assets/images/shapes/circle.png" alt="Shape">
            <img class="half-circle-shape" src="assets/images/shapes/half-circle.png" alt="Shape">
            <img class="rectangle-shape" src="assets/images/shapes/rectangle.png" alt="Shape">
        </section>
        <!-- Hero Section End -->


        <!-- Services Section Start -->
        <section class="services-section pt-135 rpt-95">
            <div class="container">
                <div class="row justify-content-between pb-40 rpb-65">
                    <div class="col-lg-6">
                        <div class="section-title mb-25 wow fadeInLeft delay-0-2s">
                            <span class="sub-title mb-15">Popular Services</span>
                            <h2>Dedicated <span>to service</span> our customers</h2>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="service-title-content wow fadeInRight delay-0-2s">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                architecto </p>
                            <a href="services.html" class="view-more mt-25">View All Services <i
                                    class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="services-wrap bg-lighter br-10">
                    <div class="row no-gap">
                        <div class="col-xl-3 col-md-6">
                            <div class="service-item wow fadeInUp delay-0-2s">
                                <div class="icon">
                                    <img src="assets/images/services/icon1.png" alt="Icon">
                                </div>
                                <h4>Brand Identity Design</h4>
                                <a href="services.html" class="read-more">Explore <i
                                        class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="service-item wow fadeInUp delay-0-4s">
                                <div class="icon">
                                    <img src="assets/images/services/icon2.png" alt="Icon">
                                </div>
                                <h4>Product listing ads management</h4>
                                <a href="services.html" class="read-more">Explore <i
                                        class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="service-item wow fadeInUp delay-0-6s">
                                <div class="icon">
                                    <img src="assets/images/services/icon3.png" alt="Icon">
                                </div>
                                <h4>Multi-channel Optimization</h4>
                                <a href="services.html" class="read-more">Explore <i
                                        class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="service-item wow fadeInUp delay-0-8s">
                                <div class="icon">
                                    <img src="assets/images/services/icon4.png" alt="Icon">
                                </div>
                                <h4>Web & app Demelopment</h4>
                                <a href="services.html" class="read-more">Explore <i
                                        class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Section End -->


        <!-- About Section Start -->
        <section class="about-section rel z-1 pt-135 rpt-95 pb-140 rpb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-image rmb-65 wow fadeInLeft delay-0-2s">
                            <img src="assets/images/about/aobut.png" alt="About">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content wow fadeInRight delay-0-2s">
                            <div class="section-title mb-25">
                                <span class="sub-title mb-15">Company About Us</span>
                                <h2>Advanced <span>software</span> made simple.</h2>
                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium,</p>
                            <p>totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                                vitae dicta sunt explicabo. Nemo enim ipsam </p>
                            <ul class="list-style-one pt-10 pb-50">
                                <li>Content Generation and Optimization</li>
                                <li>Integrated Online Marketing Strategies</li>
                            </ul>
                            <a href="about.html" class="theme-btn">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
            <img class="half-circle-shape" src="assets/images/shapes/half-circle.png" alt="Shape">
        </section>
        <!-- About Section End -->


        <!-- Features Section Start -->
        <section class="features-section rel z-1 bg-lighter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="feature-content pt-135 rpt-95 pb-140 rpb-65 wow fadeInRight delay-0-2s">
                            <div class="section-title mb-25">
                                <span class="sub-title mb-15">Core Features</span>
                                <h2>Good design is good <span>business</span></h2>
                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium,</p>
                            <p>veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                voluptatem quia voluptas sit aspernatur aut odit aut fugit,</p>
                            <div class="success-wrap pt-25 pb-45">
                                <div class="success-item">
                                    <span class="count-text plus" data-speed="3000" data-stop="259">0</span>
                                    <p>Project Complated</p>
                                </div>
                                <div class="success-item">
                                    <span class="count-text plus" data-speed="3000" data-stop="259">0</span>
                                    <p>Clients satisfied</p>
                                </div>
                            </div>
                            <a href="services.html" class="theme-btn style-two">Discover More</a>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-end">
                        <div class="features-image text-lg-right wow fadeInLeft delay-0-2s">
                            <img src="assets/images/services/feature.png" alt="Features">
                        </div>
                    </div>
                </div>
            </div>
            <img class="triangle-shape" src="assets/images/shapes/triangle.png" alt="Shape">
            <img class="circle-shape" src="assets/images/shapes/circle.png" alt="Shape">
        </section>
        <!-- Features Section End -->


        <!-- Solution Section Start -->
        <section class="solution-section rel z-1 pt-140 rpt-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="solution-image rmb-65 wow fadeInLeft delay-0-2s">
                            <img src="assets/images/about/solution.png" alt="Solution">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="solution-content wow fadeInRight delay-0-2s">
                            <div class="section-title mb-25">
                                <span class="sub-title mb-15">Marketing solution</span>
                                <h2>Grow Your Business the <span>digital way</span></h2>
                            </div>
                            <p>totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                                vitae dicta sunt</p>
                            <div class="skillbar-items pt-25">
                                <div class="skillbar" data-percent="85">
                                    <h6 class="skillbar-title">Product development</h6>
                                    <div class="skillbar-wrap">
                                        <span class="skillbar-bar"></span>
                                    </div>
                                    <span class="skill-bar-percent"></span>
                                </div>
                                <div class="skillbar" data-percent="85">
                                    <h6 class="skillbar-title">Digital Marketing</h6>
                                    <div class="skillbar-wrap">
                                        <span class="skillbar-bar"></span>
                                    </div>
                                    <span class="skill-bar-percent"></span>
                                </div>
                                <div class="skillbar" data-percent="90">
                                    <h6 class="skillbar-title">Business Consultation</h6>
                                    <div class="skillbar-wrap">
                                        <span class="skillbar-bar"></span>
                                    </div>
                                    <span class="skill-bar-percent"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Solution Section End -->


        <!-- Portfolio Section Start -->
        <section class="portfolio-section bg-white rel z-1 pt-135 rpt-95 pb-110 rpb-70">
            <div class="container">
                <div class="row justify-content-between align-items-center pb-45">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-title mb-25">
                            <span class="sub-title mb-15">Case studies</span>
                            <h2>Look Our Recent <span>Solutions</span> Project</h2>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="slider-arrow-btns text-lg-right mb-25">
                            <button class="portfolio-prev"><i class="fas fa-long-arrow-alt-left"></i></button>
                            <button class="portfolio-next"><i class="fas fa-long-arrow-alt-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-wrap">
                <div class="portfolio-item wow fadeInUp delay-0-2s">
                    <img src="assets/images/portfolios/portfolio1.jpg" alt="Portfolio">
                    <a class="portfolio-hover" href="portfolio-details.html">
                        <div class="content">
                            <span class="category">Design Team</span>
                            <h4>Web design Consultation</h4>
                        </div>
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                </div>
                <div class="portfolio-item wow fadeInUp delay-0-3s">
                    <img src="assets/images/portfolios/portfolio2.jpg" alt="Portfolio">
                    <a class="portfolio-hover" href="portfolio-details.html">
                        <div class="content">
                            <span class="category">Design Team</span>
                            <h4>Web design Consultation</h4>
                        </div>
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                </div>
                <div class="portfolio-item wow fadeInUp delay-0-4s">
                    <img src="assets/images/portfolios/portfolio3.jpg" alt="Portfolio">
                    <a class="portfolio-hover" href="portfolio-details.html">
                        <div class="content">
                            <span class="category">Design Team</span>
                            <h4>Web design Consultation</h4>
                        </div>
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                </div>
                <div class="portfolio-item wow fadeInUp delay-0-5s">
                    <img src="assets/images/portfolios/portfolio4.jpg" alt="Portfolio">
                    <a class="portfolio-hover" href="portfolio-details.html">
                        <div class="content">
                            <span class="category">Design Team</span>
                            <h4>Web design Consultation</h4>
                        </div>
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                </div>
                <div class="portfolio-item wow fadeInUp delay-0-6s">
                    <img src="assets/images/portfolios/portfolio5.jpg" alt="Portfolio">
                    <a class="portfolio-hover" href="portfolio-details.html">
                        <div class="content">
                            <span class="category">Design Team</span>
                            <h4>Web design Consultation</h4>
                        </div>
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                </div>
                <div class="portfolio-item wow fadeInUp delay-0-7s">
                    <img src="assets/images/portfolios/portfolio1.jpg" alt="Portfolio">
                    <a class="portfolio-hover" href="portfolio-details.html">
                        <div class="content">
                            <span class="category">Design Team</span>
                            <h4>Web design Consultation</h4>
                        </div>
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                </div>
                <div class="portfolio-item wow fadeInUp delay-0-8s">
                    <img src="assets/images/portfolios/portfolio2.jpg" alt="Portfolio">
                    <a class="portfolio-hover" href="portfolio-details.html">
                        <div class="content">
                            <span class="category">Design Team</span>
                            <h4>Web design Consultation</h4>
                        </div>
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                </div>
                <div class="portfolio-item wow fadeInUp delay-0-9s">
                    <img src="assets/images/portfolios/portfolio3.jpg" alt="Portfolio">
                    <a class="portfolio-hover" href="portfolio-details.html">
                        <div class="content">
                            <span class="category">Design Team</span>
                            <h4>Web design Consultation</h4>
                        </div>
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                </div>
                <div class="portfolio-item wow fadeInUp delay-1-0s">
                    <img src="assets/images/portfolios/portfolio4.jpg" alt="Portfolio">
                    <a class="portfolio-hover" href="portfolio-details.html">
                        <div class="content">
                            <span class="category">Design Team</span>
                            <h4>Web design Consultation</h4>
                        </div>
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                </div>
                <div class="portfolio-item wow fadeInUp delay-1-1s">
                    <img src="assets/images/portfolios/portfolio5.jpg" alt="Portfolio">
                    <a class="portfolio-hover" href="portfolio-details.html">
                        <div class="content">
                            <span class="category">Design Team</span>
                            <h4>Web design Consultation</h4>
                        </div>
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                </div>
            </div>
        </section>
        <!-- Portfolio Section End -->


        <!-- Pricing Section Start -->
        <section class="pricing-section pt-135 rpt-95 mb-180 rel z-0 bg-lighter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-title text-center mb-60">
                            <span class="sub-title mb-15">Our Pricing plan</span>
                            <h2>We offer the <span>best pricing</span> plan for you</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-110 rmb-70">
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-item wow fadeInUp delay-0-2s">
                            <h3>Basic Plan</h3>
                            <span class="license">Extended License</span>
                            <span class="price">29</span>
                            <ul class="list-style-one">
                                <li>10 Pages Responsive Website</li>
                                <li>Customer Experience</li>
                                <li>Professional staff training</li>
                            </ul>
                            <a href="contact.html" class="theme-btn style-two">Get License</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-item wow fadeInUp delay-0-4s">
                            <h3>Standard</h3>
                            <span class="license">Extended License</span>
                            <span class="price">59</span>
                            <ul class="list-style-one">
                                <li>10 Pages Responsive Website</li>
                                <li>Customer Experience</li>
                                <li>Professional staff training</li>
                            </ul>
                            <a href="contact.html" class="theme-btn style-two">Get License</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-item wow fadeInUp delay-0-6s">
                            <h3>Premium</h3>
                            <span class="license">Extended License</span>
                            <span class="price">99</span>
                            <ul class="list-style-one">
                                <li>10 Pages Responsive Website</li>
                                <li>Customer Experience</li>
                                <li>Professional staff training</li>
                            </ul>
                            <a href="contact.html" class="theme-btn style-two">Get License</a>
                        </div>
                    </div>
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


        <!-- Team Section Start -->
        <section class="team-section pt-135 rpt-95 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-title text-center mb-60">
                            <span class="sub-title mb-15">Our Team</span>
                            <h2>Our <span>Experience</span> Team member</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-member wow fadeInUp delay-0-2s">
                            <img src="assets/images/team/team-member1.jpg" alt="Team Member">
                            <div class="member-description">
                                <div class="social-area">
                                    <div class="social-icons">
                                        <a href="contact.html"><i class="fab fa-twitter"></i></a>
                                        <a href="contact.html"><i class="fab fa-facebook-f"></i></a>
                                        <a href="contact.html"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                    <button><i class="fas fa-plus"></i></button>
                                </div>
                                <h4>Michael Jordan</h4>
                                <span class="designation">developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-member wow fadeInUp delay-0-4s">
                            <img src="assets/images/team/team-member2.jpg" alt="Team Member">
                            <div class="member-description">
                                <div class="social-area">
                                    <div class="social-icons">
                                        <a href="contact.html"><i class="fab fa-twitter"></i></a>
                                        <a href="contact.html"><i class="fab fa-facebook-f"></i></a>
                                        <a href="contact.html"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                    <button><i class="fas fa-plus"></i></button>
                                </div>
                                <h4>Al Mahmud</h4>
                                <span class="designation">UI-Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-member wow fadeInUp delay-0-6s">
                            <img src="assets/images/team/team-member3.jpg" alt="Team Member">
                            <div class="member-description">
                                <div class="social-area">
                                    <div class="social-icons">
                                        <a href="contact.html"><i class="fab fa-twitter"></i></a>
                                        <a href="contact.html"><i class="fab fa-facebook-f"></i></a>
                                        <a href="contact.html"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                    <button><i class="fas fa-plus"></i></button>
                                </div>
                                <h4>michelle pfeiffer</h4>
                                <span class="designation">UI-Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-member wow fadeInUp delay-0-8s">
                            <img src="assets/images/team/team-member4.jpg" alt="Team Member">
                            <div class="member-description">
                                <div class="social-area">
                                    <div class="social-icons">
                                        <a href="contact.html"><i class="fab fa-twitter"></i></a>
                                        <a href="contact.html"><i class="fab fa-facebook-f"></i></a>
                                        <a href="contact.html"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                    <button><i class="fas fa-plus"></i></button>
                                </div>
                                <h4>Emran Khan</h4>
                                <span class="designation">react developer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img class="circle-shape" src="assets/images/shapes/circle.png" alt="Shape">
            <img class="half-circle-shape" src="assets/images/shapes/half-circle.png" alt="Shape">
        </section>
        <!-- Team Section End -->


        <!-- Testimonial Section Start -->
        <section class="testimonial-section pt-95 rpt-55 pb-125 rpb-85">
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
                            <div class="testimonial-item">
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


        <!-- Footer Area Start -->
        <footer class="main-footer bg-dark-blue rel z-1 text-white mt-100">
            <div class="container">
                <div class="subscribe-wrap text-white bg-blue br-10">
                    <div class="row align-itmes-center">
                        <div class="col-lg-6">
                            <div class="section-title wow fadeInLeft delay-0-2s">
                                <h2>Subscribe to get Infromation</h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="subscribe-form mt-10 wow fadeInRight delay-0-2s">
                                <form action="index.html#">
                                    <input type="email" placeholder="Email Address" required>
                                    <button type="submit">Subscribe Now</button>
                                </form>
                                <span>Trusted By 12.256+ Clients</span>
                                <img src="assets/images/shapes/hand.png" alt="hand" class="hand">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget about-widget">
                            <div class="footer-logo mb-30">
                                <a href="index.html"><img src="assets/images/logos/logo-white.png"
                                        alt="Logo"></a>
                            </div>
                            <p>129 Lily Cl, London W14 9YB, United Kingdom</p>
                            <div class="footer-contact mt-30">
                                <i class="flaticon-mail"></i>
                                <a
                                    href="https://demo.webtend.net/cdn-cgi/l/email-protection#9bf2f5fdf4dbeffef7f8f4b5f8f4f6"><span
                                        class="__cf_email__"
                                        data-cfemail="147d7a727b54607178777b3a777b79">[email&#160;protected]</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-6">
                        <div class="footer-widget menu-widget">
                            <h4 class="footer-title">Our Pages</h4>
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="blog.html">Latest Post</a></li>
                                <li><a href="services.html">Selling Tips</a></li>
                                <li><a href="services.html">Advertising</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-6">
                        <div class="footer-widget menu-widget">
                            <h4 class="footer-title">Our Pages</h4>
                            <ul>
                                <li><a href="services.html">web development</a></li>
                                <li><a href="services.html">ui/ux design</a></li>
                                <li><a href="services.html">development</a></li>
                                <li><a href="services.html">development</a></li>
                                <li><a href="services.html">consultancy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget info-widget">
                            <h4 class="footer-title">Get In Touch</h4>
                            <p>We are always ready for your Solution</p>
                            <div class="social-style-one pt-15">
                                <a href="contact.html"><i class="fab fa-facebook-f"></i></a>
                                <a href="contact.html"><i class="fab fa-twitter"></i></a>
                                <a href="contact.html"><i class="fab fa-linkedin-in"></i></a>
                                <a href="contact.html"><i class="fab fa-google-plus-g"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright-area">
                    <p>© 2022. <a href="index.html">{{ config('app.name') }}</a> All rights reserved.</p>
                    <ul class="footer-menu py-5">
                        <li><a href="contact.html">support</a></li>
                        <li><a href="contact.html">Privacy</a></li>
                        <li><a href="contact.html">policy</a></li>
                    </ul>
                </div>
            </div>
            <img class="triangle-shape" src="assets/images/shapes/triangle.png" alt="Shape">
            <img class="half-circle-shape" src="assets/images/shapes/half-circle.png" alt="Shape">
        </footer>
        <!-- Footer Area End -->

    </div>
    <!--End pagewrapper-->

    <!-- Scroll Top Button -->
    <button class="scroll-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></button>


    <!--====== Jquery ======-->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!--====== Bootstrap ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--====== Appear Js ======-->
    <script src="assets/js/appear.min.js"></script>
    <!--====== Slick ======-->
    <script src="assets/js/slick.min.js"></script>
    <!--====== Magnific Popup ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!--====== Skill bar ======-->
    <script src="assets/js/skill.bars.jquery.min.js"></script>
    <!--  WOW Animation -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Custom script -->
    <script src="assets/js/script.js"></script>

</body>

</html>
