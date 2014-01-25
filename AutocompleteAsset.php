<?php

namespace yii\autocomplete;

class AutocompleteAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/filsh/jquery-autocomplete';

    public $js = [
        'dist/jquery.autocomplete.min.js'
    ];
    
    public $css = [];
    
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}