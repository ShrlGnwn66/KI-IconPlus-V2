@extends('premiumpage.layouts')
{{-- @include('premiumpage.navbar') --}}
@section('home')
    <!--Main Content Section Start -->

    <!-- Title Hero of Feature Pages Start -->
    {{-- BannerProgramPKL --}}
    <section class="features-title-hero">
        <div class="container-h py-5 bg-dark page-header-internships">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-4 text-white fw-semibold mb-3">
                    Program PKL
                </h1>
            </div>
        </div>
    </section>
    <!-- Title Hero of Feature Pages End -->

    {{-- PengertianProgramPKL --}}
    <section class="title-description bg-white m-5" style="padding-bottom: 3rem;">
        <div class="container d-flex align-items-center justify-content-center">
            <div class="description-content text-center">
                <h3 class="fs-3 text-center" style="padding-bottom: 2rem;">
                    Apa itu <span class="fw-semibold">Program PKL</span> Kelas Industri ?
                </h3>
                <p>
                    <span class="fw-semibold">Program PKL (Praktik Kerja Lapangan)</span> adalah salah satu bagian dari
                    program Kelas Industri PLN Icon Plus
                    yang bertujuan untuk memberikan kesempatan kepada pelajar yang ingin mengembangkan
                    diri. Di dalam Program PKL Kelas Industri, bukan hanya Siswa SMK saja yang bisa
                    mengikuti program ini. Peserta PKL akan mendapatkan pengalaman kerja di dunia industri
                    selama <span class="fw-semibold">1 semester</span>. Dengan pembelajaran langsung di industri (Tempat
                    Kerja Mitra), peserta
                    bisa mengasah <span class="fw-semibold">hard skill</span> maupun <span class="fw-semibold">soft
                        skill</span> yang akan membuat peserta bisa lebih matang
                    untuk memasuki dunia kerja.
                </p>
            </div>
        </div>
    </section>

    {{-- PesertaProgramPKL --}}
    <section class="internship-participation pt-5" style="padding-bottom: 7rem;">
        <div class="container text-md-center">
            <h2 class="mb-3 text-center" style="padding-bottom: 4rem;">Siapa saja yang bisa mengikuti?</h2>
            <div class="row mx-auto w-100 pb-3 pt-3">
                <div class="col-md-4 col-lg-4 mb-3 border-0 pl-0 pr-0 pr-sm-3">
                    <div class="card shadow-sm hover-shadow h-100 border-0">
                        <div class="card-body row w-100 mx-auto">
                            <div class="col-12 p-0 mb-0">
                                <p class="mb-0 text-center h5 fw-bold">Siswa (SMA/SMK)</p>
                            </div>
                            <div class="col-12 p-0 mb-2 text-center">
                                <img src="../../assets/icons/siswa.png" alt="Siswa" width="100">
                            </div>
                            <div class="col-12 p-0">
                                <p class="mb-0 text-muted small height-jenjang">
                                    Siswa SMA/SMK aktif jurusan DKV, RPL, Multimedia, Jaringan dan Pemasaran dapat bergabung
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 mb-3 border-0 pl-0 pr-0 pr-sm-3">
                    <div class="card shadow-sm hover-shadow h-100 border-0">
                        <div class="card-body row w-100 mx-auto">
                            <div class="col-12 p-0 mb-0">
                                <p class="mb-0 text-center h5 fw-bold">Guru Sekolah</p>
                            </div>
                            <div class="col-12 p-0 mb-2 text-center">
                                <img src="../../assets/icons/guru.png" alt="Guru" width="100">
                            </div>
                            <div class="col-12 p-0">
                                <p class="mb-0 text-muted small height-jenjang">
                                    Guru dari sekolah asal juga dapat bergabung dengan program guru magang.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 mb-3 border-0 pl-0 pr-0 pr-sm-3">
                    <div class="card shadow-sm hover-shadow h-100 border-0">
                        <div class="card-body row w-100 mx-auto">
                            <div class="col-12 p-0 mb-0">
                                <p class="mb-0 text-center h5 fw-bold">Kepala Sekolah</p>
                            </div>
                            <div class="col-12 p-0 mb-4 mt-3 text-center">
                                <img src="../../assets/icons/kepala_sekolah.png" alt="Kepala Sekolah" width="100">
                            </div>
                            <div class="col-12 p-0">
                                <p class="mb-0 text-muted small height-jenjang">
                                    Kepala Sekolah dari sekolah asal juga memiliki kesempatan untuk menjadi bagian dari
                                    program guru magang
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- BenefitProgramPKL --}}
    <section class="internship-benefits pt-5" style="padding-bottom: 7rem;">
        <div class="container text-md-center">
            <h2 class="mb-3 text-center" style="padding-bottom: 4rem;">Apa saja yang didapatkan?</h2>
            <div class="row">
                <div class="col-md-12 col-lg-4 mt-3 mb-4 mt-lg-0 mb-lg-0 align-self-center">
                    <div class="accordion">
                        <div class="content-accordion">
                            <div class="accordion-item">
                                <div class="accordion-item-header-benefit">
                                    Praktik Kerja Lapangan
                                </div>
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        Dalam hal ini sekolah akan mendapatkan benefit untuk mengirimkan muridnya menikuti
                                        program PKL yang diselenggarakan oleh PLN ICON PLUS.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-item-header-benefit">
                                    Magang Dibayar
                                </div>
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        Program "Magang Dibayar" adalah salah satu inisiatif yang digagas oleh PLN ICON PLUS
                                        untuk memberikan kesempatan kepada individu yang berminat untuk menjalani magang di
                                        PLN ICON PLUS.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-item-header-benefit">
                                    Sertifikat Industri
                                </div>
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        Dengan hal ini benefit lagi yang akan di dapatkan adalah Sertifikat Industri.
                                        Dimana sertifikat industri ini pemegangnya telah memahami dan memiliki keterampilan
                                        yang diperlukan dalam bidang tertentu.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 mt-3 mb-4 mt-lg-0 mb-lg-0 align-self-center">
                    <div class="accordion">
                        <div class="content-accordion">
                            <div class="accordion-item">
                                <div class="accordion-item-header-benefit">
                                    Sertifikat Profesi
                                </div>
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        Untuk jurusan TITL akan mendapatkan Sertifikat Pelatihan khusus berstandar profesi
                                        yang akan diberikan ketika program magang selesai.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-item-header-benefit">
                                    Pendampingan UKK
                                </div>
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        Kami juga menyediakan Program pendampingan UKK untuk membantu siswa menghadapi ujian
                                        keterampilan kejuruan dengan percaya diri, meningkatkan persiapan mereka dan peluang
                                        kelulusan.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-item-header-benefit">
                                    Pendampingan LKS
                                </div>
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        Sekolah juga dapat meminta Pendampingan LKS untuk mempersiapkan siswa-siswi nya
                                        untuk
                                        berkompetisi di berbagai tingkat, memastikan mereka siap untuk menampilkan kemampuan
                                        terbaik mereka dalam perlombaan.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 mt-3 mb-4 mt-lg-0 mb-lg-0 align-self-center d-lg-block">
                    <img src="assets/images/userpremium/illustration/vect_smart_object.png" alt="Manfaat Kelas Industri"
                        class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    {{-- BidKomProgramPKL --}}
    <section class="internship-field-competencies pt-5" style="padding-bottom: 3rem;">
        <div class="container text-md-center">
            <h2 class="main-heading mb-2">Pilih Bidang dan Kompetensimu</h2>
            <p class="text-muted" style="margin-bottom: 7rem">
                Berikut adalah beberapa bidang dan kompetensi jurusan untuk program PKL
            </p>
            <div class="row justify-content-center align-items-stretch text-left mb-3 mb-md-2">
                <div class="col-6 col-sm-3 col-lg-3 pb-4 mt-0 mt-lg-0 mb-lg-0">
                    <div class="competency-card h-100 shadow-sm border-0 hover-shadow px-2">
                        <div class="competency-card-body px-1 py-2 text-center">
                            <img src="../../assets/icons/tjkt-icon.png" alt="TJKT" class="img-fluid mb-3" />
                            <p class="fw-norml text-muted">
                                Teknik Jaringan Komputer dan Telekomunikasi (TJKT)
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-3 pb-4 mt-0 mt-lg-0 mb-lg-0">
                    <div class="competency-card h-100 shadow-sm border-0 hover-shadow px-2">
                        <div class="competency-card-body px-1 py-2 text-center">
                            <img src="../../assets/icons/titl-icon.png" alt="TITL" class="img-fluid mb-3" />
                            <p class="fw-norml text-muted">
                                Teknik Instalasi Tenaga Listrik <br />(TITL)
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-3 pb-4 mt-0 mt-lg-0 mb-lg-0">
                    <div class="competency-card h-100 shadow-sm border-0 hover-shadow px-2">
                        <div class="competency-card-body px-1 py-2 text-`center">
                            <img src="../../assets/icons/rpl-icon.png" alt="RPL" class="img-fluid mb-3" />
                            <p class="fw-norml text-muted">
                                Rekayasa Perangkat Lunak<br />(RPL)
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-3 pb-4 mt-0 mt-lg-0 mb-lg-0">
                    <div class="competency-card h-100 shadow-sm border-0 hover-shadow px-2">
                        <div class="competency-card-body px-1 py-2 text-center">
                            <img src="../../assets/icons/dkv-icon.png" alt="DKV" class="img-fluid mb-3" />
                            <p class="fw-norml text-muted">
                                Desain Komunikasi Visual <br />(DKV)
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- LowonganProgramPKL --}}
    <section id="pendaftaran" class="title-registration">
        <div class="container">
            <div class="registration-content row">
                <div class="content-text col-md-7 align-self-center text-lg-start">
                    <h2 class="main-heading text-lg-left fw-normal">
                        <span class="fs-4 fst-italic">Tertarik Bergabung dalam Program</span>
                        <br class="d-none d-lg-block" /><span class="fw-semibold fs-1">Magang Dibayar Kelas Industri
                            ?</span>
                    </h2>
                    <p class="text-muted text-lg-left">
                        Tekan tombol dibawah untuk mengakses dan melihat daftar lowongan magang yang tersedia!!
                    </p>
                    <a class="btn" href="internVacancy">Lihat Lowongan </a>
                </div>
                <div class="col-md-5">
                    <img src="assets/images/userpremium/illustration/officeman.png" alt="Program PKL" />
                </div>
            </div>
        </div>
    </section>

    <!--Main Content Section End -->
@endsection
