<?php

namespace flyiing\widgets;

class Select2Asset extends \yii\web\AssetBundle
{

    public $sourcePath = '@bower/select2';

    public $bootstrap = true;

    public $js = [
        'select2.min.js',
    ];

    public $css = [
        'select2.css',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
