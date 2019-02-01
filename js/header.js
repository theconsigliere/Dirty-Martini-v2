var $el = jQuery(".fullscreen"); //record the elem so you don't crawl the DOM everytime
var bottom = $el.position().top + $el.outerHeight(true); // passing "true" will also include the top and bottom margin

jQuery(document).ready(function() {
  jQuery(".site-branding").css("margin-top", "3rem");
  jQuery(".ssb-btns-right").css("opacity", "0");
});

jQuery(window).scroll(function() {
  if (jQuery(window).scrollTop() > bottom) {
    jQuery(".site-header").addClass("scrolled");
    jQuery(".hashtag").css("color", "black");
    jQuery(".change-my-color").css("fill", "black");
    jQuery(".logo").css("height", "120px");
    jQuery(".site-branding").css("margin-top", "0rem");
    jQuery(".ssb-btns-right").css("opacity", "1");
  } else {
    jQuery(".site-header").removeClass("scrolled");
    jQuery(".hashtag").css("color", "white");
    jQuery(".change-my-color").css("fill", "white");
    jQuery(".logo").css("height", "180px");
    jQuery(".site-branding").css("margin-top", "3rem");
    jQuery(".ssb-btns-right").css("opacity", "0");
  }
});

// jQuery(window).scroll(function opacit() {
//   jQuery(".fullscreen").css("opacity", 1 - jQuery(window).scrollTop() / 300);
// });

// var opacitiy = opacit();

// jQuery(document).scroll(function() {
//   if (jQuery(opacitiy) <= 0) {
//     jQuery(".hashtag").css("color", "black");
//     jQuery(".change-my-color").css("fill", "black");
//   } else {
//     jQuery(".hashtag").css("color", "white");
//     jQuery(".change-my-color").css("fill", "white");
//   }
// });
