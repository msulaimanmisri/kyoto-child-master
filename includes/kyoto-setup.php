<?php

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */

function hello_elementor_child_enqueue_scripts()
{
    wp_enqueue_style(
        'hello-elementor-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        [
            'hello-elementor-theme-style',
        ],
        '1.0.0'
    );

    // bootstrap
    wp_enqueue_style(
        'hello-elementor-child-bootstrap-style',
        get_stylesheet_directory_uri() . '/css/bootstrap.min.css',
        [],
        '1.0.0'
    );
}
