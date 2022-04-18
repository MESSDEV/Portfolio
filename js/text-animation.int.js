// 
// Hero text animation
//  

// hero-3 Wrap every letter in a span
var textWrapper = document.querySelector('.hero-3-title .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.hero-3-title .letter',
    rotateY: [-90, 0],
    duration: 1500,
    delay: (el, i) => 45 * i
  }).add({
    targets: '.hero-3-title',
    opacity: 0,
    duration: 1500,
    easing: "easeOutExpo",
    delay: 500
  });

