<?php include 'header.php'; ?>

<?php $garden_number = 5; ?>
<?php $garden_layers = 2; ?>

<div class="parallax-viewport parallax-viewport--<?php echo $garden_number; ?>">
  <?php $i = 0; ?>
  <?php while ( $i <= $garden_layers ): ?>
    <div class="parallax-layer parallax-layer--<?php echo $i; ?>"><img src="images/garden<?php echo $garden_number; ?>/<?php echo $i; ?>.svg"></div>
    <?php $i++; ?>
  <?php endwhile; ?>
</div>

<?php $garden_title = 'I would like to paint the way a bird sings.'; ?>

<?php include 'footer.php'; ?>
