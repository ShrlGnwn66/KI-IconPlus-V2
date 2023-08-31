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