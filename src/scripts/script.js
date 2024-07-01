$(document).ready(function () {
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    autoplay: true,
    autoplaySpeed: 1000,
    autoplayTimeout: 2000,
    responsive: {
      0: {
        items: 1,
      },
      800: {
        items: 3,
      },
    },
  });
});

document.getElementById('burger-menu').addEventListener('click', function () {
  const nav = document.querySelector('.nav');
  nav.classList.toggle('active');
});
