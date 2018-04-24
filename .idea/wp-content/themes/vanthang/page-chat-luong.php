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
            while (have_posts()) :
            the_post();
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

            <section id="v-content" class="sec-chi-tiet-tin">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-8 vttcnt">

                            <h1><?php the_title(); ?></h1>
                            <i> <?= the_date('d/m/Y'); ?></i>
                            <div>
                                <i><?= get_field('short_description', get_the_ID()) ?></i>
                                <?= the_post_thumbnail(get_the_ID()) ?>
                                <p>
                                    <?= the_content(); ?>
                                </p>
                            </div>
                        </div>
                        <?php


                        endwhile;
                        ?>
                        <div class="col-xs-12 col-md-4 vsidebar">
                            <div class="vsidebar-til">Tin liên quan</div>
                            <ul>
                                <?php $query = new WP_Query(array('posts_per_page' => 3, 'post__not_in' => array(get_the_ID())));

                                foreach ($query->posts as $value) {
                                    ?>
                                    <li class="vsidebar-tin">
                                        <a href="<?php the_permalink($value->ID) ?>"><?= get_the_post_thumbnail($value->ID, 'tin_tuc_home') ?></a>
                                        <div>
                                            <a href="<?php the_permalink($value->ID) ?>">
                                                <h3><?= $value->post_title ?></h3></a>
                                            <i> <?= the_date('d/m/Y'); ?></i>
                                            <p><?= get_field('short_description', $value->ID) ?></p>

                                        </div>
                                    </li>
                                <?php } ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </section>


        </main><!-- #main -->
    </div><!-- #primary -->

<?php

get_footer();
