<?php

namespace app\models;

use yii\base\Model;
use app\models\Search;

/**
 * ContactForm is the model behind the contact form.
 */
class SearchForm extends Model
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
            ['keyword', 'string', 'min' => 3],
        ];
    }
    public function search()
    {
        if ($this->validate()) {
            $model = new Search();
            return $model->articleSearch($this->keyword);
        }
    }
}
