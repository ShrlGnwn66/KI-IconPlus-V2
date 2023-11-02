@extends('premiumpage.layouts')
@section('home')
    <!-- main content section start -->
    <section class="form" style="height:100vh">
        <div class="container">
            <div class="title text-center mb-4">Data diri Peserta Guru Magang</div>
            <div class="content">
                <form method="POST" action="/guruMagang" enctype="multipart/form-data">
                    @csrf
                    <div class="user-details">
                        <!-- Column Kiri -->
                        <div class="left-column">
                            <div class="input-box">
                                <span class="details">Nama Peserta</span>
                                <input type="text" placeholder="Masukkan Nama" name="participant_name" required
                                    autofocus />
                            </div>

                            <span class="details">Jenis Kelamin</span>
                            <div class="select-box">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1"
                                        value="1" />
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Laki-Laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2"
                                        value="0" />
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Perempuan
                                    </label>
                                </div>
                            </div>

                            <div class="input-box">
                                <span class="details">Jurusan</span>
                                <input type="text" name="department" id="jurusan" placeholder="Masukkan Jurusan"
                                    required />
                            </div>
                        </div>

                        <!-- Column Kanan -->
                        <div class="right-column">
                            <div class="input-box">
                                <span class="details">NIP</span>
                                <input type="text" id="nip" name="nip" placeholder="Masukkan NIP"
                                    title="NIP harus terdiri dari deretan angka" required />
                            </div>

                            <div class="input-box">
                                <span class="details">Kontak Peserta</span>
                                <input type="tel" id="phone" name="participant_contact" pattern="08[0-9]{10}"
                                    placeholder="Masukkan Nomor Telepon"
                                    title="Telp dimulai dengan 08 dan terdiri dari 12 digit" required />
                            </div>

                            <div class="button-pkl pt-3">
                                <button type="submit" class="btn btn-primary" style="width: 120px;">Add</button>
                            </div>
                        </div>
                    </div>
                    <!-- Tabel -->
                    <table class="table table-striped mt-5 text-center mb-5" id="tabelData">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama </th>
                            <th scope="col">NIP</th>
                            <th scope="col">Kontak</th>
                            <th scope="col">Jenis Kelamin </th>
                            <th scope="col">Jurusan </th>
                            <th scope="col"></th>
                        </tr>
                        @if (session('data_preview'))
                            @php $nomorUrut = 1; @endphp
                            @foreach (session('data_preview') as $data)
                                <tr>
                                    <td>{{ $nomorUrut }}</td>
                                    <td>{{ $data['participant_name'] }}</td>
                                    <td>{{ $data['nip'] }}</td>
                                    <td>{{ $data['participant_contact'] }}</td>
                                    <td>{{ $data['gender'] == '1' ? 'Laki-Laki' : 'Perempuan' }}</td>
                                    <td>{{ $data['department'] }}</td>
                                    <td><button class="border border-0"><i class="bi bi-trash"
                                                style="color: red"></i></button>
                                    </td>
                                </tr>
                                @php $nomorUrut++; @endphp
                            @endforeach
                        @endif
                    </table>
                    <!-- Tabel end -->

                    <div class="button d-flex justify-content-end">
                        <button type="submit" class="btn btn-danger me-3 fw-medium" style="width: 140px;" name="reset"
                            formnovalidate>Reset</button>
                        <a href="guruMagang2" class="">NEXT</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- main content section end -->
@endsection
