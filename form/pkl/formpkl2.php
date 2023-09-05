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
    <div class="title text-center mb-4">
      Data diri Instansi dan Penanggung Jawab
    </div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <!-- Column Kiri -->
          <div class="left-column">
            <div class="input-box">
              <span class="details">Nama Instansi</span>
              <div id="nama-instansi-error" class="error-message" style="color: red"></div>
              <input type="text" id="nama-instansi" name="nama-instansi" placeholder="Masukkan Nama Instansi" required maxlength="75" autofocus />
            </div>

            <div class="input-box">
              <span class="details">Penempatan</span>
              <select class="form-select form-select-lg mb-3" aria-label="Large select example" required>
                <option selected disabled>Pilih Tempat Penempatan</option>
                <option value="1">A</option>
                <option value="2">B</option>
                <option value="3">C</option>
                <option value="4">D</option>
              </select>
            </div>

            <div class="input-box">
              <span class="details">Periode PKL</span>
              <div class="custom-periode">
                <input type="date" id="tanggal-mulai" name="tanggal-mulai" required />
                <span class="ms-2 me-2">s/d</span>
                <input type="date" id="tanggal-selesai" name="tanggal-selesai" required />
              </div>
              <div id="tanggal-error" class="error-message" style="color: red"></div>
            </div>
          </div>

          <!-- Column Kanan -->
          <div class="right-column">
            <div class="input-box">
              <span class="details">Guru Penanggung Jawab</span>
              <input type="text" placeholder="Masukkan Nama Guru" required />
            </div>

            <div class="input-box">
              <span class="details">Kontak Penanggung Jawab</span>
              <input type="tel" id="phone" name="phone" pattern="08[0-9]{10}" placeholder="Masukkan Nomor Telepon" title="Telp dimulai dengan 08 dan terdiri dari 12 digit" required />
            </div>

            <div class="input-box">
              <span class="details">Surat Permohonan</span>
              <input class="custom-file" type="file" id="myfile" required />
            </div>
          </div>
        </div>

        <div class="button d-flex justify-content-end">
          <a href="formpkl.php" class="">BACK</a>
          <input type="submit" value="SUBMIT" />
        </div>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="../script.js"></script>
</body>

</html>