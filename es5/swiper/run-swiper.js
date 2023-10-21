//products slider
const swiper1 = new Swiper(".our-products-slider", {
  direction: "vertical",
  autoHeight: true,
  slidesPerView: 1,
  effect: 'fade',
  mousewheel: true,
  speed: 400,
  mousewheel: {
    releaseOnEdges: false,
    forceToAxis: true,
    thresholdDelta: 400,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  on: {
    slideChange: function () {
      swiper1.params.mousewheel.releaseOnEdges = false;
    },
    reachBeginning: function() {
      console.log('first!!!');
      setTimeout(function () {
        swiper1.params.mousewheel.releaseOnEdges = true;
      }, 800);
    },
    reachEnd: function() {
      setTimeout(function () {
        swiper1.params.mousewheel.releaseOnEdges = true;
      }, 800);
    }
  },
});