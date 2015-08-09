<?php

/* * ---------------------------------------------
  | Load any CSS or JS files needed for the theme
 */

function resources_150908() {
  wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'resources_150908');