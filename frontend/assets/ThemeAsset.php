<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class ThemeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'theme/css/chocolat.css',
        'theme/css/flexslider.css',
        'theme/css/form.css',
        'theme/css/jstarbox.css',
        'theme/css/popuo-box.css',
        'theme/css/style.css',
        'theme/css/style4.css'
    ];
    public $js = [
        'theme/js/jquery.min.js',
        'theme/js/bootstrap.min.js',
        'theme/js/classie.js',
        'theme/js/imagezoom.js',
        'theme/js/jquery.chocolat.js',
        'theme/js/jquery.flexslider.js',
        'theme/js/jquery.magnific-popup.js',
        'theme/js/jstarbox.js',
        'theme/js/modernizr.custom.72111.js',
        'theme/js/simpleCart.min.js',
        'theme/js/uisearch.js',
        'js/setting.js'

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
