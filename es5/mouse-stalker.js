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