<?php

namespace flyiing\widgets;

class SpectrumAsset extends \yii\web\AssetBundle
{

    public $sourcePath = '@bower/spectrum';

    public $js = [
        'spectrum.js',
    ];

    public $css = [
        'spectrum.css',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
