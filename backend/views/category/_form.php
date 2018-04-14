<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Category;
use yii\helpers\ArrayHelper;
use common\models\Page;
/* @var $this yii\web\View */
/* @var $model common\models\Category */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="category-form">

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

                        <?=$form->field($model, 'page_id')->dropDownList(
                            ArrayHelper::map(Page::find()->where(['=', 'released', 1])->all(),'id','title'))?>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'describe')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'sequence')->textInput() ?>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'content')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'status')->checkbox(['class' => 'minimal none-action'])->label(false) ?>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'released')->checkbox(['class' => 'minimal none-action'])->label(false) ?>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'parent_id')->dropDownList(
                            ArrayHelper::map(Category::find()->all(), 'id', 'title'),
                            [
                                'prompt' => 'Select page'
                            ]
                        ) ?>
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
