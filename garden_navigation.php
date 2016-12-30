<div class="garden-navigation">
  <?php
    $prev_url = 'garden3.php';
    $next_url = 'garden2.php';

    if ( preg_match( '/^\/garden2/', $_SERVER['REQUEST_URI'] ) ) {
      $prev_url = 'garden1.php';
      $next_url = 'garden3.php';
    } else if ( preg_match( '/^\/garden3/', $_SERVER['REQUEST_URI'] ) ) {
      $prev_url = 'garden2.php';
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
