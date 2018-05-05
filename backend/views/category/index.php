<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
/* @var $this yii\web\View */
/* @var $categorys common\models\Category */
/* @var $pages \yii\data\Pagination */

$this->title = Yii::t('app', 'Categories');
$this->params['breadcrumbs'][] = $this->title;
var_dump($pages); die;
?>
<div class="category-index">

    <section class="content-header">
        <h1>
            Category
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
                                <a href="<?= Url::to(['category/create']) ?>" class="btn btn-sm btn-success">
                                    <i class="fa fa-save"></i> New </a>
                            </div>
                        </div>

                    </div>
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Title</th>
                                <th>Describe</th>
                                <th>Released</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($categorys as $key => $value): ?>
                                <tr>

                                    <td>
                                        <?php if (isset($_GET['page'])):?>
                                            <?= $pages->defaultPageSize * ($_GET['page'] - 1) + $key + 1; ?>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?= $value['title'] ?>
                                    </td>
                                    <td>
                                        <?= $value['describe'] ?>
                                    </td>
                                    <td>
                                        <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-mini"
                                             style="border:none">
                                            <input data-id="<?= $value['id'] ?>" data-action="ajax/release"
                                                   data-table="category"
                                                   type="checkbox" <?= $value['released'] ? 'checked="checked"' : '' ?>
                                                   title="" name="switch-checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <a href="<?= Url::to(['category/update', 'id' => $value['id']]) ?>">
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
