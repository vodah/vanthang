<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vanthang
 */

get_header();
//$agrs = array(
//    'post_type' => 'san_pham',
//    'posts_per_page' => 6,
//);
//$san_pham = new WP_Query($agrs);
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="wp-slogan-page">
            <div class="container">
                <div class="slogan-page">
                <span>
                    <?= get_field("thong_tin", '1404');
                    ?>
                </span>
                </div>
            </div>
        </div>

        <section class="sec-sp-sanpham">
            <div class="container">
                <div class="title-page-con">
                    <h1 class="xanh">Sản phẩm</h1>
                    <!--                --><?php //$product_highlights = get_field('product_highlights', 1404);
                    //                $count = 0;
                    //                foreach ($product_highlights as $i) {
                    //                    $count++;
                    //                }
                    //
                    //                ?>
                    <!--                <span>--><? //= $count; ?><!-- sản phẩm</span>-->
                </div>
                <div class="wp-list-sp-sanpham">
                    <div class="row">

                        <?php
                        while (have_posts()) :the_post();
                            ?>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="wp-item-sp">
                                    <div class="img-sp">
                                        <a href="<?php the_permalink() ?>">
                                            <?= get_the_post_thumbnail(get_the_ID(), 'san_pham_home') ?>
                                        </a>
                                    </div>
                                    <div class="text-sp">
                                        <h4 class="title-sp"><?php the_title(); ?></h4>
                                        <p class="p-sp"><?= get_field('short_description', get_the_ID()) ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; // End of the loop.
                        ?>


                    </div>
                    <div class="load-ajax">
                        <div class="loader"><img src="<?= get_template_directory_uri(); ?>/images/load-more.png"></div>
                        <p>Tải thêm</p>
                    </div>

        </section>
    </main><!-- #main


    <?php
    get_footer();
    ?>
