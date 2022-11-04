/*
  O Glider.js nasceu de uma frustração para carrosséis, especialmente em dispositivos móveis.
  Inspirado no conhecido Slick.js, o Glider.js pretende ser uma alternativa de carrossel rápida,
  leve, responsiva, sem opiniões e sem dependências.
  https://nickpiscitelli.github.io/Glider.js/
*/

new Glider(document.querySelector('.glider'), {
  slidesToShow: 1,
  dots: '#dots',
  draggable: true,
  arrows: {
    prev: '.glider-prev',
    next: '.glider-next'
  }
});