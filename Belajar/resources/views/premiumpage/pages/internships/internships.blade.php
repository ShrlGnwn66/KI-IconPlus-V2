@extends('premiumpage.layouts')
{{-- @include('premiumpage.navbar') --}}
@section('home')
     <!--Main Content Section Start -->

      <!-- Title Hero of Feature Pages Start -->
      <section class="features-title-hero">
        <div class="container-h py-5 bg-dark page-header-internships">
          <div class="container my-5 pt-5 pb-4">
            <h1 class="display-4 text-white fw-semibold mb-3">
              Program Magang
            </h1>
          </div>
        </div>
      </section>
      <!-- Title Hero of Feature Pages End -->

      <section class="title-description bg-white m-5">
        <div class="container d-flex align-items-center justify-content-center">
          <div class="description-content text-center">
            <h3 class="mb-4" style="padding-bottom: 3rem;">
              Apa itu <span class="fw-semibold">Program Magang</span> Kelas Industri ?
            </h3>
            <p>
              <span class="fw-semibold">Program Magang</span> adalah salah satu bagian dari program Kelas Industri PLN Icon Plus
              yang bertujuan untuk memberikan kesempatan kepada pelajar yang ingin mengembangkan
              diri. Di dalam Program Magang Kelas Industri, bukan hanya Siswa SMK saja yang bisa
              mengikuti program ini. Peserta magang akan mendapatkan pengalaman kerja di dunia industri
              selama <span class="fw-semibold">1 semester</span>. Dengan pembelajaran langsung di industri (Tempat Kerja Mitra Magang), peserta
              bisa mengasah <span class="fw-semibold">hard skill</span> maupun <span class="fw-semibold">soft skill</span>   yang akan membuat peserta bisa lebih matang
              untuk memasuki dunia kerja.
            </p>
          </div>
        </div>
      </section>

      <section class="internship-participation pt-5" style="padding-bottom: 10rem;">
        <div class="container text-md-center">
          <h2 class="mb-3 text-center" style="padding-bottom: 7rem;">Siapa saja yang bisa mengikuti?</h2>
          <div class="row mx-auto w-100 pb-3 pt-3">
            <div class="col-md-4 col-lg-4 mb-3 border-0 pl-0 pr-0 pr-sm-3">
              <div class="card shadow-sm hover-shadow h-100 border-0">
                <div class="card-body row w-100 mx-auto">
                  <div class="col-12 p-0 mb-0">
                    <p class="mb-0 text-center h5 fw-bold">Mahasiswa</p>
                  </div>
                  <div class="col-12 p-0 mb-0 text-center">
                    <img src="../../assets/icons/icons8-permanent-job-100.png" alt="">
                  </div>
                  <div class="col-12 p-0">
                    <p class="mb-0 text-muted small height-jenjang">
                      Mahasiswa aktif jurusan DKV, Teknik Informatika, Manajemen Informatika, Teknik Komputer dll
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-3 border-0 pl-0 pr-0 pr-sm-3">
              <div class="card shadow-sm hover-shadow h-100 border-0">
                <div class="card-body row w-100 mx-auto">
                  <div class="col-12 p-0 mb-0">
                    <p class="mb-0 text-center h5 fw-bold">Siswa (SMK)</p>
                  </div>
                  <div class="col-12 p-0 mb-0 text-center">
                    <img src="../../assets/icons/icons8-permanent-job-100.png" alt="">
                  </div>
                  <div class="col-12 p-0">
                    <p class="mb-0 text-muted small height-jenjang">
                      Siswa SMK aktif jurusan DKV, RPL, Multimedia, Jaringan dan Pemasaran dapat bergabung
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
                  <div class="col-12 p-0 mb-0 text-center">
                    <img src="../../assets/icons/icons8-permanent-job-100.png" alt="">
                  </div>
                  <div class="col-12 p-0">
                    <p class="mb-0 text-muted small height-jenjang">
                      Guru dari sekolah asal juga dapat bergabung dengan program guru magang
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="internship-benefits pt-5" style="padding-bottom: 10rem;">
        <div class="container text-md-center">
          <h2 class="mb-3 text-center" style="padding-bottom: 7rem;">Apa saja yang didapatkan?</h2>
          <div class="row">
            <div class="col-md-12 col-lg-4 mt-3 mb-4 mt-lg-0 mb-lg-0 align-self-center">
              <div class="accordion">
                <div class="content-accordion">
                  <div class="accordion-item">
                      <div class="accordion-item-header-benefit">
                          Modul Pelatihan
                      </div>
                      <div class="accordion-item-body">
                          <div class="accordion-item-body-content">
                          Selama proses Program Magang dilakukan, peserta akan mendapatkan modul pelatihan sebagai panduan pelatihan dalam menjalani proses magang.
                          </div>
                      </div>
                  </div>
                  <div class="accordion-item">
                      <div class="accordion-item-header-benefit">
                          Sertifikat Pelatihan
                      </div>
                      <div class="accordion-item-body">
                          <div class="accordion-item-body-content">
                          Untuk jurusan TITL akan mendapatkan Sertifikat Pelatihan khusus berstandar profesi yang akan diberikan ketika program magang selesai.
                          </div>
                      </div>
                  </div>
                  <div class="accordion-item">
                      <div class="accordion-item-header-benefit">
                          Sertifikat Magang
                      </div>
                      <div class="accordion-item-body">
                          <div class="accordion-item-body-content">
                          Untuk peserta magang reguler akan mendapatkan surat dan sertifikat magang ketika program magang telah selesai dilakukan.
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
                          Pengetahuan Industri
                      </div>
                      <div class="accordion-item-body">
                          <div class="accordion-item-body-content">
                          Salah satu benefit yang didapatkan adalah terkait pengetahuan industri yang meliputi Alur Kerja Industri hingga Business Knowledge.
                          </div>
                      </div>
                  </div>
                  <div class="accordion-item">
                      <div class="accordion-item-header-benefit">
                          Relasi Karyawan Industri
                      </div>
                      <div class="accordion-item-body">
                          <div class="accordion-item-body-content">
                          Peserta magang juga pastinya bisa memperluas relasi dengan karyawan industri untuk saling bertukar pikiran dan memperluas pengetahuan terkait industri bisnis.
                          </div>
                      </div>
                  </div>
                  <div class="accordion-item">
                      <div class="accordion-item-header-benefit">
                          Pengalaman Kerja
                      </div>
                      <div class="accordion-item-body">
                          <div class="accordion-item-body-content">
                          Pengalaman kerja di Industri tentunya juga menjadi salah satu benefit dan keuntungan peserta magang ketika mengikuti Program Magang Kelas Industri.
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-4   mt-3 mb-4 mt-lg-0 mb-lg-0 align-self-center d-lg-block">
              <img src="assets/images/userpremium/illustration/vect_smart_object.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </section>

      <section class="internship-field-competencies pt-5" style="padding-bottom: 5rem;">
        <div class="container text-md-center">
          <h2 class="main-heading mb-2">Pilih Bidang dan Kompetensimu</h2>
          <p class="text-muted" style="margin-bottom: 7rem">
            Berikut adalah beberapa bidang dan kompetensi jurusan untuk program magang
          </p>
          <div class="row justify-content-center align-items-stretch text-left mb-3 mb-md-2">
            <div class="col-6 col-sm-3 col-lg-3 pb-4 mt-0 mt-lg-0 mb-lg-0">
              <div
                class="competency-card h-100 shadow-sm border-0 hover-shadow px-2"
              >
                <div class="competency-card-body px-1 py-2 text-center">
                  <img
                    src="../../assets/icons/tjkt-icon.png"
                    alt=""
                    class="img-fluid mb-3"
                  />
                  <p class="fw-norml text-muted">
                    Teknik Jaringan Komputer dan Telekomunikasi (TJKT)
                  </p>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-3 col-lg-3 pb-4 mt-0 mt-lg-0 mb-lg-0">
              <div
                class="competency-card h-100 shadow-sm border-0 hover-shadow px-2"
              >
                <div class="competency-card-body px-1 py-2 text-center">
                  <img
                    src="../../assets/icons/titl-icon.png"
                    alt=""
                    class="img-fluid mb-3"
                  />
                  <p class="fw-norml text-muted">
                    Teknik Instalasi Tenaga Listrik <br />(TITL)
                  </p>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-3 col-lg-3 pb-4 mt-0 mt-lg-0 mb-lg-0">
              <div
                class="competency-card h-100 shadow-sm border-0 hover-shadow px-2"
              >
                <div class="competency-card-body px-1 py-2 text-`center">
                  <img
                    src="../../assets/icons/rpl-icon.png"
                    alt=""
                    class="img-fluid mb-3"
                  />
                  <p class="fw-norml text-muted">
                    Rekayasa Perangkat Lunak<br />(RPL)
                  </p>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-3 col-lg-3 pb-4 mt-0 mt-lg-0 mb-lg-0">
              <div
                class="competency-card h-100 shadow-sm border-0 hover-shadow px-2"
              >
                <div class="competency-card-body px-1 py-2 text-center">
                  <img
                    src="../../assets/icons/dkv-icon.png"
                    alt=""
                    class="img-fluid mb-3"
                  />
                  <p class="fw-norml text-muted">
                    Desain Komunikasi Visual <br />(DKV)
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="pendaftaran" class="title-registration">
        <div class="container">
          <div class="registration-content row">
            <div
              class="content-text col-12 col-md-6 mt-3 align-self-center text-lg-start"
            >
              <h2 class="main-heading text-lg-left fw-normal">
                Tertarik Bergabung ke Program
                <br class="d-none d-lg-block" /><span class="fw-semibold"
                  >Program Magang Kelas Industri ?</span
                >
              </h2>
              <p class="text-muted text-lg-left fs-14">
                Tekan tombol dibawah untuk mengakses dan melihat daftar lowongan magang yang tersedia
              </p>
              <a class="btn" href="internVacancy"
                >Lihat Lowongan </a
              >
            </div>
            <div class="col-12 col-md-6 mt-3 align-self-right text-lg-end">
              <img src="assets/images/userpremium/illustration/officeman.png" alt="" />
            </div>
          </div>
        </div>
      </section>

      <!--Main Content Section End -->
@endsection

