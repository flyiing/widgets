<?php

namespace flyiing\widgets;

class TouchSpin extends \flyiing\widgets\base\JQueryInputWidget
{

    public function init()
    {
        parent::init();
        TouchSpinAsset::register($this->view);
    }

    public function run()
    {
        echo Html::textInput($this->name, $this->value, $this->options);
        $this->registerPlugin('TouchSpin');
    }

}
