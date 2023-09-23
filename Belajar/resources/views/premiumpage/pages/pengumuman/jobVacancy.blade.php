@extends('premiumpage.layouts')
@section('home')
      <!--Main Content Section Start -->

      <!-- Title Hero of Feature Pages Start -->
      <section class="features-title-hero">
        <div class="container-h py-5 bg-dark page-header-job-vacancy">
          <div class="container my-5 pt-5 pb-4">
            <h1 class="display-4 text-white fw-semibold mb-3">
              Lowongan Pekerjaan
            </h1>
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
                  Daftar Pekerjaan Terbaru
                </h2>
              </div>
              <div class="search-list col-9 col-md-5 col-lg-6">
                <form action="" class="w-100 px-0 mb-0">
                  <div class="input-group mb-0">
                    <input
                      type="text"
                      placeholder="Cari pekerjaan di sini"
                      class="form-control"
                    />
                    <div class="input-group-append">
                      <button id="button-addon" class="btn btn-primary">
                        <i class="bi bi-search"></i>
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
            <div class="job-item p-4 mb-4">
              <div class="">
                <header class="row g-4">
                  <div class="col-sm-12 col-md-8 d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid border rounded"
                      src="../../assets/images/userpremium/logo/logo_pln.png"
                      alt=""
                      style="width: 80px; height: 80px"
                    />
                    <div class="text-start ps-4">
                      <h5 class="mb-3">Job Satu</h5>
                      <span class="text-truncate me-3">
                        <i class="fa fa-map-marker-alt text-primary me-2"></i>
                        Jakarta Timur, DKI Jakarta
                      </span>
                      <span class="text-truncate me-3">
                        <i class="far fa-clock text-primary me-2"></i>
                        Full Time
                      </span>
                    </div>
                  </div>
                  <div
                    class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center"
                  >
                    <span class="text-truncate me3"
                      >Lamar sebelum 01 Desember 2023</span
                    >
                    <br />
                    <a
                      href="#"
                      class="btn-show-details"
                      style="text-decoration: none"
                      >Lihat detail <i class="bi bi-chevron-right"></i
                    ></a>
                  </div>
                </header>
                <div class="description">
                  <br />
                  <p>
                    <strong>Tugas dan Tanggung Jawab</strong>
                  </p>
                  <ul>
                    <li>
                      Laborum laborum culpa consequat Lorem labore dolor quis id
                      ullamco officia esse laboris excepteur.
                    </li>
                    <li>
                      Laborum laborum culpa consequat Lorem labore dolor quis id
                      ullamco officia esse laboris excepteur.
                    </li>
                    <li>
                      Laborum laborum culpa consequat Lorem labore dolor quis id
                      ullamco officia esse laboris excepteur.
                    </li>
                    <li>
                      Laborum laborum culpa consequat Lorem labore dolor quis id
                      ullamco officia esse laboris excepteur.
                    </li>
                    <li>
                      Laborum laborum culpa consequat Lorem labore dolor quis id
                      ullamco officia esse laboris excepteur.
                    </li>
                  </ul>
                  <p>
                    <strong>Skill dan Pengalaman</strong>
                  </p>
                  <ul>
                    <li>
                      Deserunt ex labore sint labore excepteur eiusmod laboris
                      esse deserunt laboris minim do deserunt.
                    </li>
                    <li>
                      Deserunt ex labore sint labore excepteur eiusmod laboris
                      esse deserunt laboris minim do deserunt.
                    </li>
                    <li>
                      Deserunt ex labore sint labore excepteur eiusmod laboris
                      esse deserunt laboris minim do deserunt.
                    </li>
                    <li>
                      Deserunt ex labore sint labore excepteur eiusmod laboris
                      esse deserunt laboris minim do deserunt.
                    </li>
                  </ul>
                  <p>
                    <strong>Informasi Kerja</strong>
                  </p>
                  <ul>
                    <li>
                      Deserunt ex labore sint labore excepteur eiusmod laboris
                      esse deserunt laboris minim do deserunt.
                    </li>
                    <li>
                      Deserunt ex labore sint labore excepteur eiusmod laboris
                      esse deserunt laboris minim do deserunt.
                    </li>
                  </ul>
                  <a href="#" class="btn-show-less"
                    >Lihat lebih Sedikit <i class="bi bi-chevron-up"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="job-lists" id="job-lists">
          <div class="container">
            <div class="job-item p-4 mb-4">
              <div class="">
                <header class="row g-4">
                  <div class="col-sm-12 col-md-8 d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid border rounded"
                      src="assets/images/userpremium/logo/logo_pln.png"
                      alt=""
                      style="width: 80px; height: 80px"
                    />
                    <div class="text-start ps-4">
                      <h5 class="mb-3">Job Dua</h5>
                      <span class="text-truncate me-3">
                        <i class="fa fa-map-marker-alt text-primary me-2"></i>
                        Jakarta Timur, DKI Jakarta
                      </span>
                      <span class="text-truncate me-3">
                        <i class="far fa-clock text-primary me-2"></i>
                        Full Time
                      </span>
                    </div>
                  </div>
                  <div
                    class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center"
                  >
                    <span class="text-truncate me3"
                      >Lamar sebelum 01 Desember 2023</span
                    >
                    <br />
                    <a
                      href="#"
                      class="btn-show-details"
                      style="text-decoration: none"
                      >Lihat detail <i class="bi bi-chevron-right"></i
                    ></a>
                  </div>
                </header>
                <div class="description">
                  <br />
                  <p>
                    <strong>Tugas dan Tanggung Jawab</strong>
                  </p>
                  <ul>
                    <li>
                      Laborum laborum culpa consequat Lorem labore dolor quis id
                      ullamco officia esse laboris excepteur.
                    </li>
                    <li>
                      Laborum laborum culpa consequat Lorem labore dolor quis id
                      ullamco officia esse laboris excepteur.
                    </li>
                    <li>
                      Laborum laborum culpa consequat Lorem labore dolor quis id
                      ullamco officia esse laboris excepteur.
                    </li>
                    <li>
                      Laborum laborum culpa consequat Lorem labore dolor quis id
                      ullamco officia esse laboris excepteur.
                    </li>
                    <li>
                      Laborum laborum culpa consequat Lorem labore dolor quis id
                      ullamco officia esse laboris excepteur.
                    </li>
                  </ul>
                  <p>
                    <strong>Skill dan Pengalaman</strong>
                  </p>
                  <ul>
                    <li>
                      Deserunt ex labore sint labore excepteur eiusmod laboris
                      esse deserunt laboris minim do deserunt.
                    </li>
                    <li>
                      Deserunt ex labore sint labore excepteur eiusmod laboris
                      esse deserunt laboris minim do deserunt.
                    </li>
                    <li>
                      Deserunt ex labore sint labore excepteur eiusmod laboris
                      esse deserunt laboris minim do deserunt.
                    </li>
                    <li>
                      Deserunt ex labore sint labore excepteur eiusmod laboris
                      esse deserunt laboris minim do deserunt.
                    </li>
                  </ul>
                  <a href="#" class="btn-show-less"
                    >Lihat lebih Sedikit <i class="bi bi-chevron-up"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="job-lists" id="job-lists">
          <div class="container">
            <div class="job-item p-4 mb-4">
              <div class="">
                <header class="row g-4">
                  <div class="col-sm-12 col-md-8 d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid border rounded"
                      src="assets/images/userpremium/logo/logo_pln.png"
                      alt=""
                      style="width: 80px; height: 80px"
                    />
                    <div class="text-start ps-4">
                      <h5 class="mb-3">Job Tiga</h5>
                      <span class="text-truncate me-3">
                        <i class="fa fa-map-marker-alt text-primary me-2"></i>
                        Jakarta Timur, DKI Jakarta
                      </span>
                      <span class="text-truncate me-3">
                        <i class="far fa-clock text-primary me-2"></i>
                        Full Time
                      </span>
                    </div>
                  </div>
                  <div
                    class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center"
                  >
                    <span class="text-truncate me3"
                      >Lamar sebelum 01 Desember 2023</span
                    >
                    <br />
                    <a
                      href="#"
                      class="btn-show-details"
                      style="text-decoration: none"
                      >Lihat detail <i class="bi bi-chevron-right"></i
                    ></a>
                  </div>
                </header>
                <div class="description">
                  <br />
                  <p>
                    <strong>Tugas dan Tanggung Jawab</strong>
                  </p>
                  <ul>
                    <li>
                      Laborum laborum culpa consequat Lorem labore dolor quis id
                      ullamco officia esse laboris excepteur.
                    </li>
                    <li>
                      Laborum laborum culpa consequat Lorem labore dolor quis id
                      ullamco officia esse laboris excepteur.
                    </li>
                    <li>
                      Laborum laborum culpa consequat Lorem labore dolor quis id
                      ullamco officia esse laboris excepteur.
                    </li>
                    <li>
                      Laborum laborum culpa consequat Lorem labore dolor quis id
                      ullamco officia esse laboris excepteur.
                    </li>
                    <li>
                      Laborum laborum culpa consequat Lorem labore dolor quis id
                      ullamco officia esse laboris excepteur.
                    </li>
                  </ul>
                  <p>
                    <strong>Skill dan Pengalaman</strong>
                  </p>
                  <ul>
                    <li>
                      Deserunt ex labore sint labore excepteur eiusmod laboris
                      esse deserunt laboris minim do deserunt.
                    </li>
                    <li>
                      Deserunt ex labore sint labore excepteur eiusmod laboris
                      esse deserunt laboris minim do deserunt.
                    </li>
                    <li>
                      Deserunt ex labore sint labore excepteur eiusmod laboris
                      esse deserunt laboris minim do deserunt.
                    </li>
                    <li>
                      Deserunt ex labore sint labore excepteur eiusmod laboris
                      esse deserunt laboris minim do deserunt.
                    </li>
                  </ul>
                  <a href="#" class="btn-show-less"
                    >Lihat lebih Sedikit <i class="bi bi-chevron-up"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="job-lists" id="job-lists">
          <div class="container">
            <div class="job-item p-4 mb-4">
              <div class="">
                <header class="row g-4">
                  <div class="col-sm-12 col-md-8 d-flex align-items-center">
                    <img
                      class="flex-shrink-0 img-fluid border rounded"
                      src="assets/images/userpremium/logo/logo_pln.png"
                      alt=""
                      style="width: 80px; height: 80px"
                    />
                    <div class="text-start ps-4">
                      <h5 class="mb-3">Job Empat</h5>
                      <span class="text-truncate me-3">
                        <i class="fa fa-map-marker-alt text-primary me-2"></i>
                        Jakarta Timur, DKI Jakarta
                      </span>
                      <span class="text-truncate me-3">
                        <i class="far fa-clock text-primary me-2"></i>
                        Full Time
                      </span>
                    </div>
                  </div>
                  <div
                    class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center"
                  >
                    <span class="text-truncate me3"
                      >Lamar sebelum 01 Desember 2023</span
                    >
                    <br />
                    <a
                      href="#"
                      class="btn-show-details"
                      style="text-decoration: none"
                      >Lihat detail <i class="bi bi-chevron-right"></i
                    ></a>
                  </div>
                </header>
                <div class="description">
                  <br />
                  <p>
                    <strong>Tugas dan Tanggung Jawab</strong>
                  </p>
                  <ul>
                    <li>
                      Laborum laborum culpa consequat Lorem labore dolor quis id
                      ullamco officia esse laboris excepteur.
                    </li>
                    <li>
                      Laborum laborum culpa consequat Lorem labore dolor quis id
                      ullamco officia esse laboris excepteur.
                    </li>
                    <li>
                      Laborum laborum culpa consequat Lorem labore dolor quis id
                      ullamco officia esse laboris excepteur.
                    </li>
                    <li>
                      Laborum laborum culpa consequat Lorem labore dolor quis id
                      ullamco officia esse laboris excepteur.
                    </li>
                    <li>
                      Laborum laborum culpa consequat Lorem labore dolor quis id
                      ullamco officia esse laboris excepteur.
                    </li>
                  </ul>
                  <p>
                    <strong>Skill dan Pengalaman</strong>
                  </p>
                  <ul>
                    <li>
                      Deserunt ex labore sint labore excepteur eiusmod laboris
                      esse deserunt laboris minim do deserunt.
                    </li>
                    <li>
                      Deserunt ex labore sint labore excepteur eiusmod laboris
                      esse deserunt laboris minim do deserunt.
                    </li>
                    <li>
                      Deserunt ex labore sint labore excepteur eiusmod laboris
                      esse deserunt laboris minim do deserunt.
                    </li>
                    <li>
                      Deserunt ex labore sint labore excepteur eiusmod laboris
                      esse deserunt laboris minim do deserunt.
                    </li>
                  </ul>
                  <a href="#" class="btn-show-less"
                    >Lihat lebih Sedikit <i class="bi bi-chevron-up"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Job Lists End -->

      <!--Main Content Section End -->
@endsection
