<?php

namespace app\widgets\Subscription;

use Yii;
use yii\base\Widget;
use app\models\Subscribe;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SubscriptionWidget extends Widget
{
    public function init()
    {
        return parent::init();
    }
    public function run() 
    {
        $model = new Subscribe();
        $formData = Yii::$app->request->post();
        
        if (Yii::$app->request->isPost) {
            $model->email = $formData['email'];
             if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('subscribeStatus', 'Subscribe completed!');
            } 
        }
    
     return $this->render('subscribe', [
            'model' => $model,
        ]);
    
    }
}