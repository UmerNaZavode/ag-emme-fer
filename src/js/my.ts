import '../vue/vue-app.js';
import creationCardToggleAnimation from './modules/creationCardToggleAnimation.js';
import fixedHeader from './modules/header/fixed-header';
// import streetMap from './modules/maps/streetMap.js';
import { mainMenu } from './modules/menu';

document.addEventListener('DOMContentLoaded', function () {
  mainMenu();
  fixedHeader();
  // streetMap();
  const creations_card = document.querySelector('.creations-card');
  if (creations_card) {
    creationCardToggleAnimation();
  }

  const button = document.getElementById('scroll-btn');
  const target = document.querySelector('.creations');

  if (button && target) {
    button.addEventListener('click', function () {
      const offset =
        7 * parseFloat(getComputedStyle(document.documentElement).fontSize); // 5rem
      const top =
        target.getBoundingClientRect().top + window.pageYOffset - offset;

      window.scrollTo({
        top,
        behavior: 'smooth'
      });
    });
  }
});

// function isChromeOnAppleDevice() {
//   const userAgent = navigator.userAgent;
//   const isChrome = /Chrome|CriOS/.test(userAgent);
//   const isApple = /Mac|iPhone|iPad|iPod/.test(navigator.platform);
//
//   return isChrome && isApple;
// }
//
// function isAppleDevice() {
//   return /Mac|iPhone|iPad|iPod/.test(navigator.platform);
// }
