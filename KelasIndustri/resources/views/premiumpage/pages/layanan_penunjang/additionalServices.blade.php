@extends('premiumpage.layouts')
@section('home')
    <!--Main Content Section Start -->

    <!-- Title Hero of Feature Pages Start -->
    {{-- BannerLayananPenunjang --}}
    <section class="features-title-hero">
        <div class="container-h py-5 bg-dark page-header-add-service">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-4 text-white fw-semibold mb-3">
                    Layanan Penunjang
                </h1>
            </div>
        </div>
    </section>
    <!-- Title Hero of Feature Pages End -->

    {{-- PengertianLayananPenunjang --}}
    <section class="title-description bg-white m-5">
        <div class="container d-flex align-items-center justify-content-center">
            <div class="description-content text-center">
                <h3 class="mb-4">Apa itu <span class="fw-semibold">Layanan Penunjang ?</span></h3>
                <p>
                    <span class="fw-bold">Layanan Penunjang</span> adalah salah satu dari vallue added Program Kelas Industri
                    yang menyediakan
                    berbagai sarana dan prasarana untuk penyelenggaraan kegiatan di setiap pelaksanaan Kelas Industri. <span
                        class="fw-bold">Layanan Penunjang</span>
                    yang diberikan bukan hanya dalam bentuk layanan fisik ataupun barang. Layanan yang diberikan dari
                    perusahaan juga berbentuk fasilitas internet
                    dan juga pemberian materi tambahan kepada para peserta kegiatan.
                </p>
            </div>
        </div>
    </section>

    {{-- MenuLayananPenunjang --}}
    <section class="documentation-trip pt-5" style="padding-bottom: 10rem;">
        <div class="container text-md-center">
            <h2 class="main-heading mb-3" style="padding-bottom: 7rem;">Layanan Penunjang Kelas Industri</h2>
            <div class="documentation-timeline">
                <div class="timeline-2 left-2">
                    <div class="card">
                        <img src="../../assets/images/userpremium/layananpenunjang/wifi_corner.png" class="card-img-top"
                            alt="Wifi Corner">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-4">WIFI CORNER</h4>
                        </div>
                    </div>
                </div>
                <div class="timeline-2 right-2">
                    <div class="card">
                        <img src="../../assets/images/userpremium/layananpenunjang/seat_manajemen.png" class="card-img-top"
                            alt="Seat Manajemen">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-4">SEAT MANAJEMEN</h4>
                        </div>
                    </div>
                </div>
                <div class="timeline-2 left-2">
                    <div class="card">
                        <img src="../../assets/images/userpremium/layananpenunjang/cctv.png" class="card-img-top"
                            alt="CCTV">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-4">CCTV </h4>
                        </div>
                    </div>
                </div>
                <div class="timeline-2 right-2">
                    <div class="card">
                        <img src="../../assets/images/userpremium/layananpenunjang/datacenter.png" class="card-img-top"
                            alt="Cloud Data Center">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-4">CLOUD DATA CENTER</h4>
                        </div>
                    </div>
                </div>
                <div class="timeline-2 left-2">
                    <div class="card">
                        <img src="../../assets/images/userpremium/layananpenunjang/smart_school.png" class="card-img-top"
                            alt="Smart School">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-4">SMART SCHOOL</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Main Content Section End -->
@endsection
