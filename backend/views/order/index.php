<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use common\models\User;
use common\models\Product;
use common\helpers\FunctionHelper;

/* @var $this yii\web\View */
/* @var $order common\models\Order */
/* @var $orderdetail common\models\OrderDetail */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Orders');
$this->params['breadcrumbs'][] = $this->title;
function findUser($user_id)
{
    $user = User::findOne($user_id);
    return $user;
}

function findProduct($product_id)
{
    $product = Product::findOne($product_id);
    return $product;
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
                                <th>Khach hang</th>
                                <th>Dia chi</th>
                                <th>Ngày tạo hóa đơn</th>
                                <th>Tổng</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($order as $key => $value): ?>
                            <tr>
                                <td>
                                    <?= $key + 1 ?>
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
                                                    <h4 class="modal-title">Chi Tiết</h4>
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
                                                                    <?= $key + 1 ?>
                                                                </td>
                                                                <td>
                                                                    <?= findProduct($val['product_id'])['title'] ?>
                                                                </td>
                                                                <td>
                                                                    <?= $val['quantily'] ?>
                                                                </td>
                                                                <td>
                                                                    <?= $val['cost'] ?>
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
                                <?= $value['address_detail'] ?>
                            </td>
                            <td>
                                <?= $value['create_at'] ?>
                            </td>
                            <td>
                                <?= $value['total_amount'] ?>
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
    </section>
</div>
