<header class="main-header no-border">
    <!--Header-Top-->

    <!-- Start Header-Upper-->
    <div class="header-upper rounded-pill shadow-lg" style="background-color:white;left: 50%;transform:translateX(-50%)">
        <div class="container container-1520 clearfix">

            <div class="header-inner rel d-flex align-items-center justify-content-between mx-auto ">
                <div class="logo-outer">
                    <div class="logo"><a href="{{url('/')}}"><img src="{{ asset('assets/logo-abonie.png')}}" alt="Logo" style="width: 60px" title="Logo"></a></div>
                </div>

                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header py-10">
                           <div class="mobile-logo">
                               <a href="{{url('/music.co')}}">
                                    <img src="{{ asset('assets/logo-abonie.png')}}" style="width: 50px" alt="Logo" title="Logo">
                               </a>
                           </div>

                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse">
                            <ul class="navigation onepage clearfix">
                                <li><a href="#home">Home</a></li>
                                <li><a href="#features">features</a></li>
                                <li><a href="#about">about</a></li>
                                <li><a href="#services">services</a></li>
                                <li><a href="#testimonials">testimonials</a></li>
                                <li><a href="#work-step">work step</a></li>
                            </ul>
                        </div>

                    </nav>
                    <!-- Main Menu End-->
                </div>


                <!-- Menu Button -->
                <div class="menu-btns">
                    <a href="{{ route('login') }}" class="theme-btn rounded-pill">Get Started <i class="far fa-arrow-right"></i></a>
                    {{-- <a href="cantact.html" class="light-btn">Sign Up</a> --}}
                </div>
            </div>
        </div>

        {{-- <div class="bg-lines">
           <span></span><span></span>
           <span></span><span></span>
        </div> --}}
    </div>
    <!--End Header Upper-->
</header>
