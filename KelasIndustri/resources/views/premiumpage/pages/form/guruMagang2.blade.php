@extends('premiumpage.layouts')
@section('home')
    <!-- main content section start -->
    <section class="form" style="height:100vh">
        <div class="container">
            <div class="title text-center mb-4 pb-4">Data diri Instansi dan Penanggung Jawab</div>
            <div class="content">
                <form method="POST" action="/guruMagang2/form-kedua" enctype="multipart/form-data">
                    @csrf
                    <div class="user-details">
                        <!-- Column Kiri -->
                        <div class="left-column">
                            <div class="input-box">
                                <span class="details">Nama Instansi</span>
                                <div id="nama-instansi-error" class="error-message" style="color: red"></div>
                                <input type="text" id="nama-instansi" name="agency_name"
                                    placeholder="Masukkan Nama Instansi" required maxlength="75" autofocus
                                    value="{{ auth()->user()->name }}" />
                            </div>

                            <div class="input-box">
                                <span class="details">Penempatan</span>
                                <select class="form-select form-select-lg mb-3" aria-label="Large select example" required
                                    name="placement">
                                    <option selected disabled>Pilih Penempatan</option>
                                    <option value="Semarang">SBU Semarang</option>
                                    <option value="Yogyakarta">KP Yogyakarta</option>
                                    <option value="Purwokerto">KP Purwokerto</option>
                                </select>
                            </div>

                            <div class="input-box">
                                <span class="details">Periode Magang</span>
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
                                <input type="text" placeholder="Masukkan Nama Guru" required
                                    name="responsible_teacher" />
                            </div>

                            <div class="input-box">
                                <span class="details">Kontak Penanggung Jawab</span>
                                <input type="tel" id="phone" name="responsible_contact" pattern="08[0-9]{10}"
                                    placeholder="Masukkan Nomor Telepon"
                                    title="Telp dimulai dengan 08 dan terdiri dari 12 digit" required />
                            </div>

                            <div class="input-box">
                                <span class="details">Surat Permohonan</span>
                                <input class="custom-file" type="file" id="myfile" required name="apply_letter" />
                            </div>
                        </div>

                    </div>
                    <div class="button d-flex justify-content-end">
                        <a href="guruMagang">BACK</a>
                        <input type="submit" value="SUBMIT" />
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- main content section end -->
@endsection
