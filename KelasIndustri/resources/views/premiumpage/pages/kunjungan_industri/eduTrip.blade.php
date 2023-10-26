@extends('premiumpage.layouts')
@section('home')
    <!--Main Content Section Start -->

    <!-- Title Hero of Feature Pages Start -->
    {{-- BannerKunjunganIndustri --}}
    <section class="features-title-hero">
        <div class="container-h py-5 bg-dark page-header-edu-trip">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-4 text-white fw-semibold mb-3">
                    Kunjungan Industri
                </h1>
            </div>
        </div>
    </section>
    <!-- Title Hero of Feature Pages End -->

    {{-- PengertianKunjunganIndustri --}}
    <section class="title-description bg-white m-5">
        <div class="container d-flex align-items-center justify-content-center">
            <div class="description-content text-center">
                <h3 class="mb-4 fs-2">Apa itu <span class="fw-semibold fs-2">Kunjungan Industri ?</span></h3>
                <p>
                    <span class="fw-bold">Kunjungan Industri</span> adalah sebuah kegiatan yang dilakukan siswa SMK untuk
                    mengenal Dunia Usaha, Dunia Industri
                    dan Dunia Kerja dengan mengunjungi sebuah perusahaan atau daerah industrial untuk melihat secara
                    langsung gambaran
                    pekerjaan yang kelak akan di jalani oleh siswa tersebut. Di dalam <span class="fw-bold">Kunjungan
                        Industri</span>, siswa bisa mengamati dari dekat
                    bagaimana kegiatan operasi industrial dari sebuah perusahaan. Sehingga, siswa bisa mendapat gambaran
                    sebuah
                    pekerjaan di bidang kompetensi atau bidang keahlian yang mereka minati. <span class="fw-bold">Kunjungan
                        Industri</span> sangat penting dilakukan
                    agar siswa tidak kaget saat memasuki dunia kerja yang sesungguhnya.
                </p>
            </div>
        </div>
    </section>

    {{-- BenefitKunjunganIndustri --}}
    <section class="benefit-trip pt-5" style="padding-bottom: 7rem;">
        <div class="container text-md-center">
            <h2 class="main-heading mb-2 fw-semibold fs-2">Benefit Mengikuti Kunjungan Industri</h2>
            <p class="mb-3 mb-lg-5 text-muted" style="padding-bottom: 4rem;">Manfaat yang bisa didapat ketika
                mengikuti
                event Kunjungan Industri</p>
            <div class="row">
                <div class="col-md-12 col-lg-5 mt-3 mb-4 mt-lg-0 mb-lg-0 align-self-center d-lg-block">
                    <img src="../../assets/images/userpremium/illustration/saas.png" alt="Benefit Kunjungan Industri"
                        class="img-fluid">
                </div>
                <div class="col-md-12 col-lg-6 offset-1 mt-3 mb-4 mt-lg-0 mb-lg-0 align-self-center">
                    <div class="row">
                        <div class="col-12 col-lg-2 text-center text-lg-right">
                            <img src="../../assets/icons/dkv-icon.png" alt="Icon" class="img-fluid mb-3 mb-lg-0">
                        </div>
                        <div class="benefit-wrapper col-12 col-lg-10 text-lg-left">
                            <p class="benefit-title fw-semibold mb-0">Memperluas Jaringan</p>
                            <p class="benefit-description text-muted fs-lg-14">Kunjungan industri memberikan peluang bagi
                                siswa untuk bertemu dengan
                                professional industri dan karyawan kantor.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-2 text-center text-lg-right">
                            <img src="../../assets/icons/dkv-icon.png" alt="Icon" class="img-fluid mb-3 mb-lg-0">
                        </div>
                        <div class="benefit-wrapper col-12 col-lg-10 text-lg-left">
                            <p class="benefit-title fw-semibold mb-0">Menambah Pengetahuan</p>
                            <p class="benefit-description text-muted fs-lg-14">Kunjungan Industri memberikan wawasan yang
                                lebih mendalam tentang
                                berbagai aspek yang dibutuhkan di industrial.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-2 text-center text-lg-right">
                            <img src="../../assets/icons/dkv-icon.png" alt="Icon" class="img-fluid mb-3 mb-lg-0">
                        </div>
                        <div class="benefit-wrapper col-12 col-lg-10 text-lg-left">
                            <p class="benefit-title fw-semibold mb-0">Mengembangkan Keterampilan Kritis</p>
                            <p class="benefit-description text-muted fs-lg-14">Kunjungan Industri dapat membantu siswa
                                mengembangkan keterampilan
                                analitis, observasi, dan pertanyaan kritis.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-2 text-center text-lg-right">
                            <img src="../../assets/icons/dkv-icon.png" alt="Icon" class="img-fluid mb-3 mb-lg-0">
                        </div>
                        <div class="benefit-wrapper col-12 col-lg-10 text-lg-left">
                            <p class="benefit-title fw-semibold mb-0">Pemahaman Praktis</p>
                            <p class="benefit-description text-muted fs-lg-14">Kunjungan Industri memungkinkan siswa untuk
                                melihat bagaimana bisnis
                                atau industri beroperasi di dunia nyata.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- GaleryKunjunganIndustri --}}
    <section class="custom_galery-section" id="galeryKunjunagnItems">
        <div class="container custom_galery-container">
            <div class="row">
                <div class="section-title text-center pb-4">
                    <h2 class="main-heading fw-semibold fs-2">Kunjungan Industri Sebelumnya</h2>
                </div>
            </div>
            <div class="grid" style="position: relative;">
                @if ($galleryKunjunganItems->count() > 0)
                    @php
                        $filteredImages = [];
                    @endphp

                    @foreach ($galleryKunjunganItems as $item)
                        @if ($item->picture !== null)
                            @php
                                $filteredImages = array_merge($filteredImages, array_filter($item->picture, 'is_string'));
                            @endphp
                        @endif
                    @endforeach

                    @php
                        $recentImages = array_slice(array_reverse($filteredImages), 0, 12); // Mengambil 12 gambar terbaru
                    @endphp

                    @foreach ($recentImages as $picture)
                        @php
                            $item = $galleryKunjunganItems->first(function ($value) use ($picture) {
                                return in_array($picture, $value->picture);
                            });
                        @endphp

                        @if ($item)
                            <div class="grid-item" data-aos="fade-left" data-description="{{ $item->description }}">
                                <a href="{{ asset('uploads/' . $picture) }}" data-fancybox="gallery">
                                    <img src="{{ asset('uploads/' . $picture) }}" alt="{{ $item->description }}" />
                                </a>
                            </div>
                        @endif
                    @endforeach
                @else
                    <p class="text-center pt-2 fw-medium">Tidak ada dokumentasi yang tersedia saat ini.</p>
                @endif
            </div>
        </div>
    </section>
    <!--Main Content Section End -->
@endsection
