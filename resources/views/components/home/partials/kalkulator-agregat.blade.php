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
                                        <option value="Jawa Timur" selected>Jawa Timur</option>
                                        <option value="DI Yogyakarta">DI Yogyakarta</option>
                                        <option value="Jawa Tengah">Jawa Tengah</option>
                                        <option value="Aceh">Aceh</option>
                                        <option value="Sumatera Utara">Sumatera Utara</option>
                                        <option value="Sumatera Barat">Sumatera Barat</option>
                                        <option value="Riau">Riau</option>
                                        <option value="Jambi">Jambi</option>
                                        <option value="Sumatera Selatan">Sumatera Selatan</option>
                                        <option value="Bengkulu">Bengkulu</option>
                                        <option value="Lampung">Lampung</option>
                                        <option value="Kap. Bangka Belitung">Kap. Bangka Belitung</option>
                                        <option value="Kepulauan Riau">Kepulauan Riau</option>
                                        <option value="DKI Jakarta">DKI Jakarta</option>
                                        <option value="Jawa Barat">Jawa Barat</option>
                                        <option value="Banten">Banten</option>
                                        <option value="Bali">Bali</option>
                                        <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                        <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                                        <option value="Kalimantan Barat">Kalimantan Barat</option>
                                        <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                                        <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                        <option value="Kalimantan Timur">Kalimantan Timur</option>
                                        <option value="Kalimantan Utara">Kalimantan Utara</option>
                                        <option value="Sulawesi Utara">Sulawesi Utara</option>
                                        <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                        <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                        <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                        <option value="Gorontalo">Gorontalo</option>
                                        <option value="Sulawesi Barat">Sulawesi Barat</option>
                                        <option value="Maluku">Maluku</option>
                                        <option value="Maluku Barat">Maluku Barat</option>
                                        <option value="Papua Barat">Papua Barat</option>
                                        <option value="Papua">Papua</option>
                                        <option value="Indonesia">Indonesia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="budaya-literasi-1-agregat" class="form-label">Persentase penduduk usia 10 tahun ke atas yang membaca selain kitab suci baik cetak maupun elektronik dalam seminggu terakhir</label>
                                <div id="budaya-literasi-1-help" class="form-text text-danger">*0-70</div>
                                <input type="number" class="form-control" id="budaya-literasi-1-agregat" name="nilai-budaya-literasi-1" min="0" max="70" placeholder="Masukkan dari 0-70" required step="0.01">
                            </div>
                            <div class="mb-3">
                                <label for="budaya-literasi-2-agregat" class="form-label">Persentase penduduk usia 10 tahun ke atas yang mengunjungi perpustakaan/memanfaatkan taman bacaan masyarakat dalam 3 bulan terakhir</label>
                                <div id="budaya-literasi-2-help" class="form-text text-danger">*0-85</div>
                                <input type="number" class="form-control" id="budaya-literasi-2-agregat" name="nilai-budaya-literasi-2" min="0" max="85" placeholder="Masukkan dari 0-85" required step="0.01">
                            </div>
                            <div class="mb-3">
                                <label for="budaya-literasi-3-agregat" class="form-label">Persentase penduduk usia 10 tahun ke atas yang mengunjungi perpustakaan/memanfaatkan taman bacaan masyarakat dalam 3 bulan terakhir</label>
                                <div id="budaya-literasi-3-help" class="form-text text-danger">*0-25</div>
                                <input type="number" class="form-control" id="budaya-literasi-3-agregat" name="nilai-budaya-literasi-3" min="0" max="25" placeholder="Masukkan dari 0-25" required step="0.01">
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
                                <label for="ekonomi-budaya-1-agregat" class="form-label">Persentase penduduk 15 tahun ke atas yang pernah terlibat sebagai pelaku/pendukung pertunjukan seni yang menjadikan keterlibatannya itu sebagai sumber penghasilan</label>
                                <div id="ekonomi-budaya-1-help" class="form-text text-danger">*0-1</div>
                                <input type="number" class="form-control" id="ekonomi-budaya-1-agregat" name="nilai-ekonomi-budaya-1" min="0" max="1" placeholder="Masukkan dari 0-1" required step="0.01">
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
                                <label for="pendidikan-1-agregat" class="form-label">Rata-rata lama sekolah (MYS) usia 15 tahun ke atas</label>
                                <div id="pendidikan-1-help" class="form-text text-danger">*0-15</div>
                                <input type="number" class="form-control" id="pendidikan-1-agregat" name="nilai-pendidikan-1" min="0" max="15" placeholder="Masukkan dari 0-15" required step="0.01">
                            </div>
                            <div class="mb-3">
                                <label for="pendidikan-2-agregat" class="form-label">Harapan lama sekolah penduduk usia 7 tahun ke atas (HLS)</label>
                                <div id="pendidikan-2-help" class="form-text text-danger">*0-18</div>
                                <input type="number" class="form-control" id="pendidikan-2-agregat" name="nilai-pendidikan-2" min="0" max="18" placeholder="Masukkan dari 0-18" required step="0.01">
                            </div>
                            <div class="mb-3">
                                <label for="pendidikan-3-agregat" class="form-label">Angka Kesiapan Sekolah (AKS) </label>
                                <div id="pendidikan-3-help" class="form-text text-danger">*0-100</div>
                                <input type="number" class="form-control" id="pendidikan-3-agregat" name="nilai-pendidikan-3" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                            </div>
                            <div class="mb-3">
                                <label for="pendidikan-4-agregat" class="form-label">Persentase satuan pendidikan yang mempunyai guru yang mengajar muatan lokal bahasa daerah dan/atau ekskul kesenian</label>
                                <div id="pendidikan-4-help" class="form-text text-danger">*0-45</div>
                                <input type="number" class="form-control" id="pendidikan-4-agregat" name="nilai-pendidikan-4" min="0" max="45" placeholder="Masukkan dari 0-45" required step="0.01">
                            </div>
                            <div class="mb-3">
                                <label for="pendidikan-5-agregat" class="form-label">Persentase penduduk penyandang disabilitas usia 7-18 tahun yang bersekolah</label>
                                <div id="pendidikan-5-help" class="form-text text-danger">*0-100</div>
                                <input type="number" class="form-control" id="pendidikan-5-agregat" name="nilai-pendidikan-5" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                            </div>
                            <div class="mb-3">
                                <label for="pendidikan-6-agregat" class="form-label">Persentase penduduk usia 7-18 tahun dengan kategori kelompok pengeluaran 40 persen terbawah yang bersekolah</label>
                                <div id="pendidikan-6-help" class="form-text text-danger">*0-100</div>
                                <input type="number" class="form-control" id="pendidikan-6-agregat" name="nilai-pendidikan-6" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
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
                                <label for="ketahanan-sosial-budaya-1-agregat" class="form-label">Persentase rumah tangga yang setuju jika ada sekelompok orang dari agama lain yang melakukan kegiatan di lingkungan sekitar tempat tinggal</label>
                                <div id="ketahanan-sosial-budaya-1-help" class="form-text text-danger">*0-100</div>
                                <input type="number" class="form-control" id="ketahanan-sosial-budaya-1-agregat" name="nilai-ketahanan-sosial-budaya-1" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                            </div>
                            <div class="mb-3">
                                <label for="ketahanan-sosial-budaya-2-agregat" class="form-label">Persentase rumah tangga yang setuju jika ada sekelompok orang dari suku lain yang melakukan kegiatan di lingkungan sekitar tempat tinggal</label>
                                <div id="ketahanan-sosial-budaya-2-help" class="form-text text-danger">*0-100</div>
                                <input type="number" class="form-control" id="ketahanan-sosial-budaya-2-agregat" name="nilai-ketahanan-sosial-budaya-2" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                            </div>
                            <div class="mb-3">
                                <label for="ketahanan-sosial-budaya-3-agregat" class="form-label">Persentase rumah tangga yang setuju jika salah satu anggota rumah tangga berteman dengan orang lain yang beda agama</label>
                                <div id="ketahanan-sosial-budaya-3-help" class="form-text text-danger">*0-100</div>
                                <input type="number" class="form-control" id="ketahanan-sosial-budaya-3-agregat" name="nilai-ketahanan-sosial-budaya-3" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                            </div>
                            <div class="mb-3">
                                <label for="ketahanan-sosial-budaya-4-agregat" class="form-label">Persentase rumah tangga yang setuju jika salah satu anggota rumah tangga berteman dengan orang lain yang berbeda suku</label>
                                <div id="ketahanan-sosial-budaya-4-help" class="form-text text-danger">*0-100</div>
                                <input type="number" class="form-control" id="ketahanan-sosial-budaya-4-agregat" name="nilai-ketahanan-sosial-budaya-4" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                            </div>
                            <div class="mb-3">
                                <label for="ketahanan-sosial-budaya-5-agregat" class="form-label">Persentase penduduk usia 10 tahun ke atas yang mengikuti kegiatan sosial kemasyarakatan di lingkungan sekitar dalam 3 bulan terakhir</label>
                                <div id="ketahanan-sosial-budaya-5-help" class="form-text text-danger">*0-100</div>
                                <input type="number" class="form-control" id="ketahanan-sosial-budaya-5-agregat" name="nilai-ketahanan-sosial-budaya-5" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                            </div>
                            <div class="mb-3">
                                <label for="ketahanan-sosial-budaya-6-agregat" class="form-label">Persentase penduduk usia 10 tahun ke atas yang mengikuti gotong royong</label>
                                <div id="ketahanan-sosial-budaya-6-help" class="form-text text-danger">*0-100</div>
                                <input type="number" class="form-control" id="ketahanan-sosial-budaya-6-agregat" name="nilai-ketahanan-sosial-budaya-6" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                            </div>
                            <div class="mb-3">
                                <label for="ketahanan-sosial-budaya-7-agregat" class="form-label">Persentase rumah tangga yang merasa khawatir dengan keamanan saat berjalan kaki sendirian di malam hari</label>
                                <div id="ketahanan-sosial-budaya-7-help" class="form-text text-danger">*0-50</div>
                                <input type="number" class="form-control" id="ketahanan-sosial-budaya-7-agregat" name="nilai-ketahanan-sosial-budaya-7" min="0" max="50" placeholder="Masukkan dari 0-50" required step="0.01">
                            </div>
                            <div class="mb-3">
                                <label for="ketahanan-sosial-budaya-8-agregat" class="form-label">Persentase rumah tangga yang merasa percaya menitipkan rumah kepada tetangga</label>
                                <div id="ketahanan-sosial-budaya-8-help" class="form-text text-danger">*0-100</div>
                                <input type="number" class="form-control" id="ketahanan-sosial-budaya-8-agregat" name="nilai-ketahanan-sosial-budaya-8" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
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
                                <label for="warisan-budaya-1-agregat" class="form-label">Persentase benda, bangunan, struktur, situs, dan kawasan cagar budaya yang telah ditetapkan terhadap total pendaftaran</label>
                                <div id="warisan-budaya-1-help" class="form-text text-danger">*0-50</div>
                                <input type="number" class="form-control" id="warisan-budaya-1-agregat" name="nilai-warisan-budaya-1" min="0" max="50" placeholder="Masukkan dari 0-50" required step="0.01">
                            </div>
                            <div class="mb-3">
                                <label for="warisan-budaya-2-agregat" class="form-label">Persentase warisan budaya takbenda yang telah ditetapkan terhadap total pencatatan</label>
                                <div id="warisan-budaya-2-help" class="form-text text-danger">*0-50</div>
                                <input type="number" class="form-control" id="warisan-budaya-2-agregat" name="nilai-warisan-budaya-2" min="0" max="50" placeholder="Masukkan dari 0-50" required step="0.01">
                            </div>
                            <div class="mb-3">
                                <label for="warisan-budaya-3-agregat" class="form-label">Persentase penduduk usia 5 tahun ke atas yang menggunakan bahasa daerah di rumah atau dalam pergaulan sehari-hari</label>
                                <div id="warisan-budaya-3-help" class="form-text text-danger">*0-100</div>
                                <input type="number" class="form-control" id="warisan-budaya-3-agregat" name="nilai-warisan-budaya-3" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                            </div>
                            <div class="mb-3">
                                <label for="warisan-budaya-4-agregat" class="form-label">Persentase penduduk usia 10 tahun ke atas yang menonton secara langsung pertunjukan seni dalam 3 bulan terakhir</label>
                                <div id="warisan-budaya-4-help" class="form-text text-danger">*0-100</div>
                                <input type="number" class="form-control" id="warisan-budaya-4-agregat" name="nilai-warisan-budaya-4" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                            </div>
                            <div class="mb-3">
                                <label for="warisan-budaya-5-agregat" class="form-label">Persentase penduduk usia 10 tahun ke atas yang mengunjungi peninggalan sejarah/warisan dunia dalam setahun terakhir</label>
                                <div id="warisan-budaya-5-help" class="form-text text-danger">*0-30</div>
                                <input type="number" class="form-control" id="warisan-budaya-5-agregat" name="nilai-warisan-budaya-5" min="0" max="30" placeholder="Masukkan dari 0-30" required step="0.01">
                            </div>
                            <div class="mb-3">
                                <label for="warisan-budaya-6-agregat" class="form-label">Persentase rumah tangga yang menggunakan produk tradisional dalam 3 bulan terakhir</label>
                                <div id="warisan-budaya-6-help" class="form-text text-danger">*0-95</div>
                                <input type="number" class="form-control" id="warisan-budaya-6-agregat" name="nilai-warisan-budaya-6" min="0" max="95" placeholder="Masukkan dari 0-95" required step="0.01">
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
                                <label for="ekspresi-budaya-1-agregat" class="form-label">Persentase penduduk usia 10 tahun ke atas yang memberikan saran atau pendapat dalam kegiatan rapat dalam setahun terakhir</label>
                                <div id="ekspresi-budaya-1-help" class="form-text text-danger">*0-30</div>
                                <input type="number" class="form-control" id="ekspresi-budaya-1-agregat" name="nilai-ekspresi-budaya-1" min="0" max="30" placeholder="Masukkan dari 0-30" required step="0.01">
                            </div>
                            <div class="mb-3">
                                <label for="ekspresi-budaya-2-agregat" class="form-label">Persentase penduduk usia 10 tahun ke atas yang aktif mengikuti kegiatan organisasi dalam setahun terakhir</label>
                                <div id="ekspresi-budaya-2-help" class="form-text text-danger">*0-20</div>
                                <input type="number" class="form-control" id="ekspresi-budaya-2-agregat" name="nilai-ekspresi-budaya-2" min="0" max="20" placeholder="Masukkan dari 0-20" required step="0.01">
                            </div>
                            <div class="mb-3">
                                <label for="ekspresi-budaya-3-agregat" class="form-label">Persentase penduduk usia 10 tahun ke atas yang pernah terlibat sebagai pelaku/pendukung pertunjukan seni dalam 3 bulan terakhir</label>
                                <div id="ekspresi-budaya-3-help" class="form-text text-danger">*0-7</div>
                                <input type="number" class="form-control" id="ekspresi-budaya-3-agregat" name="nilai-ekspresi-budaya-3" min="0" max="7" placeholder="Masukkan dari 0-7" required step="0.01">
                            </div>
                            <div class="mb-3">
                                <label for="ekspresi-budaya-4-agregat" class="form-label">Persentase rumah tangga yang menyelenggarakan atau menghadiri upacara adat dalam setahun terakhir</label>
                                <div id="ekspresi-budaya-4-help" class="form-text text-danger">*0-45</div>
                                <input type="number" class="form-control" id="ekspresi-budaya-4-agregat" name="nilai-ekspresi-budaya-4" min="0" max="45" placeholder="Masukkan dari 0-45" required step="0.01">
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
                            <div class="mb-3">
                                <label for="gender-1-agregat" class="form-label">Rasio tingkat partisipasi angkatan kerja usia 15 tahun ke atas perempuan terhadap laki laki</label>
                                <div id="gender-1-help" class="form-text text-danger">*0-100</div>
                                <input type="number" class="form-control" id="gender-1-agregat" name="nilai-gender-1" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                            </div>
                            <div class="mb-3">
                                <label for="gender-2-agregat" class="form-label">Rasio penduduk usia 25 tahun ke atas perempuan terhadap laki-laki yang memiliki ijazah minimal SMA/Sederajat</label>
                                <div id="gender-2-help" class="form-text text-danger">*0-100</div>
                                <input type="number" class="form-control" id="gender-2-agregat" name="nilai-gender-2" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
                            </div>
                            <div class="mb-3">
                                <label for="gender-3-agregat" class="form-label">Rasio anggota parlemen perempuan terhadap anggota parlemen laki-laki</label>
                                <div id="gender-3-help" class="form-text text-danger">*0-100</div>
                                <input type="number" class="form-control" id="gender-3-agregat" name="nilai-gender-3" min="0" max="100" placeholder="Masukkan dari 0-100" required step="0.01">
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