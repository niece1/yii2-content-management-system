<?php

namespace app\models;

use Yii;
use app\models\Article;
use yii\data\Pagination;
/**
 * This is the model class for table "tag".
 *
 * @property int $id
 * @property string $title
 *
 * @property ArticleTag[] $articleTags
 */
class Tag extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tag';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    
    public function getArticles()
    {
        return $this->hasMany(Article::className(), ['id' => 'article_id'])
            ->viaTable('article_tag', ['tag_id' => 'id']);
    }
    public static function getAllTags()
    {
        return Tag::find()->all();
    }
    public static function getArticlesByTag($id)
    {
        // build a DB query to get all articles
        return Article::find()->joinWith('tags')->where(['tag_id' => $id])->all();
        
       
      
        
      
    }
}
