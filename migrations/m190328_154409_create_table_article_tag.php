<?php

use yii\db\Migration;

/**
 * Class m190328_154409_create_table_article_tag
 */
class m190328_154409_create_table_article_tag extends Migration
{
   
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

        $this->createTable('article_tag', [
            'id' => $this->primaryKey(),
            'article_id'=>$this->integer(),
            'tag_id'=>$this->integer()
        ]);
        // creates index for column `user_id`
        $this->createIndex(
            'tag_article_article_id',
            'article_tag',
            'article_id'
        );
        // add foreign key for table `user`
        $this->addForeignKey(
            'tag_article_article_id',
            'article_tag',
            'article_id',
            'article',
            'id',
            'CASCADE'
        );
        // creates index for column `user_id`
        $this->createIndex(
            'idx_tag_id',
            'article_tag',
            'tag_id'
        );
        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-tag_id',
            'article_tag',
            'tag_id',
            'tag',
            'id',
            'CASCADE'
        );

    }

    public function down()
    {
        
        $this->dropTable('article_tag');

    }
    
}
