var TEXTS = [
  'Karibu',
  'Bienvenido',
  'স্বাগতম।',
  'Willkommen',
  'أهلا بك',
  'Bienvenue',
];

var index = 0;

$(function () {
  setInterval(function () {
    $('#display-text').fadeOut(400, function () {
      $(this)
        .text(TEXTS[index++])
        .fadeIn(500);
      if (index === TEXTS.length) index = 0;
    });
  }, 2200);
});
