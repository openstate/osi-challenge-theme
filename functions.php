<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
  global $post;
  return '&nbsp;&nbsp;&nbsp;<a class="moretag" href="' . get_permalink($post->ID) . '"><img class="img-responsive post-arrow" src="' . get_template_directory_uri() . '/dist/images/app-challenge-arrow-red.svg" alt="Pijl"></a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Add square thumbnails https://stackoverflow.com/questions/14642567/big-square-wordpress-post-thumbnails
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'square-large', 350, 350, true); // name, width, height, crop
    add_filter('image_size_names_choose', 'my_image_sizes');
}

function my_image_sizes($sizes) {
    $addsizes = array(
        "square-large" => __( "Large square image")
    );
    $newsizes = array_merge($sizes, $addsizes);
    return $newsizes;
}
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'square-large-xs-sm', 660, 250, true); // name, width, height, crop
    add_filter('image_size_names_choose', 'my_image_sizes2');
}

function my_image_sizes2($sizes) {
    $addsizes = array(
        "square-large-xs-sm" => __( "Large image for xs and sm")
    );
    $newsizes = array_merge($sizes, $addsizes);
    return $newsizes;
}
