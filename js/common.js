// Feedback form
var feed_link = document.getElementById("feed_link");
var madal = document.getElementById("modal");
var close = document.getElementById("close");

feed_link.onclick = viewFeed;
close.onclick = reset;

function viewFeed(){
  modal.style.display = "block";
}

function reset(){
  modal.style.display = "none";
}

// Page title from e-mail send
titlename = document.title;
document.getElementById('pagettl').value = titlename;

//E-mail Ajax Send
$("form").submit(function() { //Change
  var th = $(this);
  $.ajax({
    type: "POST",
    url: "sendmail.php", //Change
    data: th.serialize()
  }).done(function() {
    alert("Thank you!");
    setTimeout(function() {
      // Done Functions
      th.trigger("reset");
    }, 1000);
  });
  return false;
});

// Slider
/* Проверяем слайдер на странице */
var checkSlider = document.getElementsByClassName("item").length;
if (checkSlider > 0) {
  var slideInterval = setInterval(plusSlide,4000);

  /* Индекс слайда по умолчанию */
  var slideIndex = 1;
  showSlides(slideIndex);
}

/* Функция увеличивает индекс на 1, показывает следующй слайд*/
function plusSlide() {
  showSlides(slideIndex += 1);
}

/* Функция уменьшяет индекс на 1, показывает предыдущий слайд*/
function minusSlide() {
  showSlides(slideIndex -= 1);  
}

/* Устанавливает текущий слайд */
function currentSlide(n) {
  showSlides(slideIndex = n);
}

/* Основная функция слайдера */
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("item");
  var dots = document.getElementsByClassName("slider-dots_item");
  if (n > slides.length) {
    slideIndex = 1
  }
  if (n < 1) {
    slideIndex = slides.length
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}