<?php

namespace flyiing\widgets;

class Html extends \yii\helpers\BaseHtml
{

    public static function name2id($name)
    {
        return str_replace(['[]', '][', '[', ']', ' '], ['', '-', '-', '', '-'], $name);
    }

}
