<div class="garden-navigation">
  <?php
    $prev_url = 'garden5.php';
    $next_url = 'garden2.php';

    $matches = array();
    $garden_index = null;
    $first_garden_index = 1;
    $last_garden_index = 5;

    if ( isset( $garden_to_feature ) ):
      preg_match( '/^garden(\d)/', $garden_to_feature, $matches );
      if ( !empty( $matches ) ):
        $garden_index = $matches[1];
      endif;
    endif;

    if ( !empty( $garden_index ) ):
      $prev_url_index = $garden_index == $first_garden_index ? $last_garden_index : $garden_index - 1;
      $next_url_index = $garden_index == $last_garden_index ? $first_garden_index : $garden_index + 1;

      $prev_url = 'garden' . $prev_url_index . '.php';
      $next_url = 'garden' . $next_url_index . '.php';
    endif;

    // TODO: DRY this up
    if ( preg_match( '/^\/garden1/', $_SERVER['REQUEST_URI'] ) ) {
      $prev_url = 'garden5.php';
      $next_url = 'garden2.php';
    } elseif ( preg_match( '/^\/garden2/', $_SERVER['REQUEST_URI'] ) ) {
      $prev_url = 'garden1.php';
      $next_url = 'garden3.php';
    } elseif ( preg_match( '/^\/garden3/', $_SERVER['REQUEST_URI'] ) ) {
      $prev_url = 'garden2.php';
      $next_url = 'garden4.php';
    } elseif ( preg_match( '/^\/garden4/', $_SERVER['REQUEST_URI'] ) ) {
      $prev_url = 'garden3.php';
      $next_url = 'garden5.php';
    } elseif ( preg_match( '/^\/garden5/', $_SERVER['REQUEST_URI'] ) ) {
      $prev_url = 'garden4.php';
      $next_url = 'garden1.php';
    }
  ?>
  <a href="<?php echo $prev_url; ?>" class="garden-navigation__arrow-link blank-link">
    <?php include 'images/ui/arrow-left.svg'; ?>
  </a>
  <div class="garden-navigation__title"><?php echo $garden_title; ?></div>
  <a href="<?php echo $next_url; ?>" class="garden-navigation__arrow-link blank-link">
    <?php include 'images/ui/arrow-right.svg'; ?>
  </a>
</div>
