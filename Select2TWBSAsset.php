<?php

namespace flyiing\widgets;

class Select2TWBSAsset extends \yii\web\AssetBundle
{

    public $sourcePath = '@bower/select2';

    public $css = [
        'select2-bootstrap.css',
    ];

    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'flyiing\widgets\Select2Asset',
    ];

}
