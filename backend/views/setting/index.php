<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $settings common\models\Setting */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Cấu hình');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="setting-index">

    <section class="content-header">
        <div class="page-heading page-heading-md">
            <h2 class="header__main">
            <span class="breadcrumb hidden-xs">
                <i class="fa fa-wrench"></i>
            </span>
                <span class="title">
                <?= Yii::t('app', 'Cấu hình') ?>
            </span>
            </h2>
        </div>
    </section>

    <section class="content" style="margin-top: 30px;">
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
                            <div class="btn-group pull-right" style="margin-right: 10px">
                                <a href="<?= Url::to(['setting/create']) ?>" class="btn btn-sm btn-success">
                                    <i class="fa fa-save"></i> New
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <thead>
                            <tr>

                                <th>STT</th>
                                <th><?= Yii::t('app', 'Title') ?></th>
                                <th><?= Yii::t('app', 'Key') ?></th>
                                <th><?= Yii::t('app', 'Released') ?></th>
                                <th><?= Yii::t('app', 'Action') ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($settings as $key => $value): ?>
                                <tr>
                                    <td>
                                        <?= $key + 1 ?>
                                    </td>
                                    <td>
                                        <?= $value['title']?>
                                    </td>
                                    <td>
                                        <?= $value['key'] ?>
                                    </td>
                                    <td>
                                        <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-mini"
                                             style="border:none">
                                            <input data-id="<?= $value['id'] ?>" data-action="ajax/release"
                                                   data-table="setting"
                                                   type="checkbox" <?= $value['released'] ? 'checked="checked"' : '' ?>
                                                   title="" name="switch-checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <a href="<?= Url::to(['setting/update', 'id' => $value['id']]) ?>">
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
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
