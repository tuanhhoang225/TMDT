<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Category;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model common\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class='row'>
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">
                        <?= Yii::t('app', 'Basic information') ?>
                    </h3>
                </div>
                <div class="box-body">
                    <div class="form-group">

                        <?=$form->field($model, 'category_id')->dropDownList(
                            ArrayHelper::map(Category::find()->where(['=', 'released', 1])->all(),'id','title'))?>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'images[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'price')->textInput() ?>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'amount')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'sale')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'content')->textInput(['maxlength' => true]) ?>
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
