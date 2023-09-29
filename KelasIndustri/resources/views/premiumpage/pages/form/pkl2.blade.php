@extends('premiumpage.layouts')
@section('home')
    <!-- main content section start -->
  <section class="form">
    <div class="container">
      <div class="title text-center mb-4 pb-4">
        Data diri Instansi dan Penanggung Jawab
      </div>
      <div class="content">
        <form action="add" method="POST">
        @csrf
          <div class="user-details">
            <!-- Column Kiri -->
            <div class="left-column">
              <div class="input-box">
                <span class="details">Nama Instansi</span>
                <div id="nama-instansi-error" class="error-message" style="color: red"></div>
                <input type="text" id="nama-instansi" name="agency_name" placeholder="Masukkan Nama Instansi" required maxlength="75" autofocus />
              </div>

              <div class="input-box">
                <span class="details">Penempatan</span>
                <select class="form-select form-select-lg mb-3" name="placement" aria-label="Large select example" required>
                  <option selected disabled>Pilih Penempatan</option>
                  <option value="1">A</option>
                  <option value="2">B</option>
                  <option value="3">C</option>
                  <option value="4">D</option>
                </select>
              </div>

              <div class="input-box">
                <span class="details">Periode PKL</span>
                <div class="custom-periode">
                  <input type="date" id="tanggal-mulai" name="start_intern_period" required />
                  <span class="ms-2 me-2">s/d</span>
                  <input type="date" id="tanggal-selesai" name="end_intern_period" required />
                </div>
                <div id="tanggal-error" class="error-message" style="color: red"></div>
              </div>
            </div>

            <!-- Column Kanan -->
            <div class="right-column">
              <div class="input-box">
                <span class="details">Guru Penanggung Jawab</span>
                <input type="text" placeholder="Masukkan Nama Guru" name="responsible_teacher" required />
              </div>

              <div class="input-box">
                <span class="details">Kontak Penanggung Jawab</span>
                <input type="tel" id="phone" name="responsible_contact" pattern="08[0-9]{10}" placeholder="Masukkan Nomor Telepon" title="Telp dimulai dengan 08 dan terdiri dari 12 digit" required />
              </div>

              <div class="input-box">
                <span class="details">Surat Permohonan</span>
                <input class="custom-file" type="file" id="myfile" name="apply_letter" required />
              </div>
            </div>
          </div>

          <div class="button d-flex justify-content-end mt-5 mb-5">
            <a href="pkl" class="">BACK</a>

            <input type="submit" value="SUBMIT" />
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- main content section end -->
@endsection
