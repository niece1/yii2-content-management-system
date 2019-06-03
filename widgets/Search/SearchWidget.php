<?php

namespace app\widgets\Search;

use Yii;
use yii\base\Widget;
use app\models\SearchForm;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SearchWidget extends Widget
{
    public function init()
    {
        return parent::init();
    }
    public function run() 
    {      
    
     return $this->render('search', [
            'model' => $model,
        ]);
    
    }
}