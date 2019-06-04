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
    public function articleSearch()
    {
        $sql = "SELECT * FROM article WHERE content LIKE '%$keyword%' LIMIT 20";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
}
