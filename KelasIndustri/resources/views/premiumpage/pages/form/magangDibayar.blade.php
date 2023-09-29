@extends('premiumpage.layouts')
@section('home')
    <!-- main content section start -->
    <section class="form">
        <div class="container">
          <div class="title text-center mb-4">
            Data diri Peserta Magang Dibayar
          </div>
          <div class="content">
            <form method="POST" enctype="multipart/form-data" action="/magangDibayar">
            @csrf
              <div class="user-details">
                <!-- Column Kiri -->
                <div class="left-column">
                  <div class="input-box">
                    <span class="details">Nama Instansi</span>
                    <div
                      id="nama-instansi-error"
                      class="error-message"
                      style="color: red"
                    ></div>
                    <input
                      type="text"
                      id="nama-instansi"
                      name="agency_name"
                      placeholder="Masukkan Nama Instansi"
                      required
                      maxlength="75"
                      autofocus
                    />
                  </div>

                  <div class="input-box">
                    <span class="details">Nama Peserta</span>
                    <input type="text" name="participant_name"
                    placeholder="Masukkan Nama" required />
                  </div>

                  <div class="input-box">
                    <span class="details">Jurusan</span>
                    <select
                      class="form-select form-select-lg mb-3"
                      aria-label="Large select example"
                      required name="department"
                    >
                      <option selected disabled>Pilih Jurusan</option>
                      <option value="DKV">DKV (Desain Komunikasi Visual)</option>
                      <option value="RPL">RPL (Rekayasa Perangkat Lunak)</option>
                      <option value="TITL">TITL (Teknik Instalasi Tenaga Listrik)</option>
                      <option value="TJKT">TJKT (Teknik Jaringan Komputer & Telekomunikasi)</option>
                    </select>
                  </div>

                  <div class="input-box">
                    <span class="details">Tahun Lulus</span>
                    <input
                      type="number"
                      placeholder="Masukkan Tahun lulus"
                      required name="graduation_year"
                      maxlength="4"
                    />
                  </div>
                </div>

                <!-- Column Kanan -->
                <div class="right-column">
                  <span class="details">Mempunyai Laptop</span>
                  <div class="select-box">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="laptop_device"
                        id="select-laptop1"
                        required
                        value="1"
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        IYA
                      </label>
                    </div>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="laptop_device"
                        id="select-laptop2"
                        value="0"
                      />
                      <label class="form-check-label" for="flexRadioDefault2">
                        TIDAK
                      </label>
                    </div>
                  </div>

                  <span class="details mt-4 pt-3">Mempunyai SIM C</span>
                  <div class="select-box">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="driver_license"
                        id="select-sim1"
                        required
                        value="1"
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        IYA
                      </label>
                    </div>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="driver_license"
                        id="select-sim2"
                        value="0"
                      />
                      <label class="form-check-label" for="flexRadioDefault2">
                        TIDAK
                      </label>
                    </div>
                  </div>

                  <div class="input-box mt-4 pt-1">
                    <span class="details">Surat Permohonan</span>
                    <input class="custom-file" type="file" id="myfile" required name="apply_letter" />
                  </div>
                </div>
              </div>

              <div class="button d-flex justify-content-end">
                {{-- <a href="../internships/paid_intern.html" class="">BACK</a> --}}
                <input type="submit" value="SUBMIT" />
              </div>
            </form>
          </div>
        </div>
      </section>
      <!-- main content section end -->
@endsection

