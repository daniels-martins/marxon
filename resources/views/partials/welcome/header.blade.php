<!-- main header -->
<header class="main-header">

    <!--Header-Upper-->
    <div class="header-upper">
        <div class="container-fluid clearfix">

            <div class="header-inner d-flex align-items-center">
                <div class="logo-outer d-flex align-items-center">
                    <div class="logo">
                        <a href="#">
                            <img src="assets/images/logos/logo.svg" alt="Logo" title="Logo">
                        </a>
                    </div>
                    <div class="header-contact">
                        <i class="flaticon-call"></i>
                        <div class="content">
                            <h5>Phone</h5>
                            <h6><a href="callto:+012455689695">+234 ) 704 - 5063 380</a></h6>
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
                            <ul class="navigation onepage clearfix">
                                {{-- <li><a href="#home">Home</a></li> --}}
                                <li><a href="#about">about</a></li>
                                <li><a href="#services">services</a></li>
                                <li><a href="#products">products</a></li>
                                <li><a href="#portfolio">portfolio</a></li>
                                <li class="dropdown"><a href="#">sections</a>
                                    <ul>
                                        <li><a href="#feature">features</a></li>
                                        <li><a href="#solution">solution</a></li>
                                        <li><a href="#pricing">pricing</a></li>
                                        <li><a href="#testimonial">testimonial</a></li>
                                        <li><a href="#team">team</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </nav>
                    <!-- Main Menu End-->
                </div>

                <!-- Menu Button -->
                <div class="menu-icons">
                    <!-- Nav Search -->
                    {{-- <div class="nav-search py-15">
                        <button class="fa fa-search"></button>
                        <form action="#" class="hide">
                            <input type="text" placeholder="Search" class="searchbox" required="">
                            <button type="submit" class="searchbutton fa fa-search"></button>
                        </form>
                    </div> --}}

                    <!-- menu Btn -->
                    <x-get-quote />
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->
</header>
