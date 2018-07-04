<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
   public $css = [
        //'css/site.css',
		'css/elusive-icons.css',
		'css/elusive-icons.min.css',
		'css/normalize.css',
		'css/site.css',
		'css/skeleton.css',
		'css/style.css',
    ];
    public $js = [
		'js/sumteh-charts.css',
		'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js',
		'https://code.jquery.com/jquery-3.2.1.min.js',
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
