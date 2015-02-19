// http://sitechop.com/front-end/svg-sprite-social-media-icons-tutorial
// https://developer.mozilla.org/en-US/docs/Web/SVG/Namespaces_Crash_Course

function supportsSVG() {
  "use strict";
  return !! document.createElementNS && !! document.createElementNS('http://www.w3.org/2000/svg','svg').createSVGRect;
}
if (supportsSVG()) {
  document.documentElement.className += ' svg'; 
}
else {
  document.documentElement.className += ' no-svg';
}
supportsSVG();
