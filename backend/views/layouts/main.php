<?php

/* @var $this \yii\web\View */

/* @var $content string */

use backend\assets\AdminAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use common\models\User;
use yii\web\NotFoundHttpException;

$user = null;

if (!Yii::$app->user->isGuest) {
    $user = findModel(Yii::$app->user->identity->getId());
}

function findModel($id)
{
    if (($model = User::findOne($id)) !== null) {
        return $model;
    } else {
        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
AdminAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="skin-blue sidebar-mini">
<?php $this->beginBody() ?>
<div class="wrapper">
    <header class="main-header">
        <a href="" class="logo">
            <span class="logo-mini"><b>B</b>eauty</span>
            <span class="logo-lg"><b>Beauty Shop</b></span>
        </a>
        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">


                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="hidden-xs"><?= $user['username']?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">

                                <p>
                                    <?= $user['username'] ?>
                                    <small><?= $user['full_name']?></small>
                                </p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?= Url::to(['site/logout']) ?>" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class="main-sidebar">
        <section class="sidebar">

            <ul class="sidebar-menu" data-widget="tree">
                <li>
                    <a href="<?= Url::to(['../'])?>">
                        <i class="fa fa-desktop"></i> <span>Xem website</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>
                <li>
                    <a href="<?= Url::to(['site/index']) ?>">
                        <i class="fa fa-home"></i>
                        <span>Trang Chủ</span>
                        <span class="pull-right-container">
                    </a>
                </li>
                <li>
                    <a href="<?= Url::to(['category/index']) ?>">
                        <i class="fa fa-folder"></i> <span>Quản lý danh mục</span>
                        <span class="pull-right-container">
                        </span>
                    </a>
                </li>
                <li>
                    <a href="<?= Url::to(['post/index']) ?>">
                        <i class="fa fa-list-ul"></i>
                        <span>Quản lý bài viết</span>
                        <span class="pull-right-container">
                        </span>
                    </a>
                </li>
                <li>
                    <a href="<?= Url::to(['product/index']) ?>">
                        <i class="fa fa-product-hunt"></i>
                        <span>Quản lý sản phẩm</span>
                        <span class="pull-right-container">
                        </span>
                    </a>
                </li>
                <li>
                    <a href="<?= Url::to(['order/index']) ?>">
                        <i class="fa fa-book"></i>
                        <span>Quản lý đặt hàng</span>
                        <span class="pull-right-container">
                        </span>
                    </a>
                </li>
                <?php if ($user['permission'] == User::RULE_SENIOR): ?>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-cogs"></i> <span>Cài đặt nâng cao</span>
                        <span class="pull-right-container">
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?=Url::to(['page/index']) ?>"><i class="fa fa-circle-o"></i> Quản lý trang</a></li>
                        <li><a href="<?= Url::to(['staff/index']) ?>"><i class="fa fa-circle-o"></i> Quản lý nhân viên</a>
                        </li>
                    </ul>
                </li>
                <?php endif;?>

            </ul>
        </section>
    </aside>
    <div class="content-wrapper">
        <?= $content ?>
    </div>

    <div id="loader" class="opacity loader">
        <div class="loader-inner ball-scale-ripple-multiple vh-center">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>
</div>
<script>
    var base = "<?= Yii::$app->getHomeUrl() ?>";
    console.log(base);
</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
