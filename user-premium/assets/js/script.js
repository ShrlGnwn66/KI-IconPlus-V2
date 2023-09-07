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

// // show details
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
