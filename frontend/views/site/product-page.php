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
/** @var $product \common\models\Product; */

$this->title = $category['title'];

$this->registerMetaTag([
    'property' => 'og:title',
    'content' => $product['title']
]);

$this->registerMetaTag([
    'property' => 'og:description',
    'content' => $product['description']
]);

$this->registerMetaTag([
    'property' => 'og:url',
    'content' => Url::to(['site/view'], true)
]);

$this->registerMetaTag([
    'property' => 'og:image',
    'content' => Url::to(['site/index'], true)
])

?>
<div class="banner-top">
    <div class="container">
        <h1><?= $category['title']?></h1>
        <em></em>
        <h2><a href="<?= Url::to(['site/index']) ?>">Home</a><label>/</label><?= $category['title']?></h2>
    </div>
</div>
<div class="product">
    <div class="container">
        <div class="col-md-9">
            <?php foreach (FunctionHelper::get_product_by_category($category['id']) as $key => $value): ?>
                <div class="mid-popular">
                    <div class="col-md-4 item-grid1 simpleCart_shelfItem">
                        <div class=" mid-pop">
                            <div class="pro-img">
                                <img src="" class="img-responsive" alt="">
                                <div class="zoom-icon ">
                                    <a class="picture" href="" rel="title"><i
                                                class="glyphicon glyphicon-search icon "></i></a>
                                    <a href="<?= Url::to(['site/view','category_slug' => $category['slug'],'content_slug' => $value['slug']],true) ?>"><i class="glyphicon glyphicon-menu-right icon"></i></a>
                                </div>
                            </div>
                            <div class="mid-1">
                                <div class="women">
                                    <div class="women-top">

                                        <h6><a href=""><?= $value['title'] ?></a></h6>
                                    </div>
                                    <div class="img item_add">
                                        <a href="#"><img src="<?= $value['avatar'] ?>" alt=""
                                                         style="width: 240px; height: 243px"></a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="mid-2">
                                    <p><label><?= $value['price'] . "đ" ?></label><em
                                                class="item_price"><?= $value['sale'] . "đ" ?></em></p>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
