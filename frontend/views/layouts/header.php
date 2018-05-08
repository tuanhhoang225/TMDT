<?php
/**
 * Created by PhpStorm.
 * User: tuanh
 * Date: 3/20/2018
 * Time: 9:33 AM
 */

use yii\web\NotFoundHttpException;
use common\models\User;
use  yii\helpers\Url;
use common\helpers\FunctionHelper;

$user = null;

if (!Yii::$app->user->isGuest) {
    $user = findModel(Yii::$app->user->identity->getId());
}

function findModel($id)
{
    if (($model = User::findOne($id)) !== null) {
        return $model;
    } else {
        throw new NotFoundHttpException('The requested page does not exist . ');
    }
}

?>

<div id="fb-root" class=" fb_reset">
    <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
        <div>
            <iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true"
                    scrolling="no" allow="encrypted-media" id="fb_xdm_frame_https" aria-hidden="true"
                    title="Facebook Cross Domain Communication Frame" tabindex="-1"
                    src="/lixibox/images/2VRzCA39w_9.html"
                    style="border: none;"></iframe>
        </div>
    </div>
    <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
        <div></div>
    </div>

</div>
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            appId: '1623475871214840',
            xfbml: true,
            version: 'v2.12'
        });
        $(document).trigger('fbInit'); // trigger event
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<div class="container-static-menu-header hidden-xs hidden-sm">
    <div class="sticky-wrapper" style="height: 25px;">
        <div id="desktop_static_menu_header" class="stuck">
            <div class="container fix_width">
                <div class="item pull-left">
                    Hotline: 1800 2040
                </div>
                <div class="item pull-right">
                    <a href="">Đổi lixicoin</a>
                </div>
                <div class="item pull-right">
                    <a class="border-right-static-menu" href="">Magazine</a>
                </div>
                <div class="item pull-right">
                    <a class="border-right-static-menu" href=""><i
                                class="lnr lnr-map-marker"></i>
                        Theo dõi đơn hàng
                    </a></div>
                <div class="item pull-right">
                    <a style="color: #f32764" href=""><i class="fa fa-smile-o"></i>
                        Lixibox Beta
                    </a></div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" id="header">
    <div class="container fix_width hidden-xs hidden-sm" id="desktop_header_bar">
        <div class="header_bar_item" id="logo">
            <a href="">
                <img alt="Lixibox Logo"
                     src="/lixibox/images/logo-93c149c12f0b029bb4ebe977ffc6bf2a1ddd800fe43a6a848fed89f1a06cb484.png">
            </a></div>
        <script id="searchItem" type="text/x-jsrender">
<div class='col-xs-6 col-md-4'>
<div class='box_card'>
<a href="{{:link}}"><div box_id='{{:id}}' class='box_image'>
<img class='lazyload' data-src='{{:image}}' src='/lixibox/images/default-d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de.svg'>
</div>
</a><a class="box_name" href="{{:link}}">{{:name}}</a>
<div class='box_price'>{{:price}}</div>
{{if show_rate}}
<div class='rate'>
<span class='star-{{:rate}} stars'></span>
{{if show_feedbacks_count}}
<span>({{:feedbacks_count}})</span>
{{/if}}
</div>
{{/if}}
</div>
</div>




        </script>
        <script id="searchNotFound" type="text/x-jsrender">
<div class='box_card_container'>
<div class='col-xs-12 text-center bottom-20'>
<h3>Oh!</h3>
<p>Không có kểt quả nào phù hợp.</p>
</div>
</div>




        </script>
        <script id="searchBoxesList" type="text/x-jsrender">
<div class='box_card_container'>
{{:boxes}}
{{if showMoreLink}}
<div class='col-xs-12 text-center bottom-20'>
<a class='more-link' href='{{:searchLink}}'>Xem thêm {{:moreItems}} kết quả</a>
</div>
{{/if}}
</div>




        </script>

        <div class="search header_bar_item" id="search">
            <form data-realtime-path="" action="" accept-charset="UTF-8"
                  method="get"><input name="utf8" type="hidden" value="✓">
                <div class="search_text">
                    <div class="typeahead_all search_type_all">
                        <input type="text" name="q" id="autosearch" placeholder="Tìm kiếm..."
                               class="query form-control search-realtime-input" autocomplete="off"
                        >
                        <div id="search-results-realtime"></div>
                    </div>
                </div>
                <button class="search_submit btn lx-btn-primary">
                    <i class="fa fa-search"></i>
                    <i style="display: none" class="fa fa-spinner fa-pulse"></i>
                </button>
            </form>

        </div>
        <div class="auth" id="notification_box">
            <div class="header_bar_item" id="new_account">
                <?php if (Yii::$app->user->isGuest): ?>
                    <a class="btn lx-btn-outline" href="../site/login" >
                        Sign in / Sign up
                    </a>
                <?php endif; ?>
                <?php if (!Yii::$app->user->isGuest): ?>
                    <a class="btn lx-btn-outline" href="" data-toggle="modal" data-target="#new_user">
                        <i class="fa fa-user"></i>
                        <?= $user['username'] ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>

</div>
<div class="container hidden-xs hidden-sm">
    <div class="sticky-wrapper" style="">
        <div class="clearfix" id="navigation">
            <div class="logo">
                <a href="">
                    <img width="24" height="24" alt="Lixibox Logo"
                         src="/lixibox/images/logo_round-2a67b0e71e07b3b6675de9bda2cd327dfae0c73a41b7103fe72eb71b84cf9add.png">
                </a>
            </div>
            <ul id="desktop_browse_node_navigations">
                <?php foreach (FunctionHelper::get_categories_by_parent_id() as $key => $value): ?>
                    <?php $children = FunctionHelper::get_categories_by_parent_id($value['id']); ?>
                    <?php if (!$children): ?>
                        <li class="top_layer_navigation sale-tag">
                            <a href=""><?= $value['title'] ?></a>
                        </li>
                    <?php endif; ?>
                    <?php if ($children): ?>
                        <li class="top_layer_navigation dropdown">
                            <div class="dropdown-toggle" data-toggle="dropdown" type="hover">
                                <a href=""><?= $value['title'] ?>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                            </div>
                            <div class="dropdown-menu">
                                <?php foreach (FunctionHelper::get_categories_by_parent_id($value['id']) as $keychil => $valuechil): ?>
                                    <div class="inner beauty_boxes">
                                        <div class="node">
                                            <a href="">
                                                <div class="name"><?= $valuechil['title'] ?>
                                                </div>
                                                <div class="description"><?= $valuechil['describe'] ?>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
                <li class="top_layer_navigation pull-right" id="desktop_cart">
                    <div class="dropdown-hover">
                        <div class="header_bar_item cart-icon">
                            <a href="https://www.lixibox.com/cart"><i class="fa fa-shopping-bag"></i>
                                <span>Giỏ hàng</span>
                            </a>
                        </div>
                        <div class="dropdown-hover-content">
                            <p class="empty-cart">Giỏ Hàng đang rỗng</p>
                        </div>
                    </div>
                </li>
                <li class="top_layer_navigation pull-right wishlist-navigation">
                    <a href="https://www.lixibox.com/user/wishlist">
                        <span class="icon-wishlist">
                            <i class="fa fa-heart"></i>
                        </span>
                    </a>
                    <span class="line-right-swap"></span>
                </li>
                <div class="clearfix"></div>
            </ul>
        </div>
    </div>
    <div id="header_banner">
        <a class="ga-track-link" data-eventcategory="Header Banner" data-eventlabel="Banner Weekly specials"
           href="" title="Weekly specials">
            <img width="1140" height="60" class="hidden" data-index="0" alt="Weekly specials"
                 src="/lixibox/images/banner_sub-3.jpg">
        </a>
        <a class="ga-track-link" data-eventcategory="Header Banner" data-eventlabel="Banner Okame special deals"
           href="" title="Okame special deals">
            <img width="1140" height="60" class="animated flipInX" data-index="1" alt="Okame special deals"
                 src="/lixibox/images/OKAME-Special_Deals-Topper.jpg">
        </a>
    </div>
</div>
<div class="floating-alert">
</div>
<script>
    $(function () {
        setTimeout(function () {
            $(".alert").hide('fast');
        }, 7000);
    });
</script>
