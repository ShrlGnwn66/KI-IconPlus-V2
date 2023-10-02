// scroll navbar
$(window).scroll(function () {
  if ($(window).scrollTop()) {
    $("nav").addClass("white");
  } else {
    $("nav").removeClass("white");
  }
});

//active nav link
let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('.nav-link');

let currentSection = 'home';

// Function to update active link and handle hover effect
function updateActiveLink() {
  sections.forEach(section => {
    if (window.scrollY >= (section.offsetTop - 200)) {
      currentSection = section.id;
    }
  });

  navLinks.forEach(navLink => {
    if (navLink.getAttribute('href').includes(currentSection)) {
      navLink.parentElement.classList.add('active');
    } else {
      navLink.parentElement.classList.remove('active');
    }
  });
}

// Set initial active section on page load
window.addEventListener('load', () => {
  updateActiveLink(); // Call the function to set active link on page load
});

// Attach event listener to scroll and update active link
window.addEventListener('scroll', () => {
  updateActiveLink(); // Call the function to update active link during scroll
});



//count
const counters = document.querySelectorAll(".count");
const options = {
  root: null, // Default: viewport
  rootMargin: "0px",
  threshold: 0.5, // Jika setengah atau lebih elemen masuk ke dalam viewport, observer akan dimulai
};
const counter = document.querySelectorAll(".count");
const speed = 55;
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      const target = entry.target;
      const targetCount = Number(target.getAttribute("data-target"));

      let currentCount = 0;
      const updateCounter = () => {
        if (currentCount < targetCount) {
          const increment = Math.ceil(targetCount / speed);
          currentCount += increment;
          target.innerText = currentCount;
          setTimeout(updateCounter, 70);
        } else {
          target.innerText = targetCount;
        }
      };
      updateCounter();
      observer.unobserve(target);
    }
  });
}, options);
counters.forEach((counter) => {
  observer.observe(counter);
});
//end count

// Gallery Items Filter
// const filterButtons = document.querySelector("#galery-btns").children;
// const items = document.querySelector(".galeri-image").children;

// for (let k = 0; k < items.length; k++) {
//   if (items[k].getAttribute("data-id") === "DKV") {
//     items[k].style.display = "block";
//   } else {
//     items[k].style.display = "none";
//   }
// }

// for (let i = 0; i < filterButtons.length; i++) {
//   filterButtons[i].addEventListener("click", function () {
//     for (let j = 0; j < filterButtons.length; j++) {
//       filterButtons[j].classList.remove("active");
//     }
//     this.classList.add("active");
//     const target = this.getAttribute("data-target");

//     for (let k = 0; k < items.length; k++) {
//       items[k].style.display = "none";
//       if (target === items[k].getAttribute("data-id") || target === "All") {
//         items[k].style.display = "block";
//       }
//     }
//   });
// }

let filterItem = document.querySelector(".item-links");
let fileteImages = document.querySelectorAll(".grid-item");

window.addEventListener("load", () => {
  filterItem.addEventListener("click", (selectedItem) => {
    if (selectedItem.target.classList.contains("item-link")) {
      document.querySelector(".menu-active").classList.remove("menu-active");
      selectedItem.target.classList.add("menu-active");
      let filterName = selectedItem.target.getAttribute("data-name");
      fileteImages.forEach((image) => {
        let filterImages = image.getAttribute("data-name");
        if (filterImages == filterName || filterName == "all") {
          image.style.display = "grid";
        } else {
          image.style.display = "none";
        }
      });
    }
  });
});


//scroll top
let custom_scroll_top = document.querySelector(".custom_scroll-top");

window.addEventListener("scroll", function() {
  if (window.scrollY >= 200) {
    custom_scroll_top.classList.add('show');
  } else {
    custom_scroll_top.classList.remove('show');
  }
});

custom_scroll_top.addEventListener("click", function() {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});

// news
let swiperCards = new Swiper(".card__content", {
    loop: true,
    spaceBetween: 32,
    grabCursor: true,

    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
      600: {
        slidesPerView: 2,
      },
      968: {
        slidesPerView: 3,
      },
    },
  });
