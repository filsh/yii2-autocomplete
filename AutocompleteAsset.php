<?php

namespace yii\autocomplete;

use \Yii;

class AutocompleteAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/filsh/jquery-autocomplete';

    public $js = [
        'src/jquery.autocomplete.js'
    ];
    
    public $css = [
        'content/styles.css'
    ];
    
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}