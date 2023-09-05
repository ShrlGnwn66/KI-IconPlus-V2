// Pesan eror nama instansi
const namaInstansiInput = document.getElementById("nama-instansi");
const namaInstansiError = document.getElementById("nama-instansi-error");

namaInstansiInput.addEventListener("input", function () {
  if (namaInstansiInput.validity.valueMissing) {
    namaInstansiError.textContent = "Nama Instansi tidak boleh kosong";
  } else {
    namaInstansiError.textContent = console.log("Inputan Sesuai");
  }
});

// Pesan eror Periode Magang
const tanggalMulaiInput = document.getElementById("tanggal-mulai");
const tanggalSelesaiInput = document.getElementById("tanggal-selesai");
const tanggalError = document.getElementById("tanggal-error");

tanggalSelesaiInput.addEventListener("input", function () {
  const tanggalMulai = new Date(tanggalMulaiInput.value);
  const tanggalSelesai = new Date(this.value);

  if (tanggalSelesai < tanggalMulai) {
    tanggalError.textContent = "Tanggal Selesai harus setelah Tanggal Mulai";
  } else {
    tanggalError.textContent = "";
  }
});

// // Tabel
// function resetData() {
//   location.reload();
//   localStorage.clear();
// }

// function simpanDataTabel() {
//   var tabel = document.getElementById("tabelData");
//   localStorage.setItem("dataTabel", tabel.innerHTML);
// }

// function muatDataTabel() {
//   var tabel = document.getElementById("tabelData");
//   var dataTabel = localStorage.getItem("dataTabel");
//   if (dataTabel) {
//     tabel.innerHTML = dataTabel;
//   }
// }

// window.addEventListener("load", muatDataTabel);

// function tampilData() {
//   var nama = $("#nama").val();
//   var nisNim = $("#nis-nim").val();
//   var jenisKelamin = $("input[name='jenis-kelamin']:checked")
//     .next("label")
//     .text();
//   var jurusan = $("#jurusan option:selected").text();

//   var nomor = localStorage.getItem("nomor");
//   if (nomor === null) {
//     nomor = 1;
//   } else {
//     nomor++;
//   }

//   if (nama && nisNim && jenisKelamin && jurusan) {
//     var newRow =
//       "<tr><td>" +
//       nomor +
//       "</td><td>" +
//       nama +
//       "</td><td>" +
//       nisNim +
//       "</td><td>" +
//       jenisKelamin +
//       "</td><td>" +
//       jurusan +
//       "</td></tr>";
//     $("#tabelData tbody").append(newRow);

//     // Bersihkan nilai input setelah dimasukkan ke dalam tabel
//     $("#nama").val("");
//     $("#nis-nim").val("");
//     $("input[name ='jenis-kelamin']").prop("checked", false);
//     $("#jurusan").val("");
//     localStorage.setItem("nomor", nomor);
//     simpanDataTabel();
//   } else {
//     alert("Semua data harus di isi terlebih dahulu");
//   }
// }
