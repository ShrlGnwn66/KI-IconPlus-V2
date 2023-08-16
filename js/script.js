$(window).scroll(function () {
  if ($(window).scrollTop()) {
    $("nav").addClass("white");
  } else {
    $("nav").removeClass("white");
  }
});

const counts = document.querySelectorAll(".counter-numbers");
const speed = 97;

counts.forEach((counter) => {
  function upDate() {
    const target = Number(counter.getAttribute("data-count-target"));
    const count = Number(counter.innerText);
    const inc = target / speed;
    if (count < target) {
      counter.innerText = Math.floor(inc + count);
      setTimeout(upDate, 15);
    } else {
      counter.innerText = target;
    }
  }
  upDate();
});
