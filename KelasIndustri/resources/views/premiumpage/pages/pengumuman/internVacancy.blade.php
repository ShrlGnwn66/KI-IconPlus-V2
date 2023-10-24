@extends('premiumpage.layouts')
@section('home')
    <!--Main Content Section Start -->

    <!-- Title Hero of Feature Pages Start -->
    <section class="features-title-hero">
        <div class="container-h py-5 bg-dark page-header-intern-vacancy">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-4 text-white fw-semibold mb-3">
                    Magang Di Bayar
                </h1>
                <p class="text-white overflow-hidden" style="max-width: 100vh">
                    Program Magang Dibayar merupakan salah satu program yang digagas oleh PLN Icon Plus pusat untuk
                    memberikan
                    kesempatan kepada siswa/siswi dari sekolah yang sudah menjalin kerjasama untuk menjalani magang di PLN
                    Icon Plus dengan
                    penempatan di 10 SBU.
                </p>
            </div>
        </div>
    </section>
    <!-- Title Hero of Feature Pages End -->

    <!-- Job Lists Start -->
    <section class="main-job-lists" id="main-job-lists">
        <div class="title-job-lists" id="title-job-lists">
            <div class="container mb-4 mb-md-5 pb-3 pb-md-0 pt-2 pt-md-3">
                <div class="row justify-content-between">
                    <div class="title-list col-md-6 col-lg-6">
                        <h2 class="fw-bold text-md-left mb-md-0 mb-4 pb-2 pb-md-0">
                            Lowongan Terbaru
                        </h2>
                    </div>
                    <div class="search-list col-9 col-md-5 col-lg-6">
                        <form action="" class="w-100 px-0 mb-0">
                            <div class="input-group mb-0">
                                <input type="text" placeholder="Cari pekerjaan di sini"
                                    class="form-control shadow-none" />
                                <div class="input-group-append">
                                    <button id="button-addon" class="btn btn-primary">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="job-lists" id="job-lists">
            <div class="container">
                @if ($internVacancy->count() > 0)
                    @foreach ($internVacancy as $intern)
                        <div class="job-item p-4 mb-4">
                            <header class="row g-4">
                                <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid border rounded"
                                        src="{{ asset('uploads/' . $intern->picture) }}" alt="Intern Image"
                                        style="width: 80px; height: 80px" />
                                    <div class="text-start ps-4">
                                        <h5 class="mb-3">{{ $intern->title }}</h5>
                                        <span class="text-truncate me-3">
                                            <i class="fa fa-map-marker-alt text-primary me-2"></i>
                                            {{ $intern->placement }}
                                        </span>
                                        <span class="text-truncate me-3">
                                            <i class="far fa-clock text-primary me-2"></i>
                                            {{ $intern->work_hours }}
                                        </span>
                                    </div>
                                </div>
                                <div
                                    class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                    <span class="text-truncate pe-2">Lamar sebelum
                                        <span
                                            class="text-danger fw-medium fst-italic">{{ \Carbon\Carbon::parse($intern->expired_date)->format('j F Y') }}</span></span>
                                    <br />
                                    <a href="#" class="btn-show-details" style="text-decoration: none">Lihat detail <i
                                            class="bi bi-chevron-right"></i></a>
                                </div>
                            </header>
                            <div class="description">
                                <br />
                                <p>
                                    <strong>{{ $intern->title_job }}</strong>
                                </p>
                                <ul>
                                    @foreach (explode('- ', $intern->job_description) as $description)
                                        @if (!@empty(trim($description)))
                                            <li>{!! $description !!}</li>
                                        @endif
                                    @endforeach
                                </ul>
                                <p>
                                    <strong>{{ $intern->title_qualifications }}</strong>
                                </p>
                                <ul>
                                    @foreach (explode('- ', $intern->qualifications) as $qualifications)
                                        @if (!@empty(trim($qualifications)))
                                            <li>{!! $qualifications !!}</li>
                                        @endif
                                    @endforeach
                                </ul>
                                <a href="#" class="btn-show-less">Lihat lebih Sedikit <i
                                        class="bi bi-chevron-up"></i></a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="text-center pt-2 fw-medium">Tidak ada lowongan yang tersedia saat ini.</p>
                @endif
            </div>
        </div>
    </section>
    <!-- Job Lists End -->

    <!--Main Content Section End -->
@endsection
