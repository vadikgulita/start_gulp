var _functions = {},
  winWidth;

jQuery(function ($) {

  "use strict";

  /* function on page ready */
  var isTouchScreen = navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i);
  if (isTouchScreen) $('html').addClass('touch-screen');
  var winScr, winHeight,
    is_Mac = navigator.platform.toUpperCase().indexOf('MAC') >= 0,
    is_IE = /MSIE 9/i.test(navigator.userAgent) || /rv:11.0/i.test(navigator.userAgent) || /MSIE 10/i.test(navigator.userAgent) || /Edge\/\d+/.test(navigator.userAgent),
    is_Chrome = navigator.userAgent.indexOf('Chrome') >= 0 && navigator.userAgent.indexOf('Edge') < 0;

  /* check browser */
  winWidth = $(window).width();
  winHeight = $(window).height();

  if (is_Mac) {
    $('html').addClass('mac');
  }
  if (is_IE) {
    $('html').addClass('ie');
  }
  if (is_Chrome) {
    $('html').addClass('chrome');
  }

  /* page loader and etc */
  if ($('.select-box').length) {
    $('.SelectBox').each(function () {
      if ($(this).hasClass('search')) {
        $('.SelectBox.search').SumoSelect({
          search: true,
          searchText: ''
        });
      } else {
        $('.SelectBox').SumoSelect();
      }
    });
  }
  setTimeout(function () {
    $('body').addClass('site-ready');
    if (!is_IE && $('.rellax').length && $(window).width() > 1199) {
      let rellax = new Rellax('.rellax');
    }
  }, 1300);

  /* function on page scroll */
  $(window).scroll(function () {
    _functions.scrollCall();
  });

  _functions.scrollCall = function () {
    winScr = $(window).scrollTop();
    if (winScr > 10) {
      $('header').addClass('scrolled');
    } else {
      $('header').removeClass('scrolled');
    }
  }

  /*menu*/
  $('.mobile-button').on('click', function () {
    $(this).toggleClass('active');
    $('html').toggleClass('overflow-menu');
    $(this).parents('header').toggleClass('open-menu');
  });

  //layer close
  $('.layer-close').on('click', function () {
    $('header').removeClass('active-layer-close');
  });

  //custom-input-number
  $('.custom-input-number .increment').on('click', function () {
    var $input = $(this).siblings('.input-field'),
      val = parseInt($input.val()),
      max = parseInt($input.attr('max')),
      step = parseInt($input.attr('step'));
    var temp = val + step;
    $input.val(temp <= max ? temp : max);
  });

  $('.custom-input-number .decrement').on('click', function () {
    var $input = $(this).siblings('.input-field'),
      val = parseInt($input.val()),
      min = parseInt($input.attr('min')),
      step = parseInt($input.attr('step'));
    var temp = val - step;
    $input.val(temp >= min ? temp : min);
  });

  //fail Input
  $('.input').on('keyup', function () {
    if ($(this).val()) {
      $(this).parent('.input-field-wrapp').removeClass('fail');
    } else {
      $(this).parent('.input-field-wrapp').addClass('fail');
    }
  });

  //telephone mask
  $('.input[type="tel"]').on('focus', function () {
    $(this).inputmask("+38 (999) 999 - 9999", {
      "placeholder": "+38 (ххх) ххх - хххх"
    });
  });

  /* swiper sliders */
  _functions.getSwOptions = function (swiper) {
    var options = swiper.data('options');
    options = (!options || typeof options !== 'object') ? {} : options;
    var $p = swiper.closest('.swiper-entry'),
      slidesLength = swiper.find('>.swiper-wrapper>.swiper-slide').length;
    if (!options.pagination) options.pagination = {
      el: $p.find('.swiper-pagination')[0],
      clickable: true
    };
    if (!options.navigation) options.navigation = {
      nextEl: $p.find('.swiper-button-next')[0],
      prevEl: $p.find('.swiper-button-prev')[0]
    };
    options.preloadImages = false;
    options.lazy = {
      loadPrevNext: true
    };
    options.observer = true;
    options.observeParents = true;
    options.watchOverflow = true;
    if (!options.speed) options.speed = 500;
    options.roundLengths = false;
    if (!options.centerInsufficientSlides) options.centerInsufficientSlides = false;
    if (slidesLength <= 1) {
      options.loop = false;
    }
    if (isTouchScreen) options.direction = "horizontal";

    if (options.customPagination) {
      options.pagination.renderBullet = function (index, className) {
        var slide = swiper.find('.swiper-slide').eq(index);
        if (slide.data('video')) className += ' video';
        return '<span class="' + className + ' custom" style="background-image: url(' + slide.data('preview') + ')"><span></span></span>';
      }
    }

    if (options.progressbar) {
      options.pagination.type = 'progressbar';
    }

    if (options.customFraction) {
      $p.addClass('custom-fraction-swiper');
      if (slidesLength > 1 && slidesLength < 10) {
        $p.find('.custom-current').text('01');
        $p.find('.custom-total').text('0' + slidesLength);
      } else if (slidesLength > 1) {
        $p.find('.custom-current').text('01');
        $p.find('.custom-total').text(slidesLength);
      }
    }

    if (options.customNumber) {
      options.pagination.renderBullet = function (index, className) {
        return '<span class="' + className + '">0' + (index + 1) + "</span>";
      }
    }

    return options;
  };

  _functions.initSwiper = function (el) {
    var swiper = new Swiper(el[0], _functions.getSwOptions(el));
  };

  $('.swiper-entry .swiper-container').each(function () {
    _functions.initSwiper($(this));
  });

  $('.swiper-thumbs').each(function () {
    var top = $(this).find('.swiper-container.swiper-thumbs-top')[0].swiper,
      bottom = $(this).find('.swiper-container.swiper-thumbs-bottom')[0].swiper;
    top.thumbs.swiper = bottom;
    top.thumbs.init();
    top.thumbs.update();
  });

  //custom fraction
  $('.custom-fraction-swiper').each(function () {
    var $this = $(this),
      $thisSwiper = $this.find('.swiper-container')[0].swiper;

    $thisSwiper.on('slideChange', function () {
      $this.find('.custom-current').text(
        function () {
          if ($thisSwiper.realIndex < 9) {
            return '0' + ($thisSwiper.realIndex + 1)
          } else {
            return $thisSwiper.realIndex + 1
          }
        }
      )
    });
  });

  //popup
  var popupTop = 0;

  function removeScroll() {
    popupTop = $(window).scrollTop();
    $('html').css({
      "position": "fixed",
      "top": -$(window).scrollTop(),
      "width": "100%"
    });
  }

  function addScroll() {
    $('html').css({
      "position": "static"
    });
    window.scroll(0, popupTop);
  }
  _functions.openPopup = function (popup) {
    $('.popup-content').removeClass('active');
    $(popup + ', .popup-wrapper').addClass('active');
    removeScroll();
  };

  _functions.closePopup = function () {
    $('.popup-wrapper, .popup-content').removeClass('active');
    addScroll();
  };

  _functions.textPopup = function (title, description) {
    $('#text-popup .text-popup-title').html(title);
    $('#text-popup .text-popup-description').html(description);
    _functions.openPopup('#text-popup');
  };

  $(document).on('click', '.open-popup', function (e) {
    e.preventDefault();
    _functions.openPopup('.popup-content[data-rel="' + $(this).data('rel') + '"]');
  });

  $(document).on('click', '.popup-wrapper .btn-close, .popup-wrapper .layer-close, .popup-wrapper .close-popup', function (e) {
    e.preventDefault();
    _functions.closePopup();
  });


  // =============================
  // AJAX POPUP
  // =============================
  $(document).on('click', '.open-popup', function (e) {
    e.preventDefault();
    let xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("popups").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "inc/_popups.php", true);
    xhttp.send();

    $('.popup-wrapper').addClass('active');
    let dataRel = $(this).attr('data-rel');


    setTimeout(function () {
      $('.popup-wrapper .popup-content').each(function () {
        const thisPopup = $(this).attr('data-rel');
        dataRel === thisPopup ? $(this).addClass('active') : $(this).removeClass('active');
      });
      _functions.initInputmask();
      _functions.initInputs();

    }, 100);

  });

  //close popup with ESCAPE key
  $(document).keyup(function (e) {
    if (e.keyCode === 27) {
      _functions.closePopup();
    }
  });

  function pageScroll(current, headerHeight) {
    if ($(window).width() > 991) {
      $('html, body').animate({
        scrollTop: current.offset().top - 90
      }, 888);
    } else {
      $('html, body').animate({
        scrollTop: current.offset().top - 59
      }, 777);
    }
  }

  //scroll animation
  $(window).on('scroll load', function () {
    if ($('.animate-item').length && (!isTouchScreen || $(window).width() >= 1200)) {
      $('.animate-item').not('.animated').each(function () {
        var th = $(this);
        if ($(window).scrollTop() >= th.offset().top - ($(window).height() * 0.7)) {
          th.addClass('animated');
        }
      });
    }
  });

  //anchor scroll
  $(function () {
    $('a[href*="#"]:not([href="#"])').click(function () {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top - 170
          }, 1000);
          $('.mobile-button').removeClass('active');
          $('html').removeClass('overflow-menu');
          $('header').removeClass('open-menu');
          return false;
        }
      }
    });
  });

  //visible more text seo block
  $(document).on('click', '.more-text .read-more', function () {
    $(this).parents('.more-text').toggleClass('open');
    $(this).parent().find('.text').slideToggle(555);
    if ($('.more-text').hasClass('open')) {
      $('.more-text .read-more').text($(this).data('read-less'));
    } else {
      $('.more-text .read-more').text($(this).data('read-more'));
    }
  });

  //accordion
  $(document).on('click', '.accordion:not(.employment-accord) .accordion-item .accordion-title', function () {
    var headerHeight = $('header').height(),
      current = $(this);
    if ($(this).hasClass('active')) {
      $(this).removeClass('active').next().slideUp();
    } else {
      $(this).closest('.accordion').find('.accordion-title').not(this).removeClass('active').next().slideUp();
      $(this).addClass('active').next().slideDown();
    }
  });

  //tabs
  $('.tab-title').on('click', function () {
    $(this).parent().toggleClass('active');
  });
  $('.tab-toggle div').not('.tab-disabled').on('click', function () {
    var tab = $(this).closest('.tabs').find('.tab');
    var i = $(this).index();
    $(this).addClass('active').siblings().removeClass('active');
    if ($(this).find('.tab-caption').hasClass('all-faq')) {
      tab.fadeIn(300);
    } else {
      tab.eq(i).siblings('.tab:visible').fadeOut(function () {
        tab.eq(i).fadeIn(300);
      });
    }
    $(this).closest('.tab-nav').removeClass('active').find('.tab-title').text($(this).find('.tab-caption').text());
  });

});