<?php

use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model common\models\Setting */

$this->title = Yii::t('app', 'Cập nhật cấu hình: ' . $model->title, [
    'nameAttribute' => '' . $model->title,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="setting-update">

    <section class="content-header">
        <h1>
            <?= Yii::t('app', 'Cập nhật cấu hình'); ?>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="<?= Url::to('site/index') ?>">
                    <i class="fa fa-home"></i>
                    <?= Yii::t('app', 'Home'); ?>
                </a>
            </li>
            <li>
                <a href="<?= Url::to(['setting/index']) ?>">
                    <?= Yii::t('app', 'Setting'); ?>
                </a>
            </li>
        </ol>
    </section>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
