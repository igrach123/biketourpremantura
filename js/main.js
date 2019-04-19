// @koala-prepend "owl.carousel.min.js"
// @koala-prepend "blueimp-gallery.min.js"
// @koala-prepend "galerije.js"
// @koala-prepend "jquery.matchHeight.js"
// @koala-prepend "smooth-scroll.min.js"
// @koala-prepend "echo.min.js"

//image preloader
echo.init({
  callback: function(element, op) {
    console.log(element, "has been", op + "ed");
  }
});

// echo.render(); is also available for non-scroll callbacks

//match heoght group 1
$(function() {
  $(".item").matchHeight(options);
});

//Owl Carousel 2
$(document).ready(function() {
  $("#testimonial-slider").owlCarousel({
    items: 5,
    responsiveClass: true,
    itemsDesktop: [1000, 5],
    itemsDesktopSmall: [979, 4],
    itemsTablet: [767, 3],
    pagination: false,
    transitionStyle: "fade",
    navigation: true,
    navigationText: [
      "<i class='fa fa-chevron-left fa-3x'></i>",
      "<i class='fa fa-chevron-right fa-3x'></i>"
    ],
    autoPlay: true
  });
});

//Navbar Scroll Event
var lastScrollTop = 0;
var navbar = $(".navbar");
$(window).scroll(function(event) {
  var st = $(this).scrollTop();
  if (st > lastScrollTop) {
    navbar.addClass("navbar-scroll-custom");
  } else {
    navbar.removeClass("navbar-scroll-custom");
  }
  lastScrollTop = st;
});

// change naviagtion color on scroll
$(function() {
  var nav = $("nav");
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 150) {
      nav.addClass("bg-trans");
    } else {
      nav.removeClass("bg-trans");
    }
  });
});
//change logo on scroll
$(function() {
  var header = $("#logo1");
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 150) {
      header.addClass("smaller");
    } else {
      header.removeClass("smaller");
    }
  });
});
//change logo on scroll
$(function() {
  var header = $("#lang-id");
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 150) {
      header.addClass("smaller");
    } else {
      header.removeClass("smaller");
    }
  });
});

/*maps unclickable*/
$(".maps").click(function() {
  $(".maps iframe").css("pointer-events", "auto");
});

$(".maps").mouseleave(function() {
  $(".maps iframe").css("pointer-events", "none");
});

// closen hamburger nav on click
$(function() {
  $(".nav a").on("click", function() {
    if ($(".navbar-toggle").css("display") != "none") {
      $(".navbar-toggle").trigger("click");
    }
  });
});

//smoth scroll initialisation
smoothScroll.init();

//back to top icona
$("body").prepend('<a href="#navigation" class="back-to-top"></a>');
var amountScrolled = 300;

$(window).scroll(function() {
  if ($(window).scrollTop() > amountScrolled) {
    $("a.back-to-top").fadeIn("slow");
  } else {
    $("a.back-to-top").fadeOut("slow");
  }
});
$("a.back-to-top").click(function() {
  $("html, body").animate(
    {
      scrollTop: 0
    },
    700
  );
  return false;
});

window.addEventListener(
  "load",
  function() {
    var allimages = document.getElementsByTagName("img");
    for (var i = 0; i < allimages.length; i++) {
      if (allimages[i].getAttribute("data-src")) {
        allimages[i].setAttribute("src", allimages[i].getAttribute("data-src"));
      }
    }
  },
  false
);
