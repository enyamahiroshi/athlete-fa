//Vanilla JS
/* --------------------------------------------------
  https://simpleparallax.com/#examples
-------------------------------------------------- */
document.addEventListener("DOMContentLoaded", function () {
  var image = document.getElementsByClassName('js-parallax');
  new simpleParallax(image, {
    delay: .6,
    transition: 'cubic-bezier(0,0,0,1)',
    scale: 1.2,
  });
});