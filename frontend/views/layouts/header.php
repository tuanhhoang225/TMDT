<?php
/**
 * Created by PhpStorm.
 * User: tuanh
 * Date: 3/20/2018
 * Time: 9:33 AM
 */

use yii\helpers\Url;
use common\helpers\FunctionHelper;

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
                    <a href="https://www.lixibox.com/lixicoin">Đổi lixicoin</a>
                </div>
                <div class="item pull-right">
                    <a class="border-right-static-menu" href="https://magazine.lixibox.com/">Magazine</a>
                </div>
                <div class="item pull-right">
                    <a class="border-right-static-menu" href="https://www.lixibox.com/orders/trackings"><i
                                class="lnr lnr-map-marker"></i>
                        Theo dõi đơn hàng
                    </a></div>
                <div class="item pull-right">
                    <a style="color: #f32764" href="https://beta.lixibox.com/"><i class="fa fa-smile-o"></i>
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
            <a href="https://www.lixibox.com/"><img alt="Lixibox Logo"
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
            <form data-realtime-path="/realtime_search" action="https://www.lixibox.com/search" accept-charset="UTF-8"
                  method="get"><input name="utf8" type="hidden" value="✓">
                <div class="search_text">
                    <div class="typeahead_all search_type_all">
                        <input type="text" name="q" id="q" placeholder="Tìm kiếm..."
                               class="query form-control search-realtime-input" autocomplete="off"
                               data-path="/suggestion_search">
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
                <a class="btn lx-btn-outline" href="https://www.lixibox.com/users/sign_in">Sign in / Sign up</a>
            </div>

        </div>
    </div>

</div>
<div class="container hidden-xs hidden-sm">
    <div class="sticky-wrapper" style="">
        <div class="clearfix" id="navigation">
            <div class="logo">
                <a href="https://www.lixibox.com/"><img width="24" height="24" alt="Lixibox Logo"
                                                        src="/lixibox/images/logo_round-2a67b0e71e07b3b6675de9bda2cd327dfae0c73a41b7103fe72eb71b84cf9add.png">
                </a></div>
            <ul id="desktop_browse_node_navigations">
                <li class="top_layer_navigation dropdown">
                    <div class="dropdown-toggle" data-toggle="dropdown" type="hover">
                        <a href="https://www.lixibox.com/shop/beauty-box">Beauty box
                            <i class="fa fa-angle-down"></i>
                        </a></div>
                    <div class="dropdown-menu">
                        <div class="inner beauty_boxes">
                            <div class="node">
                                <a href="https://www.lixibox.com/shop/new-beauty-box">
                                    <div class="name">Box mới nhất</div>
                                    <div class="description">Những box vừa được cập nhật mới trên lixibox</div>
                                </a></div>
                            <div class="node">
                                <a href="https://www.lixibox.com/shop/best-selling-beauty-box">
                                    <div class="name">Box bán chạy nhất</div>
                                    <div class="description">Những box hot nhất đang được cộng đồng làm đẹp chú ý. Xem
                                        ngay.
                                    </div>
                                </a></div>
                            <div class="node">
                                <a href="https://www.lixibox.com/shop/makeup-beauty-box">
                                    <div class="name">Box trang điểm</div>
                                    <div class="description">Sản phẩm makeup tốt nhất với mức giá cực ưu đãi đang được
                                        bày bán tại Lixibox.
                                    </div>
                                </a></div>
                            <div class="node">
                                <a href="https://www.lixibox.com/shop/skin-care-beauty-box">
                                    <div class="name">Box dưỡng da</div>
                                    <div class="description">Chăm sóc làn da của bạn tốt nhất với các box mỹ phẩm hấp
                                        dẫn tại Lixibox
                                    </div>
                                </a></div>
                            <div class="node">
                                <a href="https://www.lixibox.com/shop/acne-beauty-box">
                                    <div class="name">Box trị mụn</div>
                                    <div class="description">Bảo vệ làn da khỏi các tác nhân ngăn ngừa mụn cùng các sản
                                        phẩm ngừa mụn tại Lixibox.
                                    </div>
                                </a></div>

                        </div>
                    </div>
                </li>
                <li class="top_layer_navigation dropdown">
                    <div class="dropdown-toggle" data-toggle="dropdown" type="hover">
                        <a href="https://www.lixibox.com/shop/makeup">Trang điểm
                            <i class="fa fa-angle-down"></i>
                        </a></div>
                    <div class="dropdown-menu">
                        <div class="browse_nodes inner width_4">
                            <div class="browse_node_column">
                                <div class="browse_node_layer_1">
                                    <div class="heading">
                                        <a href="https://www.lixibox.com/shop/eyes">
                                            <div class="name">
                                                Eye Makeup
                                            </div>
                                            <div class="vn_name">
                                                Mắt
                                            </div>
                                        </a></div>
                                    <div class="sub_nodes">
                                        <a href="https://www.lixibox.com/shop/eye-primer">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Eye Primer
                                                </div>
                                                <div class="vn_name">
                                                    Lót mắt
                                                </div>
                                            </div>
                                        </a><a href="https://www.lixibox.com/shop/eyeshadow">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Eyeshadow
                                                </div>
                                                <div class="vn_name">
                                                    Phấn mắt
                                                </div>
                                            </div>
                                        </a><a href="https://www.lixibox.com/shop/mascara">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Mascara
                                                </div>
                                                <div class="vn_name">
                                                    Chuốt mi
                                                </div>
                                            </div>
                                        </a><a href="https://www.lixibox.com/shop/eyeliner">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Eyeliner
                                                </div>
                                                <div class="vn_name">
                                                    Kẻ mắt
                                                </div>
                                            </div>
                                        </a><a href="https://www.lixibox.com/shop/eyebrow">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Eyebrow
                                                </div>
                                                <div class="vn_name">
                                                    Chân mày
                                                </div>
                                            </div>
                                        </a><a href="https://www.lixibox.com/shop/eye-makeup-remover">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Eye makeup remover
                                                </div>
                                                <div class="vn_name">
                                                    Tẩy trang mắt
                                                </div>
                                            </div>
                                        </a></div>
                                </div>
                            </div>
                            <div class="browse_node_column">
                                <div class="browse_node_layer_1">
                                    <div class="heading">
                                        <a href="https://www.lixibox.com/shop/face">
                                            <div class="name">
                                                Face Makeup
                                            </div>
                                            <div class="vn_name">
                                                Mặt
                                            </div>
                                        </a></div>
                                    <div class="sub_nodes">
                                        <a href="https://www.lixibox.com/shop/primer-base">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Primer / Base
                                                </div>
                                                <div class="vn_name">
                                                    Kem lót
                                                </div>
                                            </div>
                                        </a><a href="https://www.lixibox.com/shop/foundation">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Foundation/ Cushion
                                                </div>
                                                <div class="vn_name">
                                                    Kem / Phấn nền
                                                </div>
                                            </div>
                                        </a><a href="https://www.lixibox.com/shop/bb-cream-cc-cream">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    BB Cream &amp; CC Cream
                                                </div>
                                                <div class="vn_name">
                                                    Kem đa năng (BB, CC)
                                                </div>
                                            </div>
                                        </a><a href="https://www.lixibox.com/shop/concealer">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Concealer
                                                </div>
                                                <div class="vn_name">
                                                    Kem che khuyết điểm
                                                </div>
                                            </div>
                                        </a><a href="https://www.lixibox.com/shop/powder">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Powder
                                                </div>
                                                <div class="vn_name">
                                                    Phấn phủ
                                                </div>
                                            </div>
                                        </a><a href="https://www.lixibox.com/shop/blush">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Blush
                                                </div>
                                                <div class="vn_name">
                                                    Phấn má
                                                </div>
                                            </div>
                                        </a><a href="https://www.lixibox.com/shop/highlight-contour">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Highlight / Contour
                                                </div>
                                                <div class="vn_name">
                                                    Tạo khối
                                                </div>
                                            </div>
                                        </a></div>
                                </div>
                            </div>
                            <div class="browse_node_column">
                                <div class="browse_node_layer_1">
                                    <div class="heading">
                                        <a href="https://www.lixibox.com/shop/lips">
                                            <div class="name">
                                                Lip
                                            </div>
                                            <div class="vn_name">
                                                Môi
                                            </div>
                                        </a></div>
                                    <div class="sub_nodes">
                                        <a href="https://www.lixibox.com/shop/lipstick">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Lipstick
                                                </div>
                                                <div class="vn_name">
                                                    Son môi
                                                </div>
                                            </div>
                                        </a><a href="https://www.lixibox.com/shop/lip-gloss">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Lip Gloss
                                                </div>
                                                <div class="vn_name">
                                                    Son bóng
                                                </div>
                                            </div>
                                        </a><a href="https://www.lixibox.com/shop/lip-liner">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Lip Liner
                                                </div>
                                                <div class="vn_name">
                                                    Viền môi
                                                </div>
                                            </div>
                                        </a><a href="https://www.lixibox.com/shop/lip-balm-treatment">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Lip Treatment
                                                </div>
                                                <div class="vn_name">
                                                    Son dưỡng môi &amp; điều trị
                                                </div>
                                            </div>
                                        </a><a href="https://www.lixibox.com/shop/liquid-lipsticks">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Liquid Lipstick
                                                </div>
                                                <div class="vn_name">
                                                    Son kem
                                                </div>
                                            </div>
                                        </a><a href="https://www.lixibox.com/shop/lip-tint">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Lip Tint
                                                </div>
                                                <div class="vn_name">

                                                </div>
                                            </div>
                                        </a></div>
                                </div>
                            </div>
                            <div class="browse_node_column">
                                <div class="browse_node_layer_1">
                                    <div class="heading">
                                        <a href="https://www.lixibox.com/shop/makeup-sets">
                                            <div class="name">
                                                Makeup Sets
                                            </div>
                                            <div class="vn_name">
                                                Set trang điểm
                                            </div>
                                        </a></div>
                                </div>
                                <div class="browse_node_layer_1">
                                    <div class="heading">
                                        <a href="https://www.lixibox.com/shop/new-makeup">
                                            <div class="name">
                                                New Makeup
                                            </div>
                                            <div class="vn_name">
                                                Trang điểm mới nhất
                                            </div>
                                        </a></div>
                                </div>
                                <div class="browse_node_layer_1">
                                    <div class="heading">
                                        <a href="https://www.lixibox.com/shop/best-selling-makeup">
                                            <div class="name">
                                                Best Sellers Makeup
                                            </div>
                                            <div class="vn_name">
                                                Trang điểm hot nhất
                                            </div>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="top_layer_navigation dropdown">
                    <div class="dropdown-toggle" data-toggle="dropdown" type="hover">
                        <a href="https://www.lixibox.com/shop/hair">Tóc
                            <i class="fa fa-angle-down"></i>
                        </a></div>
                    <div class="dropdown-menu">
                        <div class="browse_nodes inner width_1">
                            <div class="browse_node_column">
                                <div class="browse_node_layer_1">
                                    <div class="heading">
                                        <a href="https://www.lixibox.com/shop/shampoo">
                                            <div class="name">
                                                Shampoo
                                            </div>
                                            <div class="vn_name">
                                                Dầu gội
                                            </div>
                                        </a></div>
                                </div>
                                <div class="browse_node_layer_1">
                                    <div class="heading">
                                        <a href="https://www.lixibox.com/shop/conditioner">
                                            <div class="name">
                                                Conditioner
                                            </div>
                                            <div class="vn_name">
                                                Dầu xả
                                            </div>
                                        </a></div>
                                </div>
                                <div class="browse_node_layer_1">
                                    <div class="heading">
                                        <a href="https://www.lixibox.com/shop/styling-products">
                                            <div class="name">
                                                Styling products
                                            </div>
                                            <div class="vn_name">
                                                Tạo kiểu
                                            </div>
                                        </a></div>
                                </div>
                                <div class="browse_node_layer_1">
                                    <div class="heading">
                                        <a href="https://www.lixibox.com/shop/treatment">
                                            <div class="name">
                                                Treatment
                                            </div>
                                            <div class="vn_name">
                                                Dưỡng tóc
                                            </div>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="top_layer_navigation dropdown">
                    <div class="dropdown-toggle" data-toggle="dropdown" type="hover">
                        <a href="https://www.lixibox.com/shop/skin-care">Dưỡng da
                            <i class="fa fa-angle-down"></i>
                        </a></div>
                    <div class="dropdown-menu">
                        <div class="browse_nodes inner width_4">
                            <div class="browse_node_column">
                                <div class="browse_node_layer_1">
                                    <div class="heading">
                                        <a href="https://www.lixibox.com/shop/cleanse">
                                            <div class="name">
                                                Cleanse
                                            </div>
                                            <div class="vn_name">
                                                Rửa mặt
                                            </div>
                                        </a></div>
                                    <div class="sub_nodes">
                                        <a href="https://www.lixibox.com/shop/makeup-remover">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Makeup remover
                                                </div>
                                                <div class="vn_name">
                                                    Tẩy trang
                                                </div>
                                            </div>
                                        </a><a href="https://www.lixibox.com/shop/scrub">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Exfoliators &amp; Scrub
                                                </div>
                                                <div class="vn_name">
                                                    Tẩy da chết
                                                </div>
                                            </div>
                                        </a><a href="https://www.lixibox.com/shop/face-wash">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Face wash &amp; Cleansers
                                                </div>
                                                <div class="vn_name">
                                                    Sữa rửa mặt
                                                </div>
                                            </div>
                                        </a><a href="https://www.lixibox.com/shop/cleansing-brush-amp-tools">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Cleansing Brushes &amp; Tools
                                                </div>
                                                <div class="vn_name">
                                                    Dụng cụ rửa mặt
                                                </div>
                                            </div>
                                        </a><a href="https://www.lixibox.com/shop/toners">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Toners
                                                </div>
                                                <div class="vn_name">
                                                    Nước hoa hồng
                                                </div>
                                            </div>
                                        </a></div>
                                </div>
                                <div class="browse_node_layer_1">
                                    <div class="heading">
                                        <a href="https://www.lixibox.com/shop/mask">
                                            <div class="name">
                                                Mask
                                            </div>
                                            <div class="vn_name">
                                                Mặt Nạ
                                            </div>
                                        </a></div>
                                    <div class="sub_nodes">
                                        <a href="https://www.lixibox.com/shop/sheet-masks">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Sheet Masks
                                                </div>
                                                <div class="vn_name">
                                                    Mặt Nạ Giấy
                                                </div>
                                            </div>
                                        </a><a href="https://www.lixibox.com/shop/mask-exfoliators">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Facial Masks
                                                </div>
                                                <div class="vn_name">
                                                    Mặt nạ
                                                </div>
                                            </div>
                                        </a></div>
                                </div>
                            </div>
                            <div class="browse_node_column">
                                <div class="browse_node_layer_1">
                                    <div class="heading">
                                        <a href="https://www.lixibox.com/shop/moisturizer">
                                            <div class="name">
                                                Moisturize
                                            </div>
                                            <div class="vn_name">
                                                Dưỡng ẩm
                                            </div>
                                        </a></div>
                                    <div class="sub_nodes">
                                        <a href="https://www.lixibox.com/shop/cream">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Night Cream
                                                </div>
                                                <div class="vn_name">
                                                    Kem dưỡng
                                                </div>
                                            </div>
                                        </a><a href="https://www.lixibox.com/shop/elmusion">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Elmusion / Lotion / Moisturizer
                                                </div>
                                                <div class="vn_name">
                                                    Sữa dưỡng
                                                </div>
                                            </div>
                                        </a><a href="https://www.lixibox.com/shop/gel">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Gel
                                                </div>
                                                <div class="vn_name">
                                                    Gel dưỡng
                                                </div>
                                            </div>
                                        </a><a href="https://www.lixibox.com/shop/face-oil">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Face oil
                                                </div>
                                                <div class="vn_name">
                                                    Dầu dưỡng
                                                </div>
                                            </div>
                                        </a><a href="https://www.lixibox.com/shop/eye-cream">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Eye Cream
                                                </div>
                                                <div class="vn_name">
                                                    Dưỡng da vùng mắt
                                                </div>
                                            </div>
                                        </a><a href="https://www.lixibox.com/shop/neck-cream">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Neck Cream
                                                </div>
                                                <div class="vn_name">
                                                    Dưỡng da vùng cổ
                                                </div>
                                            </div>
                                        </a><a href="https://www.lixibox.com/shop/face-mist">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Face Mist
                                                </div>
                                                <div class="vn_name">
                                                    Xịt khoáng
                                                </div>
                                            </div>
                                        </a></div>
                                </div>
                            </div>
                            <div class="browse_node_column">
                                <div class="browse_node_layer_1">
                                    <div class="heading">
                                        <a href="https://www.lixibox.com/shop/treat">
                                            <div class="name">
                                                Treat
                                            </div>
                                            <div class="vn_name">
                                                Trị liệu
                                            </div>
                                        </a></div>
                                    <div class="sub_nodes">
                                        <a href="https://www.lixibox.com/shop/message">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Massage
                                                </div>
                                                <div class="vn_name">

                                                </div>
                                            </div>
                                        </a><a href="https://www.lixibox.com/shop/blemish-acne-treaments">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Blemish &amp; Acne Treatments
                                                </div>
                                                <div class="vn_name">
                                                    Trị mụn
                                                </div>
                                            </div>
                                        </a><a href="https://www.lixibox.com/shop/facial-peels">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Facial Peels
                                                </div>
                                                <div class="vn_name">
                                                    Kem lột
                                                </div>
                                            </div>
                                        </a><a href="https://www.lixibox.com/shop/face-serum">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Essence / Serum/ Ampoule
                                                </div>
                                                <div class="vn_name">
                                                    Tinh chất
                                                </div>
                                            </div>
                                        </a><a href="https://www.lixibox.com/shop/eye-care">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Eye treatment/ serum
                                                </div>
                                                <div class="vn_name">
                                                    Dưỡng mắt
                                                </div>
                                            </div>
                                        </a></div>
                                </div>
                                <div class="browse_node_layer_1">
                                    <div class="heading">
                                        <a href="https://www.lixibox.com/shop/lip-treatment">
                                            <div class="name">
                                                Lip Treatment
                                            </div>
                                            <div class="vn_name">
                                                Dưỡng môi
                                            </div>
                                        </a></div>
                                </div>
                                <div class="browse_node_layer_1">
                                    <div class="heading">
                                        <a href="https://www.lixibox.com/shop/sunscreen">
                                            <div class="name">
                                                Sun protection
                                            </div>
                                            <div class="vn_name">
                                                Kem chống nắng
                                            </div>
                                        </a></div>
                                    <div class="sub_nodes">
                                        <a href="https://www.lixibox.com/shop/face-sunscreen">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Face Sunscreen
                                                </div>
                                                <div class="vn_name">
                                                    Kem chống nắng cho mặt
                                                </div>
                                            </div>
                                        </a><a href="https://www.lixibox.com/shop/body-sunscreen">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Body Sunscreen
                                                </div>
                                                <div class="vn_name">
                                                    Kem chống nắng cho body
                                                </div>
                                            </div>
                                        </a></div>
                                </div>
                            </div>
                            <div class="browse_node_column">
                                <div class="browse_node_layer_1">
                                    <div class="heading">
                                        <a href="https://www.lixibox.com/shop/skincare-sets">
                                            <div class="name">
                                                Skincare Sets
                                            </div>
                                            <div class="vn_name">
                                                Set dưỡng da
                                            </div>
                                        </a></div>
                                </div>
                                <div class="browse_node_layer_1">
                                    <div class="heading">
                                        <a href="https://www.lixibox.com/shop/new-skin-care">
                                            <div class="name">
                                                New Skin Care
                                            </div>
                                            <div class="vn_name">
                                                Dưỡng da mới nhất
                                            </div>
                                        </a></div>
                                </div>
                                <div class="browse_node_layer_1">
                                    <div class="heading">
                                        <a href="https://www.lixibox.com/shop/best-selling-skin-care">
                                            <div class="name">
                                                Best Sellers Skin Care
                                            </div>
                                            <div class="vn_name">
                                                Dưỡng da hot nhất
                                            </div>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="top_layer_navigation dropdown">
                    <div class="dropdown-toggle" data-toggle="dropdown" type="hover">
                        <a href="https://www.lixibox.com/shop/bath-body">Cơ thể
                            <i class="fa fa-angle-down"></i>
                        </a></div>
                    <div class="dropdown-menu">
                        <div class="browse_nodes inner width_1">
                            <div class="browse_node_column">
                                <div class="browse_node_layer_1">
                                    <div class="heading">
                                        <a href="https://www.lixibox.com/shop/perfume">
                                            <div class="name">
                                                Perfume
                                            </div>
                                            <div class="vn_name">
                                                Nước hoa
                                            </div>
                                        </a></div>
                                </div>
                                <div class="browse_node_layer_1">
                                    <div class="heading">
                                        <a href="https://www.lixibox.com/shop/lotions-creams">
                                            <div class="name">
                                                Body moisturizers
                                            </div>
                                            <div class="vn_name">
                                                Dưỡng thể
                                            </div>
                                        </a></div>
                                    <div class="sub_nodes">
                                        <a href="https://www.lixibox.com/shop/body-lotions-amp-oil">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Body Lotions &amp; Oil
                                                </div>
                                                <div class="vn_name">
                                                    Kem dưỡng da &amp; dầu
                                                </div>
                                            </div>
                                        </a><a href="https://www.lixibox.com/shop/hand-cream-amp-foot-cream">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Hand Cream &amp; Foot Cream
                                                </div>
                                                <div class="vn_name">
                                                    Dưỡng chân tay
                                                </div>
                                            </div>
                                        </a></div>
                                </div>
                                <div class="browse_node_layer_1">
                                    <div class="heading">
                                        <a href="https://www.lixibox.com/shop/bath-shower">
                                            <div class="name">
                                                Bath &amp; Shower
                                            </div>
                                            <div class="vn_name">
                                                Sữa tắm
                                            </div>
                                        </a></div>
                                    <div class="sub_nodes">
                                        <a href="https://www.lixibox.com/shop/body-scrub-amp-exfoliants">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Body Scrub &amp; Exfoliants
                                                </div>
                                                <div class="vn_name">
                                                    Tẩy da chết
                                                </div>
                                            </div>
                                        </a><a href="https://www.lixibox.com/shop/body-wash-amp-showel-gel">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Body Wash &amp; Showel Gel
                                                </div>
                                                <div class="vn_name">
                                                    Sữa tắm
                                                </div>
                                            </div>
                                        </a><a href="https://www.lixibox.com/shop/bath-soaks-amp-bubble-bath">
                                            <div class="browse_node_layer_2">
                                                <div class="name">
                                                    Bath Soaks &amp; Bubble Bath
                                                </div>
                                                <div class="vn_name">
                                                    Cho bồn tắm
                                                </div>
                                            </div>
                                        </a></div>
                                </div>
                                <div class="browse_node_layer_1">
                                    <div class="heading">
                                        <a href="https://www.lixibox.com/shop/sun-protection">
                                            <div class="name">
                                                Sun protection
                                            </div>
                                            <div class="vn_name">
                                                chống nắng
                                            </div>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="top_layer_navigation dropdown">
                    <div class="dropdown-toggle" data-toggle="dropdown" type="hover">
                        <a href="https://www.lixibox.com/shop/tools-accessories">Cọ &amp; Phụ kiện
                            <i class="fa fa-angle-down"></i>
                        </a></div>
                    <div class="dropdown-menu">
                        <div class="browse_nodes inner width_1">
                            <div class="browse_node_column">
                                <div class="browse_node_layer_1">
                                    <div class="heading">
                                        <a href="https://www.lixibox.com/shop/brush">
                                            <div class="name">
                                                Brush
                                            </div>
                                            <div class="vn_name">
                                                Cọ
                                            </div>
                                        </a></div>
                                </div>
                                <div class="browse_node_layer_1">
                                    <div class="heading">
                                        <a href="https://www.lixibox.com/shop/sponge">
                                            <div class="name">
                                                Sponge
                                            </div>
                                            <div class="vn_name">

                                            </div>
                                        </a></div>
                                </div>
                                <div class="browse_node_layer_1">
                                    <div class="heading">
                                        <a href="https://www.lixibox.com/shop/other-tools">
                                            <div class="name">
                                                Other
                                            </div>
                                            <div class="vn_name">
                                                Khác
                                            </div>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="top_layer_navigation dropdown">
                    <div class="dropdown-toggle" data-toggle="dropdown" type="hover">
                        <a href="https://www.lixibox.com/brands">Thương hiệu
                            <i class="fa fa-angle-down"></i>
                        </a></div>
                    <div class="dropdown-menu">
                        <div class="inner brands">
                            <div class="brand_list">
                                <div brand_group="#" class="brand_group">
                                    <div class="heading">#</div>
                                    <div class="body">
                                        <a href="https://www.lixibox.com/brands/111skin">111SKIN</a>
                                        <a href="https://www.lixibox.com/brands/3ce">3CE</a>
                                    </div>
                                </div>
                                <div brand_group="A" class="brand_group">
                                    <div class="heading">A</div>
                                    <div class="body">
                                        <a href="https://www.lixibox.com/brands/a-pieu">A'Pieu</a>
                                        <a href="https://www.lixibox.com/brands/aritaum">Aritaum</a>
                                        <a href="https://www.lixibox.com/brands/apieu">APIEU</a>
                                        <a href="https://www.lixibox.com/brands/andalou-naturals">Andalou Naturals</a>
                                        <a href="https://www.lixibox.com/brands/algenist">Algenist</a>
                                        <a href="https://www.lixibox.com/brands/amok">Amok</a>
                                        <a href="https://www.lixibox.com/brands/arpil-skin">April Skin</a>
                                        <a href="https://www.lixibox.com/brands/artis">Artis</a>
                                        <a href="https://www.lixibox.com/brands/atelier-cologne">Atelier Cologne</a>
                                        <a href="https://www.lixibox.com/brands/amore-pacific">Amore Pacific</a>
                                        <a href="https://www.lixibox.com/brands/agapan">Agapan</a>
                                        <a href="https://www.lixibox.com/brands/anastasia-beverly-hills">Anastasia
                                            Beverly Hills</a>
                                        <a href="https://www.lixibox.com/brands/alterna-caviar">Alterna Caviar</a>
                                        <a href="https://www.lixibox.com/brands/american-crew">American Crew</a>
                                        <a href="https://www.lixibox.com/brands/absolute-new-york">Absolute New York</a>
                                        <a href="https://www.lixibox.com/brands/antica-farmacista">Antica
                                            Farmacista </a>
                                        <a href="https://www.lixibox.com/brands/ahava">AHAVA </a>
                                        <a href="https://www.lixibox.com/brands/arcancil-paris">ARCANCIL PARIS</a>
                                        <a href="https://www.lixibox.com/brands/anessa">Anessa</a>
                                    </div>
                                </div>
                                <div brand_group="B" class="brand_group">
                                    <div class="heading">B</div>
                                    <div class="body">
                                        <a href="https://www.lixibox.com/brands/banila-co">Banila Co</a>
                                        <a href="https://www.lixibox.com/brands/burt-s-bees">Burt's Bees</a>
                                        <a href="https://www.lixibox.com/brands/bite-beauty">Bite Beauty</a>
                                        <a href="https://www.lixibox.com/brands/benefit">Benefit</a>
                                        <a href="https://www.lixibox.com/brands/bourjois">Bourjois</a>
                                        <a href="https://www.lixibox.com/brands/biore">Biore</a>
                                        <a href="https://www.lixibox.com/brands/bioderma">Bioderma</a>
                                        <a href="https://www.lixibox.com/brands/bliss">Bliss</a>
                                        <a href="https://www.lixibox.com/brands/bh-cosmetics">BH Cosmetics</a>
                                        <a href="https://www.lixibox.com/brands/beaugachis">BeauGachis</a>
                                        <a href="https://www.lixibox.com/brands/bisous">Bisous Bisous</a>
                                        <a href="https://www.lixibox.com/brands/belif">Belif</a>
                                        <a href="https://www.lixibox.com/brands/buxom-cosmetics">Buxom Cosmetics</a>
                                        <a href="https://www.lixibox.com/brands/by-terry">By Terry</a>
                                        <a href="https://www.lixibox.com/brands/bella-j">Bella J</a>
                                        <a href="https://www.lixibox.com/brands/black-rouge">Black Rouge</a>
                                        <a href="https://www.lixibox.com/brands/bare-blanc">Bare Blanc </a>
                                        <a href="https://www.lixibox.com/brands/banobagi">Banobagi</a>
                                        <a href="https://www.lixibox.com/brands/balance-me">balance me</a>
                                        <a href="https://www.lixibox.com/brands/balanced-guru">Balanced Guru</a>
                                        <a href="https://www.lixibox.com/brands/billy-jealousy">Billy Jealousy</a>
                                        <a href="https://www.lixibox.com/brands/bulldog-natural-skincare">Bulldog
                                            Natural Skincare</a>
                                        <a href="https://www.lixibox.com/brands/beautyblender">Beautyblender</a>
                                        <a href="https://www.lixibox.com/brands/btemptd">Btemptd</a>
                                        <a href="https://www.lixibox.com/brands/byphasse">Byphasse</a>
                                        <a href="https://www.lixibox.com/brands/beuins">Beuins</a>
                                    </div>
                                </div>
                                <div brand_group="C" class="brand_group">
                                    <div class="heading">C</div>
                                    <div class="body">
                                        <a href="https://www.lixibox.com/brands/chanel">Chanel</a>
                                        <a href="https://www.lixibox.com/brands/cosrx">Cosrx</a>
                                        <a href="https://www.lixibox.com/brands/ciracle">Ciracle</a>
                                        <a href="https://www.lixibox.com/brands/cerave">CeraVe</a>
                                        <a href="https://www.lixibox.com/brands/clinique">Clinique </a>
                                        <a href="https://www.lixibox.com/brands/caudalie-370d3866-2aaa-49c8-841c-23b3465725cd">Caudalie</a>
                                        <a href="https://www.lixibox.com/brands/city-color">City Color</a>
                                        <a href="https://www.lixibox.com/brands/colourpop">ColourPop</a>
                                        <a href="https://www.lixibox.com/brands/chic-holic">Chic Holic</a>
                                        <a href="https://www.lixibox.com/brands/cle-de-peau-beaute">Clé De Peau
                                            Beauté</a>
                                        <a href="https://www.lixibox.com/brands/clarins">Clarins</a>
                                        <a href="https://www.lixibox.com/brands/charlotte-tilbury">Charlotte Tilbury</a>
                                        <a href="https://www.lixibox.com/brands/calvin-klein">Calvin Klein</a>
                                        <a href="https://www.lixibox.com/brands/clematis">Clematis</a>
                                        <a href="https://www.lixibox.com/brands/chikuhodo">Chikuhodo</a>
                                        <a href="https://www.lixibox.com/brands/ciate-london">Ciate London</a>
                                        <a href="https://www.lixibox.com/brands/cover-fx">Cover Fx</a>
                                        <a href="https://www.lixibox.com/brands/corine-de-farme">Corine de Farme</a>
                                        <a href="https://www.lixibox.com/brands/choonee">CHOONEE</a>
                                        <a href="https://www.lixibox.com/brands/crazy-skin">Crazy Skin</a>
                                        <a href="https://www.lixibox.com/brands/cosforu">Cosforu</a>
                                        <a href="https://www.lixibox.com/brands/christian-lenart">Christian Lenart</a>
                                    </div>
                                </div>
                                <div brand_group="D" class="brand_group">
                                    <div class="heading">D</div>
                                    <div class="body">
                                        <a href="https://www.lixibox.com/brands/dermalogica">Dermalogica</a>
                                        <a href="https://www.lixibox.com/brands/dior">Dior</a>
                                        <a href="https://www.lixibox.com/brands/dhc">DHC</a>
                                        <a href="https://www.lixibox.com/brands/diptyque">Diptyque</a>
                                        <a href="https://www.lixibox.com/brands/dr-bronner-s">Dr.Bronner's</a>
                                        <a href="https://www.lixibox.com/brands/dolly-wink">Dolly Wink</a>
                                        <a href="https://www.lixibox.com/brands/dr-althea">Dr.Althea</a>
                                        <a href="https://www.lixibox.com/brands/dr-dennis-gross">Dr. Dennis Gross
                                            Skincare</a>
                                        <a href="https://www.lixibox.com/brands/dkcc">DKCC</a>
                                        <a href="https://www.lixibox.com/brands/drunk-elephant">Drunk Elephant</a>
                                        <a href="https://www.lixibox.com/brands/drybar">Drybar</a>
                                        <a href="https://www.lixibox.com/brands/dkny">DKNY</a>
                                        <a href="https://www.lixibox.com/brands/dr-botanicals">DR BOTANICALS</a>
                                        <a href="https://www.lixibox.com/brands/deborah-milano">Deborah Milano</a>
                                        <a href="https://www.lixibox.com/brands/dr-brandt">Dr. Brandt</a>
                                        <a href="https://www.lixibox.com/brands/debolab">Dermolab</a>
                                        <a href="https://www.lixibox.com/brands/dalan-d-olive">Dalan d'Olive</a>
                                        <a href="https://www.lixibox.com/brands/dearanchy">DeAranchy</a>
                                        <a href="https://www.lixibox.com/brands/dr-grand">Dr. Grand+</a>
                                    </div>
                                </div>
                                <div brand_group="E" class="brand_group">
                                    <div class="heading">E</div>
                                    <div class="body">
                                        <a href="https://www.lixibox.com/brands/e-l-f">e.l.f</a>
                                        <a href="https://www.lixibox.com/brands/etude-house">ETUDE HOUSE</a>
                                        <a href="https://www.lixibox.com/brands/estee-lauder">Estee Lauder </a>
                                        <a href="https://www.lixibox.com/brands/espoir">Espoir</a>
                                        <a href="https://www.lixibox.com/brands/enprani">Enprani </a>
                                        <a href="https://www.lixibox.com/brands/eve-lom">EVE LOM</a>
                                        <a href="https://www.lixibox.com/brands/eos">EOS</a>
                                        <a href="https://www.lixibox.com/brands/em-cosmetics">EM Cosmetics </a>
                                        <a href="https://www.lixibox.com/brands/elta-md-skin-care">ELTA MD Skin Care</a>
                                        <a href="https://www.lixibox.com/brands/estee-edit">Estee Edit </a>
                                        <a href="https://www.lixibox.com/brands/exuviance">Exuviance</a>
                                        <a href="https://www.lixibox.com/brands/erno-laszlo">ERNO LASZLO </a>
                                        <a href="https://www.lixibox.com/brands/elizabeth-arden">Elizabeth Arden</a>
                                        <a href="https://www.lixibox.com/brands/eclipse-colours">Eclipse Colours</a>
                                        <a href="https://www.lixibox.com/brands/evoluderm">Evoluderm</a>
                                        <a href="https://www.lixibox.com/brands/evas">EVAS</a>
                                        <a href="https://www.lixibox.com/brands/esthepure">ESTHEPURE</a>
                                    </div>
                                </div>
                                <div brand_group="F" class="brand_group">
                                    <div class="heading">F</div>
                                    <div class="body">
                                        <a href="https://www.lixibox.com/brands/fresh">Fresh</a>
                                        <a href="https://www.lixibox.com/brands/foreo">Foreo</a>
                                        <a href="https://www.lixibox.com/brands/fascy">Fascy</a>
                                        <a href="https://www.lixibox.com/brands/fenty-beauty">Fenty Beauty</a>
                                        <a href="https://www.lixibox.com/brands/feferafe">FEFERAFE</a>
                                    </div>
                                </div>
                                <div brand_group="G" class="brand_group">
                                    <div class="heading">G</div>
                                    <div class="body">
                                        <a href="https://www.lixibox.com/brands/garnier-skin-naturals">Garnier Skin
                                            Naturals</a>
                                        <a href="https://www.lixibox.com/brands/guerlain">Guerlain</a>
                                        <a href="https://www.lixibox.com/brands/guerisson">Guérisson</a>
                                        <a href="https://www.lixibox.com/brands/giorgio-armani">Giorgio Armani</a>
                                        <a href="https://www.lixibox.com/brands/golden-rose">Golden Rose</a>
                                        <a href="https://www.lixibox.com/brands/grow-gorgeous">GROW GORGEOUS</a>
                                    </div>
                                </div>
                                <div brand_group="H" class="brand_group">
                                    <div class="heading">H</div>
                                    <div class="body">
                                        <a href="https://www.lixibox.com/brands/hourglass">Hourglass</a>
                                        <a href="https://www.lixibox.com/brands/hermes">Hermes</a>
                                        <a href="https://www.lixibox.com/brands/huda-beauty">Huda Beauty</a>
                                        <a href="https://www.lixibox.com/brands/hormocenta">Hormocenta</a>
                                        <a href="https://www.lixibox.com/brands/halio">Halio</a>
                                        <a href="https://www.lixibox.com/brands/hakumai-hakkou">Hakumai - Hakkou</a>
                                        <a href="https://www.lixibox.com/brands/herbivore-botanicals">Herbivore
                                            Botanicals</a>
                                        <a href="https://www.lixibox.com/brands/hanky-panky">HANKY PANKY </a>
                                        <a href="https://www.lixibox.com/brands/huxley">Huxley</a>
                                    </div>
                                </div>
                                <div brand_group="I" class="brand_group">
                                    <div class="heading">I</div>
                                    <div class="body">
                                        <a href="https://www.lixibox.com/brands/innisfree">Innisfree</a>
                                        <a href="https://www.lixibox.com/brands/it-s-skin">It's Skin</a>
                                        <a href="https://www.lixibox.com/brands/kiss-me-heroine">Isehan</a>
                                        <a href="https://www.lixibox.com/brands/naturie">IMJU </a>
                                        <a href="https://www.lixibox.com/brands/inc-international-concepts">INC
                                            International Concepts</a>
                                        <a href="https://www.lixibox.com/brands/it-s-well-plus">It's Well Plus</a>
                                    </div>
                                </div>
                                <div brand_group="J" class="brand_group">
                                    <div class="heading">J</div>
                                    <div class="body">
                                        <a href="https://www.lixibox.com/brands/josie-maran">Josie Maran</a>
                                        <a href="https://www.lixibox.com/brands/just-a-time">Just A Time</a>
                                        <a href="https://www.lixibox.com/brands/jack-black">Jack Black</a>
                                        <a href="https://www.lixibox.com/brands/julep">Julep</a>
                                        <a href="https://www.lixibox.com/brands/jo-malone">Jo Malone</a>
                                        <a href="https://www.lixibox.com/brands/juara">Juara</a>
                                        <a href="https://www.lixibox.com/brands/juice-beauty">Juice Beauty</a>
                                        <a href="https://www.lixibox.com/brands/jeffreestar-cosmetic">Jeffree Star
                                            Cosmetics</a>
                                        <a href="https://www.lixibox.com/brands/juicy-couture">Juicy Couture</a>
                                        <a href="https://www.lixibox.com/brands/jouer-cosmetics">Jouer Cosmetics</a>
                                        <a href="https://www.lixibox.com/brands/jurlique">Jurlique</a>
                                        <a href="https://www.lixibox.com/brands/jenni">Jenni</a>
                                    </div>
                                </div>
                                <div brand_group="K" class="brand_group">
                                    <div class="heading">K</div>
                                    <div class="body">
                                        <a href="https://www.lixibox.com/brands/kose">KOSE</a>
                                        <a href="https://www.lixibox.com/brands/kat-burki">Kat Burki</a>
                                        <a href="https://www.lixibox.com/brands/kate-somerville">Kate Somerville</a>
                                        <a href="https://www.lixibox.com/brands/katvon-d">KatVon D</a>
                                        <a href="https://www.lixibox.com/brands/kikoiko">Kiko Milano</a>
                                        <a href="https://www.lixibox.com/brands/kiehl-s-8dc38705-b1ed-4cbc-8a1c-77ebb0a91be8">Kiehl's</a>
                                        <a href="https://www.lixibox.com/brands/kateceuticals">KateCeuticals</a>
                                        <a href="https://www.lixibox.com/brands/kylie">Kylie </a>
                                        <a href="https://www.lixibox.com/brands/kiara-phytoceuticals">Kiara
                                            Phytoceuticals</a>
                                        <a href="https://www.lixibox.com/brands/kenra">Kenra</a>
                                        <a href="https://www.lixibox.com/brands/know-cosmetics">Know Cosmetics</a>
                                        <a href="https://www.lixibox.com/brands/kokie-cosmetics">Kokie Cosmetics</a>
                                        <a href="https://www.lixibox.com/brands/kiss-new-york-professional">Kiss New
                                            York Professional</a>
                                    </div>
                                </div>
                                <div brand_group="L" class="brand_group">
                                    <div class="heading">L</div>
                                    <div class="body">
                                        <a href="https://www.lixibox.com/brands/lipstick-queen">Lipstick Queen</a>
                                        <a href="https://www.lixibox.com/brands/laneige">Laneige</a>
                                        <a href="https://www.lixibox.com/brands/l-oreal">L’oreal</a>
                                        <a href="https://www.lixibox.com/brands/lancome">Lancome</a>
                                        <a href="https://www.lixibox.com/brands/la-mer">La Mer</a>
                                        <a href="https://www.lixibox.com/brands/lorac">Lorac</a>
                                        <a href="https://www.lixibox.com/brands/l-a-girl">L.A Girl</a>
                                        <a href="https://www.lixibox.com/brands/lilah-beauty">Lilah Beauty</a>
                                        <a href="https://www.lixibox.com/brands/laura-mercier">Laura Mercier</a>
                                        <a href="https://www.lixibox.com/brands/l-oreal-c350113f-051d-4541-96e7-00162a7e53ee">L'OREAL</a>
                                        <a href="https://www.lixibox.com/brands/lixibox">Lixibox</a>
                                        <a href="https://www.lixibox.com/brands/le-metier">Le Metier</a>
                                        <a href="https://www.lixibox.com/brands/la-roche-posay">La Roche Posay</a>
                                        <a href="https://www.lixibox.com/brands/lustre">LUSTRE MAKEUP</a>
                                        <a href="https://www.lixibox.com/brands/living-proof">Living Proof</a>
                                        <a href="https://www.lixibox.com/brands/luxie-beauty">Luxie Beauty</a>
                                        <a href="https://www.lixibox.com/brands/lime-crime">Lime Crime</a>
                                        <a href="https://www.lixibox.com/brands/lily-may-mac-collection">Lily May Mac
                                            Collection</a>
                                        <a href="https://www.lixibox.com/brands/le-petit-olivier">Le Petit Olivier</a>
                                    </div>
                                </div>
                                <div brand_group="M" class="brand_group">
                                    <div class="heading">M</div>
                                    <div class="body">
                                        <a href="https://www.lixibox.com/brands/missha">Missha</a>
                                        <a href="https://www.lixibox.com/brands/maybelline">Maybelline</a>
                                        <a href="https://www.lixibox.com/brands/mediheal">Mediheal</a>
                                        <a href="https://www.lixibox.com/brands/marula">Marula</a>
                                        <a href="https://www.lixibox.com/brands/marc-jacobs">Marc Jacobs</a>
                                        <a href="https://www.lixibox.com/brands/maycoop">Maycoop</a>
                                        <a href="https://www.lixibox.com/brands/make-up-forever">Make Up Forever</a>
                                        <a href="https://www.lixibox.com/brands/marraine">Marraine</a>
                                        <a href="https://www.lixibox.com/brands/macqueen">MacQueen</a>
                                        <a href="https://www.lixibox.com/brands/m-a-c-cosmetics">M.A.C Cosmetics</a>
                                        <a href="https://www.lixibox.com/brands/michael-kors">Michael Kors</a>
                                        <a href="https://www.lixibox.com/brands/molton-brown">Molton Brown</a>
                                        <a href="https://www.lixibox.com/brands/malin-goetz">MALIN+GOETZ</a>
                                        <a href="https://www.lixibox.com/brands/muji">Muji</a>
                                        <a href="https://www.lixibox.com/brands/morphe">Morphe</a>
                                        <a href="https://www.lixibox.com/brands/mad-hippie">Mad Hippie</a>
                                        <a href="https://www.lixibox.com/brands/marcelle">Marcelle</a>
                                        <a href="https://www.lixibox.com/brands/macy-s">Macy's</a>
                                        <a href="https://www.lixibox.com/brands/matrix">Matrix</a>
                                        <a href="https://www.lixibox.com/brands/mise-en-scene">Mise-en-scène</a>
                                        <a href="https://www.lixibox.com/brands/miriam-quevedo">MIRIAM QUEVEDO</a>
                                        <a href="https://www.lixibox.com/brands/milk">Milk</a>
                                        <a href="https://www.lixibox.com/brands/maison-margiela">Maison Margiela</a>
                                        <a href="https://www.lixibox.com/brands/mychelle">MyChelle</a>
                                        <a href="https://www.lixibox.com/brands/melano-cc">Melano CC</a>
                                        <a href="https://www.lixibox.com/brands/madenform">Maidenform</a>
                                        <a href="https://www.lixibox.com/brands/mario-badescu">Mario Badescu </a>
                                        <a href="https://www.lixibox.com/brands/monu-skin">Monu Skin</a>
                                    </div>
                                </div>
                                <div brand_group="N" class="brand_group">
                                    <div class="heading">N</div>
                                    <div class="body">
                                        <a href="https://www.lixibox.com/brands/nots">NOTS</a>
                                        <a href="https://www.lixibox.com/brands/nyx">NYX Professional Makeup</a>
                                        <a href="https://www.lixibox.com/brands/neutrogena">Neutrogena</a>
                                        <a href="https://www.lixibox.com/brands/nars">Nars</a>
                                        <a href="https://www.lixibox.com/brands/nuxe">Nuxe</a>
                                        <a href="https://www.lixibox.com/brands/nature-republic">NATURE REPUBLIC </a>
                                        <a href="https://www.lixibox.com/brands/naked-princess">Naked Princess</a>
                                        <a href="https://www.lixibox.com/brands/nairian">Nairian</a>
                                        <a href="https://www.lixibox.com/brands/narciso">Narciso</a>
                                    </div>
                                </div>
                                <div brand_group="O" class="brand_group">
                                    <div class="heading">O</div>
                                    <div class="body">
                                        <a href="https://www.lixibox.com/brands/ole-henriksen">Ole Henriksen</a>
                                        <a href="https://www.lixibox.com/brands/origins">Origins</a>
                                        <a href="https://www.lixibox.com/brands/oribe">Oribe</a>
                                        <a href="https://www.lixibox.com/brands/ofra">Ofra</a>
                                        <a href="https://www.lixibox.com/brands/ohui">OHUI</a>
                                        <a href="https://www.lixibox.com/brands/oval-brush">Oval Brush</a>
                                        <a href="https://www.lixibox.com/brands/okame">OKAME Skincare</a>
                                        <a href="https://www.lixibox.com/brands/omorovicza">OMOROVICZA</a>
                                        <a href="https://www.lixibox.com/brands/oolution">oOlution</a>
                                        <a href="https://www.lixibox.com/brands/olea-color">Olea Color</a>
                                        <a href="https://www.lixibox.com/brands/o-lysee">O'lysee</a>
                                    </div>
                                </div>
                                <div brand_group="P" class="brand_group">
                                    <div class="heading">P</div>
                                    <div class="body">
                                        <a href="https://www.lixibox.com/brands/paula-s-choice-f364053a-b6f2-4fbe-a8eb-b73eb17adcdb">Paula's
                                            Choice</a>
                                        <a href="https://www.lixibox.com/brands/prelab">Prelab</a>
                                        <a href="https://www.lixibox.com/brands/plus">PLUS</a>
                                        <a href="https://www.lixibox.com/brands/philosophy">Philosophy</a>
                                        <a href="https://www.lixibox.com/brands/purlisse">Purlisse</a>
                                        <a href="https://www.lixibox.com/brands/pop-beauty">POP Beauty</a>
                                        <a href="https://www.lixibox.com/brands/pixi-by-petra">Pixi by Petra</a>
                                        <a href="https://www.lixibox.com/brands/philip-kingsley">Philip Kingsley </a>
                                        <a href="https://www.lixibox.com/brands/peter-thomas-roth">Peter Thomas
                                            Roth </a>
                                        <a href="https://www.lixibox.com/brands/petite-lael">PETITE LAEL </a>
                                    </div>
                                </div>
                                <div brand_group="Q" class="brand_group">
                                    <div class="heading">Q</div>
                                    <div class="body">
                                        <a href="https://www.lixibox.com/brands/quality-1st">Quality 1st</a>
                                        <a href="https://www.lixibox.com/brands/queen-helene">Queen Helene</a>
                                    </div>
                                </div>
                                <div brand_group="R" class="brand_group">
                                    <div class="heading">R</div>
                                    <div class="body">
                                        <a href="https://www.lixibox.com/brands/rimmel">Rimmel</a>
                                        <a href="https://www.lixibox.com/brands/real-techniques">real Techniques</a>
                                        <a href="https://www.lixibox.com/brands/revive">ReVive</a>
                                        <a href="https://www.lixibox.com/brands/rire">Rire</a>
                                        <a href="https://www.lixibox.com/brands/revlon">Revlon</a>
                                        <a href="https://www.lixibox.com/brands/rodial-skincare">Rodial Skincare</a>
                                        <a href="https://www.lixibox.com/brands/rcma-make-up">RCMA Make-up</a>
                                        <a href="https://www.lixibox.com/brands/radha-beauty">Radha Beauty</a>
                                    </div>
                                </div>
                                <div brand_group="S" class="brand_group">
                                    <div class="heading">S</div>
                                    <div class="body">
                                        <a href="https://www.lixibox.com/brands/secret-key">Secret Key</a>
                                        <a href="https://www.lixibox.com/brands/sephora">Sephora</a>
                                        <a href="https://www.lixibox.com/brands/shiseido">Shiseido</a>
                                        <a href="https://www.lixibox.com/brands/swanicoco">Swanicoco</a>
                                        <a href="https://www.lixibox.com/brands/simple">Simple</a>
                                        <a href="https://www.lixibox.com/brands/strivectin">Strivectin</a>
                                        <a href="https://www.lixibox.com/brands/smashbox">Smashbox</a>
                                        <a href="https://www.lixibox.com/brands/sum-37">SU:M37</a>
                                        <a href="https://www.lixibox.com/brands/sunday-riley">Sunday Riley</a>
                                        <a href="https://www.lixibox.com/brands/silky-veil">Silky Veil</a>
                                        <a href="https://www.lixibox.com/brands/shu-uemura">Shu Uemura</a>
                                        <a href="https://www.lixibox.com/brands/slinky-touch">Slinky Touch</a>
                                        <a href="https://www.lixibox.com/brands/himecoto">Shiro Waki Hime </a>
                                        <a href="https://www.lixibox.com/brands/son-park">Son &amp; Park</a>
                                        <a href="https://www.lixibox.com/brands/smith-and-cult">Smith and Cult</a>
                                        <a href="https://www.lixibox.com/brands/stila-cosmetics">Stila Cosmetics</a>
                                        <a href="https://www.lixibox.com/brands/senka">Senka</a>
                                        <a href="https://www.lixibox.com/brands/skin-ceuticals">Skin Ceuticals</a>
                                        <a href="https://www.lixibox.com/brands/silcot">Silcot</a>
                                        <a href="https://www.lixibox.com/brands/skin1004">Skin1004</a>
                                        <a href="https://www.lixibox.com/brands/suiskin">Suiskin</a>
                                        <a href="https://www.lixibox.com/brands/svr">SVR </a>
                                        <a href="https://www.lixibox.com/brands/sigma">Sigma</a>
                                        <a href="https://www.lixibox.com/brands/studiomakeup">STUDIOMAKEUP</a>
                                        <a href="https://www.lixibox.com/brands/secret-nocturn">Secret Nocturn</a>
                                        <a href="https://www.lixibox.com/brands/secriss">Secriss</a>
                                    </div>
                                </div>
                                <div brand_group="T" class="brand_group">
                                    <div class="heading">T</div>
                                    <div class="body">
                                        <a href="https://www.lixibox.com/brands/the-saem">The Saem</a>
                                        <a href="https://www.lixibox.com/brands/the-balm">The Balm</a>
                                        <a href="https://www.lixibox.com/brands/tatcha">Tatcha</a>
                                        <a href="https://www.lixibox.com/brands/tom-ford">Tom Ford</a>
                                        <a href="https://www.lixibox.com/brands/tarte">Tarte</a>
                                        <a href="https://www.lixibox.com/brands/the-face-shop">The Face Shop</a>
                                        <a href="https://www.lixibox.com/brands/too-faced">Too Faced</a>
                                        <a href="https://www.lixibox.com/brands/timeless">Timeless</a>
                                        <a href="https://www.lixibox.com/brands/thayers">Thayers</a>
                                        <a href="https://www.lixibox.com/brands/lemon-pharma">Tamalys</a>
                                        <a href="https://www.lixibox.com/brands/three-trees">Three Trees</a>
                                        <a href="https://www.lixibox.com/brands/the-duo-rain-drop">the Duo Rain drop</a>
                                        <a href="https://www.lixibox.com/brands/the-browgal">THE BROWGAL</a>
                                    </div>
                                </div>
                                <div brand_group="U" class="brand_group">
                                    <div class="heading">U</div>
                                    <div class="body">
                                        <a href="https://www.lixibox.com/brands/urban-decay">Urban Decay</a>
                                        <a href="https://www.lixibox.com/brands/ulta">Ulta</a>
                                        <a href="https://www.lixibox.com/brands/unpa">Unpa</a>
                                    </div>
                                </div>
                                <div brand_group="V" class="brand_group">
                                    <div class="heading">V</div>
                                    <div class="body">
                                        <a href="https://www.lixibox.com/brands/valmont">VALMONT</a>
                                    </div>
                                </div>
                                <div brand_group="W" class="brand_group">
                                    <div class="heading">W</div>
                                    <div class="body">
                                        <a href="https://www.lixibox.com/brands/w7">W7</a>
                                        <a href="https://www.lixibox.com/brands/whamisa">Whamisa</a>
                                        <a href="https://www.lixibox.com/brands/wet-n-wild-beauty">Wet n Wild Beauty</a>
                                    </div>
                                </div>
                                <div brand_group="Y" class="brand_group">
                                    <div class="heading">Y</div>
                                    <div class="body">
                                        <a href="https://www.lixibox.com/brands/yves-saint-laurent">Yves Saint
                                            Laurent</a>
                                    </div>
                                </div>
                            </div>
                            <div class="brand_group_names">
                                <div class="brand_group_name all">
                                    <a href="https://www.lixibox.com/brands">Tất cả</a>
                                </div>
                                <div brand_group="#" class="brand_group_name">#</div>
                                <div brand_group="A" class="brand_group_name">A</div>
                                <div brand_group="B" class="brand_group_name">B</div>
                                <div brand_group="C" class="brand_group_name">C</div>
                                <div brand_group="D" class="brand_group_name">D</div>
                                <div brand_group="E" class="brand_group_name">E</div>
                                <div brand_group="F" class="brand_group_name">F</div>
                                <div brand_group="G" class="brand_group_name">G</div>
                                <div brand_group="H" class="brand_group_name">H</div>
                                <div brand_group="I" class="brand_group_name">I</div>
                                <div brand_group="J" class="brand_group_name">J</div>
                                <div brand_group="K" class="brand_group_name">K</div>
                                <div brand_group="L" class="brand_group_name">L</div>
                                <div brand_group="M" class="brand_group_name">M</div>
                                <div brand_group="N" class="brand_group_name">N</div>
                                <div brand_group="O" class="brand_group_name">O</div>
                                <div brand_group="P" class="brand_group_name">P</div>
                                <div brand_group="Q" class="brand_group_name">Q</div>
                                <div brand_group="R" class="brand_group_name">R</div>
                                <div brand_group="S" class="brand_group_name">S</div>
                                <div brand_group="T" class="brand_group_name">T</div>
                                <div brand_group="U" class="brand_group_name">U</div>
                                <div brand_group="V" class="brand_group_name">V</div>
                                <div brand_group="W" class="brand_group_name">W</div>
                                <div brand_group="Y" class="brand_group_name">Y</div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="top_layer_navigation sale-tag">
                    <a href="https://www.lixibox.com/sale">SALE</a>
                </li>
                <li class="top_layer_navigation dropdown special-tag">
                    <div class="dropdown-toggle" data-toggle="dropdown" type="hover">
                        Đặc biệt
                    </div>
                    <div class="dropdown-menu">
                        <div class="inner themes">
                            <a class="theme_navigation " href="https://www.lixibox.com/shop/theme/sale-304">
                                <div class="name">
                                    Nghỉ thả ga, săn sale cực đã
                                    <div class="label label-danger">hot</div>
                                </div>
                                <div class="description">

                                </div>
                            </a><a class="theme_navigation " href="https://www.lixibox.com/shop/theme/minisize-product">
                                <div class="name">
                                    Sản phẩm minisize
                                    <div class="label label-danger">hot</div>
                                </div>
                                <div class="description">

                                </div>
                            </a><a class="theme_navigation " href="https://www.lixibox.com/shop/theme/hello-summer">
                                <div class="name">
                                    Hello Summer
                                </div>
                                <div class="description">

                                </div>
                            </a><a class="theme_navigation "
                                   href="https://www.lixibox.com/shop/theme/high-end-lipstick-and-makeup-sales">
                                <div class="name">
                                    High-end lipstick and makeup sales
                                </div>
                                <div class="description">

                                </div>
                            </a><a class="theme_navigation "
                                   href="https://www.lixibox.com/shop/theme/lixibox-birthday-sale">
                                <div class="name">
                                    Lixibox Birthday Sale
                                </div>
                                <div class="description">

                                </div>
                            </a><a class="theme_navigation "
                                   href="https://www.lixibox.com/shop/theme/best-choices-favorites-set">
                                <div class="name">
                                    Best Choices - Favorites Set
                                </div>
                                <div class="description">

                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="top_layer_navigation pull-right" id="desktop_cart">
                    <div class="dropdown-hover">
                        <div class="header_bar_item cart-icon">
                            <a href="https://www.lixibox.com/cart"><i class="fa fa-shopping-bag"></i>
                                <span>Giỏ hàng</span>
                            </a></div>
                        <div class="dropdown-hover-content">
                            <p class="empty-cart">Giỏ Hàng đang rỗng</p>
                        </div>
                    </div>

                </li>
                <li class="top_layer_navigation pull-right wishlist-navigation">
                    <a href="https://www.lixibox.com/user/wishlist"><span class="icon-wishlist">
<i class="fa fa-heart"></i>
</span>
                    </a><span class="line-right-swap"></span>
                </li>
                <div class="clearfix"></div>
            </ul>
        </div>
    </div>
    <div id="header_banner">
        <a class="ga-track-link" data-eventcategory="Header Banner" data-eventlabel="Banner Weekly specials"
           href="https://www.lixibox.com/special_deals/weekly-specials" title="Weekly specials">
            <img width="1140" height="60" class="hidden" data-index="0" alt="Weekly specials"
                 src="/lixibox/images/banner_sub-3.jpg">
        </a>
        <a class="ga-track-link" data-eventcategory="Header Banner" data-eventlabel="Banner Okame special deals"
           href="https://www.lixibox.com/shop/theme/okame-body-hair-care-special-deal" title="Okame special deals">
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
