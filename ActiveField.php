<?php

namespace yii\autocomplete;

use \Yii;
use yii\helpers\Html;
use yii\helpers\Json;

/**
 * Renders an autocomplete field.
 *
 * For example:
 *
 * ```php
 * $form->field($model, 'from', [
 *      'class' => 'yii\autocomplete\ActiveField',
 *      'inputOptions' => [
 *          'class' => 'form-control',
 *          'placeholder' => $model->getAttributeLabel('from')
 *      ]
 *  ])->autocompleteInput([
 *     'clientOptions' => [
 *          'serviceUrl' => 'service/autocomplete.ashx',
 *          'minChars' => 2,
 *          'lookup' =>  ['January', 'February', 'March', 'April', 'May']
 *      ]
 *  ])
 * ```
 */
class ActiveField extends \yii\widgets\ActiveField
{
    public function autocompleteInput($options = [])
    {
        AutocompleteAsset::register($this->form->getView());
        $this->registerScript(!empty($options['clientOptions']) ? $options['clientOptions'] : []);
        return parent::textInput();
    }
    
    protected function registerScript($options = [])
    {
        $configure = !empty($options) ? Json::encode($options) : '';
        if (!isset($options['id'])) {
            $options['id'] = Html::getInputId($this->model, $this->attribute);
        }
        $this->form->getView()->registerJs("jQuery('#{$options['id']}').autocomplete($configure);");
    }
}