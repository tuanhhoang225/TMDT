<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Setting */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="setting-form">


    <?php $form = ActiveForm::begin(); ?>
    <div class='row'>
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">
                        <?= Yii::t('app', 'Basic information') ?>
                    </h3>
                </div>
                <div class ="box-body">
                    <div class="form-group">
                        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'describe')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'content')->textarea(['rows' => 2]) ?>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'status')->checkbox(['class' => 'minimal none-action'])->label(false) ?>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'released')->checkbox(['class' => 'minimal none-action'])->label(false) ?>
                    </div>
                    <div class="form-group">
                        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
