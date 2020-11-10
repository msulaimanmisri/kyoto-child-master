<?php
// Woocommerce args
$kyoto_product_featured = [
    'post_type' => 'product',
    'tax_query' => array(
        array(
            'taxonomy' => 'product_visibility',
            'field'    => 'name',
            'terms'    => 'featured',
        ),
    )
];

$kyoto_product_classic = [
    'post_type' => 'product',
    'tax_query' => array(
        array(
            'taxonomy' => 'product_cat',
            'field' => 'slug',
            'terms' => 'classic',
        ),
    )
];

$kyoto_product_cute = [
    'post_type' => 'product',
    'tax_query' => array(
        array(
            'taxonomy' => 'product_cat',
            'field' => 'slug',
            'terms' => 'cute',
        ),
    )
];

$kyoto_product_cool = [
    'post_type' => 'product',
    'tax_query' => array(
        array(
            'taxonomy' => 'product_cat',
            'field' => 'slug',
            'terms' => 'cool',
        ),
    )
];

$kyoto_product_retro = [
    'post_type' => 'product',
    'tax_query' => array(
        array(
            'taxonomy' => 'product_cat',
            'field' => 'slug',
            'terms' => 'retro',
        ),
    )
];


$product_result_featured = new WP_Query($kyoto_product_featured);
$product_result_classic = new WP_Query($kyoto_product_classic);
$product_result_cute = new WP_Query($kyoto_product_cute);
$product_result_cool = new WP_Query($kyoto_product_cool);
$product_result_retro = new WP_Query($kyoto_product_retro);
