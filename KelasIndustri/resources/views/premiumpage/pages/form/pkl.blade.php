@extends('premiumpage.layouts')
@section('home')
<section class="form" >
    <div class="container">
        <div class="title text-center mb-4">Data diri Peserta PKL</div>
        <div class="content">
          <form action="/simpandata" method="post">
            @csrf
            <div class="user-details">
              <!-- Column Kiri -->
              <div class="left-column">
                <div class="input-box">
                  <span class="details">Nama Peserta</span>
                  <input type="text" name="nama" id="nama" placeholder="Masukkan Nama" required autofocus />
                </div>

                <span class="details">Jenis Kelamin</span>
                <div class="select-box">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis-kelamin" id="laki-laki" value="laki-laki" />
                    <label class="form-check-label" for="laki-laki">
                      Laki-Laki
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis-kelamin" id="perempuan" value="Perempuan" />
                    <label class="form-check-label" for="perempuan">
                      Perempuan
                    </label>
                  </div>
                </div>

                <div class="input-box">
                  <span class="details">Jurusan</span>
                  <select class="form-select form-select-lg mb-3" name="jurusan" id="jurusan" aria-label="Large select example" required>
                    <option selected disabled>Pilih Jurusan</option>
                    <option value="DKV">DKV</option>
                    <option value="RPL">RPL</option>
                    <option value="TITL">TITL</option>
                    <option value="TJKT">TJKT</option>
                  </select>
                </div>
              </div>

              <!-- Column Kanan -->
              <div class="right-column">
                <div class="input-box">
                  <span class="details">NIS/NIM</span>
                  <div class="custom-periode">
                    <input type="text" id="nis-nim" name="nis-nim" placeholder="Masukkan NIS/NIM" required minlength="6" maxlength="10" />
                    <span class="ms-2 me-2"></span>
                  </div>
                </div>
                <button type="submit" class="btn btn-danger me-3" style="width: 120px;" name="reset" formnovalidate >Reset</button>
                <button type="submit" class="btn btn-primary" style="width: 120px;">Add</button>
              </div>
            </div>

            <!-- Tabel -->
            <table class="table table-striped mt-5 text-center" id="tabelData">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama  </th>
                <th scope="col">NIS/NIM  </th>
                <th scope="col">Jenis Kelamin </th>
                <th scope="col">Jurusan </th>
              </tr>
            </table>
            <!-- Tabel end -->

            <div class="button d-flex justify-content-end">
              <a href=" pkl2" class="">NEXT</a>
            </div>
          </form>
        </div>
    </div>
</section>
@endsection
