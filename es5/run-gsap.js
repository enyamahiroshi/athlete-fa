(function ($) {

/* --------------------------------------------------
  GSAP
  https://qiita.com/k_watanabe_51/items/0d21d6560c10163a130f
-------------------------------------------------- */

let mm = gsap.matchMedia();

  //GSAPのレスポンシブ対応(https://enishida-web.com/archives/171)
  mm.add("(min-width: 768px)", () => {

    gsap.registerPlugin(ScrollTrigger);
    const wrapper = document.querySelector('.horizon-slider-trigger');
    const container = document.querySelector('.horizon-slider__container__inner');

    gsap.to(container, {
      x: () => -(container.clientWidth - wrapper.clientWidth) + 'px',
      ease: 'none',
      scrollTrigger: {
        trigger: wrapper,
        start: 'top top',
        end: () => {
          if (container.clientWidth > wrapper.clientWidth) {
            return '+=' + (container.clientWidth - wrapper.clientWidth + 4000);
          } else {
            return '+=' + 0;
          }
        },
        pin: true,
        anticipatePin: 1,
        scrub: 0,
        invalidateOnRefresh: true,
        // markers: true, // マーカー表示
        // toggleClass: {targets: ".sec-intro-products-info-2", className: "is-enter"},
        // onEnter: () => {
        //   wrapper.classList.add('is-enter');
        // },
        // onLeave: () => { //スクロール方向が正で、スクロール位置がendを通り過ぎたときのコールバック関数を設定できます。
        //   wrapper.classList.remove('is-enter');
        // },
        // onLeaveBack: () => { //スクロール方向が負で、スクロール位置がstartを通り過ぎたときのコールバック関数を設定できます。
        //   wrapper.classList.remove('is-enter');
        // },
        // onEnterBack: () => { //スクロール方向が負で、スクロール位置がendを通り過ぎたときのコールバック関数を設定できます。
        //   wrapper.classList.add('is-enter');
        // },
      }
    });

    window.addEventListener('resize', () => {
      ScrollTrigger.refresh();
    });


  });

})(jQuery);