<?php

namespace yii\autocomplete;

class AutocompleteAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/filsh/jquery-autocomplete';

    public $js = [
        'src/jquery.autocomplete.js'
    ];
    
    public $css = [];
    
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}