<?php
function mytheme_add_theme_scripts() {
  wp_deregister_script( 'jquery' );
  wp_register_style( 'style', get_stylesheet_uri(),
    array(), '2017111801', 'all' );
  wp_register_script( 'bootstrap',
    get_template_directory_uri() .
    '/node_modules/bootstrap/dist/js/bootstrap.min.js',
    array( 'jquery', 'popper' ), '2017111901', true );
  wp_register_script( 'jquery',
    get_template_directory_uri() .
    '/node_modules/jquery/dist/jquery.min.js',
    array(), '2017111901', true );
  wp_register_script( 'popper',
    get_template_directory_uri() .
    '/node_modules/popper.js/dist/umd/popper.min.js',
    array(), '2017111901', true );
  wp_enqueue_style( 'style' );
  wp_enqueue_script( 'bootstrap' );
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'popper' );
}
function mytheme_register_my_menus() {
  register_nav_menu( 'header', __( 'Header' ) );
}
function mytheme_nav_menu_css_class($classes, $item, $args) {
  $classes[] = 'nav-item';
  return $classes;
}
function mytheme_wp_nav_menu($ulclass) {
  return preg_replace( '/<a /', '<a class="nav-link"', $ulclass );
}
add_theme_support( 'post-thumbnails' );
add_action( 'init', 'mytheme_register_my_menus' );
add_action( 'wp_enqueue_scripts', 'mytheme_add_theme_scripts' );
add_filter( 'nav_menu_css_class', 'mytheme_nav_menu_css_class', 10, 3 );
add_filter( 'wp_nav_menu', 'mytheme_wp_nav_menu' );
