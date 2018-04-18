<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vanthang
 */

get_header();
?>

    <section class="sec-gioithieu">
        <div class="container">
            <div class="wp-gioithieu">
                <div class="row">
                    <?php $gioithieu = get_field('gioithieu', 1404);
                    foreach ($gioithieu as $item) { ?>


                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="wp-gt-letf wow fadeInUp" data-wow-duration="1.6s">
                                <div class="title-1">
                                    <h1><?= $item['title'] ?></h1>
                                </div>
                                <div class="img-hoavan">
                                    <img src="<?= get_template_directory_uri(); ?>/images/img-hoavan.png">
                                </div>
                                <div class="mota-1">

                                    <?= $item['description'] ?>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="wp-video wow fadeInUp" data-wow-duration="1.8s">
                                <div class="image videoWrapperHome one-third" id="youtube1">
                                    <iframe width="100%" height="315" src="<?= $item['link_video'] ?>"
                                            frameborder="0" allowfullscreen></iframe>

                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div class="list-gioithieu">
                    <ul class="wow fadeInUp" data-wow-duration="1.8s">
                        <?php $thongke = get_field('thong_ke111', 1404);

                        foreach ($thongke as $item) { ?>
                            <li>
                                <article>
                                    <div class="img-courter">
                                        <img src="<?= $item['image']['url']; ?>">
                                    </div>
                                    <span class="counter xanh"><?= number_format($item['number'],0,',','.'); ?></span>
                                    <p><?= $item['text']; ?></p>
                                </article>
                            </li>
                        <?php } ?>

                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-sanpham">
        <div class="container">
            <div class="title-1 wow fadeInUp" data-wow-duration="1.8s">
                <h1><span class="xanh">Sản phẩm</span> <br> của chúng tôi</h1>
            </div>
            <div class="img-hoavan">
                <img src="<?= get_template_directory_uri(); ?>/images/img-hoavan.png">
            </div>
            <div class="list-sp">
                <div class="row">
                    <?php $product_highlights = get_field('product_highlights', 1404);

                    foreach ($product_highlights as $item) {
                        $a = get_the_post_thumbnail($item->ID, 'san_pham_home');
                        $link = get_the_permalink($item->ID, false);

                        ?>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="wp-item-sp wow fadeInUp" data-wow-duration="1.6s">
                                <div class="img-sp">
                                    <a href="<?= $link;?>"><?= $a; ?></a>
                                </div>
                                <div class="text-sp">
                                    <h4 class="title-sp"><?= $item->post_title ?></h4>
                                    <p class="p-sp"><?= get_field('short_description', $item->ID) ?></p>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                </div>
            </div>
        </div>
    </section>
<?php $history = get_field('history', 1404);
foreach ($history as $i) { ?>
    <section class="sec-lichsu" style="background: url('<?= $i['image']['url'] ?>')">
<?php } ?>
    <div class="container">


        <?php foreach ($history as $item) {
            ?>
            <div class="title-2 wow fadeInUp" data-wow-duration="1.8s">
                <h2><?= $item['history'] ?></h2>
            </div>
        <?php } ?>
        <div class="mota-1 wow fadeInUp" data-wow-duration="1.9s">
            <?= $item['description'] ?>
        </div>
        <div class="list-lichsu">
            <ul>
                <?php $history_repeater = get_field('history_repeater', 1404);
                foreach ($history_repeater as $item) {
                    ?>
                    <li>
                        <div class="pox wow fadeInUp" data-wow-duration="1.7s">
                            <div class="pox-2">
                                <article>
                                    <div class="img-ls">
                                        <img src="<?= $item['icon']['url'] ?>">
                                    </div>
                                    <div class="text-ls">
                                        <p class="year"><?= $item['number'] ?></p>
                                        <img src="<?= get_template_directory_uri(); ?>/images/icon10.png">
                                        <p class="muc-tieu-ls"><?= $item['des'] ?></p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </li>
                <?php } ?>

            </ul>
        </div>
    </div>
    </section>

    <section class="sec-tintuc">
        <div class="container">
            <div class="title-3 wow fadeInUp" data-wow-duration="1.8s">
                <h3>Tin tức</h3>
            </div>
            <div class="img-hoavan">
                <img src="<?= get_template_directory_uri();?>/images/img-hoavan.png">
            </div>
            <div class="wp-list-tintuc">
                <div class="row">
                    <?php $news = get_field('news', 1404);

                    foreach ($news as $item) {
                        $image = get_the_post_thumbnail($item->ID, 'tin_tuc_home');
                        $link = get_the_permalink($item->ID, false);

                        ?>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="wp-item-tintuc wow fadeInUp" data-wow-duration="1.8s">
                            <div class="img-tintuc">
                                <a href="<?= $link?>">
                                    <?= $image; ?>
                                </a>
                            </div>
                            <div class="text-tintuc">
                                <h4 class="tt-tintuc"><?= $item->post_title;?></h4>
                                <p class="date-time"> <?= $item->post_date;?></p>
                                <p class="mota-2"><?= get_field('short_description', $item->ID) ?></p>
                                <a href="<?= $link?>">Xem thêm&nbsp;&nbsp;<img src="<?= get_template_directory_uri();?>/images/img-muiten.png"> </a>
                            </div>
                        </div>
                    </div>
                        <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-connguoi">
        <div id="slider-connguoi" class="owl-carousel owl-theme">
            <?php $cong_ty = get_field('cong_ty', 1404);
            foreach ($cong_ty as $item) {
                ?>
                <div class="item">
                    <div class="wp-item-connguoi">
                        <div class="img-connguoi">
                            <img src="<?= $item['image']['url'] ?>">
                        </div>
                        <div class="text-connguoi wow animated zoomIn">
                            <h4 class="tt-connguoi1"><?= $item['title1'] ?></h4>
                            <h2><?= $item['title2'] ?></h2>
                            <div class="img-hoavan">
                                <img src="<?= get_template_directory_uri(); ?>/images/img-hoavan.png">
                            </div>
                            <p class="mota-3"><?= $item['description'] ?></p>
                            <a href="<?= $item['link'] ?>" class="btn btn-slider-1 btn-do"><?= $item['name_link'] ?></a>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </section>

<?php
get_footer();
?>
