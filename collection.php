<?php

/**
 * Template Name: Child - collection
 * 
 * Collection page template
 * 
 * @package HelloElementorChild
 */
get_header();

// Woocommerce args
require('includes/kyoto-product-class.php');
?>

<?php if (!defined('ABSPATH')) {
    exit;
}; ?>

<style>
    .nopadding {
        padding: 0px !important;
        margin: 0px !important;
    }

    .smallpadding {
        padding: 3px !important;
    }

    .sticky {
        position: sticky;
        top: 0;
    }
</style>

<!-- Title -->
<div class="container text-center mt-5">
    <h3>COLLECTION</h3>
    <p>振袖コレクション</p>
</div>

<!-- Filter & Product Section-->
<div class="container mt-5">
    <div class="row">
        <div class="col-2 sticky-top">
            <?php echo do_shortcode('[searchandfilter id="primary_filters"]'); ?>
        </div>


        <!-- Featured Product -->
        <div class="col-10 pl-5">
            <p>振袖人気ランキング</p>
            <div class="row">
                <?php if ($product_result_featured->have_posts()) {
                    while ($product_result_featured->have_posts()) : $product_result_featured->the_post(); ?>
                        <div class="col-md-4 pb-4">
                            <div class="card ">
                                <?php the_post_thumbnail(); ?>
                            </div>

                            <div class="pt-3">
                                <?php the_title(); ?>
                                <hr>
                            </div>

                            <div class="">
                                <p>正絹 お仕立上りレンタル(レトロモダン/赤)</p>
                                <p>レンタル : <?php echo woocommerce_template_loop_price(); ?></p>
                                <p>rent : <?php echo get_post_meta($post->ID, '_custom_product_text_field', true); ?></p>
                            </div>
                        </div>
                <?php endwhile;
                }; ?>
            </div>

            <!-- Classic section -->
            <div class="alert alert-secondary p-4 mt-4" role="alert">
                <div class="row">
                    <div class="col-2 border-right border-dark">
                        <h4>Classic</h4>
                    </div>
                    <div class="col-10 pl-5"> 「クラシック」な新作振袖コレクションです。振袖に似合う、成人式らしい装いを。成人式の振袖レンタル、販売は京都きもの友禅。</div>
                </div>
            </div>

            <div class="container nopadding">
                <div class="row pt-3">
                    <?php if ($product_result_classic->have_posts()) {
                        while ($product_result_classic->have_posts()) : $product_result_classic->the_post(); ?>
                            <div class="col-md-3">
                                <div class="card ">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            </div>
                    <?php endwhile;
                    }; ?>
                </div>

                <div class="d-flex justify-content-end">
                    <button class="btn btn-outline-secondary mt-5"> クラシック一覧
                    </button>
                </div>

                <!-- Cute section -->
                <div class="alert alert-secondary p-4 mt-4" role="alert" style="background-color: #EDA9A9;">
                    <div class="row">
                        <div class="col-2 border-right border-white">
                            <h4 class="text-white"> Cute </h4>
                        </div>
                        <div class="col-10 pl-5">
                            <p class="text-white">「キュート」な新作振袖コレクションです。ハタチにお似合いの可愛らしさで。成人式の振袖レンタル、販売は京都きもの友禅。</p>
                        </div>
                    </div>
                </div>

                <div class="container nopadding">
                    <div class="row pt-3">
                        <?php if ($product_result_cute->have_posts()) {
                            while ($product_result_cute->have_posts()) : $product_result_cute->the_post(); ?>
                                <div class="col-md-3">
                                    <div class="card ">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                </div>
                        <?php endwhile;
                        }; ?>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button class="btn btn-outline-secondary mt-5"> クラシック一覧
                        </button>
                    </div>

                    <!-- Cool section -->
                    <div class="alert alert-dark p-4 mt-4" role="alert" style="background-color: #121F25;">
                        <div class="row">
                            <div class="col-2 border-right border-white">
                                <h4 class="text-white"> Cool </h4>
                            </div>
                            <div class="col-10 pl-5">
                                <p class="text-white">「キュート」な新作振袖コレクションです。ハタチにお似合いの可愛らしさで。成人式の振袖レンタル、販売は京都きもの友禅。</p>
                            </div>
                        </div>
                    </div>

                    <div class="container nopadding">
                        <div class="row pt-3">
                            <?php if ($product_result_cool->have_posts()) {
                                while ($product_result_cool->have_posts()) : $product_result_cool->the_post(); ?>
                                    <div class="col-md-3 pb-4">
                                        <div class="card ">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                    </div>
                            <?php endwhile;
                            }; ?>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button class="btn btn-outline-secondary mt-5"> クラシック一覧
                            </button>
                        </div>
                    </div>

                    <!-- Retro section -->
                    <div class="alert alert-dark p-4 mt-4" role="alert" style="background-color: #C0A68B;">
                        <div class="row">
                            <div class="col-2 border-right border-white">
                                <h4 class="text-white"> Retro </h4>
                            </div>
                            <div class="col-10 pl-5">
                                <p class="text-white">「キュート」な新作振袖コレクションです。ハタチにお似合いの可愛らしさで。成人式の振袖レンタル、販売は京都きもの友禅。</p>
                            </div>
                        </div>
                    </div>

                    <div class="container nopadding">
                        <div class="row pt-3">
                            <?php if ($product_result_retro->have_posts()) {
                                while ($product_result_retro->have_posts()) : $product_result_retro->the_post(); ?>
                                    <div class="col-md-3 pb-4">
                                        <div class="card ">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                    </div>
                            <?php endwhile;
                            }; ?>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button class="btn btn-outline-secondary mt-5"> クラシック一覧
                            </button>
                        </div>
                    </div>

                    <!-- Special Collection -->
                    <div class="row pt-5">
                        <div class="col-6 smallpadding">
                            <img class="" src="https://wordpress.test/wp-content/uploads/2020/11/title.png" alt="Card image cap">
                        </div>

                        <div class="col-6 d-flex flex-wrap">
                            <div class="row">
                                <div class="col-6 smallpadding">
                                    <img class="" src="https://wordpress.test/wp-content/uploads/2020/11/title.png" alt="Card image cap">
                                </div>

                                <div class="col-6 smallpadding">
                                    <img class="" src="https://wordpress.test/wp-content/uploads/2020/11/title.png" alt="Card image cap">
                                </div>

                                <div class="col-6 smallpadding">
                                    <img class="" src="https://wordpress.test/wp-content/uploads/2020/11/title.png" alt="Card image cap">
                                </div>

                                <div class="col-6 smallpadding">
                                    <img class="" src="https://wordpress.test/wp-content/uploads/2020/11/title.png" alt="Card image cap">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-5">
                        <button class="btn btn-outline-secondary"> クラシック一覧
                        </button>
                    </div>

                    <!-- Traditional Technique Collection -->
                    <div class="row mt-5">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6 smallpadding">
                                    <img src="https://wordpress.test/wp-content/uploads/2020/11/1.png" alt="">
                                </div>
                                <div class="col-6 smallpadding">
                                    <img src="https://wordpress.test/wp-content/uploads/2020/11/2.png" alt="">
                                </div>
                                <div class="col-6 smallpadding">
                                    <img src="https://wordpress.test/wp-content/uploads/2020/11/3.png" alt="">
                                </div>
                                <div class="col-6 smallpadding">
                                    <img src="https://wordpress.test/wp-content/uploads/2020/11/4.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-6 smallpadding" style="background-image: url(https://wordpress.test/wp-content/uploads/2020/11/トーンカーブ-1.png);">
                            <h3 class="p-4" style="color:#C19D22 ;">伝統技法コレクション</h3>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-5">
                        <button class="btn btn-outline-secondary"> クラシック一覧
                        </button>
                    </div>

                    <!-- Color filter -->
                    <p> 色別コレクション ( Color ) </p>
                    <div class="row mb-5">
                        <div class="col-2">
                            <div class="card">color here</div>
                        </div>
                        <div class="col-2">
                            <div class="card">color here</div>
                        </div>
                        <div class="col-2">
                            <div class="card">color here</div>
                        </div>
                        <div class="col-2">
                            <div class="card">color here</div>
                        </div>
                        <div class="col-2">
                            <div class="card">color here</div>
                        </div>
                        <div class="col-2">
                            <div class="card">color here</div>
                        </div>
                    </div>
                </div>

                <!-- Pricing filter -->
                <?php echo do_shortcode('[searchandfilter id="purchase_price"]'); ?>

                <!-- Rent filter -->
                <?php echo do_shortcode('[searchandfilter id="rent_price"]'); ?>

                <!-- FAQ filter -->
                <p>振袖に関するよくあるご質問</p>
                <img src="https://wordpress.test/wp-content/uploads/2020/11/Group-1.png" alt="">
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

<?php require_once('kyoto-footer.php'); ?>
<?php get_footer(); ?>