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


/* ----------------------------------------------------------------------------------- */
//jQuery
/* ----------------------------------------------------------------------------------- */
(function ($) {

  /* --------------------------------------------------
  ページローディング処理
  -------------------------------------------------- */
  //ページロード時にフェードイン
  $('body').fadeIn(600);

  //ブラウザバックで強制的にリフレッシュ
  window.onpageshow = function(event) {
    if (event.persisted) {
      window.location.reload();
    }
  };

  $('a:not([href^="#"]):not([target])').on('click', function (e) {
    link = $(this).attr('href');
    if (link !== '') {
      // Ctrl キーが押されていた場合は別タブで開く
      if (e.ctrlKey) {
        window.open(link);
      } else {
        //bodyにフェードアウトさせるためのクラスを付与
        // $('body').removeClass('js-page-loading');
        $('body').addClass('js-page-fadeout');
        // Ctrl キーが押されていなかった場合は同じタブで開く
        setTimeout(function(){
          location.href = link;
        }, 300);
      }
    }
    // return false;
  });


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
    メニュー開閉
  -------------------------------------------------- */
  const body = $('body');
  const menuWrap = $('.global-menu');
  const header = $('.header');
  const BtnOpen = $('.js-tgl-menu');
  const classname = 'is-open';
  const NaviLink = $('.header-navi .menu a[href]');
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

  //同ページ内
  $(window).on('load scroll resize', function () {
    const headerHeight = $_header.height() + 40;
    $($anchor).on('tap click', function() {
      const href= $(this).attr("href");
      const target = $(href == "#" || href == "" ? 'html' : href);
      const position = target.offset().top - headerHeight;
      $("html, body").stop().animate({ scrollTop: position }, speed, 'swing');
      return false;
    });
  });
  //別ページから遷移
  $(window).on('load resize', function() {
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

  /* --------------------------------------------------
    スクロールによるサイドメニューの変化
    https://web-creates.com/code/jquery-menu-change/
  -------------------------------------------------- */
  $(window).on('load scroll resize', function () {
    const addActive = "is-active";
    //1023px以下
    if (window.matchMedia("(max-width: " + mqueryLG + ")").matches) {
      $(".js-positionNav li").removeClass(addActive);
    } else
    //1024以上
    {
      const st = $(window).scrollTop();
      const wh = $(window).height();
      $('.js-positionNav-target').each(function (i) {
        const tg = $(this).offset().top;
        const id = $(this).attr('id');

        if (st > tg - wh + (wh / 1.2) - headerHeight) {
          $(".js-positionNav li").removeClass(addActive);
          const targt = $(".js-positionNav li a[href *= " + id +"]").parent("li");
          $(targt).addClass(addActive);
        }
      });
    }

  });



})(jQuery);