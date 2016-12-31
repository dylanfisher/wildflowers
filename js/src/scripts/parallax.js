$(function() {
  var $viewport = $('.parallax-viewport');
  var $layers = $viewport.find('.parallax-layer');

  $(document).on('mousemove', function(e) {
    $layers.each(function(index) {
      parallax(e, this, index + 1);
    });
  });

  function parallax(e, target, layer) {
    var layerCoeffX = ( App.windowWidth / 19 ) / layer;
    var layerCoeffY = ( App.windowHeight / 26 ) / layer;
    var x = ( App.windowWidth - target.offsetWidth) / 2 - (e.pageX - (App.windowWidth / 2) ) / layerCoeffX;
    var y = ( App.windowHeight - target.offsetHeight) / 2 - (e.pageY - (App.windowHeight / 2) ) / layerCoeffY;

    $(target).css({ transform: 'translate(' + x + 'px, ' + y + 'px)' });
  }
});
