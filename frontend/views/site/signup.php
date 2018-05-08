<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <?php $form = ActiveForm::begin(); ?>
            <h2>Đăng ký</h2>

            <div class="or top-20 text-center">
                Đăng nhập bằng email và mật khẩu
            </div>
            <div class="top-20">
                <div class="form-group">
                    <label for="user_name">Họ Tên</label>
                    <?= $form->field($model, 'full_name')->textInput(['maxlength' => true, 'autofocus' => 'autofocus'])->label(false) ?>
                </div>
                <div class="form-group">
                    <label for="user_name">Username</label>
                    <?= $form->field($model, 'username')->textInput(['maxlength' => true, 'autofocus' => 'autofocus'])->label(false) ?>
                </div>
                <div class="form-group">
                    <label for="user_email">Email</label>
                    <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'autofocus' => 'autofocus'])->label(false) ?>
                </div>
                <div class="form-group">
                    <label for="user_password">Mật khẩu</label>
                    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true])->label(false) ?>
                </div>
                <div class="checkbox" style="width:150px">
                    <label>
                        <?= $form->field($model, 'rememberMe')->checkbox()->label('Nhớ đăng nhập') ?>
                    </label>
                </div>
                <div class="clearfix"></div>
                <div class="top10">
                    <input type="submit" name="commit" value="Đăng ký" class="btn btn-block signin-btn">
                </div>
                <div class="register">
                    Đã có tài khoản
                    <a href="login">Đăng nhập</a>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
