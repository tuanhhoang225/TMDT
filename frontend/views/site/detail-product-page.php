<?php
/**
 * Created by PhpStorm.
 * User: tuanh
 * Date: 3/23/2018
 * Time: 11:19 AM
 */
use yii\helpers\Url;
use common\helpers\FunctionHelper;
use common\models\User;
use yii\web\NotFoundHttpException;
/** @var $category \common\models\Category */
/** @var $product \common\models\Product */
$user = null;

if (!Yii::$app->user->isGuest) {
    $user = findU(Yii::$app->user->identity->getId());
}
function findU($id)
{
    if (($model = User::findOne($id)) !== null) {
        return $model;
    }
    return false;
}

?>
<div id="content">
    <div class="container">
        <div class="box_details clearfix" id="box_detail">
            <div class="right">
                <div class="clearfix" id="box_info">
                    <div class="box">
                        <ol class="breadcrumb flat">
                            <li class="breadcrumb-item">
                                <a href="">Beauty Box</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="">Bestsellers Beauty Box</a>
                            </li>
                        </ol>
                        <h2 class="uppercase box-name">
                            <?=$product['title']?>
                        </h2>
                        <div class="pull-right">
                        </div>
                        <div class="bottom-10 box_pictures mobile top-10 visible-sm visible-xs">
                            <div class="text-center single_picture">
                                <img alt="Hot Fun In The Summertime" src="https://upload.lixibox.com/system/pictures/files/000/025/705/large/1519788040.png">
                            </div>
                        </div>

                        <p class="price clearfix hidden-sm hidden-xs">
                            <span class="new-price">  <?=$product['price']?> </span>
                        </p>
                        <div id="variants">
                            <script>
                                var isDevice = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)
                                $('.js-select-variant-item').hover(function(e){
                                    if(isDevice) {
                                        return true;
                                    }
                                    var box_id = $(this).data('box-id')
                                    $('#variants .current-color').toggleClass('hidden');
                                    $('#variants .preview-color').html($(this).data('color-title'));
                                    if(!$(this).hasClass('current-variant')) {
                                        $('#previewer_variants img').addClass('hidden');
                                        $('#previewer_variants .preview_box_' + box_id).removeClass('hidden');
                                    }
                                }, function(e){
                                    if(isDevice) {
                                        return true;
                                    }
                                    $('#previewer_variants img').addClass('hidden');

                                    $('#variants .current-color').toggleClass('hidden');
                                    $('#variants .preview-color').html('');
                                });
                            </script>

                        </div>
                        <div class="tab-pane" id="box_details" style="display: block; margin-bottom: 20px;">
                            <?=$product['content']?>

                        </div>
                        <!-- Product Image for Mobile -->
                        <div class="hidden-md hidden-lg">
                        </div>
                        <div class="clearfix">
                            <form id="add-box" action="" accept-charset="UTF-8" data-remote="true" method="post">

                                <input type="submit" name="commit" value="Thêm vào giỏ" class="hidden-sm hidden-xs button add-to-cart-btn" onclick="add_cart(<?= $product['id'] ?>,<?= $user['id']?>)" data-disable-with="Đang thêm">
                            </form>
                            <div class="hidden-sm hidden-xs">
                                <div class="box_detail_favourite">
                                    <a class="button love-btn" data-remote="true" rel="nofollow" data-method="post" href="">
                                        <i class="fa fa-heart-o"></i>
                                        <span class="hidden-xs">Yêu thích</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <hr class="hidden-sm hidden-xs">
                </div>
            </div>
            <div class="left" style="width: 730px;">
                <div class="bottom-10 box_pictures desktop hidden-sm hidden-xs top-10">
                    <div class="text-center single_picture">
                        <img alt="Hot Fun In The Summertime" src="<?=$product['avatar']?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function(){
            window.onpopstate = function(e) {
                var state = e.state;
                if(history.pushState && state) {
                    var key_path = state.path;
                    boxPictureSwiper();
                }
            };

            document.body.scrollTop = 0;

            function init_floating_box_info() {
                var $box_info = $('#box_info'),
                    $parent = $box_info.parent(),
                    $footerBannersLixiselfie = $('#footer_banners_lixiselfie'),
                    affixOffsetBottom = 100;

                if($footerBannersLixiselfie.length > 0) {
                    affixOffsetBottom = 450;
                }
                $box_info.affix({
                    offset: {
                        top: $('#header').outerHeight() + $('#navigation').outerHeight() - 30,
                        bottom: $('#footer').outerHeight() + affixOffsetBottom
                    }
                });

                function apply_fixes() {
                    $box_info.width($parent.width());
                    if ($box_info.hasClass("affix")) {
                        $box_info.css({ left: $parent.offset().left });
                    } else {
                        $box_info.css({ left: 0 });
                    }
                }

                function apply_fix_left() {
                    $box_info.css({ left: 0 });
                }

                $box_info.on('affixed.bs.affix', apply_fixes);
                $box_info.on('affixed-top.bs.affix', apply_fix_left);
                $box_info.on('affixed-bottom.bs.affix', apply_fix_left);

                var timer;

                $(window).on("resize", function() {
                    clearTimeout(timer);
                    setTimeout(apply_fixes, 300);
                });
            }

            // Alert comment
            function alertCommentBox(comment_anchor) {
                if(location.hash === '#discussions' && comment_anchor) {
                    var $comment = $('#' + comment_anchor);
                    $comment.addClass('alert');
                    $comment.closest('.comments').show();
                    $('html, body').animate({
                        scrollTop: ($comment.offset().top - 100)
                    }, 2000);
                    setTimeout(function() { $comment.removeClass('alert') }, 6000);
                }
            }

            function boxPictureSwiper() {
                $('.box_pictures').each(function() {
                    var big_picture = $(this).find('.big_picture');
                    var thumbnails = $(this).find('.thumbnails');
                    if (!big_picture.length || !thumbnails.length) {
                        return;
                    }
                    var big_picture_slider = new Swiper(big_picture, {
                        nextButton: big_picture.find('.swiper-button-next'),
                        prevButton: big_picture.find('.swiper-button-prev'),
                        effect: 'fade',
                        preloadImages: false,
                        lazyLoading: true,
                        onSlideChangeEnd: function(swiper) {
                            swiper.container.find('iframe').removeAttr('src');
                            var slide = $(swiper.slides[swiper.activeIndex]);
                            slide.find('iframe').each(function() {
                                var iframe = $(this);
                                iframe.attr('src', iframe.attr('video_src'));
                            });
                        }
                    });
                    var thumbnails_slider = new Swiper(thumbnails, {
                        spaceBetween: 10,
                        centeredSlides: true,
                        slidesPerView: 'auto',
                        touchRatio: 0.2,
                        slideToClickedSlide: true
                    });
                    big_picture_slider.params.control = thumbnails_slider;
                    thumbnails_slider.params.control = big_picture_slider
                });
            };

            function loadVariant(path, data) {
                if(path === '' || typeof(path) === undefined) {
                    return false;
                }
                $.ajax({
                    url: path,
                    type: 'GET',
                    data: data,
                    success: function(response) {
                        initLoadAndReload();
                        if (history.pushState) {
                            history.pushState({path: path}, null, path);
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            }

            function enableTab($tab) {
                var $tabHeader = $('.tabs-header'),
                    $tabContent = $('.tabs-content');

                $tabHeader.find('span.line').show();
                $tabHeader.find('a').removeClass('active');
                $tab.addClass('active').find('span.line').hide();
                $tab.prev().find('span.line').hide();

                $tabContent.find('.tab-pane').hide();
                $($tab.attr('href')).fadeIn('slow');
            }

            function resizeLayout() {
                if($(window).width() >= 992) {
                    $('.left').css('width', $('.box_details').width() - $('.right').width());
                }
            }

            function scrollTopToElement(element, offsetTopMinus, callback) {
                if ($(element).length > 0) {
                    $('html, body').animate({
                        scrollTop: $(element).offset().top - offsetTopMinus
                    }, 1000).promise().done(function() {
                        if(callback && typeof(callback) == 'function') { callback(); }
                    });
                }
            }
            function initLoadAndReload() {
                resizeLayout();
                boxPictureSwiper();
                var array = ["#products", "#rates", "#discussions", "#shipment"];

                if(location.hash && array.includes(location.hash)) {
                    enableTab($('a[href="' + location.hash + '"]'));
                } else {
                    enableTab($('a[href="' + $('.tabs-header').data('tab-active') + '"]'));
                }

                alertCommentBox("")
            }

            (function() {
                //init_floating_box_info();
                enableFlexslider('.flexslider', {});
                initLoadAndReload();
            }());

            $(window).resize(function() {
                resizeLayout();
                boxPictureSwiper();
            });

            $(document.body).on('click', '.tabs-header a', function(event) {
                event.preventDefault();
                enableTab($(this));
            });

            $("#province_id").change(function(){
                updateDistrict($(this).val(), $("#district_id"));
            });

            $(document.body).on('click', '.show-more-less-arrow', function(event) {
                event.preventDefault();
                $(this).closest($(this).data('parent')).find($(this).data('target')).toggle();
                $(this).toggleClass('active');
            });

            $(document.body).on('click', '.show-all-discussions', function(event) {
                event.preventDefault();
                enableTab($('a[href="#rates"]'));
                scrollTopToElement('#box_detail_tab_content', 110, function() {});
            });

            $(document).on('click', '.collapsible-text .toggle', function() {
                $(this).closest('.collapsible-text').toggleClass('collapsed');
                $(this).closest('.collapsible-text').toggleClass('expanded');
            });

            $(document.body).on('change', '.js-select-option-size', function(e){
                var option_value_id = $(this).val();
                var path = $(this).data('url');
                loadVariant(path, {option_value_id: option_value_id})
                e.preventDefault();
            });

            $(document.body).on('click', '.js-select-variant-item', function(e) {
                var path = $(this).attr('href');
                loadVariant(path, {radom: Math.random()});
                e.preventDefault();
            });

            // Popover for VIP program
            $(".buy-hack-popover").popover({
                content: 'BUY HACK là <b>chương trình giá sỉ</b> cho khách hàng <b>tích luỹ 4tr trong tháng</b>. <a href="/user/buy-hack">Xem chi tiết chương trình</a>',
                html: true
            });
        });
    </script>
    <script>
        setTimeout(function() {
            window._fbq = window._fbq || [];
            var fbTrackOptions = JSON.parse('{\"value\":990000,\"currency\":\"VND\",\"content_type\":\"product\",\"content_name\":\"Hot Fun In The Summertime\",\"content_ids\":5963}');
            if (true) {
                window._fbq.push(['track', 'ViewContent', fbTrackOptions]);
            } else {
                console.log("ViewContent", fbTrackOptions);
            }
        }, 300);
    </script>
</div>

