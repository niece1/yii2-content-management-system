<?php

use yii\db\Migration;

/**
 * Class m190328_153852_create_table_tag
 */
class m190328_153852_create_table_tag extends Migration
{
   
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

        $this->createTable('tag', [
            'id' => $this->primaryKey(),
            'title'=>$this->string()
        ]);

    }

    public function down()
    {
        
        $this->dropTable('tag');

    }
}
