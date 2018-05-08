<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use common\helpers\FunctionHelper;
use frontend\assets\ParksAsset;

ParksAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=0"/>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="icon" href=""
          type="image/x-icon">

    <?= $this->render('link') ?>
</head>
<body class="no-touch not-mobile" data-action="index" data-controller="shoppings" style="">
<?php $this->beginBody() ?>
<?= $this->render('header') ?>
<?= $content ?>
<?= $this->render('footer') ?>
<script>
    var frontend = "<?= Yii::$app->getHomeUrl() ?>";
    console.log(frontend);
</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
