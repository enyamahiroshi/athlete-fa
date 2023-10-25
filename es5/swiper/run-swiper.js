//products slider
const swiper1 = new Swiper(".our-products-slider", {
  slidesPerView: 1,
  speed: 400,
  loop: true,
  autoHeight: true,
  mousewheel: {
    releaseOnEdges: false,
    forceToAxis: true,
    thresholdDelta: 400,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});