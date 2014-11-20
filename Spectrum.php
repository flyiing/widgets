<?php

namespace flyiing\widgets;

use yii\helpers\Html;

class Spectrum extends \flyiing\widgets\base\JQueryInputWidget
{

    public function init()
    {
        parent::init();
        if(empty($this->pluginOptions['preferredFormat']))
            $this->pluginOptions['preferredFormat'] = 'rgb';
        SpectrumAsset::register($this->view);
    }

    public function run()
    {
        echo Html::input('hidden', $this->name, $this->value, $this->options);
        $this->registerPlugin('spectrum');
    }

}
