<?php

namespace app\models;

use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class SearchForm extends yii\base\Model
{
    public $keyword;
    
    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            ['keyword', 'trim'],
            ['keyword', 'required'],
            ['ketword', 'string', 'min' => 3],
        ];
    }
}
