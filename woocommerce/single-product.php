<?php
/*
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

get_header(); ?>

<div class="container text-center mt-4 pb-5">
    <h3>COLLECTION</h3>
    <p>振袖コレクション</p>
</div>

<div class="container mb-5">
    <div class="row">
        <div class="col-6">
            <div class="card">
                image
            </div>
        </div>

        <div class="col-6">
            <div class="card">
                <?php
                add_action('woocommerce_before_single_product_summary', 10);
                ?>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <?php while (have_posts()) : ?>
        <?php the_post(); ?>

        <?php wc_get_template_part('content', 'single-product'); ?>

    <?php endwhile; // end of the loop. 
    ?>
</div>

<?php
/**
 * woocommerce_after_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action('woocommerce_after_main_content');
?>

<?php
/**
 * woocommerce_sidebar hook.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action('woocommerce_sidebar');
?>

<div class="container-fluid bg-dark">
    <div class="container pt-3">
        <div class="row">
            <?php woocommerce_breadcrumb(); ?>
        </div>
    </div>
</div>

<?php
get_footer();


/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
