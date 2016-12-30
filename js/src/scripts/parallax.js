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
    var layerCoeffY = ( App.windowHeight / 26 ) / layer;
    var x = ( $(window).width() - target.offsetWidth) / 2 - (e.pageX - ($(window).width() / 2) ) / layerCoeffX;
    var y = ( $(window).height() - target.offsetHeight) / 2 - (e.pageY - ($(window).height() / 2) ) / layerCoeffY;

    $(target).offset({ top: y, left : x });
  }
});
