<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\modules\admin\controllers;

use yii\web\Controller;
use app\models\Comment;

/**
 * Description of CommentController
 *
 * @author pc
 */
class CommentController extends Controller 
{
    public function actionIndex()
    {
        $comments = Comment::find()->orderBy('id desc')->all();
        
        return $this->render('index',['comments'=>$comments]);
    }
    public function actionDelete($id)
    {
        $comment = Comment::findOne($id);
        if($comment->delete())
        {
            return $this->redirect(['comment/index']);
        }
    }
    public function actionAllow($id)
    {
        $comment = Comment::findOne($id);
        if($comment->allow())
        {
            return $this->redirect(['index']);
        }
    }
    
    public function actionDisallow($id)
    {
        $comment = Comment::findOne($id);
        if($comment->disallow())
        {
            return $this->redirect(['index']);
        }
    }
}
