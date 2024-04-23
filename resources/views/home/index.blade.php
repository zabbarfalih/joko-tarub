<x-home.layouts.main>
    <x-slot name="css">
    </x-slot>
    
    <x-slot name="js_head">
        <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>
    </x-slot>

    <main id="main">
        <!-- ================================================================= -->
        <!-- ====================== Saas Landing Banner ====================== -->
        <!-- ================================================================= -->
        <div class="hero">
            <div class="row hero-container">
                <div class="hero-text col-md-6 d-flex flex-column gap-3">
                    <div class="paribasan lh-lg text-center">
                        <span class="paribasan-logo">Paribasan</span> Dhuwur wekasane, endhek wiwitane
                    </div>
                    <h1>Joko Tarub</h1>
                    <h3>Jowo Kromo Tansah <br />Murub</h3>

                    <div class="d-flex gap-2">
                        <a class="text-decoration-none" href="#terjemahan">
                            <button class="hero-btn">
                                Monggo <br/> Ditingali
                            </button>
                        </a>
                        <a class="text-decoration-none" href="https://t.me/BataraJavEdu">
                            <button class="hero-btn">
                                <div class="d-flex button-telegram">
                                    <i class='fab fa-telegram-plane'></i>
                                    <div>
                                        mlebu ing <br/> Batara
                                    </div>
                                </div>
                            </button>
                        </a>
                    </div>

                </div>
                <div class="col-md-6 position-relative">
                    <div class="hero-img-bg">
                        <img src={{ asset("assets/images/shape/Ellipse.png")}} alt="Ellipse" class="ellipse" />
                    </div>
                    <div class="hero-img">
                        <img src={{ asset("assets/images/jawa/wayang-hero.webp")}} alt="Wayang">
                    </div>
                    {{-- <div class="hero-card">
                        Gatotkaca
                        <span>Wayang Kulit</span>
                    </div> --}}
                </div>
            </div>
        </div>

        <!-- ================================================================= -->
        <!-- ====================== Desc Landing Banner ====================== -->
        <!-- ================================================================= -->
        <div id="desc" class="container-desc-joko-tarub container-fluid min-vh-100 d-flex justify-content-center align-items-center">
            <div class="row p-5 align-items-center">
                <div class="col-12">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <div class="image-joko-tarub">
                            <img src={{ asset("assets/images/logo.webp") }} alt="logo" height="80px">
                        </div>
                        <h1 class="text-title-joko-tarub">Joko Tarub</h1>
                        <p class="text-desc-joko-tarub">
                            Website Joko Tarub merupakan salah satu website yang diciptakan untuk mengoptimalkan keefektifan kebijakan pemerintah dalam meningkatkan dimensi budaya literasi dalam indeks pembangunan kebudayaan. Beberapa fitur yang disajikan bisa digunakan oleh generasi muda Indonesia untuk meningkatkan kemampuan dalam hal penggunaan bahasa jawa khususnya dimensi budaya literasi.

                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ================================================================= -->
        <!-- ====================== Bagan Landing Banner ===================== -->
        <!-- ================================================================= -->
        <div id="bagan-ipk" class="container d-flex min-vh-100 justify-content-center align-items-center">
            <div class="card container border-0 p-2">
                <div class="card-body d-flex flex-column justify-content-center">
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <h1 class="text-title2-joko-tarub">Bagan IPK</h1>
                        <span class="text-title3-joko-tarub text-center pb-2">Analisis Kuadran <span class="text-title3-bold-joko-tarub">Dimensi Budaya Literasi IPK</span> dengan <span class="text-title3-bold-joko-tarub">Indeks Pembangunan Literasi Masyarakat</span></span>
                        <div class="d-flex justify-content-center">
                            <div class="d-flex gap-2 pb-3 quadrant-container">
                                <div class="d-flex flex-column gap-2">
                                    <div class="d-flex gap-1 align-items-center quadrant-label-box ">
                                        <div class="quadrant-chart-box kuadran-1"></div>
                                        <span>: Kuadran 1 (IPK Tinggi, Indeks Pembanding Rendah)</span>
                                    </div>
                                    <div class="d-flex gap-1 align-items-center quadrant-label-box">
                                        <div class="quadrant-chart-box kuadran-2"></div>
                                        <span>: Kuadran 2 (IPK Tinggi, Indeks Pembanding Tinggi)</span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column gap-2">
                                    <div class="d-flex gap-1 align-items-center quadrant-label-box ">
                                        <div class="quadrant-chart-box kuadran-3"></div>
                                        <span>: Kuadran 3 (IPK Rendah, Indeks Pembanding Tinggi)</span>
                                    </div>
                                    <div class="d-flex gap-1 align-items-center quadrant-label-box ">
                                        <div class="quadrant-chart-box kuadran-4"></div>
                                        <span>: Kuadran 4 (IPK Rendah, Indeks Pembanding rendah)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center" style="position: relative; height:60vh; width:66vw">
                            <canvas id="chart"></canvas>
                        </div>
                    </div>
                </div>                   
            </div>
        </div>

        <!-- ================================================================= -->
        <!-- =================== Kalkulator Landing Banner =================== -->
        <!-- ================================================================= -->
        <div id="pilih-kalkulator-ipk" class="container min-vh-100 d-flex justify-content-center">
            <div class="card container border-0 p-2">
                <div class="card-body" id="pilih-kalkulator">
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <h1 class="text-title2-joko-tarub">Pilih Kalkulator</h1>

                        <div class="d-flex gap-2" data-aos="fade-up">
                            <a href="#kalkulator-2" class="text-decoration-none">
                                <button id="btn-kalkulator-ipk" class="btn button-kalkulator-2">
                                    Kalkulator IPK
                                </button>
                            </a>
                            <a href="#kalkulator-1" class="text-decoration-none">
                                <button id="btn-kalkulator-dimensi-ipk" class="btn button-kalkulator-2">
                                    Kalkulator Dimensi IPK
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

                <x-home.partials.kalkulator-dimensi />
                <x-home.partials.kalkulator-agregat />
            </div>
        </div>

        <!-- ================================================================= -->
        <!-- =========================== Fitur  ========================== -->
        <!-- ================================================================= -->

        <div id="fitur" class="container">
            <div class="row p-5 align-items-center">
                <div class="col-12 col-md-5">
                    <h1>Fitur apa wae kang disedyakake?</h1>

                    <div class="miwlo-parallax position-absolute bottom-10 start-10">
                        <div class="layer" data-depth=".5">
                            <div data-aos="fade-up" data-aos-delay="1200">
                                <img data-parallax='{"y" : 100}' width="200" src={{ asset("assets/images/jawa/man.webp")}} alt="wong">
                            </div>
                        </div>
                        <!-- .layer -->
                    </div>

                </div>
                <div class="col-12 col-md-7">
                    <div class="row mb-md-4">
                        <div class="col-12 col-md-6 col-lg aos-init aos-animate mb-4 mb-md-0" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="why-choice-options option-one">
                                <div class="why-choice-options-img-wrap">
                                    <img src={{ asset("assets/images/icons/icon-10.webp")}} width="60" alt="Address">
                                </div>
                                <!-- .why-choice-options -->
                                <h3>Terjemahan Jawa</h3>
                                <p>Menerjemahkan dari bahasa indonesia ke dalam bahasa jawa ngoko atau jawa halus</p>
                            </div>
                            <!-- .why-choice-options -->
                        </div>
                        <div class="col-12 col-md-6 col-lg aos-init aos-animate mb-4 mb-md-0" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="why-choice-options option-one">
                                <div class="why-choice-options-img-wrap">
                                    <img src={{ asset("assets/images/icons/yt.webp")}} width="60" alt="video">
                                </div>
                                <!-- .why-choice-options -->
                                <h3>Video Penerapan</h3>
                                <p>Penerapan etika yang sesuai dengan yang diajarkan para leluhur.</p>
                            </div>
                            <!-- .why-choice-options -->
                        </div>
                    </div>
                    <div class="row text justify-content-center">
                        <div class="col-12 col-md-6 col-lg-6 aos-init aos-animate mb-4 mb-md-0" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="why-choice-options option-one">
                                <div class="why-choice-options-img-wrap">
                                    <img src={{ asset("assets/images/icons/rocket.webp")}} width="60" alt="Address">
                                </div>
                                <!-- .why-choice-options -->
                                <h3>Dolanan Basa Jawa</h3>
                                <p>Latih kemampuanmu dengan bermain game seru!</p>
                            </div>
                            <!-- .why-choice-options -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container mb-4">
            <!-- .miwlo-saas-landing-banner-bg -->
            <div class="saas-landing-top-shape">
                <div class="circle-dot-left miwlo-parallax">
                    <div class="layer" data-depth="2">
                        <div data-aos="fade-up" data-aos-delay="1200">
                            <img data-parallax='{"y" : 100}' width="50" src={{ asset("assets/images/jawa/pepet.webp")}} alt="pepet">
                        </div>
                    </div>
                    <!-- .layer -->
                </div>
                <!-- .circle-dot-left -->
                <div class="circle-dot-right miwlo-parallax">
                    <div class="layer" data-depth="3">
                        <div data-aos="fade-up" data-aos-delay="1200">
                            <img data-parallax='{"x" : -100}' width="50" src={{ asset("assets/images/jawa/wulu.webp")}} alt="wulu">
                        </div>
                    </div>
                    <!-- .layer -->
                </div>
                <!-- .circle-dot-right -->
            </div>
            <!-- .saas-landing-top-shape -->
            <div class="saas-landing-middle-shape">
                <div class="triangle-shape-left miwlo-parallax">
                    <div class="layer" data-depth="2">
                        <div data-aos="fade-up" data-aos-delay="1000">
                            <img data-parallax='{"x" : -100}' width="100" src={{ asset("assets/images/jawa/layar.webp")}} alt="layar">
                        </div>
                    </div>
                    <!-- .layer -->
                </div>
                <!-- .triangle-dot-left -->
                <div class="triangle-shape-right miwlo-parallax">
                    <div class="layer" data-depth="2">
                        <div data-aos="fade-up" data-aos-delay="1000">
                            <img data-parallax='{"y" : 100}' width="75" src={{ asset("assets/images/jawa/cecak.webp")}} alt="cecak">
                        </div>
                    </div>
                    <!-- .layer -->
                </div>
                <!-- .triangle-dot-right -->
            </div>
            <!-- .saas-landing-middle-shape -->
            <div class="container mb-5">
                <div class="row">
                    <div class="col-md text-center">
                        <!-- .miwlo-saas-landing-banner-text -->
                        <div id="terjemahan" class="miwlo-saas-landing-banner-image p-3 p-md-5 radius">
                            <div data-aos="fade-up" data-aos-delay="700">
                                <!-- <img class="saas-banner-img" src="images/banner/saas-banner-alt.png" alt="Saas Dashboard"> -->
                                <div class="miwlo-contact-form">
                                    <form class="form-translate" name="translate"
                                        onload="buttonTranslate_Clicked(this.form)" action="#">
                                        <label>Pilih Bahasa:</label>
                                        <select id="textValueToTranslate" class="form-select mb-3"
                                            onchange="buttonTranslate_Clicked(this.form)">
                                            <option value="jawaindo" selected>Jawa ke Indonesia</option>
                                            <option value="indojawa">Indonesia ke Jawa (Ngoko)</option>
                                            <option value="1">Indonesia ke Jawa (Krama Alus)</option>
                                            <option value="4">Indonesia ke Jawa (Krama Lugu)</option>
                                        </select>
                                        <textarea id="textareaPassageToTranslate" class="message1 border-light mb-3 mb-md-4"
                                            name="input_text" placeholder="Masukkan teks"
                                            onkeyup="buttonTranslate_Clicked(this.form)"></textarea>
                                        <textarea class="message2 border-light" name="translate_bocahkampus"
                                            placeholder="Terjemahan" readonly></textarea>
                                    </form>
                                </div>
                                <!-- .contact -->
                            </div>
                            <div class="miwlo-saas-banner-img-left-shape miwlo-parallax">
                                <!-- <div class="layer" data-depth=".5">
                                    <div data-aos="fade-up" data-aos-delay="1200">
                                        <img data-parallax='{"y" : 100}' width="100" src="images/jawa/wayang.png" alt="sus">
                                    </div>
                                </div> -->
                                <!-- .layer -->
                            </div>
                            <!-- .miwlo-saas-banner-img-left-shape -->
                            <div class="miwlo-saas-banner-img-right-shape miwlo-parallax">
                                <div class="layer" data-depth=".5">
                                    <div data-aos="fade-up" data-aos-delay="1200">
                                        <img data-parallax='{"y" : 50}' width="175" src={{ asset("assets/images/jawa/gunungan-2.webp")}}
                                            alt="gunungan">
                                    </div>
                                </div>
                                <!-- .layer -->
                            </div>
                            <!-- .miwlo-saas-banner-img-right-shape -->
                        </div>
                    </div>
                    <!-- .col-md -->
                </div>
                <!-- .row -->

            </div>
            <!-- .container -->
        </div>
        <!-- .miwlo-saas-landing-banner-wrap -->

        <!-- ================================================================= -->
        <!-- ===========================  Playlist  ========================== -->
        <!-- ================================================================= -->

        <div class="my-5">
            <h1 class="text-center">Video Penerapan</h1>
            <div id="tutorial" class="container-playlist mt-5">
                <div class="main-video-container-playlist">
                    <iframe src="https://www.youtube.com/embed/u1j9uwNLJ7c" loop controls class="main-video"></iframe>
                    <h3 class="main-vid-title">Tutorial Bahasa Jawa 1</h3>
                </div>

                <div class="video-list-container-playlist">
                    <div class="list active">
                        <iframe src="https://www.youtube.com/embed/u1j9uwNLJ7c" class="list-video"></iframe>
                        <h3 class="list-title">Tutorial Bahasa Jawa 1</h3>
                    </div>

                    <div class="list">
                        <iframe src="https://www.youtube.com/embed/LzKI2nTgJDw" class="list-video"></iframe>
                        <h3 class="list-title">Tutorial Bahasa Jawa 2</h3>
                    </div>

                    <div class="list">
                        <iframe src="https://www.youtube.com/embed/zCNwNI8Q8Dg" class="list-video"></iframe>
                        <h3 class="list-title">Tutorial Bahasa Jawa 3</h3>
                    </div>

                    <div class="list">
                        <iframe src="https://www.youtube.com/embed/8owaTqo_ZrQ" class="list-video"></iframe>
                        <h3 class="list-title">Tutorial Bahasa Jawa 4</h3>
                    </div>

                    <div class="list">
                        <iframe src="https://www.youtube.com/embed/i68QyOc9N0s" class="list-video"></iframe>
                        <h3 class="list-title">Lagu Jawa Terkini</h3>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- End #main -->

    <x-slot name="js_body">
        <script src={{ asset("assets/js/kalkulator-dimensi.js")}}></script>
        <script src={{ asset("assets/js/kalkulator-ipk.js")}}></script>
        <script src={{ asset("assets/js/data-wilayah.js")}}></script>

        <script async defer src="https://apis.google.com/js/api.js"
        onload="this.onload=function(){};handleClientLoad()"
        onreadystatechange="if (this.readyState === 'complete') this.onload()">
      </script>
      
        <script>
            $(document).ready(function() {
                AOS.init();
            
                $('.container-kalkulator-dimensi').not(':first').hide();
                
                AOS.refresh();
            
                $('.select-kalkulator-2').change(function() {
                    $('.container-kalkulator-dimensi').hide();
                    
                    var selectedContainer = $('.container-kalkulator-dimensi#' + $(this).val());
                    selectedContainer.show();
                    
                    AOS.refresh();
                });
            });
        </script>

    <script>
        $(document).ready(function() {
            $('#kalkulator-ipk').hide();
            $('#kalkulator-dimensi-ipk').hide();

            // Ketika tombol Kalkulator IPK diklik
            $('#btn-kalkulator-ipk').click(function() {
                $('#kalkulator-ipk').show(); // Tampilkan konten Kalkulator IPK
                $('#kalkulator-dimensi-ipk').hide(); // Sembunyikan konten Kalkulator Dimensi IPK
                $('#pilih-kalkulator').hide(); // Tampilkan tombol Kembali
            });
        
            // Ketika tombol Kalkulator Dimensi IPK diklik
            $('#btn-kalkulator-dimensi-ipk').click(function() {
                $('#kalkulator-ipk').hide();
                $('#kalkulator-dimensi-ipk').show(); // Tampilkan konten Kalkulator Dimensi IPK
                $('#pilih-kalkulator').hide(); // Tampilkan tombol Kembali
            });
        
            // Ketika tombol Kembali diklik
            $('#btn-kembali').click(function() {
                $('#kalkulator-ipk').hide(); // Sembunyikan konten Kalkulator IPK
                $('#kalkulator-dimensi-ipk').hide(); // Sembunyikan konten Kalkulator Dimensi IPK
                $('#pilih-kalkulator').show(); // Sembunyikan tombol Kembali
            });

            $('#btn-kembali-2').click(function() {
                $('#kalkulator-ipk').hide(); // Sembunyikan konten Kalkulator IPK
                $('#kalkulator-dimensi-ipk').hide(); // Sembunyikan konten Kalkulator Dimensi IPK
                $('#pilih-kalkulator').show(); // Sembunyikan tombol Kembali
            });
        });
        </script>
    </x-slot>
</x-home.layouts.main>
