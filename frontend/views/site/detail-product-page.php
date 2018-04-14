<?php
/**
 * Created by PhpStorm.
 * User: tuanh
 * Date: 3/23/2018
 * Time: 11:19 AM
 */
use yii\helpers\Url;
use common\helpers\FunctionHelper;
/** @var $category \common\models\Category */
/** @var $product \common\models\Product */

?>
<div class="banner-top">
    <div class="container">
        <h1><?= $category['title']?></h1>
        <em></em>
        <h2><a href="<?= Url::to(['site/index']) ?>">Home</a><label>/</label><?= $category['title']?></h2>
    </div>
</div>
<div class="single">

    <div class="container">
        <div class="col-md-9">
            <div class="col-md-5 grid">
                <div class="flexslider">

                    <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1000%; transition-duration: 0s; transform: translate3d(-304px, 0px, 0px);"><li data-thumb="images/si2.jpg" class="clone" aria-hidden="true" style="width: 304px; float: left; display: block;">
                                <div class="thumb-image"> <img src="<?= $product['avatar'] ?>" data-imagezoom="true" class="img-responsive" draggable="false"> </div>
                            </li>
                            <li data-thumb="images/si.jpg" style="width: 304px; float: left; display: block;" class="flex-active-slide">
                                <div class="thumb-image"> <img src="<?= $product['avatar'] ?>" data-imagezoom="true" class="img-responsive" draggable="false"> </div>
                            </li>
                            <li data-thumb="images/si1.jpg" class="" style="width: 304px; float: left; display: block;">
                                <div class="thumb-image"> <img src="<?= $product['avatar'] ?>" data-imagezoom="true" class="img-responsive" draggable="false"> </div>
                            </li>
                            <li data-thumb="images/si2.jpg" class="" style="width: 304px; float: left; display: block;">
                                <div class="thumb-image"> <img src="<?= $product['avatar'] ?>" data-imagezoom="true" class="img-responsive" draggable="false"> </div>
                            </li>
                            <li data-thumb="images/si.jpg" style="width: 304px; float: left; display: block;" class="clone" aria-hidden="true">
                                <div class="thumb-image"> <img src="<?= $product['avatar'] ?>" data-imagezoom="true" class="img-responsive" draggable="false"> </div>
                            </li></ul></div><ol class="flex-control-nav flex-control-thumbs"><li><img src="images/si.jpg" class="flex-active" draggable="false"></li><li><img src="<?= $product['avatar'] ?>" draggable="false" class=""></li><li><img src="<?= $product['avatar'] ?>" draggable="false" class=""></li></ol><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li><li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li></ul></div>
            </div>
            <div class="col-md-7 single-top-in">
                <div class="span_2_of_a1 simpleCart_shelfItem">
                    <h3><?= $product['title']?></h3>
                    <p class="in-para"> </p>
                    <div class="price_single">
                        <span class="reducedfrom item_price"><?= $product['sale']?></span>
                        <a href="#">click for offer</a>
                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Quick Overview:</h4>
                    <p class="quick_desc"> <?=$product['content'] ?></p>
                    <div class="wish-list">
                        <ul>
                            <li class="wish"><a href="#"><span class="glyphicon glyphicon-check" aria-hidden="true"></span>Add to Wishlist</a></li>
                            <li class="compare"><a href="#"><span class="glyphicon glyphicon-resize-horizontal" aria-hidden="true"></span>Add to Compare</a></li>
                        </ul>
                    </div>
                    <div class="quantity">
                        <div class="quantity-select">
                            <div class="entry value-minus">&nbsp;</div>
                            <div class="entry value"><span>1</span></div>
                            <div class="entry value-plus active">&nbsp;</div>
                        </div>
                    </div>
                    <!--quantity-->
                    <script>
                        $('.value-plus').on('click', function(){
                            var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
                            divUpd.text(newVal);
                        });

                        $('.value-minus').on('click', function(){
                            var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
                            if(newVal>=1) divUpd.text(newVal);
                        });
                    </script>
                    <!--quantity-->

                    <a href="#" class="add-to item_add hvr-skew-backward">Add to cart</a>
                    <div class="clearfix"> </div>
                </div>

            </div>
            <div class="clearfix"> </div>

        </div>
        <div class="col-md-3 product-bottom product-at">
            <!--categories-->
            <div class=" rsidebar span_1_of_left">
                <h4 class="cate">Categories</h4>
                <ul class="menu-drop">
                    <?php foreach (FunctionHelper::get_categories_by_parent_id() as $key => $value): ?>
                    <?php $children = FunctionHelper::get_categories_by_parent_id($value['id']); ?>
                    <?php if (!$children): ?>
                    <li class="item1"><a href="<?= Url::to(['site/view','category_slug' => $value['slug']]) ?>"><?= $value['title'] ?> </a>
                    </li>
                    <?php endif;?>
                    <?php if($children) :?>
                    <li class="item2"><a href="<?= Url::to(['site/view','category_slug' => $value['slug']]) ?>"><?= $value['title'] ?> </a>
                        <ul class="cute" style="display: none;">
                            <?php foreach ($children as $k => $va):?>
                            <li class="subitem1"><a href="<?= Url::to(['site/view','category_slug' => $va['slug']],true) ?>"><?=$va['title'] ?></a></li>
                            <?php endforeach;?>
                        </ul>
                    </li>
                    <?php endif; ?>
                    <?php endforeach;?>
                </ul>
            </div>
            <!--initiate accordion-->
            <script type="text/javascript">
                $(function() {
                    var menu_ul = $('.menu-drop > li > ul'),
                        menu_a  = $('.menu-drop > li > a');
                    menu_ul.hide();
                    menu_a.click(function(e) {
                        e.preventDefault();
                        if(!$(this).hasClass('active')) {
                            menu_a.removeClass('active');
                            menu_ul.filter(':visible').slideUp('normal');
                            $(this).addClass('active').next().stop(true,true).slideDown('normal');
                        } else {
                            $(this).removeClass('active');
                            $(this).next().stop(true,true).slideUp('normal');
                        }
                    });

                });
            </script>


    </div>


    <!--brand-->
    <div class="container">
        <div class="brand">
            <div class="col-md-3 brand-grid">
                <img src="images/ic.png" class="img-responsive" alt="">
            </div>
            <div class="col-md-3 brand-grid">
                <img src="images/ic1.png" class="img-responsive" alt="">
            </div>
            <div class="col-md-3 brand-grid">
                <img src="images/ic2.png" class="img-responsive" alt="">
            </div>
            <div class="col-md-3 brand-grid">
                <img src="images/ic3.png" class="img-responsive" alt="">
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--//brand-->
</div>
