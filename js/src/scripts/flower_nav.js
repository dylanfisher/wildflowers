$(document).on('mouseenter', '.flower-nav__leaf', function() {
  var $leaf = $(this);
  var orientation = $leaf.attr('data-orientation');
  var $leafTitles = $('.flower-nav__leaf__title');
  var $leafTitle = $('.flower-nav__leaf__title[data-orientation="' + orientation + '"]');
  var $initialActive = $leafTitles.closest('.initial-active');

  var chime = new Audio('audio/chime.wav');
  chime.volume = 0.5;
  chime.play();

  $leafTitles.removeClass('active');
  $leafTitle.addClass('active');
});

$(document).on('mouseleave', '.flower-nav__leaf', function() {
  var $leafTitles = $('.flower-nav__leaf__title');
  var $initialActive = $leafTitles.closest('.initial-active');

  $leafTitles.removeClass('active');
  $initialActive.addClass('active');
});

// Fix a problem where some browsers don't like anchors inside svg elements
$(document).on('click', '.flower-nav__leaf a', function(e) {
  var url = $(this).attr('href');

  if ( e.ctrlKey || e.shiftKey || e.metaKey || ( e.button && e.button == 1 ) ) {
    window.open( url );
  } else {
    window.location = url;
  }
});
