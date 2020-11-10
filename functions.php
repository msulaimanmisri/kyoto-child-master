<?php

/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

// Includes
include(get_theme_file_path('/includes/kyoto-widgets.php'));
include(get_theme_file_path('/includes/kyoto-remove-page-builder.php'));
include(get_theme_file_path('/includes/kyoto-register-nav.php'));
include(get_theme_file_path('/includes/kyoto-filtering.php'));
include(get_theme_file_path('/includes/kyoto-rent-field.php'));
include(get_theme_file_path('/includes/kyoto-product-sub-title.php'));
include(get_theme_file_path('/includes/kyoto-setup.php'));

//  Setup



// Hooks
add_action('wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts');
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);


// Shortcodes