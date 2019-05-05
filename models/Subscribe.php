<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace app\models;

use Yii;
use yii\base\Model;

class Subscribe extends \yii\db\ActiveRecord
{
    public $email;
    
    public function rules()
    {
        return [
            [['email'], 'required'],
            [['email'], 'email'],
            [['email'], 'trim'],            
        ];
    }
    public function save()
    {
        $sql = "INSERT INTO subscriber (id, email) VALUES (null, '{$this->email}')"; //curly brackets for security reason
        return Yii::$app->db->createCommand($sql)->execute();
    }
}


