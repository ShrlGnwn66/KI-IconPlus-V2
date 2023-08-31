// Pesan eror nama instansi
const namaInstansiInput = document.getElementById("nama-instansi");
const namaInstansiError = document.getElementById("nama-instansi-error");

namaInstansiInput.addEventListener("input", function () {
  if (namaInstansiInput.validity.valueMissing) {
    namaInstansiError.textContent = "Nama Instansi tidak boleh kosong";
  } else {
    namaInstansiError.textContent = "";
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
    tanggalError.style.display = "block";
  } else {
    tanggalError.textContent = "";
    tanggalError.style.display = "none";
  }
});