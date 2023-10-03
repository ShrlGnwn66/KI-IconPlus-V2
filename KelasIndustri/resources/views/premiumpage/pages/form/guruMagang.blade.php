@extends('premiumpage.layouts')
@section('home')
<!-- main content section start -->
<section class="form" style="height:100vh">
    <div class="container" >
      <div class="title text-center mb-4">Data diri Peserta Guru Magang</div>
      <div class="content">
        <form method="POST" action="/guruMagang" enctype="multipart/form-data">
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
                  value="{{ auth()->user()->name }}"
                />
              </div>

              <div class="input-box">
                <span class="details">Nama Peserta</span>
                <input type="text" placeholder="Masukkan Nama"
                name="participant_name" required />
              </div>

              <div class="input-box">
                <span class="details">NIP</span>
                <input
                  type="text"
                  id="nip"
                  name="nip"
                  {{-- pattern="[0-9]" --}}
                  {{-- inputmode="numeric" --}}
                  placeholder="Masukkan NIP"
                  {{-- title="NIP harus terdiri dari 18 angka" --}}
                  required
                />
              </div>

              <span class="details">Jenis Kelamin</span>
              <div class="select-box">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="gender"
                    id="flexRadioDefault1"
                    value="1"
                  />
                  <label class="form-check-label" for="flexRadioDefault1">
                    Laki-Laki
                  </label>
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="gender"
                    id="flexRadioDefault2"
                    value="0"
                  />
                  <label class="form-check-label" for="flexRadioDefault2">
                    Perempuan
                  </label>
                </div>
              </div>

              <div class="input-box">
                <span class="details">Jurusan</span>
                <select
                  class="form-select form-select-lg mb-3"
                  aria-label="Large select example"
                  required
                  name="department"
                >
                  <option selected disabled>Pilih Jurusan</option>
                  <option value="DKV">DKV (Desain Komunikasi Visual)</option>
                  <option value="RPL">RPL (Rekayasa Perangkat Lunak)</option>
                  <option value="TITL">TITL (Teknik Instalasi Tenaga Listrik)</option>
                  <option value="TJKT">TJKT (Teknik Jaringan Komputer & Telekomunikasi)</option>
                </select>
              </div>
            </div>

            <!-- Column Kanan -->
            <div class="right-column">
              <div class="input-box">
                <span class="details">Periode Magang</span>
                <div class="custom-periode">
                  <input
                    type="date"
                    id="tanggal-mulai"
                    name="start_intern_period"
                    required
                  />
                  <span class="ms-2 me-2">s/d</span>
                  <input
                    type="date"
                    id="tanggal-selesai"
                    name="end_intern_period"
                    required
                  />
                </div>
                <div
                  id="tanggal-error"
                  class="error-message"
                  style="color: red"
                ></div>
              </div>

              <div class="input-box">
                <span class="details">Guru Penanggung Jawab</span>
                <input
                  type="text"
                  placeholder="Masukkan Nama Guru"
                  required
                  name="responsible_teacher"
                />
              </div>

              <div class="input-box">
                <span class="details">Kontak Penanggung Jawab</span>
                <input
                  type="tel"
                  id="phone"
                  name="responsible_contact"
                  pattern="08[0-9]{10}"
                  placeholder="Masukkan Nomor Telepon"
                  title="Telp dimulai dengan 08 dan terdiri dari 12 digit"
                  required
                />
              </div>

              <div class="input-box">
                <span class="details">Surat Permohonan</span>
                <input class="custom-file"
                type="file" id="myfile" required name="apply_letter"/>
              </div>
            </div>

          </div>
          <div class="button d-flex justify-content-end">
            {{-- <a href="../teacher_examiner/ukk_examiner.html" class="">BACK</a> --}}
            <input type="submit" value="SUBMIT" />
            </div>
        </form>
      </div>
    </div>
  </section>
  <!-- main content section end -->
@endsection
