<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use common\models\Province;
use common\models\District;
/* @var $this yii\web\View */
/* @var $customers \common\models\User */

$this->title = Yii::t('app', 'Users');
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
                                <th>Username</th>
                                <th>Email</th>
                                <th>Họ tên</th>
                                <th>SĐT</th>
                                <th>Địa chỉ</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($customers as $key => $value): ?>
                                <tr>

                                    <td>
                                        <?= $key + 1 ?>
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
                                                        <h4 class="modal-title">Thông Tin Chi Tiết</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form role="form">
                                                            <?= $value['full_name']?>
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
                                        <?= $value['email'] ?>
                                    </td>
                                    <td>
                                        <?= $value['full_name'] ?>
                                    </td>
                                    <td>
                                        <?= $value['phone']?>
                                    </td>
                                    <td>
                                        <?= $value['address'] ?>,
                                        <?= findDistrict($value['district_id'])['ten']?>,
                                        <?= findProvince($value['province_id'])['ten']?>
                                    </td>
                                    <td>
                                        <a href="<?= Url::to(['customer/update', 'id' => $value['id']]) ?>">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <?= Html::a(Yii::t('app', '<i class="fa fa-trash-o"></i>'), ['delete', 'id' => $value['id']], [
                                            'data' => [
                                                'confirm' => Yii::t('app', 'Bạn có muốn xóa nhân viên này?'),
                                                'method' => 'post',
                                            ],
                                        ]) ?>
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
