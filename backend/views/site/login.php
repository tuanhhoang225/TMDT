<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;



$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-box" id="login-box">
    <div class="header"><?= Yii::t('app', 'Sign In') ?></div>

    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
    <div class="body bg-gray">
        <div class="form-group">
            <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => Yii::t('app', 'Username')])->label(Yii::t('app', 'Username')) ?>
        </div>
        <div class="form-group">
            <?= $form->field($model, 'password')->passwordInput(['placeholder' => Yii::t('app', 'Password')])->label(Yii::t('app', 'Password')) ?>
        </div>
        <div class="form-group">
            <?= $form->field($model, 'rememberMe')->checkbox()->label(Yii::t('app', 'Remember Me')) ?>
        </div>
    </div>
    <div class="footer">
        <button type="submit" class="btn bg-olive btn-block">
            <?= Yii::t('app', 'Sign me in') ?>
        </button>
    </div>
    <?php ActiveForm::end(); ?>
</div>
