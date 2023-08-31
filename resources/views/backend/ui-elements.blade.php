<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>UI element | Simple - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="dropdown d-none d-lg-block">
                        <a class="nav-link dropdown-toggle mr-0" data-toggle="dropdown" href="ui-elements.html#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/flags/us.jpg" alt="user-image" class="mr-2" height="12"> <span class="align-middle">English <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                             <!-- item-->
                             <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/spain.jpg" alt="user-image" class="mr-2" height="12"> <span class="align-middle">Spanish</span>
                             </a>

                             <!-- item-->
                             <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/italy.jpg" alt="user-image" class="mr-2" height="12"> <span class="align-middle">Italian</span>
                             </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/french.jpg" alt="user-image" class="mr-2" height="12"> <span class="align-middle">French</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/russia.jpg" alt="user-image" class="mr-2" height="12"> <span class="align-middle">Russian</span>
                            </a>
                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="ui-elements.html#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-bell noti-icon"></i>
                            <span class="badge badge-danger rounded-circle noti-icon-badge">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="font-16 m-0">
                                    <span class="float-right">
                                        <a href="ui-elements.html" class="text-dark">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Notification
                                </h5>
                            </div>

                            <div class="slimscroll noti-scroll">

                                 <!-- item-->
                                 <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info"><i class="mdi mdi-account-plus"></i></div>
                                        <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-danger"><i class="mdi mdi-heart"></i></div>
                                        <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">3 days ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-warning"><i class="mdi mdi-comment-account-outline"></i></div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary">
                                            <i class="mdi mdi-heart"></i>
                                        </div>
                                        <p class="notify-details">Carlos Crouch liked <b>Admin</b>
                                            <small class="text-muted">13 days ago</small>
                                        </p>
                                    </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-primary text-center notify-item notify-all ">
                                View all
                                <i class="fi-arrow-right"></i>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="ui-elements.html#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ml-1">
                                    Maxine K  <i class="mdi mdi-chevron-down"></i> 
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-outline"></i>
                                <span>Profile</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-settings-outline"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-lock-outline"></i>
                                <span>Lock Screen</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout-variant"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a href="javascript:void(0);" class="nav-link right-bar-toggle">
                            <i class="mdi mdi-settings-outline noti-icon"></i>
                        </a>
                    </li>


                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.html" class="logo text-center logo-dark">
                        <span class="logo-lg">
                            <img src="assets/images/logo-dark.png" alt="" height="26">
                            <!-- <span class="logo-lg-text-dark">Simple</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-lg-text-dark">S</span> -->
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                    </a>

                    <a href="index.html" class="logo text-center logo-light">
                        <span class="logo-lg">
                            <img src="assets/images/logo-light.png" alt="" height="26">
                            <!-- <span class="logo-lg-text-light">Simple</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-lg-text-light">S</span> -->
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
        
                    <li class="d-none d-sm-block">
                        <form class="app-search">
                            <div class="app-search-box">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
            <!-- end Topbar --> <!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">


                <div class="user-box">
                        <div class="float-left">
                            <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-md rounded-circle">
                        </div>
                        <div class="user-info">
                            <a href="ui-elements.html#">Stanley Jones</a>
                            <p class="text-muted m-0">Administrator</p>
                        </div>
                    </div>
    
            <!--- Sidemenu -->
            <div id="sidebar-menu">
    
                <ul class="metismenu" id="side-menu">
    
                    <li class="menu-title">Navigation</li>
    
                    <li>
                        <a href="index.html">
                            <i class="ti-home"></i>
                            <span> Dashboard </span>
                        </a>
                    </li>
    
                    <li>
                        <a href="ui-elements.html">
                            <i class="ti-paint-bucket"></i>
                            <span> UI Elements </span>
                            <span class="badge badge-primary float-right">11</span>
                        </a>
                    </li>
    
                    <li>
                        <a href="javascript: void(0);">
                            <i class="ti-light-bulb"></i>
                            <span> Components </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="components-range-slider.html">Range Slider</a></li>
                            <li><a href="components-alerts.html">Alerts</a></li>
                            <li><a href="components-icons.html">Icons</a></li>
                            <li><a href="components-widgets.html">Widgets</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="typography.html">
                            <i class="ti-spray"></i>
                            <span> Typography </span>
                        </a>
                    </li>
    
                    <li>
                        <a href="javascript: void(0);">
                            <i class="ti-pencil-alt"></i>
                            <span>  Forms  </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="forms-general.html">General Elements</a></li>
                            <li><a href="forms-advanced.html">Advanced Form</a></li>
                        </ul>
                    </li>
    
                    <li>
                        <a href="javascript: void(0);">
                            <i class="ti-menu-alt"></i>
                            <span>  Tables </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="tables-basic.html">Basic Tables</a></li>
                            <li><a href="tables-advanced.html">Advanced Tables</a></li>
                        </ul>
                    </li>
    
                    <li>
                        <a href="charts.html">
                            <i class="ti-pie-chart"></i>
                            <span>  Charts  </span>
                            <span class="badge badge-primary float-right">5</span>
                        </a>
                    </li>
    
                    <li>
                        <a href="maps.html">
                            <i class="ti-location-pin"></i>
                            <span> Maps </span>
                        </a>
                    </li>
    
                    <li>
                        <a href="javascript: void(0);">
                            <i class="ti-files"></i>
                            <span> Pages </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="pages-login.html">Login</a></li>
                            <li><a href="pages-register.html">Register</a></li>
                            <li><a href="pages-forget-password.html">Forget Password</a></li>
                            <li><a href="pages-lock-screen.html">Lock-screen</a></li>
                            <li><a href="pages-blank.html">Blank page</a></li>
                            <li><a href="pages-404.html">Error 404</a></li>
                            <li><a href="pages-confirm-mail.html">Confirm Mail</a></li>
                            <li><a href="pages-session-expired.html">Session Expired</a></li>
                        </ul>
                    </li>
    
                    <li>
                        <a href="javascript: void(0);">
                            <i class="ti-widget"></i>
                            <span> Extra Pages </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
    
                            <li><a href="extras-timeline.html">Timeline</a></li>
                            <li><a href="extras-invoice.html">Invoice</a></li>
                            <li><a href="extras-profile.html">Profile</a></li>
                            <li><a href="extras-calendar.html">Calendar</a></li>
                            <li><a href="extras-faqs.html">FAQs</a></li>
                            <li><a href="extras-pricing.html">Pricing</a></li>
                            <li><a href="extras-contacts.html">Contacts</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="ti-layout"></i>
                            <span> Layouts </span>
                            <span class="badge badge-danger badge-pill float-right">New</span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="layouts-horizontal.html">Horizontal</a></li>
                            <li><a href="layouts-dark-sidebar.html">Dark Sidebar</a></li>
                            <li><a href="layouts-small-sidebar.html">Small Sidebar</a></li>
                            <li><a href="layouts-sidebar-collapsed.html">Sidebar Collapsed</a></li>
                        </ul>
                    </li>
    
                    <li>
                        <a href="javascript: void(0);">
                            <i class="ti-share"></i>
                            <span>  Multi Level  </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level nav" aria-expanded="false">
                            <li>
                                <a href="javascript: void(0);">Level 1.1</a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" aria-expanded="false">Level 1.2
                                        <span class="menu-arrow"></span>
                                    </a>
                                <ul class="nav-third-level nav" aria-expanded="false">
                                    <li>
                                        <a href="javascript: void(0);">Level 2.1</a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);">Level 2.2</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
    
            </div>
            <!-- End Sidebar -->
    
            <div class="clearfix"></div>

    
    </div>
    <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start container-fluid -->
                    <div class="container-fluid">

                        <!-- start  -->
                        <div class="row">
                            <div class="col-12">
                                <h4 class="header-title">Buttons</h4>
                            </div>
                        </div>
                        <!-- end row -->

                        <!-- start  -->
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <p class="sub-header">
                                        Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element. Add <code>.btn-rounded</code> to default button to get rounded corners.
                                    </p>
        
                                    <div>
                                        <h6 class="font-13">Default Buttons</h6>
                                        <div class="button-list">
                                            <button type="button" class="btn btn-primary">Primary</button>
                                            <button type="button" class="btn btn-success">Success</button>
                                            <button type="button" class="btn btn-info">Info</button>
                                            <button type="button" class="btn btn-warning btn-rounded">Warning</button>
                                            <button type="button" class="btn btn-danger btn-rounded">Danger</button>
                                            <button type="button" class="btn btn-dark btn-rounded">Dark</button>
                                            <button type="button" class="btn btn-teal btn-rounded">Teal</button>
                                        </div>
                                    </div>
                                    
                                    <div>
                                        <h6 class="mt-4 font-13">Button-Custom</h6>
                                        <div class="button-list">
                                            <button type="button" class="btn btn-primary btn-bordered-primary">Primary</button>
                                            <button type="button" class="btn btn-success btn-bordered-success">Success</button>
                                            <button type="button" class="btn btn-info btn-bordered-info">Info</button>
                                            <button type="button" class="btn btn-warning btn-bordered-warning">Warning</button>
                                            <button type="button" class="btn btn-danger btn-bordered-danger">Danger</button>
                                            <button type="button" class="btn btn-dark btn-bordered-dark">Dark</button>
                                            <button type="button" class="btn btn-teal btn-bordered-teal">Teal</button>
                                        </div>
                                    </div>
        
                                    <div>
                                        <h6 class="mt-4 font-13">Button-Size</h6>
                                        <div class="button-list">
                                            <button type="button" class="btn btn-primary btn-lg">Primary</button>
                                            <button type="button" class="btn btn-success">Success</button>
                                            <button type="button" class="btn btn-info btn-sm">Info</button>
                                        </div>
                                    </div>
        
                                    <div>
                                        <h6 class="mt-4 font-13">Icon Button</h6>
                                        <div class="button-list">
                                            <button class="btn btn-icon btn-primary"> <i class="far fa-heart"></i> </button>
                                            <button class="btn btn-icon btn-danger"> <i class="fas fa-times"></i> </button>
                                            <button class="btn btn-icon btn-dark"> <i class="fas fa-music"></i> </button>
                                            <button class="btn btn-icon btn-primary"> <i class="fas fa-star"></i> </button>
                                            <button class="btn btn-icon btn-success"> <i class="far fa-thumbs-up"></i> </button>
                                            <button class="btn btn-icon btn-info"> <i class="far fa-keyboard"></i> </button>
                                            <button class="btn btn-icon btn-warning"> <i class="fas fa-wrench"></i> </button>
                                        </div>
                                    </div>
        
                                    <div>
                                        <h6 class="mt-4 font-13">Button Group</h6>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary">Left</button>
                                            <button type="button" class="btn btn-secondary">Middle</button>
                                            <button type="button" class="btn btn-secondary">Right</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <!-- start  -->
                        <div class="row mt-5">
                            <div class="col-12">
                                <div>
                                    <h4 class="header-title">Card</h4>
                                    <p class="sub-header">
                                        Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element. Add <code>.btn-rounded</code> to default button to get rounded corners.
                                    </p>

                                    <div class="row">
                                        <div class="col-xl-4 col-md-6">
                                            <div class="card">
                                                <div class="card-header bg-light">
                                                    <h3 class="card-title mb-0">Card Light</h3>
                                                </div>
                                                <div class="card-body">
                                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-md-6">
                                            <div class="card">
                                                <div class="card-header bg-primary">
                                                    <h3 class="card-title text-white mb-0">Card Primary</h3>
                                                </div>
                                                <div class="card-body">
                                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-md-6">
                                            <div class="card">
                                                <div class="card-header bg-success">
                                                    <h3 class="card-title text-white mb-0">Card Success</h3>
                                                </div>
                                                <div class="card-body">
                                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                </div>
                                            </div>
                                        </div>

                                
                                        <div class="col-xl-4 col-md-6">
                                            <div class="card">
                                                <div class="card-header bg-info">
                                                    <h3 class="card-title text-white mb-0">Card Info</h3>
                                                </div>
                                                <div class="card-body">
                                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-md-6">
                                            <div class="card">
                                                <div class="card-header bg-warning">
                                                    <h3 class="card-title text-white mb-0">Card Warning</h3>
                                                </div>
                                                <div class="card-body">
                                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-md-6">
                                            <div class="card">
                                                <div class="card-header bg-danger">
                                                    <h3 class="card-title text-white mb-0">Card Danger</h3>
                                                </div>
                                                <div class="card-body">
                                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-md-6">
                                            <div class="card mb-0">
                                                <div class="card-header bg-teal">
                                                    <h3 class="card-title text-white mb-0">Card Teal</h3>
                                                </div>
                                                <div class="card-body">
                                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-md-6">
                                            <div class="card mb-0">
                                                <div class="card-header bg-dark">
                                                    <h3 class="card-title text-light mb-0">Card Dark</h3>
                                                </div>
                                                <div class="card-body">
                                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end -->

                        <!-- start  -->
                        <div class="row mt-5">
                            <div class="col-12">
                                <div>
                                    <h4 class="header-title">Tabs</h4>
                                    <p class="sub-header">
                                        Add quick, dynamic tab functionality to transition through panes of local content, even via dropdown menus. Nested tabs are not supported.
                                    </p>

                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="header-title mb-4">Default Tabs</h4>
                                                    <ul class="nav nav-tabs">
                                                        <li class="nav-item">
                                                            <a href="ui-elements.html#home" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                                <span class="d-block d-sm-none"><i class="mdi mdi-home-variant-outline font-18"></i></span>
                                                                <span class="d-none d-sm-block">Home</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="ui-elements.html#profile" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                                                <span class="d-block d-sm-none"><i class="mdi mdi-account-outline font-18"></i></span>
                                                                <span class="d-none d-sm-block">Profile</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="ui-elements.html#messages" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                                <span class="d-block d-sm-none"><i class="mdi mdi-email-outline font-18"></i></span>
                                                                <span class="d-none d-sm-block">Messages</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="ui-elements.html#settings" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                                <span class="d-block d-sm-none"><i class="mdi mdi-settings-outline font-18"></i></span>
                                                                <span class="d-none d-sm-block">Settings</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane" id="home">
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                                            <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                        </div>
                                                        <div class="tab-pane active" id="profile">
                                                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                                        </div>
                                                        <div class="tab-pane" id="messages">
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                        </div>
                                                        <div class="tab-pane" id="settings">
                                                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="header-title mb-4">Tabs Justified</h4>
                                                    <ul class="nav nav-pills navtab-bg nav-justified">
                                                        <li class="nav-item">
                                                            <a href="ui-elements.html#home1" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                                <span class="d-block d-sm-none"><i class="mdi mdi-home-variant-outline font-18"></i></span>
                                                                <span class="d-none d-sm-block">Home</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="ui-elements.html#profile1" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                                                <span class="d-block d-sm-none"><i class="mdi mdi-account-outline font-18"></i></span>
                                                                <span class="d-none d-sm-block">Profile</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="ui-elements.html#messages1" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                                <span class="d-block d-sm-none"><i class="mdi mdi-email-outline font-18"></i></span>
                                                                <span class="d-none d-sm-block">Messages</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="ui-elements.html#settings1" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                                <span class="d-block d-sm-none"><i class="mdi mdi-settings-outline font-18"></i></span>
                                                                <span class="d-none d-sm-block">Settings</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane" id="home1">
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                                            <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                        </div>
                                                        <div class="tab-pane show active" id="profile1">
                                                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                                        </div>
                                                        <div class="tab-pane" id="messages1">
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                                            <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                        </div>
                                                        <div class="tab-pane" id="settings1">
                                                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="header-title mb-4">Tabs Bordered</h4>
                                                    <ul class="nav nav-tabs tabs-bordered">
                                                        <li class="nav-item">
                                                            <a href="ui-elements.html#home-b1" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                                <span class="d-block d-sm-none"><i class="mdi mdi-home-variant-outline font-18"></i></span>
                                                                <span class="d-none d-sm-block">Home</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="ui-elements.html#profile-b1" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                                                <span class="d-block d-sm-none"><i class="mdi mdi-account-outline font-18"></i></span>
                                                                <span class="d-none d-sm-block">Profile</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="ui-elements.html#messages-b1" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                                <span class="d-block d-sm-none"><i class="mdi mdi-email-outline font-18"></i></span>
                                                                <span class="d-none d-sm-block">Messages</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="ui-elements.html#settings-b1" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                                <span class="d-block d-sm-none"><i class="mdi mdi-settings-outline font-18"></i></span>
                                                                <span class="d-none d-sm-block">Settings</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane" id="home-b1">
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                                            <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                        </div>
                                                        <div class="tab-pane active" id="profile-b1">
                                                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                                        </div>
                                                        <div class="tab-pane" id="messages-b1">
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                                            <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                        </div>
                                                        <div class="tab-pane" id="settings-b1">
                                                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="header-title mb-4">Tabs Bordered Justified</h4>
                                                    <ul class="nav nav-tabs tabs-bordered nav-justified">
                                                        <li class="nav-item">
                                                            <a href="ui-elements.html#home-b2" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                                <span class="d-block d-sm-none"><i class="mdi mdi-home-variant-outline font-18"></i></span>
                                                                <span class="d-none d-sm-block">Home</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="ui-elements.html#profile-b2" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                                                <span class="d-block d-sm-none"><i class="mdi mdi-account-outline font-18"></i></span>
                                                                <span class="d-none d-sm-block">Profile</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="ui-elements.html#messages-b2" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                                <span class="d-block d-sm-none"><i class="mdi mdi-email-outline font-18"></i></span>
                                                                <span class="d-none d-sm-block">Messages</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="ui-elements.html#settings-b2" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                                <span class="d-block d-sm-none"><i class="mdi mdi-settings-outline font-18"></i></span>
                                                                <span class="d-none d-sm-block">Settings</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane" id="home-b2">
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                                            <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                        </div>
                                                        <div class="tab-pane active" id="profile-b2">
                                                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                                        </div>
                                                        <div class="tab-pane" id="messages-b2">
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                                            <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                        </div>
                                                        <div class="tab-pane" id="settings-b2">
                                                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- end row -->

                        <!-- start  -->
                        <div class="row mt-5">
                            <div class="col-12">
                                <div>
                                    <h4 class="header-title">Modals</h4>
                                    <p class="sub-header">
                                        Modals are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults.
                                    </p>

                                    <div class="row">
                                        <div class="col-12">
                                            <!-- sample modal content -->
                                            <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Modal Heading</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h6>Text in a modal</h6>
                                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                            <hr>
                                                            <h6>Overflowing text to show scroll behavior</h6>
                                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->

                                            <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myExtraLargeModalLabel">Extra large modal</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ...
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->

                                            <!--  Modal content for the above example -->
                                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myLargeModalLabel">Large modal</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ...
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->

                                            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="mySmallModalLabel">Small modal</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ...
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->

                                            <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="myCenterModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myCenterModalLabel">Center modal</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ...
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->

                                            <div class="button-list">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal">Standard Modal</button>
                                                <!-- Extra large modal -->
                                                <button class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-xl">Extra Large modal</button>
                                                <!-- Large modal -->
                                                <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>
                                                <!-- Small modal -->
                                                <button  type="button" class="btn btn-warning waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>
                                                <!-- Center modal -->
                                                <button  type="button" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center">Center modal</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end row -->

                        <!-- start  -->
                        <div class="row mt-5">
                            <div class="col-12">
                                <div>
                                    <h4 class="header-title">Progress bars</h4>
                                    <p class="sub-header">
                                        Provide up-to-date feedback on the progress of a workflow or action with simple yet flexible progress bars.
                                    </p>

                                    <div class="row">
                                        <div class="col-lg-10">
                                            <div class="progress mb-3">
                                                <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                                                    <span class="sr-only">95% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress mb-3">
                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress mb-3">
                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                                                    <span class="sr-only">48% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress mb-3">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100" style="width: 82%;">
                                                    <span class="sr-only">82% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress mb-3">
                                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                                                    <span class="sr-only">95% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress mb-3">
                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress mb-3">
                                                <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                                                    <span class="sr-only">95% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-teal progress-bar-striped" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                                                    <span class="sr-only">95% Complete</span>
                                                </div>
                                            </div>

                                            <h5 class="mt-4 font-14">Sizes</h5>
                                            <div class="progress progress-sm mb-3">
                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;">
                                                    <span class="sr-only">89% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress mb-3">
                                                <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;">
                                                    <span class="sr-only">77% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-success progress-bar-striped" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                                    <span class="sr-only">45% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress progress-lg">
                                                <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%;">
                                                    <span class="sr-only">67% Complete</span>
                                                </div>
                                            </div>

                                            <h5 class="mt-4 font-14">Completed</h5>
                                            <div class="progress progress-md">
                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                                                    85%
                                                </div>
                                            </div>

                                            <h5 class="mt-4 font-14">Stacked </h5>
                                            <div class="progress">
                                                <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;" class="progress-bar bg-success progress-bar-striped"></div>
                                                <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%;" class="progress-bar bg-info"></div>
                                                <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 15%;" class="progress-bar bg-warning progress-bar-striped progress-bar-animated"></div>
                                                <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;" class="progress-bar bg-danger progress-bar-striped progress-bar-animated"></div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <!-- start  -->
                        <div class="row mt-5">
                            <div class="col-12">
                                <div>
                                    <h4 class="header-title">Badge</h4>
                                    <p class="sub-header">
                                        Easily highlight new or unread items by adding a <code>&lt;span class="badge"&gt;</code> to links, Bootstrap navs, and more.
                                    </p>

                                    <div class="">
                                        <span class="badge badge-teal">07</span>
                                        <span class="badge badge-primary">15</span>
                                        <span class="badge badge-success">0</span>
                                        <span class="badge badge-info">21</span>
                                        <span class="badge badge-dark">3</span>
                                        <span class="badge badge-warning">35</span>
                                        <span class="badge badge-danger">32</span>
                                        <span class="badge badge-teal badge-pill">07</span>
                                        <span class="badge badge-primary badge-pill">15</span>
                                        <span class="badge badge-success badge-pill">0</span>
                                        <span class="badge badge-info badge-pill">21</span>
                                        <span class="badge badge-dark badge-pill">3</span>
                                        <span class="badge badge-warning badge-pill">35</span>
                                        <span class="badge badge-danger badge-pill">32</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <!-- start  -->
                        <div class="row mt-5">
                            <div class="col-12">
                                <div>
                                    <h4 class="header-title">Pagination</h4>
                                    <p class="sub-header">
                                        Provide pagination links for your site or app with the multi-page pagination component.
                                    </p>

                                    <div>
                                        <h6 class="font-14 mb-3">Default</h6>
                                        <nav>
                                            <ul class="pagination">
                                                <li class="page-item">
                                                    <a class="page-link" href="ui-elements.html#" aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="ui-elements.html#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="ui-elements.html#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="ui-elements.html#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="ui-elements.html#">4</a></li>
                                                <li class="page-item"><a class="page-link" href="ui-elements.html#">5</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="ui-elements.html#" aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>

                                        <h6 class="mt-4 font-14 mb-3">Split Pagination</h6>
                                        <nav>
                                            <ul class="pagination pagination-split">
                                                <li class="page-item">
                                                    <a class="page-link" href="ui-elements.html#" aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="ui-elements.html#">1</a></li>
                                                <li class="page-item active"><a class="page-link" href="ui-elements.html#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="ui-elements.html#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="ui-elements.html#">4</a></li>
                                                <li class="page-item"><a class="page-link" href="ui-elements.html#">5</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="ui-elements.html#" aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>

                                        <h6 class="mt-4 font-14 mb-3">Sizing</h6>
                                        <nav>
                                            <ul class="pagination pagination-lg mb-0">
                                                <li class="page-item">
                                                    <a class="page-link" href="ui-elements.html#" aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="ui-elements.html#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="ui-elements.html#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="ui-elements.html#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="ui-elements.html#" aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>

                                    </div>
                                    
                                </div>

                            </div>
                        </div>
                        <!-- end row -->

                        <!-- start  -->
                        <div class="row mt-5">
                            <div class="col-12">
                                <div>
                                    <h4 class="header-title">Popovers</h4>
                                    <p class="sub-header">
                                        Add small overlays of content, like those on the iPad, to any element for housing secondary information.
                                    </p>

                                    <div class="button-list mt-3">
                                        <button type="button" class="btn btn-light" data-container="body" title="" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="">
                                            Popover on top
                                        </button>

                                        <button type="button" class="btn btn-light" data-container="body" title="" data-toggle="popover" data-placement="bottom" data-content="Vivamus
                                                        sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="">
                                            Popover on bottom
                                        </button>

                                        <button type="button" class="btn btn-light" data-container="body" title="" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="">
                                            Popover on right
                                        </button>

                                        <button type="button" class="btn btn-light" data-container="body" title="" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover title">
                                            Popover on left
                                        </button>

                                        <button tabindex="0" class="btn btn-light" data-toggle="popover" data-trigger="focus" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="Dismissible popover">
                                            Dismissible popover
                                        </button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <!-- start  -->
                        <div class="row mt-5">
                            <div class="col-12">
                                <div>
                                    <h4 class="header-title">Tooltips</h4>
                                    <p class="sub-header">
                                        Four options are available: top, right, bottom, and left aligned.
                                    </p>
                            
                                    <div class="button-list mt-3">

                                        <button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">Tooltip on top</button>

                                        <button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">Tooltip on bottom</button>

                                        <button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>

                                        <button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right">Tooltip on right</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mt-5">
                                    <h4 class="header-title">Border spinner</h4>
                                    <p class="sub-header">
                                        Use the border spinners for a lightweight loading indicator.
                                    </p>

                                    <div class="">
                                        <div class="spinner-border text-primary m-2" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="spinner-border text-secondary m-2" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="spinner-border text-success m-2" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="spinner-border text-danger m-2" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="spinner-border text-warning m-2" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="spinner-border text-info m-2" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-6">
                                <div class="mt-5">
                                    <h4 class="header-title">Growing spinner</h4>
                                    <p class="sub-header">
                                        If you don’t fancy a border spinner, switch to the grow spinner. While it doesn’t technically spin, it does repeatedly grow!
                                    </p>

                                    <div class="">
                                        <div class="spinner-grow text-primary m-2" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="spinner-grow text-secondary m-2" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="spinner-grow text-success m-2" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="spinner-grow text-danger m-2" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="spinner-grow text-warning m-2" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="spinner-grow text-info m-2" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- end container-fluid -->

                    

                    <!-- Footer Start -->
                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    2017 - 2020 &copy; Simple theme by <a href="ui-elements.html">Coderthemes</a>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- end Footer -->

                </div>
                <!-- end content -->
            </div>
            <!-- END content-page -->
        </div>
        <!-- END wrapper -->

        
        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="mdi mdi-close"></i>
                </a>
                <h5 class="font-16 m-0 text-white">Theme Customizer</h5>
            </div>
            <div class="slimscroll-menu">
        
                <div class="p-4">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, layout, etc.
                    </div>
                    <div class="mb-2">
                        <img src="assets/images/layouts/light.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>
            
                    <div class="mb-2">
                        <img src="assets/images/layouts/dark.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" 
                            data-appStyle="assets/css/app-dark.min.css" />
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
            
                    <div class="mb-2">
                        <img src="assets/images/layouts/rtl.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

                    <a href="https://1.envato.market/EK71X" class="btn btn-danger btn-block mt-3" target="_blank"><i class="mdi mdi-download mr-1"></i> Download Now</a>
                </div>
            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <a href="javascript:void(0);" class="right-bar-toggle demos-show-btn">
            <i class="mdi mdi-settings-outline mdi-spin"></i> &nbsp;Choose Demos
        </a>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

    </body>

</html>