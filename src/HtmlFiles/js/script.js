$(window).on("load",function(){
  $(".loader-wrapper").fadeOut("slow");
});

jQuery(document).ready(function ($) {
  $(window).scroll(function () {
    var scrollPosition = $(window).scrollTop(),
      navbar = $(".fixed-top");
    if (scrollPosition > 1) {
      navbar.addClass("change-fix-top");
    } else {
      navbar.removeClass("change-fix-top");
    }
  });
});

 
jQuery(document).ready(function ($) {
  $(window).scroll(function () {
    var scrollPosition = $(window).scrollTop(),
      navbar = $(".fixed-top");
    if (scrollPosition > 1) {
      navbar.addClass("change-fix-top");
    } else {
      navbar.removeClass("change-fix-top");
    }
  });
});



new WOW().init();
var scroll = new SmoothScroll('a[href*="#"]');

function DisplayBlock() {
  var item = document.getElementById("Ulmiz").style.display;
  if (item != "block") {
    document.getElementById("Ulmiz").style.display = "block";
  }
  if (item == "block") {
    document.getElementById("Ulmiz").style.display = "none";
  }
}

function DisplayNone() {
  var item = document.getElementById("Ulmiz").style.display;
  if (item == "block") {
    document.getElementById("Ulmiz").style.display = "none";
  }
}




$(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
    navigation : true
  });
 
});

$('.owl-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:3
      },
      1000:{
          items:5
      }
  }
})