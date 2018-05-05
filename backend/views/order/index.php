<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use common\models\User;
use common\models\Product;
use common\helpers\FunctionHelper;
use common\models\District;
use common\models\Province;
use yii\widgets\LinkPager;
/* @var $this yii\web\View */
/* @var $order common\models\Order */
/* @var $orderdetail common\models\OrderDetail */
/* @var $pages \yii\data\Pagination */

$this->title = Yii::t('app', 'Đặt hàng');
$this->params['breadcrumbs'][] = $this->title;
function findUser($user_id)
{
    $user = User::findOne($user_id);
    return $user;
}

function findProvince($province_id)
{
    $province = Province::findOne($province_id);
    return $province;
}

function findDistrict($district_id)
{
    $district = District::findOne($district_id);
    return $district;
}

function findProduct($product_id)
{
    $product = Product::findOne($product_id);
    return $product;
}

function tong($a, $b){
    return $a+ $b;
}

?>

<div class="order-index">

    <section class="content-header">
        <h1>
            Order
            <small></small>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"></h3>
                        <div class="pull-right">
                            <div class="btn-group pull-right" style="margin-right: 10px">
                                <a class="btn btn-sm btn-twitter"><i class="fa fa-download"></i> Export</a>
                                <button type="button" class="btn btn-sm btn-twitter dropdown-toggle"
                                        data-toggle="dropdown">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="" target="_blank">All</a></li>
                                    <li><a href="" target="_blank">Current page</a></li>
                                    <li><a href="" target="_blank" class="export-selected">Selected rows</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <thead>
                            <tr>

                                <th>STT</th>
                                <th></th>
                                <th>Khách hàng</th>
                                <th>Địa chỉ</th>
                                <th>Ngày tạo hóa đơn</th>
                                <th>Chi phí</th>
                                <th>Phí ship</th>
                                <th>Tổng chi phí</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($order

                            as $key => $value): ?>
                            <tr>
                                <td>
                                    <?php if (isset($_GET['page'])):?>
                                        <?= $pages->defaultPageSize * ($_GET['page'] - 1) + $key + 1; ?>
                                    <?php endif; ?>
                                    <?php if (!isset($_GET['page'])):?>
                                        <?=$key + 1; ?>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a data-toggle="modal" data-target="#chitiet">Chi Tiết
                                    </a>
                                    <div class="modal fade" id="chitiet" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;
                                                    </button>
                                                    <h4 class="modal-title">Chi Tiết Đơn Hàng</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <table id="classTable" class="table table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th>STT</th>
                                                            <th>Sản phẩm</th>
                                                            <th>Số lượng</th>
                                                            <th>Giá</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php foreach (FunctionHelper::get_orderdetail_by_order($value['id'], 0) as $k => $val) : ?>
                                                            <tr>

                                                                <td>
                                                                    <?= $k + 1 ?>
                                                                </td>
                                                                <td>
                                                                    <?= findProduct($val['product_id'])['title'] ?>
                                                                </td>
                                                                <td>
                                                                    <?= $val['quantily'] ?>
                                                                </td>
                                                                <td>
                                                                    <?= FunctionHelper::get_cost_order_detail_by_product($val['id']) ?>
                                                                </td>

                                                            </tr>
                                                        <?php endforeach; ?>
                                                        </tbody>
                                                    </table>


                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                                        Close
                                                    </button>
                                                </div>
                                            </div>

                                        </div>

                                </td>
                                <td>
                                    <?= findUser($value['user_id'])['username'] ?>
                                </td>
                                <td>
                                    <?= $value['address_detail'] ?>,
                                    <?= findDistrict($value['district_id'])['ten'] ?>,
                                    <?= findProvince($value['province_id'])['ten'] ?>
                                </td>
                                <td>
                                    <?= $value['create_at'] ?>
                                </td>
                                <td>
                                    <?=  $a = FunctionHelper::get_total_cost_order_by_order_detail($value['id']) ?>
                                </td>
                                <td>
                                    <?= $b = FunctionHelper::get_shipping_by_province($value['province_id'])?>
                                </td>
                                <td>
                                    <?= tong($a,$b) ?>
                                </td>
                                <td>
                                    <a href="<?= Url::to(['order/update', 'id' => $value['id']]) ?>">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <?= Html::a(Yii::t('app', '<i class="fa fa-trash-o"></i>'), ['delete', 'id' => $value['id']], [
                                        'data' => [
                                            'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                                            'method' => 'post',
                                        ],
                                    ]) ?>
                                </td>
                            </tr>
                            </tbody>
                            <?php endforeach; ?>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="padding: 0 15px!important;margin-bottom: 20px;">
            <div class="col-md-12">
                <div class="product-pagination text-center">
                    <div class="header-subject">
                        <?php
                        echo LinkPager::widget(['pagination' => $pages]);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
