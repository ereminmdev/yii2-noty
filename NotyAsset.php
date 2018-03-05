<?php

namespace ereminmdev\yii2\noty;

use yii\web\AssetBundle;

/**
 * Class NotyAsset
 * @package ereminmdev\yii2\noty
 */
class NotyAsset extends AssetBundle
{
    public $sourcePath = '@vendor/needim/noty/lib';

    public $css = [
        'noty.css',
    ];

    public $js = [
        YII_DEBUG ? 'noty.js' : 'noty.min.js',
    ];
}
