 <!-- main header -->
 <header class="main-header header-two">

     <!--Header-Upper-->
     <div class="header-upper">
         <div class="container-fluid clearfix">

             <div class="header-inner d-flex align-items-center">
                 <div class="logo-outer d-flex align-items-center">
                     <div class="logo"><a href="{{ route('welcome') }}"><img src="/assets/images/logos/logo.png"
                                 alt="Logo" title="Logo"></a></div>
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
                                 <li><a href="{{ route('welcome') }}"
                                         class=" @if (Route::currentRouteName() == 'welcome') underline @endif">
                                         home
                                     </a>
                                 </li>
                                 <li>
                                     <a href="{{ route('about') }}"
                                         class=" @if (Route::currentRouteName() == 'about') underline @endif">
                                         about
                                     </a>
                                 </li>
                                 <li>
                                     <a href="{{ route('services') }}"
                                         class=" @if (Route::currentRouteName() == 'services') underline @endif">
                                         services
                                     </a>
                                 </li>
                                 <li>
                                     <a href="{{ route('portfolio') }}"
                                         class=" @if (Route::currentRouteName() == 'portfolio') underline @endif">
                                         portfolio
                                     </a>
                                 </li>
                                 {{-- <li><a href="{{ route('team') }}">Team</a></li> --}}
                                 <li>
                                     <a href="{{ route('blog') }}"
                                         class=" @if (Route::currentRouteName() == 'blog') underline @endif">
                                         blog
                                     </a>
                                 </li>
                                 <li>
                                     <a href="{{ route('contact') }}"
                                         class=" @if (Route::currentRouteName() == 'contact') underline @endif">
                                         contact</a>
                                 </li>
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
                         <form action="contact.html#" class="hide">
                             <input type="text" placeholder="Search" class="searchbox" required="">
                             <button type="submit" class="searchbutton fa fa-search"></button>
                         </form>
                     </div>

                     <!-- menu Btn -->
                     <div class="menu-btn">
                         <a href="contact.html" class="theme-btn br-5">Get a Quote</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!--End Header Upper-->
 </header>
