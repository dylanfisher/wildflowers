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
