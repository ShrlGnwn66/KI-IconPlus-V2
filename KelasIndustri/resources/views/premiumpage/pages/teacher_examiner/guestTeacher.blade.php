@extends('premiumpage.layouts')
@section('home')
        <!--Main Content Section Start -->

        <!-- Title Hero of Feature Pages Start -->
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

        <section class="title-description bg-white m-5">
            <div class="container d-flex align-items-center justify-content-center">
                <div class="description-content text-center">
                    <h3 class="mb-4" style="padding-bottom: 3rem;">Apa itu <span class="fw-semibold">Guru Tamu ?</span></h3>
                    <p>
                        <span class="fw-semibold">Guru Tamu</span> merupakan salah satu Value Added dari Kelas Industri yang ditawarkan kepada mitra kerjasama.
                        <span class="fw-semibold">Guru Tamu</span> adalah program pembelajaran dari Kelas Industri dimana para siswa/mahasiswa akan diberi
                        paparan materi oleh instruktur/pemateri yang berasal dari Industri. Manfaat dari Program Guru Tamu juga sangat banyak bagi para siswa/mahasiswa
                        untuk pengembangan pengetahuan dibidang jurusannya masing-masing.
                    </p>
                </div>
            </div>
        </section>

        <section class="timeline-guest-teacher pt-5" style="padding-bottom: 3rem;">
            <div class="container text-md-center">
                <h2 class="main-heading mb-2">Timeline Materi Guru Tamu</h2>
                <p class="mb-3 mb-lg-5 text-muted" style="padding-bottom: 7rem;">Beberapa urutan pemaparan materi penyambungan Fiber Optic</p>
                <div class="main-timeline">
                    <div class="timeline left">
                        <div class="card">
                            <div class="card-body p-4">
                                <h3>Materi 1</h3>
                                <ul class="mb-0" style="padding-left: 1rem;">
                                    <li>Pembahasan Implementasi Fiber Optic di ranah industri</li>
                                    <li>Praktik Penyambungan Fiber Optic menggunakan Splicer</li>
                                    <li>Praktik evaluasi Fiber Optic dengan alat ukur yang tersedia (OPM, OLS, OTDR)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="timeline right">
                        <div class="card">
                            <div class="card-body p-4">
                                <h3>Materi 2</h3>
                                <ul class="mb-0" style="padding-left: 1rem;">
                                    <li>Mengupas kabel Multi (6/12/96) core</li>
                                    <li>Setting Optical Distribution Point (ODP) Multi (6/12/96) core</li>
                                    <li>Setting Joint Closure / Optical Distribution Point (ODP) / Joint Box (JB)</li>
                                    <li>Pematangan materi urutan warna core pada kabel</li>
                                    <li>Setting ODF, Riset Multi Core</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="timeline left">
                        <div class="card">
                            <div class="card-body p-4">
                                <h3>Materi 3</h3>
                                <ul class="mb-0" style="padding-left: 1rem;">
                                    <li>Pemaparan Materi HSE</li>
                                    <li>Praktik HSE untuk ketinggian</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="timeline right">
                        <div class="card">
                            <div class="card-body p-4">
                                <h3>Materi 4</h3>
                                <ul class="mb-0" style="padding-left: 1rem;">
                                    <li>Penjelasan implementasi instalasi dropcore di dalam rumah</li>
                                    <li>Praktik tarikan drop core dari ODP ke modem</li>
                                    <li>Praktik evaluasi instalasi dropcore</li>
                                    <li>Implementasi Instalasi Media FO Converter</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="timeline left">
                        <div class="card">
                            <div class="card-body p-4">
                                <h3>Materi 5</h3>
                                <ul class="mb-0" style="padding-left: 1rem;">
                                    <li>Penjelasan implementasi dan topologi EPON dan GPON</li>
                                    <li>Praktik Setting Router</li>
                                    <li>Implementasi Instalasi OLT</li>
                                    <li>Implementasi Instalasi ONT</li>
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
                <a href="uploads/files/Doc1.pdf" class="btn rounded-3 shadow">Buka PDF</a>
            </div>
        </section>
        <!--Main Content Section End -->


@endsection
