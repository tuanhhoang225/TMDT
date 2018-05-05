<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use common\models\Province;
use common\models\District;
use common\helpers\FunctionHelper;
use yii\widgets\LinkPager;
/* @var $this yii\web\View */
/* @var $customers \common\models\User */
/* @var $pages \yii\data\Pagination*/
$this->title = Yii::t('app', 'Quản lý khách hàng');
$this->params['breadcrumbs'][] = $this->title;

function findProvince($id)
{
    if (($model = Province::findOne($id)) !== null) {
        return $model;
    }

}

function findDistrict($id)
{
    if (($model = District::findOne($id)) !== null) {
        return $model;
    }

}

?>
<div class="user-index">

    <section class="content-header">
        <h1>
            Khách Hàng
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
                                <button type="button" class="btn btn-sm btn-twitter dropdown-toggle" data-toggle="dropdown"
                                        aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="" target="_blank">All</a></li>
                                    <li><a href="" target="_blank">Current page</a></li>
                                    <li><a href="" target="_blank" class="export-selected">Selected rows</a></li>
                                </ul>
                            </div>
                            <div class="btn-group pull-right" style="margin-right: 10px">
                                <a href="<?= Url::to(['staff/create']) ?>" class="btn btn-sm btn-success">
                                    <i class="fa fa-save"></i> New </a>
                            </div>
                        </div>

                    </div>
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Khách hàng</th>
                                <th>Số lần đặt hàng</th>
                                <th>Tổng số tiền đặt hàng</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($customers as $key => $value): ?>
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
                                        <a data-toggle="modal" data-target="#myModal-<?= $value['id']?>" data-title="content">
                                            <?= $value['username'] ?>
                                        </a>
                                        <div id="myModal-<?= $value['id']?>" class="modal fade">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Thông Tin Khách Hàng</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form role="form">
                                                            <h5><b>Họ tên:</b></h5>
                                                            <?= $value['full_name']?>
                                                        </form>
                                                        <form role="form">
                                                            <h5><b>Email:</b></h5>
                                                            <?= $value['email']?>
                                                        </form>
                                                        <form role="form">
                                                            <h5><b>Điện thoại:</b></h5>
                                                            <?= $value['phone']?>
                                                        </form>
                                                        <form role="form">
                                                            <h5><b>Địa chỉ:</b></h5>
                                                            <?= $value['address'] ?>,
                                                            <?= findDistrict($value['district_id'])['ten']?>,
                                                            <?= findProvince($value['province_id'])['ten']?>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                    <td>
                                        <?= FunctionHelper::get_total_order_by_customer($value['id']) ?>
                                    </td>
                                    <td>
                                        <?= FunctionHelper::get_total_cost_by_customer($value['id']) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
