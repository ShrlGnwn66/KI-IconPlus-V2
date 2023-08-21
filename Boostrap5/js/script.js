// scroll navbar
$(window).scroll(function () {
  if ($(window).scrollTop()) {
    $("nav").addClass("white");
  } else {
    $("nav").removeClass("white");
  }
});

//count
const counters = document.querySelectorAll('.count');
const options = {
  root: null, // Default: viewport
  rootMargin: '0px',
  threshold: 0.5 // Jika setengah atau lebih elemen masuk ke dalam viewport, observer akan dimulai
};
const counter = document.querySelectorAll('.count');
const speed = 55;
const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const target = entry.target;
      const targetCount = Number(target.getAttribute('data-target'));
 
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
counters.forEach(counter => {
  observer.observe(counter);
});
//end count
