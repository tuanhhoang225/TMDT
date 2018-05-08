<?php
/**
 * Created by PhpStorm.
 * User: Cu'c
 * Date: 08/05/2018
 * Time: 09:34 SA
 */
?>
<div id="content">
    <div class="container">
        <div class="row" id="theme_membership">
        </div>
        <div class="row top-10">
            <div class="col-xs-12">
                <div class="grid-20 grid-parent text-left">
                    <div class="btn btn-default" id="filter_mobile">
                        <i class="fa fa-filter"></i>
                        Lọc Sản Phẩm
                    </div>
                    <div id="filters-sidebar">
                        <div class="small-header">Phân Loại</div>
                        <div class="bottom-20" id="categories">
                            <div class="list">
                                <a class="list-group-item" href="/shop/theme/sale/category-makeup"><span class="name">Trang điểm</span>
                                    <span class="badge">17</span>
                                </a><a class="list-group-item" href="/shop/theme/sale/category-skin-care"><span
                                            class="name">Chăm sóc da</span>
                                    <span class="badge">20</span>
                                </a><a class="list-group-item" href="/shop/theme/sale/category-bath-body"><span
                                            class="name">Cơ thể</span>
                                    <span class="badge">8</span>
                                </a><a class="list-group-item" href="/shop/theme/sale/category-jewelry"><span
                                            class="name">Trang sức</span>
                                    <span class="badge">17</span>
                                </a><a class="list-group-item" href="/shop/theme/sale/category-underwear"><span
                                            class="name">Đồ lót</span>
                                    <span class="badge">11</span>
                                </a></div>
                        </div>
                        <div class="small-header">
                            Thương Hiệu
                        </div>
                        <div id="brands-list">
                            <input class="search form-control" placeholder="Nhập thương hiệu" type="text">
                            <div class="swiper-container" id="brands">
                                <div class="swiper-wrapper"
                                     style="transition-timing-function: cubic-bezier(0.1, 0.57, 0.1, 1); transition-duration: 0ms; transform: translate(0px, 0px) translateZ(0px);">
                                    <div class="swiper-slide">
                                        <div class="list"><a class="list-group-item" href="/shop/theme/sale">Tất
                                                cả</a><a class="list-group-item"
                                                         href="/shop/theme/sale/brand-three-trees"><span class="name">Three Trees</span>
                                                <span class="badge">17</span>
                                            </a><a class="list-group-item"
                                                   href="/shop/theme/sale/brand-calvin-klein"><span class="name">Calvin Klein</span>
                                                <span class="badge">7</span>
                                            </a><a class="list-group-item" href="/shop/theme/sale/brand-julep"><span
                                                        class="name">Julep</span>
                                                <span class="badge">5</span>
                                            </a><a class="list-group-item" href="/shop/theme/sale/brand-shiseido"><span
                                                        class="name">Shiseido</span>
                                                <span class="badge">3</span>
                                            </a><a class="list-group-item" href="/shop/theme/sale/brand-dkny"><span
                                                        class="name">DKNY</span>
                                                <span class="badge">3</span>
                                            </a><a class="list-group-item"
                                                   href="/shop/theme/sale/brand-urban-decay"><span class="name">Urban Decay</span>
                                                <span class="badge">2</span>
                                            </a><a class="list-group-item"
                                                   href="/shop/theme/sale/brand-strivectin"><span class="name">Strivectin</span>
                                                <span class="badge">2</span>
                                            </a><a class="list-group-item" href="/shop/theme/sale/brand-kat-burki"><span
                                                        class="name">Kat Burki</span>
                                                <span class="badge">2</span>
                                            </a><a class="list-group-item"
                                                   href="/shop/theme/sale/brand-hormocenta"><span class="name">Hormocenta</span>
                                                <span class="badge">2</span>
                                            </a><a class="list-group-item" href="/shop/theme/sale/brand-hourglass"><span
                                                        class="name">Hourglass</span>
                                                <span class="badge">1</span>
                                            </a></div>
                                    </div>
                                </div>
                                <div class="iScrollVerticalScrollbar iScrollLoneScrollbar"
                                     style="position: absolute; z-index: 9999; width: 7px; bottom: 2px; top: 2px; right: 1px; overflow: hidden;">
                                    <div class="iScrollIndicator"
                                         style="box-sizing: border-box; position: absolute; background: rgba(0, 0, 0, 0.5); border: 1px solid rgba(255, 255, 255, 0.9); border-radius: 3px; width: 100%; transition-duration: 0ms; display: block; height: 63px; transform: translate(0px, 0px) translateZ(0px); transition-timing-function: cubic-bezier(0.1, 0.57, 0.1, 1);"></div>
                                </div>
                            </div>
                            <div class="swiper-scrollbar"></div>
                        </div>
                        <div class="small-header">
                            Giá
                        </div>
                        <div id="prices-list">
                            <div class="list">
                                <a class="list-group-item" href="/shop/theme/sale">Tất cả</a>
                                <a class="list-group-item" href="/shop/theme/sale/price-max-250k"><span class="name">Dưới 250,000</span>
                                    <span class="badge">15</span>
                                </a><a class="list-group-item" href="/shop/theme/sale/price-max-500k"><span
                                            class="name">Dưới 500,000</span>
                                    <span class="badge">41</span>
                                </a><a class="list-group-item" href="/shop/theme/sale/price-max-1000k"><span
                                            class="name">Dưới 1,000,000</span>
                                    <span class="badge">71</span>
                                </a><a class="list-group-item" href="/shop/theme/sale/price-min-1000k"><span
                                            class="name">Trên 1,000,000</span>
                                    <span class="badge">8</span>
                                </a></div>
                        </div>
                    </div>
                    <script>
                        var brands_scroller;

                        function show_filters() {
                            $("#filters-sidebar").slideDown();
                            if (brands_scroller.onResize) {
                                brands_scroller.onResize();
                            }
                            if (brands_scroller.update) {
                                brands_scroller.update();
                            }
                        }

                        $(document).ready(function () {

                            $("#filter_mobile").click(function () {
                                show_filters();
                                $(this).remove();
                                setTimeout(init_brands_scrolling, 500);
                            });

                            function init_brands_scrolling() {
                                if (typeof IScroll !== 'undefined') {
                                    brands_scroller = new IScroll('#brands', {
                                        click: true,
                                        tap: true,
                                        mouseWheel: true,
                                        scrollbars: true,
                                        fadeScrollbars: false,
                                        interactiveScrollbars: true,
                                        shrinkScrollbars: 'scale'
                                    });
                                    $("#brands").on("tap", function (e) {
                                        var href, target;
                                        target = $(e.target);
                                        href = target.attr("href");
                                        if (href && !target.attr('data-method')) {
                                            window.location = href;
                                        }
                                    });
                                } else {
                                    brands_scroller = new Swiper('#brands', {
                                        scrollbar: '#brands .swiper-scrollbar',
                                        scrollbarHide: false,
                                        direction: 'vertical',
                                        slidesPerView: 'auto',
                                        mousewheelControl: true,
                                        freeMode: true
                                    });
                                }
                            }

                            init_brands_scrolling();

                            $("#categories")
                                .find(".panel-title a").on("click", function (e) {
                                e.preventDefault();
                            })
                                .end()
                                .find(".collapse")
                                .on('show.bs.collapse', function () {
                                    $(this).closest(".panel").addClass("opened");
                                })
                                .on('hide.bs.collapse', function () {
                                    $(this).closest(".panel").removeClass("opened");
                                });

                            var options = {
                                valueNames: ['name']
                            };

                            var brandList = new List('brands-list', options);
                        });
                    </script>

                </div>
                <div class="grid-80 grid-parent">
                    <div class="divider_title mono">
                        <span>SALE</span>
                    </div>
                    <div class="clearfix"></div>
                    <div class="top-20 box_card_container" data-source="SALE" id="theme_boxes">
                        <div box_id="1790" class="col-xs-6 col-md-4 col-lg-3 box_card">
                            <div class="box_image">
                                <a href="/shop/shiseido-benefique-cream?theme=sale"><img
                                            data-src="https://upload.lixibox.com/system/pictures/files/000/010/218/medium/1464345781.jpeg"
                                            class="lazyload"
                                            src="https://upload.lixibox.com/system/pictures/files/000/010/218/medium/1464345781.jpeg"
                                            alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"></a>
                                <div class="seo-text hidden">
                                    Một loại kem dưỡng làm sáng da, nhắm vào các dấu hiệu lão hóa để làm lộ ra làn da
                                    rạng rỡ, mịn màng, và săn chắc. Kem dưỡng có chứa chất chiết ra từ lá mâm xôi để làm
                                    rõ các nét viền mặt bằng cách nâng da và sửa chữa những chỗ da bị xệ.
                                </div>
                                <a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action"
                                   data-eventaction="like" data-eventlabel="Shiseido Benefique Cream" data-remote="true"
                                   rel="nofollow" data-method="post"
                                   href="/shop/%23%3CThemes::BoxPresenter:0x007f1c4ca093e8%3E/like_box"><i
                                            class="fa fa-heart"></i>
                                </a>
                                <div class="discount_percent">
                                    -25%
                                </div>
                                <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input
                                            name="utf8" type="hidden" value="✓"><input type="hidden" name="_method"
                                                                                       value="create">
                                    <input type="hidden" name="box_id" id="box_id" value="1790">
                                    <input type="hidden" name="theme_id" id="theme_id" value="140">
                                    <input type="submit" name="commit" value="Add to cart" style="display: none;"
                                           data-disable-with="Sending">
                                    <div class="box_tool box_quick_add_to_card">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                </form>

                            </div>
                            <a class="box_name" href="/shop/shiseido-benefique-cream?theme=sale">Shiseido Benefique
                                Cream</a>

                            <div class="box_price">
                                1,020,000 đ
                            </div>
                            <div class="box_value">
                                <span class="real-value-text"></span>
                                1,360,000 đ
                            </div>
                        </div>
                        <div box_id="1587" class="col-xs-6 col-md-4 col-lg-3 box_card">
                            <div class="box_image">
                                <a href="/shop/maycoop-morning-dew?theme=sale"><img
                                            data-src="https://upload.lixibox.com/system/pictures/files/000/002/144/medium/1448861360.jpg"
                                            class="lazyload"
                                            src="https://upload.lixibox.com/system/pictures/files/000/002/144/medium/1448861360.jpg"
                                            alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"></a>
                                <div class="seo-text hidden">
                                    A cooling and hydrating facial spray that hydrates and tones the complexion.
                                    Formulated with 98% maple water and 7 different botanical extracts to help make skin
                                    appear and feel more toned, radiant and smooth. Great for all skin types.
                                </div>
                                <a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action"
                                   data-eventaction="like" data-eventlabel="Maycoop Morning Dew" data-remote="true"
                                   rel="nofollow" data-method="post"
                                   href="/shop/%23%3CThemes::BoxPresenter:0x007fde8c829110%3E/like_box"><i
                                            class="fa fa-heart"></i>
                                </a>
                                <div class="discount_percent">
                                    -25%
                                </div>
                                <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input
                                            name="utf8" type="hidden" value="✓"><input type="hidden" name="_method"
                                                                                       value="create">
                                    <input type="hidden" name="box_id" id="box_id" value="1587">
                                    <input type="hidden" name="theme_id" id="theme_id" value="140">
                                    <input type="submit" name="commit" value="Add to cart" style="display: none;"
                                           data-disable-with="Sending">
                                    <div class="box_tool box_quick_add_to_card">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                </form>

                            </div>
                            <a class="box_name" href="/shop/maycoop-morning-dew?theme=sale">Maycoop Morning Dew</a>

                            <div class="box_price">
                                315,000 đ
                            </div>
                            <div class="box_value">
                                <span class="real-value-text"></span>
                                420,000 đ
                            </div>
                        </div>
                        <div box_id="1025" class="col-xs-6 col-md-4 col-lg-3 box_card">
                            <div class="box_image">
                                <a href="/shop/redeem-hermes-eau-des-merveilles-marvelous-body-lotion-mini?theme=sale"><img
                                            data-src="https://upload.lixibox.com/system/pictures/files/000/003/729/medium/1456290974.png?1462729477"
                                            class="lazyload"
                                            src="https://upload.lixibox.com/system/pictures/files/000/003/729/medium/1456290974.png?1462729477"
                                            alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"></a>
                                <div class="seo-text hidden">
                                    Hermes Eau Des Merveilles Marvelous Body Lotion mini
                                </div>
                                <a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action"
                                   data-eventaction="like"
                                   data-eventlabel="Hermes Eau Des Merveilles Marvelous Body Lotion mini 40 ml"
                                   data-remote="true" rel="nofollow" data-method="post"
                                   href="/shop/%23%3CThemes::BoxPresenter:0x007f1c4cbceef8%3E/like_box"><i
                                            class="fa fa-heart"></i>
                                </a>
                                <div class="discount_percent">
                                    -25%
                                </div>
                                <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input
                                            name="utf8" type="hidden" value="✓"><input type="hidden" name="_method"
                                                                                       value="create">
                                    <input type="hidden" name="box_id" id="box_id" value="1025">
                                    <input type="hidden" name="theme_id" id="theme_id" value="140">
                                    <input type="submit" name="commit" value="Add to cart" style="display: none;"
                                           data-disable-with="Sending">
                                    <div class="box_tool box_quick_add_to_card">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                </form>

                            </div>
                            <a class="box_name"
                               href="/shop/redeem-hermes-eau-des-merveilles-marvelous-body-lotion-mini?theme=sale">Hermes
                                Eau Des Merveilles Marvelous Body Lotion mini 40 ml</a>

                            <div class="box_price">
                                705,000 đ
                            </div>
                            <div class="box_value">
                                <span class="real-value-text"></span>
                                940,000 đ
                            </div>
                        </div>
                        <div box_id="2298" class="col-xs-6 col-md-4 col-lg-3 box_card">
                            <div class="box_image">
                                <a href="/shop/julep-nail-polish-boho-glam?theme=sale"><img
                                            data-src="https://upload.lixibox.com/system/pictures/files/000/010/833/medium/1470731679.jpg"
                                            class="lazyload"
                                            src="https://upload.lixibox.com/system/pictures/files/000/010/833/medium/1470731679.jpg"
                                            alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"></a>
                                <div class="seo-text hidden">
                                    What it is:
                                    Breakthrough Oxygen Technology powers this fast-drying, long-lasting nail polish to
                                    get nails healthy and more beautiful at the same time. Our proprietary 5-free,
                                    vegan-friendly formula also includes strengthening Hexanal and antioxidant green
                                    coffee extract. You'll never look at nail polish the same way again.

                                    What it does:
                                    Dries ultra fast &amp; allows 30% more oxygen to permeate the nail bed than other
                                    nail polish
                                    Reveals stronger, harder &amp; more conditioned nails in just two weeks (reported by
                                    95% of women in an independent trial)
                                    Extends the life of your manicure or pedicure
                                </div>
                                <a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action"
                                   data-eventaction="like" data-eventlabel="Julep Nail Polish - Annalise Boho Glam"
                                   data-remote="true" rel="nofollow" data-method="post"
                                   href="/shop/%23%3CThemes::BoxPresenter:0x007fde8c8a2330%3E/like_box"><i
                                            class="fa fa-heart"></i>
                                </a>
                                <div class="discount_percent">
                                    -20%
                                </div>
                                <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input
                                            name="utf8" type="hidden" value="✓"><input type="hidden" name="_method"
                                                                                       value="create">
                                    <input type="hidden" name="box_id" id="box_id" value="2298">
                                    <input type="hidden" name="theme_id" id="theme_id" value="140">
                                    <input type="submit" name="commit" value="Add to cart" style="display: none;"
                                           data-disable-with="Sending">
                                    <div class="box_tool box_quick_add_to_card">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                </form>

                            </div>
                            <a class="box_name" href="/shop/julep-nail-polish-boho-glam?theme=sale">Julep Nail Polish -
                                Annalise Boho Glam</a>

                            <div class="box_price">
                                416,000 đ
                            </div>
                            <div class="box_value">
                                <span class="real-value-text"></span>
                                520,000 đ
                            </div>
                        </div>
                        <div box_id="2052" class="col-xs-6 col-md-4 col-lg-3 box_card">
                            <div class="box_image">
                                <a href="/shop/bisous-white-arbutin-peptide-compact-2-ivory?theme=sale"><img
                                            data-src="https://upload.lixibox.com/system/pictures/files/000/003/077/medium/laypowder_august13.jpg"
                                            class="lazyload"
                                            src="https://upload.lixibox.com/system/pictures/files/000/003/077/medium/laypowder_august13.jpg"
                                            alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"></a>
                                <div class="seo-text hidden">
                                    Bisous Bisous là thương hiệu mỹ phẩm của Thái Lan được sản xuất tại Hàn Quốc. Thương
                                    hiệu Bisous Bisous hiện có trên 400 sản phẩm với hơn 100 sản phẩm mới mỗi năm. Các
                                    sản phẩm được thiết kế cực kỳ dễ thương và nữ tính với sự kết hợp phong cách Hàn
                                    Quốc đáng yêu và Pháp tinh tế, thanh lịch. Thương hiệu là sự giao thoa hoàn hảo của
                                    hai phong cách tây phương và đông phương. Không chỉ tập trung vào vẻ ngoài tinh tế,
                                    hãng còn chú trọng chất lượng sản phẩm để sánh ngang với dòng mỹ phẩm high-end nhưng
                                    với mức giá chỉ ngang các sản phẩm mid-end. Với mục tiêu mang đến vẻ rạng rỡ không
                                    tì vết cho các bạn gái trẻ, sản phẩm của Bisous Bisous đã nhận được rất nhiều lời
                                    đánh giá có cánh từ các chuyên gia làm đẹp.

                                    Phấn phủ Bisous Bisous Peptide Miracle White Arbutin Peptine Vitamin C chứa các hạt
                                    phấn mềm và mịn, chất phấn mỏng nhẹ dễ dàng tán đều và che phủ toàn bộ khuôn mặt
                                    khiến da bạn rạng rỡ hơn bao giờ hết. Với thành phần làm trắng arbutin, peptine
                                    chống lão hóa và vitamin C giúp làm sáng da, da bạn sẽ trở nên rạng ngời và được
                                    nuôi dưỡng từng ngày. Hộp phấn được thiết kế tinh tế đi kèm gương soi và bông phấn
                                    cực kỳ tiện lợi để mang theo bên mình cả ngày.

                                    Màu Ivory dành cho da sáng và trung bình sáng.
                                </div>
                                <a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action"
                                   data-eventaction="like"
                                   data-eventlabel=" Bisous White Arbutin Peptide COmpact - #1 Ivory" data-remote="true"
                                   rel="nofollow" data-method="post"
                                   href="/shop/%23%3CThemes::BoxPresenter:0x007fde8c8b36d0%3E/like_box"><i
                                            class="fa fa-heart"></i>
                                </a>
                                <div class="discount_percent">
                                    -25%
                                </div>
                                <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input
                                            name="utf8" type="hidden" value="✓"><input type="hidden" name="_method"
                                                                                       value="create">
                                    <input type="hidden" name="box_id" id="box_id" value="2052">
                                    <input type="hidden" name="theme_id" id="theme_id" value="140">
                                    <input type="submit" name="commit" value="Add to cart" style="display: none;"
                                           data-disable-with="Sending">
                                    <div class="box_tool box_quick_add_to_card">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                </form>

                            </div>
                            <a class="box_name" href="/shop/bisous-white-arbutin-peptide-compact-2-ivory?theme=sale">
                                Bisous White Arbutin Peptide COmpact - #1 Ivory</a>

                            <div class="box_price">
                                427,500 đ
                            </div>
                            <div class="box_value">
                                <span class="real-value-text"></span>
                                570,000 đ
                            </div>
                        </div>
                        <div box_id="1024" class="col-xs-6 col-md-4 col-lg-3 box_card">
                            <div class="box_image">
                                <a href="/shop/redeem-kateceuticals-multi-active-revive-triple-peptide-cream?theme=sale"><img
                                            data-src="https://upload.lixibox.com/system/pictures/files/000/003/746/medium/1456307499.jpg?1462698544"
                                            class="lazyload"
                                            src="https://upload.lixibox.com/system/pictures/files/000/003/746/medium/1456307499.jpg?1462698544"
                                            alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"></a>
                                <div class="seo-text hidden">
                                    Revive, hydrate and firm your skin with Kate’s luxuriously lightweight Triple
                                    Peptide Cream. Formulated with advanced Ceramides, Amino Acids and a potent Triple
                                    Peptide Blend, this powerful anti-aging cream helps visibly smooth the appearance of
                                    fine lines and wrinkles and expression lines. Deluxe natural Seed Oils, including
                                    Jojoba, Babassu, Sativa and Macadamia instantly soften, revive and moisturize
                                    fatigued, dry skin. Super-Antioxidants and Vitamin C help firm and brighten, while
                                    ultrafine Silk Powder provides a beautiful, lustrous appearance for more
                                    youthful-looking skin. The luxurious, light-as-air formula quickly absorbs into
                                    skin, making it ideal for warmer climates. - See more at:
                                    http://www.katesomerville.com/kateceuticals-multi-active-revive-cream/#sthash.41DVzHk1.dpuf
                                </div>
                                <a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action"
                                   data-eventaction="like"
                                   data-eventlabel="KateCeuticals™ Multi-Active Revive Triple Peptide Cream 7 ml"
                                   data-remote="true" rel="nofollow" data-method="post"
                                   href="/shop/%23%3CThemes::BoxPresenter:0x007fde8c8ec958%3E/like_box"><i
                                            class="fa fa-heart"></i>
                                </a>
                                <div class="discount_percent">
                                    -15%
                                </div>
                                <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input
                                            name="utf8" type="hidden" value="✓"><input type="hidden" name="_method"
                                                                                       value="create">
                                    <input type="hidden" name="box_id" id="box_id" value="1024">
                                    <input type="hidden" name="theme_id" id="theme_id" value="140">
                                    <input type="submit" name="commit" value="Add to cart" style="display: none;"
                                           data-disable-with="Sending">
                                    <div class="box_tool box_quick_add_to_card">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                </form>

                            </div>
                            <a class="box_name"
                               href="/shop/redeem-kateceuticals-multi-active-revive-triple-peptide-cream?theme=sale">KateCeuticals™
                                Multi-Active Revive Triple Peptide Cream 7 ml</a>

                            <div class="box_price">
                                501,500 đ
                            </div>
                            <div class="box_value">
                                <span class="real-value-text"></span>
                                590,000 đ
                            </div>
                        </div>
                        <div box_id="1917" class="col-xs-6 col-md-4 col-lg-3 box_card">
                            <div class="box_image">
                                <a href="/shop/always-on-liquid-lipstick-big-spender?theme=sale"><img
                                            data-src="https://upload.lixibox.com/system/pictures/files/000/010/376/medium/1465456837.jpg"
                                            class="lazyload"
                                            src="https://upload.lixibox.com/system/pictures/files/000/010/376/medium/1465456837.jpg"
                                            alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"></a>
                                <div class="seo-text hidden">
                                    Perfected on-set in our L.A. photo studio, our long-wear, water-resistant liquid
                                    lipstick features Advanced Polymer Technology that makes it stay put and look as
                                    fresh and flawless as your first swipe—for up to 8 hours. Featherweight but fierce,
                                    this liquid matte formula is infused with lip-smoothing Primer Oil complex for
                                    suede-soft lip color in 20 super-rad shades. It’s smudge-proof, budge-proof and
                                    non-feathering. Because really, who has time for touch-ups?
                                </div>
                                <a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action"
                                   data-eventaction="like"
                                   data-eventlabel="SMASHBOX ALWAYS ON LIQUID LIPSTICK - Big Spender" data-remote="true"
                                   rel="nofollow" data-method="post"
                                   href="/shop/%23%3CThemes::BoxPresenter:0x007fde8c909d00%3E/like_box"><i
                                            class="fa fa-heart"></i>
                                </a>
                                <div class="discount_percent">
                                    -20%
                                </div>
                                <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input
                                            name="utf8" type="hidden" value="✓"><input type="hidden" name="_method"
                                                                                       value="create">
                                    <input type="hidden" name="box_id" id="box_id" value="1917">
                                    <input type="hidden" name="theme_id" id="theme_id" value="140">
                                    <input type="submit" name="commit" value="Add to cart" style="display: none;"
                                           data-disable-with="Sending">
                                    <div class="box_tool box_quick_add_to_card">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                </form>

                            </div>
                            <a class="box_name" href="/shop/always-on-liquid-lipstick-big-spender?theme=sale">SMASHBOX
                                ALWAYS ON LIQUID LIPSTICK - Big Spender</a>

                            <div class="box_price">
                                600,000 đ
                            </div>
                            <div class="box_value">
                                <span class="real-value-text"></span>
                                750,000 đ
                            </div>
                        </div>
                        <div box_id="2589" class="col-xs-6 col-md-4 col-lg-3 box_card">
                            <div class="box_image">
                                <a href="/shop/michael-kors-lip-luster-siren?theme=sale"><img
                                            data-src="https://upload.lixibox.com/system/pictures/files/000/011/498/medium/1474320433.jpg"
                                            class="lazyload"
                                            src="https://upload.lixibox.com/system/pictures/files/000/011/498/medium/1474320433.jpg"
                                            alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"></a>
                                <div class="seo-text hidden">
                                    Lip luster
                                </div>
                                <a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action"
                                   data-eventaction="like" data-eventlabel="Michael Kors Lip Luster - Siren"
                                   data-remote="true" rel="nofollow" data-method="post"
                                   href="/shop/%23%3CThemes::BoxPresenter:0x007fde8c9296c8%3E/like_box"><i
                                            class="fa fa-heart"></i>
                                </a>
                                <div class="discount_percent">
                                    -15%
                                </div>
                                <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input
                                            name="utf8" type="hidden" value="✓"><input type="hidden" name="_method"
                                                                                       value="create">
                                    <input type="hidden" name="box_id" id="box_id" value="2589">
                                    <input type="hidden" name="theme_id" id="theme_id" value="140">
                                    <input type="submit" name="commit" value="Add to cart" style="display: none;"
                                           data-disable-with="Sending">
                                    <div class="box_tool box_quick_add_to_card">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                </form>

                            </div>
                            <a class="box_name" href="/shop/michael-kors-lip-luster-siren?theme=sale">Michael Kors Lip
                                Luster - Siren</a>

                            <div class="box_price">
                                459,000 đ
                            </div>
                            <div class="box_value">
                                <span class="real-value-text"></span>
                                540,000 đ
                            </div>
                        </div>
                        <div box_id="1776" class="col-xs-6 col-md-4 col-lg-3 box_card">
                            <div class="box_image">
                                <a href="/shop/strivectinlabs-anti-wrinkle-hydra-gel-treatment?theme=sale"><img
                                            data-src="https://upload.lixibox.com/system/pictures/files/000/001/235/medium/1445236178.001"
                                            class="lazyload"
                                            src="https://upload.lixibox.com/system/pictures/files/000/001/235/medium/1445236178.001"
                                            alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"></a>
                                <div class="seo-text hidden">
                                    Anti-Wrinkle Hydra Gel Treatment is a two-step wrinkle-smoothing system offering an
                                    instant and progressive solution to fight the appearance of visible wrinkles and
                                    expression lines.
                                    Step 1, Anti-Wrinkle Precision Patches, instantly smoothes and visibly plumps
                                    surface lines and wrinkles.
                                    Step 2, Anti-Wrinkle Smoothing Balm, with continued use helps diminish the
                                    appearance of all types of facial lines
                                </div>
                                <a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action"
                                   data-eventaction="like"
                                   data-eventlabel="STRIVECTINLABS ANTI-WRINKLE HYDRA GEL TREATMENT" data-remote="true"
                                   rel="nofollow" data-method="post"
                                   href="/shop/%23%3CThemes::BoxPresenter:0x007f1c4cae64c8%3E/like_box"><i
                                            class="fa fa-heart"></i>
                                </a>
                                <div class="discount_percent">
                                    -20%
                                </div>
                                <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input
                                            name="utf8" type="hidden" value="✓"><input type="hidden" name="_method"
                                                                                       value="create">
                                    <input type="hidden" name="box_id" id="box_id" value="1776">
                                    <input type="hidden" name="theme_id" id="theme_id" value="140">
                                    <input type="submit" name="commit" value="Add to cart" style="display: none;"
                                           data-disable-with="Sending">
                                    <div class="box_tool box_quick_add_to_card">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                </form>

                            </div>
                            <a class="box_name" href="/shop/strivectinlabs-anti-wrinkle-hydra-gel-treatment?theme=sale">STRIVECTINLABS
                                ANTI-WRINKLE HYDRA GEL TREATMENT</a>

                            <div class="box_price">
                                832,000 đ
                            </div>
                            <div class="box_value">
                                <span class="real-value-text"></span>
                                1,040,000 đ
                            </div>
                        </div>
                        <div box_id="1774" class="col-xs-6 col-md-4 col-lg-3 box_card">
                            <div class="box_image">
                                <a href="/shop/strivectin-strivectin-tl-360-tightening-eye-serum?theme=sale"><img
                                            data-src="https://upload.lixibox.com/system/pictures/files/000/001/236/medium/1445236417.jpg"
                                            class="lazyload"
                                            src="https://upload.lixibox.com/system/pictures/files/000/001/236/medium/1445236417.jpg"
                                            alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"></a>
                                <div class="seo-text hidden">
                                    Treat loss of firmness, under-eye puffiness and droopy eyelids all-in-one! See
                                    instantly tighter, younger eyes, improved firmness and more defined eyelids with
                                    this quick absorbing anti-aging serum. The unique metal tip applicator cools away
                                    puffiness and smooths away crepey skin around your entire eye area with every
                                    application.
                                </div>
                                <a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action"
                                   data-eventaction="like"
                                   data-eventlabel="STRIVECTIN STRIVECTIN-TL 360 TIGHTENING EYE SERUM"
                                   data-remote="true" rel="nofollow" data-method="post"
                                   href="/shop/%23%3CThemes::BoxPresenter:0x007f1c4ca5f130%3E/like_box"><i
                                            class="fa fa-heart"></i>
                                </a>
                                <div class="discount_percent">
                                    -25%
                                </div>
                                <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input
                                            name="utf8" type="hidden" value="✓"><input type="hidden" name="_method"
                                                                                       value="create">
                                    <input type="hidden" name="box_id" id="box_id" value="1774">
                                    <input type="hidden" name="theme_id" id="theme_id" value="140">
                                    <input type="submit" name="commit" value="Add to cart" style="display: none;"
                                           data-disable-with="Sending">
                                    <div class="box_tool box_quick_add_to_card">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                </form>

                            </div>
                            <a class="box_name"
                               href="/shop/strivectin-strivectin-tl-360-tightening-eye-serum?theme=sale">STRIVECTIN
                                STRIVECTIN-TL 360 TIGHTENING EYE SERUM</a>

                            <div class="box_price">
                                937,500 đ
                            </div>
                            <div class="box_value">
                                <span class="real-value-text"></span>
                                1,250,000 đ
                            </div>
                        </div>
                        <div box_id="1788" class="col-xs-6 col-md-4 col-lg-3 box_card">
                            <div class="box_image">
                                <a href="/shop/shiseido-benefique-lotion-ii?theme=sale"><img
                                            data-src="https://upload.lixibox.com/system/pictures/files/000/001/628/medium/1447223774.jpg"
                                            class="lazyload"
                                            src="https://upload.lixibox.com/system/pictures/files/000/001/628/medium/1447223774.jpg"
                                            alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"></a>
                                <div class="seo-text hidden">
                                    Nước tinh chất làm đẹp và sáng da, làm mát da và tăng mức độ lưu thông máu, khiến da
                                    sáng ngời, khỏe mạnh. Có ba loại nước thơm dựa vào nhiệt độ của da và mùa. Nước Thơm
                                    I dành cho thời tiết nóng và những ai có nhiệt độ da cao hơn, hoặc dành cho da nhờn;
                                    Nước Thơm II được dùng tốt nhất trong thời tiết điều hòa hay những người có nhiệt độ
                                    da bình thường; và Nước Thơm III lý tưởng cho những ai có da khô, sần, hay để dùng
                                    khi thời tiết lạnh.
                                </div>
                                <a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action"
                                   data-eventaction="like" data-eventlabel="Shiseido Benefique Lotion II"
                                   data-remote="true" rel="nofollow" data-method="post"
                                   href="/shop/%23%3CThemes::BoxPresenter:0x007f1c4cb30988%3E/like_box"><i
                                            class="fa fa-heart"></i>
                                </a>
                                <div class="discount_percent">
                                    -25%
                                </div>
                                <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input
                                            name="utf8" type="hidden" value="✓"><input type="hidden" name="_method"
                                                                                       value="create">
                                    <input type="hidden" name="box_id" id="box_id" value="1788">
                                    <input type="hidden" name="theme_id" id="theme_id" value="140">
                                    <input type="submit" name="commit" value="Add to cart" style="display: none;"
                                           data-disable-with="Sending">
                                    <div class="box_tool box_quick_add_to_card">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                </form>

                            </div>
                            <a class="box_name" href="/shop/shiseido-benefique-lotion-ii?theme=sale">Shiseido Benefique
                                Lotion II</a>

                            <div class="box_price">
                                780,000 đ
                            </div>
                            <div class="box_value">
                                <span class="real-value-text"></span>
                                1,040,000 đ
                            </div>
                        </div>
                        <div box_id="1789" class="col-xs-6 col-md-4 col-lg-3 box_card">
                            <div class="box_image">
                                <a href="/shop/shiseido-benefique-lotion-iii?theme=sale"><img
                                            data-src="https://upload.lixibox.com/system/pictures/files/000/001/629/medium/1447223866.jpg"
                                            class="lazyload"
                                            src="https://upload.lixibox.com/system/pictures/files/000/001/629/medium/1447223866.jpg"
                                            alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"></a>
                                <div class="seo-text hidden">
                                    Nước tinh chất làm đẹp và sáng da, làm mát da và tăng mức độ lưu thông máu, khiến da
                                    sáng ngời, khỏe mạnh. Có ba loại nước thơm dựa vào nhiệt độ của da và mùa. Nước Thơm
                                    I dành cho thời tiết nóng và những ai có nhiệt độ da cao hơn, hoặc dành cho da nhờn;
                                    Nước Thơm II được dùng tốt nhất trong thời tiết điều hòa hay những người có nhiệt độ
                                    da bình thường; và Nước Thơm III lý tưởng cho những ai có da khô, sần, hay để dùng
                                    khi thời tiết lạnh.
                                </div>
                                <a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action"
                                   data-eventaction="like" data-eventlabel="Shiseido Benefique Lotion III"
                                   data-remote="true" rel="nofollow" data-method="post"
                                   href="/shop/%23%3CThemes::BoxPresenter:0x007f1c4cb15818%3E/like_box"><i
                                            class="fa fa-heart"></i>
                                </a>
                                <div class="discount_percent">
                                    -25%
                                </div>
                                <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input
                                            name="utf8" type="hidden" value="✓"><input type="hidden" name="_method"
                                                                                       value="create">
                                    <input type="hidden" name="box_id" id="box_id" value="1789">
                                    <input type="hidden" name="theme_id" id="theme_id" value="140">
                                    <input type="submit" name="commit" value="Add to cart" style="display: none;"
                                           data-disable-with="Sending">
                                    <div class="box_tool box_quick_add_to_card">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                </form>

                            </div>
                            <a class="box_name" href="/shop/shiseido-benefique-lotion-iii?theme=sale">Shiseido Benefique
                                Lotion III</a>

                            <div class="box_price">
                                780,000 đ
                            </div>
                            <div class="box_value">
                                <span class="real-value-text"></span>
                                1,040,000 đ
                            </div>
                        </div>
                        <div box_id="585" class="col-xs-6 col-md-4 col-lg-3 box_card">
                            <div class="box_image">
                                <a href="/shop/revive-moisturizing-renewal-serum?theme=sale"><img
                                            data-src="https://upload.lixibox.com/system/pictures/files/000/002/651/medium/1451361355.jpg?1462726846"
                                            class="lazyload"
                                            src="https://upload.lixibox.com/system/pictures/files/000/002/651/medium/1451361355.jpg?1462726846"
                                            alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"></a>
                                <div class="seo-text hidden">
                                    Powered by RES Technology and featuring Hydration Repair Complex, this targeted
                                    RéVive night repair serum penetrates deeply into skin's surface to dramatically
                                    boost skin's natural renewal process.
                                    The unique concentrated formula works overnight as you sleep to visibly repair the
                                    appearance of skin damage caused by environmental aggressors during the day.
                                    Younger-looking, smoother, luminous skin is revealed the next morning.
                                    Encourages skin's natural renewal, repair and rejuvenation process to unveil skin
                                    that is smoother, brighter and more youthful.
                                    Works through the night during skin's critical cellular regeneration phase to repair
                                    the appearance of damage caused by daily environmental assaults.
                                    Helps boosts skin's natural exfoliation process to reduce the look of fine lines and
                                    wrinkles.
                                    Evens skin tone and smoothes skin's texture, revealing a radiant complexion
                                    illuminated with the RéVive glow.
                                    Helps restore the skin's natural moisture barrier to lock in hydration, provide
                                    enhanced protection from dryness and reveal moisturized, luminous, healthy-looking
                                    skin.
                                </div>
                                <a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action"
                                   data-eventaction="like" data-eventlabel="ReVive Moisturizing Renewal Serum"
                                   data-remote="true" rel="nofollow" data-method="post"
                                   href="/shop/%23%3CThemes::BoxPresenter:0x007f1c4c914a00%3E/like_box"><i
                                            class="fa fa-heart"></i>
                                </a>
                                <div class="discount_percent">
                                    -25%
                                </div>
                                <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input
                                            name="utf8" type="hidden" value="✓"><input type="hidden" name="_method"
                                                                                       value="create">
                                    <input type="hidden" name="box_id" id="box_id" value="585">
                                    <input type="hidden" name="theme_id" id="theme_id" value="140">
                                    <input type="submit" name="commit" value="Add to cart" style="display: none;"
                                           data-disable-with="Sending">
                                    <div class="box_tool box_quick_add_to_card">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                </form>

                            </div>
                            <a class="box_name" href="/shop/revive-moisturizing-renewal-serum?theme=sale">ReVive
                                Moisturizing Renewal Serum</a>

                            <div class="box_price">
                                1,650,000 đ
                            </div>
                            <div class="box_value">
                                <span class="real-value-text"></span>
                                2,200,000 đ
                            </div>
                        </div>
                        <div box_id="885" class="col-xs-6 col-md-4 col-lg-3 box_card">
                            <div class="box_image">
                                <a href="/shop/kiko-milano-crystal-sheer-glossy-lipstick-419-wisteria?theme=sale"><img
                                            data-src="https://upload.lixibox.com/system/pictures/files/000/003/040/medium/1453713884.jpg?1462728435"
                                            class="lazyload"
                                            src="https://upload.lixibox.com/system/pictures/files/000/003/040/medium/1453713884.jpg?1462728435"
                                            alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"></a>
                                <div class="seo-text hidden">
                                    - KIKO MAKE UP MILANO là thương hiệu nổi tiếng của Ý được bày bán rộng rãi khắp các
                                    nước Châu Âu. Phương châm của hãng là đưa ra các sản phẩm làm đẹp phù hợp với túi
                                    tiền đại đa số người tiêu dùng. Vì vậy mà sản phẩm của KIKO MAKE UP MILANO có giá
                                    mềm hơn tương đối so với các hãng khác. Đặc biệt, các dòng son KIKO MAKE UP MILANO
                                    được REVIEW rất cao, có thể sánh ngang với các hãng mỹ phẩm cao cấp như YSL, CHANEL
                                    nhưng lại có giá bình dân hơn.
                                    Chất son lên môi rất mượt, làm cho môi bóng nhưng không bị bột và đặc biệt là không
                                    dính, nhiều dưỡng, làm ẩm và có độ dưỡng môi rất tốt.

                                    - Son Kiko rất được yêu thích vì chất lượng tốt và giá cả phải chăng. Đặc biệt thiết
                                    kế thỏi son rất sang trọng, thanh lịch và nữ tính. Nắp son bao trọn cả thỏi son, do
                                    đó bạn phải ấn vào một đầu và rút son từ dưới ra nha.

                                    - Chất son là lì nhưng độ dưỡng của son khá tốt, khác hẳn độ lì so với son khác như
                                    Mac, đây chính là ưu điểm nổi trội của son Kiko Velvet Mat Lipstick . Son Kiko giữ
                                    nguyên độ ẩm của môi bạn như ban đầu chứ không khiến môi bị bong tróc sau khi đánh
                                    lên. Về độ bám thì có thể nói là khá tốt so với mức giá của em ấy.
                                </div>
                                <a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action"
                                   data-eventaction="like"
                                   data-eventlabel="KIKO MILANO - Crystal Sheer - Glossy Lipstick - 419 Wisteria"
                                   data-remote="true" rel="nofollow" data-method="post"
                                   href="/shop/%23%3CThemes::BoxPresenter:0x007f11d2a75b80%3E/like_box"><i
                                            class="fa fa-heart"></i>
                                </a>
                                <div class="discount_percent">
                                    -33%
                                </div>
                                <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input
                                            name="utf8" type="hidden" value="✓"><input type="hidden" name="_method"
                                                                                       value="create">
                                    <input type="hidden" name="box_id" id="box_id" value="885">
                                    <input type="hidden" name="theme_id" id="theme_id" value="140">
                                    <input type="submit" name="commit" value="Add to cart" style="display: none;"
                                           data-disable-with="Sending">
                                    <div class="box_tool box_quick_add_to_card">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                </form>

                            </div>
                            <a class="box_name"
                               href="/shop/kiko-milano-crystal-sheer-glossy-lipstick-419-wisteria?theme=sale">KIKO
                                MILANO - Crystal Sheer - Glossy Lipstick - 419 Wisteria</a>

                            <div class="box_price">
                                200,000 đ
                            </div>
                            <div class="box_value">
                                <span class="real-value-text"></span>
                                300,000 đ
                            </div>
                        </div>
                        <div box_id="736" class="col-xs-6 col-md-4 col-lg-3 box_card">
                            <div class="box_image">
                                <a href="/shop/son-kem-amok-premium-multi-lips-m129?theme=sale"><img
                                            data-src="https://upload.lixibox.com/system/pictures/files/000/002/983/medium/amok.jpg?1462701199"
                                            class="lazyload"
                                            src="https://upload.lixibox.com/system/pictures/files/000/002/983/medium/amok.jpg?1462701199"
                                            alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"></a>
                                <div class="seo-text hidden">
                                    – Amok Premium Multi Lips có chất son mịn lì tựa như Nyx Cream, nhưng ưu điểm
                                    là ít bột hơn, nên cực kì mỏng mịn, dễ tán hơn, rất đều màu, khô nhanh và
                                    không gây khô môi. – Lớp kem tốt, dễ dàng thoa lên môi, khi khô cho lớp son mịn và
                                    mỏng, đều và đặc biệt không bị vón cục, tạo cảm giác đôi môi mướt như nhung. – Dù là
                                    đi học, đi làm hay hẹn hò dạo phố cùng bạn bè đều rất phù hợp, bạn sẽ tha hồ tự tin
                                    với đôi môi rạng rỡ, xinh đẹp, lâu trôi nhiều giờ kể cả khi ăn uống. – Sản phẩm được
                                    đánh giá cao bởi sự tiện dụng, chất son mượt như nhung, son cho màu sắc chân thật và
                                    lưu giữ màu trên môi tốt, không làm khô môi hay dị ứng, khó chịu. – Thiết kế nhỏ
                                    gọn, đáng yêu với bảng màu son tươi sáng, rực rỡ nhiều màu sắc cho bạn lựa chọn.

                                </div>
                                <a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action"
                                   data-eventaction="like" data-eventlabel="Son Kem Amok Premium Multi Lips M129"
                                   data-remote="true" rel="nofollow" data-method="post"
                                   href="/shop/%23%3CThemes::BoxPresenter:0x007f11d2a68958%3E/like_box"><i
                                            class="fa fa-heart"></i>
                                </a>
                                <div class="discount_percent">
                                    -5%
                                </div>
                                <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input
                                            name="utf8" type="hidden" value="✓"><input type="hidden" name="_method"
                                                                                       value="create">
                                    <input type="hidden" name="box_id" id="box_id" value="736">
                                    <input type="hidden" name="theme_id" id="theme_id" value="140">
                                    <input type="submit" name="commit" value="Add to cart" style="display: none;"
                                           data-disable-with="Sending">
                                    <div class="box_tool box_quick_add_to_card">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                </form>

                            </div>
                            <a class="box_name" href="/shop/son-kem-amok-premium-multi-lips-m129?theme=sale">Son Kem
                                Amok Premium Multi Lips M129</a>

                            <div class="box_price">
                                142,500 đ
                            </div>
                            <div class="box_value">
                                <span class="real-value-text"></span>
                                150,000 đ
                            </div>
                        </div>
                        <div box_id="1853" class="col-xs-6 col-md-4 col-lg-3 box_card">
                            <div class="box_image">
                                <a href="/shop/whamisa-organic-leafroot-ferment-mens-lotion-20ml?theme=sale"><img
                                            data-src="https://upload.lixibox.com/system/pictures/files/000/006/930/medium/1461924520.jpg"
                                            class="lazyload"
                                            src="https://upload.lixibox.com/system/pictures/files/000/006/930/medium/1461924520.jpg"
                                            alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"></a>
                                <div class="seo-text hidden">
                                    Natural fermented organic leaves, roots, organic oils and butter give your skin long
                                    lasting moisturizing without greasy or sticky feeling.

                                </div>
                                <a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action"
                                   data-eventaction="like"
                                   data-eventlabel="Whamisa Organic Leaf/Root Ferment Men’s Lotion 20ml  "
                                   data-remote="true" rel="nofollow" data-method="post"
                                   href="/shop/%23%3CThemes::BoxPresenter:0x007fc3a9280dd8%3E/like_box"><i
                                            class="fa fa-heart"></i>
                                </a>
                                <div class="discount_percent">
                                    -25%
                                </div>
                                <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input
                                            name="utf8" type="hidden" value="✓"><input type="hidden" name="_method"
                                                                                       value="create">
                                    <input type="hidden" name="box_id" id="box_id" value="1853">
                                    <input type="hidden" name="theme_id" id="theme_id" value="140">
                                    <input type="submit" name="commit" value="Add to cart" style="display: none;"
                                           data-disable-with="Sending">
                                    <div class="box_tool box_quick_add_to_card">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                </form>

                            </div>
                            <a class="box_name"
                               href="/shop/whamisa-organic-leafroot-ferment-mens-lotion-20ml?theme=sale">Whamisa Organic
                                Leaf/Root Ferment Men’s Lotion 20ml </a>

                            <div class="box_price">
                                97,500 đ
                            </div>
                            <div class="box_value">
                                <span class="real-value-text"></span>
                                130,000 đ
                            </div>
                        </div>
                        <div box_id="2304" class="col-xs-6 col-md-4 col-lg-3 box_card">
                            <div class="box_image">
                                <a href="/shop/julep-lip-shade-macaroon?theme=sale"><img
                                            data-src="https://upload.lixibox.com/system/pictures/files/000/010/839/medium/1470732587.jpg"
                                            class="lazyload"
                                            src="https://upload.lixibox.com/system/pictures/files/000/010/839/medium/1470732587.jpg"
                                            alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"></a>
                                <div class="seo-text hidden">
                                    Một loại bơ dưỡng môi sang trọng, mềm mại lướt nhẹ nhàng trên môi bạn đem đến màu
                                    son lấp lánh, thêm vào đó là sự bảo vệ của SPF 30 Broad Spectrum khỏi tia UVA/UVB.
                                    Được tạo ra với sự kết hợp dưỡng của các chất giữ ẩm và dầu tự nhiên, Julep Lip
                                    Shade mang lại cho bạn màu sắc bạn muốn và lớp bảo vệ bạn cần.

                                    Với các thành phần
                                    - Bơ hạt mỡ giúp làm dịu và củng cố môi khô, nứt, - Dầu hạt bông cải xanh tạo thành
                                    một lớp bảo vệ giữ ẩm
                                    - Dầu hạt đậu xanh giúp kích thích sự luân chuyển của tế bào và giữ cho môi mượt
                                    - Dầu hạt dâu đen nuôi dưỡng và làm mềm đôi môi từ trong ra ngoài.
                                </div>
                                <a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action"
                                   data-eventaction="like" data-eventlabel="Julep Lip Shade - Macaroon"
                                   data-remote="true" rel="nofollow" data-method="post"
                                   href="/shop/%23%3CThemes::BoxPresenter:0x007f1c4cb3da20%3E/like_box"><i
                                            class="fa fa-heart"></i>
                                </a>
                                <div class="discount_percent">
                                    -10%
                                </div>
                                <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input
                                            name="utf8" type="hidden" value="✓"><input type="hidden" name="_method"
                                                                                       value="create">
                                    <input type="hidden" name="box_id" id="box_id" value="2304">
                                    <input type="hidden" name="theme_id" id="theme_id" value="140">
                                    <input type="submit" name="commit" value="Add to cart" style="display: none;"
                                           data-disable-with="Sending">
                                    <div class="box_tool box_quick_add_to_card">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                </form>

                            </div>
                            <a class="box_name" href="/shop/julep-lip-shade-macaroon?theme=sale">Julep Lip Shade -
                                Macaroon</a>

                            <div class="box_price">
                                738,000 đ
                            </div>
                            <div class="box_value">
                                <span class="real-value-text"></span>
                                820,000 đ
                            </div>
                        </div>
                        <div box_id="2591" class="col-xs-6 col-md-4 col-lg-3 box_card">
                            <div class="box_image">
                                <a href="/shop/julep-lip-gloss-lively?theme=sale"><img
                                            data-src="https://upload.lixibox.com/system/pictures/files/000/011/500/medium/1474321132.jpg"
                                            class="lazyload"
                                            src="https://upload.lixibox.com/system/pictures/files/000/011/500/medium/1474321132.jpg"
                                            alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"></a>
                                <div class="seo-text hidden">
                                    lip gloss
                                </div>
                                <a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action"
                                   data-eventaction="like" data-eventlabel="Julep Lip gloss - Lively" data-remote="true"
                                   rel="nofollow" data-method="post"
                                   href="/shop/%23%3CThemes::BoxPresenter:0x007fde8cb24108%3E/like_box"><i
                                            class="fa fa-heart"></i>
                                </a>
                                <div class="discount_percent">
                                    -25%
                                </div>
                                <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input
                                            name="utf8" type="hidden" value="✓"><input type="hidden" name="_method"
                                                                                       value="create">
                                    <input type="hidden" name="box_id" id="box_id" value="2591">
                                    <input type="hidden" name="theme_id" id="theme_id" value="140">
                                    <input type="submit" name="commit" value="Add to cart" style="display: none;"
                                           data-disable-with="Sending">
                                    <div class="box_tool box_quick_add_to_card">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                </form>

                            </div>
                            <a class="box_name" href="/shop/julep-lip-gloss-lively?theme=sale">Julep Lip gloss -
                                Lively</a>

                            <div class="box_price">
                                560,000 đ
                            </div>
                            <div class="box_value">
                                <span class="real-value-text"></span>
                                750,000 đ
                            </div>
                        </div>
                        <div box_id="2597" class="col-xs-6 col-md-4 col-lg-3 box_card">
                            <div class="box_image">
                                <a href="/shop/latelier-maquillage-mascara-keracare?theme=sale"><img
                                            data-src="https://upload.lixibox.com/system/pictures/files/000/011/506/medium/1474321967.png"
                                            class="lazyload"
                                            src="https://upload.lixibox.com/system/pictures/files/000/011/506/medium/1474321967.png"
                                            alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"></a>
                                <div class="seo-text hidden">
                                    Perfect for colour treated and highlighted hair, Oil Reflections by Wella
                                    Professionals is an anti-oxidant smoothing oil, which leaves hair gorgeously smooth.
                                    Enriched with Macadamia Seed Oil, Avocado Oil and Vitamin E, this lightweight
                                    consistency nourishes and conditions hair, without leaving it feeling greasy.
                                    Infused with an alluring aroma, Oil Reflections makes hair up to 86% shinier.
                                    Suitable for all hair types, it can be used on wet or dry hair and works best when
                                    used whilst blow-drying for an extra, silky smooth finish. - R.H

                                </div>
                                <a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action"
                                   data-eventaction="like" data-eventlabel="L'ATELIER MAQUILLAGE Mascara KeraCare"
                                   data-remote="true" rel="nofollow" data-method="post"
                                   href="/shop/%23%3CThemes::BoxPresenter:0x007fde8cb47658%3E/like_box"><i
                                            class="fa fa-heart"></i>
                                </a>
                                <div class="discount_percent">
                                    -24%
                                </div>
                                <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input
                                            name="utf8" type="hidden" value="✓"><input type="hidden" name="_method"
                                                                                       value="create">
                                    <input type="hidden" name="box_id" id="box_id" value="2597">
                                    <input type="hidden" name="theme_id" id="theme_id" value="140">
                                    <input type="submit" name="commit" value="Add to cart" style="display: none;"
                                           data-disable-with="Sending">
                                    <div class="box_tool box_quick_add_to_card">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                </form>

                            </div>
                            <a class="box_name" href="/shop/latelier-maquillage-mascara-keracare?theme=sale">L'ATELIER
                                MAQUILLAGE Mascara KeraCare</a>

                            <div class="box_price">
                                590,000 đ
                            </div>
                            <div class="box_value">
                                <span class="real-value-text"></span>
                                780,000 đ
                            </div>
                        </div>
                        <div box_id="2848" class="col-xs-6 col-md-4 col-lg-3 box_card">
                            <div class="box_image">
                                <a href="/shop/hormocenta-intense-serum-anti-dry-15ml?theme=sale"><img
                                            data-src="https://upload.lixibox.com/system/pictures/files/000/011/849/medium/1479879193.png"
                                            class="lazyload"
                                            src="https://upload.lixibox.com/system/pictures/files/000/011/849/medium/1479879193.png"
                                            alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"></a>
                                <div class="seo-text hidden">
                                    Huyết thanh tăng cường chăm sóc chuyên sâu cho da là một sản phẩm của hãng
                                    Hormocenta mang lại sự mềm mại dành cho da khô,da lão hóa,Công thức dầu có
                                    chứa các sáng tạo Skin-Protection-Complex được làm từ nho Ballon, dầu echium và hoa
                                    hướng dương cũng như cỏ bọt dầu, Bisabolol và vitamin giúp làn da của bạn tạo ra
                                    một lớp bảo vệ hydro-liquid nguyên vẹn và để lại một làn da mịn mượt.
                                </div>
                                <a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action"
                                   data-eventaction="like" data-eventlabel="Hormocenta Intense Serum Anti-Dry 15 ml"
                                   data-remote="true" rel="nofollow" data-method="post"
                                   href="/shop/%23%3CThemes::BoxPresenter:0x007fde8cb6d830%3E/like_box"><i
                                            class="fa fa-heart"></i>
                                </a>
                                <div class="discount_percent">
                                    -54%
                                </div>
                                <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input
                                            name="utf8" type="hidden" value="✓"><input type="hidden" name="_method"
                                                                                       value="create">
                                    <input type="hidden" name="box_id" id="box_id" value="2848">
                                    <input type="hidden" name="theme_id" id="theme_id" value="140">
                                    <input type="submit" name="commit" value="Add to cart" style="display: none;"
                                           data-disable-with="Sending">
                                    <div class="box_tool box_quick_add_to_card">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                </form>

                            </div>
                            <a class="box_name" href="/shop/hormocenta-intense-serum-anti-dry-15ml?theme=sale">Hormocenta
                                Intense Serum Anti-Dry 15 ml</a>

                            <div class="box_price">
                                210,000 đ
                            </div>
                            <div class="box_value">
                                <span class="real-value-text"></span>
                                460,000 đ
                            </div>
                        </div>
                        <div box_id="2817" class="col-xs-6 col-md-4 col-lg-3 box_card">
                            <div class="box_image">
                                <a href="/shop/julep-eyeshadow-stick-violet-shimmer-14g?theme=sale"><img
                                            data-src="https://upload.lixibox.com/system/pictures/files/000/011/813/medium/1479377299.jpg"
                                            class="lazyload"
                                            src="https://upload.lixibox.com/system/pictures/files/000/011/813/medium/1479377299.jpg"
                                            alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"></a>
                                <div class="seo-text hidden">
                                    Julep Eyeshadow Stick được thiết kế dạng thanh 2 đầu, một đầu là kem mắt "mềm mịn
                                    như phấn", không thấm nước, đầu còn lại là bông mút tiện lợi để bạn tán màu. Chất
                                    kem dễ lên màu, không làm lộ vết gấp trên mắt, giữ màu bền đẹp cả ngày.
                                </div>
                                <a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action"
                                   data-eventaction="like" data-eventlabel="Julep Eyeshadow Stick - Violet Shimmer 1.4g"
                                   data-remote="true" rel="nofollow" data-method="post"
                                   href="/shop/%23%3CThemes::BoxPresenter:0x007fde8cb9d9e0%3E/like_box"><i
                                            class="fa fa-heart"></i>
                                </a>
                                <div class="discount_percent">
                                    -21%
                                </div>
                                <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input
                                            name="utf8" type="hidden" value="✓"><input type="hidden" name="_method"
                                                                                       value="create">
                                    <input type="hidden" name="box_id" id="box_id" value="2817">
                                    <input type="hidden" name="theme_id" id="theme_id" value="140">
                                    <input type="submit" name="commit" value="Add to cart" style="display: none;"
                                           data-disable-with="Sending">
                                    <div class="box_tool box_quick_add_to_card">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                </form>

                            </div>
                            <a class="box_name" href="/shop/julep-eyeshadow-stick-violet-shimmer-14g?theme=sale">Julep
                                Eyeshadow Stick - Violet Shimmer 1.4g</a>

                            <div class="box_price">
                                230,000 đ
                            </div>
                            <div class="box_value">
                                <span class="real-value-text"></span>
                                290,000 đ
                            </div>
                        </div>
                        <div box_id="2869" class="col-xs-6 col-md-4 col-lg-3 box_card">
                            <div class="box_image">
                                <a href="/shop/juara-candlenut-body-creme-10ml?theme=sale"><img
                                            data-src="https://upload.lixibox.com/system/pictures/files/000/011/870/medium/1479890974.jpg"
                                            class="lazyload"
                                            src="https://upload.lixibox.com/system/pictures/files/000/011/870/medium/1479890974.jpg"
                                            alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"></a>
                                <div class="seo-text hidden">
                                    Juara Candlenut Body Creme mini size
                                </div>
                                <a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action"
                                   data-eventaction="like" data-eventlabel="Juara Candlenut Body Creme mini size"
                                   data-remote="true" rel="nofollow" data-method="post"
                                   href="/shop/%23%3CThemes::BoxPresenter:0x007fde8cbf7350%3E/like_box"><i
                                            class="fa fa-heart"></i>
                                </a>
                                <div class="discount_percent">
                                    -24%
                                </div>
                                <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input
                                            name="utf8" type="hidden" value="✓"><input type="hidden" name="_method"
                                                                                       value="create">
                                    <input type="hidden" name="box_id" id="box_id" value="2869">
                                    <input type="hidden" name="theme_id" id="theme_id" value="140">
                                    <input type="submit" name="commit" value="Add to cart" style="display: none;"
                                           data-disable-with="Sending">
                                    <div class="box_tool box_quick_add_to_card">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                </form>

                            </div>
                            <a class="box_name" href="/shop/juara-candlenut-body-creme-10ml?theme=sale">Juara Candlenut
                                Body Creme mini size</a>

                            <div class="box_price">
                                220,000 đ
                            </div>
                            <div class="box_value">
                                <span class="real-value-text"></span>
                                290,000 đ
                            </div>
                        </div>
                        <div box_id="2872" class="col-xs-6 col-md-4 col-lg-3 box_card">
                            <div class="box_image">
                                <a href="/shop/marcelle-multi-action-care-7ml?theme=sale"><img
                                            data-src="https://upload.lixibox.com/system/pictures/files/000/011/873/medium/1479891213"
                                            class="lazyload"
                                            src="https://upload.lixibox.com/system/pictures/files/000/011/873/medium/1479891213"
                                            alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"></a>
                                <div class="seo-text hidden">
                                    Marcelle Multi-action Care 7ml
                                </div>
                                <a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action"
                                   data-eventaction="like" data-eventlabel="Marcelle Multi-action Care 7ml"
                                   data-remote="true" rel="nofollow" data-method="post"
                                   href="/shop/%23%3CThemes::BoxPresenter:0x007fde8cc2c578%3E/like_box"><i
                                            class="fa fa-heart"></i>
                                </a>
                                <div class="discount_percent">
                                    -24%
                                </div>
                                <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input
                                            name="utf8" type="hidden" value="✓"><input type="hidden" name="_method"
                                                                                       value="create">
                                    <input type="hidden" name="box_id" id="box_id" value="2872">
                                    <input type="hidden" name="theme_id" id="theme_id" value="140">
                                    <input type="submit" name="commit" value="Add to cart" style="display: none;"
                                           data-disable-with="Sending">
                                    <div class="box_tool box_quick_add_to_card">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                </form>

                            </div>
                            <a class="box_name" href="/shop/marcelle-multi-action-care-7ml?theme=sale">Marcelle
                                Multi-action Care 7ml</a>

                            <div class="box_price">
                                220,000 đ
                            </div>
                            <div class="box_value">
                                <span class="real-value-text"></span>
                                290,000 đ
                            </div>
                        </div>
                        <div box_id="3112" class="col-xs-6 col-md-4 col-lg-3 box_card">
                            <div class="box_image">
                                <a href="/shop/unwash-bio-cleansing-conditioner-74ml?theme=sale"><img
                                            data-src="https://upload.lixibox.com/system/pictures/files/000/012/215/medium/1482811749.jpg"
                                            class="lazyload"
                                            src="https://upload.lixibox.com/system/pictures/files/000/012/215/medium/1482811749.jpg"
                                            alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"></a>
                                <div class="seo-text hidden">
                                    Unwash Bio Cleansing Conditioner 74ml
                                    This unique non-lather formula attracts and removes daily dirt and surface build-up
                                    without stripping hair of natural oils, leaving hair free of frizz, and full of
                                    bounce. Safe for treated-treated hair.


                                </div>
                                <a class="box_tool box_add_to_favorites ga-track-link" data-eventcategory="Box Action"
                                   data-eventaction="like" data-eventlabel="Unwash Bio Cleansing Conditioner 74ml"
                                   data-remote="true" rel="nofollow" data-method="post"
                                   href="/shop/%23%3CThemes::BoxPresenter:0x007f11d8efbc30%3E/like_box"><i
                                            class="fa fa-heart"></i>
                                </a>
                                <div class="discount_percent">
                                    -29%
                                </div>
                                <form action="/cart" accept-charset="UTF-8" data-remote="true" method="post"><input
                                            name="utf8" type="hidden" value="✓"><input type="hidden" name="_method"
                                                                                       value="create">
                                    <input type="hidden" name="box_id" id="box_id" value="3112">
                                    <input type="hidden" name="theme_id" id="theme_id" value="140">
                                    <input type="submit" name="commit" value="Add to cart" style="display: none;"
                                           data-disable-with="Sending">
                                    <div class="box_tool box_quick_add_to_card">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                </form>

                            </div>
                            <a class="box_name" href="/shop/unwash-bio-cleansing-conditioner-74ml?theme=sale">Unwash Bio
                                Cleansing Conditioner 74ml</a>

                            <div class="box_price">
                                150,000 đ
                            </div>
                            <div class="box_value">
                                <span class="real-value-text"></span>
                                210,000 đ
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="visible-xs bottom-50">
            <div class="text-center" id="load_more">
                <a class="btn btn-default" data-remote="true" href="/shop/theme/sale?page=2">Xem thêm</a>

            </div>
        </div>

        <div class="row top-30">
            <div class="col-xs-12">
                <h3 class="divider-title">
                    <span class="text">BẠN ĐÃ XEM</span>
                </h3>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box_card_slider top-20">
                            <div class="flexslider flexslider-hot-boxes" data-item-margin="20" data-max-item="4"
                                 data-slide="multiple" data-source="Home Page Viewed Boxes" id="viewed_boxes">

                                <div class="flex-viewport" style="overflow: hidden; position: relative;">
                                    <ul class="slides"
                                        style="width: 1000%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                        <li data-thumb-alt=""
                                            style="width: 265px; margin-right: 20px; float: left; display: block;">
                                            <div box_id="5653" class="box_card">
                                                <div class="box_image">
                                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/023/786/medium/1504684532.jpg"
                                                         class="lazyload"
                                                         src="https://upload.lixibox.com/system/pictures/files/000/023/786/medium/1504684532.jpg"
                                                         alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"
                                                         draggable="false">
                                                    <div class="seo-text hidden">
                                                        Da sạch mỗi ngày thực sự đóng vai trò quan trọng cho một làm da
                                                        đẹp. Sự kết hợp giữa 3 sản phẩm sau đây với những công dụng hữu
                                                        hiệu sẽ đem đến cho mọi người một làn da sạch và khỏe thực sự.
                                                        Đầu tiên, sáp tẩy trang Banila với khả năng tẩy trang xuất sắc,
                                                        cuốn sạch bụi bẩn mà không để lại nhờn dính hay làm mất đi các
                                                        chất dưỡng ẩm cần thiết cho da, sử dụng chung với máy rửa mặt
                                                        Halio giúp làm sạch sâu gấp 10 lần và loại bỏ tới 99% dầu thừa
                                                        cũng như lớp trang điểm còn sót lại mà vẫn dịu nhẹ không gây lão
                                                        hoá cho làn da. Đồng thời, Halio cũng giúp massage thư giãn
                                                        khuôn mặt sau một ngày làm việc căng thẳng. Sau khi rửa mặt
                                                        xong, chiếc mặt nạ Mediheal với nhiều công dụng như dưỡng trắng,
                                                        thải độc, dưỡng ẩm,... sẽ giúp da mịn mướt, và khỏe hơn.

                                                    </div>
                                                    <a class="box_designer" title="Online Lixibox"
                                                       href="/ex/lixibox-lixibox"><img alt="Online Lixibox"
                                                                                       src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143"
                                                                                       draggable="false">
                                                    </a><a class="box_tool box_add_to_favorites ga-track-link"
                                                           data-eventcategory="Box Action" data-eventaction="like"
                                                           data-eventlabel="Mother's Day Special (Sky Blue)"
                                                           data-remote="true" rel="nofollow" data-method="post"
                                                           href="/shop/mothers-day-special-sky-blue/like_box"><i
                                                                class="fa fa-heart"></i>
                                                    </a>
                                                    <div class="discount_percent">
                                                        -27%
                                                    </div>
                                                    <form action="/cart" accept-charset="UTF-8" data-remote="true"
                                                          method="post"><input name="utf8" type="hidden"
                                                                               value="✓"><input type="hidden"
                                                                                                name="_method"
                                                                                                value="create">
                                                        <input type="hidden" name="box_id" id="box_id" value="5653">
                                                        <input type="submit" name="commit" value="Add to cart"
                                                               style="display: none;" data-disable-with="Sending">
                                                        <div class="box_tool box_quick_add_to_card">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </div>
                                                    </form>

                                                </div>
                                                <a class="box_name" href="/shop/mothers-day-special-sky-blue">Mother's
                                                    Day Special (Sky Blue)</a>
                                                <div class="rate">
<span class="stars">
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star-half-o active"></i>
</span>
                                                    5
                                                </div>

                                                <div class="box_price">
                                                    820,000 đ
                                                </div>
                                                <div class="box_value">
                                                    <span class="real-value-text"></span>
                                                    1,120,000 đ
                                                </div>
                                                <a class="link-block box_link"
                                                   href="/shop/mothers-day-special-sky-blue"><span>Mother's Day Special (Sky Blue) by Lixibox Online</span>
                                                </a></div>

                                        </li>
                                        <li data-thumb-alt=""
                                            style="width: 265px; margin-right: 20px; float: left; display: block;">
                                            <div box_id="5963" class="box_card">
                                                <div class="box_image">
                                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/705/medium/1519788040.png"
                                                         class="lazyload"
                                                         src="https://upload.lixibox.com/system/pictures/files/000/025/705/medium/1519788040.png"
                                                         alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"
                                                         draggable="false">
                                                    <div class="seo-text hidden">
                                                        "Những sản phẩm được các bạn ưu ái đón nhận trong thời gian qua,
                                                        Lixibox đã tập hợp lại thành một box Best Sellers.
                                                        Halio Facial Cleansing &amp; Massaging Device - Sky Blue
                                                        the Duo Rain drop
                                                        Lustre PRO Eyelash Curler
                                                        Lustre Ultimate Eyeliner Professional Line - Deep Green Metallic
                                                        OKAME Bio-Cellulose Mask Anti-aging"


                                                    </div>
                                                    <a class="box_designer" title="Online Lixibox"
                                                       href="/ex/lixibox-lixibox"><img alt="Online Lixibox"
                                                                                       src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143"
                                                                                       draggable="false">
                                                    </a><a class="box_tool box_add_to_favorites ga-track-link"
                                                           data-eventcategory="Box Action" data-eventaction="like"
                                                           data-eventlabel="Hot Fun In The Summertime"
                                                           data-remote="true" rel="nofollow" data-method="post"
                                                           href="/shop/hot-fun-in-the-summertime/like_box"><i
                                                                class="fa fa-heart"></i>
                                                    </a>
                                                    <div class="discount_percent">
                                                        -50%
                                                    </div>
                                                    <form action="/cart" accept-charset="UTF-8" data-remote="true"
                                                          method="post"><input name="utf8" type="hidden"
                                                                               value="✓"><input type="hidden"
                                                                                                name="_method"
                                                                                                value="create">
                                                        <input type="hidden" name="box_id" id="box_id" value="5963">
                                                        <input type="submit" name="commit" value="Add to cart"
                                                               style="display: none;" data-disable-with="Sending">
                                                        <div class="box_tool box_quick_add_to_card">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </div>
                                                    </form>

                                                </div>
                                                <a class="box_name" href="/shop/hot-fun-in-the-summertime">Hot Fun In
                                                    The Summertime</a>
                                                <div class="rate">
<span class="stars">
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star-half-o active"></i>
</span>
                                                    73
                                                </div>

                                                <div class="box_price">
                                                    990,000 đ
                                                </div>
                                                <div class="box_value">
                                                    <span class="real-value-text"></span>
                                                    1,970,000 đ
                                                </div>
                                                <a class="link-block box_link"
                                                   href="/shop/hot-fun-in-the-summertime"><span>Hot Fun In The Summertime by Lixibox Online</span>
                                                </a></div>

                                        </li>
                                        <li style="width: 265px; margin-right: 20px; float: left; display: block;">
                                            <div box_id="6199" class="box_card">
                                                <div class="box_image">
                                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/024/471/medium/1513672160.jpg"
                                                         class="lazyload"
                                                         src="https://upload.lixibox.com/system/pictures/files/000/024/471/medium/1513672160.jpg"
                                                         alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"
                                                         draggable="false">
                                                    <div class="seo-text hidden">
                                                        Sau những bữa tiệc tùng với bạn bè thì các bạn rất mệt mỏi với
                                                        giai đoạn tẩy trang , Lixibox đã tổng hợp cho các bạn 1 bộ sản
                                                        phẩm tẩy trang rất tốt luôn, giúp loại bỏ sạch sẽ những bụi bẩn
                                                        và lớp makeup.
                                                    </div>
                                                    <a class="box_designer" title="Online Lixibox"
                                                       href="/ex/lixibox-lixibox"><img alt="Online Lixibox"
                                                                                       src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143"
                                                                                       draggable="false">
                                                    </a><a class="box_tool box_add_to_favorites ga-track-link"
                                                           data-eventcategory="Box Action" data-eventaction="like"
                                                           data-eventlabel="COOL FOR THE SUMMER  (Baby Pink)"
                                                           data-remote="true" rel="nofollow" data-method="post"
                                                           href="/shop/cool-for-the-summer--baby-pink/like_box"><i
                                                                class="fa fa-heart"></i>
                                                    </a>
                                                    <div class="discount_percent">
                                                        -39%
                                                    </div>
                                                    <form action="/cart" accept-charset="UTF-8" data-remote="true"
                                                          method="post"><input name="utf8" type="hidden"
                                                                               value="✓"><input type="hidden"
                                                                                                name="_method"
                                                                                                value="create">
                                                        <input type="hidden" name="box_id" id="box_id" value="6199">
                                                        <input type="submit" name="commit" value="Add to cart"
                                                               style="display: none;" data-disable-with="Sending">
                                                        <div class="box_tool box_quick_add_to_card">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </div>
                                                    </form>

                                                </div>
                                                <a class="box_name" href="/shop/cool-for-the-summer--baby-pink">COOL FOR
                                                    THE SUMMER (Baby Pink)</a>
                                                <div class="rate">
<span class="stars">
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star-half-o active"></i>
</span>
                                                    16
                                                </div>

                                                <div class="box_price">
                                                    920,000 đ
                                                </div>
                                                <div class="box_value">
                                                    <span class="real-value-text"></span>
                                                    1,506,000 đ
                                                </div>
                                                <a class="link-block box_link"
                                                   href="/shop/cool-for-the-summer--baby-pink"><span>COOL FOR THE SUMMER  (Baby Pink) by Lixibox Online</span>
                                                </a></div>

                                        </li>
                                        <li style="width: 265px; margin-right: 20px; float: left; display: block;">
                                            <div box_id="6200" class="box_card">
                                                <div class="box_image">
                                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/024/470/medium/1513672044.jpg"
                                                         class="lazyload"
                                                         src="https://upload.lixibox.com/system/pictures/files/000/024/470/medium/1513672044.jpg"
                                                         alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"
                                                         draggable="false">
                                                    <div class="seo-text hidden">
                                                        Sau những bữa tiệc tùng với bạn bè thì các bạn rất mệt mỏi với
                                                        giai đoạn tẩy trang , Lixibox đã tổng hợp cho các bạn 1 bộ sản
                                                        phẩm tẩy trang rất tốt luôn, giúp loại bỏ sạch sẽ những bụi bẩn
                                                        và lớp makeup.


                                                    </div>
                                                    <a class="box_designer" title="Online Lixibox"
                                                       href="/ex/lixibox-lixibox"><img alt="Online Lixibox"
                                                                                       src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143"
                                                                                       draggable="false">
                                                    </a><a class="box_tool box_add_to_favorites ga-track-link"
                                                           data-eventcategory="Box Action" data-eventaction="like"
                                                           data-eventlabel="COOL FOR THE SUMMER (Sky Blue)"
                                                           data-remote="true" rel="nofollow" data-method="post"
                                                           href="/shop/cool-for-the-summer-sky-blue/like_box"><i
                                                                class="fa fa-heart"></i>
                                                    </a>
                                                    <div class="discount_percent">
                                                        -39%
                                                    </div>
                                                    <form action="/cart" accept-charset="UTF-8" data-remote="true"
                                                          method="post"><input name="utf8" type="hidden"
                                                                               value="✓"><input type="hidden"
                                                                                                name="_method"
                                                                                                value="create">
                                                        <input type="hidden" name="box_id" id="box_id" value="6200">
                                                        <input type="submit" name="commit" value="Add to cart"
                                                               style="display: none;" data-disable-with="Sending">
                                                        <div class="box_tool box_quick_add_to_card">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </div>
                                                    </form>

                                                </div>
                                                <a class="box_name" href="/shop/cool-for-the-summer-sky-blue">COOL FOR
                                                    THE SUMMER (Sky Blue)</a>
                                                <div class="rate">
<span class="stars">
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star active"></i>
<i class="fa fa-star-half-o active"></i>
</span>
                                                    12
                                                </div>

                                                <div class="box_price">
                                                    920,000 đ
                                                </div>
                                                <div class="box_value">
                                                    <span class="real-value-text"></span>
                                                    1,506,000 đ
                                                </div>
                                                <a class="link-block box_link"
                                                   href="/shop/cool-for-the-summer-sky-blue"><span>COOL FOR THE SUMMER (Sky Blue) by Lixibox Online</span>
                                                </a></div>

                                        </li>
                                        <li style="width: 265px; margin-right: 20px; float: left; display: block;">
                                            <div box_id="7321" class="box_card">
                                                <div class="box_image">
                                                    <img data-src="https://upload.lixibox.com/system/pictures/files/000/025/809/medium/1519810488.jpg"
                                                         class="lazyload"
                                                         src="https://upload.lixibox.com/system/pictures/files/000/025/809/medium/1519810488.jpg"
                                                         alt="Default d14be6d96fd9aadc39ddebbab0d78a38588ff782498528afd0ce9ff279e908de"
                                                         draggable="false">
                                                    <div class="seo-text hidden">
                                                        Box tập hợp các sản phẩm giúp làm sạch và thư giãn làn da.
                                                    </div>
                                                    <a class="box_designer" title="Online Lixibox"
                                                       href="/ex/lixibox-lixibox"><img alt="Online Lixibox"
                                                                                       src="https://upload.lixibox.com/system/users/avatars/000/000/006/thumb/lixibox.png?1467005143"
                                                                                       draggable="false">
                                                    </a><a class="box_tool box_add_to_favorites ga-track-link"
                                                           data-eventcategory="Box Action" data-eventaction="like"
                                                           data-eventlabel="Lixibox Favorites - Refresh your skin"
                                                           data-remote="true" rel="nofollow" data-method="post"
                                                           href="/shop/women-box-refresh-your-skin/like_box"><i
                                                                class="fa fa-heart"></i>
                                                    </a>
                                                    <div class="discount_percent">
                                                        -38%
                                                    </div>
                                                    <form action="/cart" accept-charset="UTF-8" data-remote="true"
                                                          method="post"><input name="utf8" type="hidden"
                                                                               value="✓"><input type="hidden"
                                                                                                name="_method"
                                                                                                value="create">
                                                        <input type="hidden" name="box_id" id="box_id" value="7321">
                                                        <input type="submit" name="commit" value="Add to cart"
                                                               style="display: none;" data-disable-with="Sending">
                                                        <div class="box_tool box_quick_add_to_card">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </div>
                                                    </form>

                                                </div>
                                                <a class="box_name" href="/shop/women-box-refresh-your-skin">Lixibox
                                                    Favorites - Refresh your skin</a>

                                                <div class="box_price">
                                                    550,000 đ
                                                </div>
                                                <div class="box_value">
                                                    <span class="real-value-text"></span>
                                                    885,000 đ
                                                </div>
                                                <a class="link-block box_link" href="/shop/women-box-refresh-your-skin"><span>Lixibox Favorites - Refresh your skin by Lixibox Online</span>
                                                </a></div>

                                        </li>
                                    </ul>
                                </div>
                                <ol class="flex-control-nav flex-control-paging">
                                    <li><a href="#" class="flex-active">1</a></li>
                                    <li><a href="#">2</a></li>
                                </ol>
                                <ul class="flex-direction-nav">
                                    <li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#"
                                                                 tabindex="-1"></a></li>
                                    <li class="flex-nav-next"><a class="flex-next" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    $(function () {
                        initSwiper();
                    });
                </script>
            </div>
        </div>

    </div>
    <script>
        $(function () {
            $('.js-login-required').on('click', function () {
                $('.popup-login-modal').modal('show');
                return false;
            });

            $(document).on("click", "#load_more a", function () {
                var spinner = '<i class="fa fa-spinner fa-spin"></i>';
                $("#load_more a").html(spinner + " Loading...");
            });
        })
    </script>
    <script>
        setTimeout(function () {
            window._fbq = window._fbq || [];
            var fbTrackOptions = JSON.parse('{\"content_name\":\"SALE\",\"content_type\":\"theme\",\"content_ids\":[1790,1587,1025,2298,2052,1024,1917,2589,1776,1774,1788,1789,585,885,736,1853,2304,2591,2597,2848,2817,2869,2872,3112]}');
            if (true) {
                window._fbq.push(['track', 'ViewContent', fbTrackOptions]);
            } else {
                console.log("ViewContent", fbTrackOptions);
            }
        }, 300);
    </script>


</div>
