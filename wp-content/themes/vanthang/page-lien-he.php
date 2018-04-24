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
?>

    <div id="primary" class="content-area">
    <main id="main" class="site-main">
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

        <?php
        while (have_posts()) :
            the_post();


            ?>
            <section id="v-content" class="sec-lienhe">
                <div class="container">
                    <div class="row">

                        <?= do_shortcode('[contact-form-7 id="1598" title="Trang liên hệ"]'); ?>

                        <div class="col-md-5 col-xs-12">
                            <?php $image = get_field('image', 'option');
                            $address = get_field('address', 'option');
                            $website = get_field('website', 'option');
                            $website2 = get_field('website2', 'option');
                            $email = get_field('email', 'option');
                            $phone = get_field('phone', 'option');
                            $phone2 = get_field('phone2', 'option');

                            ?>
                            <div class="v-lh-til">Thông tin liên hệ</div>
                            <div class="v-ttlh">
                                <div class="v-ttlh-til"><?= the_title(); ?></div>
                                <span><?= $address; ?></span>
                                <p>Tel : <?= $phone ?> - <?= $phone2 ?></p>
                                <p>Website : <?= $website; ?> - <?= $website2; ?></p>
                                <p>Email: <?= $email; ?> </p>
                            </div>
                            <div class="v-share">
                                <ul>
                                    <li><a href="<?= get_field('link_facebook', 'option'); ?>"><img
                                                    src="<?= get_template_directory_uri() ?>/images/lien-he-ic01.png"
                                                    alt=""></a></li>
                                    <li><a href="<?= get_field('link_intargram', 'option'); ?>"><img
                                                    src="<?= get_template_directory_uri() ?>/images/lien-he-ic02.png"
                                                    alt=""></a></li>
                                    <li><a href="<?= get_field('link_youtube', 'option'); ?>"><img
                                                    src="<?= get_template_directory_uri() ?>/images/lien-he-ic03.png"
                                                    alt=""></a></li>
                                </ul>
                            </div>
                            <div class="v-map" >
                                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3724.894357083113!2d105.85945364994727!3d20.9968714441747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zMjAzIE1pbmggS2hhaSwgVOG6p25nIDQgdMOyYSBuaMOgIEjDoG4gVmnhu4d0LCBIYWkgQsOgIFRyxrBuZywgSMOgIE7hu5lp!5e0!3m2!1svi!2s!4v1524200657268" width="423" height="302" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <?php
        endwhile; // End of the loop.
        ?>

    </main><!-- #main
	</div><!-- #primary


<?php
get_footer();