<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Category;

/* @var $this yii\web\View */
/* @var $model common\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class='row'>
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">
                        <?= Yii::t('app', 'Basic information') ?>
                    </h3>
                </div>
                <div class ="box-body">
                    <div class="form-group">

                        <?=$form->field($model, 'category_id')->dropDownList(
                            ArrayHelper::map(Category::find()->where(['=', 'released', 1])->all(),'id','title'))?>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title"><?= Yii::t('app', 'Nội dung sản phẩm') ?></h3>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <?= $form->field($model, 'content')->textarea(['id' => 'content']) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'images[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'date')->textInput(['maxlength' => true]) ?>
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
