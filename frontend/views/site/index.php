<?php

/* @var $this yii\web\View */

use common\helpers\FunctionHelper;

$this->title = 'Beauty Shop';
?>
<?= $this->render('banner') ?>
<div class="content">
    <div class="container">
        <h3 style="text-align: center">Trending Items</h3>
        <label class="line"></label>

        <div class="mid-popular">
            <?php foreach (FunctionHelper::get_product() as $key => $value): ?>
                <div class="col-md-3 item-grid1 simpleCart_shelfItem">
                    <div class=" mid-pop">
                        <div class="pro-img">
                            <img style="border: 1px solid #f1f1f1;width: 235px;height: 280px;"
                                 src="<?= $value['avatar'] ?>" class="img-responsive" alt="">
                            <div class="zoom-icon ">
                                <a class="picture" href="" rel="title">
                                    <i class="glyphicon glyphicon-search icon "></i>
                                </a>
                                <a href="">
                                    <i class="glyphicon glyphicon-menu-right icon"></i>
                                </a>
                            </div>
                        </div>
                        <div class="mid-1">
                            <div class="women">
                                <div class="women-top">
                                    <span>Women</span>
                                    <h6>
                                        <a href=""><?= $value['title'] ?></a>
                                    </h6>
                                </div>
                                <div class="img item_add">
                                    <img data-price="<?= '' ?>" data-id="<?= '' ?>" style="cursor: pointer;" src="/uploads/image/ca.png" alt="">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="mid-2">
                                <p><label>$100.00</label><em class="item_price">$70.00</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting">
                                        <div class="positioner">
                                            <div class="stars">
                                                <div class="ghost" style="width: 42.5px; display: none;"></div>
                                                <div class="colorbar" style="width: 42.5px;"></div>
                                                <div class="star_holder">
                                                    <div class="star star-0"></div>
                                                    <div class="star star-1"></div>
                                                    <div class="star star-2"></div>
                                                    <div class="star star-3"></div>
                                                    <div class="star star-4"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
