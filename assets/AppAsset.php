<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
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
        // 'template/css/bootstrap.min.css',
        // 'template/css/core.css',
        // 'template/css/components.css',
        // 'template/css/icons.css',
        // 'template/css/pages.css',
        // 'template/css/responsive.css',
        'css/site.css',
        'template/css/bootstrap.min.css',
        'template/css/owl.carousel.min.css',
        'template/css/slicknav.css',
        'template/css/animate.min.css',
        'template/css/magnific-popup.css',
        'template/css/fontawesome-all.min.css',
        'template/css/themify-icons.css',
        'template/css/slick.css',
        'template/css/nice-select.css',
        'template/css/style.css',
    ];
    public $js = [
        // 'template/js/bootstrap.min.js',
        // 'template/js/jquery.min.js',
        // 'template/js/detect.js',
        // 'template/js/fastclick.js',
        // 'template/js/jquery.slimscroll.js',
        // 'template/js/jquery.blockUI.js',
        // 'template/js/waves.js',
        // 'template/js/wow.min.js',
        // 'template/js/jquery.nicescroll.js',
        // 'template/js/jquery.scrollTo.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
