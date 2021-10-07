var modal = document.querySelector('.myModal');
var imgs = document.querySelectorAll('.myImg');
var modalImg = document.querySelector('.img01');

var captionText = document.querySelector('.caption');



for (var img of imgs) {
    img.onclick = function () {
        modal.style.display = "block";
        modalImg.src = this.src;
        bo.style.overflow = 'hidden';
        captionText.innerHTML = this.alt;
    }

var span = document.getElementsByClassName('close')[0];
    modal.onclick = function () {
        modal.style.display = 'none';
        bo.style.overflow = 'auto';
    }
}


// Слайдер
$(function() {
  $('.slider').slick({
      adaptiveHeight: true,
      speed: 800,
      variableWidth: true,
      dots: true,
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 6000,
      centerMode: true,
      centerPadding: '60px',
      responsive: [
      {
        breakpoint: 1768,
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 1050,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });
})




// Слайдер на проектах 
const sliderItems = [...document.querySelectorAll('.hover-slider__item')];
const navItems = [...document.querySelectorAll('.hover-slider-nav__item')];

sliderItems.forEach((item, index) => {
  item.dataset.index = index;

  if (index === 0) {
    item.classList.add('hover-slider__item--active');
  }
});
navItems.forEach((item, index) => {
  item.dataset.index = index;

  if (index === 0) {
    item.classList.add('hover-slider-nav__item--active');
  }
});


const toggleActivity = (index) => {

  for (let i = 0; i < sliderItems.length; i++) {
    if (i === Number(index)) {
      //+
      sliderItems[i].classList.add('hover-slider__item--active');
      navItems[i].classList.add('hover-slider-nav__item--active');
    } else {
      //-
      sliderItems[i].classList.remove('hover-slider__item--active');
      navItems[i].classList.remove('hover-slider-nav__item--active');
    }
  }
}


document.querySelector('.hover-slider-nav').addEventListener('mouseover', (event) => {
  if (event.target.classList.contains('hover-slider-nav__item')) {

    toggleActivity(event.target.dataset.index)
  }
});

