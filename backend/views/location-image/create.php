<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\LocationImage */

$this->title = Yii::t('app', 'Create Location Image');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Location Images'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="location-image-create">

    <section class="content-header">
        <h1>
            Photo Location       <small></small>
        </h1>
    </section>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
