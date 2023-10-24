@extends('premiumpage.layouts')
@section('home')
    <!--Main Content Section Start -->

    <!-- Title Hero of Feature Pages Start -->
    {{-- BannerGuruTamu --}}
    <section class="features-title-hero">
        <div class="container-h py-5 bg-dark page-header-guest-teacher">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-4 text-white fw-semibold mb-3">
                    Guru Tamu
                </h1>
            </div>
        </div>
    </section>
    <!-- Title Hero of Feature Pages End -->

    {{-- PengertianGuruTamu --}}
    <section class="title-description bg-white m-5">
        <div class="container d-flex align-items-center justify-content-center">
            <div class="description-content text-center">
                <h3 class="mb-4" style="padding-bottom: 3rem;">Apa itu <span class="fw-semibold">Guru Tamu ?</span></h3>
                <p style="line-height: 1.8rem;">
                    <span class="fw-semibold">Guru Tamu</span> merupakan salah satu fitur premium eksklusif yang ditawarkan
                    oleh Kelas Industri kepada mitra kerjasama kami. Dalam program ini, siswa/siswi berkesempatan untuk
                    mendapatkan paparan materi dan praktek secara langsung dari instruktur/pemateri berpengalaman yang aktif
                    dalam
                    industri. Keunggulan utama dari program Guru Tamu ini adalah kualitas dan keahlian para pemateri yang
                    berasal langsung dari dunia industri. Fitur premium ini memberikan manfaat yang luar biasa bagi
                    siswa/mahasiswa kami dengan membantu mereka mengembangkan pengetahuan dan pemahaman yang mendalam dalam
                    bidang jurusan mereka, sehingga mereka dapat siap berkompetisi di dunia kerja.
                </p>
            </div>
        </div>
    </section>

    {{-- CapaianGuruTamu --}}
    <section class="timeline-guest-teacher pt-5" style="padding-bottom: 3rem;">
        <div class="container text-md-center">
            <h2 class="main-heading mb-2">Capaian Materi Guru Tamu</h2>
            <p class="mb-3 mb-lg-5 text-muted" style="padding-bottom: 7rem;">Beberapa urutan pemaparan materi penyambungan
                Fiber Optic</p>
            <div class="main-timeline">
                <div class="timeline left">
                    <div class="card">
                        <div class="card-body p-4">
                            <h4>Teknik Komputer dan Jaringan</h4>
                            <ul class="mb-0" style="padding-left: 1rem;">
                                <li>K3LH</li>
                                <li>LAN</li>
                                <li>VLAN</li>
                                <li>Routing</li>
                                <li>Management Bandwith</li>
                                <li>WAN for Fiber Optic</li>
                                <li>Network Administration</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="timeline right">
                    <div class="card">
                        <div class="card-body p-4">
                            <h4>Teknik Instalasi Tenaga Listrik</h4>
                            <ul class="mb-0" style="padding-left: 1rem;">
                                <li>K3LH dan Budaya Kerja</li>
                                <li>Teori Dasar Ketenagalistrikan</li>
                                <li>K3U Kelistrikan</li>
                                <li>Jaringan Tegangan Menengah & Rendah</li>
                                <li>Standing Operation Prosedure (SOP) Sistem Listrik</li>
                                <li>Instalasi Tenaga & Penerangan Listrik</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="timeline left">
                    <div class="card">
                        <div class="card-body p-4">
                            <h4>Desain Komunikasi Visual</h4>
                            <ul class="mb-0" style="padding-left: 1rem;">
                                <li>Content Writer</li>
                                <li>Content Creator</li>
                                <li>UI/UX Designer</li>
                                <li>Social Media Administrator/Specialist</li>
                                <li>Social Media Marketer</li>
                                <li>Broadcasting</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="timeline right">
                    <div class="card">
                        <div class="card-body p-4">
                            <h4>Rekayasa Perangkat Lunak</h4>
                            <ul class="mb-0" style="padding-left: 1rem;">
                                <li>Pemahaman Konsep Dasar Teknologi Informasi</li>
                                <li>Pemrograman Dasar</li>
                                <li>Algoritma Pemrograman</li>
                                <li>Struktur dan Basis Data</li>
                                <li>Dasar-dasar Version Control System</li>
                                <li>Keterampilan Troubleshooting</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-embed">
            <h4>Lihat selengkapnya..</h4>
            <a href="uploads/files/guru_tamu_materi.pdf" class="btn rounded-3 shadow">Buka PDF</a>
        </div>
    </section>
    <!--Main Content Section End -->
@endsection
