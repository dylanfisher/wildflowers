// Global namespace, window variables, etc.

$ = jQuery;

var App = {
  windowWidth: $(window).width(),
  windowHeight: $(window).height(),
  scrollTop: $(window).scrollTop(),
};

$(window).resize(function() {
  App.windowWidth  = $(window).width();
  App.windowHeight = $(window).height();
});

$(window).scroll(function() {
  App.scrollTop = $(window).scrollTop();
});

App.breakpoint = function(checkIfSize) {
  var xs = 480;
  var sm = 768;
  var md = 992;
  var lg = 1200;
  var breakpoint;

  if(App.windowWidth < xs) {
    breakpoint = 'xs';
  } else if(App.windowWidth >= md) {
    breakpoint = 'lg';
  } else if(App.windowWidth >= sm) {
    breakpoint = 'md';
  } else {
    breakpoint = 'sm';
  }

  if(checkIfSize !== undefined) {
    if(checkIfSize == 'xs') {
      return App.windowWidth < xs;
    } else if(checkIfSize == 'sm') {
      return (App.windowWidth >= xs && App.windowWidth < sm);
    } else if(checkIfSize == 'md') {
      return (App.windowWidth >= sm && App.windowWidth < md);
    } else if(checkIfSize == 'lg') {
      return App.windowWidth >= md;
    }
  } else {
    return breakpoint;
  }
};

App.breakpoint.isMobile = function() {
  return ( App.breakpoint('xs') || App.breakpoint('sm') );
};

$(document).on('mouseenter', '.flower-nav__leaf', function() {
  var $leaf = $(this);
  var orientation = $leaf.attr('data-orientation');
  var $leafTitles = $('.flower-nav__leaf__title');
  var $leafTitle = $('.flower-nav__leaf__title[data-orientation="' + orientation + '"]');
  var $initialActive = $leafTitles.closest('.active');
  console.log($initialActive);

  $initialActive.attr('data-initialActive', true);
  $leafTitles.removeClass('active');
  $leafTitle.addClass('active');
});

$(document).on('mouseleave', '.flower-nav__leaf', function() {
  var $leafTitles = $('.flower-nav__leaf__title');
  var $initialActive = $leafTitles.closest('[data-initialActive="true"]');

  $leafTitles.removeClass('active');
  $initialActive.addClass('active');
});

$(function() {
  var $viewport = $('.parallax-viewport');
  var $layers = $viewport.find('.parallax-layer');

  $(document).on('mousemove', function(e) {
    var offsetX = e.offsetX;
    var offsetY = e.offsetY;
    $layers.css({ bottom: 'auto' });

    $layers.each(function(index) {
      parallax(e, this, index + 1);
    });
  });

  function parallax(e, target, layer) {
    var layerCoeffX = ( App.windowWidth / 19 ) / layer;
    var layerCoeffY = ( App.windowHeight / 23 ) / layer;
    var x = ( $(window).width() - target.offsetWidth) / 2 - (e.pageX - ($(window).width() / 2) ) / layerCoeffX;
    var y = ( $(window).height() - target.offsetHeight) / 2 - (e.pageY - ($(window).height() / 2) ) / layerCoeffY;

    $(target).offset({ top: y, left : x });
  }
});
