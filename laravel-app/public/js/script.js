// scroll navbar
$(window).scroll(function () {
  if ($(window).scrollTop()) {
    $("nav").addClass("white");
  } else {
    $("nav").removeClass("white");
  }
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

// for (let i = 0; i < filterButtons.length; i++) {
//   filterButtons[i].addEventListener("click", function () {
//     for (let j = 0; j < filterButtons.length; j++) {
//       filterButtons[j].classList.remove("active");
//     }
//     this.classList.add("active");
//     const target = this.getAttribute("data-target");

//     for (let k = 0; k < items.length; k++) {
//       items[k].style.display = "none";
//       if (target == items[k].getAttribute("data-id")) {
//         items[k].style.display = "block";
//       }

//       if (target === "All") {
//         items[k].style.display = "block";
//       }
//     }
//   });
// }

// Gallery Items Filter
const filterButtons = document.querySelector("#galery-btns").children;
const items = document.querySelector(".galeri-image").children;

for (let k = 0; k < items.length; k++) {
  if (items[k].getAttribute("data-id") === "DKV") {
    items[k].style.display = "block";
  } else {
    items[k].style.display = "none";
  }
}

for (let i = 0; i < filterButtons.length; i++) {
  filterButtons[i].addEventListener("click", function () {
    for (let j = 0; j < filterButtons.length; j++) {
      filterButtons[j].classList.remove("active");
    }
    this.classList.add("active");
    const target = this.getAttribute("data-target");

    for (let k = 0; k < items.length; k++) {
      items[k].style.display = "none";
      if (target === items[k].getAttribute("data-id") || target === "All") {
        items[k].style.display = "block";
      }
    }
  });
}
