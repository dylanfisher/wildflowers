  <?php if ( $_SERVER['REQUEST_URI'] == '/' || preg_match( '/^\/garden\d/', $_SERVER['REQUEST_URI'] ) ): ?>
    <?php include 'garden_navigation.php'; ?>
  <?php endif; ?>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/lib/jquery-1.11.2.min.js"><\/script>')</script>
  <script src="js/dist/application.min.js"></script>
  <script>
    // (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    // function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    // e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    // e.src='//www.google-analytics.com/analytics.js';
    // r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    // ga('create','UA-XXXXX-X','auto');ga('send','pageview');
  </script>
</body>
</html>
