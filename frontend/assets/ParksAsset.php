<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class ParksAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

        "/lixibox/css/main_page-41603f102546ee5f4abc48fb45d6ecdf3b936df4b3380df6e994e9bac29b94af.css",
        "/lixibox/css/main_page-2396999342c5e5e516d0fdcab76f9add59edea71d1db20c11b85645b61f22e51.css",
        "/lixibox/css/8cf388f984.css",

    ];
    public $js = [

        'js/notify.js',


    ];
    public $depends = [


    ];
}
