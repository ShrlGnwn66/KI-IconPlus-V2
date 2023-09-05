document.addEventListener("DOMContentLoaded", function () {
  const bottomNavbar = document.querySelector(".custom_nav-menu");
  const topNavbarHeight = document.querySelector(".custom_nav-one").clientHeight;

  window.addEventListener("scroll", function () {
      if (window.scrollY > topNavbarHeight) {
          bottomNavbar.classList.add("fixed");
      } else {
          bottomNavbar.classList.remove("fixed");
      }
  });
});

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


// Accordion Scripts
const accordionContent = document.querySelectorAll(".job-item");

accordionContent.forEach((item, index) => {
  let header = item.querySelector("header");
  header.addEventListener("click", () =>{
    item.classList.toggle("open");;

    let description = item.querySelector(".description");
    if(item.classList.contains("open")) {
      description.style.height = `${description.scrollHeight}px`;
      item.querySelector("a").classList.replace("Lihat detail >>", "Tutup detail <<");
    } else {
      description.style.height = "0px";
      item.querySelector("a").classList.replace("Tutup detail <<", "Lihat detail >>");
    }
    removeOpen(index);
  })
})

function removeOpen(index1){
  accordionContent.forEach((item2, index2) => {
    if(index1 != index2){
        item2.classList.remove("open");

        let des = item2.querySelector(".description");
        des.style.height = "0px";
        item2.querySelector("a").classList.replace("Tutup detail <<", "Lihat detail >>");
    }
  })
}