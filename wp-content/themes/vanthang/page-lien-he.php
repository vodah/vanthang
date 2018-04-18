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
        while ( have_posts() ) :
            the_post();


        ?>
            <section id="v-content" class="sec-lienhe">
                <div class="container">
                    <div class="row">
<!--                        <div class="col-md-7 col-xs-12">-->
<!--                            <div class="v-lh-til">Gửi câu hỏi cho chúng tôi</div>-->
<!--                            <div class="v-form1">-->
<!--                                <label>Họ tên<input class="ten" type="text" name="" placeholder="Họ tên đầy đủ của bạn"></label>-->
<!--                                <label>Địa chỉ<input class="dc" type="text" name="" placeholder="Địa chỉ liên lạc của bạn"></label>-->
<!--                            </div>-->
<!--                            <div class="v-form1 v-form2">-->
<!--                                <label>Số điện thoại<input class="ten" type="text" name="" placeholder="Số điện thoại dùng để liên hệ với bạn"></label>-->
<!--                                <label>Email<input class="dc" type="text" name="" placeholder="Địa chỉ email của bạn"></label>-->
<!--                            </div>-->
<!--                            <label class="v-select">Sản phẩm quan tâm-->
<!--                                <select name="select">-->
<!--                                    <option value="">Vận thăng lồng Sumo</option>-->
<!--                                    <option value="">Vận thăng lồng Sumo1</option>-->
<!--                                    <option value="">Vận thăng lồng Sumo2</option>-->
<!--                                </select>-->
<!--                            </label>-->
<!--                            <label class="v-area">Nội dung<textarea placeholder="Ý kiến của bạn"></textarea></label>-->
<!--                            <button class="btn v-submit" type="submit">gửi ý kiến</button>-->
<!--                        </div>-->
                        <?= do_shortcode( '[contact-form-7 id="1598" title="Trang liên hệ"]' ); ?>
                        <div class="col-md-5 col-xs-12">
                            <?php $image = get_field('image','option');
                            $address = get_field('address','option');
                            $website = get_field('website','option');
                            $website2 = get_field('website2','option');
                            $email = get_field('email','option');
                            $phone = get_field('phone','option');
                            $phone2 = get_field('phone2','option');

                            ?>
                            <div class="v-lh-til">Thông tin liên hệ</div>
                            <div class="v-ttlh">
                                <div class="v-ttlh-til"><?= the_title();?></div>
                                <span><?= $address;?></span>
                                <p>Tel :  <?= $phone?> - <?= $phone2?></p>
                                <p>Website :   <?= $website;?> - <?= $website2;?></p>
                                <p>Email: <?= $email;?> </p>
                            </div>
                            <div class="v-share">
                                <ul>
                                    <li><a href="#"><img src="<?= get_template_directory_uri() ?>/images/lien-he-ic01.png" alt=""></a></li>
                                    <li><a href="#"><img src="<?= get_template_directory_uri() ?>/images/lien-he-ic02.png" alt=""></a></li>
                                    <li><a href="#"><img src="<?= get_template_directory_uri() ?>/images/lien-he-ic03.png" alt=""></a></li>
                                </ul>
                            </div>
                            <div class="v-map">
                                <a href=""><img src="images/lien-he-im01.jpg" alt=""></a>
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
