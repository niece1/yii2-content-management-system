<?php

namespace app\models;

use Yii;
/**
 * Description of Search
 *
 * @author pc
 */
class Search
{
    public function articleSearch($keyword)
    {
        $sql = "SELECT * FROM article WHERE content LIKE '%$keyword%' LIMIT 10";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
}
