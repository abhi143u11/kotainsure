<?php

// Setup



// Includes
include(get_template_directory().'/includes/front/enqueue.php');
include(get_template_directory().'/includes/setup.php');

// Hooks

add_action('wp_enqueue_scripts', 'kota_enqueue');
add_action('after_setup_theme','kota_setup_theme');

// Shortcodes


//Remove all auto added p tags
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );