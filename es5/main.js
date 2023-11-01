//Vanilla JS
/* --------------------------------------------------
  GSAP
-------------------------------------------------- */
//https://qiita.com/k_watanabe_51/items/0d21d6560c10163a130f
gsap.registerPlugin(ScrollTrigger);
const wrapper = document.querySelector('.horizon-slider-trigger');
const container = document.querySelector('.horizon-slider__container__inner');

gsap.to(container, {
  x: () => -(container.clientWidth - wrapper.clientWidth) + 'px',
  horizontal: true,
  ease: 'none',
  scrollTrigger: {
    trigger: wrapper,
    start: 'top top',
    end: () => {
      if (container.clientWidth > wrapper.clientWidth) {
        return '+=' + (container.clientWidth - wrapper.clientWidth + 500);
      } else {
        return '+=' + 0;
      }
    },
    pin: true,
    anticipatePin: 1,
    scrub: true,
    invalidateOnRefresh: true,
    anticipatePin: 1,
    toggleClass: {targets: ".sec-intro-products-info-2", className: "is-enter"},
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

/* --------------------------------------------------
  動画読み込み完了後処理
-------------------------------------------------- */
document.addEventListener('DOMContentLoaded', function () {
  const videoWrappers = document.getElementsByClassName('mv__movie');
  for(let i = 0; i < videoWrappers.length; i++) {
      const videoWrapper = videoWrappers[i];
      const video = videoWrapper.getElementsByTagName('video')[0];
      video.addEventListener('canplay', function() {
          videoWrapper.classList.add('is-play');
      }, false);
  }
}, false);

/* --------------------------------------------------
スクロール量によるページ全体のプログレスバー表示
-------------------------------------------------- */
const progressBar = document.querySelector('.progress__bar');
window.addEventListener('scroll', () => {
  const windowYPos = window.pageYOffset;
  const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  const scrolled = (windowYPos / height) * 100;
  progressBar.style.height = scrolled + "%";
});

/* --------------------------------------------------
  マウスストーカー + トップ新卒採用箇所
-------------------------------------------------- */
const stalker = document.getElementById('mouse-stkr');
const scrollingElem = document.scrollingElement || document.documentElement || document.body;
const isActive = 'is-active';
let hovFlag = false;

const firstItem = document.querySelector('.recruit-link-item__image');
window.addEventListener("load", function (e) {
  firstItem.style.opacity = 1;
});

scrollingElem.addEventListener('mousemove', function(e) {
  stalker.style.top  = e.clientY - 110 + 'px';
  stalker.style.left = e.clientX - 80 + 'px';
});

const linkElem = document.querySelectorAll('.mouse-stkr-target');
for (let i = 0; i < linkElem.length; i++) {
  linkElem[i].addEventListener('mouseover', function (e) {
    hovFlag = true;
    stalker.classList.add(isActive);
    this.classList.add(isActive);
  });
  linkElem[i].addEventListener('mouseout', function (e) {
    hovFlag = false;
    stalker.classList.remove(isActive);
    this.classList.remove(isActive);
  });
}


//jQuery
(function ($) {

  /* --------------------------------------------------
    スクロールで処理
  -------------------------------------------------- */
  const mqueryLG = '1023px';
  const $aadclass = 'is-fixed';

  // header
  const $AppearGM = $('.header');
  $(window).on('load resize', function () {
    //ハンバーガーメニュー表示の場合
    if (window.matchMedia("(max-width: " + mqueryLG + ")").matches) {
      const headerH = $_header.height();
      $(window).on('scroll', function () {
        if ($(this).scrollTop() > headerH && $AppearGM.hasClass($aadclass) == false) {
          $AppearGM.addClass($aadclass);
        } else if ($(this).scrollTop() == 0) {
          $AppearGM.removeClass($aadclass);
        }
      });
    } else
    //通常表示の場合
    {
      const $AppearGMTiming = $('.js-flag-first').offset().top;
      const headerH = $_header.height();
      $(window).on('scroll', function () {
        if ($(this).scrollTop() > $AppearGMTiming && $AppearGM.hasClass($aadclass) == false) {
          $AppearGM.addClass($aadclass);
        } else if ($(this).scrollTop() == 0) {
          $AppearGM.removeClass($aadclass);
        }
      });
    }
  });

  // pagetop
  const $pageTop = $('.button-page-top');
  const $pageTopT = '400';
  $(window).on('load scroll', function () {
    if ($(this).scrollTop() > $pageTopT) {
      $pageTop.addClass($aadclass).on('tap click', function () {
        $(this).removeClass($aadclass);
      });
    } else if ($(this).scrollTop() < $pageTopT) {
      $pageTop.removeClass($aadclass);
    }
  });

  /* --------------------------------------------------
    メニュー開閉
  -------------------------------------------------- */
  const body = $('body');
  const menuWrap = $('.global-menu');
  const header = $('.header');
  const BtnOpen = $('.js-tgl-menu');
  const classname = 'is-open';
  const NaviLink = $('.menu a[href]');
  $(window).on('resize', function () {
    if (window.matchMedia( "(min-width: " + mqueryLG + ")" ).matches) {
      if (body.hasClass(classname)) {
        body.removeClass(classname);
        header.removeClass(classname);
        menuWrap.removeClass(classname);
        BtnOpen.removeClass(classname);
      }
    }
  });
  BtnOpen.on('tap click', function () {
    if (window.matchMedia( "(max-width: " + mqueryLG + ")" ).matches) {
      if (body.hasClass(classname)) {
        body.removeClass(classname);
        header.removeClass(classname);
        menuWrap.removeClass(classname);
        BtnOpen.removeClass(classname);
      } else {
        body.addClass(classname);
        header.addClass(classname);
        menuWrap.addClass(classname);
        BtnOpen.addClass(classname);
      }
    }
  });
  NaviLink.on('tap click', function () {
    if (window.matchMedia( "(max-width: " + mqueryLG + ")" ).matches) {
      if (body.hasClass(classname)) {
        body.removeClass(classname);
        header.removeClass(classname);
        menuWrap.removeClass(classname);
        BtnOpen.removeClass(classname);
      } else {
        body.addClass(classname);
        header.addClass(classname);
        menuWrap.addClass(classname);
        BtnOpen.addClass(classname);
      }
    }
  });

  /* --------------------------------------------------
    サブメニュー開閉
  -------------------------------------------------- */
  const subMenuTgl = '.header-navi .menu-item-has-children';
  $(subMenuTgl).on('tap click', function () {
    if (window.matchMedia("(max-width: " + mqueryLG + ")").matches) {
      $(this).toggleClass(classname);
    }
  });
  $(subMenuTgl).on('mouseover', function () {
    if (window.matchMedia("(min-width: " + mqueryLG + ")").matches) {
      $(this).addClass(classname);
    }
  });
  $(subMenuTgl).on('mouseout', function () {
    if (window.matchMedia("(min-width: " + mqueryLG + ")").matches) {
      $(this).removeClass(classname);
    }
  });

  /* --------------------------------------------------
    anchor link
  -------------------------------------------------- */
  const $anchor = 'a[href^="#"]';
  const $_header = $('.header');
  const headerHeight = $_header.height() + 40;
  const speed = 300;

  $($anchor).on('tap click', function() {
    const href= $(this).attr("href");
    const target = $(href == "#" || href == "" ? 'html' : href);
    const position = target.offset().top - headerHeight;
    $("html, body").stop().animate({scrollTop:position}, speed, 'swing');
    return false;
  });
  $(window).on('load', function() {
    if(document.URL.match("#")) {
      const str = location.href ;
      const cut_str = "#";
      const indexB = str.indexOf(cut_str);
      const hrefB = str.slice(indexB);
      const targetB = hrefB;
      const positionB = $(targetB).offset().top - headerHeight;
      $("html, body").stop().animate({scrollTop:positionB}, speed, 'swing');
      return false;
    }
  });

})(jQuery);