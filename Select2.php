<?php

namespace flyiing\widgets;

use yii\helpers\Html;

class Select2 extends \flyiing\widgets\base\JQueryInputWidget
{

    /**
     * @var array Список опций селектора.
     */
    public $items = [];

    /**
     * @var bool Использовать ли оформление Bootstrap 3.
     */
    public $bootstrap = true;

    protected $_hidden;

    public function init()
    {
        parent::init();
        $this->_hidden = isset($this->pluginOptions['data']) ||
            isset($this->pluginOptions['query']) ||
            isset($this->pluginOptions['ajax']) ||
            isset($this->pluginOptions['tags']);
        $this->registerAssets();
    }

    public function run()
    {
        if ($this->_hidden) {
            echo Html::input('hidden', $this->name, $this->value);
        } else {
            echo Html::dropDownList($this->name, $this->value, $this->items, $this->options);
        }
        $this->registerPlugin('select2');
    }

    public function registerAssets()
    {
        Select2Asset::register($this->view);
        if ($this->bootstrap)
            Select2TWBSExtAsset::register($this->view);
        $css = <<<CSS
        .bigdrop .select2-results {
            max-height: 500px;
        }
CSS;
        $this->view->registerCss($css);
    }

}
