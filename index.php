<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php $garden_count = 5; ?>
<?php $garden_to_feature = 'garden' . rand( 1, $garden_count ) . '.php'; ?>
<?php include $garden_to_feature; ?>
