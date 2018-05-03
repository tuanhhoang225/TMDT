<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use common\models\Product;
/* @var $this yii\web\View */
/* @var $orderdetail common\models\OrderDetail */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Order Details');
$this->params['breadcrumbs'][] = $this->title;
function findProduct($product_id){
    $product = Product::findOne($product_id);
    return $product;
}
?>
<div class="order-detail-index" id="chitiet">

    <section class="content-header">
        <h1>
            Order Detail        <small></small>
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
                                <button type="button" class="btn btn-sm btn-twitter dropdown-toggle" data-toggle="dropdown">
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
                                <th>Sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($orderdetail as $key => $value ): ?>
                                <tr>

                                    <td>
                                        <?= $key +1 ?>
                                    </td>
                                    <td>
                                        <?= findProduct($value['product_id'])['title']?>
                                    </td>
                                    <td>
                                        <?=$value['quantily'] ?>
                                    </td>
                                    <td>
                                        <?= $value['cost'] ?>
                                    </td>
                                    <td>
                                        <a href="<?= Url::to(['product/update', 'id' => $value['id']]) ?>">
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
                            <?php endforeach;?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
