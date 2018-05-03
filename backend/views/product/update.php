<?php

use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model common\models\Product */

$this->title = Yii::t('app', 'Cập nhật sản phẩm: ' . $model->title, [
    'nameAttribute' => '' . $model->title,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Products'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="product-update">

    <section class="content-header">
        <h1>
            <?= Yii::t('app', 'Cập nhật sản phẩm'); ?>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="<?= Url::to('site/index') ?>">
                    <i class="fa fa-home"></i>
                    <?= Yii::t('app', 'Home'); ?>
                </a>
            </li>
            <li>
                <a href="<?= Url::to(['product/index']) ?>">
                    <?= Yii::t('app', 'Products'); ?>
                </a>
            </li>
        </ol>
    </section>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
