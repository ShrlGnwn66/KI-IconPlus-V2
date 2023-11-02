@extends('layouts.layouts')

@section('content')
    <!-- Hero area -->
    {{-- HeroSection --}}
    <section class="hero_area-section" id="home">
        <div class="container-fluid pt-5 custom_hero-section">
            <div class="row">
                <div class="col-lg-4 pt-5 custom_hero-text">
                    <h5 class="text-uppercase fs-5 fw-semibold">Welcome</h5>
                    <h1 class="text-uppercase fw-bold">Kelas Industri</h1>
                    <h2 class="fs-3 mb-3 fw-semibold">PLN Icon Plus</h2>
                    <p>
                        Kelas Industri merupakan salah satu program dari PLN Icon Plus SBU
                        Regional Jawa Bagian Tengah yang ditujukan untuk mengurangi <strong>gap</strong> kompetensi
                        kebutuhan industri dengan
                        lulusan SMK, sehingga dapat lebih siap kerja dan sesuai dengan tuntutan perkembangan
                        teknologi.
                    </p>
                    <a href="login" class="btn rounded-3 shadow">Access Now</a>
                </div>
                <div class="col-lg-5 pt-5 offset-md-1 custom_hero-image">
                    <img src="assets/images/hero.png" alt="PLN Icon Plus" />
                    <!--scroll top-->
                    <span class="custom_scroll-top" href=""><i class="bi bi-arrow-up-square-fill"></i></span>
                </div>
                <div class="col-lg-1 custom_social-media">
                    <h2>FOLLOW US ON</h2>
                    <div class="border"></div>
                    <div class="social_media-button">
                        <a href=""><i class="bi bi-whatsapp"></i></a>
                        <a href="https://www.instagram.com/pln.iconplus_jatengdiy/"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero area -->

    <!-- About Area -->
    {{-- AboutUsSection --}}
    <section class="about_area-section pt-5 pb-5 mb-5" id="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 pt-5">
                    <img class="img-fluid" src="assets/images/aboutUs.png" alt="About Icon Plus" />
                </div>
                <div class="col-lg-5 offset-lg-2 custom_about-text">
                    <h5 class="text-uppercase fw-semibold pt-5">About Us</h5>
                    <h2 class="fs-2 mb-2 fw-bolder">PLN Icon Plus</h2>
                    <p>
                        Pada tahun 2000, PLN Icon Plus memulai kegiatan komersialnya dengan Network Operation Centre
                        yang berlokasi di Gandul, Cinere. Sebagai Entitas Anak PT PLN (Persero), pendirian PLN Icon Plus
                        difokuskan untuk melayani kebutuhan PT PLN (Persero) terhadap jaringan telekomunikasi, Sejak 21
                        September 2022 Merupakan subholding dari Perusahaan PLN (Persero) yang bergerak di bidang jasa penyedia
                        jaringan telekomunikasi serat optik.
                        <br />
                        <br />
                        PLN Icon Plus secara konsisten melakukan inovasi produk dan
                        layanan dengan mengedepankan kualitas jaringan dan teknologi
                        terkini sesuai dengan visi
                        <span class="fw-semibold">"Menjadi Penyedia Solusi Teknologi Informasi dan Komunikasi
                            (TIK) Terkemuka di Indonesia Berbasis Jaringan Melalui
                            Pemanfaatan Aset Strategis".</span> PLN Icon Plus tak lagi hanya berperan sebagai IT Enabler
                        PLN. Melainkan, akan menjadi ujung tombak PLN dalam membangun lini bisnis di luar kelistrikan atau
                        Beyond kWh.
                    </p>
                    <a href="https://plniconplus.co.id/about/" target="_blank" class="btn rounded-3 shadow">Read More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area -->

    <!-- Services Area -->
    {{-- ServicesSection --}}
    <section class="services_area-section mt-5 pt-5 pb-5" id="services">
        <div class="container mt-5">
            <h4 class="text-uppercase fs-5 fw-semibold text-center">
                our services
            </h4>
            <h2 class="text-center fs-3 mb-2 pb-5 fw-bolder">
                Layanan Kelas Industri
            </h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100 card border-0 custom_card-section">
                        <img src="assets/icons/connectivity.png" class="card-img-top" alt="Connectivity" />
                        <div class="card-body">
                            <h5 class="card-title text-center fw-semibold">Connectivity</h5>
                            <p class="card-text text-center">
                                PLN Icon Plus menyediakan akses Internet, Setup Jaringan, dan
                                Fiberisasi 24/7 tanpa batas kuota dan flate rate.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 card border-0 custom_card-section">
                        <img src="assets/icons/branding_tools.png" class="card-img-top" alt="Branding & Tools" />
                        <div class="card-body">
                            <h5 class="card-title text-center fw-semibold">
                                Branding & Tools
                            </h5>
                            <p class="card-text text-center">
                                PLN Icon Plus membantu menyiapkan laboratorium kelas industri untuk jurusan TJKT, TITL, DKV
                                dan RPL serta menyediakan peralatan dan perangkat pendukung.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 card border-0 custom_card-section">
                        <img src="assets/icons/tenaga_ahli.png" class="card-img-top" alt="Guest Teacher" />
                        <div class="card-body">
                            <h5 class="card-title text-center fw-semibold">Guest Teacher</h5>
                            <p class="card-text text-center">
                                PLN Icon Plus menyediakan Guru Tamu, Tenaga Penguji untuk Uji
                                Kompetensi, Pendamping LKS dan Teaching Factory.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 card border-0 custom_card-section">
                        <img src="assets/icons/digital_solution.png" class="card-img-top" alt="Digital Solution" />
                        <div class="card-body">
                            <h5 class="card-title text-center fw-semibold">
                                Digital Solution
                            </h5>
                            <p class="card-text text-center">
                                PLN Icon Plus memberikan solusi bagi sekolah mitra untuk memudahkan
                                pelayanan sekolah (I-School).
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 card border-0 custom_card-section">
                        <img src="assets/icons/renew_energy_solution.png" class="card-img-top"
                            alt="Renewable Energy Solution" />
                        <div class="card-body">
                            <h5 class="card-title text-center fw-semibold">
                                Renewable Energy Solution
                            </h5>
                            <p class="card-text text-center">
                                Pembelajaran sistem Photovoltaic Rooftop sebagai solusi untuk
                                mengurangi konsumsi listrik.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 card border-0 custom_card-section">
                        <img src="assets/icons/education_trip.png" class="card-img-top" alt="Education Trip" />
                        <div class="card-body">
                            <h5 class="card-title text-center fw-semibold">
                                Education Trip
                            </h5>
                            <p class="card-text text-center">
                                Jadwal kunjungan pembelajaran untuk siswa/siswi ke data
                                center untuk memperluas pengetahuan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Area End -->

    <!-- Counter Animation Area -->
    {{-- AchievementSection --}}
    <section class="custom_section-counter" id="count-section">
        <div class="container me-5 custom_counter">
            <div class="row">
                <div class="col-lg-1">
                    {{-- angkatahun --}}
                    <span class="count" data-target="23">0</span>
                    <span class="plus fs-3">+</span>
                    <p>Years</p>
                </div>
                <div class="col-lg-2">
                    <p>
                        Berpengalaman menyediakan layanan dibidang jaringan telekomunikasi
                    </p>
                </div>
                <div class="col-lg-1 offset-lg-1">
                    {{-- angkaproject --}}
                    <span class="count" data-target="23">0</span>
                    <span class="plus fs-3">+</span>
                    <p>Project</p>
                </div>
                <div class="col-lg-2">
                    <p>
                        Telah digunakan oleh lembaga sekolah sebagai sarana pembelajaran
                    </p>
                </div>
                <div class="col-lg-1 offset-lg-1">
                    {{-- angkasekolah --}}
                    <span class="count" data-target="52">0</span>
                    <span class="plus fs-3">+</span>
                    <p>Clients</p>
                </div>
                <div class="col-lg-2">
                    <p>
                        Mempercayai kami sebagai penyedia kelas industri bagi sekolah
                        mitra
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Animation Area -->

    <!-- Why Choose Us -->
    {{-- WCUSection --}}
    <section class="wcu_area-section pb-5" id="wcu-section">
        <div class="container pb-5 pt-3">
            <div class="row">
                <div class="col-lg-4 custom_wcu-text">
                    <h5 class="fs-5 fw-semibold">WHY CHOOSE US</h5>
                    <span>
                        <h2 class="fs-3 fw-bolder">Manfaat Mengikuti</h2>
                        <h1 class="text-uppercase fw-bolder">Kelas Industri</h1>
                    </span>
                    <p class="fw-medium">
                        Sebagai perusahaan yang sudah menjalin kerja sama (MoU) dengan
                        beberapa mitra sekolah vokasi, kami akan mendukung semua yang
                        dibutuhkan mitra dalam pelaksanaan kelas industri.
                    </p>
                    <img src="assets/icons/check-list1.png" />
                    <div class="text-wcu">
                        <h2>Quality First</h2>
                        <p>
                            Memprioritaskan kualitas layanan juga material dan perangkat
                            pendukung kelas industri.
                        </p>
                    </div>
                    <img src="assets/icons/check-list2.png" />
                    <div class="text-wcu">
                        <h2>Fast Service</h2>
                        <p>
                            Tim pelaksana kelas industri merupakan tim yang cepat dan
                            tanggap.
                        </p>
                    </div>
                    <img src="assets/icons/check-list3.png" />
                    <div class="text-wcu">
                        <h2>Complete Equipment</h2>
                        <p>
                            Material dan perangkat pendukung yang lengkap kami sediakan
                            untuk kebutuhan mitra.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 pt-5 offset-lg-2 custom_wcu-image">
                    <img class="img-fluid" src="assets/images/wcu_image.png" alt="Kelas Industri" />
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose Us End -->

    <!-- Galery Section -->
    {{-- GalerySection --}}
    <section class="custom_galery-section" id="galery">
        <div class="container custom_galery-container">
            <div class="row">
                <div class="section-title text-center mb-4">
                    <h5 class="text-uppercase fs-5 fw-semibold">Galeri Dokumentasi</h5>
                    <h1 class="text-capitalize fw-semibold d-inline-block position-relative">
                        Pelaksanaan Kelas Industri
                    </h1>
                </div>
            </div>

            <div class="item-links">
                <span class="item-link menu-active" data-name="DKV">DKV</span>
                <span class="item-link" data-name="RPL">RPL</span>
                <span class="item-link" data-name="TITL">TITL</span>
                <span class="item-link" data-name="TJKT">TJKT</span>
            </div>

            <div class="grid" style="position: relative;">
                @if ($galleryItems->count() > 0)
                    @foreach ($galleryItems as $item)
                        @if ($item->image !== null)
                            @php
                                $filteredImages = array_filter($item->image, 'is_string');
                            @endphp

                            @foreach ($filteredImages as $image)
                                <div class="grid-item" data-aos="fade-left" data-name="{{ $item->department }}"
                                    data-description=" {{ $item->description }}">
                                    <a href="{{ asset('uploads/' . $image) }}" data-fancybox="gallery"
                                        data-caption="{{ $item->department }}">
                                        <img src="{{ asset('uploads/' . $image) }}" alt="{{ $item->description }}" />
                                    </a>
                                </div>
                            @endforeach
                        @endif
                    @endforeach
                @else
                    <p class="text-center pt-2 fw-medium">Tidak ada dokumentasi yang tersedia saat ini.</p>
                @endif
            </div>



            </form>
        </div>
    </section>
    <!-- Galery Section End -->

    <!-- Custom News -->
    {{-- News Section --}}
    <section class="container_news mt-3 pt-3" id="news">
        <div class="card__container swiper">
            <h4 class="text-uppercase text-center fs-4 fw-semibold">NEWS</h4>
            <h2 class="text-capitalize text-center fs-2 fw-bolder pb-3" style="color: #0093ae">Berita Terbaru Kami</h2>
            <div class="card__content">
                <div class="swiper-wrapper">
                    @if ($newsImage->count() > 0)
                        @foreach ($newsImage as $image)
                            <article class="card__article swiper-slide">
                                <div class="card__image">
                                    <img src="{{ asset('uploads/' . $image->picture) }}" alt="Berita Icon Plus"
                                        class="card__img">
                                    <div class="card__shadow"></div>
                                </div>
                                <div class="card__data">
                                    <h3 class="card__name" data-id="{{ $image->title }}">{{ $image->title }}</h3>
                                    <p class="card__date" class="card__date" data-id="{{ $image->date }}">
                                        {{ \Carbon\Carbon::parse($image->date)->format('j-F-Y') }}
                                    </p>
                                    <p class="card__description" data-id="{{ $image->description }}">
                                        {{ $image->description }}
                                    </p>
                                    <a href="{{ route('news', ['id' => $image->id]) }}" class="card__button">Baca
                                        Selengkapnya</a>

                                </div>
                            </article>
                        @endforeach
                    @else
                        <p class="pt-2 fw-medium">Tidak ada berita yang tersedia saat ini.</p>
                    @endif
                </div>
            </div>

            @if ($newsImage->count() > 0)
                <!-- Navigation buttons -->
                <div class="swiper-button-next">
                    <i class="ri-arrow-right-s-line"></i>
                </div>

                <div class="swiper-button-prev">
                    <i class="ri-arrow-left-s-line"></i>
                </div>

                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            @endif

        </div>
    </section>
    <!-- custom news -->
@endsection
