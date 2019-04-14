<?php

use yii\db\Migration;

/**
 * Class m190328_153146_create_table_article
 */
class m190328_153146_create_table_article extends Migration
{
    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

        $this->createTable('article', [
            'id' => $this->primaryKey(),
            'title'=>$this->string(),
            'description'=>$this->text(),
            'content'=>$this->text(),
            'date'=>$this->date(),
            'image'=>$this->string(),
            'viewed'=>$this->integer(),
            'user_id'=>$this->integer(),
            'status'=>$this->integer(),
            'category_id'=>$this->integer(),
        ]);

    }

    public function down()
    {
        $this->dropTable('article');

    }
    
}
