<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'statics/Font-Awesome/css/font-awesome.min.css',
        'statics/css/etalage.css',
        'statics/css/megamenu.css',
        'statics/css/style.css',
    ];
    public $js = [
        'statics/js/jquery-1.11.1.min.js',
        'statics/js/jquery-ui.min.js',
        'statics/js/jquery.etalage.min.js',
        'statics/js/jquery.jscrollpane.min.js',
        'statics/js/megamenu.js',
        'statics/js/menu_jquery.js',
        'statics/js/simpleCart.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
