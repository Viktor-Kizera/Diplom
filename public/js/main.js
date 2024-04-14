// слайдер перший екран
$('.slider_all').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    swipe: false,
    asNavFor: '.slider-nav'
  });
  $('.slider-nav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.slider_all',
    dots: true,
    centerMode: true,
    focusOnSelect: true,
  });
  // слайдер галереї фільмів
  $('.all__movie__slider').slick( {
    slidesToShow: 4.3,
    slidesToScroll: 2,
    speed: 300,
    arrows: false,
    swipe: true,
    scroll: true,
    infinite: false
  }
  );
// кнопки додати фільм
  $(document).ready(function(){
    $('.add__button-movie').click(function() {
        $(this).addClass('add')
    })
  });
// слайдер навігації по фільмах
  $('.nav__slider__all').slick( {
    slidesToShow: 7,
    slidesToScroll: 1,
    speed: 300,
    arrows: true,
    swipe: false,
    scroll: true,
    infinite: false,
    nextArrow: document.querySelector('#arrow-next'),
    prevArrow: document.querySelector('#arrow-prev')
  }
  );
// слайдер навігації по серіалах
  $('.nav2__slider__all').slick( {
    slidesToShow: 7,
    slidesToScroll: 1,
    speed: 300,
    arrows: true,
    swipe: false,
    scroll: true,
    infinite: false,
    nextArrow: document.querySelector('#arrow-next2'),
    prevArrow: document.querySelector('#arrow-prev2')
  }
  );
  $(document).ready(function(){
    $('.nav__movie button').click(function() {
        $(this).toggleClass('selected')
    })
  });
  $(document).ready(function(){
    $('.undercuts .block__button .b1').click(function() {
          $('.undercuts .block__button .b1').removeClass('disabled'),
          $('.undercuts .block__button .b1').addClass('active'),
          $('.undercuts .block__button .b2').addClass('disabled')
    })
  });
  $(document).ready(function(){
    $('.undercuts .block__button .b2').click(function() {
          $('.undercuts .block__button .b2').removeClass('disabled'),
          $('.undercuts .block__button .b1').addClass('disabled'),
          $('.undercuts .block__button .b2').addClass('active')
    })
  });
  $(document).ready(function(){
    $('.acteurs__and__regisseurs .b3').click(function() {
          $(this).removeClass('disabled'),
          $(this).addClass('active'),
          $('.acteurs__and__regisseurs .b4').addClass('disabled')
    })
  });
  $(document).ready(function(){
    $('.acteurs__and__regisseurs .b4').click(function() {
          $('.acteurs__and__regisseurs .b4').removeClass('disabled'),
          $('.acteurs__and__regisseurs .b3').addClass('disabled'),
          $('.acteurs__and__regisseurs .b4').addClass('active')
    })
  });
// підбірки слайдер
$('.undercuts__all__Slider').slick( {
  slidesToShow: 4,
  slidesToScroll: 1,
  speed: 300,
  arrows: false,
  swipe: true,
  scroll: true,
  infinite: false
}
);
$(document).ready(function(){
  $('.undercuts .block__button .b1').click(function() {
        $('.undercuts .undercuts_S_all1').removeClass('disabled'),
        $('.undercuts .undercuts_S_all1').addClass('active'),
        $('.undercuts .undercuts_S_all2').addClass('disabled')
  })
});
$(document).ready(function(){
  $('.undercuts .block__button .b2').click(function() {
        $('.undercuts .undercuts_S_all2').removeClass('disabled'),
        $('.undercuts .undercuts_S_all2').addClass('active'),
        $('.undercuts .undercuts_S_all1').addClass('disabled')
  })
});
// актори слайдер
$('.acteurs__all__Slider').slick( {
  slidesToShow: 6,
  slidesToScroll: 1,
  speed: 300,
  arrows: false,
  swipe: true,
  scroll: true,
  infinite: false
}
);
$(document).ready(function(){
  $('.acteurs__and__regisseurs .b3').click(function() {
        $('.acteurs_S_all1').removeClass('disabled'),
        $('.acteurs_S_all1').addClass('active'),
        $('.acteurs_S_all2').addClass('disabled'),
        $('.acteurs__and__regisseurs .title-and-button-checked h4').text('Режисери')
  })
});
$(document).ready(function(){
  $('.acteurs__and__regisseurs .b4').click(function() {
        $('.acteurs_S_all2').removeClass('disabled'),
        $('.acteurs_S_all2').addClass('active'),
        $('.acteurs_S_all1').addClass('disabled'),
        $('.acteurs__and__regisseurs .title-and-button-checked h4').text('Актори')

  })
});
// =========== скріпт слайдера в пошуку фільмів та серіалів
$('.nav3__slider__all').slick( {
  slidesToShow: 6,
  slidesToScroll: 1,
  speed: 300,
  arrows: true,
  swipe: false,
  scroll: true,
  infinite: false,
  nextArrow: document.querySelector('#arrow-next3'),
  prevArrow: document.querySelector('#arrow-prev3')
}
);
$(document).ready(function(){
  $('.block__icons .save').click(function() {
        $('.block__icons .save svg').toggleClass('active')
  })
});
$(document).ready(function(){
  $('.block__icons .like').click(function() {
        $('.block__icons .like svg').toggleClass('active')
        $('.block__icons .dislike svg').removeClass('active')
  })
});
$(document).ready(function(){
  $('.block__icons .dislike').click(function() {
        $('.block__icons .dislike svg').toggleClass('active')
        $('.block__icons .like svg').removeClass('active')
  })
});

$('.all__commentars__Slider').slick( {
  slidesToShow: 5,
  slidesToScroll: 1,
  speed: 300,
  arrows: false,
  swipe: true,
  scroll: true,
  infinite: false
}
);
$(document).ready(function(){
  $('.like-dislake__block svg').click(function() {
        $(this).addClass('active');
  })
});
$('.all__movie__Cartoon__slider').slick( {
  slidesToShow: 3.3,
  slidesToScroll: 2,
  speed: 300,
  arrows: false,
  swipe: true,
  scroll: true,
  infinite: false
}
);
$('.slider__cartonn__all').slick( {
  slidesToShow: 1,
  slidesToScroll: 1,
  speed: 700,
  arrows: true,
  swipe: false,
  scroll: true,
  infinite: false,
  nextArrow: document.querySelector('#butoon-slider-next'),
  prevArrow: document.querySelector('#butoon-slider-prev')
}
);



// like / dislike
$(function () {
'use strict';
function initCounter(container) {
var clicker = container.find('.counter__clicker');
var display = container.find('.counter__display');
var count = 0;
display.text(count);
clicker.on('click', function () {
display.text(++count);
});
}
initCounter($('#like')), initCounter($('#like2')), initCounter($('#like3')), initCounter($('#like4')), initCounter($('#like5')), initCounter($('#like6'));
});

$(function () {
'use strict';
function initCounter(container) {
var clicker = container.find('.counter__clicker');
var display = container.find('.counter__display');
var count = 0;

display.text(count);

clicker.on('click', function () {
display.text(++count);
});
}
initCounter($('#dislike')), initCounter($('#dislike2')),initCounter($('#dislike3')), initCounter($('#dislike4')), initCounter($('#dislike5')), initCounter($('#dislike6'));
});
// like / dislike
// yakor
const anchors = document.querySelectorAll('a[href*="#"]')
for (let anchor of anchors) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault()
    const blockID = anchor.getAttribute('href').substr(1)
    document.getElementById(blockID).scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    })
  })
}
