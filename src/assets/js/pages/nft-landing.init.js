/*
Template Name: Velzon - Admin & Dashboard Template
Author: Themesbrand
Website: https://Themesbrand.com/
Contact: Themesbrand@gmail.com
File: nft-landing init js
*/

//  Window scroll sticky class add
function windowScroll() {
    var navbar = document.getElementById("navbar");
    if (navbar) {
        if (document.body.scrollTop >= 50 || document.documentElement.scrollTop >= 50) {
            navbar.classList.add("is-sticky");
        } else {
            navbar.classList.remove("is-sticky");
        }
    }
}

window.addEventListener('scroll', function (ev) {
    ev.preventDefault();
    windowScroll();
});

// filter btn
var filterBtns = document.querySelectorAll(".filter-btns .nav-link");
var productItems = document.querySelectorAll(".product-item");

Array.from(filterBtns).forEach(function (button) {
  button.addEventListener("click", function (e) {
    e.preventDefault();

    for (var i = 0; i < filterBtns.length; i++) {
      filterBtns[i].classList.remove("active");
    }
    this.classList.add("active");

    var filter = e.target.dataset.filter;

    Array.from(productItems).forEach(function (item) {
      if (filter === "all") {
        item.style.display = "block";
      } else {
        if (item.classList.contains(filter)) {
          item.style.display = "block";
        } else {
          item.style.display = "none";
        }
      }
    });
  });
});

//collection categories
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 30,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});