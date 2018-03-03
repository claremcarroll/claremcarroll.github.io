// IE cannot apply CSS transforms on SVG elements. (See https://connect.microsoft.com/IE/feedback/details/811744/ie11-bug-with-implementation-of-css-transforms-in-svg)

var path = anime.path('#path');

anime({
  targets: 'div',
  translateX: path,
  translateY: path,
  rotate: path,
  duration: 12000,
  loop: true,
  easing: 'linear'
});