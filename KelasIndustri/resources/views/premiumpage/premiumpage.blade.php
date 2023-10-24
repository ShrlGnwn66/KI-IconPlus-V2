@extends('premiumpage.layouts')

@section('home')
    <!-- main content section start -->

    <section id="titleHero" class="title-hero">
        <div class="container">
          <div class="row align-items-center">
            <div
              class="col-lg-6 order-2 order-lg-1 text-sm-left text-lg-left text-black"
            >
              <h1 class="mb-md-4 mb-4 mt-5 fw-bold">
                <span>Selamat Datang</span>
              </h1>
              <h2 class="mb-sm-3 mb-md-4 mb-4 fw-semibold">
                <span>{{ auth()->user()->name }}</span>
              </h2>
              <p class="mb-sm-3 mb-md-4 mb-4">
                Kelas Industri PLN Icon Plus merupakan program pelatihan
                berbasis profesi yang menerapkan kurikulum berbasis industri
                serta pengajar yang berasal dari pihak industri. Kelas Industri
                menawarkan beberapa sub-program yang juga merupakan benefit dari
                pihak mitra sekolah yang sudah menjalin Kerja Sama atau MoU (Memorandum of Understanding)
                dengan pihak PLN Icon Plus .
              </p>
            </div>
            <div
              class="col-lg-4 offset-md-2 order-1 order-lg-2 py-md-4 py-0 py-lg-0 pb-4"
            >
              <img
                src="assets/images/userpremium/illustration/people-ladder.png"
                alt="img-kelas-industri"
                class="img-fluid"
                width="500"
              />
            </div>
          </div>
        </div>
      </section>

      <!-- main content section end -->


@endsection
