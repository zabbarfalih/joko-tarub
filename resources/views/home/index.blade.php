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
                <div id="kalkulator-ipk" class="card-body" data-aos="fade-up">
                    <div>
                        <div>
                            <button id="btn-kembali" class="btn button-kalkulator-2">
                                <i class="fas fa-arrow-left"></i>
                                Kembali
                            </button>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <h1 class="text-title2-joko-tarub">Kalkulator IPK</h1>
                        <form id="kalkulator-form-ipk">
                            {{-- Budaya Literasi Start --}}
                            <div class="container container-kalkulator-agregat p-3">
                                <div class="row">
                                    <div class="col-md-5 p-1">
                                        <div class="content-kalkulator-dimensi p-3">
                                            <div class="text-title4-joko-tarub text-center pb-2">Budaya Literasi</div>
                                            <span>
                                                Aktivitas serta sarana/prasarana pendukung dalam memperoleh, menguji kesahihan, dan menghasilkan informasi dan pengetahuan untuk pemberdayaan kecakapan masyarakat
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-7 p-1">
                                        <div class="content-kalkulator-dimensi p-3">
                                                <div class="mb-3 d-flex align-items-center gap-1">
                                                    <span class="fw-bold">
                                                        Pilih Provinsi :
                                                    </span>
                                                    <div>
                                                        <select class="form-select select-kalkulator" name="provinsi">
                                                            <option value="jawa-timur" selected>Jawa Timur</option>
                                                            <option value="di-yogyakarta">DI Yogyakarta</option>
                                                            <option value="jawa-tengah">Jawa Tengah</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="budaya-literasi-1" class="form-label">Persentase penduduk usia 10 tahun ke atas yang membaca selain kitab suci baik cetak maupun elektronik dalam seminggu terakhir</label>
                                                    <div id="budaya-literasi-1-help" class="form-text text-danger">*0-70</div>
                                                    <input type="number" class="form-control" id="budaya-literasi-1" name="nilai-budaya-literasi-1" min="0" max="70" placeholder="Masukkan dari 0-70" required step="0.01">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="budaya-literasi-2" class="form-label">Persentase penduduk usia 10 tahun ke atas yang mengunjungi perpustakaan/memanfaatkan taman bacaan masyarakat dalam 3 bulan terakhir</label>
                                                    <div id="budaya-literasi-2-help" class="form-text text-danger">*0-85</div>
                                                    <input type="number" class="form-control" id="budaya-literasi-2" name="nilai-budaya-literasi-2" min="0" max="85" placeholder="Masukkan dari 0-85" required step="0.01">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="budaya-literasi-3" class="form-label">Persentase penduduk usia 10 tahun ke atas yang mengunjungi perpustakaan/memanfaatkan taman bacaan masyarakat dalam 3 bulan terakhir</label>
                                                    <div id="budaya-literasi-3-help" class="form-text text-danger">*0-25</div>
                                                    <input type="number" class="form-control" id="budaya-literasi-3" name="nilai-budaya-literasi-3" min="0" max="25" placeholder="Masukkan dari 0-25" required step="0.01">
                                                </div>
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                            {{-- Budaya Literasi End --}}

                            {{-- Ekonomi Budaya Start --}}
                            <div class="container container-kalkulator-agregat p-3">
                                <div class="row">
                                    <div class="col-md-5 p-1">
                                        <div class="content-kalkulator-dimensi p-3">
                                            <div class="text-title4-joko-tarub text-center pb-2">Ekonomi Budaya</div>
                                            <span>
                                                Aktivitas ekonomi yang tercipta sebagai hasil dari pemanfaatan Objek Pemajuan Kebudayaan
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-7 p-1">
                                        <div class="content-kalkulator-dimensi p-3">
                                                <div class="mb-3">
                                                    <label for="ekonomi-budaya-1" class="form-label">Persentase penduduk 15 tahun ke atas yang pernah terlibat sebagai pelaku/pendukung pertunjukan seni yang menjadikan keterlibatannya itu sebagai sumber penghasilan</label>
                                                    <div id="ekonomi-budaya-1-help" class="form-text text-danger">*0-1</div>
                                                    <input type="number" class="form-control" id="ekonomi-budaya-1" name="nilai-ekonomi-budaya-1" min="0" max="1" placeholder="Masukkan dari 0-1" required step="0.01">
                                                </div>
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                            {{-- Ekonomi Budaya End --}}

                            {{-- Pendidikan Start --}}
                            <div class="container container-kalkulator-agregat p-3">
                                <div class="row">
                                    <div class="col-md-5 p-1">
                                        <div class="content-kalkulator-dimensi p-3">
                                            <div class="text-title4-joko-tarub text-center pb-2">Pendidikan</div>
                                            <span>
                                                Usaha sadar dan terencana untuk mewujudkan suasana belajar dan proses pembelajaran yang inklusif agar peserta didik secara aktif mengembangkan potensi dirinya dalam bidang Seni, Budaya, dan Bahasa
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-7 p-1">
                                        <div class="content-kalkulator-dimensi p-3">
                                                <div class="mb-3">
                                                    <label for="pendidikan-1" class="form-label">Rata-rata lama sekolah (MYS) usia 15 tahun ke atas</label>
                                                    <div id="pendidikan-1-help" class="form-text text-danger">*0-15</div>
                                                    <input type="number" class="form-control" id="pendidikan-1" name="nilai-pendidikan-1" min="0" max="15" placeholder="Masukkan dari 0-15" required step="0.01">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="pendidikan-2" class="form-label">Harapan lama sekolah penduduk usia 7 tahun ke atas (HLS)</label>
                                                    <div id="pendidikan-2-help" class="form-text text-danger">*0-18</div>
                                                    <input type="number" class="form-control" id="pendidikan-2" name="nilai-pendidikan-2" min="0" max="18" placeholder="Masukkan dari 0-18" required step="0.01">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="pendidikan-3" class="form-label">Angka Kesiapan Sekolah (AKS) </label>
                                                    <div id="pendidikan-3-help" class="form-text text-danger">*0-100</div>
                                                    <input type="number" class="form-control" id="pendidikan-3" name="nilai-pendidikan-3" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="pendidikan-4" class="form-label">Persentase satuan pendidikan yang mempunyai guru yang mengajar muatan lokal bahasa daerah dan/atau ekskul kesenian</label>
                                                    <div id="pendidikan-4-help" class="form-text text-danger">*0-45</div>
                                                    <input type="number" class="form-control" id="pendidikan-4" name="nilai-pendidikan-4" min="0" max="45" placeholder="Masukkan dari 0-45" required step="0.01">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="pendidikan-5" class="form-label">Persentase penduduk penyandang disabilitas usia 7-18 tahun yang bersekolah</label>
                                                    <div id="pendidikan-5-help" class="form-text text-danger">*0-100</div>
                                                    <input type="number" class="form-control" id="pendidikan-5" name="nilai-pendidikan-5" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="pendidikan-6" class="form-label">Persentase penduduk usia 7-18 tahun dengan kategori kelompok pengeluaran 40 persen terbawah yang bersekolah</label>
                                                    <div id="pendidikan-6-help" class="form-text text-danger">*0-100</div>
                                                    <input type="number" class="form-control" id="pendidikan-6" name="nilai-pendidikan-6" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                                                </div>
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                            {{-- Pendidikan End --}}

                            {{-- Ketahanan Sosial Budaya Start --}}
                            <div class="container container-kalkulator-agregat p-3">
                                <div class="row">
                                    <div class="col-md-5 p-1">
                                        <div class="content-kalkulator-dimensi p-3">
                                            <div class="text-title4-joko-tarub text-center pb-2">Ketahanan Sosial Budaya</div>
                                            <span>
                                                Ketahanan Sosial Budaya dalam konteks penyusunan IPK didefinisikan sebagai kemampuan suatu kebudayaan dalam mempertahankan dan mengembangkan identitas, pengetahuan, serta praktik budayanya yang relevan yang didukung oleh kondisi sosial dalam masyarakat.
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-7 p-1">
                                        <div class="content-kalkulator-dimensi p-3">
                                                <div class="mb-3">
                                                    <label for="ketahanan-sosial-budaya-1" class="form-label">Persentase rumah tangga yang setuju jika ada sekelompok orang dari agama lain yang melakukan kegiatan di lingkungan sekitar tempat tinggal</label>
                                                    <div id="ketahanan-sosial-budaya-1-help" class="form-text text-danger">*0-100</div>
                                                    <input type="number" class="form-control" id="ketahanan-sosial-budaya-1" name="nilai-ketahanan-sosial-budaya-1" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="ketahanan-sosial-budaya-2" class="form-label">Persentase rumah tangga yang setuju jika ada sekelompok orang dari suku lain yang melakukan kegiatan di lingkungan sekitar tempat tinggal</label>
                                                    <div id="ketahanan-sosial-budaya-2-help" class="form-text text-danger">*0-100</div>
                                                    <input type="number" class="form-control" id="ketahanan-sosial-budaya-2" name="nilai-ketahanan-sosial-budaya-2" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="ketahanan-sosial-budaya-3" class="form-label">Persentase rumah tangga yang setuju jika salah satu anggota rumah tangga berteman dengan orang lain yang beda agama</label>
                                                    <div id="ketahanan-sosial-budaya-3-help" class="form-text text-danger">*0-100</div>
                                                    <input type="number" class="form-control" id="ketahanan-sosial-budaya-3" name="nilai-ketahanan-sosial-budaya-3" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="ketahanan-sosial-budaya-4" class="form-label">Persentase rumah tangga yang setuju jika salah satu anggota rumah tangga berteman dengan orang lain yang berbeda suku</label>
                                                    <div id="ketahanan-sosial-budaya-4-help" class="form-text text-danger">*0-100</div>
                                                    <input type="number" class="form-control" id="ketahanan-sosial-budaya-4" name="nilai-ketahanan-sosial-budaya-4" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="ketahanan-sosial-budaya-5" class="form-label">Persentase penduduk usia 10 tahun ke atas yang mengikuti kegiatan sosial kemasyarakatan di lingkungan sekitar dalam 3 bulan terakhir</label>
                                                    <div id="ketahanan-sosial-budaya-5-help" class="form-text text-danger">*0-100</div>
                                                    <input type="number" class="form-control" id="ketahanan-sosial-budaya-5" name="nilai-ketahanan-sosial-budaya-5" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="ketahanan-sosial-budaya-6" class="form-label">Persentase penduduk usia 10 tahun ke atas yang mengikuti gotong royong</label>
                                                    <div id="ketahanan-sosial-budaya-6-help" class="form-text text-danger">*0-100</div>
                                                    <input type="number" class="form-control" id="ketahanan-sosial-budaya-6" name="nilai-ketahanan-sosial-budaya-6" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="ketahanan-sosial-budaya-7" class="form-label">Persentase rumah tangga yang merasa khawatir dengan keamanan saat berjalan kaki sendirian di malam hari</label>
                                                    <div id="ketahanan-sosial-budaya-7-help" class="form-text text-danger">*0-50</div>
                                                    <input type="number" class="form-control" id="ketahanan-sosial-budaya-7" name="nilai-ketahanan-sosial-budaya-7" min="0" max="50" placeholder="Masukkan dari 0-50" required step="0.01">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="ketahanan-sosial-budaya-8" class="form-label">Persentase rumah tangga yang merasa percaya menitipkan rumah kepada tetangga</label>
                                                    <div id="ketahanan-sosial-budaya-8-help" class="form-text text-danger">*0-100</div>
                                                    <input type="number" class="form-control" id="ketahanan-sosial-budaya-8" name="nilai-ketahanan-sosial-budaya-8" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                                                </div>
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                            {{-- Ketahanan Sosial Budaya End --}}

                            {{-- Warisan Budaya Start --}}
                            <div class="container container-kalkulator-agregat p-3">
                                <div class="row">
                                    <div class="col-md-5 p-1">
                                        <div class="content-kalkulator-dimensi p-3">
                                            <div class="text-title4-joko-tarub text-center pb-2">Warisan Budaya</div>
                                            <span>
                                                Upaya yang dilakukan seluruh pihak (masyarakat dan pemerintah) terhadap pelestarian Objek Pemajuan Kebudayaan dan Cagar Budaya
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-7 p-1">
                                        <div class="content-kalkulator-dimensi p-3">
                                                <div class="mb-3">
                                                    <label for="warisan-budaya-1" class="form-label">Persentase benda, bangunan, struktur, situs, dan kawasan cagar budaya yang telah ditetapkan terhadap total pendaftaran</label>
                                                    <div id="warisan-budaya-1-help" class="form-text text-danger">*0-50</div>
                                                    <input type="number" class="form-control" id="warisan-budaya-1" name="nilai-warisan-budaya-1" min="0" max="50" placeholder="Masukkan dari 0-50" required step="0.01">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="warisan-budaya-2" class="form-label">Persentase warisan budaya takbenda yang telah ditetapkan terhadap total pencatatan</label>
                                                    <div id="warisan-budaya-2-help" class="form-text text-danger">*0-50</div>
                                                    <input type="number" class="form-control" id="warisan-budaya-2" name="nilai-warisan-budaya-2" min="0" max="50" placeholder="Masukkan dari 0-50" required step="0.01">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="warisan-budaya-3" class="form-label">Persentase penduduk usia 5 tahun ke atas yang menggunakan bahasa daerah di rumah atau dalam pergaulan sehari-hari</label>
                                                    <div id="warisan-budaya-3-help" class="form-text text-danger">*0-100</div>
                                                    <input type="number" class="form-control" id="warisan-budaya-3" name="nilai-warisan-budaya-3" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="warisan-budaya-4" class="form-label">Persentase penduduk usia 10 tahun ke atas yang menonton secara langsung pertunjukan seni dalam 3 bulan terakhir</label>
                                                    <div id="warisan-budaya-4-help" class="form-text text-danger">*0-100</div>
                                                    <input type="number" class="form-control" id="warisan-budaya-4" name="nilai-warisan-budaya-4" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="warisan-budaya-5" class="form-label">Persentase penduduk usia 10 tahun ke atas yang mengunjungi peninggalan sejarah/warisan dunia dalam setahun terakhir</label>
                                                    <div id="warisan-budaya-5-help" class="form-text text-danger">*0-30</div>
                                                    <input type="number" class="form-control" id="warisan-budaya-5" name="nilai-warisan-budaya-5" min="0" max="30" placeholder="Masukkan dari 0-30" required step="0.01">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="warisan-budaya-6" class="form-label">Persentase rumah tangga yang menggunakan produk tradisional dalam 3 bulan terakhir</label>
                                                    <div id="warisan-budaya-6-help" class="form-text text-danger">*0-95</div>
                                                    <input type="number" class="form-control" id="warisan-budaya-6" name="nilai-warisan-budaya-6" min="0" max="95" placeholder="Masukkan dari 0-95" required step="0.01">
                                                </div>
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                            {{-- Warisan Budaya End --}}

                            {{-- Ekspresi Budaya Start --}}
                            <div class="container container-kalkulator-agregat p-3">
                                <div class="row">
                                    <div class="col-md-5 p-1">
                                        <div class="content-kalkulator-dimensi p-3">
                                            <div class="text-title4-joko-tarub text-center pb-2">Ekspresi Budaya</div>
                                            <span>
                                                Aktivitas serta sarana/prasarana pendukung dalam memperoleh, menguji kesahihan, dan menghasilkan informasi dan pengetahuan untuk pemberdayaan kecakapan masyarakat
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-7 p-1">
                                        <div class="content-kalkulator-dimensi p-3">
                                                <div class="mb-3">
                                                    <label for="ekspresi-budaya-1" class="form-label">Persentase penduduk usia 10 tahun ke atas yang memberikan saran atau pendapat dalam kegiatan rapat dalam setahun terakhir</label>
                                                    <div id="ekspresi-budaya-1-help" class="form-text text-danger">*0-30</div>
                                                    <input type="number" class="form-control" id="ekspresi-budaya-1" name="nilai-ekspresi-budaya-1" min="0" max="30" placeholder="Masukkan dari 0-30" required step="0.01">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="ekspresi-budaya-2" class="form-label">Persentase penduduk usia 10 tahun ke atas yang aktif mengikuti kegiatan organisasi dalam setahun terakhir</label>
                                                    <div id="ekspresi-budaya-2-help" class="form-text text-danger">*0-20</div>
                                                    <input type="number" class="form-control" id="ekspresi-budaya-2" name="nilai-ekspresi-budaya-2" min="0" max="20" placeholder="Masukkan dari 0-20" required step="0.01">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="ekspresi-budaya-3" class="form-label">Persentase penduduk usia 10 tahun ke atas yang pernah terlibat sebagai pelaku/pendukung pertunjukan seni dalam 3 bulan terakhir</label>
                                                    <div id="ekspresi-budaya-3-help" class="form-text text-danger">*0-7</div>
                                                    <input type="number" class="form-control" id="ekspresi-budaya-3" name="nilai-ekspresi-budaya-3" min="0" max="7" placeholder="Masukkan dari 0-7" required step="0.01">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="ekspresi-budaya-4" class="form-label">Persentase rumah tangga yang menyelenggarakan atau menghadiri upacara adat dalam setahun terakhir</label>
                                                    <div id="ekspresi-budaya-4-help" class="form-text text-danger">*0-45</div>
                                                    <input type="number" class="form-control" id="ekspresi-budaya-4" name="nilai-ekspresi-budaya-4" min="0" max="45" placeholder="Masukkan dari 0-45" required step="0.01">
                                                </div>
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                            {{-- Ekspresi Budaya End --}}

                            {{-- Gender Start --}}
                            <div class="container container-kalkulator-agregat p-3">
                                <div class="row">
                                    <div class="col-md-5 p-1">
                                        <div class="content-kalkulator-dimensi p-3">
                                            <div class="text-title4-joko-tarub text-center pb-2">Gender</div>
                                            <span>
                                                Persamaan hak, tanggung jawab dan peluang yang setara antara perempuan dan laki-laki di ruang publik untuk berpartisipasi dalam kegiatan pembangunan
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-7 p-1">
                                        <div class="content-kalkulator-dimensi p-3">
                                            <form id="kalkulator-form-gender">
                                                <div class="mb-3">
                                                    <label for="gender-1" class="form-label">Rasio tingkat partisipasi angkatan kerja usia 15 tahun ke atas perempuan terhadap laki laki</label>
                                                    <div id="gender-1-help" class="form-text text-danger">*0-100</div>
                                                    <input type="number" class="form-control" id="gender-1" name="nilai-gender-1" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="gender-2" class="form-label">Rasio penduduk usia 25 tahun ke atas perempuan terhadap laki-laki yang memiliki ijazah minimal SMA/Sederajat</label>
                                                    <div id="gender-2-help" class="form-text text-danger">*0-100</div>
                                                    <input type="number" class="form-control" id="gender-2" name="nilai-gender-2" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="gender-3" class="form-label">Rasio anggota parlemen perempuan terhadap anggota parlemen laki-laki</label>
                                                    <div id="gender-3-help" class="form-text text-danger">*0-100</div>
                                                    <input type="number" class="form-control" id="gender-3" name="nilai-gender-3" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                                                </div>
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                            {{-- Gender End --}}
                            <button type="submit" class="btn button-kalkulator">Kalkulasi</button>
                            <div class="mb-3 mt-3">
                                <label for="agregat-hasil" class="form-label">Nilai IPK Agregat</label>
                                <input type="number" class="form-control bg-info-subtle" id="agregat-hasil" name="hasil" placeholder="Nilai IPK Agregat" readonly>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="kalkulator-dimensi-ipk" class="card-body" data-aos="fade-up">
                    <div>
                        <div>
                            <button id="btn-kembali-2" class="btn button-kalkulator-2">
                                <i class="fas fa-arrow-left"></i>
                                Kembali
                            </button>
                        </div>
                        <div class="d-flex align-items-center justify-content-end gap-1">
                            <span class="fw-bold">
                                Pilih Dimensi :
                            </span>
                            <div>
                                <select class="form-select select-kalkulator-2">
                                    <option value="budaya-literasi" selected>Budaya Literasi</option>
                                    <option value="ekonomi-budaya">Ekonomi Budaya</option>
                                    <option value="pendidikan">Pendidikan</option>
                                    <option value="ketahanan-sosial-budaya">Ketahanan Sosial Budaya</option>
                                    <option value="warisan-budaya">Warisan Budaya</option>
                                    <option value="ekspresi-budaya">Ekspresi Budaya</option>
                                    <option value="gender">Gender</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <h1 class="text-title2-joko-tarub">Kalkulator Dimensi IPK</h1>

                        {{-- Budaya Literasi Start --}}
                        <div data-aos="fade-up" id="budaya-literasi" class="container container-kalkulator-dimensi p-3">
                            <div class="row">
                                <div class="col-md-5 p-1">
                                    <div class="content-kalkulator-dimensi p-3">
                                        <div class="text-title4-joko-tarub text-center pb-2">Budaya Literasi</div>
                                        <span>
                                            Aktivitas serta sarana/prasarana pendukung dalam memperoleh, menguji kesahihan, dan menghasilkan informasi dan pengetahuan untuk pemberdayaan kecakapan masyarakat
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-7 p-1">
                                    <div class="content-kalkulator-dimensi p-3">
                                        <form id="kalkulator-form-budaya-literasi">
                                            <div class="mb-3 d-flex align-items-center gap-1">
                                                <span class="fw-bold">
                                                    Pilih Provinsi :
                                                </span>
                                                <div>
                                                    <select class="form-select select-kalkulator" name="provinsi">
                                                        <option value="jawa-timur" selected>Jawa Timur</option>
                                                        <option value="di-yogyakarta">DI Yogyakarta</option>
                                                        <option value="jawa-tengah">Jawa Tengah</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="budaya-literasi-1" class="form-label">Persentase penduduk usia 10 tahun ke atas yang membaca selain kitab suci baik cetak maupun elektronik dalam seminggu terakhir</label>
                                                <div id="budaya-literasi-1-help" class="form-text text-danger">*0-70</div>
                                                <input type="number" class="form-control" id="budaya-literasi-1" name="nilai-budaya-literasi-1" min="0" max="70" placeholder="Masukkan dari 0-70" required step="0.01">
                                            </div>
                                            <div class="mb-3">
                                                <label for="budaya-literasi-2" class="form-label">Persentase penduduk usia 10 tahun ke atas yang mengunjungi perpustakaan/memanfaatkan taman bacaan masyarakat dalam 3 bulan terakhir</label>
                                                <div id="budaya-literasi-2-help" class="form-text text-danger">*0-85</div>
                                                <input type="number" class="form-control" id="budaya-literasi-2" name="nilai-budaya-literasi-2" min="0" max="85" placeholder="Masukkan dari 0-85" required step="0.01">
                                            </div>
                                            <div class="mb-3">
                                                <label for="budaya-literasi-3" class="form-label">Persentase penduduk usia 10 tahun ke atas yang mengunjungi perpustakaan/memanfaatkan taman bacaan masyarakat dalam 3 bulan terakhir</label>
                                                <div id="budaya-literasi-3-help" class="form-text text-danger">*0-25</div>
                                                <input type="number" class="form-control" id="budaya-literasi-3" name="nilai-budaya-literasi-3" min="0" max="25" placeholder="Masukkan dari 0-25" required step="0.01">
                                            </div>
                                            <button type="submit" class="btn button-kalkulator mb-3">Kalkulasi</button>
                                            <div class="mb-3">
                                                <label for="budaya-literasi-hasil" class="form-label">Nilai Dimensi Budaya Literasi</label>
                                                <input type="number" class="form-control bg-info-subtle" id="budaya-literasi-hasil" name="hasil" placeholder="Nilai Dimensi Budaya Literasi" readonly>
                                            </div>
                                        </form>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                        {{-- Budaya Literasi End --}}

                        {{-- Ekonomi Budaya Start --}}
                        <div data-aos="fade-up" id="ekonomi-budaya" class="container container-kalkulator-dimensi p-3">
                            <div class="row">
                                <div class="col-md-5 p-1">
                                    <div class="content-kalkulator-dimensi p-3">
                                        <div class="text-title4-joko-tarub text-center pb-2">Ekonomi Budaya</div>
                                        <span>
                                            Aktivitas ekonomi yang tercipta sebagai hasil dari pemanfaatan Objek Pemajuan Kebudayaan
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-7 p-1">
                                    <div class="content-kalkulator-dimensi p-3">
                                        <form id="kalkulator-form-ekonomi-budaya">
                                            <div class="mb-3">
                                                <label for="ekonomi-budaya-1" class="form-label">Persentase penduduk 15 tahun ke atas yang pernah terlibat sebagai pelaku/pendukung pertunjukan seni yang menjadikan keterlibatannya itu sebagai sumber penghasilan</label>
                                                <div id="ekonomi-budaya-1-help" class="form-text text-danger">*0-1</div>
                                                <input type="number" class="form-control" id="ekonomi-budaya-1" name="nilai-ekonomi-budaya-1" min="0" max="1" placeholder="Masukkan dari 0-1" required step="0.01">
                                            </div>
                                            <button type="submit" class="btn button-kalkulator mb-3">Kalkulasi</button>
                                            <div class="mb-3">
                                                <label for="ekonomi-budaya-hasil" class="form-label">Nilai Dimensi Ekonomi Budaya</label>
                                                <input type="number" class="form-control bg-info-subtle" id="ekonomi-budaya-hasil" name="hasil" placeholder="Nilai Dimensi Ekonomi Budaya" readonly>
                                            </div>
                                        </form>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                        {{-- Ekonomi Budaya End --}}

                        {{-- Pendidikan Start --}}
                        <div data-aos="fade-up" id="pendidikan" class="container container-kalkulator-dimensi p-3">
                            <div class="row">
                                <div class="col-md-5 p-1">
                                    <div class="content-kalkulator-dimensi p-3">
                                        <div class="text-title4-joko-tarub text-center pb-2">Pendidikan</div>
                                        <span>
                                            Usaha sadar dan terencana untuk mewujudkan suasana belajar dan proses pembelajaran yang inklusif agar peserta didik secara aktif mengembangkan potensi dirinya dalam bidang Seni, Budaya, dan Bahasa
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-7 p-1">
                                    <div class="content-kalkulator-dimensi p-3">
                                        <form id="kalkulator-form-pendidikan">
                                            <div class="mb-3">
                                                <label for="pendidikan-1" class="form-label">Rata-rata lama sekolah (MYS) usia 15 tahun ke atas</label>
                                                <div id="pendidikan-1-help" class="form-text text-danger">*0-15</div>
                                                <input type="number" class="form-control" id="pendidikan-1" name="nilai-pendidikan-1" min="0" max="15" placeholder="Masukkan dari 0-15" required step="0.01">
                                            </div>
                                            <div class="mb-3">
                                                <label for="pendidikan-2" class="form-label">Harapan lama sekolah penduduk usia 7 tahun ke atas (HLS)</label>
                                                <div id="pendidikan-2-help" class="form-text text-danger">*0-18</div>
                                                <input type="number" class="form-control" id="pendidikan-2" name="nilai-pendidikan-2" min="0" max="18" placeholder="Masukkan dari 0-18" required step="0.01">
                                            </div>
                                            <div class="mb-3">
                                                <label for="pendidikan-3" class="form-label">Angka Kesiapan Sekolah (AKS) </label>
                                                <div id="pendidikan-3-help" class="form-text text-danger">*0-100</div>
                                                <input type="number" class="form-control" id="pendidikan-3" name="nilai-pendidikan-3" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                                            </div>
                                            <div class="mb-3">
                                                <label for="pendidikan-4" class="form-label">Persentase satuan pendidikan yang mempunyai guru yang mengajar muatan lokal bahasa daerah dan/atau ekskul kesenian</label>
                                                <div id="pendidikan-4-help" class="form-text text-danger">*0-45</div>
                                                <input type="number" class="form-control" id="pendidikan-4" name="nilai-pendidikan-4" min="0" max="45" placeholder="Masukkan dari 0-45" required step="0.01">
                                            </div>
                                            <div class="mb-3">
                                                <label for="pendidikan-5" class="form-label">Persentase penduduk penyandang disabilitas usia 7-18 tahun yang bersekolah</label>
                                                <div id="pendidikan-5-help" class="form-text text-danger">*0-100</div>
                                                <input type="number" class="form-control" id="pendidikan-5" name="nilai-pendidikan-5" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                                            </div>
                                            <div class="mb-3">
                                                <label for="pendidikan-6" class="form-label">Persentase penduduk usia 7-18 tahun dengan kategori kelompok pengeluaran 40 persen terbawah yang bersekolah</label>
                                                <div id="pendidikan-6-help" class="form-text text-danger">*0-100</div>
                                                <input type="number" class="form-control" id="pendidikan-6" name="nilai-pendidikan-6" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                                            </div>
                                            <button type="submit" class="btn button-kalkulator mb-3">Kalkulasi</button>
                                            <div class="mb-3">
                                                <label for="pendidikan-hasil" class="form-label">Nilai Pendidikan</label>
                                                <input type="number" class="form-control bg-info-subtle" id="pendidikan-hasil" name="hasil" placeholder="Nilai Pendidikan" readonly>
                                            </div>
                                        </form>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                        {{-- Pendidikan End --}}

                        {{-- Ketahanan Sosial Budaya Start --}}
                        <div data-aos="fade-up" id="ketahanan-sosial-budaya" class="container container-kalkulator-dimensi p-3">
                            <div class="row">
                                <div class="col-md-5 p-1">
                                    <div class="content-kalkulator-dimensi p-3">
                                        <div class="text-title4-joko-tarub text-center pb-2">Ketahanan Sosial Budaya</div>
                                        <span>
                                            Ketahanan Sosial Budaya dalam konteks penyusunan IPK didefinisikan sebagai kemampuan suatu kebudayaan dalam mempertahankan dan mengembangkan identitas, pengetahuan, serta praktik budayanya yang relevan yang didukung oleh kondisi sosial dalam masyarakat.
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-7 p-1">
                                    <div class="content-kalkulator-dimensi p-3">
                                        <form id="kalkulator-form-ketahanan-sosial-budaya">
                                            <div class="mb-3">
                                                <label for="ketahanan-sosial-budaya-1" class="form-label">Persentase rumah tangga yang setuju jika ada sekelompok orang dari agama lain yang melakukan kegiatan di lingkungan sekitar tempat tinggal</label>
                                                <div id="ketahanan-sosial-budaya-1-help" class="form-text text-danger">*0-100</div>
                                                <input type="number" class="form-control" id="ketahanan-sosial-budaya-1" name="nilai-ketahanan-sosial-budaya-1" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                                            </div>
                                            <div class="mb-3">
                                                <label for="ketahanan-sosial-budaya-2" class="form-label">Persentase rumah tangga yang setuju jika ada sekelompok orang dari suku lain yang melakukan kegiatan di lingkungan sekitar tempat tinggal</label>
                                                <div id="ketahanan-sosial-budaya-2-help" class="form-text text-danger">*0-100</div>
                                                <input type="number" class="form-control" id="ketahanan-sosial-budaya-2" name="nilai-ketahanan-sosial-budaya-2" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                                            </div>
                                            <div class="mb-3">
                                                <label for="ketahanan-sosial-budaya-3" class="form-label">Persentase rumah tangga yang setuju jika salah satu anggota rumah tangga berteman dengan orang lain yang beda agama</label>
                                                <div id="ketahanan-sosial-budaya-3-help" class="form-text text-danger">*0-100</div>
                                                <input type="number" class="form-control" id="ketahanan-sosial-budaya-3" name="nilai-ketahanan-sosial-budaya-3" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                                            </div>
                                            <div class="mb-3">
                                                <label for="ketahanan-sosial-budaya-4" class="form-label">Persentase rumah tangga yang setuju jika salah satu anggota rumah tangga berteman dengan orang lain yang berbeda suku</label>
                                                <div id="ketahanan-sosial-budaya-4-help" class="form-text text-danger">*0-100</div>
                                                <input type="number" class="form-control" id="ketahanan-sosial-budaya-4" name="nilai-ketahanan-sosial-budaya-4" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                                            </div>
                                            <div class="mb-3">
                                                <label for="ketahanan-sosial-budaya-5" class="form-label">Persentase penduduk usia 10 tahun ke atas yang mengikuti kegiatan sosial kemasyarakatan di lingkungan sekitar dalam 3 bulan terakhir</label>
                                                <div id="ketahanan-sosial-budaya-5-help" class="form-text text-danger">*0-100</div>
                                                <input type="number" class="form-control" id="ketahanan-sosial-budaya-5" name="nilai-ketahanan-sosial-budaya-5" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                                            </div>
                                            <div class="mb-3">
                                                <label for="ketahanan-sosial-budaya-6" class="form-label">Persentase penduduk usia 10 tahun ke atas yang mengikuti gotong royong</label>
                                                <div id="ketahanan-sosial-budaya-6-help" class="form-text text-danger">*0-100</div>
                                                <input type="number" class="form-control" id="ketahanan-sosial-budaya-6" name="nilai-ketahanan-sosial-budaya-6" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                                            </div>
                                            <div class="mb-3">
                                                <label for="ketahanan-sosial-budaya-7" class="form-label">Persentase rumah tangga yang merasa khawatir dengan keamanan saat berjalan kaki sendirian di malam hari</label>
                                                <div id="ketahanan-sosial-budaya-7-help" class="form-text text-danger">*0-50</div>
                                                <input type="number" class="form-control" id="ketahanan-sosial-budaya-7" name="nilai-ketahanan-sosial-budaya-7" min="0" max="50" placeholder="Masukkan dari 0-50" required step="0.01">
                                            </div>
                                            <div class="mb-3">
                                                <label for="ketahanan-sosial-budaya-8" class="form-label">Persentase rumah tangga yang merasa percaya menitipkan rumah kepada tetangga</label>
                                                <div id="ketahanan-sosial-budaya-8-help" class="form-text text-danger">*0-100</div>
                                                <input type="number" class="form-control" id="ketahanan-sosial-budaya-8" name="nilai-ketahanan-sosial-budaya-8" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                                            </div>
                                            <button type="submit" class="btn button-kalkulator mb-3">Kalkulasi</button>
                                            <div class="mb-3">
                                                <label for="ketahanan-sosial-budaya-hasil" class="form-label">Nilai Ketahanan Sosial Budaya</label>
                                                <input type="number" class="form-control bg-info-subtle" id="ketahanan-sosial-budaya-hasil" name="hasil" placeholder="Nilai Ketahanan Sosial Budaya" readonly>
                                            </div>
                                        </form>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                        {{-- Ketahanan Sosial Budaya End --}}

                        {{-- Warisan Budaya Start --}}
                        <div data-aos="fade-up" id="warisan-budaya" class="container container-kalkulator-dimensi p-3">
                            <div class="row">
                                <div class="col-md-5 p-1">
                                    <div class="content-kalkulator-dimensi p-3">
                                        <div class="text-title4-joko-tarub text-center pb-2">Warisan Budaya</div>
                                        <span>
                                            Upaya yang dilakukan seluruh pihak (masyarakat dan pemerintah) terhadap pelestarian Objek Pemajuan Kebudayaan dan Cagar Budaya
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-7 p-1">
                                    <div class="content-kalkulator-dimensi p-3">
                                        <form id="kalkulator-form-warisan-budaya">
                                            <div class="mb-3">
                                                <label for="warisan-budaya-1" class="form-label">Persentase benda, bangunan, struktur, situs, dan kawasan cagar budaya yang telah ditetapkan terhadap total pendaftaran</label>
                                                <div id="warisan-budaya-1-help" class="form-text text-danger">*0-50</div>
                                                <input type="number" class="form-control" id="warisan-budaya-1" name="nilai-warisan-budaya-1" min="0" max="50" placeholder="Masukkan dari 0-50" required step="0.01">
                                            </div>
                                            <div class="mb-3">
                                                <label for="warisan-budaya-2" class="form-label">Persentase warisan budaya takbenda yang telah ditetapkan terhadap total pencatatan</label>
                                                <div id="warisan-budaya-2-help" class="form-text text-danger">*0-50</div>
                                                <input type="number" class="form-control" id="warisan-budaya-2" name="nilai-warisan-budaya-2" min="0" max="50" placeholder="Masukkan dari 0-50" required step="0.01">
                                            </div>
                                            <div class="mb-3">
                                                <label for="warisan-budaya-3" class="form-label">Persentase penduduk usia 5 tahun ke atas yang menggunakan bahasa daerah di rumah atau dalam pergaulan sehari-hari</label>
                                                <div id="warisan-budaya-3-help" class="form-text text-danger">*0-100</div>
                                                <input type="number" class="form-control" id="warisan-budaya-3" name="nilai-warisan-budaya-3" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                                            </div>
                                            <div class="mb-3">
                                                <label for="warisan-budaya-4" class="form-label">Persentase penduduk usia 10 tahun ke atas yang menonton secara langsung pertunjukan seni dalam 3 bulan terakhir</label>
                                                <div id="warisan-budaya-4-help" class="form-text text-danger">*0-100</div>
                                                <input type="number" class="form-control" id="warisan-budaya-4" name="nilai-warisan-budaya-4" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                                            </div>
                                            <div class="mb-3">
                                                <label for="warisan-budaya-5" class="form-label">Persentase penduduk usia 10 tahun ke atas yang mengunjungi peninggalan sejarah/warisan dunia dalam setahun terakhir</label>
                                                <div id="warisan-budaya-5-help" class="form-text text-danger">*0-30</div>
                                                <input type="number" class="form-control" id="warisan-budaya-5" name="nilai-warisan-budaya-5" min="0" max="30" placeholder="Masukkan dari 0-30" required step="0.01">
                                            </div>
                                            <div class="mb-3">
                                                <label for="warisan-budaya-6" class="form-label">Persentase rumah tangga yang menggunakan produk tradisional dalam 3 bulan terakhir</label>
                                                <div id="warisan-budaya-6-help" class="form-text text-danger">*0-95</div>
                                                <input type="number" class="form-control" id="warisan-budaya-6" name="nilai-warisan-budaya-6" min="0" max="95" placeholder="Masukkan dari 0-95" required step="0.01">
                                            </div>
                                            <button type="submit" class="btn button-kalkulator mb-3">Kalkulasi</button>
                                            <div class="mb-3">
                                                <label for="warisan-budaya-hasil" class="form-label">Nilai Warisan Budaya</label>
                                                <input type="number" class="form-control bg-info-subtle" id="warisan-budaya-hasil" name="hasil" placeholder="Nilai Warisan Budaya" readonly>
                                            </div>
                                        </form>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                        {{-- Warisan Budaya End --}}

                        {{-- Ekspresi Budaya Start --}}
                        <div data-aos="fade-up" id="ekspresi-budaya" class="container container-kalkulator-dimensi p-3">
                            <div class="row">
                                <div class="col-md-5 p-1">
                                    <div class="content-kalkulator-dimensi p-3">
                                        <div class="text-title4-joko-tarub text-center pb-2">Ekspresi Budaya</div>
                                        <span>
                                            Aktivitas serta sarana/prasarana pendukung dalam memperoleh, menguji kesahihan, dan menghasilkan informasi dan pengetahuan untuk pemberdayaan kecakapan masyarakat
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-7 p-1">
                                    <div class="content-kalkulator-dimensi p-3">
                                        <form id="kalkulator-form-ekspresi-budaya">
                                            <div class="mb-3">
                                                <label for="ekspresi-budaya-1" class="form-label">Persentase penduduk usia 10 tahun ke atas yang memberikan saran atau pendapat dalam kegiatan rapat dalam setahun terakhir</label>
                                                <div id="ekspresi-budaya-1-help" class="form-text text-danger">*0-30</div>
                                                <input type="number" class="form-control" id="ekspresi-budaya-1" name="nilai-ekspresi-budaya-1" min="0" max="30" placeholder="Masukkan dari 0-30" required step="0.01">
                                            </div>
                                            <div class="mb-3">
                                                <label for="ekspresi-budaya-2" class="form-label">Persentase penduduk usia 10 tahun ke atas yang aktif mengikuti kegiatan organisasi dalam setahun terakhir</label>
                                                <div id="ekspresi-budaya-2-help" class="form-text text-danger">*0-20</div>
                                                <input type="number" class="form-control" id="ekspresi-budaya-2" name="nilai-ekspresi-budaya-2" min="0" max="20" placeholder="Masukkan dari 0-20" required step="0.01">
                                            </div>
                                            <div class="mb-3">
                                                <label for="ekspresi-budaya-3" class="form-label">Persentase penduduk usia 10 tahun ke atas yang pernah terlibat sebagai pelaku/pendukung pertunjukan seni dalam 3 bulan terakhir</label>
                                                <div id="ekspresi-budaya-3-help" class="form-text text-danger">*0-7</div>
                                                <input type="number" class="form-control" id="ekspresi-budaya-3" name="nilai-ekspresi-budaya-3" min="0" max="7" placeholder="Masukkan dari 0-7" required step="0.01">
                                            </div>
                                            <div class="mb-3">
                                                <label for="ekspresi-budaya-4" class="form-label">Persentase rumah tangga yang menyelenggarakan atau menghadiri upacara adat dalam setahun terakhir</label>
                                                <div id="ekspresi-budaya-4-help" class="form-text text-danger">*0-45</div>
                                                <input type="number" class="form-control" id="ekspresi-budaya-4" name="nilai-ekspresi-budaya-4" min="0" max="45" placeholder="Masukkan dari 0-45" required step="0.01">
                                            </div>
                                            <button type="submit" class="btn button-kalkulator mb-3">Kalkulasi</button>
                                            <div class="mb-3">
                                                <label for="ekspresi-budaya-hasil" class="form-label">Nilai Ekspresi Budaya</label>
                                                <input type="number" class="form-control bg-info-subtle" id="ekspresi-budaya-hasil" name="hasil" placeholder="Nilai Ekspresi Budaya" readonly>
                                            </div>
                                        </form>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                        {{-- Ekspresi Budaya End --}}

                        {{-- Gender Start --}}
                        <div data-aos="fade-up" id="gender" class="container container-kalkulator-dimensi p-3">
                            <div class="row">
                                <div class="col-md-5 p-1">
                                    <div class="content-kalkulator-dimensi p-3">
                                        <div class="text-title4-joko-tarub text-center pb-2">Gender</div>
                                        <span>
                                            Persamaan hak, tanggung jawab dan peluang yang setara antara perempuan dan laki-laki di ruang publik untuk berpartisipasi dalam kegiatan pembangunan
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-7 p-1">
                                    <div class="content-kalkulator-dimensi p-3">
                                        <form id="kalkulator-form-gender">
                                            <div class="mb-3">
                                                <label for="gender-1" class="form-label">Rasio tingkat partisipasi angkatan kerja usia 15 tahun ke atas perempuan terhadap laki laki</label>
                                                <div id="gender-1-help" class="form-text text-danger">*0-100</div>
                                                <input type="number" class="form-control" id="gender-1" name="nilai-gender-1" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                                            </div>
                                            <div class="mb-3">
                                                <label for="gender-2" class="form-label">Rasio penduduk usia 25 tahun ke atas perempuan terhadap laki-laki yang memiliki ijazah minimal SMA/Sederajat</label>
                                                <div id="gender-2-help" class="form-text text-danger">*0-100</div>
                                                <input type="number" class="form-control" id="gender-2" name="nilai-gender-2" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                                            </div>
                                            <div class="mb-3">
                                                <label for="gender-3" class="form-label">Rasio anggota parlemen perempuan terhadap anggota parlemen laki-laki</label>
                                                <div id="gender-3-help" class="form-text text-danger">*0-100</div>
                                                <input type="number" class="form-control" id="gender-3" name="nilai-gender-3" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                                            </div>
                                            <button type="submit" class="btn button-kalkulator mb-3">Kalkulasi</button>
                                            <div class="mb-3">
                                                <label for="gender-hasil" class="form-label">Nilai Gender</label>
                                                <input type="number" class="form-control bg-info-subtle" id="gender-hasil" name="hasil" placeholder="Nilai Gender" readonly>
                                            </div>
                                        </form>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                        {{-- Gender End --}}
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
        <script src={{ asset("assets/js/kalkulator-dimensi.js")}}></script>
        <script src={{ asset("assets/js/kalkulator-ipk.js")}}></script>
        <script>
            $(document).ready(function() {
                // Memuat data dari file JSON
                $.getJSON('assets/json/dataWilayah.json', function(data) {
                    const dataWilayah = data;
        
                    const dataIndonesia = dataWilayah.filter(wilayah => wilayah.wilayah === 'Indonesia');
                    const dataJawaTimurYogyaJateng = dataWilayah.filter(wilayah => 
                        wilayah.wilayah === 'Jawa Timur' || wilayah.wilayah === 'DI Yogyakarta' || wilayah.wilayah === 'Jawa Tengah');
                    const dataProvinsiLainnya = dataWilayah.filter(wilayah => 
                        wilayah.wilayah !== 'Indonesia' && 
                        wilayah.wilayah !== 'Jawa Timur' && 
                        wilayah.wilayah !== 'DI Yogyakarta' && 
                        wilayah.wilayah !== 'Jawa Tengah');

                    // Lanjutkan dengan skrip yang ada di bawah ini
                    
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

                            // Mendefinisikan koordinat untuk masing-masing kuadran
                            const xLeftRight = x.getPixelForValue(67.61);
                            const yBottomTop = y.getPixelForValue(57.72);

                            // Menambahkan warna latar belakang ke masing-masing kuadran
                            // Kuadran 1 (Atas Kiri)
                            ctx.fillStyle = 'rgb(150, 214, 172, 0.5)';
                            ctx.fillRect(left, yBottomTop, xLeftRight - left, top - yBottomTop);

                            // Kuadran 2 (Atas Kanan)
                            ctx.fillStyle = 'rgb(162, 210, 255, 0.5)';
                            ctx.fillRect(right, yBottomTop, xLeftRight - right, top - yBottomTop);

                            // // Kuadran 3 (Bawah Kanan)
                            ctx.fillStyle = 'rgb(239, 248, 213, 0.5)';
                            ctx.fillRect(right, yBottomTop, xLeftRight - right, bottom - yBottomTop);

                            // // Kuadran 4 (Bawah Kiri)
                            ctx.fillStyle = 'rgb(248, 225, 255, 0.5)';
                            ctx.fillRect(left, yBottomTop, xLeftRight - left, bottom - yBottomTop);
        
                            ctx.restore();
                        }
                    };
        
                    const ctx = document.getElementById('chart').getContext('2d');
                    const scatterChart = new Chart(ctx, {
                        type: 'scatter',
                        data: {
                            datasets: [{
                                label: 'Indonesia',
                                data: dataIndonesia.map(wilayah => ({ x: wilayah.x, y: wilayah.y, label: wilayah.wilayah })),
                                pointBackgroundColor: 'red',
                                borderWidth: 1,
                                pointRadius: 5,
                                pointHoverRadius: 8,
                                pointBorderColor: 'white',
                                pointHoverBorderColor: 'white',
                                pointStyle: 'circle',
                                hoverBorderWidth: 2,
                                hoverRadius: 8,
                            },
                            {
                                label: 'Jawa Timur, DI Yogyakarta, & Jawa Tengah',
                                data: dataJawaTimurYogyaJateng.map(wilayah => ({ x: wilayah.x, y: wilayah.y, label: wilayah.wilayah })),
                                pointBackgroundColor: '#E7C773',
                                borderWidth: 1,
                                pointRadius: 5,
                                pointHoverRadius: 8,
                                pointBorderColor: 'white',
                                pointHoverBorderColor: 'white',
                                pointStyle: 'circle',
                                hoverBorderWidth: 2,
                                hoverRadius: 8,
                            },
                            {
                                label: 'Provinsi Lainnya',
                                data: dataProvinsiLainnya.map(wilayah => ({ x: wilayah.x, y: wilayah.y, label: wilayah.wilayah })),
                                pointBackgroundColor: 'grey',
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
