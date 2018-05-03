<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = Yii::t('app', 'Chỉnh sửa: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="user-update">

    <section class="content-header">
    </section>
    <section class="content" style="margin-top: 30px;">
        <div class="row">
            <div class="col-md-12">
                <?= $this->render('_form_update', [
                    'model' => $model
                ]) ?>
            </div>
        </div>
    </section>

</div>
