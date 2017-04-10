<?php include 'header.php'; ?>

<?php $garden_number = 4; ?>
<?php $garden_layers = 3; ?>

<div class="parallax-viewport parallax-viewport--<?php echo $garden_number; ?>">
  <?php $i = 0; ?>
  <?php while ( $i <= $garden_layers ): ?>
    <div class="parallax-layer parallax-layer--<?php echo $i; ?>"><img src="images/garden<?php echo $garden_number; ?>/<?php echo $i; ?>.svg"></div>
    <?php $i++; ?>
  <?php endwhile; ?>
</div>

<?php $garden_title = 'In joy or sadness flowers are our constant friends.'; ?>

<?php include 'footer.php'; ?>
