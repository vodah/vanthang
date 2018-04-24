<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vanthang
 */

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php
            while (have_posts()) :the_post();

                ?>
                <header class="archive-header">
                    <div class="wp-slogan-page">
                        <div class="container">
                            <div class="slogan-page">
                           <span>
                               <?php
                               echo get_field("thong_tin", '1404');
                               ?>
                           </span>
                            </div>
                        </div>
                    </div>
                </header>

                <section class="sec-ctsp-sanpham">
                    <div class="title-ctsp wow fadeInUp" data-wow-duration="1.8s">
                        <div class="container">
                            <h1 class="xanh"><?php the_title(); ?></h1>
                            <p><?= get_field('short_description', get_the_ID()) ?></p>
                        </div>
                    </div>
                    <div class="wp-ctsp">
                        <div class="wp-slider-ctsp">
                            <div id="slider-ctsp" class="owl-carousel owl-theme" >
                                <?php $anh_san_pham = get_field('anh_san_pham', get_the_ID());
//
                                $key =0;
                                foreach ($anh_san_pham as $item) {
                                    $key++;
                                    ?>
                                    <div class="item">
                                        <div class="wp-slider-img-ctsp" >
                                            <img width="100%" height="370" src="<?=$item['url']?>" alt="">
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="wp-content-ctsp">
                            <div class="container">
                                <div class="content-ctsp  wow fadeInUp" data-wow-duration="0.8s">
                                    <p> <?= the_content(); ?></p>
                                    <div class="btnlienhe wow animated zoomIn">
                                        <a href="<?php the_permalink(1594) ?>" class="btn btn-do btn-lienhe">Liên hệ đặt sản phẩm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php

            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php

get_footer();
