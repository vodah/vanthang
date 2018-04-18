<?php
/**
 * A Simple Category Template
 */

get_header(); ?>

    <section id="primary" class="site-content">
        <div id="content" role="main">
            <?php
            // Check if there are any posts to display
            if (have_posts()) : ?>

            <header class="archive-header">
                <?php
                // Since this template will only be used for Design category
                // we can add category title and description manually.
                // or even add images or change the layout
                ?>

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

            <section class="sec-tt-tintuc">
                <div class="container">
                    <div class="title-page-con">
                        <h1 class="xanh">Tin tức</h1>
                    </div>

                    <div class="wp-list-tt-tintuc">
                        <div class="row">
                            <?php
                            while (have_posts()) : the_post();
                                ?>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="wp-item-tintuc">
                                        <div class="img-tintuc">
                                            <a href="<?php the_permalink() ?>">
                                                <?= get_the_post_thumbnail(get_the_ID(), 'tin_tuc_home') ?>
                                            </a>
                                        </div>
                                        <div class="text-tintuc">
                                            <h4 class="tt-tintuc"><?php the_title(); ?></h4>
                                            <p class="date-time"></p>
                                            <p class="mota-2"><?= get_field('short_description', get_the_ID()) ?></p>
                                            <a href="<?php the_permalink() ?>">Xem thêm&nbsp;&nbsp;<img
                                                        src="<?= get_template_directory_uri() ?>/images/img-muiten.png">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; // End Loop

                            else: ?>
                                <p>Không có bài đăng.</p>
                            <?php endif; ?>

                        </div>
                    </div>
                    <div class="load-ajax">
                        <div class="loader"><img src="<?= get_template_directory_uri() ?>/images/load-more.png"></div>
                        <p>Tải thêm</p>
                    </div>

                </div>
            </section>


        </div>
    </section>

<?php get_footer(); ?>