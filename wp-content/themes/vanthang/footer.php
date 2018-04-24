<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vanthang
 */

?>

</div><!-- #content -->

<footer id="footer">
    <div class="wp-footer">
        <?php $image = get_field('image','option');
        $address = get_field('address','option');
        $title = get_field('title','option');
        $website = get_field('website','option');
        $website2 = get_field('website2','option');
        $email = get_field('email','option');
        $phone = get_field('phone','option');
        $phone2 = get_field('phone2','option');

        ?>
        <div class="footer-top wow fadeInUp" data-wow-duration="1s">
            <div class="container">
                <div class="logo-footer">

                    <img src="<?= $image['url']?>">
                </div>
                <div class="tt-footer">
                    <h3><?= $title?></h3>
                </div>
                <div class="tt-ft01">
                    <p class="dc-1"><?= $address;?></p>
                    <p class="tel">Tel :   <?= $phone?> - <?= $phone2?></p>
                    <p class="web">Website :  <?= $website;?> - <?= $website2;?></p>
                    <p class="mail">Email: <?= $email;?> </p>
                </div>
            </div>
        </div>
        <?php $title = get_field('thong_tin','1455');
        print_r($title);
        ?>
        <div class="footer-bottom">
            <div class="container">
                <h4 class="tt-ft-bottom">Nếu quan tâm tới sản phẩm và dịch vụ của Hawee hoặc có bất cứ thắc mắc nào xin vui lòng để lại lời nhắn cho chúng tôi</h4>
                <?= do_shortcode( '[contact-form-7 id="1370" title="Liên Hệ"]' ); ?>

                </div>
            </div>
        </div>
    </div>
</footer>




<?php wp_footer();
?>

<script src="<?= get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/jquery.counterup.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/waypoints.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/js-banner.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/wow.min.js"></script>

<script type="text/javascript">
    $(".div-sub li").hover(function(){
        if($("li.v-active").hasClass("active")){
            $("li.v-active").removeClass("active");
        }
    });
</script>

<script type="text/javascript">
    $(".dropdown-mega-menu").hover(function(){
        $("li.v-active").addClass("active");
    });
</script>

<script type="text/javascript">
    $(".div-sub .sub-menu").hover(function(){
        if($("li.v-active").hasClass("active")){
            $("li.v-active").removeClass("active");
        }
    });
</script>


<script type="text/javascript">
    function playvideo (videid) {
        x = $('.one-third').width();
        y = $('.one-third').height();
        var video = '<iframe width="' + x + '" height="' + y + '" src="'+ $('#' + videid + ' img').attr('data-video') +'"  frameborder="0" allowfullscreen></iframe>';
        $('#' + videid + ' .video-play-button').hide();
        $('#' + videid + ' img').replaceWith(video);
    }
</script>

<script>
    new WOW().init();
</script>

<script type="text/javascript">
    $(document).ready(function(){
        var stickyTop = $("#sticky-wrapper").offset().top;
        jQuery(window).scroll(function(){
            if (jQuery(window).scrollTop() > 790 - 200)
            {
                jQuery('.sticky-wrapper').addClass('header-sticky');
            }
            else
            {
                jQuery('.sticky-wrapper').removeClass('header-sticky');
            }
        });
    });
</script>

<script>
    $( ".icon-menu" ).click(function() {
        $( ".menu-mobile" ).slideToggle( "fast", function() {
        });
    });
</script>

<script>
    $( ".language-mb" ).click(function() {
        $( ".sub-menu-language" ).slideToggle( "fast", function() {
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.navbar span.dropdown-toggle').on('click', function(e) {
            var $el = $(this);
            var $parent = $(this).offsetParent(".dropdown-menu");
            $(this).parent("li").toggleClass('open');
            if(!$parent.parent().hasClass('nav')) {
                $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
            }
            $('.nav li.open').not($(this).parents("li")).removeClass("open");
            return false;
        });
    });
</script>

<script>
    function myFunction(x) {
        x.classList.toggle("change");
    }
</script>


<script>
    $('.counter').counterUp({
        delay: 30,
        time: 2500
    });
</script>

<script type="text/javascript">
    $('#slider-connguoi').owlCarousel({
        loop: true,
        margin:10,
        nav:true,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
</script>
<script type="text/javascript">
    $('#slider-ctsp').owlCarousel({
        loop: true,
        margin:10,
        nav:true,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
</script>



</body>
</html>
