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


// Mobile Nav

var bars = document.getElementById("bars");
var cross = document.getElementById("cross");
var navigation = document.getElementById("navigation");

var openCloseNav = function openCloseNav() {
    navigation.classList.toggle("expand");
    bars.classList.toggle("hide-button");
    cross.classList.toggle("hide-button");
};

bars.addEventListener("click", openCloseNav);
cross.addEventListener("click", openCloseNav);

// Popup Form

function popup() {
  var popup = document.getElementById("popup-form");
  var message= document.getElementById("message");
  popup.classList.toggle("show");
  message.style.display="none";
}

function closePopup() {
  var popup = document.getElementById("popup-form");
  popup.classList.toggle("show");
}

// Slideshow

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("program-slide");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 8000);
}