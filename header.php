<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="favicon.png" rel="shortcut icon">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="wildflowers-logo-wrapper">
    <a href="/">
      <?php include 'images/ui/wildflowers-logo.svg'; ?>
    </a>
  </div>
  <nav>
    <?php include 'images/ui/flower-nav.svg'; ?>
    <span class="flower-nav__leaf__title flower-nav__leaf__title--top <?php echo preg_match( '/^\/info/', $_SERVER['REQUEST_URI'] ) ? 'active initial-active' : ''; ?>" data-orientation="top">Info</span>
    <span class="flower-nav__leaf__title flower-nav__leaf__title--top-left <?php echo preg_match( '/^\/purchase/', $_SERVER['REQUEST_URI'] ) ? 'active initial-active' : ''; ?>" data-orientation="top-left">Purchase</span>
    <span class="flower-nav__leaf__title flower-nav__leaf__title--top-right <?php echo preg_match( '/^\/archive/', $_SERVER['REQUEST_URI'] ) ? 'active initial-active' : ''; ?>" data-orientation="top-right">Archive</span>
    <span class="flower-nav__leaf__title flower-nav__leaf__title--bottom-left <?php echo preg_match( '/^\/colophon/', $_SERVER['REQUEST_URI'] ) ? 'active initial-active' : ''; ?>" data-orientation="bottom-left">Colophon</span>
    <span class="flower-nav__leaf__title flower-nav__leaf__title--bottom-right <?php echo preg_match( '/^\/submit/', $_SERVER['REQUEST_URI'] ) ? 'active initial-active' : ''; ?>" data-orientation="bottom-right">Submit</span>
  </nav>
