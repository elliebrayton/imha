var TEXTS = [
  'Karibu',
  'Bienvenido',
  'স্বাগতম।',
  'Willkommen',
  'أهلا بك',
  'Bienvenue',
];

var index = 0;

jQuery(function ($) {
  setInterval(function () {
    $('#display-text').fadeOut(400, function () {
      $(this)
        .text(TEXTS[index++])
        .fadeIn(500);
      if (index === TEXTS.length) index = 0;
    });
  }, 2200);
});

// Mobile Nav

var bars = document.getElementById('hamburger');
var cross = document.getElementById('cross');
var navigation = document.getElementById('navigation');

var openCloseNav = function openCloseNav() {
  navigation.classList.toggle('expand');
  bars.classList.toggle('active');
  // cross.classList.toggle('hide-button');
};

bars.addEventListener('click', openCloseNav);
// cross.addEventListener('click', openCloseNav);

// Popup Form

function popup() {
  var popup = document.getElementById('popup-form');
  var message = document.getElementById('message');
  popup.classList.toggle('show');
  message.style.display = 'none';
}

function closePopup() {
  var popup = document.getElementById('popup-form');
  popup.classList.toggle('show');
}

// Programs Slideshow

// $('.programs-slideshow').slick({
//   infinite: false,
//   slidesToShow: 3,
//   slidesToScroll: 3
// });

jQuery(function ($) {
  $('.programs-slideshow').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 1550,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 1150,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 775,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
});
