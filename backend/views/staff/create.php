<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = Yii::t('app', 'Thêm nhân viên');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="content-header">
</section>
<section class="content" style="margin-top: 30px;">
    <div class="row">
        <div class="col-md-12">
            <?= $this->render('_form', [
                'model' => $model
            ]) ?>
        </div>
    </div>
</section>
