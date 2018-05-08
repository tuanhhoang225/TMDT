<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <div class="row" id="dangnhap">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <?php $form = ActiveForm::begin(); ?>
            <h2>Đăng nhập</h2>

            <div class="or top-20 text-center">
                Đăng nhập bằng username và mật khẩu
            </div>
            <div class="top-20">
                <div class="form-group">
                    <label for="user_email">Username</label>
                    <?= $form->field($model, 'username')->textInput(['maxlength' => true, 'autofocus' => 'autofocus'])->label(false) ?>
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
                    <input type="submit" name="commit" value="Đăng nhập" class="btn btn-block signin-btn">
                </div>
                <div class="forget">
                    <a href="">Quên mật khẩu?</a>
                </div>
                <div class="register">
                    Chưa có tài khoản?
                    <a href="signup">Đăng kí ngay</a>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>