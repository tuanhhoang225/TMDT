<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use common\models\District;
use common\models\Province;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="page-heading page-heading-md">
        <h2 class="header__main">
            <span class="breadcrumb hidden-xs">
                <i class="fa fa-archive"></i>
            </span>
            <span class="title">
                <a href="<?= Url::to(['index']) ?>"><?= Yii::t('app', 'Nhân viên') ?></a>
            </span>
        </h2>
    </div>
    <div class="row">

        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">
                        <?= Yii::t('app', 'Thông tin cơ bản') ?>
                    </h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <?= $form->field($model, 'full_name')->textInput(['maxlength' => true])->label(Yii::t('app', 'Họ Tên')) ?>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <?= $form->field($model, 'email')->textInput(['maxlength' => true])->label(Yii::t('app', 'Email')) ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <?= $form->field($model, 'phone')->textInput(['maxlength' => true])->label(Yii::t('app', 'SĐT')) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'username')->textInput(['maxlength' => true])->label(Yii::t('app', 'Username')) ?>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'password')->input('password')->label(Yii::t('app', 'Mật khẩu')) ?>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <?= $form->field($model, 'province_id')->dropDownList(
                                ArrayHelper::map(Province::find()->all(), 'id', 'ten'),
                                [
                                    'prompt' => '- ' . Yii::t('app', 'Chọn tỉnh') . ' -',
                                    'onchange' => '$.post( "' . Yii::$app->urlManager->createUrl('ajax/get-district-by-province-id?province_id=') . '"+$(this).val(), function( data ) {
                                      $( "select#district" ).html(data);
                                });'
                                ]
                            )->label(Yii::t('app', 'Tỉnh')) ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <?= $form->field($model, 'district_id')->dropDownList(
                                ArrayHelper::map(District::find()->where(['=', 'id_tinh', $model->district_id])->all(), 'id', 'ten'),
                                [
                                    'prompt' => Yii::t('app', 'Chọn huyện'),
                                    'id' => 'district'
                                ]
                            )->label(Yii::t('app', 'Huyện')) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'address')->textInput(['maxlength' => true])->label(Yii::t('app', 'Địa chỉ')) ?>
                    </div>
                </div>
                <div class="form-group" style="margin-right: 10px;">
                    <?= Html::submitButton('<i class="fa fa-check"></i> ' . Yii::t('app', 'Submit'), ['class' => 'btn btn-primary pull-right']) ?>
                </div>
            </div>
        </div>

    </div>

    <?php ActiveForm::end(); ?>

</div>
