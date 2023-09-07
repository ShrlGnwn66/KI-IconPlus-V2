// Accordion Scripts For FAQ
const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

accordionItemHeaders.forEach(accordionItemHeader => {
    accordionItemHeader.addEventListener("click", event => {
    
        // Uncomment in case you only want to allow for the display of only one collapsed item at a time!
        
        const currentlyActiveAccordionItemHeader = document.querySelector(".accordion-item-header.active");
        if(currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader!==accordionItemHeader) {
            currentlyActiveAccordionItemHeader.classList.toggle("active");
            currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
        }

        accordionItemHeader.classList.toggle("active");
        const accordionItemBody = accordionItemHeader.nextElementSibling;
        if(accordionItemHeader.classList.contains("active")) {
            accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
        }
        else {
            accordionItemBody.style.maxHeight = 0;
        }
    
    });
});

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
