<x-home.layouts.main>
    <x-slot name="css">
    </x-slot>

    <main id="main">
        <!-- ================================================================= -->
        <!-- ====================== App Landing Banner ======================= -->
        <!-- ================================================================= -->

        <div class="miwlo-app-landing-banner-wrap">
            <div class="app-landing-top-shape">
                <img class="app-circle-shape" src={{ asset("assets/images/jawa/pepet.webp") }} alt="Circle">
                <div class="small-dot-wrapper miwlo-parallax">
                    <div class="layer" data-depth="0.1">
                        <div data-aos="fade-up" data-aos-delay="1000">
                            <img data-parallax='{"y" : 30}' class="app-line-dot-small" width="100" src={{ asset("assets/images/jawa/layar.webp") }}
                                alt="Layar">
                        </div>
                    </div>
                    <!-- .layer -->
                </div>
                <!-- .small-dot-wrapper -->
                <div class="circle-dot-left miwlo-parallax">
                    <div class="layer" data-depth="2">
                        <div data-aos="fade-up" data-aos-delay="1200">
                            <img data-parallax='{"y" : 100}' width="75" src={{ asset("assets/images/jawa/wulu.webp") }} alt="Wulu">
                        </div>
                    </div>
                    <!-- .layer -->
                </div>
                <!-- .circle-dot-left -->
                <div class="circle-dot-right miwlo-parallax">
                    <div class="layer" data-depth="3">
                        <div data-aos="fade-up" data-aos-delay="1200">
                            <img data-parallax='{"y" : 100}' src={{ asset("assets/images/jawa/cecak.webp") }} alt="Circle">
                        </div>
                    </div>
                    <!-- .layer -->
                </div>
                <!-- .circle-dot-right -->
            </div>
            <!-- .app-circle-shape -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 align-self-center">
                        <div class="miwlo-app-landing-banner-text">
                            <h2 data-aos="fade-up" data-aos-delay="1000">Dolanan Tembak <br>Tembung Basa Jawa</h2>
                            <p data-aos="fade-up" data-aos-delay="1200">Latih kemampuanmu dengan bermain game seru!
                            </p>
                        </div>
                        <!-- .miwlo-app-landing-banner-text -->
                    </div>
                    <!-- .col-md-7 -->
                    <div class="col-sm-5">
                        <div class="miwlo-app-landing-banner-right">
                            <div class="miwlo-app-landing-banner-image miwlo-parallax">
                                <div class="mobile-wrapper">
                                    <div data-aos="fade-up" data-aos-delay="1000">
                                        <!-- <img data-parallax='{"y" : 30}' class="mobile" src="images/banner/mobile-border.png" alt="Mobile"> -->
                                        <div class="ztype-frame">
                                            <iframe class="ztype" src='https://zty.pe/?text=538929b7d004729a' width='100%'
                                                height='100%' frameborder='0' frameborder="0" scrolling="no"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <!-- .mobile-wrapper -->
                            </div>
                            <!-- .miwlo-app-landing-banner-image -->
                            <div class="app-landing-moible-bg">
                                <div class="layer" data-depth="1">
                                    <div data-aos="fade-up" data-aos-delay="800">
                                        <img data-parallax='{"x": 100, "y" : 100}' src={{ asset("assets/images/jawa/sus.webp") }} alt="Sus">
                                    </div>
                                </div>
                            </div>
                            <!-- .app-landing-moible-bg -->
                        </div>
                        <!-- .miwlo-app-landing-banner-right -->
                    </div>
                    <!-- .col-md-5 -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
            <div class="app-landing-bottom-shape">
                <div class="app-line-dot-small-bottom miwlo-parallax">
                    <div class="layer" data-depth="1">
                        <div data-aos="fade-up" data-aos-delay="1200">
                            <img data-parallax='{"x" : 80}' width="70" src={{ asset("assets/images/jawa/batik.webp") }} alt="Line Dot">
                        </div>
                    </div>
                </div>
                <!-- .app-line-dot-small-bottom -->
                <div class="circle-dot-bottom-left miwlo-parallax">
                    <div class="layer" data-depth="1">
                        <div data-aos="fade-up" data-aos-delay="1000">
                            <img data-parallax='{"x": -100, "y" : 100}' width="200" src={{ asset("assets/images/jawa/awan.webp") }} alt="Circle">
                        </div>
                    </div>
                </div>
                <!-- .circle-dot-bottom-left -->
            </div>
            <!-- .app-circle-shape -->
        </div>
        <!-- .miwlo-app-landing-banner-wrap -->

    </main><!-- End #main -->

    <x-slot name="js">
    </x-slot>
</x-home.layouts.main>
