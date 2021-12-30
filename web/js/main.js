/**
 * =======================================
 * Function: count down timer
 * =======================================
 */
var setCountDownTimer = function ($wrapper, deadline) {
  var $dayCont = $wrapper.find('.Count-down-timer__day > span');
  var $hourCont = $wrapper.find('.Count-down-timer__hour > span');
  var $minuteCont = $wrapper.find('.Count-down-timer__minute > span');
  var $secondCont = $wrapper.find('.Count-down-timer__second > span');

  var x = setInterval(function () {
    var now = new Date().getTime();
    var t = deadline - now;
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    var hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((t % (1000 * 60)) / 1000);

    $dayCont.html(days);
    $hourCont.html(hours);
    $minuteCont.html(minutes);
    $secondCont.html(seconds);

    if (t < 0) {
      clearInterval(x);
      $dayCont.html('0');
      $hourCont.html('0');
      $minuteCont.html('0');
      $secondCont.html('0');
    }
  }, 1000);
};

$(document).ready(function () {
  $('#TESTIMONIALS').owlCarousel({
    loop: true,
    nav: false,
    items: 1,
    dots: true,
    animateOut: 'slideOutUp',
    animateIn: 'slideInUp',
  });

  $('#MAIN-SLIDER').owlCarousel({
    loop: true,
    nav: false,
    items: 1,
    dots: true,
  });

  $('#ROADMAP').owlCarousel({
    loop: true,
    nav: true,
    items: 2,
    dots: false,
    margin: 20,
    center: true,
    autoWidth: true,
    navText: [
      '<i class="fa fa-long-arrow-left" aria-hidden="true"></i>',
      '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>',
    ],
  });

  $('#PARTNERS').owlCarousel({
    loop: true,
    nav: true,
    items: 4,
    dots: false,
    navText: [
      '<i class="fa fa-long-arrow-left" aria-hidden="true"></i>',
      '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>',
    ],
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      },
      1200: {
        items: 4,
      },
    },
  });

  $('#TEAM').owlCarousel({
    loop: true,
    nav: true,
    items: 3,
    dots: false,
    margin: 100,
    center: true,
    autoWidth: true,
    navText: [
      '<i class="fa fa-long-arrow-left" aria-hidden="true"></i>',
      '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>',
    ],
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1200: {
        items: 3,
      },
    },
  });

  $('#GALLERY').owlCarousel({
    loop: true,
    margin: 40,
    nav: true,
    navText: [
      '<i class="fa fa-long-arrow-left" aria-hidden="true"></i>',
      '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>',
    ],
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      },
      1200: {
        items: 4,
      },
    },
  });

  $('body').on('click', '#FAQ .faq__item', function () {
    $('#FAQ .faq__item').removeClass('faq__item--active');
    $(this).addClass('faq__item--active');
    const data = $(this).find('.faq__area').html();

    $('#FAQ .faq__content').html(data);
  });

  $('body').on('click', '#MENU_TOGGLE', function () {
    $('.menu__list').toggleClass('menu__list--open');
  });

  $('body').on('click', '#MENU_CLOSE', function () {
    $('.menu__list').removeClass('menu__list--open');
  });

  $('[data-date]').each(function () {
    var date = new Date($(this).data('date')).getTime();
    setCountDownTimer($(this), date);
  });

  $('body').on('click', '.language-select', function () {
    $(this).find('.dropdown').toggleClass('dropdown--open');
  });

  $('body').on('click', '#COOKIES__CLOSE', function (e) {
    $(this).closest('.cookies').remove();
    e.preventDefault();
  });

  /**
   * =======================================
   * Function: VIEWPORTCHECKER FOR PROGRESS BAR
   * =======================================
   */
  $('.Invest-counter__value-line').viewportChecker({
    callbackFunction: function (elem, action) {
      const $elemWrapper = $(elem).closest('.Invest-counter');
      const $Value = $elemWrapper.find('.Invest-counter__source__value');
      const countTo = $(elem).attr('data-to');
      const $percent = $elemWrapper.find('.Invest-counter__source__percent');
      const percentCountTo = $percent.data('to');

      $(elem).css('width', $(elem).data('slideTo') + '%');

      $({ countNum: 0 }).animate(
        {
          countNum: countTo,
        },

        {
          duration: 800,
          easing: 'linear',
          step: function () {
            $Value.text(Math.floor(this.countNum));
          },
          complete: function () {
            $Value.text(String(this.countNum).replace('.', ','));
            //alert('finished');
          },
        }
      );
      $({ percentCountNum: 0 }).animate(
        {
          percentCountNum: percentCountTo,
        },

        {
          duration: 800,
          easing: 'linear',
          step: function () {
            $percent.text(Math.floor(this.percentCountNum));
          },
          complete: function () {
            $percent.text(this.percentCountNum);
            //alert('finished');
          },
        }
      );
    },
  });
});
