<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;
/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class GaelAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://use.fontawesome.com/releases/v5.7.1/css/all.css',
        'https://fonts.googleapis.com/css?family=Exo+2|Great+Vibes|Lato|PT+Sans',
        'markup/slick/slick.css',
        'markup/slick/slick-theme.css',
        'markup/css/main.css'
       
    ];
    public $js = [
        'markup/js/modernizr.custom.js',
        'markup/slick/slick.js',
        'markup/js/sticky-kit.js',
        'markup/js/classie.js',
        'markup/js/hoverdir.js',
        'markup/js/charming.min.js',
        'markup/js/anime.min.js',
        'markup/js/toltips.js',
        'markup/js/main.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
       
    ];
    //Чтобы подключить скрипты в футере
    public $jsOptions = [
        'position'=>View::POS_END
    ];
}
