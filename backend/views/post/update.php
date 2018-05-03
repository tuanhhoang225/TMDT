<?php

use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model common\models\Post */

$this->title = Yii::t('app', 'Cập nhật tin tức: ' . $model->title, [
    'nameAttribute' => '' . $model->title,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Posts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="post-update">

    <section class="content-header">
        <h1>
            <?= Yii::t('app', 'Cập nhật tin tức'); ?>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="<?= Url::to('site/index') ?>">
                    <i class="fa fa-home"></i>
                    <?= Yii::t('app', 'Home'); ?>
                </a>
            </li>
            <li>
                <a href="<?= Url::to(['post/index']) ?>">
                    <?= Yii::t('app', 'Tin tức'); ?>
                </a>
            </li>
        </ol>
    </section>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
