<?php

namespace flyiing\widgets;

class AjaxSubmitAsset extends \yii\web\AssetBundle
{

    public $sourcePath = '@flyiing/widgets/assets';

    public $js = [
        'js/ajaxSubmit.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
