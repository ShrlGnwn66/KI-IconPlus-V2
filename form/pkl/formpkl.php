<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <title>Form Pendaftaran PKL | KI</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
  <link rel="stylesheet" href="../style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <div class="container">
    <div class="title text-center mb-4">Data diri Peserta PKL</div>
    <div class="content">
      <form action="#">
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
                <input class="form-check-input" type="radio" name="jenis-kelamin" id="laki-laki" />
                <label class="form-check-label" for="laki-laki">
                  Laki-Laki
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis-kelamin" id="perempuan" />
                <label class="form-check-label" for="perempuan">
                  Perempuan
                </label>
              </div>
            </div>

            <div class="input-box">
              <span class="details">Jurusan</span>
              <select class="form-select form-select-lg mb-3" name="jurusan" id="jurusan" aria-label="Large select example" required>
                <option selected disabled>Pilih Jurusan</option>
                <option value="1">DKV</option>
                <option value="2">RPL</option>
                <option value="3">TITL</option>
                <option value="4">TJKT</option>
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
            <button type="button" class="btn btn-danger me-3" style="width: 120px;" onclick="resetData()">Reset</button>
            <button type="button" class="btn btn-primary" style="width: 120px;" onclick="tampilData()">Add</button>
          </div>
        </div>

        <!-- Tabel -->
        <table class="table table-striped mt-5 text-center" id="tabelData">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">NIS/NIM</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Jurusan</th>
          </tr>
        </table>
        <!-- Tabel end -->

        <div class="button d-flex justify-content-end">
          <a href="formpkl2.php" class="">NEXT</a>
        </div>
      </form>
    </div>
  </div>


  <script>
    function resetData() {
      location.reload()
      localStorage.clear()
    }

    function simpanDataTabel() {
      var tabel = document.getElementById("tabelData");
      localStorage.setItem("dataTabel", tabel.innerHTML);
    }

    function muatDataTabel() {
      var tabel = document.getElementById("tabelData");
      var dataTabel = localStorage.getItem("dataTabel");
      if (dataTabel) {
        tabel.innerHTML = dataTabel;
      }
    }

    window.addEventListener("load", muatDataTabel);

    function tampilData() {
      var nama = $("#nama").val();
      var nisNim = $("#nis-nim").val();
      var jenisKelamin = $("input[name='jenis-kelamin']:checked")
        .next("label")
        .text();
      var jurusan = $("#jurusan option:selected").text();

      var nomor = localStorage.getItem("nomor");
      if (nomor === null) {
        nomor = 1;
      } else {
        nomor++;
      }


      if (nama && nisNim && jenisKelamin && jurusan) {
        var newRow =
          "<tr><td>" +
          nomor +
          "</td><td>" +
          nama +
          "</td><td>" +
          nisNim +
          "</td><td>" +
          jenisKelamin +
          "</td><td>" +
          jurusan +
          "</td></tr>";
        $("#tabelData tbody").append(newRow);



        // Bersihkan nilai input setelah dimasukkan ke dalam tabel
        $("#nama").val("");
        $("#nis-nim").val("");
        $("input[name ='jenis-kelamin']").prop("checked", false);
        $("#jurusan").val("");
        localStorage.setItem("nomor", nomor);
        simpanDataTabel();
      } else {
        alert("Semua data harus di isi terlebih dahulu");
      }
    }
  </script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>