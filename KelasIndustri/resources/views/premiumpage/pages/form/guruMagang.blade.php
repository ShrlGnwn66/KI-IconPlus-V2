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
                                <select class="form-select form-select-lg mb-3" aria-label="Large select example" required
                                    name="department">
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
                                <span class="details">NIP</span>
                                <input type="text" id="nip" name="nip" placeholder="Masukkan NIP"
                                    title="NIP harus terdiri dari deretan angka" required />
                            </div>
                            <button type="submit" class="btn btn-danger me-3" style="width: 120px;" name="reset"
                                formnovalidate>Reset</button>
                            <button type="submit" class="btn btn-primary" style="width: 120px;">Add</button>
                        </div>
                    </div>
                    <!-- Tabel -->
                    <table class="table table-striped mt-5 text-center mb-5" id="tabelData">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama </th>
                            <th scope="col">NIS/NIM </th>
                            <th scope="col">Jenis Kelamin </th>
                            <th scope="col">Jurusan </th>
                        </tr>
                        @if (session('data_preview'))
                            @php $nomorUrut = 1; @endphp
                            @foreach (session('data_preview') as $data)
                                <tr>
                                    <td>{{ $nomorUrut }}</td>
                                    <td>{{ $data['participant_name'] }}</td>
                                    <td>{{ $data['nip'] }}</td>
                                    <td>{{ $data['gender'] == '1' ? 'Laki-Laki' : 'Perempuan' }}</td>
                                    <td>{{ $data['department'] }}</td>
                                </tr>
                                @php $nomorUrut++; @endphp
                            @endforeach
                        @endif
                    </table>
                    <!-- Tabel end -->

                    <div class="button d-flex justify-content-end">
                        <a href="guruMagang2" class="">NEXT</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- main content section end -->
@endsection
