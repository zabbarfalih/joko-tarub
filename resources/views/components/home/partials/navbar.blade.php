    <!-- ================================================================= -->
    <!-- ========================== Header Area ========================== -->
    <!-- ================================================================= -->

    <header class="header-area-desktop miwlo-white-bg miwlo-header-black">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-md miwlo-initial-navbar">
                        <a class="navbar-brand" href={{ route('home.index') }}>
                            <span class="logo-container">
                                <span class="logo">
                                    <img src={{ asset("assets/images/logo.webp") }} alt="logo" height="48px">
                                </span>
                                <span>
                                    <div class="logo-text">
                                        Mari Lestarikan
                                    </div>
                                    <div class="logo-text-bold">
                                        Budaya Jawa!!
                                    </div>
                                </span>
                            </span>
                        </a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto">
                                <li class="menu-item">
                                    <a href="{{ route('home.index') }}#bagan-ipk">Bagan IPK</a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ route('home.index') }}#kalkulator-ipk">Kalkulator IPK</a>
                                </li>
                                <li class="menu-item mega-drop-down">
                                    <a href="{{ route('home.index') }}#fitur">Fitur</a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ route('home.index') }}#terjemahan">Terjemahan</a></li>
                                <li class="menu-item miwlo-dropdown">
                                    <a href="{{ route('home.index') }}#tutorial">Tutorial</a></li>
                                <li class="menu-item">
                                    <a href={{ route('home.dolanan') }}>Dolanan</a></li>
                            </ul>

                        </div>
                        <!-- .collapse .navbar-collapse -->
                    </nav>
                </div>
                <!-- .col-xs-12 -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </header>
    <!-- .header-area-desktop -->


    <!-- ================================================================= -->
    <!-- ======================== Mobile Menu Area ======================= -->
    <!-- ================================================================= -->

    <div class="miwlo-header-area-mobile miwlo-white-bg">
        <div class="miwlo-header-mobile">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <ul>
                            <li>
                                <a class="navbar-brand" href={{ route('home.index') }}>
                                    <div class="fw-bolder">
                                        <span class="logo">
                                            <img src={{ asset("assets/images/logo.webp") }} alt="logo" height="48px">
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <!-- <li class="mobile-header-btn-wrapper">
                                    <a class="miwlo-btn-pill btn-black radius" href="#">Purchase Now</a>
                                </li> -->
                            <li>
                                <a href="#">
                                    <span>
                                        <span class="bar"></span>
                                        <span class="bar"></span>
                                        <span class="bar"></span>
                                    </span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{ route('home.index') }}#bagan-ipk">Bagan IPK</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('home.index') }}#kalkulator-ipk">Kalkulator IPK</a>
                                    </li>
                                    <li><a href="{{ route('home.index') }}#fitur">Fitur</a>
                                        <!-- <ul>
                                            <li><a href="index.html">App Landing</a></li>
                                            <li><a href="saas-landing.html">SaaS Landing</a></li>
                                            <li><a href="digital-landing.html">Digital Landing</a></li>
                                            <li><a href="product-landing.html">Product Landing</a></li>
                                        </ul> -->
                                    </li>
                                    <li><a href="{{ route('home.index') }}#terjemahan">Terjemahan</a></li>
                                    <li><a href="{{ route('home.index') }}#tutorial">Tutorial</a></li>
                                    <li><a href={{ route('home.dolanan') }}>Dolanan</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- .col -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container-fluid -->
        </div>
        <!-- .miwlo-header-mobile -->
    </div>
    <!-- .miwlo-header-area-mobile -->