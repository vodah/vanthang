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
		while ( have_posts() ) :the_post();
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
                            <i><span><?= get_field('short_description', get_the_ID()) ?></span></i>
                            <div>
                                <i><?= the_post_thumbnail(get_the_ID(), 'tin_tuc_chitiet') ?></i>
                                <img src="images/tt-im01.jpg" alt="">
                                <p>
                                    <?= the_content(); ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4 vsidebar">
                            <div class="vsidebar-til">Tin liên quan</div>
                            <ul>
                                <li class="vsidebar-tin">
                                    <a href="#"><img src="images/tt-im02.jpg" alt=""></a>
                                    <div>
                                        <a href="#"><h3></h3></a>
                                        <i>  20.12.2016</i>

                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        <?php



//			get_template_part( 'template-parts/content', get_post_type() );

//			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.


		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
