(function ($) {

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

  /* --------------------------------------------------
    スクロールで処理
  -------------------------------------------------- */
  const $aadclass = 'is-fixed';
  // header
  /*
  const $hideClass = 'is-hide';
  const $AppearGM = $('body, .header');
  const $AppearGMTiming = $('.sec:first-of-type').offset().top;
  $(window).on('load scroll', function () {
    if ($(this).scrollTop() > $AppearGMTiming && $AppearGM.hasClass($aadclass) == false) {
      $AppearGM.removeClass($hideClass);
      $AppearGM.addClass($aadclass);
    } else if ($(this).scrollTop() > 0 && $(this).scrollTop() < $AppearGMTiming && $AppearGM.hasClass($hideClass) == false) {
      $AppearGM.addClass($hideClass);
      $AppearGM.removeClass($aadclass);
    } else if ($(this).scrollTop() == 0) {
      $AppearGM.removeClass($hideClass).removeClass($aadclass);
    }
  });
  */

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
  const mediaquerynum = '1023px';
  $(window).on('resize', function () {
    if (window.matchMedia( "(min-width: " + mediaquerynum + ")" ).matches) {
      if (body.hasClass(classname)) {
        body.removeClass(classname);
        header.removeClass(classname);
        menuWrap.removeClass(classname);
        BtnOpen.removeClass(classname);
      }
    }
  });
  BtnOpen.on('tap click', function () {
    if (window.matchMedia( "(max-width: " + mediaquerynum + ")" ).matches) {
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
    if (window.matchMedia( "(max-width: " + mediaquerynum + ")" ).matches) {
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
    if (window.matchMedia("(max-width: " + mediaquerynum + ")").matches) {
      $(this).toggleClass(classname);
    }
  });
  $(subMenuTgl).on('mouseover', function () {
    if (window.matchMedia("(min-width: " + mediaquerynum + ")").matches) {
      $(this).addClass(classname);
    }
  });
  $(subMenuTgl).on('mouseout', function () {
    if (window.matchMedia("(min-width: " + mediaquerynum + ")").matches) {
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