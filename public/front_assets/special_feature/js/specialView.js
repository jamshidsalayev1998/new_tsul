/**
 * Created by Azamat Mirvosiqov on 29.01.2015.
 */

var min = 14,
  max = 30;

function setFontSize(size) {
  if (size < min) {
    size = min;
  }
  if (size > max) {
    size = max;
  }

  $("").css({ "font-size": parseInt(size) - 2 + "px" }); /*12*/
  $(".text-dark, .responsive-world-text, .card-text a, span, p, h1, h2, h3, h4, h5, h6, div, b, bold, strong, i, ul, li, ol, section, button, .btn, .main_links, .link_to_site, .owlItems, .open-button").css({
    "font-size": parseInt(size) + "px",
  }); /*14*/
  $(".menu-bar, .special, .mx-2, .text-center, .row, .card-title").css({
    "font-size": parseInt(size) + 2 + "px",
  }); /*16*/
  $("").css({ "font-size": parseInt(size) + 4 + "px" }); /*18*/
  $(".news-name h4").css({ "font-size": parseInt(size) + 10 + "px" }); /*24*/
  $("").css({ "font-size": parseInt(size) + 14 + "px" }); /*28*/

  /* TODO - Add font options */
}

function makeNormal() {
  $("html").removeClass("blackAndWhite blackAndWhiteInvert");
  $.removeCookie("specialView", { path: "/" });
}

function makeBlackAndWhite() {
  makeNormal();
  $("html").addClass("blackAndWhite");
  $.cookie("specialView", "blackAndWhite", { path: "/" });
}

function makeBlackAndWhiteDark() {
  makeNormal();
  $("html").addClass("blackAndWhiteInvert");
  $.cookie("specialView", "blackAndWhiteInvert", { path: "/" });
}

function saveFontSize(size) {
  $.cookie("fontSize", size, { path: "/" });
}

function changeSliderText(sliderId, value) {
  var position = Math.round(Math.abs((value - min) * (100 / (max - min))));
  $("#" + sliderId)
    .prev(".sliderText")
    .children(".range")
    .text(position);
}

$(document).ready(function () {
  var appearance = $.cookie("specialView");
  switch (appearance) {
    case "blackAndWhite":
      makeBlackAndWhite();
      break;
    case "blackAndWhiteInvert":
      makeBlackAndWhiteDark();
      break;
  }

  $(".no-propagation").click(function (e) {
    e.stopPropagation();
  });
  $(".appearance .spcNormal").click(function () {
    makeNormal();
  });
  $(".appearance .spcWhiteAndBlack").click(function () {
    makeBlackAndWhite();
  });
  $(".appearance .spcDark").click(function () {
    makeBlackAndWhiteDark();
  });

  $("#fontSizer").slider({
    min: min,
    max: max,
    range: "min",
    slide: function (event, ui) {
      setFontSize(ui.value);
      changeSliderText("fontSizer", ui.value);
    },
    change: function (event, ui) {
      saveFontSize(ui.value);
    },
  });

  var fontSize = $.cookie("fontSize");
  if (typeof fontSize != "undefined") {
    $("#fontSizer").slider("value", fontSize);
    setFontSize(fontSize);
    changeSliderText("fontSizer", fontSize);
  }

  /****************zoomSizer********************/
  $("#zoomSizer").slider({
    min: minzoom,
    max: maxzoom,
    range: "min",
    slide: function (event, ui) {
      setzoomSizer(ui.value);
      changeSliderTextZoom("zoomSizer", ui.value);
    },
    change: function (event, ui) {
      savezoomSizer(ui.value);
    },
  });

  var zoomSizer = $.cookie("zoomSizer");
  if (typeof zoomSizer != "undefined") {
    $("#zoomSizer").slider("value", zoomSizer);
    setzoomSizer(zoomSizer);
    changeSliderTextZoom("zoomSizer", zoomSizer);
  }
});

var minzoom = 0,
  maxzoom = 5; /** максимум 5 **/

function savezoomSizer(size) {
  $.cookie("zoomSizer", size, { path: "/" });
}

function changeSliderTextZoom(sliderId, value) {
  var position = Math.round(Math.abs(100 - 20 * (maxzoom - value)));
  $("#" + sliderId)
    .prev(".sliderZoom")
    .children(".range")
    .text(position);
}
function setzoomSizer(size) {
  if (size < minzoom) {
    size = minzoom;
  }
  if (size > maxzoom) {
    size = maxzoom;
  }
  $("body").css({
    zoom: "1." + parseInt(size),
    "-ms-zoom": "1." + parseInt(size),
    "-webkit-zoom": "1." + parseInt(size),
    "-moz-zoom": "1." + parseInt(size),
    "-o-zoom": "1." + parseInt(size),
    "-moz-transform": "scale(1." + parseInt(size) + ")",
    "-webkit-transform": "scale(1." + parseInt(size) + ")",
    transform: "scale(1." + parseInt(size) + ")",
    "margin-top": "" + (parseInt(size) + 20) + "%",
  });
}
