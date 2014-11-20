<?php

namespace flyiing\widgets;

class Select2TWBSExtAsset extends \yii\web\AssetBundle
{

    public $sourcePath = '@bower/select2-bootstrap-css';

    public $css = [
        'select2-bootstrap.css',
    ];

    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'flyiing\widgets\Select2Asset',
        'flyiing\widgets\Select2TWBSAsset',
    ];

}
