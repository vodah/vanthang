<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vanthang
 */
//print_r(wp_nav_menu( array(
//    'theme_location' => 'menu-1', // tên location cần hiển thị
//    'container' => 'div', // thẻ container của menu
//    'container_class' => 'collapse navbar-collapse navbar-ex1-collapse', //class của container
//    'menu_class' => 'nav navbar-nav navbar-right mena-menu' // class của menu bên trong
//) ));
//die();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - Sumo</title>

    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/owl.theme.default.css">
    <link rel="stylesheet"
          href="<?= get_template_directory_uri(); ?>/https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/style.css">
    <?php wp_head();
    ?>
</head>
<body>
<header>
    <?php if (is_home()) { ?>

        <div id="sticky-wrapper" class="sticky-wrapper">
            <div class="main-menu-bar sticky-header-enable">
                <div class="wp-menu-pc">
                    <nav class="navbar navbar-default hidden-xs hidden-sm" role="navigation">
                        <div class="container width-1345">
                            <div class="navbar-header zindex-image">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-ex1-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <?php $title = get_field('image', 'option');
                                ?>
                                <a class="navbar-brand animated zoomIn" href="<?= get_home_url() ?>"> <img
                                            src="<?= $title['url'] ?>"></a>

                            </div>
                            <div class="collapse navbar-collapse navbar-ex1-collapse zindex-navbar">
                                <ul class="nav navbar-nav navbar-right mena-menu">
                                    <?php $a = get_field('menu', 'option');
                                    foreach ($a as $item) {
                                        if ($item['title'] == "Catalog") {

                                            ?>
                                            <li class="catalog"><a href="<?= $item['link'] ?>"><span><i class="fa fa-cloud-download"></i><?= $item['title'] ?></span></a>
                                            </li>
                                            <?php
                                        } else {
                                            ?>

                                            <li><a href="<?= $item['link'] ?>"><?= $item['title'] ?></a>
                                                <?php if (!empty($item['subproduct'])) {
                                                    ?>
                                                    <ul class="sub-menu ov-hid">
                                                        <div class="div-sub">
                                                            <h4 class="ff-prata"><?= $item['title'] ?></h4>
                                                            <?php
                                                            $key = 0;
                                                            foreach ($item['subproduct'] as $value) {
                                                                $key++;
                                                                ?>

                                                                <li class="<?php if ($key == 1) {
                                                                    echo "v-active active";
                                                                } ?> "><a
                                                                            href="#"><?= $value->post_title ?></a>
                                                                    <ul class="sub-menu">
                                                                        <li>
                                                                            <article>

                                                                                <div class="img-submenu">
                                                                                    <a href="<?php the_permalink($value->ID) ?>"><?= get_the_post_thumbnail($value->ID, 'san_pham_home') ?></a>
                                                                                </div>
                                                                                <div class="text-submenu">
                                                                                    <h4 class="ff-prata"><?= $value->post_title ?></h4>
                                                                                    <p><?= get_field('short_description', $value->ID) ?></p>
                                                                                    <a href="<?php the_permalink($value->ID) ?>"
                                                                                       class="btn btn-do btn-xem-ct">Xem
                                                                                        chi tiết</a>
                                                                                </div>
                                                                            </article>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            <?php }
                                                            ?>

                                                        </div>
                                                    </ul>
                                                    <?php
                                                }

                                                ?>
                                            </li>
                                        <?php }
                                    } ?>

                                </ul>
                            </div>

                        </div>
                    </nav>
                </div>
                <div class="wp-header-mobile hidden-md hidden-lg">
                    <div class="header-mobile">
                        <div class="wp-menu-mobile">
                            <div class="icon-menu">
                                <div class="iconbar" onclick="myFunction(this)">
                                    <div class="bar1"></div>
                                    <div class="bar2"></div>
                                    <div class="bar3"></div>
                                </div>
                            </div>
                            <?php
                            print_r(wp_nav_menu( array(
                                'theme_location' => 'menu-2',
                                'container' => 'div',
                                'container_class' => 'menu-mobile',
                                'menu_class' => 'nav navbar-nav'
                            ) ));
                            ?>

                        </div>
                        <div class="wp-logomobile">
                            <a href="<?= get_home_url() ?>"><img src="<?= $title['url'] ?>"></a>
                        </div>
                        <?php
                        foreach ($a as $item) {
                            if ($item['title'] == "Catalog") {

                                ?>
                                <div class="catalog-mb">
                                    <a href="<?= $item['link']?>"><span><i class="fa fa-cloud-download"></i>&nbsp;<?= $item['title'] ?></span></a>
                                </div>
                            <?php }}?>
                    </div>
                </div>
            </div>
        </div>
        <div class="wp-slider-pc">
            <div class="wp-slider-2">
                <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                    <?php $slide_show = get_field('slide_show', 1404);
                    $key = 0;
                    ?>
                    <ol class="carousel-indicators">
                        <?php
                        $dem = 0;
                        foreach ($slide_show as $item) {
                            $dem++
                            ?>
                            <li data-target="#myCarousel" data-slide-to="<?= $dem ?>" <?php if ($dem == 1) {
                                echo 'class="active"';
                            } ?>></li>
                        <?php } ?>

                    </ol>
                    <div class="carousel-inner">
                        <?php foreach ($slide_show as $item) {
                            $key++
                            ?>

                            <div class="item <?php if ($key == 1) {
                                echo "active";
                            } ?> ">
                                <img src="<?= $item['image']['url'] ?>" style="width:100%;">
                                <div class="carousel-caption animated zoomIn">
                                    <h3><?= $item['title'] ?></h3>
                                    <p>
                                        <?= $item['description'] ?>
                                    </p>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
                <div class="text-bottom-slider animated zoomIn">
                    <p>
                        <?php
                        echo get_field("thong_tin", '1404');

                        ?>
                    </p>
                </div>
            </div>
        </div>
    <?php } else {
        ?>
        <div class="trang-don">
            <div id="sticky-wrapper" class="sticky-wrapper">
                <div class="main-menu-bar sticky-header-enable">
                    <div class="wp-menu-pc">
                        <nav class="navbar navbar-default hidden-xs hidden-sm" role="navigation">
                            <div class="container width-1345">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                            data-target=".navbar-ex1-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <?php $title = get_field('image', 'option');
                                    ?>
                                    <a class="navbar-brand" href="<?= get_home_url() ?>"><img
                                                src="<?= $title['url'] ?>"></a>
                                </div>
                                <?php
                                print_r(wp_nav_menu( array(
                                    'theme_location' => 'menu-1',
                                    'container' => 'div',
                                    'container_class' => 'collapse navbar-collapse navbar-ex1-collapse menu-r',
                                    'menu_class' => 'nav navbar-nav navbar-right mena-menu'
                                ) ));
                                ?>
                            </div>
                        </nav>
                    </div>
                    <div class="wp-header-mobile hidden-md hidden-lg">
                        <div class="header-mobile">
                            <div class="wp-menu-mobile">
                                <div class="icon-menu">
                                    <div class="iconbar" onclick="myFunction(this)">
                                        <div class="bar1"></div>
                                        <div class="bar2"></div>
                                        <div class="bar3"></div>
                                    </div>
                                </div>
                                <?php
                                print_r(wp_nav_menu( array(
                                    'theme_location' => 'menu-2',
                                    'container' => 'div',
                                    'container_class' => 'menu-mobile',
                                    'menu_class' => 'nav navbar-nav'
                                ) ));
                                ?>

                            </div>


                            <div class="wp-logomobile">
                                <a href="<?= get_home_url() ?>"><img src="<?= $title['url'] ?>"></a>
                            </div>
                            <?php
                            $a = get_field('menu', 'option');
                            foreach ($a as $item) {
                                if ($item['title'] == "Catalog") {

                                    ?>
                                    <div class="catalog-mb">
                                        <a href="<?= $item['link']?>"><span><i class="fa fa-cloud-download"></i>&nbsp;<?= $item['title'] ?></span></a>
                                    </div>
                                <?php }}?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</header>