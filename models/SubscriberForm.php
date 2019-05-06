<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Description of SubscribeForm
 *
 * @author pc
 */
class SubscriberForm extends Model
{
    public $email;
    
     public function rules()
    {
        return [
            [['email'], 'required'],
            [['email'], 'email'],
            [['email'], 'trim'],
            [['email'], 'unique', 'targetClass'=>'app\models\Subscriber', 'targetAttribute'=>'email']           
        ];
    }
    
    public function saveEmail()
    {
      /*  $sql = "INSERT INTO subscriber (id, email) VALUES (null, '{$this->email}')"; //curly brackets for security reason
        return Yii::$app->db->createCommand($sql)->execute();*/
        $subscriber = new Subscriber();
        $subscriber->email = $this->email;
        return $subscriber->save();
    }
}
