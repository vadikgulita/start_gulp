let _functions = {},
  winWidth;
function sleep(ms) {
  return new Promise((resolve) => setTimeout(resolve, ms));
}
jQuery(function ($) {
  ("use strict");

  /* function on page ready */
  let isTouchScreen =
    navigator.userAgent.match(/Android/i) ||
    navigator.userAgent.match(/webOS/i) ||
    navigator.userAgent.match(/iPhone/i) ||
    navigator.userAgent.match(/iPad/i) ||
    navigator.userAgent.match(/iPod/i);
  if (isTouchScreen) $("html").addClass("touch-screen");
  let winScr,
    winHeight,
    is_Mac = navigator.platform.toUpperCase().indexOf("MAC") >= 0,
    is_IE =
      /MSIE 9/i.test(navigator.userAgent) ||
      /rv:11.0/i.test(navigator.userAgent) ||
      /MSIE 10/i.test(navigator.userAgent) ||
      /Edge\/\d+/.test(navigator.userAgent),
    is_Chrome =
      navigator.userAgent.indexOf("Chrome") >= 0 &&
      navigator.userAgent.indexOf("Edge") < 0;

  /* check browser */
  winWidth = $(window).width();
  winHeight = $(window).height();

  if (is_Mac) {
    $("html").addClass("mac");
  }
  if (is_IE) {
    $("html").addClass("ie");
  }
  if (is_Chrome) {
    $("html").addClass("chrome");
  }

  /* function on page scroll */
  $(window).scroll(function () {
    _functions.scrollCall();
  });
  let lastScrollTop = 0;
  _functions.scrollCall = function () {
    winScr = $(window).scrollTop();
    if (winScr > lastScrollTop && winScr > 40) {
      $("header").addClass("scrolled");
    } else if (winScr < document.body.scrollHeight - window.innerHeight) {
      $("header").removeClass("scrolled");
    }
    lastScrollTop = winScr;
  };

  //close popup with ESCAPE key
  $(document).keyup(function (e) {
    if (e.keyCode === 27) {
      _functions.closePopup();
    }
  });

  function pageScroll(current, headerHeight) {
    if ($(window).width() > 991) {
      $("html, body").animate({ scrollTop: current.offset().top - 90 }, 888);
    } else {
      $("html, body").animate({ scrollTop: current.offset().top - 59 }, 777);
    }
  }

  //scroll animation
  $(window).on("scroll load", function () {
    if (
      $(".animate-item").length &&
      (!isTouchScreen || $(window).width() >= 1200)
    ) {
      $(".animate-item")
        .not(".animated")
        .each(function () {
          let th = $(this);
          if (
            $(window).scrollTop() >=
            th.offset().top - $(window).height() * 0.7
          ) {
            th.addClass("animated");
          }
        });
    }
  });

  //anchor scroll
  $(function () {
    $('a[href*="#"]:not([href="#"])').click(function () {
      if (
        location.pathname.replace(/^\//, "") ==
          this.pathname.replace(/^\//, "") &&
        location.hostname == this.hostname
      ) {
        let target = $(this.hash);
        target = target.length
          ? target
          : $("[name=" + this.hash.slice(1) + "]");
        if (target.length) {
          let space = 100;
          if (
            target.hasClass("section-padding") ||
            target.find(".section-padding").length
          ) {
            space = 0;
          }
          $("html, body").animate(
            {
              scrollTop: target.offset().top - space,
            },
            1000
          );
          $(".mobile-button").removeClass("active");
          $("html").removeClass("overflow-menu");
          $("header").removeClass("open-menu");
          return false;
        }
      }
    });
  });

  // open mob menu
  $(document).on("click", ".header__menu-btn", function () {
    if ($("header").hasClass("open-menu")) {
      $("header").removeClass("open-menu");
    } else {
      $("header").addClass("open-menu");
    }
  });
  $(document).on("click", ".header__subNav + .header__nav-item", function () {
    if (window.innerWidth < 1200) {
      $(this).prev(".header__subNav").toggleClass("active");
    }
  });

  // =============================
  // INPUTS
  // =============================

  $(document).on(
    "blur",
    ".custom-input input, .custom-input textarea",
    function () {
      console.log($(this).attr("required"));
      if ($(this).val().length || $(this).attr("required") != "required") {
        $(this).closest(".custom-input").removeClass("error");
      } else {
        $(this).closest(".custom-input").addClass("error");
      }
    }
  );

  // =============================
  // SWIPER
  // =============================
  _functions.getSwOptions = function (swiper) {
    var options = swiper.data("options"),
      initialSlideNum = swiper.data("initial-slide");
    options = !options || typeof options !== "object" ? {} : options;
    var $p = swiper.closest(".swiper-entry"),
      slidesLength = swiper.find(">.swiper-wrapper>.swiper-slide").length;

    if (!options.pagination)
      options.pagination = {
        el: $p.find(".swiper-pagination")[0],
        clickable: true,
      };
    if (!options.navigation)
      options.navigation = {
        nextEl: $p.find(".swiper-button-next")[0],
        prevEl: $p.find(".swiper-button-prev")[0],
      };
    if (options.arrowsOut)
      options.navigation = {
        nextEl: $p.closest("section").find(".swiper-button-next")[0],
        prevEl: $p.closest("section").find(".swiper-button-prev")[0],
      };
    if (options.effectMobile && winWidth < 768) options.effect = "slide";
    if (initialSlideNum) options.initialSlide = initialSlideNum;
    options.preloadImages = false;
    options.lazy = { loadPrevNext: true };
    options.observer = true;
    options.observeParents = true;
    options.watchOverflow = true;
    if (!options.speed) options.speed = 500;
    options.roundLengths = false;
    options.centerInsufficientSlides = true;
    if (!options.centerInsufficientSlides)
      options.centerInsufficientSlides = false;
    if (slidesLength <= 1) {
      options.loop = false;
    }
    if (options.customFraction) {
      $p.addClass("custom-fraction-swiper");
      if (slidesLength > 1) {
        $p.find(".custom-current").text("1");
        $p.find(".custom-total").text(slidesLength);
      }
    }
    if (winWidth < 992) options.direction = "horizontal";
    return options;
  };

  _functions.initSwiper = function (el) {
    let options = _functions.getSwOptions(el);
    let swiper = new Swiper(el[0], options);
    $(el[0])
      .closest(".swiper-entry")
      .find(".swiper-button-prev")
      .append(
        `<svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.5 7L1.5 7M1.5 7L7.21667 1M1.5 7L7.21667 13" stroke="#071832" stroke-width="2"/></svg>`
      );
    $(el[0])
      .closest(".swiper-entry")
      .find(".swiper-button-next")
      .append(
        `<svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 9L20.5 9M20.5 9L12.3333 0.999999M20.5 9L12.3333 17" stroke="#071832" stroke-width="2"/></svg>`
      );
    // destroy swiper if option set
    if (options.destroy) {
      const breakpoint = window.matchMedia(options.destroy);
      const breakpointChecker = function () {
        if (breakpoint.matches === true) {
          if (swiper !== undefined) {
            swiper.destroy(true, true);
          }
          return;
        } else if (breakpoint.matches === false && swiper.destroyed) {
          swiper = new Swiper(el[0], options);
        }
      };
      breakpointChecker();
      breakpoint.addEventListener("change", breakpointChecker);
    }
  };

  $(".swiper-entry").each(function () {
    let th = $(this);

    if (th.find(".swiper-slide").length === 1) {
      th.closest(".section").find(".swiper-button-wrapper").addClass("hide");
    } else {
      th.closest(".section").find(".swiper-button-wrapper").removeClass("hide");
    }
  });

  // init
  setTimeout(function () {
    $(".swiper-entry .swiper-container").each(function () {
      _functions.initSwiper($(this));
    });
  }, 100);

  // =============================
  // POPUP
  // =============================
  let popupTop = 0;
  function removeScroll() {
    popupTop = $(window).scrollTop();
    $("html").css({
      position: "fixed",
      top: -$(window).scrollTop(),
      width: "100%",
      "overflow-y": "scroll",
    });
  }
  function addScroll() {
    $("html").css({
      position: "static",
      "overflow-y": "auto",
    });
    window.scroll(0, popupTop);
  }
  _functions.openPopup = function (popup) {
    if (!$(popup).length) {
      $(".popup-wrapper").load(`_popup.php`, async () => {
        await sleep(300);
        $(".popup-content").removeClass("active");
        $(popup + ", .popup-wrapper").addClass("active");
        removeScroll();
      });
    } else {
      $(".popup-content").removeClass("active");
      $(popup + ", .popup-wrapper").addClass("active");
      removeScroll();
    }
  };

  _functions.closePopup = function () {
    $(".popup-wrapper, .popup-content").removeClass("active");
    addScroll();
  };

  _functions.textPopup = function (title, description) {
    $("#text-popup .text-popup-title").html(title);
    $("#text-popup .text-popup-description").html(description);
    _functions.openPopup("#text-popup");
  };

  $(document).on("click", ".open-popup", function (e) {
    e.preventDefault();
    _functions.openPopup(
      '.popup-content[data-rel="' + $(this).data("rel") + '"]'
    );
  });

  $(document).on(
    "click",
    ".popup-wrapper .btn-close, .popup-wrapper .layer-close",
    function (e) {
      e.preventDefault();
      _functions.closePopup();
    }
  );
  // =============================
  // ACCORDEON ITEMS
  // =============================
  $(document).on("click", ".accordeon-item", function () {
    let isActive = $(this).hasClass("active");
    $(this)
      .closest(".accordeon-items")
      .find(".accordeon-item")
      .removeClass("active")
      .find(".accordeon-item__content")
      .slideUp();
    if (!isActive) {
      $(this).addClass("active");
      $(this).find(".accordeon-item__content").slideDown();
    }
  });

  // =============================
  // COOKIE INFORM
  // =============================
  function createCookie(name, value, days) {
    var expires;

    if (days) {
      var date = new Date();
      date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
      expires = "; expires=" + date.toGMTString();
    } else {
      expires = "";
    }
    document.cookie =
      encodeURIComponent(name) +
      "=" +
      encodeURIComponent(value) +
      expires +
      "; path=/";
  }

  function readCookie(name) {
    var nameEQ = encodeURIComponent(name) + "=";
    var ca = document.cookie.split(";");
    for (var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) === " ") c = c.substring(1, c.length);
      if (c.indexOf(nameEQ) === 0)
        return decodeURIComponent(c.substring(nameEQ.length, c.length));
    }
    return null;
  }

  function eraseCookie(name) {
    createCookie(name, "", -1);
  }
  $(window).on("load", function () {
    if (!readCookie("BES") == true) {
      setTimeout(() => {
        $(".cookie-inform").addClass("active");
      }, 3000);
      $(".accept-cookies").click(() => createCookie("BES", true, 30));
      $(".cookie-inform .btn-close, .cookie-inform__btns > div").click(() =>
        $(".cookie-inform").removeClass("active")
      );
    }
  });

  // =============================
  // form submit
  // =============================
  $(document).on("submit", "form", function (e) {
    e.preventDefault();
    _functions.closePopup();
    _functions.openPopup('.popup-content[data-rel="form-success"]');
  });

  // =============================
  // SECTON NAVIGATION
  // =============================
  (function () {
    let previousScroll = 0;
    let $currentSection = [];
    function getCurrentSection(direction) {
      $("section[data-section-name]").each(function () {
        let isOnView =
          $(this).offset().top -
            window.innerHeight / 2 -
            parseInt($(this).css("margin-bottom")) / 2 <
            window.pageYOffset &&
          $(this).offset().top +
            $(this).outerHeight() +
            parseInt($(this).css("margin-bottom")) / 2 -
            window.innerHeight / 2 >
            window.pageYOffset;
        if (isOnView && $currentSection[0] != $(this)[0]) {
          if ($currentSection.length) {
            if (
              $(this).data("section-name") ==
              $currentSection.data("section-name")
            ) {
              $currentSection = $(this);
              return false;
            }
          }
          $currentSection = $(this);
          animateNextSection(direction);
          return false;
        }
      });
    }
    async function animateNextSection(direction) {
      if ($(".section-navigation").length) {
        $(".section-navigation").addClass(
          `animate-${direction ? "top" : "bot"}-out`
        );
      }
      $("header").prepend(
        `<div class="section-navigation animate-${
          direction ? "bot" : "top"
        }">${$currentSection.data("section-name")}</div>`
      );
      await sleep(1000);
      $(
        `.section-navigation.animate-${direction ? "top" : "bot"}-out`
      ).remove();
    }
    $(window).scroll(function () {
      var currentScroll = $(this).scrollTop();
      if (currentScroll > previousScroll) {
        getCurrentSection(1);
      } else {
        getCurrentSection(0);
      }
      previousScroll = currentScroll;
    });
    $(document).ready(getCurrentSection(1));
  })();

  // =============================
  // ON SCROLL ANIMATE
  // =============================
  function animateOnScroll() {
    if ($(".animate").length && !is_IE) {
      $(".animate")
        .not(".animated")
        .each(function () {
          let th = $(this);
          if (winWidth > 1199) {
            if (
              $(window).scrollTop() >=
              th.offset().top - $(window).height() * 0.75
            ) {
              th.addClass("animated");
            }
          } else {
            if (
              $(window).scrollTop() >=
              th.offset().top - $(window).height() * 1
            ) {
              th.addClass("animated");
            }
          }
        });
    }
  }
  $(document).ready(function () {
    setTimeout(() => {
      animateOnScroll();
    }, 1000);
  });
  $(window).on("scroll", function () {
    animateOnScroll();
  });

  // =============================
  // SECTION TITLE WORD HIGHLIGHT
  // =============================
  if ($(".circled").length) {
    $(".circled").each(function () {
      $(this).hasClass("type-2")
        ? $(this).append(
            `<svg width="595" height="95"  preserveAspectRatio="none" viewBox="0 0 595 95" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M366.178 2.42061C366.178 2.42061 14.7045 -11.4845 1.42601 47.7124C-8.95668 93.9995 172.721 93.9993 297.663 93.9993C387.337 93.9993 586.87 94.7306 593.896 47.7123C600.928 0.654695 247.282 14.8635 229.145 25.3155" stroke="#0AC5A8" stroke-width="2"/></svg>`
          )
        : $(this).append(
            `<svg width="238" height="71"  preserveAspectRatio="none" viewBox="0 0 238 71" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M146.341 2.054C146.341 2.054 7.05595 -8.26269 1.79382 35.6576C-2.32073 69.9996 69.6763 69.9995 119.19 69.9995C154.727 69.9995 233.8 70.5421 236.584 35.6575C239.371 0.743806 99.2239 11.2859 92.0365 19.0405" stroke="#0AC5A8" stroke-width="2"/></svg>`
          );
    });
  }
  if ($(".underline").length) {
    $(".underline").each(function () {
      if ($(this).hasClass("type-1")) {
        $(this).append(
          `<svg width="328" height="17" preserveAspectRatio="none" viewBox="0 0 328 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M327 1C327 8.05925 -1.31156 -4.9611 2.02526 8.44382C2.87212 11.8459 220.682 3.91331 219.292 16" stroke="#0AC5A8" stroke-width="2"/></svg>`
        );
      }
      if ($(this).hasClass("type-2")) {
        $(this).append(
          `<svg width="380" preserveAspectRatio="none" height="17" viewBox="0 0 380 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M378.012 1C378.012 8.14391 -0.502969 -4.56568 2.01248 9C2.65088 12.4428 334.364 4.26816 333.316 16.4998" stroke="#0AC5A8" stroke-width="2"/></svg>`
        );
      }
      if ($(this).hasClass("type-3")) {
        $(this).append(
          `<svg width="390" height="17"  preserveAspectRatio="none" viewBox="0 0 390 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M389 7.00916C389 0.388641 260.755 1.01592 154.495 1.01592C48.2343 1.01592 1 3.38572 1 10.0062M389 16C389 9.37948 260.755 10.0068 154.495 10.0068" stroke="#0AC5A8" stroke-width="2"/></svg>`
        );
      }
    });
  }
  // =============================
  // SEO FOOTER BTN CLICK
  // =============================
  $(document).on("click", ".seo-footer-btn", function () {
    if ($(this).hasClass("active")) {
      $(this).closest(".seo-footer__read-more").find(".text").slideUp();
      $(this).text($(this).data("text-closed"));
    } else {
      $(this).closest(".seo-footer__read-more").find(".text").slideDown();
      $(this).text($(this).data("text-opened"));
    }
    $(this).toggleClass("active");
  });
  // =============================
  // TEAM SHOW MORE
  // =============================
  $(document).ready(function () {
    $(".team__grid-wrap").css("height", $(".team__cell").height()+"px");
  })
  $(window).on("load resize", function () {
    $(".team__grid-wrap").css("height", $(".team__cell").height() + "px");
  })
  $(document).on("click", ".team__show-more-btn", async function () {
    $(".team__grid-wrap").animate({ height: $(".team__grid").height() + "px" }, 1000)
    $(this).fadeOut()
    await sleep(1000);
    $(".team__grid-wrap").addClass('shown');

  });
});
