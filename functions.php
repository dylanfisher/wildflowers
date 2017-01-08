<?php

function home_page_classes() {
  $is_home_page = preg_match( '/^(\/$|\/garden)/', $_SERVER['REQUEST_URI'] );
  return $is_home_page ? 'home' : '';
}
