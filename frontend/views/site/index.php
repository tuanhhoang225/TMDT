<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use common\helpers\FunctionHelper;

$this->title = 'Beauty Shop';
?>
<div id="content">
    <section class="home-banners top-6">
        <div class="container">
            <div class="row">
                <?= $this->render('slider') ?>
            </div>
        </div>
    </section>
    <section class="main_contents container top-6">
        <div class="row" style="overflow: hidden;">
            <div class="col-md-9 m-padding-right-3 m-padding-left-3 d-padding-right-3 d-padding-left-3 l-padding-right-3">
                <section class="product_slider top-20">
                    <h3 class="divider-title">
                        <span class="text">BEAUTY BOX MỚI NHẤT</span>
                    </h3>
                    <div class="title-url">
                        <a href="">xem thêm</a>
                        <i class="fa fa-chevron-right"></i>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box_card_slider top-20">
                                <div class="flexslider flexslider-latest-boxes" data-item-margin="20" data-max-item="3"
                                     data-slide="multiple" data-source="Home Page Latest Boxes" id="latest_boxes">
                                    <div class="flex-viewport" style="overflow: hidden; position: relative;">
                                        <ul class="slides"
                                            style="width: 3000%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                            <?php foreach (FunctionHelper::get_product() as $key => $value): ?>
                                                <?php if ($value['category_id'] == 2): ?>
                                                    <li data-thumb-alt=""
                                                        style="width: 266.667px; margin-right: 20px; float: left; display: block;">
                                                        <div box_id="5963" class="box_card">
                                                            <div class="box_image">
                                                                <img
                                                                        src="<?= $value['avatar'] ?>"
                                                                        alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"
                                                                        draggable="false">
                                                                <div class="seo-text hidden">
                                                                    <?= $value['content'] ?>
                                                                </div>
                                                                <a class="box_designer" title="Online Lixibox"
                                                                   href=""><img
                                                                            alt="Online Lixibox"
                                                                            src="/lixibox/images/lixibox.png"
                                                                            draggable="false">
                                                                </a><a class="box_tool box_add_to_favorites ga-track-link"
                                                                       data-eventcategory="Box Action"
                                                                       data-eventaction="like"
                                                                       data-eventlabel="Hot Fun In The Summertime"
                                                                       data-remote="true" rel="nofollow"
                                                                       data-method="post"
                                                                       href=""><i
                                                                            class="fa fa-heart"></i>
                                                                </a>
                                                                <div class="discount_percent">
                                                                    -<?= $value['sale'] ?>%
                                                                </div>
                                                                <form action="https://www.lixibox.com/cart"
                                                                      accept-charset="UTF-8" data-remote="true"
                                                                      method="post">
                                                                    <input name="utf8" type="hidden" value="✓"><input
                                                                            type="hidden" name="_method" value="create">
                                                                    <input type="hidden" name="box_id" id="box_id"
                                                                           value="5963">
                                                                    <input type="submit" name="commit"
                                                                           class="btnAddAction"
                                                                           value="Add to cart"
                                                                           style="display: none;"
                                                                           data-disable-with="Sending">
                                                                    <div class="box_tool box_quick_add_to_card">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <a class="box_name"
                                                               href="<?= Url::to(['site/view', 'category_slug' => $value['category']['slug'], 'content_slug' => $value['slug']]) ?>"><b><?= $value['title'] ?></b></a>
                                                            <div class="box_price">
                                                                <?= number_format($value['price']) ?> đ
                                                            </div>
                                                            <div class="sl">
                                                        <span class="sl" style="color: black">
                                                            <h5> số lượng: <?= $value['amount'] ?></h5>

                                                        </span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="mobile-links container top-10 visible-xs visible-sm bottom-10">
                        <div class="row">
                        </div>
                    </section>
                    <h3 class="divider-title">
                        <span class="text">BEAUTY BOX BÁN CHẠY</span>
                    </h3>
                    <div class="title-url">
                        <a href="">xem thêm</a>
                        <i class="fa fa-chevron-right"></i>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box_card_slider top-20">
                                <div class="flexslider flexslider-hot-boxes" data-item-margin="20" data-max-item="3"
                                     data-slide="multiple" data-source="Home Page Best-Sellers" id="hot_boxes">

                                    <div class="flex-viewport" style="overflow: hidden; position: relative;">
                                        <ul class="slides"
                                            style="width: 3000%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                            <?php foreach (FunctionHelper::get_product() as $key => $value): ?>
                                                <?php if ($value['category_id'] == 3): ?>
                                                    <li data-thumb-alt=""
                                                        style="width: 266.667px; margin-right: 20px; float: left; display: block;">
                                                        <div box_id="5963" class="box_card">
                                                            <div class="box_image">
                                                                <img
                                                                        src="<?= $value['avatar'] ?>"
                                                                        alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"
                                                                        draggable="false">
                                                                <div class="seo-text hidden">
                                                                    <?= $value['content'] ?>
                                                                </div>
                                                                <a class="box_designer" title="Online Lixibox"
                                                                   href=""><img
                                                                            alt="Online Lixibox"
                                                                            src="/lixibox/images/lixibox.png"
                                                                            draggable="false">
                                                                </a><a class="box_tool box_add_to_favorites ga-track-link"
                                                                       data-eventcategory="Box Action"
                                                                       data-eventaction="like"
                                                                       data-eventlabel="Hot Fun In The Summertime"
                                                                       data-remote="true" rel="nofollow"
                                                                       data-method="post"
                                                                       href=""><i
                                                                            class="fa fa-heart"></i>
                                                                </a>
                                                                <div class="discount_percent">
                                                                    -<?= $value['sale'] ?>%
                                                                </div>
                                                                <form action="https://www.lixibox.com/cart"
                                                                      accept-charset="UTF-8" data-remote="true"
                                                                      method="post">
                                                                    <input name="utf8" type="hidden" value="✓"><input
                                                                            type="hidden" name="_method" value="create">
                                                                    <input type="hidden" name="box_id" id="box_id"
                                                                           value="5963">
                                                                    <input type="submit" name="commit"
                                                                           value="Add to cart"
                                                                           style="display: none;"
                                                                           data-disable-with="Sending">
                                                                    <div class="box_tool box_quick_add_to_card">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </div>
                                                                </form>

                                                            </div>
                                                            <a class="box_name"
                                                               href=""><b><?= $value['title'] ?></b></a>
                                                            <div class="box_price">
                                                                <?= number_format($value['price']) ?> đ
                                                            </div>
                                                            <div class="sl">
                                                        <span class="sl" style="color: black">
                                                            <h5> số lượng: <?= $value['amount'] ?></h5>
                                                        </span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-3 m-padding-right-3 m-padding-left-3 l-padding-left-3 d-padding-left-3" >
                <div class="abc"></div>
                <section class="magazine_posts">
                    <div id="featured_posts">
                        <a class="section_title hidden-xs hidden-sm" href="">LIXIBOX MAGAZINE</a><br><br><br>
                        <div class="flexslider flexslider-mag-posts hidden-xs hidden-sm" data-slide="single" id="mag_posts">
                            <div class="flex-viewport" style="overflow: hidden; position: relative;">
                                <ul class="slides" style="width: 600%; transition-duration: 0s; transform: translate3d(-454px, 0px, 0px);">
                                    <li class="" data-thumb-alt="" style="width: 227px; margin-right: 0px; float: left; display: block;">
                                        <?php foreach (FunctionHelper::get_product() as $key => $value): ?>
                                            <?php if ($value['category_id'] == 37): ?>
                                                <div class="post-item">
                                            <img src="<?=$value['avatar']?>" style="height: 90px;width: 90px;-moz-background-size: cover;-o-background-size: cover;-webkit-background-size: cover;background-size: cover;background-position: center center;float: left;">
                                            <h2 class="post-title">
                                                <span><?=$value['title']?></span>
                                            </h2>
                                            <a class="link-block" href=""><span><em class="hidden blog title"></em></span>
                                            </a>
                                        </div>
                                            <?php endif;?>
                                        <?php endforeach;?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
    </section>
    <section class="container top-6" id="ask_lixibox">
        <div class="row">
            <div class="col-xs-12 m-padding-left-3 m-padding-right-3 top-10">
                <h3 class="divider-title">
                    <span class="text">Box Thiết Kế Bởi Các Chuyên Gia</span>
                </h3>
                <div class="wrapper">
                    <div class="row top-30">
                        <?php  $setting = FunctionHelper::get_setting_by_key("sang-lap") ?>
                            <?php foreach (json_decode($setting['images']) as $key => $value): ?>
                                <div class="item_expert col-xs-4 col-sm-2 col-md-2 bottom-20 l-padding-left-3 l-padding-right-3">
                                    <a title="" href="">
                                        <img alt="" class="lazyload img-responsive"
                                             src="<?= $value ?>">
                                        <span class="expert_name"></span>
                                    </a>
                                </div>
                        <?php endforeach; ?>
                        <div class="visible-xs top-10">
                            <a class="btn btn-default" id="more-experts" href="javascript:{}">Xem thêm chuyên gia</a>
                            <script>
                                $(function () {
                                    $("#more-experts").click(function () {
                                        $(".item_expert").removeClass("hidden-xs");
                                        $(this).hide();
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="individual_boxes container top-6">
        <div class="row">
            <div class="col-xs-12 m-padding-left-3 m-padding-right-3">
                <div class="wrapper">
                    <h3 class="divider-title">
                        <span class="text">MUA LẺ MỚI NHẤT</span>
                    </h3>
                    <div class="title-url">
                        <a href="">xem thêm</a>
                        <i class="fa fa-chevron-right"></i>
                    </div>
                    <div class="top-20">
                        <div class="flexslider flexslider-latest-individual-boxes" data-item-margin="20"
                             data-max-item="5" data-slide="multiple" data-source="Home Page Individual Boxes"
                             id="latest_individual_boxes">
                            <div class="flex-viewport" style="overflow: hidden; position: relative;">
                                <ul class="slides"
                                    style="width: 3000%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                    <?php foreach (FunctionHelper::get_product() as $key => $value): ?>
                                        <?php if ($value['category_id'] == 35): ?>
                                            <li data-thumb-alt=""
                                                style="width: 208px; margin-right: 20px; float: left; display: block;">
                                                <div box_id="5843" class="box_card">
                                                    <div class="box_image">
                                                        <img data-src="<?= $value['avatar'] ?>"
                                                             class="lazyload"
                                                             src="/lixibox/images/default-d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de.svg"
                                                             alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"
                                                             draggable="false">
                                                        <div class="colors"></div>
                                                    </div>
                                                    <a class="box_name"
                                                       href=""><?= $value['title'] ?>
                                                    </a>
                                                    <div class="box_price"><?= number_format($value['price']) ?> đ</div>
                                                </div>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main_products container top-6">
        <div class="row">
            <div class="col-xs-12 m-padding-left-3 m-padding-right-3">
                <div class="wrapper">
                    <h3 class="divider-title">
                        <span class="text">XEM BOX CÓ SẢN PHẨM</span>
                    </h3>
                    <div>
                        <div class="box_card_slider top-20">
                            <div class="flexslider flexslider-hot-products" data-item-margin="20" data-max-item="5"
                                 data-slide="multiple" id="hot_products">
                                <div class="flex-viewport" style="overflow: hidden; position: relative;">
                                    <ul class="slides" style="width: 6000%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                        <?php foreach (FunctionHelper::get_product() as $key => $value): ?>
                                        <?php if ($value['category_id'] == 36): ?>
                                        <li data-thumb-alt=""
                                            style="width: 208px; margin-right: 20px; float: left; display: block;">
                                            <div class="box_card">
                                                <div class="box_image">
                                                    <img data-src="<?=$value['avatar']?>"
                                                         class="lazyload"
                                                         src="/lixibox/images/default-d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de.svg"
                                                         alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"
                                                         draggable="false">
                                                    <div class="colors">

                                                    </div>
                                                </div>
                                                <a class="box_name"
                                                   href=""><?=$value['title']?>
                                                </a>
                                            </div>
                                        </li>
                                        <?php endif;?>
                                        <?php endforeach;?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        setTimeout(function () {
            window._fbq = window._fbq || [];
            var fbTrackOptions = JSON.parse('{\"content_name\":\"HomePage\",\"content_category\":\"View page\"}');
            if (true) {
                window._fbq.push(['track', 'Lead', fbTrackOptions]);
            } else {
                console.log("Lead", fbTrackOptions);
            }
        }, 300);
    </script>
    <script>
        $(function () {
            $("#login-modal-button").on("click", function () {
                $("#register-content").hide();
                $("#login-content").show();
            });

            $("#register-modal-button").on("click", function () {
                $("#login-content").hide();
                $("#register-content").show();
            });

            $("#popup_register").on("submit", function (e) {
                e.preventDefault();
                if ($("#register-content").hasClass("step-1")) {
                    $("#register-content").removeClass("step-1");
                    $("#register-content").addClass("step-2");
                    return false;
                } else {
                    $("#popup_register").unbind("submit").submit();
                }
            });

            $("#popup-register-back").on("click", function () {
                $("#register-content").removeClass("step-2");
                $("#register-content").addClass("step-1");
            });

            setTimeout(function () {
                var showModal = function (id) {
                    $(id).modal({keyboard: false, backdrop: 'static'});
                    $.get("/shop/open_signup_modal");
                }

                if (FB !== undefined) {
                    FB.getLoginStatus(function (fb) {
                        if (fb.status === 'connected') {
                            var fbUserId = fb.authResponse.userID;
                            var fbAvatar = 'http://graph.facebook.com/' + fbUserId + '/picture?type=square';
                            FB.api(fbUserId, function (response) {
                                var fbName = response.name;
                                $('#fb_login img').attr({src: fbAvatar});
                                $('#fb_name').html(fbName);
                                showModal('#fb-login-modal');
                            });
                        } else {
                            showModal('#signup-modal');
                        }
                    })
                } else {
                    showModal('#signup-modal');
                }
            }, 30000);
        });
    </script>

    <script>
        initBannerHomePage();
        initSwiper();

        $(function () {
            $(".love-message").each(function (index, element) {
                $clamp(element, {clamp: 'auto'});
            });

            $(window).on('mousemove', function () {
                $('body').attr('rel', Math.random());
            });
        });
    </script>

</div>
<div id="fixed_social_links">
    <div>
        <a class="facebook" href="https://www.facebook.com/BeosCosmetics/" target="_blank">
            <i class="fa fa-facebook-official"></i>
        </a>
        <a class="instagram" href="https://instagram.com/lixibox/" target="_blank">
            <i class="fa fa-instagram"></i>
        </a>
        <a class="youtube" href="https://www.youtube.com/channel/UCW0CxHcD9jN1lhFeKLHwCvQ" target="_blank">
            <i class="fa fa-youtube-play"></i>
        </a>
        <a class="pinterest" href="https://www.pinterest.com/lixibox/" target="_blank">
            <i class="fa fa-pinterest-p"></i>
        </a>
    </div>
</div>
