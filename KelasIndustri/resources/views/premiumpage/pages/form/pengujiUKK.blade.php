@extends('premiumpage.layouts')
@section('home')
<!-- main content section start -->
<section class="form">
    <div class="container">
        <div class="title text-center mb-4">Form Pendampingan UJI UKK</div>
        <div class="content">
        <form method="POST" enctype="multipart/form-data" action="/pengujiUKK">
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
                    {{-- disabled --}}
                />
                </div>

                <div class="input-box">
                <span class="details">Materi</span>
                <input type="text" required name="subject_exam" id="" placeholder="Masukkan Materi Ujian">
                </div>

                <div class="input-box">
                <span class="details">Pelaksanaan UKK</span>
                <input
                    type="date"
                    id="tanggal-ukk"
                    name="exam_date"
                    required
                />
                <div
                    id="tanggal-error"
                    class="error-message"
                    style="color: red"
                ></div>
                </div>

                <div class="input-box">
                <span class="details">Waktu Pelaksanaan</span>
                <input type="time" required name="exam_time" />
                </div>
            </div>

            <!-- Column Kanan -->
            <div class="right-column">
                <div class="input-box">
                <span class="details">Nama Penanggung Jawab</span>
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
                    maxlength="12"
                    title="Telp dimulai dengan 08 dan terdiri dari 12 digit"
                    required
                />
                </div>

                <div class="input-box">
                <span class="details">Surat Permohonan</span>
                <input class="custom-file" type="file" id="myfile" name="apply_letter" required />
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
