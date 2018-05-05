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
        "/lixibox/js/cc14aa76d7.js",
        "/lixibox/js/nr-1071.min.js",
        "/lixibox/js/sdk.js",
        "/lixibox/js/111444749607939.js",
        "/lixibox/js/fbevents.js",
        "/lixibox/js/stats.js",
        "/lixibox/js/onion.js",
        "/lixibox/js/main_page-dac1d60d05cf8e75aaac2baa094c99ab82393a053d47df64e7681126d2837c6e.js",
        "/lixibox/js/main_page-b2f4f165eef6ee3cf6308db92b89bcbb0db47fa5db56d9f53bbf5912a3285557.js",
        "/lixibox/js/common.js",
        "/lixibox/js/util.js",
        "/lixibox/js/map.js",
        "/lixibox/js/marker.js",


    ];
    public $depends = [


    ];
}
