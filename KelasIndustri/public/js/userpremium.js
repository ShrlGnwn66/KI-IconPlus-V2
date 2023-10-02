// Accordion Scripts For FAQ
const accordionItemHeaders = document.querySelectorAll(
  ".accordion-item-header"
);

accordionItemHeaders.forEach((accordionItemHeader) => {
  accordionItemHeader.addEventListener("click", (event) => {
    // Uncomment in case you only want to allow for the display of only one collapsed item at a time!

    const currentlyActiveAccordionItemHeader = document.querySelector(
      ".accordion-item-header.active"
    );
    if (
      currentlyActiveAccordionItemHeader &&
      currentlyActiveAccordionItemHeader !== accordionItemHeader
    ) {
      currentlyActiveAccordionItemHeader.classList.toggle("active");
      currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
    }

    accordionItemHeader.classList.toggle("active");
    const accordionItemBody = accordionItemHeader.nextElementSibling;
    if (accordionItemHeader.classList.contains("active")) {
      accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
    } else {
      accordionItemBody.style.maxHeight = 0;
    }
  });
});

// Accordion Scripts For Benefit Magang
const accordionItemHeaderBenefits = document.querySelectorAll(
  ".accordion-item-header-benefit"
);

accordionItemHeaderBenefits.forEach((accordionItemHeaderBenefit) => {
  accordionItemHeaderBenefit.addEventListener("click", (event) => {
    // Uncomment in case you only want to allow for the display of only one collapsed item at a time!

    const currentlyActiveAccordionItemHeaderBenefit = document.querySelector(
      ".accordion-item-header-benefit.active"
    );
    if (
      currentlyActiveAccordionItemHeaderBenefit &&
      currentlyActiveAccordionItemHeaderBenefit !== accordionItemHeaderBenefit
    ) {
      currentlyActiveAccordionItemHeaderBenefit.classList.toggle("active");
      currentlyActiveAccordionItemHeaderBenefit.nextElementSibling.style.maxHeight = 0;
    }

    accordionItemHeaderBenefit.classList.toggle("active");
    const accordionItemBody = accordionItemHeaderBenefit.nextElementSibling;
    if (accordionItemHeaderBenefit.classList.contains("active")) {
      accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
    } else {
      accordionItemBody.style.maxHeight = 0;
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const bottomNavbar = document.querySelector(".custom_nav-menu");
  const topNavbarHeight =
    document.querySelector(".custom_nav-one").clientHeight;

  window.addEventListener("scroll", function () {
    if (window.scrollY > topNavbarHeight) {
      bottomNavbar.classList.add("fixed-top");
    } else {
      bottomNavbar.classList.remove("fixed-top");
    }
  });
});

// show details loker
const linksShowDetails = document.querySelectorAll(".btn-show-details");
const linksShowLess = document.querySelectorAll(".btn-show-less");

linksShowDetails.forEach((linkShowDetails) => {
  linkShowDetails.addEventListener("click", (e) => {
    e.preventDefault();

    const newsItem = linkShowDetails.closest(".job-item");
    const description = newsItem.querySelector(".description");
    const linkShowLess = newsItem.querySelector(".btn-show-less");

    description.style.display = "block";
    linkShowDetails.style.display = "none";
    linkShowLess.style.display = "block";
  });
});

linksShowLess.forEach((linkShowLess) => {
  linkShowLess.addEventListener("click", (e) => {
    e.preventDefault();

    const newsItem = linkShowLess.closest(".job-item");
    const description = newsItem.querySelector(".description");
    const linkShowDetails = newsItem.querySelector(".btn-show-details");

    description.style.display = "none";
    linkShowLess.style.display = "none";
    linkShowDetails.style.display = "block";
  });
});

// Show data in table form pkl
function resetData() {
  location.reload();
  localStorage.clear();
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

  // Close toogler dimana saja
  document.addEventListener("DOMContentLoaded", function () {
    // Ambil elemen menu burger dan navbar-collapse
    var burgerButton = document.querySelector(".navbar-toggler");
    var navbarCollapse = document.querySelector("#navbarSupportedContent");

    // Tambahkan event listener untuk mengatur perilaku menu
    burgerButton.addEventListener("click", function () {
      // Toggle class 'show' pada navbar-collapse untuk menampilkan/sembunyikan menu
      navbarCollapse.classList.toggle("show");
    });

    // Tambahkan event listener untuk menutup menu saat pengguna mengklik di luar menu
    document.addEventListener("click", function (event) {
      // Periksa apakah menu burger sedang terbuka dan apakah klik dilakukan di luar menu
      if (
        navbarCollapse.classList.contains("show") &&
        !navbarCollapse.contains(event.target) &&
        event.target !== burgerButton
      ) {
        // Jika menu terbuka dan klik dilakukan di luar menu atau bukan pada tombol burger, tutup menu
        navbarCollapse.classList.remove("show");
      }
    });
  });