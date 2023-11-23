//Vanilla JS
/* --------------------------------------------------
  infiniteslidev2.js
-------------------------------------------------- */
(function ($) {

  const loopSlider = '.js-loop-slider';

  $(window).on('load', function () {
    setTimeout(function () {
      $(loopSlider).addClass('is-action').infiniteslide({
        'height': 70,
        'speed': 60, // スピードを指定
        'direction' : 'left', // スライドする向きを指定
        'pauseonhover': false, // マウスオーバーでストップするかを指定
        'clone' : 1000 // 子要素のコピー数を指定
      });
    }, 500);
  });

})(jQuery);