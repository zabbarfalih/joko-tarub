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
                        <a class="text-decoration-none" href="https://t.me/menfessbatara">
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
        <div id="desc" class="container min-vh-100 d-flex justify-content-center align-items-center">
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
                        <span class="text-title3-joko-tarub text-secondary text-center">Analisis Kuadran Dimensi Budaya Literasi IPK dengan Indeks Pembangunan Literasi Masyarakat</span>
                        <div class="chart-container d-flex justify-content-center" style="position: relative; height:60vh; width:96vw">
                            <canvas id="chart"></canvas>
                        </div>
                    </div>
                </div>                   
            </div>
        </div>

        <!-- ================================================================= -->
        <!-- =================== Kalkulator Landing Banner =================== -->
        <!-- ================================================================= -->
        <div id="kalkulator-ipk" class="container min-vh-100 d-flex justify-content-center align-items-center">
            <div class="card container border-0 p-2">
                <div class="card-body d-flex flex-column justify-content-center">
                    <div class="d-flex align-items-start">
                        <div>
                            <select class="form-select select-kalkulator">
                                <option value="budaya-literasi" selected>Budaya Literasi</option>
                                <option value="ekonomi-budaya">Ekonomi Budaya</option>
                                <option value="pendidikan">Pendidikan</option>
                                <option value="ketahanan-soosial-budaya">Ketahanan Sosial Budaya</option>
                                <option value="warisan-budaya">Warisan Budaya</option>
                                <option value="ekspresi-budaya">Ekspresi Budaya</option>
                                <option value="gender">Gender</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <h1 class="text-title2-joko-tarub">Kalkulator IPK</h1>
                        <div class="container p-4">
                            <div class="mb-3">
                                <label for="budaya-literasi-1" class="form-label">Persentase penduduk usia 10 tahun ke atas yang membaca selain kitab suci baik cetak maupun elektronik dalam seminggu terakhir</label>
                                <div id="budaya-literasi-1-help" class="form-text text-danger">*0-70</div>
                                <input type="number" class="form-control" id="budaya-literasi-1" min="0" max="70">
                            </div>
                            <div class="mb-3">
                                <label for="budaya-literasi-2" class="form-label">Persentase penduduk usia 10 tahun ke atas yang mengunjungi perpustakaan/memanfaatkan taman bacaan masyarakat dalam 3 bulan terakhir</label>
                                <div id="budaya-literasi-2-help" class="form-text text-danger">*0-85</div>
                                <input type="number" class="form-control" id="budaya-literasi-2" min="0" max="85">
                            </div>
                            <div class="mb-3">
                                <label for="budaya-literasi-3" class="form-label">Persentase penduduk usia 10 tahun ke atas yang mengunjungi perpustakaan/memanfaatkan taman bacaan masyarakat dalam 3 bulan terakhir</label>
                                <div id="budaya-literasi-3-help" class="form-text text-danger">*0-25</div>
                                <input type="number" class="form-control" id="budaya-literasi-3" min="0" max="25">
                                </div>
                            <button class="btn button-kalkulator">Kalkulasi</button>
                        </div>
                    </div>
                </div>                   
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
                    <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" loop controls class="main-video"></iframe>
                    <h3 class="main-vid-title">house flood animation</h3>
                </div>

                <div class="video-list-container-playlist">
                    <div class="list active">
                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" class="list-video"></iframe>
                        <h3 class="list-title">house flood animation</h3>
                    </div>

                    <div class="list">
                        <iframe src="https://www.youtube.com/embed/WVqcpoVtnGg" class="list-video"></iframe>
                        <h3 class="list-title">seminar cuy</h3>
                    </div>

                    <div class="list">
                        <iframe src="https://www.youtube.com/embed/KA7r-iZy4qg" class="list-video"></iframe>
                        <h3 class="list-title">SOP perkuliahan</h3>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- End #main -->

    <x-slot name="js_body">
        <script>
            $(document).ready(function() {
                // Memuat data dari file JSON
                $.getJSON('assets/json/dataWilayah.json', function(data) {
                    const dataWilayah = data;
        
                    // Lanjutkan dengan skrip yang ada di bawah ini
                    
                    const backgroundColors = dataWilayah.map(wilayah => {
                        if (wilayah.wilayah === 'Indonesia') {
                            return '#094B72';
                        } else if (wilayah.wilayah === 'Jawa Timur' || wilayah.wilayah === 'Jawa Tengah' || wilayah.wilayah === 'DI Yogyakarta') {
                            return '#E7C773'; 
                        } else {
                            return 'grey';
                        }
                    });
                    
                    const quadrants = {
                        id: 'quadrants',
                        beforeDraw(chart, args, options) {
                            const {ctx, chartArea: {left, top, right, bottom}, scales: {x, y}} = chart;
                            ctx.save();
        
                            // Menggambar garis horizontal pada sumbu y (y = 57,72)
                            ctx.beginPath();
                            ctx.moveTo(left, y.getPixelForValue(57.72));
                            ctx.lineTo(right, y.getPixelForValue(57.72));
                            ctx.lineWidth = 2;
                            ctx.strokeStyle = 'black';
                            ctx.stroke();
        
                            // Menggambar garis vertikal pada sumbu x (x = 67,61)
                            ctx.beginPath();
                            ctx.moveTo(x.getPixelForValue(67.61), top);
                            ctx.lineTo(x.getPixelForValue(67.61), bottom);
                            ctx.lineWidth = 2;
                            ctx.strokeStyle = 'black';
                            ctx.stroke();
        
                            ctx.restore();
                        }
                    };
        
                    const ctx = document.getElementById('chart').getContext('2d');
                    const scatterChart = new Chart(ctx, {
                        type: 'scatter',
                        data: {
                            datasets: [{
                                label: 'Wilayah',
                                data: dataWilayah.map(wilayah => ({ x: wilayah.x, y: wilayah.y, label: wilayah.wilayah })),
                                pointBackgroundColor: backgroundColors,
                                borderWidth: 1,
                                pointRadius: 5,
                                pointHoverRadius: 8,
                                pointBorderColor: 'white',
                                pointHoverBorderColor: 'white',
                                pointStyle: 'circle',
                                hoverBorderWidth: 2,
                                hoverRadius: 8,
                            }]
                        },
                        options: {
                            responsive: true,
                            scales: {
                                x: {
                                    type: 'linear',
                                    position: 'bottom',
                                    title: {
                                        display: true,
                                        text: 'Indeks Pembangunan Literasi Masyarakat (Med = 67,61)',
                                        color: 'black',
                                        font: {
                                            size: 14,
                                            weight: 'bold'
                                        }
                                    },
                                    grid: {
                                        display: false
                                    }
                                },
                                y: {
                                    type: 'linear',
                                    title: {
                                        display: true,
                                        text: 'Dimensi Budaya Literasi (Med = 57,72)',
                                        color: 'black',
                                        font: {
                                            size: 14,
                                            weight: 'bold'
                                        }
                                    },
                                    grid: {
                                        display: false
                                    }
                                }
                            },
                            plugins: {
                                tooltip: {
                                    callbacks: {
                                        label: function(context) {
                                            const label = context.dataset.data[context.dataIndex].label;
                                            const x = context.dataset.data[context.dataIndex].x;
                                            const y = context.dataset.data[context.dataIndex].y;
                                            return `${label}: Indeks Pembangunan Literasi Masyarakat = ${x}, Dimensi Budaya Literasi = ${y}`;
                                        }
                                    }
                                },
                                quadrants: {
                                }
                            }
                        },
                        plugins: [quadrants]
                    });
                });
            });
        </script>
    </x-slot>
</x-home.layouts.main>
