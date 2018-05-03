<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/loaders.css',
        'theme/bootstrap/dist/css/bootstrap.min.css',
        'theme/font-awesome/css/font-awesome.min.css',
        'theme/dist/css/AdminLTE.min.css',
        'theme/dist/css/skins/_all-skins.min.css',
        'theme/plugins/iCheck/all.css',
        'bootstrap/css/bootstrap-switch.min.css'
    ];
    public $js = [
        'js/ckeditor.js',
        'theme/jquery-ui/jquery-ui.min.js',
        'theme/plugins/iCheck/icheck.min.js',
        'theme/dist/js/adminlte.min.js',
        'bootstrap/js/bootstrap-switch.min.js',
        'theme/bootstrap/dist/js/bootstrap.min.js',

        'js/notify.js',
        'js/setting.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
