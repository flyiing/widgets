<?php

namespace flyiing\widgets;

class TouchSpinAsset extends \yii\web\AssetBundle
{

    public $sourcePath = '@bower/bootstrap-touchspin/dist';

    public $js = [
        'jquery.bootstrap-touchspin.min.js',
    ];

    public $css = [
        'jquery.bootstrap-touchspin.min.css',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
