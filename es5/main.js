//Vanilla JS
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
  ページトップが背景要素によって変化
-------------------------------------------------- */
// スクロールイベントを登録
// A 要素を取得
const a = document.querySelector(".button-page-top");
// js-color-change クラスの要素を取得
const jsColorChangeElements = document.querySelectorAll(".js-color-change");
// js-color-change クラスの要素を配列に変換
const jsColorChangeElementsArray = Array.from(jsColorChangeElements);
// スクロールイベントを登録
window.addEventListener("scroll", function() {
  // A 要素と js-color-change クラスの要素の位置を取得
  const aRect = a.getBoundingClientRect();
  for (const jsColorChangeElement of jsColorChangeElementsArray) {
    const jsColorChangeRect = jsColorChangeElement.getBoundingClientRect();
    // A 要素と js-color-change クラスの要素が重なっているかどうかを判定
    const isOverlap = aRect.bottom >= jsColorChangeRect.top && aRect.top <= jsColorChangeRect.bottom;
    // A 要素と js-color-change クラスの要素が重なっている場合、is-change クラスを付与
    if (isOverlap) {
      a.classList.add("is-change");
      break;
    } else {
      a.classList.remove("is-change");
    }
  }
});


//jQuery
(function ($) {

  /* --------------------------------------------------
    スクロールで処理
  -------------------------------------------------- */
  const mqueryLG = '1023px';
  const $aadclass = 'is-fixed';
  const $_header = $('.header');

  // header固定
  const $AppearGM = $('.header');
  $(window).on('load resize scroll', function () {
    //ハンバーガーメニュー表示の場合
    if (window.matchMedia("(max-width: " + mqueryLG + ")").matches) {
      const headerH = $_header.height();
        if ($(this).scrollTop() > headerH && $AppearGM.hasClass($aadclass) == false) {
          $AppearGM.addClass($aadclass);
        } else if ($(this).scrollTop() == 0) {
          $AppearGM.removeClass($aadclass);
        }
    } else
    //通常表示の場合
    {
      const $firstObj = $('.main > *:first-of-type');
      const $AppearGMTiming = $firstObj.offset().top + $firstObj.outerHeight() - 100;
        if ($(this).scrollTop() > $AppearGMTiming && $AppearGM.hasClass($aadclass) == false) {
          $AppearGM.addClass($aadclass);
        } else if ($(this).scrollTop() == 0) {
          $AppearGM.removeClass($aadclass);
        }
    }
  });

  //サイドナビ固定
  // const $sideCateNav = $('.side-column');

  // $(window).on('load resize scroll', function () {
  //   if ($sideCateNav.length) {
  //     if (window.matchMedia("(max-width: " + mqueryLG + ")").matches) {
  //       const $fixedTiming = $sideCateNav.offset().top - 57;
  //       if ($(this).scrollTop() > $fixedTiming) {
  //         $sideCateNav.addClass($aadclass);
  //       } else {
  //         $sideCateNav.removeClass($aadclass);
  //       }
  //     } else {
  //       const $fixedTiming = $sideCateNav.offset().top - 100;
  //       if ($(this).scrollTop() > $fixedTiming) {
  //         $sideCateNav.addClass($aadclass);
  //       } else {
  //         $sideCateNav.removeClass($aadclass);
  //       }
  //     }
  //   }
  // });

  // pagetop固定
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
    特定の範囲内で要素を固定
  -------------------------------------------------- */
  $(window).on('load scroll', function() {
    fix_element();
  });

  function fix_element() {
    // 固定配置に使用する要素
    var $fixWrapper = $('.js-fix-wrapper');
    var $fix = $('.js-fix-item');
    var $fixArea = $('.js-fix-area');

    // 要素がある場合のみ処理
    if($fixWrapper.length && $fix.length && $fixArea.length) {
      var fixTop = $fixWrapper.offset().top;
      var fixEnd = $fixArea.offset().top + $fixArea.height();
      var fixHeight = $fix.height();
      var winScroll = $(window).scrollTop();
      var winheight = $(window).height();
      // 開始位置を通過する前
      if(winScroll < fixTop) {
        $fix.removeClass('is-fixed');
      // 終了位置を通過した後
      } else if(winScroll > fixEnd - fixHeight) {
        $fix.removeClass('is-fixed');
      // 対象範囲内の場合
      } else {
        $fix.addClass('is-fixed');
      }
    }
  }


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
  const headerHeight = $_header.height() + 40;
  const speed = 300;

  $($anchor).on('tap click', function() {
    const href= $(this).attr("href");
    const target = $(href == "#" || href == "" ? 'html' : href);
    const position = target.offset().top - headerHeight;
    $("html, body").stop().animate({ scrollTop: position }, speed, 'swing');
    $('*').removeClass('is-active');
    $(this).parent().addClass('is-active');
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